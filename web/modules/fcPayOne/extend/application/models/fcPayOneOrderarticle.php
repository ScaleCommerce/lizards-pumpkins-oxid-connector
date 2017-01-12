<?php

/** 
 * PAYONE OXID Connector is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PAYONE OXID Connector is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with PAYONE OXID Connector.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.payone.de
 * @copyright (C) Payone GmbH
 * @version   OXID eShop CE
 */
 
class fcPayOneOrderarticle extends fcPayOneOrderarticle_parent {
    
    /**
     * Helper object for dealing with different shop versions
     * @var object
     */
    protected $_oFcpoHelper = null;
    

    /**
     * init object construction
     * 
     * @return null
     */
    public function __construct() {
        parent::__construct();
        $this->_oFcpoHelper = oxNew('fcpohelper');
    }
    
    
    /**
     * Overrides standard oxid save method
     * 
     * Saves order article object. If saving succeded - updates
     * article stock information if oxOrderArticle::isNewOrderItem()
     * returns TRUE. Returns saving status
     *
     * @return bool
     */
    public function save($oOrder = false, $blFinishingSave = true) {
        $oConfig = $this->_oFcpoHelper->fcpoGetConfig();
        $blPresaveOrder = (bool)$oConfig->getConfigParam('blFCPOPresaveOrder');
        
        $blUseParentOrderMethod = (
            $oOrder === false ||
            $blPresaveOrder === false || 
            $oOrder->isPayOnePaymentType() === false
        );
        
        if( $blUseParentOrderMethod ) {
            return parent::save();
        }
        
        $blBefore = $this->_fcpoGetBefore($blFinishingSave);
        
        // ordered articles
        if ( $blBefore === false || ( $blSave = oxBase::save() ) && $this->isNewOrderItem() ) {
            if ( $oConfig->getConfigParam( 'blUseStock' ) ) {
                if ($oConfig->getConfigParam( 'blPsBasketReservationEnabled' )) {
                    $this->getSession()
                            ->getBasketReservations()
                            ->commitArticleReservation(
                                   $this->oxorderarticles__oxartid->value,
                                   $this->oxorderarticles__oxamount->value
                           );
                } else {
                    $blReduceStockBefore = !(bool)$oConfig->getConfigParam('blFCPOReduceStock');
                    if(($blReduceStockBefore == true && $blBefore == true) || ($blReduceStockBefore == false && $blBefore == false)) {
                        $this->updateArticleStock( $this->oxorderarticles__oxamount->value * (-1), $oConfig->getConfigParam( 'blAllowNegativeStock' ) );
                    }
                }
            }

            if($this->_oFcpoHelper->fcpoGetIntShopVersion() >= 4600) {
                // seting downloadable products article files
                $this->_setOrderFiles();
            }

            // marking object as "non new" disable further stock changes
            $this->setIsNewOrderItem( false );
        }

        return $blSave;
    }
    
    
    /**
     * Deletes order article object. If deletion succeded - updates
     * article stock information. Returns deletion status
     *
     * @param string $sOXID Article id
     *
     * @return bool
     */
    public function delete( $sOXID = null) {
        $oSession   = $this->_oFcpoHelper->fcpoGetSession();
        $oBasket    = $oSession->getBasket();
        $sPaymentId = $oBasket->getPaymentId();
        $oConfig    = $this->_oFcpoHelper->fcpoGetConfig();
        
        if($sPaymentId) {
            $oPayment = oxNew('oxpayment');
            $oPayment->load($sPaymentId);
            if($this->_fcpoIsPayonePaymentType($oPayment->getId()) === false) {
                return parent::delete($sOXID);
            }
        }
        
        $blDelete = $this->_fcpoProcessBaseDelete($sOXID);
        if ($blDelete) {
            $blReduceStockBefore = !(bool)$oConfig->getConfigParam('blFCPOReduceStock');
            if ( $this->oxorderarticles__oxstorno->value != 1 && $blReduceStockBefore !== false ) {
                $this->updateArticleStock( $this->oxorderarticles__oxamount->value, $oConfig->getConfigParam('blAllowNegativeStock') );
            }
        }
        
        return $blDelete;
    }
    

    /**
     * Processes the base version fo delete method and returns its result
     * 
     * @param string $sOXID
     * @return mixed
     */
    protected function _fcpoProcessBaseDelete($sOXID) {
        return oxBase::delete($sOXID);
    }


    /**
     * Returns wether payone order should be pre-saved
     * 
     * @param bool $blFinishingSave
     * @retur bool
     */
    protected function _fcpoGetBefore($blFinishingSave) {
        $oConfig                = $this->_oFcpoHelper->fcpoGetConfig();
        $blPresaveOrder         = (bool)$oConfig->getConfigParam('blFCPOPresaveOrder');
        $blReduceStockBefore    = !(bool)$oConfig->getConfigParam('blFCPOReduceStock');
        
        // evaluate answer
        $blBefore = (
            $this->_oFcpoHelper->fcpoGetRequestParameter('fcposuccess') && 
            $this->_oFcpoHelper->fcpoGetRequestParameter('refnr') || 
            ($blFinishingSave === true && $blPresaveOrder === true && $blReduceStockBefore === false)
        );
                
        return $blBefore;
    }

    
    /**
     * Returns wether given paymentid is of payone type
     * 
     * @param string $sId
     * @param bool $blIFrame
     * @return bool
     */
    protected function _fcpoIsPayonePaymentType($sId, $blIFrame = false) {
        if ($blIFrame) {
            $blReturn = fcPayOnePayment::fcIsPayOnePaymentType($sId);
        } else {
            $blReturn = fcPayOnePayment::fcIsPayOneIframePaymentType($sId);
        }

        return $blReturn;
    }

}
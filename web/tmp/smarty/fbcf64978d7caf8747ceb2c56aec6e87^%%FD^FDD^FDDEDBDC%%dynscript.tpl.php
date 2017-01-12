<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:35
         compiled from widget/dynscript.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'widget/dynscript.tpl', 1, false),array('function', 'math', 'widget/dynscript.tpl', 57, false),array('modifier', 'cat', 'widget/dynscript.tpl', 61, false),array('modifier', 'trim', 'widget/dynscript.tpl', 73, false),array('modifier', 'default', 'widget/dynscript.tpl', 107, false),array('modifier', 'parse_url', 'widget/dynscript.tpl', 142, false),array('modifier', 'oxNew', 'widget/dynscript.tpl', 145, false),array('modifier', 'strtotime', 'widget/dynscript.tpl', 182, false),array('modifier', 'date_format', 'widget/dynscript.tpl', 203, false),)), $this); ?>
<?php echo smarty_function_oxscript(array(), $this);?>


<?php $this->assign('oConfig', $this->_tpl_vars['oViewConf']->getConfig()); ?>

<script type="text/javascript"><?php echo 'var sBaseUrl = \''; ?><?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?><?php echo '\';var sActCl = \''; ?><?php echo $this->_tpl_vars['oViewConf']->getTopActiveClassName(); ?><?php echo '\';'; ?>
</script>

<?php $this->assign('sGATrackingId', $this->_tpl_vars['oViewConf']->getViewThemeParam('sGATrackingId')); ?>
<?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('blUseGAPageTracker') && $this->_tpl_vars['sGATrackingId']): ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '<?php echo $this->_tpl_vars['sGATrackingId']; ?>
');
                <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('blGAAnonymizeIPs')): ?>
            ga('set', 'anonymizeIp', true);
        <?php endif; ?>
        ga('send', 'pageview');
    </script>
<?php endif; ?>

<?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('blUseGAEcommerceTracking') && $this->_tpl_vars['sGATrackingId'] && $this->_tpl_vars['oViewConf']->getTopActiveClassName() == 'thankyou'): ?>
    <?php $this->assign('oOrder', $this->_tpl_vars['oView']->getOrder()); ?>

    <?php if ($this->_tpl_vars['oOrder']): ?>
        <?php if (! $this->_tpl_vars['oViewConf']->getViewThemeParam('blUseGAPageTracker')): ?>
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', '<?php echo $this->_tpl_vars['sGATrackingId']; ?>
');
                                <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('blGAAnonymizeIPs')): ?>
                    ga('set', 'anonymizeIp', true);
                <?php endif; ?>
            </script>
        <?php endif; ?>


        <script>
            ga( 'require', 'ecommerce' );

            ga( 'ecommerce:addTransaction', {
                'id': '<?php echo $this->_tpl_vars['oOrder']->oxorder__oxordernr->value; ?>
',           // Transaction ID. Required.
                'affiliation': '<?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxname->value; ?>
', // Affiliation or store name.
                'revenue': '<?php echo $this->_tpl_vars['oOrder']->oxorder__oxtotalordersum->value; ?>
', // Grand Total.
                'shipping': '<?php echo $this->_tpl_vars['oOrder']->oxorder__oxdelcost->value; ?>
',     // Shipping.
                'tax': '<?php echo smarty_function_math(array('equation' => "x+y",'x' => $this->_tpl_vars['oOrder']->oxorder__oxartvatprice1->value,'y' => $this->_tpl_vars['oOrder']->oxorder__oxartvatprice2->value), $this);?>
' // Tax.
            });

            <?php $_from = $this->_tpl_vars['oOrder']->getOrderArticles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oOrderArticle']):
?>
                <?php $this->assign('sArticleName', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oOrderArticle']->oxorderarticles__oxtitle->value)) ? $this->_run_mod_handler('cat', true, $_tmp, ' ') : smarty_modifier_cat($_tmp, ' ')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oOrderArticle']->oxorderarticles__oxselvariant->value) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oOrderArticle']->oxorderarticles__oxselvariant->value))); ?>
                <?php $this->assign('sCategoryName', ""); ?>
                <?php $this->assign('oOrderArticlePrice', $this->_tpl_vars['oOrderArticle']->getPrice()); ?>
                <?php $this->assign('oArticle', $this->_tpl_vars['oOrderArticle']->getArticle()); ?>
                <?php if ($this->_tpl_vars['oArticle']): ?>
                    <?php $this->assign('oMainCategory', $this->_tpl_vars['oArticle']->getCategory()); ?>
                    <?php if ($this->_tpl_vars['oMainCategory']): ?>
                        <?php $this->assign('sCategoryName', $this->_tpl_vars['oMainCategory']->oxcategories__oxtitle->value); ?>
                    <?php endif; ?>
                <?php endif; ?>
                ga( 'ecommerce:addItem', {
                    'id': '<?php echo $this->_tpl_vars['oOrder']->oxorder__oxordernr->value; ?>
',                     // Transaction ID. Required.
                    'name': '<?php echo ((is_array($_tmp=$this->_tpl_vars['sArticleName'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>
',                                   // Product name. Required.
                    'sku': '<?php echo $this->_tpl_vars['oOrderArticle']->oxorderarticles__oxartnum->value; ?>
',      // SKU/code.
                    'category': '<?php echo $this->_tpl_vars['sCategoryName']; ?>
',                                   // Category or variation.
                    'price': '<?php echo $this->_tpl_vars['oOrderArticlePrice']->getBruttoPrice(); ?>
',               // Unit price.
                    'quantity': '<?php echo $this->_tpl_vars['oOrderArticle']->oxorderarticles__oxamount->value; ?>
', // Quantity.
                    'currency': '<?php echo $this->_tpl_vars['oOrder']->oxorder__oxcurrency->value; ?>
'               // local currency code.
                });
            <?php endforeach; endif; unset($_from); ?>

            ga('ecommerce:send' );
        </script>
    <?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('blUseGoogleTS')): ?>
    <?php $this->assign('sGoogleVendorId', $this->_tpl_vars['oViewConf']->getViewThemeParam('sGoogleVendorId')); ?>
    <?php $this->assign('sGoogleShoppingAccountId', $this->_tpl_vars['oViewConf']->getViewThemeParam('sGoogleShoppingAccountId')); ?>
    <?php $this->assign('sPageLanguage', $this->_tpl_vars['oViewConf']->getViewThemeParam('sPageLanguage')); ?>
    <?php $this->assign('sShoppingCountry', $this->_tpl_vars['oViewConf']->getViewThemeParam('sShoppingCountry')); ?>
    <?php $this->assign('sShoppingLanguage', $this->_tpl_vars['oViewConf']->getViewThemeParam('sShoppingLanguage')); ?>

    <?php if ($this->_tpl_vars['oViewConf']->getTopActiveClassName() == 'details'): ?>
        <?php $this->assign('oArticle', $this->_tpl_vars['oView']->getProduct()); ?>
        <?php $this->assign('sGoogleShoppingProductId', $this->_tpl_vars['oArticle']->oxarticles__oxartnum->value); ?>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['sGoogleVendorId'] && $this->_tpl_vars['sPageLanguage']): ?>
                <script type="text/javascript">
            var gts = gts || [];

            gts.push(["id", "<?php echo $this->_tpl_vars['sGoogleVendorId']; ?>
"]);
            gts.push(["badge_position","BOTTOM_RIGHT"]);
            gts.push(["locale", "<?php echo ((is_array($_tmp=@$this->_tpl_vars['sPageLanguage'])) ? $this->_run_mod_handler('default', true, $_tmp, 'de_DE') : smarty_modifier_default($_tmp, 'de_DE')); ?>
"]);
            <?php if ($this->_tpl_vars['sGoogleShoppingAccountId']): ?>
                gts.push(["google_base_subaccount_id", "<?php echo $this->_tpl_vars['sGoogleShoppingAccountId']; ?>
"]);
                gts.push(["google_base_offer_id", "<?php echo $this->_tpl_vars['sGoogleShoppingProductId']; ?>
"]);
                <?php if ($this->_tpl_vars['sShoppingCountry']): ?>
                    gts.push(["google_base_country", "<?php echo ((is_array($_tmp=@$this->_tpl_vars['sShoppingCountry'])) ? $this->_run_mod_handler('default', true, $_tmp, 'DE') : smarty_modifier_default($_tmp, 'DE')); ?>
"]);
                <?php endif; ?>
                <?php if ($this->_tpl_vars['sShoppingLanguage']): ?>
                    gts.push(["google_base_language", "<?php echo ((is_array($_tmp=@$this->_tpl_vars['sShoppingLanguage'])) ? $this->_run_mod_handler('default', true, $_tmp, 'de') : smarty_modifier_default($_tmp, 'de')); ?>
"]);
                <?php endif; ?>
            <?php endif; ?>

            (function() {
                var gts = document.createElement("script");
                gts.type = "text/javascript";
                gts.async = true;
                gts.src = "https://www.googlecommerce.com/trustedstores/api/js";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(gts, s);
            })();
        </script>

                <?php if ($this->_tpl_vars['oViewConf']->getTopActiveClassName() == 'thankyou'): ?>
            <?php $this->assign('sShippingDaysOnStock', $this->_tpl_vars['oViewConf']->getViewThemeParam('sShippingDaysOnStock')); ?>
            <?php $this->assign('sShippingDaysNotOnStock', $this->_tpl_vars['oViewConf']->getViewThemeParam('sShippingDaysNotOnStock')); ?>
            <?php $this->assign('sDeliveryDaysOnStock', $this->_tpl_vars['oViewConf']->getViewThemeParam('sDeliveryDaysOnStock')); ?>
            <?php $this->assign('sDeliveryDaysNotOnStock', $this->_tpl_vars['oViewConf']->getViewThemeParam('sDeliveryDaysNotOnStock')); ?>

            <?php if ($this->_tpl_vars['sShippingDaysOnStock'] && $this->_tpl_vars['sShippingDaysNotOnStock'] && $this->_tpl_vars['sDeliveryDaysOnStock'] && $this->_tpl_vars['sDeliveryDaysNotOnStock']): ?>
                <?php if (! $this->_tpl_vars['oOrder']): ?>
                    <?php $this->assign('oOrder', $this->_tpl_vars['oView']->getOrder()); ?>
                <?php endif; ?>

                <?php $this->assign('sShopURL', $this->_tpl_vars['oConfig']->getConfigParam('sShopURL')); ?>
                <?php $this->assign('aShopDomain', parse_url($this->_tpl_vars['sShopURL'])); ?>
                <?php $this->assign('blHasPreOrder', false); ?>
                <?php $this->assign('oBasket', $this->_tpl_vars['oView']->getBasket()); ?>
                <?php $this->assign('oCountry', oxNew('oxCountry')); ?>
                <?php if ($this->_tpl_vars['oCountry']->load($this->_tpl_vars['oOrder']->oxorder__oxbillcountryid->value)): ?>
                    <?php $this->assign('sCustomerCountry', $this->_tpl_vars['oCountry']->oxcountry__oxisoalpha2->value); ?>
                <?php endif; ?>

                <!-- START Google Zertifizierte Händler Order -->
                <div id="gts-order" style="display:none;" translate="no">
                                        <?php ob_start(); ?>
                        <?php $_from = $this->_tpl_vars['oOrder']->getOrderArticles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oOrderArticle']):
?>
                            <?php $this->assign('oArticle', $this->_tpl_vars['oOrderArticle']->getArticle()); ?>
                            <?php $this->assign('oOrderArticlePrice', $this->_tpl_vars['oOrderArticle']->getPrice()); ?>
                            <?php $this->assign('sArticleName', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oOrderArticle']->oxorderarticles__oxtitle->value)) ? $this->_run_mod_handler('cat', true, $_tmp, ' ') : smarty_modifier_cat($_tmp, ' ')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oOrderArticle']->oxorderarticles__oxselvariant->value) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oOrderArticle']->oxorderarticles__oxselvariant->value))); ?>
                            <?php if (! $this->_tpl_vars['blHasPreOrder'] && $this->_tpl_vars['oArticle']->getStockStatus() == -1): ?>
                                <?php $this->assign('blHasPreOrder', true); ?>
                            <?php endif; ?>

                            <span class="gts-item">
                                <span class="gts-i-name"><?php echo ((is_array($_tmp=$this->_tpl_vars['sArticleName'])) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>
</span>
                                <span class="gts-i-price"><?php echo $this->_tpl_vars['oOrderArticlePrice']->getBruttoPrice(); ?>
</span>
                                <span class="gts-i-quantity"><?php echo $this->_tpl_vars['oOrderArticle']->oxorderarticles__oxamount->value; ?>
</span>
                                <span class="gts-i-prodsearch-id"><?php echo $this->_tpl_vars['oOrderArticle']->oxorderarticles__oxartnum->value; ?>
</span>
                                <?php if ($this->_tpl_vars['sGoogleShoppingAccountId']): ?>
                                    <span class="gts-i-prodsearch-store-id"><?php echo $this->_tpl_vars['sGoogleShoppingAccountId']; ?>
</span>
                                    <?php if ($this->_tpl_vars['sShoppingCountry']): ?>
                                        <span class="gts-i-prodsearch-country"><?php echo ((is_array($_tmp=@$this->_tpl_vars['sShoppingCountry'])) ? $this->_run_mod_handler('default', true, $_tmp, 'DE') : smarty_modifier_default($_tmp, 'DE')); ?>
</span>
                                    <?php endif; ?>
                                    <?php if ($this->_tpl_vars['sShoppingLanguage']): ?>
                                        <span class="gts-i-prodsearch-language"><?php echo ((is_array($_tmp=@$this->_tpl_vars['sShoppingLanguage'])) ? $this->_run_mod_handler('default', true, $_tmp, 'de') : smarty_modifier_default($_tmp, 'de')); ?>
</span>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </span>
                        <?php endforeach; endif; unset($_from); ?>
                    <?php $this->_smarty_vars['capture']['sGtsItems'] = ob_get_contents(); ob_end_clean(); ?>

                                        <?php if ($this->_tpl_vars['blHasPreOrder']): ?>
                        <?php $this->assign('sShipDate', ((is_array($_tmp=($this->_tpl_vars['sShippingDaysNotOnStock'])." weekdays")) ? $this->_run_mod_handler('strtotime', true, $_tmp) : strtotime($_tmp))); ?>
                    <?php else: ?>
                        <?php $this->assign('sShipDate', ((is_array($_tmp=($this->_tpl_vars['sShippingDaysOnStock'])." weekdays")) ? $this->_run_mod_handler('strtotime', true, $_tmp) : strtotime($_tmp))); ?>
                    <?php endif; ?>

                                        <?php if ($this->_tpl_vars['blHasPreOrder']): ?>
                        <?php $this->assign('sDeliveryDate', ((is_array($_tmp=($this->_tpl_vars['sDeliveryDaysNotOnStock'])." weekdays")) ? $this->_run_mod_handler('strtotime', true, $_tmp) : strtotime($_tmp))); ?>
                    <?php else: ?>
                        <?php $this->assign('sDeliveryDate', ((is_array($_tmp=($this->_tpl_vars['sDeliveryDaysOnStock'])." weekdays")) ? $this->_run_mod_handler('strtotime', true, $_tmp) : strtotime($_tmp))); ?>
                    <?php endif; ?>

                    <span id="gts-o-id"><?php echo $this->_tpl_vars['oOrder']->oxorder__oxordernr->value; ?>
</span>
                    <span id="gts-o-domain"><?php echo $this->_tpl_vars['aShopDomain']['host']; ?>
</span>
                    <span id="gts-o-email"><?php echo $this->_tpl_vars['oOrder']->oxorder__oxbillemail->value; ?>
</span>
                    <span id="gts-o-country"><?php echo $this->_tpl_vars['sCustomerCountry']; ?>
</span>
                    <span id="gts-o-currency"><?php echo $this->_tpl_vars['oOrder']->oxorder__oxcurrency->value; ?>
</span>
                    <span id="gts-o-total"><?php echo $this->_tpl_vars['oOrder']->oxorder__oxtotalordersum->value; ?>
</span>
                    <span id="gts-o-discounts"><?php if ($this->_tpl_vars['oOrder']->oxorder__oxdiscount->value > 0): ?>-<?php endif; ?><?php echo $this->_tpl_vars['oOrder']->oxorder__oxdiscount->value; ?>
</span>
                    <span id="gts-o-shipping-total"><?php echo $this->_tpl_vars['oOrder']->oxorder__oxdelcost->value; ?>
</span>
                    <span id="gts-o-tax-total"><?php echo smarty_function_math(array('equation' => "x+y",'x' => $this->_tpl_vars['oOrder']->oxorder__oxartvatprice1->value,'y' => $this->_tpl_vars['oOrder']->oxorder__oxartvatprice2->value), $this);?>
</span>
                    <span id="gts-o-est-ship-date"><?php echo ((is_array($_tmp=$this->_tpl_vars['sShipDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</span>
                    <span id="gts-o-est-delivery-date"><?php echo ((is_array($_tmp=$this->_tpl_vars['sDeliveryDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
</span>
                    <span id="gts-o-has-preorder"><?php if ($this->_tpl_vars['blHasPreOrder']): ?>Y<?php else: ?>N<?php endif; ?></span>
                    <span id="gts-o-has-digital"><?php if ($this->_tpl_vars['oBasket']->hasDownloadableProducts()): ?>Y<?php else: ?>N<?php endif; ?></span>

                    <?php if ($this->_smarty_vars['capture']['sGtsItems']): ?>
                        <?php echo $this->_smarty_vars['capture']['sGtsItems']; ?>

                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <!-- END Google Zertifizierte Händler Order -->
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
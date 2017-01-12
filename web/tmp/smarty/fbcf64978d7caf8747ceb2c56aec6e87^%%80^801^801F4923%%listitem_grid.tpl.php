<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/product/listitem_grid.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'oxhasrights', 'widget/product/listitem_grid.tpl', 28, false),array('function', 'oxmultilang', 'widget/product/listitem_grid.tpl', 87, false),array('function', 'oxprice', 'widget/product/listitem_grid.tpl', 109, false),)), $this); ?>

    <?php $this->assign('product', $this->_tpl_vars['oView']->getProduct()); ?>
    <?php $this->assign('blDisableToCart', $this->_tpl_vars['oView']->getDisableToCart()); ?>
    <?php $this->assign('iIndex', $this->_tpl_vars['oView']->getIndex()); ?>
    <?php $this->assign('showMainLink', $this->_tpl_vars['oView']->getShowMainL); ?>

    <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
    <?php if ($this->_tpl_vars['showMainLink']): ?>
        <?php $this->assign('_productLink', $this->_tpl_vars['product']->getMainLink()); ?>
    <?php else: ?>
        <?php $this->assign('_productLink', $this->_tpl_vars['product']->getLink()); ?>
    <?php endif; ?>
    <?php $this->assign('aVariantSelections', $this->_tpl_vars['product']->getVariantSelections(null,null,1)); ?>
    <?php $this->assign('blShowToBasket', true); ?>     <?php if ($this->_tpl_vars['blDisableToCart'] || $this->_tpl_vars['product']->isNotBuyable() || ( $this->_tpl_vars['aVariantSelections'] && $this->_tpl_vars['aVariantSelections']['selections'] ) || $this->_tpl_vars['product']->hasMdVariants() || ( $this->_tpl_vars['oViewConf']->showSelectListsInList() && $this->_tpl_vars['product']->getSelections(1) ) || $this->_tpl_vars['product']->getVariants()): ?>
        <?php $this->assign('blShowToBasket', false); ?>
    <?php endif; ?>

    <form name="tobasket<?php echo $this->_tpl_vars['testid']; ?>
" <?php if ($this->_tpl_vars['blShowToBasket']): ?>action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
" method="post"<?php else: ?>action="<?php echo $this->_tpl_vars['_productLink']; ?>
" method="get"<?php endif; ?>>
        <div class="hidden">
            <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

            <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

            <input type="hidden" name="pgNr" value="<?php echo $this->_tpl_vars['oView']->getActPage(); ?>
">
            <?php if ($this->_tpl_vars['recommid']): ?>
                <input type="hidden" name="recommid" value="<?php echo $this->_tpl_vars['recommid']; ?>
">
            <?php endif; ?>
            <?php if ($this->_tpl_vars['blShowToBasket']): ?>
            <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oViewConf']->getTopActiveClassName(); ?>
">
                <?php if ($this->_tpl_vars['owishid']): ?>
                    <input type="hidden" name="owishid" value="<?php echo $this->_tpl_vars['owishid']; ?>
">
                <?php endif; ?>
                <?php if ($this->_tpl_vars['toBasketFunction']): ?>
                    <input type="hidden" name="fnc" value="<?php echo $this->_tpl_vars['toBasketFunction']; ?>
">
                <?php else: ?>
                    <input type="hidden" name="fnc" value="tobasket">
                <?php endif; ?>
                <input type="hidden" name="aid" value="<?php echo $this->_tpl_vars['product']->oxarticles__oxid->value; ?>
">
                <?php if ($this->_tpl_vars['altproduct']): ?>
                    <input type="hidden" name="anid" value="<?php echo $this->_tpl_vars['altproduct']; ?>
">
                <?php else: ?>
                    <input type="hidden" name="anid" value="<?php echo $this->_tpl_vars['product']->oxarticles__oxnid->value; ?>
">
                <?php endif; ?>
                <input type="hidden" name="am" value="1">
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php else: ?>
                <input type="hidden" name="cl" value="details">
                <input type="hidden" name="anid" value="<?php echo $this->_tpl_vars['product']->oxarticles__oxnid->value; ?>
">
            <?php endif; ?>
        </div>

        
        <div class="picture text-center">
            <a href="<?php echo $this->_tpl_vars['_productLink']; ?>
" title="<?php echo $this->_tpl_vars['product']->oxarticles__oxtitle->value; ?>
 <?php echo $this->_tpl_vars['product']->oxarticles__oxvarselect->value; ?>
">
                <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('spinner.gif'); ?>
" data-src="<?php echo $this->_tpl_vars['product']->getThumbnailUrl(); ?>
" alt="<?php echo $this->_tpl_vars['product']->oxarticles__oxtitle->value; ?>
 <?php echo $this->_tpl_vars['product']->oxarticles__oxvarselect->value; ?>
" class="img-responsive">
            </a>
        </div>
        

        <div class="listDetails text-center">
            
                <div class="title">
                    <a id="<?php echo $this->_tpl_vars['testid']; ?>
" href="<?php echo $this->_tpl_vars['_productLink']; ?>
" class="title" title="<?php echo $this->_tpl_vars['product']->oxarticles__oxtitle->value; ?>
 <?php echo $this->_tpl_vars['product']->oxarticles__oxvarselect->value; ?>
">
                        <span><?php echo $this->_tpl_vars['product']->oxarticles__oxtitle->value; ?>
 <?php echo $this->_tpl_vars['product']->oxarticles__oxvarselect->value; ?>
</span>
                    </a>
                </div>
            

            <div class="price text-center">
                <div class="content">
                    
                        <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'SHOWARTICLEPRICE')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                            <?php $this->assign('oUnitPrice', $this->_tpl_vars['product']->getUnitPrice()); ?>
                            <?php $this->assign('tprice', $this->_tpl_vars['product']->getTPrice()); ?>
                            <?php $this->assign('price', $this->_tpl_vars['product']->getPrice()); ?>

                            <?php if ($this->_tpl_vars['tprice'] && $this->_tpl_vars['tprice']->getBruttoPrice() > $this->_tpl_vars['price']->getBruttoPrice()): ?>
                                <span class="oldPrice text-muted">
                                    <del><?php echo $this->_tpl_vars['product']->getFTPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</del>
                                </span>
                            <?php endif; ?>

                            
                                <?php if ($this->_tpl_vars['product']->getFPrice()): ?>
                                    <span class="lead text-nowrap">
                                        <?php if ($this->_tpl_vars['product']->isRangePrice()): ?>
                                            <?php echo smarty_function_oxmultilang(array('ident' => 'PRICE_FROM'), $this);?>

                                            <?php if (! $this->_tpl_vars['product']->isParentNotBuyable()): ?>
                                                <?php echo $this->_tpl_vars['product']->getFMinPrice(); ?>

                                            <?php else: ?>
                                                <?php echo $this->_tpl_vars['product']->getFVarMinPrice(); ?>

                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?php if (! $this->_tpl_vars['product']->isParentNotBuyable()): ?>
                                                <?php echo $this->_tpl_vars['product']->getFPrice(); ?>

                                            <?php else: ?>
                                                <?php echo $this->_tpl_vars['product']->getFVarMinPrice(); ?>

                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <?php echo $this->_tpl_vars['currency']->sign; ?>

                                        <?php if ($this->_tpl_vars['oView']->isVatIncluded()): ?>
                                             <?php if (! ( $this->_tpl_vars['product']->hasMdVariants() || ( $this->_tpl_vars['oViewConf']->showSelectListsInList() && $this->_tpl_vars['product']->getSelections(1) ) || $this->_tpl_vars['product']->getVariants() )): ?>*<?php endif; ?>
                                        <?php endif; ?>
                                    </span>
                                <?php endif; ?>
                            
                            <?php if ($this->_tpl_vars['oUnitPrice']): ?>
                                <span id="productPricePerUnit_<?php echo $this->_tpl_vars['testid']; ?>
" class="pricePerUnit">
                                    <?php echo $this->_tpl_vars['product']->oxarticles__oxunitquantity->value; ?>
 <?php echo $this->_tpl_vars['product']->getUnitName(); ?>
 | <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oUnitPrice'],'currency' => $this->_tpl_vars['currency']), $this);?>
/<?php echo $this->_tpl_vars['product']->getUnitName(); ?>

                                </span>
                            <?php elseif ($this->_tpl_vars['product']->oxarticles__oxweight->value): ?>
                                <span id="productPricePerUnit_<?php echo $this->_tpl_vars['testid']; ?>
" class="pricePerUnit">
                                    <span title="weight"><?php echo smarty_function_oxmultilang(array('ident' => 'WEIGHT'), $this);?>
</span>
                                    <span class="value"><?php echo $this->_tpl_vars['product']->oxarticles__oxweight->value; ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'KG'), $this);?>
</span>
                                </span>
                            <?php endif; ?>
                        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    
                </div>
            </div>
            
                <div class="actions text-center">
                    <div class="btn-group">
                        <?php if ($this->_tpl_vars['blShowToBasket']): ?>
                            <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                <button type="submit" class="btn btn-default hasTooltip" data-placement="bottom" title="<?php echo smarty_function_oxmultilang(array('ident' => 'TO_CART'), $this);?>
">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                            <a class="btn btn-primary" href="<?php echo $this->_tpl_vars['_productLink']; ?>
" ><?php echo smarty_function_oxmultilang(array('ident' => 'MORE_INFO'), $this);?>
</a>
                        <?php else: ?>
                            <a class="btn btn-primary" href="<?php echo $this->_tpl_vars['_productLink']; ?>
" ><?php echo smarty_function_oxmultilang(array('ident' => 'MORE_INFO'), $this);?>
</a>
                        <?php endif; ?>
                    </div>
                </div>
            
        </div>
    </form>
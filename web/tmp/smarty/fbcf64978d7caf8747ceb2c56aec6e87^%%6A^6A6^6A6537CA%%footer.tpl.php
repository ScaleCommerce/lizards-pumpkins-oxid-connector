<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from layout/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'layout/footer.tpl', 18, false),array('function', 'oxid_include_widget', 'layout/footer.tpl', 21, false),array('block', 'oxifcontent', 'layout/footer.tpl', 155, false),)), $this); ?>

    <?php $this->assign('blShowFullFooter', $this->_tpl_vars['oView']->showSearch()); ?>
    <?php $this->assign('blFullwidth', $this->_tpl_vars['oViewConf']->getViewThemeParam('blFullwidthLayout')); ?>
    <?php echo $this->_tpl_vars['oView']->setShowNewsletter($this->_tpl_vars['oViewConf']->getViewThemeParam('blFooterShowNewsletterForm')); ?>


    <?php if ($this->_tpl_vars['oxcmp_user']): ?>
        <?php $this->assign('force_sid', $this->_tpl_vars['oView']->getSidForWidget()); ?>
    <?php endif; ?>

    <footer id="footer">
        <div class="<?php if ($this->_tpl_vars['blFullwidth']): ?>container<?php else: ?>container-fluid<?php endif; ?>">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <div class="row">
                        <div class="footer-left-part">
                            
                                <section class="col-xs-12 <?php if ($this->_tpl_vars['blShowFullFooter']): ?>col-sm-3<?php else: ?>col-sm-6<?php endif; ?> footer-box footer-box-service">
                                    <div class="h4 footer-box-title"><?php echo smarty_function_oxmultilang(array('ident' => 'SERVICES'), $this);?>
</div>
                                    <div class="footer-box-content">
                                        
                                            <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwServiceList','noscript' => 1,'nocookie' => 1,'force_sid' => $this->_tpl_vars['force_sid']), $this);?>

                                        
                                    </div>
                                </section>
                            
                            
                                <section class="col-xs-12 <?php if ($this->_tpl_vars['blShowFullFooter']): ?>col-sm-3<?php else: ?>col-sm-6<?php endif; ?> footer-box footer-box-information">
                                    <div class="h4 footer-box-title"><?php echo smarty_function_oxmultilang(array('ident' => 'INFORMATION'), $this);?>
</div>
                                    <div class="footer-box-content">
                                        
                                            <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwInformation','noscript' => 1,'nocookie' => 1,'force_sid' => $this->_tpl_vars['force_sid']), $this);?>

                                        
                                    </div>
                                </section>
                            
                            <?php if ($this->_tpl_vars['blShowFullFooter']): ?>
                                
                                    <section class="col-xs-12 col-sm-3 footer-box footer-box-manufacturers">
                                        <div class="h4 footer-box-title"><?php echo smarty_function_oxmultilang(array('ident' => 'OUR_BRANDS'), $this);?>
</div>
                                        <div class="footer-box-content">
                                            
                                                <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwManufacturerList','_parent' => $this->_tpl_vars['oView']->getClassName(),'noscript' => 1,'nocookie' => 1), $this);?>

                                            
                                        </div>
                                    </section>
                                
                                
                                    <section class="col-xs-12 col-sm-3 footer-box footer-box-categories">
                                        <div class="h4 footer-box-title"><?php echo smarty_function_oxmultilang(array('ident' => 'CATEGORIES'), $this);?>
</div>
                                        <div class="footer-box-content">
                                            
                                                <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwCategoryTree','_parent' => $this->_tpl_vars['oView']->getClassName(),'sWidgetType' => 'footer','noscript' => 1,'nocookie' => 1), $this);?>

                                            
                                        </div>
                                    </section>
                                
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="row">
                        <div class="footer-right-part">
                            <div class="col-xs-6 col-xs-offset-3 col-sm-12 col-sm-offset-0">
                                <?php if ($this->_tpl_vars['oView']->showNewsletter()): ?>
                                    <section class="footer-box footer-box-newsletter">
                                        <div class="h4 footer-box-title"><?php echo smarty_function_oxmultilang(array('ident' => 'NEWSLETTER'), $this);?>
</div>
                                        <div class="footer-box-content">
                                            
                                                <p class="small"><?php echo smarty_function_oxmultilang(array('ident' => 'FOOTER_NEWSLETTER_INFO'), $this);?>
</p>
                                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/footer/newsletter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                            
                                        </div>
                                    </section>
                                <?php endif; ?>
                                <?php if (( $this->_tpl_vars['oView']->isActive('FbLike') && $this->_tpl_vars['oViewConf']->getFbAppId() )): ?>
                                    <section class="footer-box footer-box-facebook">
                                        
                                            <?php if ($this->_tpl_vars['oView']->isActive('FbLike') && $this->_tpl_vars['oViewConf']->getFbAppId()): ?>
                                                <div class="facebook pull-left" id="footerFbLike">
                                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/facebook/enable.tpl", 'smarty_include_vars' => array('source' => "widget/facebook/like.tpl",'ident' => "#footerFbLike",'parent' => 'footer')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                                </div>
                                            <?php endif; ?>
                                        
                                    </section>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="spacer"></div>

                        
                <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('sFacebookUrl') || $this->_tpl_vars['oViewConf']->getViewThemeParam('sGooglePlusUrl') || $this->_tpl_vars['oViewConf']->getViewThemeParam('sTwitterUrl') || $this->_tpl_vars['oViewConf']->getViewThemeParam('sYouTubeUrl') || $this->_tpl_vars['oViewConf']->getViewThemeParam('sBlogUrl')): ?>
                    <div class="social-links">
                        <div class="row">
                            <section class="col-xs-12">
                                <div class="text-center">
                                    
                                        <ul class="list-inline">
                                            
                                                <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('sFacebookUrl')): ?>
                                                    <li>
                                                        <a target="_blank" href="<?php echo $this->_tpl_vars['oViewConf']->getViewThemeParam('sFacebookUrl'); ?>
">
                                                            <i class="fa fa-facebook"></i> <span>Facebook</span>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('sGooglePlusUrl')): ?>
                                                    <li>
                                                        <a target="_blank" href="<?php echo $this->_tpl_vars['oViewConf']->getViewThemeParam('sGooglePlusUrl'); ?>
">
                                                            <i class="fa fa-google-plus-square"></i> <span>Google+</span>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('sTwitterUrl')): ?>
                                                    <li>
                                                        <a target="_blank" href="<?php echo $this->_tpl_vars['oViewConf']->getViewThemeParam('sTwitterUrl'); ?>
">
                                                            <i class="fa fa-twitter"></i> <span>Twitter</span>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('sYouTubeUrl')): ?>
                                                    <li>
                                                        <a target="_blank" href="<?php echo $this->_tpl_vars['oViewConf']->getViewThemeParam('sYouTubeUrl'); ?>
">
                                                            <i class="fa fa-youtube-square"></i> <span>YouTube</span>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('sBlogUrl')): ?>
                                                    <li>
                                                        <a target="_blank" href="<?php echo $this->_tpl_vars['oViewConf']->getViewThemeParam('sBlogUrl'); ?>
">
                                                            <i class="fa fa-wordpress"></i> <span>Blog</span>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            
                                        </ul>
                                    
                                </div>
                            </section>
                        </div>
                    </div>
                <?php endif; ?>
            
                    </div>

        <?php if ($this->_tpl_vars['oView']->isPriceCalculated()): ?>
        
        
        <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxdeliveryinfo','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <div id="incVatInfo">
            <?php if ($this->_tpl_vars['oView']->isVatIncluded()): ?>
            * <span class="deliveryInfo"><?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_SHIPPING'), $this);?>
<a href="<?php echo $this->_tpl_vars['oCont']->getLink(); ?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_SHIPPING2'), $this);?>
</a></span>
            <?php else: ?>
            * <span class="deliveryInfo"><?php echo smarty_function_oxmultilang(array('ident' => 'PLUS'), $this);?>
<a href="<?php echo $this->_tpl_vars['oCont']->getLink(); ?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_SHIPPING2'), $this);?>
</a></span>
            <?php endif; ?>
        </div>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        
        
        <?php endif; ?>
    </footer>

    <div class="legal">
        <div class="<?php if ($this->_tpl_vars['blFullwidth']): ?>container<?php else: ?>container-fluid<?php endif; ?>">
            <div class="legal-box">
                <div class="row">
                    <section class="col-sm-12">
                        
                            
                                <?php if ($this->_tpl_vars['oViewConf']->showTs('WIDGET')): ?>
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/trustedshops/ratings.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                <?php endif; ?>
                            
                        

                        
                            <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxstdfooter','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                <?php echo $this->_tpl_vars['oCont']->oxcontents__oxcontent->value; ?>

                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                        
                    </section>
                </div>
            </div>
        </div>

    </div>


<?php if ($this->_tpl_vars['oView']->isRootCatChanged()): ?>
    <div id="scRootCatChanged" class="popupBox corners FXgradGreyLight glowShadow">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/privatesales/basketexcl.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
<?php endif; ?>
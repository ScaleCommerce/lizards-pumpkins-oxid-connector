<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/footer/services.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxgetseourl', 'widget/footer/services.tpl', 4, false),array('function', 'oxmultilang', 'widget/footer/services.tpl', 4, false),array('modifier', 'cat', 'widget/footer/services.tpl', 4, false),array('block', 'oxhasrights', 'widget/footer/services.tpl', 17, false),)), $this); ?>

    <ul class="services list-unstyled">
        
            <li><a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=contact") : smarty_modifier_cat($_tmp, "cl=contact"))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'CONTACT'), $this);?>
</a></li>
            <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('blFooterShowHelp')): ?>
                <li><a href="<?php echo $this->_tpl_vars['oViewConf']->getHelpPageLink(); ?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'HELP'), $this);?>
</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('blFooterShowLinks')): ?>
                <li><a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=links") : smarty_modifier_cat($_tmp, "cl=links"))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'LINKS'), $this);?>
</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('blFooterShowGuestbook')): ?>
                <li><a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=guestbook") : smarty_modifier_cat($_tmp, "cl=guestbook"))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'GUESTBOOK'), $this);?>
</a></li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['oView']->isActive('Invitations')): ?>
                <li><a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=invite") : smarty_modifier_cat($_tmp, "cl=invite"))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'INVITE_YOUR_FRIENDS'), $this);?>
</a></li>
            <?php endif; ?>
            <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <li>
                    <a href="<?php echo smarty_function_oxgetseourl(array('ident' => $this->_tpl_vars['oViewConf']->getBasketLink()), $this);?>
">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'CART'), $this);?>

                    </a>
                    <?php if ($this->_tpl_vars['oxcmp_basket'] && $this->_tpl_vars['oxcmp_basket']->getItemsCount() > 0): ?> <span class="badge"><?php echo $this->_tpl_vars['oxcmp_basket']->getItemsCount(); ?>
</span><?php endif; ?>
                </li>
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <li><a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account") : smarty_modifier_cat($_tmp, "cl=account"))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'ACCOUNT'), $this);?>
</a></li>
            <li>
                <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account_noticelist") : smarty_modifier_cat($_tmp, "cl=account_noticelist"))), $this);?>
">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'WISH_LIST'), $this);?>

                </a>
                <?php if ($this->_tpl_vars['oxcmp_user'] && $this->_tpl_vars['oxcmp_user']->getNoticeListArtCnt()): ?> <span class="badge"><?php echo $this->_tpl_vars['oxcmp_user']->getNoticeListArtCnt(); ?>
</span><?php endif; ?>
            </li>
            <?php if ($this->_tpl_vars['oViewConf']->getShowWishlist()): ?>
                <li>
                    <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account_wishlist") : smarty_modifier_cat($_tmp, "cl=account_wishlist"))), $this);?>
">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'MY_GIFT_REGISTRY'), $this);?>

                    </a>
                    <?php if ($this->_tpl_vars['oxcmp_user'] && $this->_tpl_vars['oxcmp_user']->getWishListArtCnt()): ?> <span class="badge"><?php echo $this->_tpl_vars['oxcmp_user']->getWishListArtCnt(); ?>
</span><?php endif; ?>
                </li>
                <li>
                    <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=wishlist") : smarty_modifier_cat($_tmp, "cl=wishlist")),'params' => ((is_array($_tmp="wishid=")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oView']->getWishlistUserId()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oView']->getWishlistUserId()))), $this);?>
">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'PUBLIC_GIFT_REGISTRIES'), $this);?>

                    </a>
                </li>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['oView']->isEnabledDownloadableFiles()): ?>
                <li><a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account_downloads") : smarty_modifier_cat($_tmp, "cl=account_downloads"))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'MY_DOWNLOADS'), $this);?>
</a></li>
            <?php endif; ?>
        
    </ul>
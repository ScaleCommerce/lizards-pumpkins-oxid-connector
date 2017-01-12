<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/header/servicebox.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'widget/header/servicebox.tpl', 3, false),array('function', 'oxgetseourl', 'widget/header/servicebox.tpl', 8, false),array('modifier', 'cat', 'widget/header/servicebox.tpl', 8, false),)), $this); ?>
<div class="topPopList">
    
        <span class="lead"><?php echo smarty_function_oxmultilang(array('ident' => 'ACCOUNT'), $this);?>
</span>
        <div class="flyoutBox">
            <ul id="services" class="list-unstyled">
                
                    <li>
                        <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSslSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account") : smarty_modifier_cat($_tmp, "cl=account"))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'MY_ACCOUNT'), $this);?>
</a>
                    </li>
                    <?php if ($this->_tpl_vars['oViewConf']->getShowCompareList()): ?>
                        <li>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=compare") : smarty_modifier_cat($_tmp, "cl=compare"))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'MY_PRODUCT_COMPARISON'), $this);?>
</a> <?php if ($this->_tpl_vars['oView']->getCompareItemsCnt()): ?><span class="badge"><?php echo $this->_tpl_vars['oView']->getCompareItemsCnt(); ?>
</span><?php endif; ?>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account_noticelist") : smarty_modifier_cat($_tmp, "cl=account_noticelist"))), $this);?>
"><span><?php echo smarty_function_oxmultilang(array('ident' => 'MY_WISH_LIST'), $this);?>
</span></a>
                        <?php if ($this->_tpl_vars['oxcmp_user'] && $this->_tpl_vars['oxcmp_user']->getNoticeListArtCnt()): ?> <span class="badge"><?php echo $this->_tpl_vars['oxcmp_user']->getNoticeListArtCnt(); ?>
</span><?php endif; ?>
                    </li>
                    <?php if ($this->_tpl_vars['oViewConf']->getShowWishlist()): ?>
                        <li>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account_wishlist") : smarty_modifier_cat($_tmp, "cl=account_wishlist"))), $this);?>
"><span><?php echo smarty_function_oxmultilang(array('ident' => 'MY_GIFT_REGISTRY'), $this);?>
</span></a>
                            <?php if ($this->_tpl_vars['oxcmp_user'] && $this->_tpl_vars['oxcmp_user']->getWishListArtCnt()): ?> <span class="badge"><?php echo $this->_tpl_vars['oxcmp_user']->getWishListArtCnt(); ?>
</span><?php endif; ?>
                        </li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['oViewConf']->getShowListmania()): ?>
                        <li>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account_recommlist") : smarty_modifier_cat($_tmp, "cl=account_recommlist"))), $this);?>
"><span><?php echo smarty_function_oxmultilang(array('ident' => 'MY_LISTMANIA'), $this);?>
</span></a>
                            <?php if ($this->_tpl_vars['oxcmp_user'] && $this->_tpl_vars['oxcmp_user']->getRecommListsCount()): ?> <span class="badge"><?php echo $this->_tpl_vars['oxcmp_user']->getRecommListsCount(); ?>
</span><?php endif; ?>
                        </li>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled ( 'blEnableDownloads' )): ?>
                        <li>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account_downloads") : smarty_modifier_cat($_tmp, "cl=account_downloads"))), $this);?>
"><span><?php echo smarty_function_oxmultilang(array('ident' => 'MY_DOWNLOADS'), $this);?>
</span></a>
                        </li>
                    <?php endif; ?>
                
            </ul>
        </div>
    
</div>
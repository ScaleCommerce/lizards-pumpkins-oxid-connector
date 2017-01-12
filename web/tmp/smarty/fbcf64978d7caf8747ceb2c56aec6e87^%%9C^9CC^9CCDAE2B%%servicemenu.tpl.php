<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/header/servicemenu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'widget/header/servicemenu.tpl', 10, false),array('function', 'oxgetseourl', 'widget/header/servicemenu.tpl', 13, false),array('function', 'oxmultilang', 'widget/header/servicemenu.tpl', 16, false),array('modifier', 'cat', 'widget/header/servicemenu.tpl', 13, false),)), $this); ?>
<?php if ($this->_tpl_vars['oxcmp_user']): ?>
    <?php $this->assign('noticeListCount', $this->_tpl_vars['oxcmp_user']->getNoticeListArtCnt()); ?>
    <?php $this->assign('wishListCount', $this->_tpl_vars['oxcmp_user']->getWishListArtCnt()); ?>
    <?php $this->assign('recommListCount', $this->_tpl_vars['oxcmp_user']->getRecommListsCount()); ?>
<?php else: ?>
    <?php $this->assign('noticeListCount', '0'); ?>
    <?php $this->assign('wishListCount', '0'); ?>
    <?php $this->assign('recommListCount', '0'); ?>
<?php endif; ?>
<?php echo smarty_function_math(array('equation' => "a+b+c+d",'a' => $this->_tpl_vars['oView']->getCompareItemsCnt(),'b' => $this->_tpl_vars['noticeListCount'],'c' => $this->_tpl_vars['wishListCount'],'d' => $this->_tpl_vars['recommListCount'],'assign' => 'notificationsCounter'), $this);?>


<div class="btn-group service-menu <?php if (! $this->_tpl_vars['oxcmp_user']): ?>showLogin<?php endif; ?>">
    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account") : smarty_modifier_cat($_tmp, "cl=account"))), $this);?>
">
        
            <?php if (! $this->_tpl_vars['oxcmp_user']): ?>
                <?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN'), $this);?>

            <?php else: ?>
                <?php echo smarty_function_oxmultilang(array('ident' => 'MY_ACCOUNT'), $this);?>

            <?php endif; ?>
            <?php if ($this->_tpl_vars['notificationsCounter'] > 0): ?>
                <span class="badge"><?php echo $this->_tpl_vars['notificationsCounter']; ?>
</span>
            <?php endif; ?>
            <i class="fa fa-angle-down hidden-xs"></i>
        
    </button>
    <ul class="dropdown-menu dropdown-menu-right pull-right" role="menu">
        
            <li>
                <div class="row">
                    <div class="<?php if (! $this->_tpl_vars['oxcmp_user']): ?>col-xs-12 col-sm-5<?php else: ?>col-xs-12<?php endif; ?> pull-right">
                        <div class="service-menu-box clearfix">
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/header/servicebox.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            <?php if ($this->_tpl_vars['oxcmp_user']): ?>
                                <div class="divider"></div>
                                <div class="text-right">
                                    <a class="btn btn-danger" role="button" href="<?php echo $this->_tpl_vars['oViewConf']->getLogoutLink(); ?>
" title="<?php echo smarty_function_oxmultilang(array('ident' => 'LOGOUT'), $this);?>
">
                                        <i class="fa fa-power-off"></i> <?php echo smarty_function_oxmultilang(array('ident' => 'LOGOUT'), $this);?>

                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if (! $this->_tpl_vars['oxcmp_user']): ?>
                        <div class="col-xs-12 col-sm-7">
                            <div class="service-menu-box clearfix">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/header/loginbox.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </li>
        
    </ul>
</div>
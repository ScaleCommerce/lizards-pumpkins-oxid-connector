<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/facebook/init.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'widget/facebook/init.tpl', 3, false),array('function', 'oxmultilang', 'widget/facebook/init.tpl', 10, false),array('function', 'oxcontent', 'widget/facebook/init.tpl', 12, false),array('modifier', 'oxmultilangassign', 'widget/facebook/init.tpl', 23, false),array('modifier', 'oxaddparams', 'widget/facebook/init.tpl', 24, false),)), $this); ?>
<?php if ($this->_tpl_vars['oViewConf']->getFbAppId()): ?>
    <div id="fb-root"></div>
    <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxfacebook.min.js"), $this);?>

    <?php if ($this->_tpl_vars['oView']->isActive('FacebookConfirm') && ! $this->_tpl_vars['oView']->isFbWidgetVisible()): ?>
        <div class="modal fade" id="fbinfo" tabindex="-1" role="dialog" aria-labelledby="fbinfoLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <span class="h4 modal-title" id="fbinfoLabel"><?php echo smarty_function_oxmultilang(array('ident' => 'FACEBOOK_ENABLE_INFOTEXTHEADER'), $this);?>
</span>
                    </div>
                    <div class="modal-body"><?php echo smarty_function_oxcontent(array('ident' => 'oxfacebookenableinfotext'), $this);?>
</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo smarty_function_oxmultilang(array('ident' => 'CLOSE'), $this);?>
</button>
                    </div>
                </div>
            </div>
        </div>

        <?php ob_start(); ?>
            <?php echo smarty_function_oxscript(array('include' => "js/libs/jquery.cookie.min.js"), $this);?>

            <?php $this->assign('sFbAppId', $this->_tpl_vars['oViewConf']->getFbAppId()); ?>
            <?php $this->assign('sLocale', ((is_array($_tmp='FACEBOOK_LOCALE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
            <?php $this->assign('sLoginUrl', ((is_array($_tmp=$this->_tpl_vars['oView']->getLink())) ? $this->_run_mod_handler('oxaddparams', true, $_tmp, "fblogin=1") : smarty_modifier_oxaddparams($_tmp, "fblogin=1"))); ?>
            <?php $this->assign('sLogoutUrl', $this->_tpl_vars['oViewConf']->getLogoutLink()); ?>
            <?php echo smarty_function_oxscript(array('add' => "$('.oxfbenable').click( function() { oxFacebook.showFbWidgets('".($this->_tpl_vars['sFbAppId'])."','".($this->_tpl_vars['sLocale'])."','".($this->_tpl_vars['sLoginUrl'])."','".($this->_tpl_vars['sLogoutUrl'])."'); return false;});"), $this);?>

        <?php $this->_smarty_vars['capture']['facebookInit'] = ob_get_contents(); ob_end_clean(); ?>
    <?php else: ?>
        <?php ob_start(); ?>
            oxFacebook.fbInit("<?php echo $this->_tpl_vars['oViewConf']->getFbAppId(); ?>
", "<?php echo smarty_function_oxmultilang(array('ident' => 'FACEBOOK_LOCALE'), $this);?>
", "<?php echo ((is_array($_tmp=$this->_tpl_vars['oView']->getLink())) ? $this->_run_mod_handler('oxaddparams', true, $_tmp, "fblogin=1") : smarty_modifier_oxaddparams($_tmp, "fblogin=1")); ?>
", "<?php echo $this->_tpl_vars['oViewConf']->getLogoutLink(); ?>
");
        <?php $this->_smarty_vars['capture']['facebookInit'] = ob_get_contents(); ob_end_clean(); ?>
    <?php endif; ?>
    <?php echo smarty_function_oxscript(array('add' => ($this->_smarty_vars['capture']['facebookInit'])), $this);?>

<?php endif; ?>
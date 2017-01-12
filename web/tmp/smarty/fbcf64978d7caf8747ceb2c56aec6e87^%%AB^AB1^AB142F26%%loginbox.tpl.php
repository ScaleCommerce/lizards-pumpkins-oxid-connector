<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/header/loginbox.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'widget/header/loginbox.tpl', 24, false),array('function', 'oxgetseourl', 'widget/header/loginbox.tpl', 34, false),array('modifier', 'cat', 'widget/header/loginbox.tpl', 34, false),)), $this); ?>
<?php $this->assign('bIsError', 0); ?>
<?php ob_start(); ?>
    <?php $_from = $this->_tpl_vars['Errors']['loginBoxErrors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['oEr']):
?>
        <p id="errorBadLogin" class="alert alert-danger"><?php echo $this->_tpl_vars['oEr']->getOxMessage(); ?>
</p>
        <?php $this->assign('bIsError', 1); ?>
    <?php endforeach; endif; unset($_from); ?>
<?php $this->_smarty_vars['capture']['loginErrors'] = ob_get_contents(); ob_end_clean(); ?>
<?php if (! $this->_tpl_vars['oxcmp_user']->oxuser__oxpassword->value): ?>
    <form class="form" id="login" name="login" action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
        <div id="loginBox" class="loginBox" <?php if ($this->_tpl_vars['bIsError']): ?>style="display: block;"<?php endif; ?>>
            <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

            <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

            <input type="hidden" name="fnc" value="login_noredirect">
            <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oViewConf']->getTopActiveClassName(); ?>
">
            <?php if ($this->_tpl_vars['oViewConf']->getTopActiveClassName() == 'content'): ?>
                <input type="hidden" name="oxcid" value="<?php echo $this->_tpl_vars['oViewConf']->getContentId(); ?>
">
            <?php endif; ?>
            <input type="hidden" name="pgNr" value="<?php echo $this->_tpl_vars['oView']->getActPage(); ?>
">
            <input type="hidden" name="CustomError" value="loginBoxErrors">
            <?php if ($this->_tpl_vars['oViewConf']->getActArticleId()): ?>
                <input type="hidden" name="anid" value="<?php echo $this->_tpl_vars['oViewConf']->getActArticleId(); ?>
">
            <?php endif; ?>

            <span class="lead"><?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN'), $this);?>
</span>

            <div class="form-group">
                <input id="loginEmail" type="email" name="lgn_usr" value="" class="form-control" placeholder="<?php echo smarty_function_oxmultilang(array('ident' => 'EMAIL_ADDRESS'), $this);?>
">
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input id="loginPasword" type="password" name="lgn_pwd" class="form-control" value="" placeholder="<?php echo smarty_function_oxmultilang(array('ident' => 'PASSWORD'), $this);?>
">
                    <span class="input-group-btn">
                        <a class="forgotPasswordOpener btn btn-default" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSslSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=forgotpwd") : smarty_modifier_cat($_tmp, "cl=forgotpwd"))), $this);?>
" title="<?php echo smarty_function_oxmultilang(array('ident' => 'FORGOT_PASSWORD'), $this);?>
">?</a>
                    </span>
                </div>
            </div>

            <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled ( 'blShowRememberMe' )): ?>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" class="checkbox" value="1" name="lgn_cook" id="remember"> <?php echo smarty_function_oxmultilang(array('ident' => 'REMEMBER_ME'), $this);?>

                    </label>
                </div>
            <?php endif; ?>

            <button type="submit" class="btn btn-primary"><?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN'), $this);?>
</button>

            <?php if (! $this->_tpl_vars['oxcmp_user']): ?>
                <a class="btn" id="registerLink" role="button" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSslSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=register") : smarty_modifier_cat($_tmp, "cl=register"))), $this);?>
" title="<?php echo smarty_function_oxmultilang(array('ident' => 'REGISTER'), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'REGISTER'), $this);?>
</a>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['oViewConf']->getShowFbConnect()): ?>
                <div class="altLoginBox corners clear">
                    <span><?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN_WITH'), $this);?>
</span>
                    <div id="loginboxFbConnect">
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/facebook/enable.tpl", 'smarty_include_vars' => array('source' => "widget/facebook/connect.tpl",'ident' => "#loginboxFbConnect")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </form>
<?php endif; ?>
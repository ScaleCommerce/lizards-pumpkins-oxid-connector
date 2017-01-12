<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/header/cookienote.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'widget/header/cookienote.tpl', 2, false),array('function', 'oxmultilang', 'widget/header/cookienote.tpl', 8, false),array('function', 'oxgetseourl', 'widget/header/cookienote.tpl', 11, false),array('modifier', 'cat', 'widget/header/cookienote.tpl', 11, false),)), $this); ?>
<?php if ($this->_tpl_vars['oView']->isEnabled() && $_COOKIE['displayedCookiesNotification'] != '1'): ?>
    <?php echo smarty_function_oxscript(array('include' => "js/libs/cookie/jquery.cookie.min.js"), $this);?>

    <?php echo smarty_function_oxscript(array('add' => "$.cookie('testing', 'yes'); if(!$.cookie('testing')) $('#cookieNote').hide(); else{ $('#cookieNote').show(); $.cookie('testing', null, -1);}"), $this);?>

    <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxcookienote.min.js"), $this);?>

    <div id="cookieNote">
        <div class="alert alert-info" style="margin: 0;">
            <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">&times;</span><span class="sr-only"><?php echo smarty_function_oxmultilang(array('ident' => 'COOKIE_NOTE_CLOSE'), $this);?>
</span>
            </button>
            <?php echo smarty_function_oxmultilang(array('ident' => 'COOKIE_NOTE'), $this);?>

            <span class="cancelCookie"><a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=clearcookies") : smarty_modifier_cat($_tmp, "cl=clearcookies"))), $this);?>
" title="<?php echo smarty_function_oxmultilang(array('ident' => 'COOKIE_NOTE_DISAGREE'), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'COOKIE_NOTE_DISAGREE'), $this);?>
</a></span>
        </div>
    </div>
    <?php echo smarty_function_oxscript(array('add' => "$('#cookieNote').oxCookieNote();"), $this);?>

<?php endif; ?>
<?php echo smarty_function_oxscript(array('widget' => $this->_tpl_vars['oView']->getClassName()), $this);?>
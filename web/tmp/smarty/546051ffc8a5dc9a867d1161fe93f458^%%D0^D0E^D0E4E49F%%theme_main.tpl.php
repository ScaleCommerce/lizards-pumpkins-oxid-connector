<?php /* Smarty version 2.6.28, created on 2017-01-12 09:17:03
         compiled from theme_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'theme_main.tpl', 1, false),array('modifier', 'implode', 'theme_main.tpl', 27, false),array('function', 'oxmultilang', 'theme_main.tpl', 19, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)),'box' => 'box')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form name="transfer" id="transfer" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="cl" value="theme_main">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>

<?php if ($this->_tpl_vars['oTheme']): ?>

<table cellspacing="10" width="98%">
    <tr>
        <td width="20%" valign="top"><img src="<?php echo $this->_tpl_vars['oViewConf']->getBaseDir(); ?>
/out/<?php echo $this->_tpl_vars['oTheme']->getInfo('id'); ?>
/<?php echo $this->_tpl_vars['oTheme']->getInfo('thumbnail'); ?>
" hspace="20" vspace="10"></td>
        <td width="50%" valign="top">
            <h1 style="color:#000;font-size:25px;"><?php echo $this->_tpl_vars['oTheme']->getInfo('title'); ?>
</h1>
            <p><?php echo $this->_tpl_vars['oTheme']->getInfo('description'); ?>
</p>
            <?php if ($this->_tpl_vars['oTheme']->getInfo('parentTheme')): ?>
                <strong><?php echo smarty_function_oxmultilang(array('ident' => 'THEME_PARENT_THEME_TITLE'), $this);?>
: </strong>
                <?php $this->assign('_oParent', $this->_tpl_vars['oTheme']->getParent()); ?>
                <?php if ($this->_tpl_vars['_oParent']): ?>
                    <a class="themetitle" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&amp;cl=theme_main&amp;oxid=<?php echo $this->_tpl_vars['oTheme']->getInfo('parentTheme'); ?>
&amp;updatelist=1"><?php echo $this->_tpl_vars['_oParent']->getInfo('title'); ?>
</a>
                <?php else: ?>
                    <span class="error"><?php echo $this->_tpl_vars['oTheme']->getInfo('parentTheme'); ?>
</span>
                <?php endif; ?>
                <br>
                <strong><?php echo smarty_function_oxmultilang(array('ident' => 'THEME_PARENT_VERSIONS'), $this);?>
: </strong> <?php echo ((is_array($_tmp=', ')) ? $this->_run_mod_handler('implode', true, $_tmp, $this->_tpl_vars['oTheme']->getInfo('parentVersions')) : implode($_tmp, $this->_tpl_vars['oTheme']->getInfo('parentVersions'))); ?>

            <?php endif; ?>
            <hr>
            <p style="color:#aaa;">
            <b><?php echo smarty_function_oxmultilang(array('ident' => 'THEME_AUTHOR'), $this);?>
</b> <?php echo $this->_tpl_vars['oTheme']->getInfo('author'); ?>
<br><br>
            <?php echo smarty_function_oxmultilang(array('ident' => 'THEME_VERSION'), $this);?>
 <?php echo $this->_tpl_vars['oTheme']->getInfo('version'); ?>

            </p>
        </td>
        <?php if (! $this->_tpl_vars['oTheme']->getInfo('active')): ?>
            <td width="1%">
                <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl(); ?>
/grayline_vert.gif" width="2" height="270" alt="" border="0">
            </td>
            <td width="19%" valign="top">
                <?php $this->assign('_sError', $this->_tpl_vars['oTheme']->checkForActivationErrors()); ?>
                <?php if (! $this->_tpl_vars['_sError']): ?>
                    <form name="myedit" id="myedit" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
                        <p>
                        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                        <input type="hidden" name="cl" value="theme_main">
                        <input type="hidden" name="fnc" value="setTheme">
                        <input type="hidden" name="updatelist" value="1">
                        <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oTheme']->getInfo('id'); ?>
">
                        <input type="submit" value="<?php echo smarty_function_oxmultilang(array('ident' => 'THEME_ACTIVATE'), $this);?>
">
                        </p>
                    </form>
                <?php else: ?>
                    <div class="error"><?php echo smarty_function_oxmultilang(array('ident' => $this->_tpl_vars['_sError']), $this);?>
</div>
                <?php endif; ?>
            </td>
        <?php endif; ?>
    </tr>
</table>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomnaviitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
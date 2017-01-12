<?php /* Smarty version 2.6.28, created on 2017-01-12 09:17:33
         compiled from article.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'article.tpl', 5, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
    <title><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ADMIN_TITLE'), $this);?>
</title>
</head>

<!-- frames -->
<frameset  rows="40%,*" border="0" onload="top.loadEditFrame('<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&<?php echo $this->_tpl_vars['editurl']; ?>
<?php if ($this->_tpl_vars['oxid']): ?>&oxid=<?php echo $this->_tpl_vars['oxid']; ?>
<?php endif; ?>');">
    <frame src="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&<?php echo $this->_tpl_vars['listurl']; ?>
<?php if ($this->_tpl_vars['oxid']): ?>&oxid=<?php echo $this->_tpl_vars['oxid']; ?>
<?php endif; ?>" name="list" id="list" frameborder="0" scrolling="Auto" noresize marginwidth="0" marginheight="0">
    <frame src="" name="edit" id="edit" frameborder="0" scrolling="Auto" noresize marginwidth="0" marginheight="0">
</frameset>


</html>
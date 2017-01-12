<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:51
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'header.tpl', 4, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html id="top">
<head>
    <title><?php echo smarty_function_oxmultilang(array('ident' => 'NAVIGATION_TITLE'), $this);?>
</title>
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['oViewConf']->getResourceUrl(); ?>
nav.css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['oViewConf']->getResourceUrl(); ?>
colors.css">
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
">
</head>
<body>
    <?php $this->assign('oConfig', $this->_tpl_vars['oViewConf']->getConfig()); ?>
    <ul>
      <li class="act">
          <a href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=navigation&amp;item=home.tpl" id="homelink" target="basefrm" class="rc"><b><?php echo smarty_function_oxmultilang(array('ident' => 'NAVIGATION_HOME'), $this);?>
</b></a>
      </li>
      <li class="sep">
          <a href="<?php echo $this->_tpl_vars['oConfig']->getShopURL(); ?>
" id="shopfrontlink" target="_blank" class="rc"><b><?php echo smarty_function_oxmultilang(array('ident' => 'NAVIGATION_SHOPFRONT'), $this);?>
</b></a>
      </li>
      <li class="sep">
          <a href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=navigation&amp;fnc=logout" id="logoutlink" target="_parent" class="rc"><b><?php echo smarty_function_oxmultilang(array('ident' => 'NAVIGATION_LOGOUT'), $this);?>
</b></a>
      </li>
    </ul>

    <div class="version">
        <b>
            <?php echo $this->_tpl_vars['oView']->getShopFullEdition(); ?>

            <?php echo $this->_tpl_vars['oView']->getShopVersion(); ?>

        </b>
    </div>

</body>
</html>
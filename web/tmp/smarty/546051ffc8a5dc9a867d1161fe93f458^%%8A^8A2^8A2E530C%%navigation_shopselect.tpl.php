<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:53
         compiled from navigation_shopselect.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'navigation_shopselect.tpl', 1, false),array('function', 'oxstyle', 'navigation_shopselect.tpl', 4, false),array('modifier', 'default', 'navigation_shopselect.tpl', 14, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/libs/jquery.min.js"), $this);?>

<?php echo smarty_function_oxscript(array('include' => "js/libs/chosen/chosen.jquery.min.js"), $this);?>

<?php echo smarty_function_oxscript(array('include' => "js/widgets/oxshopselect.js"), $this);?>

<?php echo smarty_function_oxstyle(array('include' => "css/libs/chosen/chosen.min.css"), $this);?>


<?php if ($this->_tpl_vars['oView']->isMall()): ?>
    <form name="search" id="search" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oViewConf']->getActiveClassName(); ?>
">
        <input type="hidden" name="item" value="navigation.tpl">
        <input type="hidden" name="fnc" value="chshp">
        <select id="selectshop" class="folderselect" onChange="selectShop( this.value );">
        <?php $_from = $this->_tpl_vars['shoplist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oShop']):
?>
            <option value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['oShop']->oxshops__oxid->value)) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['oViewConf']->getActiveShopId()) : smarty_modifier_default($_tmp, @$this->_tpl_vars['oViewConf']->getActiveShopId())); ?>
" <?php if ($this->_tpl_vars['oViewConf']->getActiveShopId() == ((is_array($_tmp=@$this->_tpl_vars['oShop']->oxshops__oxid->value)) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['oViewConf']->getActiveShopId()) : smarty_modifier_default($_tmp, @$this->_tpl_vars['oViewConf']->getActiveShopId()))): ?>selected<?php endif; ?>><?php echo ((is_array($_tmp=@$this->_tpl_vars['oShop']->oxshops__oxname->value)) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['actshop']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['actshop'])); ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </select>
    </form>
<?php endif; ?>

<?php echo smarty_function_oxscript(array(), $this);?>

<?php echo smarty_function_oxstyle(array(), $this);?>
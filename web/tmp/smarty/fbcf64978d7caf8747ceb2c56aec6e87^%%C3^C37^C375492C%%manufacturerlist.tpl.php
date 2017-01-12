<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/footer/manufacturerlist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'widget/footer/manufacturerlist.tpl', 3, false),array('function', 'oxmultilang', 'widget/footer/manufacturerlist.tpl', 7, false),)), $this); ?>
<?php $this->assign('iManufacturerLimit', '20'); ?>
<?php $this->assign('manufacturers', $this->_tpl_vars['oView']->getManufacturerlist()); ?>
<?php if (((is_array($_tmp=$this->_tpl_vars['manufacturers'])) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp))): ?>
    
        <ul class="manufacturers list-unstyled">
            <?php $this->assign('rootManufacturer', $this->_tpl_vars['oView']->getRootManufacturer()); ?>
            <li><a href="<?php echo $this->_tpl_vars['rootManufacturer']->getLink(); ?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'ALL_BRANDS'), $this);?>
</a></li>
            <?php $_from = $this->_tpl_vars['manufacturers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['manufacturers'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['manufacturers']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_mnf']):
        $this->_foreach['manufacturers']['iteration']++;
?>
                <?php if (($this->_foreach['manufacturers']['iteration']-1) < $this->_tpl_vars['iManufacturerLimit']): ?>
                    <li><a href="<?php echo $this->_tpl_vars['_mnf']->getLink(); ?>
" <?php if ($this->_tpl_vars['_mnf']->expanded): ?>class="exp"<?php endif; ?>><?php echo $this->_tpl_vars['_mnf']->oxmanufacturers__oxtitle->value; ?>
</a></li>
                <?php elseif (($this->_foreach['manufacturers']['iteration']-1) == $this->_tpl_vars['iManufacturerLimit']): ?>
                    <li><a href="<?php echo $this->_tpl_vars['rootManufacturer']->getLink(); ?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'MORE'), $this);?>
</a></li>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
    
<?php endif; ?>
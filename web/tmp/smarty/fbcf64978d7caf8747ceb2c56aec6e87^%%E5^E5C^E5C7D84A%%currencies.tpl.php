<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/header/currencies.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxaddparams', 'widget/header/currencies.tpl', 15, false),)), $this); ?>
<?php if ($this->_tpl_vars['oView']->loadCurrency()): ?>
    <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
    <div class="btn-group currencies-menu">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
            
                <?php echo $this->_tpl_vars['currency']->name; ?>
 <i class="fa fa-angle-down"></i>
            
        </button>
        <ul class="dropdown-menu dropdown-menu-right" role="menu">
            
                <?php $_from = $this->_tpl_vars['oxcmp_cur']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_cur']):
?>
                    <?php if ($this->_tpl_vars['_cur']->selected): ?>
                        <?php $this->assign('selectedCurrency', $this->_tpl_vars['_cur']->name); ?>
                        <?php ob_start(); ?>
                            <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['_cur']->link)) ? $this->_run_mod_handler('oxaddparams', true, $_tmp, $this->_tpl_vars['oView']->getDynUrlParams()) : smarty_modifier_oxaddparams($_tmp, $this->_tpl_vars['oView']->getDynUrlParams())); ?>
" title="<?php echo $this->_tpl_vars['_cur']->name; ?>
"><span><?php echo $this->_tpl_vars['_cur']->name; ?>
</span></a>
                        <?php $this->_smarty_vars['capture']['currencySelected'] = ob_get_contents(); ob_end_clean(); ?>
                    <?php endif; ?>
                    <li<?php if ($this->_tpl_vars['_cur']->selected): ?> class="active"<?php endif; ?>><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['_cur']->link)) ? $this->_run_mod_handler('oxaddparams', true, $_tmp, $this->_tpl_vars['oView']->getDynUrlParams()) : smarty_modifier_oxaddparams($_tmp, $this->_tpl_vars['oView']->getDynUrlParams())); ?>
" title="<?php echo $this->_tpl_vars['_cur']->name; ?>
"><?php echo $this->_tpl_vars['_cur']->name; ?>
</a>
                <?php endforeach; endif; unset($_from); ?>
            
        </ul>
    </div>
<?php endif; ?>
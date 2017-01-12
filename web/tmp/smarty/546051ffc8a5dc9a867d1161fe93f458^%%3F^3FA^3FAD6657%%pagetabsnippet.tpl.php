<?php /* Smarty version 2.6.28, created on 2017-01-12 09:17:03
         compiled from pagetabsnippet.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'pagetabsnippet.tpl', 16, false),array('modifier', 'default', 'pagetabsnippet.tpl', 27, false),array('function', 'oxmultilang', 'pagetabsnippet.tpl', 34, false),)), $this); ?>
<div class="tabs">
<table cellspacing="0" cellpadding="0" border="0">
<tr>
<?php $this->assign('_cnt', '0'); ?>
<?php $_from = $this->_tpl_vars['editnavi']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['edit']):
?>
  <?php if ($this->_tpl_vars['edit']->getAttribute('active')): ?>
    <?php $this->assign('_act', $this->_tpl_vars['edit']->getAttribute('id')); ?>
    <?php $this->assign('_state', 'active'); ?>
  <?php elseif ($this->_tpl_vars['oxid'] == "-1"): ?>
    <?php $this->assign('_state', 'disabled'); ?>
  <?php else: ?>
    <?php $this->assign('_state', 'inactive'); ?>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['_cnt'] == 0): ?>
    <?php $this->assign('_state', ((is_array($_tmp=$this->_tpl_vars['_state'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' first') : smarty_modifier_cat($_tmp, ' first'))); ?>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['_cnt'] == $this->_tpl_vars['editnavi']->length -1): ?>
    <?php $this->assign('_state', ((is_array($_tmp=$this->_tpl_vars['_state'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' last') : smarty_modifier_cat($_tmp, ' last'))); ?>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['edit']->getAttribute('external') == 'true'): ?>
    <?php $this->assign('_action', 'ChangeExternal'); ?>
    <?php $this->assign('_param1', $this->_tpl_vars['edit']->getAttribute('location')); ?>
  <?php else: ?>
    <?php $this->assign('_action', ((is_array($_tmp=@$this->_tpl_vars['sEditAction'])) ? $this->_run_mod_handler('default', true, $_tmp, "top.oxid.admin.changeEditBar") : smarty_modifier_default($_tmp, "top.oxid.admin.changeEditBar"))); ?>
    <?php $this->assign('_param1', $this->_tpl_vars['edit']->getAttribute('cl')); ?>
  <?php endif; ?>

  <td class="tab <?php echo $this->_tpl_vars['_state']; ?>
">
      <div class="r1"><div class="b1">
          <?php if ($this->_tpl_vars['oxid'] != "-1" || $this->_tpl_vars['noOXIDCheck']): ?>
            <a href="#<?php echo $this->_tpl_vars['_param1']; ?>
" onclick="<?php echo $this->_tpl_vars['_action']; ?>
('<?php echo $this->_tpl_vars['_param1']; ?>
',<?php echo $this->_tpl_vars['_cnt']; ?>
);return false;"><?php echo smarty_function_oxmultilang(array('ident' => $this->_tpl_vars['edit']->getAttribute('id'),'noerror' => true), $this);?>
</a>
          <?php else: ?>
            <?php echo smarty_function_oxmultilang(array('ident' => $this->_tpl_vars['edit']->getAttribute('id'),'noerror' => true), $this);?>

          <?php endif; ?>
      </div></div>
  </td>

  <?php $this->assign('_cnt', $this->_tpl_vars['_cnt']+1); ?>
<?php endforeach; endif; unset($_from); ?>
  <td class="line"></td>
</tr>
</table>
</div>
<?php /* Smarty version 2.6.28, created on 2017-01-12 09:17:33
         compiled from _formparams.tpl */ ?>

    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['cl']; ?>
">
    <input type="hidden" name="lstrt" value="<?php echo $this->_tpl_vars['lstrt']; ?>
">
    <input type="hidden" name="actedit" value="<?php echo $this->_tpl_vars['actedit']; ?>
">
    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="fnc" value="<?php echo $this->_tpl_vars['fnc']; ?>
">
    <input type="hidden" name="language" value="<?php echo $this->_tpl_vars['language']; ?>
">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
    <input type="hidden" name="delshopid" value="<?php echo $this->_tpl_vars['delshopid']; ?>
">
    <input type="hidden" name="updatenav" value="<?php echo $this->_tpl_vars['updatenav']; ?>
">
        <?php $_from = $this->_tpl_vars['oView']->getListSorting(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sTable'] => $this->_tpl_vars['aField']):
?>
        <?php $_from = $this->_tpl_vars['aField']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sField'] => $this->_tpl_vars['sSorting']):
?>
        <input type="hidden" name="sort[<?php echo $this->_tpl_vars['sTable']; ?>
][<?php echo $this->_tpl_vars['sField']; ?>
]" value="<?php echo $this->_tpl_vars['sSorting']; ?>
">
      <?php endforeach; endif; unset($_from); ?>
    <?php endforeach; endif; unset($_from); ?>
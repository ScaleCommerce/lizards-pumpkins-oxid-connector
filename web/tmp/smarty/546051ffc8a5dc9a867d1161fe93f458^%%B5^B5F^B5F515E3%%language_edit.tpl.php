<?php /* Smarty version 2.6.28, created on 2017-01-12 09:17:34
         compiled from language_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'language_edit.tpl', 6, false),)), $this); ?>

    <?php if ($this->_tpl_vars['oxid'] != "-1"): ?>
        <table cellspacing="2" cellpadding="2" border="0">
        <tr>
        <td align="left" class="saveinnewlangtext">
            <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_LANGUAGE'), $this);?>

        </td>
        <td align="left">
            <select name="editlanguage" id="test_editlanguage" class="saveinnewlanginput" onChange="Javascript:document.myedit.submit();" <?php echo $this->_tpl_vars['custreadonly']; ?>
>
            <?php $_from = $this->_tpl_vars['otherlang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang'] => $this->_tpl_vars['olang']):
?>
            <option value="<?php echo $this->_tpl_vars['lang']; ?>
"<?php if ($this->_tpl_vars['olang']->selected): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['olang']->sLangDesc; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select>
        </td>
        </tr>
        <?php if ($this->_tpl_vars['posslang']): ?>
        <tr>
        <td align="left">
            <input type="submit" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SAVEIN'), $this);?>
" class="saveinnewlangtext" style="width: 100;" onClick="Javascript:document.myedit.fnc.value='saveinnlang'" <?php echo $this->_tpl_vars['readonly']; ?>
 <?php echo $this->_tpl_vars['readonly_fields']; ?>
 <?php echo $this->_tpl_vars['custreadonly']; ?>
>
        </td>
        <td align="left">
            <select name="new_lang" class="saveinnewlanginput" <?php echo $this->_tpl_vars['readonly']; ?>
 <?php echo $this->_tpl_vars['readonly_fields']; ?>
>
            <?php $_from = $this->_tpl_vars['posslang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang'] => $this->_tpl_vars['desc']):
?>
            <option value="<?php echo $this->_tpl_vars['lang']; ?>
"><?php echo $this->_tpl_vars['desc']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select>
        </td>
        </tr>
        <?php endif; ?>
        </table>
    <?php endif; ?>
<?php /* Smarty version 2.6.28, created on 2017-01-12 09:17:03
         compiled from theme_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'theme_list.tpl', 1, false),array('modifier', 'oxaddslashes', 'theme_list.tpl', 91, false),array('function', 'oxmultilang', 'theme_list.tpl', 55, false),array('function', 'counter', 'theme_list.tpl', 63, false),array('function', 'cycle', 'theme_list.tpl', 65, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)),'box' => 'list')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['readonly']): ?>
    <?php $this->assign('readonly', 'readonly disabled'); ?>
<?php else: ?>
    <?php $this->assign('readonly', ""); ?>
<?php endif; ?>

<script type="text/javascript">
<!--
window.onload = function ()
{
    top.reloadEditFrame();
    <?php if ($this->_tpl_vars['updatelist'] == 1): ?>
        top.oxid.admin.updateList('<?php echo $this->_tpl_vars['oxid']; ?>
');
    <?php endif; ?>
}
//-->
</script>


<div id="liste">

<form name="search" id="search" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="cl" value="theme_list">
    <input type="hidden" name="lstrt" value="<?php echo $this->_tpl_vars['lstrt']; ?>
">
    <input type="hidden" name="sort" value="<?php echo $this->_tpl_vars['sort']; ?>
">
    <input type="hidden" name="actedit" value="<?php echo $this->_tpl_vars['actedit']; ?>
">
    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="fnc" value="">
    <input type="hidden" name="language" value="<?php echo $this->_tpl_vars['actlang']; ?>
">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['actlang']; ?>
">

<table cellspacing="0" cellpadding="0" border="0" width="100%">
<colgroup>
    
        <col width="3%">
        <col width="98%">
    
</colgroup>
<tr class="listitem">
    
        <td valign="top" class="listfilter first" height="20">
            <div class="r1"><div class="b1">&nbsp;</div></div>
        </td>
        <td valign="top" class="listfilter" height="20">
            <div class="r1"><div class="b1">&nbsp;</div></div>
        </td>
    
</tr>
<tr>
    
        <td class="listheader first" height="15">
            <b><a href="Javascript:document.search.sort.value='oxtitle';document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ACTIVE'), $this);?>
</a></b>
        </td>
        <td class="listheader" height="15">
            <b><a href="Javascript:document.search.sort.value='oxtitle';document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_NAME'), $this);?>
</a></b>
        </td>
    
</tr>
<?php $_from = $this->_tpl_vars['mylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listitem']):
?>
<tr id="row.<?php echo smarty_function_counter(array(), $this);?>
">
    
        <?php echo smarty_function_cycle(array('values' => "listitem,listitem2",'assign' => 'zebra'), $this);?>

        <?php if ($this->_tpl_vars['listitem']->getInfo('id') == $this->_tpl_vars['oxid']): ?>
            <?php $this->assign('zebra', 'listitem4'); ?>
        <?php endif; ?>
        <td valign="top" class="<?php echo $this->_tpl_vars['zebra']; ?>
<?php if ($this->_tpl_vars['listitem']->getInfo('active')): ?> active<?php endif; ?>" height="15">
            <div class="listitemfloating">
                <a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->getInfo('id'); ?>
');">&nbsp;</a></div></td>
            </div>
        </td>
        <td valign="top" class="<?php echo $this->_tpl_vars['zebra']; ?>
" height="15">
            <div class="listitemfloating">
                <a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->getInfo('id'); ?>
');"><?php echo $this->_tpl_vars['listitem']->getInfo('title'); ?>
</a>
            </div>
        </td>
    
</tr>
<?php endforeach; endif; unset($_from); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pagenavisnippet.tpl", 'smarty_include_vars' => array('colspan' => '5')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>
</form>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pagetabsnippet.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
if (parent.parent)
{   parent.parent.sShopTitle   = "<?php echo ((is_array($_tmp=$this->_tpl_vars['actshopobj']->oxshops__oxname->getRawValue())) ? $this->_run_mod_handler('oxaddslashes', true, $_tmp) : smarty_modifier_oxaddslashes($_tmp)); ?>
";
    parent.parent.sMenuItem    = "<?php echo smarty_function_oxmultilang(array('ident' => 'ACTIONS_LIST_MENUITEM'), $this);?>
";
    parent.parent.sMenuSubItem = "<?php echo smarty_function_oxmultilang(array('ident' => 'ACTIONS_LIST_MENUSUBITEM'), $this);?>
";
    parent.parent.sWorkArea    = "<?php echo $this->_tpl_vars['_act']; ?>
";
    parent.parent.setTitle();
}
</script>
</body>
</html>

<?php /* Smarty version 2.6.28, created on 2017-01-12 09:17:33
         compiled from article_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'article_list.tpl', 1, false),array('modifier', 'oxupper', 'article_list.tpl', 71, false),array('modifier', 'oxtruncate', 'article_list.tpl', 72, false),array('modifier', 'oxlower', 'article_list.tpl', 75, false),array('modifier', 'strip_tags', 'article_list.tpl', 120, false),array('modifier', 'oxaddslashes', 'article_list.tpl', 143, false),array('function', 'oxmultilang', 'article_list.tpl', 51, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)),'box' => 'list')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('where', $this->_tpl_vars['oView']->getListFilter()); ?>

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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_formparams.tpl", 'smarty_include_vars' => array('cl' => 'article_list','lstrt' => $this->_tpl_vars['lstrt'],'actedit' => $this->_tpl_vars['actedit'],'oxid' => $this->_tpl_vars['oxid'],'fnc' => "",'language' => $this->_tpl_vars['actlang'],'editlanguage' => $this->_tpl_vars['actlang'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
    <colgroup>
        
            <col width="3%">
            <col width="10%">
            <col width="45%">
            <col width="30%">
            <col width="2%">
        
    </colgroup>
    <tr class="listitem">
        
            <td valign="top" class="listfilter first" align="right">
                <div class="r1"><div class="b1">&nbsp;</div></div>
            </td>
            <td valign="top" class="listfilter" align="left">
                <div class="r1"><div class="b1">
                <input class="listedit" type="text" size="9" maxlength="128" name="where[oxarticles][oxartnum]" value="<?php echo $this->_tpl_vars['where']['oxarticles']['oxartnum']; ?>
">
                </div></div>
            </td>
            <td height="20" valign="middle" class="listfilter" nowrap>
                <div class="r1"><div class="b1">
                <select name="art_category" class="editinput" onChange="Javascript:document.search.lstrt.value=0;document.search.submit();">
                <option value=""><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_LIST_ALLPRODUCTS'), $this);?>
</option>
                <optgroup label="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_CATEGORY'), $this);?>
">
                <?php $_from = $this->_tpl_vars['cattree']->aList; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pcat']):
?>
                <option value="cat@@<?php echo $this->_tpl_vars['pcat']->oxcategories__oxid->value; ?>
" <?php if ($this->_tpl_vars['pcat']->selected): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['pcat']->oxcategories__oxtitle->getRawValue(); ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </optgroup>
                <optgroup label="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_MANUFACTURER'), $this);?>
">
                <?php $_from = $this->_tpl_vars['mnftree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pmnf']):
?>
                <option value="mnf@@<?php echo $this->_tpl_vars['pmnf']->oxmanufacturers__oxid->value; ?>
" <?php if ($this->_tpl_vars['pmnf']->selected): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['pmnf']->oxmanufacturers__oxtitle->value; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </optgroup>
                <optgroup label="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_VENDOR'), $this);?>
">
                <?php $_from = $this->_tpl_vars['vndtree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pvnd']):
?>
                <option value="vnd@@<?php echo $this->_tpl_vars['pvnd']->oxvendor__oxid->value; ?>
" <?php if ($this->_tpl_vars['pvnd']->selected): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['pvnd']->oxvendor__oxtitle->value; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </optgroup>
                </select>
                <select name="pwrsearchfld" class="editinput" onChange="Javascript:document.search.lstrt.value=0;top.oxid.admin.setSorting( document.search, 'oxarticles', this.value, 'asc');document.forms.search.submit();">
                    <?php $_from = $this->_tpl_vars['pwrsearchfields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['desc']):
?>
                    <?php $this->assign('ident', "GENERAL_ARTICLE_".($this->_tpl_vars['desc'])); ?>
                    <?php $this->assign('ident', ((is_array($_tmp=$this->_tpl_vars['ident'])) ? $this->_run_mod_handler('oxupper', true, $_tmp) : smarty_modifier_oxupper($_tmp))); ?>
                    <option value="<?php echo $this->_tpl_vars['desc']; ?>
" <?php if ($this->_tpl_vars['pwrsearchfld'] == ((is_array($_tmp=$this->_tpl_vars['desc'])) ? $this->_run_mod_handler('oxupper', true, $_tmp) : smarty_modifier_oxupper($_tmp))): ?>SELECTED<?php endif; ?>><?php echo ((is_array($_tmp=smarty_function_oxmultilang(array('noerror' => true,'alternative' => $this->_tpl_vars['desc'],'ident' => $this->_tpl_vars['ident']), $this))) ? $this->_run_mod_handler('oxtruncate', true, $_tmp, 20, "..", true) : smarty_modifier_oxtruncate($_tmp, 20, "..", true));?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
                <input class="listedit" type="text" size="20" maxlength="128" name="where[oxarticles][<?php echo ((is_array($_tmp=$this->_tpl_vars['pwrsearchfld'])) ? $this->_run_mod_handler('oxlower', true, $_tmp) : smarty_modifier_oxlower($_tmp)); ?>
]" value="<?php echo $this->_tpl_vars['pwrsearchinput']; ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'searchfieldoxdynamic')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>>
                </div></div>
            </td>
            <td valign="top" class="listfilter" colspan="2" nowrap>
                <div class="r1"><div class="b1">
                <div class="find">
                <select name="changelang" class="editinput" onChange="Javascript:top.oxid.admin.changeLanguage();">
                <?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang']):
?>
                <option value="<?php echo $this->_tpl_vars['lang']->id; ?>
" <?php if ($this->_tpl_vars['lang']->selected): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['lang']->name; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
                <input class="listedit" type="submit" name="submitit" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SEARCH'), $this);?>
" onClick="Javascript:document.search.lstrt.value=0;">
                </div>
                <input class="listedit" type="text" size="25" maxlength="128" name="where[oxarticles][oxshortdesc]" value="<?php echo $this->_tpl_vars['where']['oxarticles']['oxshortdesc']; ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'searchfieldoxshortdesc')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>>
                </div></div>
            </td>
        
    </tr>
    <tr class="listitem">
        
            <td class="listheader first" height="15" width="30" align="center"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxarticles', 'oxactive', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ACTIVTITLE'), $this);?>
</a></td>
            <td class="listheader"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxarticles', 'oxartnum', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ARTNUM'), $this);?>
</a></td>
            <td class="listheader" height="15">&nbsp;<a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxarticles', '<?php echo ((is_array($_tmp=$this->_tpl_vars['pwrsearchfld'])) ? $this->_run_mod_handler('oxlower', true, $_tmp) : smarty_modifier_oxlower($_tmp)); ?>
', 'asc');document.search.submit();" class="listheader"><?php $this->assign('ident', "GENERAL_ARTICLE_".($this->_tpl_vars['pwrsearchfld'])); ?><?php $this->assign('ident', ((is_array($_tmp=$this->_tpl_vars['ident'])) ? $this->_run_mod_handler('oxupper', true, $_tmp) : smarty_modifier_oxupper($_tmp))); ?><?php echo smarty_function_oxmultilang(array('ident' => $this->_tpl_vars['ident']), $this);?>
</a></td>
            <td class="listheader" colspan="2"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxarticles', 'oxshortdesc', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SHORTDESC'), $this);?>
</a></td>
        
    </tr>

<?php $this->assign('blWhite', ""); ?>
<?php $this->assign('_cnt', 0); ?>
<?php $_from = $this->_tpl_vars['mylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listitem']):
?>
    <?php $this->assign('_cnt', $this->_tpl_vars['_cnt']+1); ?>
    <tr id="row.<?php echo $this->_tpl_vars['_cnt']; ?>
">

    
        <?php if ($this->_tpl_vars['listitem']->blacklist == 1): ?>
            <?php $this->assign('listclass', 'listitem3'); ?>
        <?php else: ?>
            <?php $this->assign('listclass', "listitem".($this->_tpl_vars['blWhite'])); ?>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['listitem']->oxarticles__oxid->value == $this->_tpl_vars['oxid']): ?>
            <?php $this->assign('listclass', 'listitem4'); ?>
        <?php endif; ?>
        <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
<?php if ($this->_tpl_vars['listitem']->oxarticles__oxactive->value == 1): ?> active<?php endif; ?>" height="15"><div class="listitemfloating">&nbsp</a></div></td>
        <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxarticles__oxid->value; ?>
');" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><?php echo $this->_tpl_vars['listitem']->oxarticles__oxartnum->value; ?>
</a></div></td>
        <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
" height="15"><div class="listitemfloating">&nbsp;<a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxarticles__oxid->value; ?>
');" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['listitem']->pwrsearchval)) ? $this->_run_mod_handler('oxtruncate', true, $_tmp, 200, "..", false) : smarty_modifier_oxtruncate($_tmp, 200, "..", false)); ?>
</a></div></td>
        <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxarticles__oxid->value; ?>
');" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['listitem']->oxarticles__oxshortdesc->value)) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('oxtruncate', true, $_tmp, 45, "..", true) : smarty_modifier_oxtruncate($_tmp, 45, "..", true)); ?>
</a></div></td>
        <td class="<?php echo $this->_tpl_vars['listclass']; ?>
">
          <?php if (! $this->_tpl_vars['readonly']): ?>
              <a href="Javascript:top.oxid.admin.deleteThis('<?php echo $this->_tpl_vars['listitem']->oxarticles__oxid->value; ?>
');" class="delete" id="del.<?php echo $this->_tpl_vars['_cnt']; ?>
"title="" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'item_delete')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>></a>
          <?php endif; ?>
        </td>
    
</tr>
<?php if ($this->_tpl_vars['blWhite'] == '2'): ?>
<?php $this->assign('blWhite', ""); ?>
<?php else: ?>
<?php $this->assign('blWhite', '2'); ?>
<?php endif; ?>
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
    parent.parent.sMenuItem    = "<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_MENUITEM'), $this);?>
";
    parent.parent.sMenuSubItem = "<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_LIST_MENUSUBITEM'), $this);?>
";
    parent.parent.sWorkArea    = "<?php echo $this->_tpl_vars['_act']; ?>
";
    parent.parent.setTitle();
}
</script>
</body>
</html>

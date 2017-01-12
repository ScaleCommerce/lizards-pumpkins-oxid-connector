<?php /* Smarty version 2.6.28, created on 2017-01-12 09:17:34
         compiled from article_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'article_main.tpl', 1, false),array('modifier', 'oxformdate', 'article_main.tpl', 107, false),array('modifier', 'oxtruncate', 'article_main.tpl', 281, false),array('function', 'oxmultilang', 'article_main.tpl', 67, false),array('function', 'oxinputhelp', 'article_main.tpl', 97, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<!--
function editThis( sID )
{
    var oTransfer = top.basefrm.edit.document.getElementById( "transfer" );
    oTransfer.oxid.value = sID;
    oTransfer.cl.value = top.basefrm.list.sDefClass;

    //forcing edit frame to reload after submit
    top.forceReloadingEditFrame();

    var oSearch = top.basefrm.list.document.getElementById( "search" );
    oSearch.oxid.value = sID;
    oSearch.actedit.value = 0;
    oSearch.submit();
}
<?php if (! $this->_tpl_vars['oxparentid']): ?>
window.onload = function ()
{
    <?php if ($this->_tpl_vars['updatelist'] == 1): ?>
        top.oxid.admin.updateList('<?php echo $this->_tpl_vars['oxid']; ?>
');
    <?php endif; ?>
    var oField = top.oxid.admin.getLockTarget();
    oField.onchange = oField.onkeyup = oField.onmouseout = top.oxid.admin.unlockSave;
}
<?php endif; ?>
//-->
</script>

<?php if ($this->_tpl_vars['readonly']): ?>
    <?php $this->assign('readonly', 'readonly disabled'); ?>
<?php else: ?>
    <?php $this->assign('readonly', ""); ?>
<?php endif; ?>

<form name="transfer" id="transfer" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="oxidCopy" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="cl" value="article_main">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>




      <table cellspacing="0" cellpadding="0" border="0" style="width:98%;">
        <form name="myedit" id="myedit" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post" onSubmit="return copyLongDesc( 'oxarticles__oxlongdesc' );" style="padding: 0px;margin: 0px;height:0px;">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <input type="hidden" name="cl" value="article_main">
        <input type="hidden" name="fnc" value="">
        <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
        <input type="hidden" name="voxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
        <input type="hidden" name="oxparentid" value="<?php echo $this->_tpl_vars['oxparentid']; ?>
">
        <input type="hidden" name="editval[oxarticles__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
        <input type="hidden" name="editval[oxarticles__oxlongdesc]" value="">
        <tr>
          <td valign="top" class="edittext" style="padding-top:10px;padding-left:10px;">
            <table cellspacing="0" cellpadding="0" border="0">
              
                  <?php if ($this->_tpl_vars['errorsavingatricle']): ?>
                  <tr>
                    <td colspan="2">
                      <?php if ($this->_tpl_vars['errorsavingatricle'] == 1): ?>
                      <div class="errorbox"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_ERRORSAVINGARTICLE'), $this);?>
</div>
                      <?php endif; ?>
                    </td>
                  </tr>
                  <?php endif; ?>
                  <?php if ($this->_tpl_vars['invalid_tags']): ?>
                  <tr>
                    <td colspan="2">
                      <div class="errorbox"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_INVALIDTAGSFOUND'), $this);?>
: <?php echo $this->_tpl_vars['invalid_tags']; ?>
</div>
                    </td>
                  </tr>
                  <?php endif; ?>
                  <?php if ($this->_tpl_vars['oxparentid']): ?>
                  <tr>
                    <td class="edittext" width="120">
                        <b><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_VARIANTE'), $this);?>
</b>
                    </td>
                    <td class="edittext">
                      <a href="Javascript:editThis('<?php echo $this->_tpl_vars['parentarticle']->oxarticles__oxid->value; ?>
');" class="edittext"><b><?php echo $this->_tpl_vars['parentarticle']->oxarticles__oxartnum->value; ?>
 <?php echo $this->_tpl_vars['parentarticle']->oxarticles__oxtitle->value; ?>
 <?php if (! $this->_tpl_vars['parentarticle']->oxarticles__oxtitle->value): ?><?php echo $this->_tpl_vars['parentarticle']->oxarticles__oxvarselect->value; ?>
<?php endif; ?></b></a>
                    </td>
                  </tr>
                  <?php endif; ?>

                    <tr>
                      <td class="edittext" width="120">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_ACTIVE'), $this);?>

                      </td>
                      <td class="edittext">
                        <input type="hidden" name="editval[oxarticles__oxactive]" value="0">
                        <input class="edittext" type="checkbox" name="editval[oxarticles__oxactive]" value='1' <?php if ($this->_tpl_vars['edit']->oxarticles__oxactive->value == 1): ?>checked<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_MAIN_ACTIVE'), $this);?>

                      </td>
                    </tr>

                    <?php if ($this->_tpl_vars['blUseTimeCheck']): ?>
                    <tr>
                      <td class="edittext">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_ACTIVFROMTILL'), $this);?>
&nbsp;
                      </td>
                      <td class="edittext">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_ACTIVEFROM'), $this);?>
&nbsp;<input type="text" class="editinput" size="27" name="editval[oxarticles__oxactivefrom]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']->oxarticles__oxactivefrom)) ? $this->_run_mod_handler('oxformdate', true, $_tmp) : smarty_modifier_oxformdate($_tmp)); ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'article_vonbis')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php echo $this->_tpl_vars['readonly']; ?>
><br>
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_ACTIVETO'), $this);?>
&nbsp;&nbsp;<input type="text" class="editinput" size="27" name="editval[oxarticles__oxactiveto]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['edit']->oxarticles__oxactiveto)) ? $this->_run_mod_handler('oxformdate', true, $_tmp) : smarty_modifier_oxformdate($_tmp)); ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'article_vonbis')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_MAIN_ACTIVFROMTILL'), $this);?>

                      </td>
                    </tr>
                    <?php endif; ?>

                    <tr>
                      <td class="edittext">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_TITLE'), $this);?>
&nbsp;
                      </td>
                      <td class="edittext">
                        <input type="text" class="editinput" size="32" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxtitle->fldmax_length; ?>
" id="oLockTarget" name="editval[oxarticles__oxtitle]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxtitle->value; ?>
">
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_MAIN_TITLE'), $this);?>

                      </td>
                    </tr>
                    <tr>
                      <td class="edittext">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_ARTNUM'), $this);?>
&nbsp;
                      </td>
                      <td class="edittext">
                        <input type="text" class="editinput" size="32" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxartnum->fldmax_length; ?>
" name="editval[oxarticles__oxartnum]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxartnum->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_MAIN_ARTNUM'), $this);?>

                      </td>
                    </tr>

                    <tr>
                      <td class="edittext">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_EAN'), $this);?>
&nbsp;
                      </td>
                      <td class="edittext">
                        <input type="text" class="editinput" size="32" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxean->fldmax_length; ?>
" name="editval[oxarticles__oxean]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxean->value; ?>
">
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_MAIN_EAN'), $this);?>

                      </td>
                    </tr>

                    <tr>
                      <td class="edittext">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_DISTEAN'), $this);?>
&nbsp;
                      </td>
                      <td class="edittext">
                        <input type="text" class="editinput" size="32" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxdistean->fldmax_length; ?>
" name="editval[oxarticles__oxdistean]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxdistean->value; ?>
">
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_MAIN_DISTEAN'), $this);?>

                      </td>
                    </tr>

                    <tr>
                      <td class="edittext">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_MPN'), $this);?>
&nbsp;
                      </td>
                      <td class="edittext">
                        <input type="text" class="editinput" size="32" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxmpn->fldmax_length; ?>
" name="editval[oxarticles__oxmpn]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxmpn->value; ?>
">
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_MAIN_MPN'), $this);?>

                      </td>
                    </tr>

                  <tr>
                    <td class="edittext">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_SHORTDESC'), $this);?>
&nbsp;
                    </td>
                    <td class="edittext">
                        <input type="text" class="editinput" size="32" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxshortdesc->fldmax_length; ?>
" name="editval[oxarticles__oxshortdesc]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxshortdesc->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_MAIN_SHORTDESC'), $this);?>

                    </td>
                  </tr>
                  <tr>
                    <td class="edittext">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_SEARCHKEYS'), $this);?>
&nbsp;
                    </td>
                    <td class="edittext">
                        <input type="text" class="editinput" size="32" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxsearchkeys->fldmax_length; ?>
" name="editval[oxarticles__oxsearchkeys]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxsearchkeys->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_MAIN_SEARCHKEYS'), $this);?>

                    </td>
                  </tr>

                  <tr>
                    <td class="edittext">
                      <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_TAGS'), $this);?>
&nbsp;
                    </td>
                    <td class="edittext">
                      <input type="text" class="editinput" size="32" maxlength="255" name="editval[tags]" value="<?php echo $this->_tpl_vars['edit']->tags; ?>
">
                      <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_MAIN_TAGS'), $this);?>

                    </td>
                  </tr>

                  <tr>
                    <td class="edittext">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_VENDORID'), $this);?>

                    </td>
                    <td class="edittext">
                        <select class="editinput" name="editval[oxarticles__oxvendorid]" <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <option value="" selected>---</option>
                        <?php $_from = $this->_tpl_vars['oView']->getVendorList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oVendor']):
?>
                        <option value="<?php echo $this->_tpl_vars['oVendor']->oxvendor__oxid->value; ?>
"<?php if ($this->_tpl_vars['edit']->oxarticles__oxvendorid->value == $this->_tpl_vars['oVendor']->oxvendor__oxid->value): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['oVendor']->oxvendor__oxtitle->value; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                        </select>
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_MAIN_VENDORID'), $this);?>

                    </td>
                  </tr>

                  <tr>
                    <td class="edittext">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_MANUFACTURERID'), $this);?>

                    </td>
                    <td class="edittext">
                        <select class="editinput" name="editval[oxarticles__oxmanufacturerid]" <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <option value="" selected>---</option>
                        <?php $_from = $this->_tpl_vars['oView']->getManufacturerList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oManufacturer']):
?>
                        <option value="<?php echo $this->_tpl_vars['oManufacturer']->oxmanufacturers__oxid->value; ?>
"<?php if ($this->_tpl_vars['edit']->oxarticles__oxmanufacturerid->value == $this->_tpl_vars['oManufacturer']->oxmanufacturers__oxid->value): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['oManufacturer']->oxmanufacturers__oxtitle->value; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                        </select>
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_MAIN_MANUFACTURERID'), $this);?>

                    </td>
                  </tr>

                  <?php if ($this->_tpl_vars['edit']->isParentNotBuyable()): ?>
                  <tr>
                    <td colspan="2">
                      <div class="errorbox"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_PARENTNOTBUYABLE'), $this);?>
</div>
                    </td>
                  </tr>
                  <?php endif; ?>
                    <tr>
                      <td class="edittext">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_PRICE'), $this);?>
 (<?php echo $this->_tpl_vars['oActCur']->sign; ?>
)
                      </td>
                      <td class="edittext">
                        <input type="text" class="editinput" size="8" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxprice->fldmax_length; ?>
" name="editval[oxarticles__oxprice]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxprice->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <?php $this->assign('oPrice', $this->_tpl_vars['edit']->getPrice()); ?>
                        &nbsp;<em>( <?php echo $this->_tpl_vars['oPrice']->getBruttoPrice(); ?>
 )</em>
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_MAIN_PRICE'), $this);?>

                      </td>
                    </tr>

                  <tr>
                    <td class="edittext">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_ALDPRICE'), $this);?>
 (<?php echo $this->_tpl_vars['oActCur']->sign; ?>
)
                    </td>
                    <td class="edittext" nowrap>
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_PRICEA'), $this);?>
 <input type="text" class="editinput" size="4" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxpricea->fldmax_length; ?>
" name="editval[oxarticles__oxpricea]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxpricea->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_PRICEB'), $this);?>
 <input type="text" class="editinput" size="4" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxpriceb->fldmax_length; ?>
" name="editval[oxarticles__oxpriceb]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxpriceb->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_PRICEC'), $this);?>
 <input type="text" class="editinput" size="4" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxpricec->fldmax_length; ?>
" name="editval[oxarticles__oxpricec]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxpricec->value; ?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_MAIN_ALDPRICE'), $this);?>

                    </td>
                  </tr>
                  <tr>
                    <td class="edittext">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_VAT'), $this);?>

                    </td>
                    <td class="edittext">
                        <input type="text" class="editinput" size="10" maxlength="<?php echo $this->_tpl_vars['edit']->oxarticles__oxvat->fldmax_length; ?>
" name="editval[oxarticles__oxvat]" value="<?php echo $this->_tpl_vars['edit']->oxarticles__oxvat->value; ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'article_vat')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                        <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ARTICLE_MAIN_VAT'), $this);?>

                    </td>
                  </tr>

              

              <tr>
                <td class="edittext" colspan="2"><br><br>
                <input type="submit" class="edittext" id="oLockButton" name="saveArticle" value="<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_SAVE'), $this);?>
" onClick="Javascript:document.myedit.fnc.value='save'" <?php if (! $this->_tpl_vars['edit']->oxarticles__oxtitle->value && ! $this->_tpl_vars['oxparentid']): ?>disabled<?php endif; ?> <?php echo $this->_tpl_vars['readonly']; ?>
>
                <?php if ($this->_tpl_vars['oxid'] != -1 && ! $this->_tpl_vars['readonly']): ?>
                  <input type="submit" class="edittext" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_ARTCOPY'), $this);?>
" onClick="Javascript:document.myedit.fnc.value='copyArticle';" <?php echo $this->_tpl_vars['readonly']; ?>
>&nbsp;&nbsp;&nbsp;
                <?php endif; ?>
                </td>
              </tr>
              <?php if ($this->_tpl_vars['oxid'] == -1): ?>
                <tr>
                  <td class="edittext">
                <?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_INCATEGORY'), $this);?>

                </td>
                <td class="edittext">
                <select name="art_category" class="editinput" onChange="Javascript:top.oxid.admin.changeLstrt()" <?php echo $this->_tpl_vars['readonly']; ?>
>
                <option value="-1"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_NONE'), $this);?>
</option>
                <?php $_from = $this->_tpl_vars['oView']->getCategoryList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pcat']):
?>
                <option value="<?php echo $this->_tpl_vars['pcat']->oxcategories__oxid->value; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['pcat']->oxcategories__oxtitle->value)) ? $this->_run_mod_handler('oxtruncate', true, $_tmp, 40, "..", true) : smarty_modifier_oxtruncate($_tmp, 40, "..", true)); ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
                </select>
                <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_'), $this);?>

                </td>
              </tr>
              <?php endif; ?>
              <tr>
                <td class="edittext" colspan="2"><br>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "language_edit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br>
                </td>
              </tr>
              <?php if ($this->_tpl_vars['oxid'] != -1 && $this->_tpl_vars['thisvariantlist']): ?>
              <tr>
                <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'ARTICLE_MAIN_GOTO'), $this);?>
</td>
                <td class="edittext">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "variantlist.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </td>
              </tr>
              <?php endif; ?>
            </table>
          </td>
    <!-- Anfang rechte Seite -->
          <td valign="top" class="edittext" align="left" style="width:100%;height:99%;padding-left:5px;padding-bottom:30px;padding-top:10px;">
            
                <?php echo $this->_tpl_vars['editor']; ?>

            
          </td>
    <!-- Ende rechte Seite -->
        </tr>
        </form>
      </table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomnaviitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
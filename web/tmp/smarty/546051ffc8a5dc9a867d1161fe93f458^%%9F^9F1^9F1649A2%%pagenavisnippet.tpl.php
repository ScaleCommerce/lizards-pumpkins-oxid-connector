<?php /* Smarty version 2.6.28, created on 2017-01-12 09:17:03
         compiled from pagenavisnippet.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'pagenavisnippet.tpl', 6, false),array('modifier', 'default', 'pagenavisnippet.tpl', 21, false),array('function', 'oxmultilang', 'pagenavisnippet.tpl', 28, false),)), $this); ?>
<?php if ($this->_tpl_vars['pagenavi']): ?>

  <?php $this->assign('linkSort', ""); ?>
  <?php $_from = $this->_tpl_vars['oView']->getListSorting(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sTable'] => $this->_tpl_vars['aField']):
?>
    <?php $_from = $this->_tpl_vars['aField']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sField'] => $this->_tpl_vars['sSorting']):
?>
      <?php $this->assign('linkSort', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['linkSort'])) ? $this->_run_mod_handler('cat', true, $_tmp, "sort[") : smarty_modifier_cat($_tmp, "sort[")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['sTable']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['sTable'])))) ? $this->_run_mod_handler('cat', true, $_tmp, "][") : smarty_modifier_cat($_tmp, "][")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['sField']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['sField'])))) ? $this->_run_mod_handler('cat', true, $_tmp, "]=") : smarty_modifier_cat($_tmp, "]=")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['sSorting']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['sSorting'])))) ? $this->_run_mod_handler('cat', true, $_tmp, "&amp;") : smarty_modifier_cat($_tmp, "&amp;"))); ?>
    <?php endforeach; endif; unset($_from); ?>
  <?php endforeach; endif; unset($_from); ?>

  <?php $this->assign('where', $this->_tpl_vars['oView']->getListFilter()); ?>
  <?php $this->assign('whereparam', "&amp;"); ?>
  <?php $_from = $this->_tpl_vars['where']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sTable'] => $this->_tpl_vars['aField']):
?>
    <?php $_from = $this->_tpl_vars['aField']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sField'] => $this->_tpl_vars['sFilter']):
?>
      <?php $this->assign('whereparam', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['whereparam'])) ? $this->_run_mod_handler('cat', true, $_tmp, "where[") : smarty_modifier_cat($_tmp, "where[")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['sTable']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['sTable'])))) ? $this->_run_mod_handler('cat', true, $_tmp, "][") : smarty_modifier_cat($_tmp, "][")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['sField']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['sField'])))) ? $this->_run_mod_handler('cat', true, $_tmp, "]=") : smarty_modifier_cat($_tmp, "]=")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['sFilter']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['sFilter'])))) ? $this->_run_mod_handler('cat', true, $_tmp, "&amp;") : smarty_modifier_cat($_tmp, "&amp;"))); ?>
    <?php endforeach; endif; unset($_from); ?>
  <?php endforeach; endif; unset($_from); ?>
  <?php $this->assign('viewListSize', $this->_tpl_vars['oView']->getViewListSize()); ?>
  <?php $this->assign('whereparam', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['whereparam'])) ? $this->_run_mod_handler('cat', true, $_tmp, "viewListSize=") : smarty_modifier_cat($_tmp, "viewListSize=")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['viewListSize']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['viewListSize']))); ?>

<tr>
<td class="pagination" colspan="<?php echo ((is_array($_tmp=@$this->_tpl_vars['colspan'])) ? $this->_run_mod_handler('default', true, $_tmp, '2') : smarty_modifier_default($_tmp, '2')); ?>
">
  <div class="r1">
    <div class="b1">

    <table cellspacing="0" cellpadding="0" border="0" width="100%">
      <tr>
        <td id="nav.site" class="pagenavigation" align="left" width="33%">
            <?php echo smarty_function_oxmultilang(array('ident' => 'NAVIGATION_PAGE'), $this);?>
 <?php echo $this->_tpl_vars['pagenavi']->actpage; ?>
 / <?php echo $this->_tpl_vars['pagenavi']->pages; ?>

        </td>
        <td class="pagenavigation" height="22" align="center" width="33%">
           <?php $_from = $this->_tpl_vars['pagenavi']->changePage; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iPage'] => $this->_tpl_vars['page']):
?>
             <a id="nav.page.<?php echo $this->_tpl_vars['iPage']; ?>
" class="pagenavigation<?php if ($this->_tpl_vars['iPage'] == $this->_tpl_vars['pagenavi']->actpage): ?> pagenavigationactive<?php endif; ?>" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=<?php echo $this->_tpl_vars['oViewConf']->getActiveClassName(); ?>
&amp;oxid=<?php echo $this->_tpl_vars['oxid']; ?>
&amp;jumppage=<?php echo $this->_tpl_vars['iPage']; ?>
&amp;<?php echo $this->_tpl_vars['linkSort']; ?>
actedit=<?php echo $this->_tpl_vars['actedit']; ?>
&amp;language=<?php echo $this->_tpl_vars['actlang']; ?>
&amp;editlanguage=<?php echo $this->_tpl_vars['actlang']; ?>
<?php echo $this->_tpl_vars['whereparam']; ?>
&amp;folder=<?php echo $this->_tpl_vars['folder']; ?>
&amp;pwrsearchfld=<?php echo $this->_tpl_vars['pwrsearchfld']; ?>
&amp;art_category=<?php echo $this->_tpl_vars['art_category']; ?>
"><?php echo $this->_tpl_vars['iPage']; ?>
</a>
           <?php endforeach; endif; unset($_from); ?>
        </td>
        <td class="pagenavigation" align="right" width="33%">
          <a id="nav.first" class="pagenavigation" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=<?php echo $this->_tpl_vars['oViewConf']->getActiveClassName(); ?>
&amp;oxid=<?php echo $this->_tpl_vars['oxid']; ?>
&amp;jumppage=1&amp;<?php echo $this->_tpl_vars['linkSort']; ?>
&amp;actedit=<?php echo $this->_tpl_vars['actedit']; ?>
&amp;language=<?php echo $this->_tpl_vars['actlang']; ?>
&amp;editlanguage=<?php echo $this->_tpl_vars['actlang']; ?>
<?php echo $this->_tpl_vars['whereparam']; ?>
&amp;folder=<?php echo $this->_tpl_vars['folder']; ?>
&amp;pwrsearchfld=<?php echo $this->_tpl_vars['pwrsearchfld']; ?>
&amp;art_category=<?php echo $this->_tpl_vars['art_category']; ?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_LIST_FIRST'), $this);?>
</a>
          <a id="nav.prev" class="pagenavigation" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=<?php echo $this->_tpl_vars['oViewConf']->getActiveClassName(); ?>
&amp;oxid=<?php echo $this->_tpl_vars['oxid']; ?>
&amp;jumppage=<?php if ($this->_tpl_vars['pagenavi']->actpage-1 > 0): ?><?php echo $this->_tpl_vars['pagenavi']->actpage-1; ?>
<?php else: ?>1<?php endif; ?>&amp;<?php echo $this->_tpl_vars['linkSort']; ?>
&amp;actedit=<?php echo $this->_tpl_vars['actedit']; ?>
&amp;language=<?php echo $this->_tpl_vars['actlang']; ?>
&amp;editlanguage=<?php echo $this->_tpl_vars['actlang']; ?>
<?php echo $this->_tpl_vars['whereparam']; ?>
&amp;folder=<?php echo $this->_tpl_vars['folder']; ?>
&amp;pwrsearchfld=<?php echo $this->_tpl_vars['pwrsearchfld']; ?>
&amp;art_category=<?php echo $this->_tpl_vars['art_category']; ?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_LIST_PREV'), $this);?>
</a>
          <a id="nav.next" class="pagenavigation" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=<?php echo $this->_tpl_vars['oViewConf']->getActiveClassName(); ?>
&amp;oxid=<?php echo $this->_tpl_vars['oxid']; ?>
&amp;jumppage=<?php if ($this->_tpl_vars['pagenavi']->actpage+1 > $this->_tpl_vars['pagenavi']->pages): ?><?php echo $this->_tpl_vars['pagenavi']->actpage; ?>
<?php else: ?><?php echo $this->_tpl_vars['pagenavi']->actpage+1; ?>
<?php endif; ?>&amp;<?php echo $this->_tpl_vars['linkSort']; ?>
&amp;actedit=<?php echo $this->_tpl_vars['actedit']; ?>
&amp;language=<?php echo $this->_tpl_vars['actlang']; ?>
&amp;editlanguage=<?php echo $this->_tpl_vars['actlang']; ?>
<?php echo $this->_tpl_vars['whereparam']; ?>
&amp;folder=<?php echo $this->_tpl_vars['folder']; ?>
&amp;pwrsearchfld=<?php echo $this->_tpl_vars['pwrsearchfld']; ?>
&amp;art_category=<?php echo $this->_tpl_vars['art_category']; ?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_LIST_NEXT'), $this);?>
</a>
          <a id="nav.last" class="pagenavigation" href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=<?php echo $this->_tpl_vars['oViewConf']->getActiveClassName(); ?>
&amp;oxid=<?php echo $this->_tpl_vars['oxid']; ?>
&amp;jumppage=<?php echo $this->_tpl_vars['pagenavi']->pages; ?>
&amp;<?php echo $this->_tpl_vars['linkSort']; ?>
&amp;actedit=<?php echo $this->_tpl_vars['actedit']; ?>
&amp;language=<?php echo $this->_tpl_vars['actlang']; ?>
&amp;editlanguage=<?php echo $this->_tpl_vars['actlang']; ?>
<?php echo $this->_tpl_vars['whereparam']; ?>
&amp;folder=<?php echo $this->_tpl_vars['folder']; ?>
&amp;pwrsearchfld=<?php echo $this->_tpl_vars['pwrsearchfld']; ?>
&amp;art_category=<?php echo $this->_tpl_vars['art_category']; ?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_LIST_LAST'), $this);?>
</a>
        </td>
      </tr>
    </table>
    </div>
  </div>
</td>
</tr>
<?php endif; ?>
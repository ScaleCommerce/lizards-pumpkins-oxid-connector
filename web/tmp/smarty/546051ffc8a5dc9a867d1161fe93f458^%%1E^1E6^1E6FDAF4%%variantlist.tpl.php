<?php /* Smarty version 2.6.28, created on 2017-01-12 09:17:51
         compiled from variantlist.tpl */ ?>
<?php if ($this->_tpl_vars['oxid'] != "-1"): ?>
<script type="text/javascript">
<!--
function JumpVariant(obj)
{
    var oTransfer = document.getElementById("transfer");
    oTransfer.oxid.value=obj.value;
    oTransfer.cl.value='article_main';

    //forcing edit frame to reload after submit
    top.forceReloadingEditFrame();

    var oSearch = parent.list.document.getElementById("search");
    oSearch.oxid.value=obj.value;
    oSearch.submit();
}
//-->
</script>
<table cellspacing="2" cellpadding="2" border="0">
  <tr>
    <td>
      <select name="art_variants" onChange="Javascript:JumpVariant(this);" class="editinput">
        <?php $_from = $this->_tpl_vars['thisvariantlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['num'] => $this->_tpl_vars['variant']):
?>
          <option value="<?php echo $this->_tpl_vars['variant'][0]; ?>
" <?php if ($this->_tpl_vars['oxid'] == $this->_tpl_vars['variant'][0]): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['variant'][1]; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
      </select>
    </td>
  </tr>
</table>
<?php endif; ?>
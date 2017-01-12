<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:51
         compiled from start.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'start.tpl', 4, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <title><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ADMIN_TITLE'), $this);?>
</title>
    <link rel="shortcut icon" href="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl(); ?>
favicon.ico">
</head>
<script type="text/javascript">
<!--//
sInitValue = "[OXID Administrator]";
sShopTitle = "";
sMenuItem  = "";
sMenuSubItem  = "";
sWorkArea  = "";
//
function setTitle()
{
    if (sShopTitle.length)
        document.title = "[" + sShopTitle + "]";
    else
        document.title = sInitValue;

    if (sMenuItem.length)
        document.title += " - " + sMenuItem;

    if (sMenuSubItem.length)
        document.title += " - " + sMenuSubItem;

    if (sWorkArea.length)
        document.title += " - " + sWorkArea;
}

function forceReloadingEditFrame()
{
    //forcing edit frame to reload after submit
    top.basefrm.edit.document.reloadFrame = true;
}

function forceReloadingListFrame( oxId )
{
    //forcing list frame to reload after submit
    top.basefrm.list.document.reloadFrame = true;
}

function reloadEditFrame()
{
    if (top.basefrm.edit) {
      if (top.basefrm.edit.document.reloadFrame) {
          var oTransfer = top.basefrm.edit.document.getElementById("transfer");
          oTransfer.submit();
      }
    }
}

function reloadListFrame()
{
  if (top.basefrm.list) {
      if (top.basefrm.list.document.reloadFrame) {
          top.oxid.admin.updateList();
      }
  }
}

function reloadListEditFrames()
{
  reloadListFrame();
  reloadEditFrame();
}

function loadEditFrame(sUrl)
{
    top.basefrm.edit.document.location = sUrl;
}
//-->
</script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['oViewConf']->getResourceUrl(); ?>
oxid.js"></script>
</html>

<frameset rows="54,*" border="0">
    <frame src="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=navigation&item=header.tpl" name="header" id="header" frameborder="0" scrolling="No" noresize marginwidth="0" marginheight="0">
    <frameset  cols="200,*" border="0">
        <frame src="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=navigation" name="navigation" id="navigation" frameborder="0" scrolling="Auto" noresize marginwidth="0" marginheight="0">
        <frame src="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=navigation&item=home.tpl" name="basefrm" id="basefrm" frameborder="0" scrolling="Auto" noresize marginwidth="0" marginheight="0">
    </frameset>
</frameset>
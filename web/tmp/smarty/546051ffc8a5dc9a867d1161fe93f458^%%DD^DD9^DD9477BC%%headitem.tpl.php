<?php /* Smarty version 2.6.28, created on 2017-01-12 09:17:03
         compiled from headitem.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'headitem.tpl', 7, false),array('modifier', 'default', 'headitem.tpl', 102, false),array('function', 'oxmultilang', 'headitem.tpl', 27, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <title><?php echo $this->_tpl_vars['title']; ?>
</title>
  <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
">
  <?php if (isset ( $this->_tpl_vars['meta_refresh_sec'] , $this->_tpl_vars['meta_refresh_url'] )): ?>
  <meta http-equiv=Refresh content="<?php echo $this->_tpl_vars['meta_refresh_sec']; ?>
;URL=<?php echo ((is_array($_tmp=$this->_tpl_vars['meta_refresh_url'])) ? $this->_run_mod_handler('replace', true, $_tmp, "&amp;", "&") : smarty_modifier_replace($_tmp, "&amp;", "&")); ?>
">
  <?php endif; ?>
  <link rel="shortcut icon" href="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl(); ?>
favicon.ico">

  
      <link rel="stylesheet" href="<?php echo $this->_tpl_vars['oViewConf']->getResourceUrl(); ?>
main.css">
      <link rel="stylesheet" href="<?php echo $this->_tpl_vars['oViewConf']->getResourceUrl(); ?>
colors.css">
      <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['oViewConf']->getResourceUrl(); ?>
yui/build/assets/skins/sam/container.css">
  

  
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['oViewConf']->getResourceUrl(); ?>
yui/build/utilities/utilities.js"></script>
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['oViewConf']->getResourceUrl(); ?>
yui/build/container/container-min.js"></script>
      <script type="text/javascript" src="<?php echo $this->_tpl_vars['oViewConf']->getResourceUrl(); ?>
yui/oxid-help.js"></script>
  

  
      <script type="text/javascript">
      <!--
        // standard messages
        var sUnassignMessage = "<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_YOUWANTTOUNASSIGN'), $this);?>
";
        var sDeleteMessage   = "<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_YOUWANTTODELETE'), $this);?>
";;

        // class info
        var sDefClass = '<?php echo $this->_tpl_vars['default_edit']; ?>
';
        var sActClass = '<?php echo $this->_tpl_vars['actlocation']; ?>
';

        <?php if ($this->_tpl_vars['updatelist'] == 1): ?>
        window.onload = function ()
        {
            top.oxid.admin.updateList('<?php echo $this->_tpl_vars['oxid']; ?>
');
        }
        <?php endif; ?>


        var ajaxpopup = null;
        function showDialog( sParams )
        {
            ajaxpopup = window.open('<?php echo ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('replace', true, $_tmp, "&amp;", "&") : smarty_modifier_replace($_tmp, "&amp;", "&")); ?>
'+sParams, 'ajaxpopup', 'width=800,height=680,scrollbars=yes,resizable=yes');
        }

        function focusPopup()
        {
            if ( ajaxpopup )ajaxpopup.focus();
        }

        window.onclick = focusPopup;

        function cleanupLongDesc( sValue )
        {
            if ( sValue == '<br>' || sValue == '<br />' ) {
                return '';
            }
            return sValue;
        }

        function copyLongDesc( sIdent )
        {
            var textVal = null;
            try {
                if ( WPro.editors[sIdent] != null ) {
                   WPro.editors[sIdent].prepareSubmission();
                   textVal = cleanupLongDesc( WPro.editors[sIdent].getValue() );
                }
            } catch(err) {
                    var varEl = document.getElementById(sIdent);
                    if (varEl != null) {
                        textVal = cleanupLongDesc( varEl.value );
                    }
            }

            if (textVal == null) {
                var varName = 'editor_'+sIdent;
                var varEl = document.getElementById(varName);
                if (varEl != null) {
                    textVal = cleanupLongDesc( varEl.value );
                }
            }

            if (textVal != null) {
                var oTarget = document.getElementsByName( 'editval['+ sIdent + ']' );
                if ( oTarget != null && ( oField = oTarget.item( 0 ) ) != null ) {
                    oField.value = textVal;
                }
            }
        }
      -->
      </script>
  

</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tooltips.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="oxajax_data"></div>

<div class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['box'])) ? $this->_run_mod_handler('default', true, $_tmp, 'box') : smarty_modifier_default($_tmp, 'box')); ?>
" style="<?php if (! $this->_tpl_vars['box'] && ! $this->_tpl_vars['bottom_buttons']): ?>height: 90%;<?php endif; ?>">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_error.tpl", 'smarty_include_vars' => array('Errorlist' => $this->_tpl_vars['Errors']['default'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- Input help popup -->
<div id="helpTextContainer" class="yui-skin-sam">
    <div id="helpPanel"></div>
</div>
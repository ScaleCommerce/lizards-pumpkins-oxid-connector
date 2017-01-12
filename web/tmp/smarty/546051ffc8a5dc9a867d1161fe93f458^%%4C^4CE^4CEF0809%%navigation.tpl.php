<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:53
         compiled from navigation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'navigation.tpl', 4, false),array('modifier', 'replace', 'navigation.tpl', 15, false),array('modifier', 'escape', 'navigation.tpl', 56, false),array('modifier', 'default', 'navigation.tpl', 57, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html id="nav">
<head>
    <title><?php echo smarty_function_oxmultilang(array('ident' => 'NAVIGATION_TITLE'), $this);?>
</title>
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['oViewConf']->getResourceUrl(); ?>
nav.css">
    <link rel="stylesheet" href="<?php echo $this->_tpl_vars['oViewConf']->getResourceUrl(); ?>
colors.css">
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
">
    <script language="javascript">

        <?php if ($this->_tpl_vars['loadbasefrm']): ?>
        //reloading main frame
        window.onload = function ()
        {
            //
            top.header.document.getElementById( "homelink" ).href = "<?php echo ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('replace', true, $_tmp, "&amp;", "&") : smarty_modifier_replace($_tmp, "&amp;", "&")); ?>
&cl=navigation&item=home.tpl";
            if ( '<?php echo $this->_tpl_vars['listview']; ?>
' != '' ) {
                top.basefrm.list.location = "<?php echo ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('replace', true, $_tmp, "&amp;", "&") : smarty_modifier_replace($_tmp, "&amp;", "&")); ?>
&cl=<?php echo $this->_tpl_vars['listview']; ?>
&oxid=<?php echo $this->_tpl_vars['oViewConf']->getActiveShopId(); ?>
&actedit=<?php echo $this->_tpl_vars['actedit']; ?>
";
                top.basefrm.edit.location = "<?php echo ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('replace', true, $_tmp, "&amp;", "&") : smarty_modifier_replace($_tmp, "&amp;", "&")); ?>
&cl=<?php echo $this->_tpl_vars['editview']; ?>
&oxid=<?php echo $this->_tpl_vars['oViewConf']->getActiveShopId(); ?>
";
            } else if ( top.basefrm ) {
                top.basefrm.location = "<?php echo ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('replace', true, $_tmp, "&amp;", "&") : smarty_modifier_replace($_tmp, "&amp;", "&")); ?>
&cl=navigation&item=home.tpl";
            }
        }
        <?php endif; ?>

        <?php if ($this->_tpl_vars['oView']->isMall()): ?>
        // changes active shop
        function selectShop( iShopId )
        {
            var oForm = document.getElementById( "search" );

            if ( oForm.shp === undefined ) {
                // inserting new form element
                var oInputElement = document.createElement( 'input' );
                oInputElement.setAttribute( 'name', 'shp' );
                oInputElement.setAttribute( 'type', 'hidden' );
                oInputElement.setAttribute( 'value', iShopId );
                oForm.appendChild( oInputElement );
            } else {
                oForm.shp.value = iShopId;
            }
            oForm.submit();
        }
        <?php endif; ?>
    </script>
</head>
<body>
    <table>
    <tr><td class="main">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "navigation_shopselect.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $this->assign('mh', 0); ?>
    <?php $_from = $this->_tpl_vars['menustructure']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menuholder']):
?>
    <?php if ($this->_tpl_vars['menuholder']->nodeType == XML_ELEMENT_NODE && $this->_tpl_vars['menuholder']->childNodes->length): ?>
        <?php $this->assign('mh', $this->_tpl_vars['mh']+1); ?>
        <?php $this->assign('mn', 0); ?>
        <h2>
            <?php if ($this->_tpl_vars['menuholder']->getAttribute('url')): ?><a href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&cl=navigation&amp;fnc=exturl&amp;url=<?php echo ((is_array($_tmp=$this->_tpl_vars['menuholder']->getAttribute('url'))) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" target="basefrm" ><?php endif; ?>
            <?php echo smarty_function_oxmultilang(array('ident' => ((is_array($_tmp=@$this->_tpl_vars['menuholder']->getAttribute('name'))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['menuholder']->getAttribute('id')) : smarty_modifier_default($_tmp, @$this->_tpl_vars['menuholder']->getAttribute('id'))),'noerror' => true), $this);?>

            <?php if ($this->_tpl_vars['menuholder']->getAttribute('url')): ?></a><?php endif; ?>
        </h2>
        <ul>
        <?php echo ''; ?><?php $_from = $this->_tpl_vars['menuholder']->childNodes; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['menuloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['menuloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['menuitem']):
        $this->_foreach['menuloop']['iteration']++;
?><?php echo ''; ?><?php $this->assign('actClass', $this->_tpl_vars['menuitem']->childNodes->length); ?><?php echo ''; ?><?php if ($this->_tpl_vars['menuitem']->nodeType == XML_ELEMENT_NODE): ?><?php echo ''; ?><?php $this->assign('mn', $this->_tpl_vars['mn']+1); ?><?php echo ''; ?><?php $this->assign('sm', 0); ?><?php echo '<li class="'; ?><?php if ($this->_tpl_vars['menuitem']->getAttribute('active')): ?><?php echo 'exp'; ?><?php $this->assign('sNavExpId', "nav-".($this->_tpl_vars['mh'])."-".($this->_tpl_vars['mn'])); ?><?php echo ''; ?><?php endif; ?><?php echo '" id="nav-'; ?><?php echo $this->_tpl_vars['mh']; ?><?php echo '-'; ?><?php echo $this->_tpl_vars['mn']; ?><?php echo '">'; ?><?php if ($this->_tpl_vars['menuitem']->getAttribute('url')): ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['menuitem']->getAttribute('url'); ?><?php echo '" onclick="_navAct(this);" class="rc" target="'; ?><?php if ($this->_tpl_vars['menuitem']->getAttribute('target')): ?><?php echo ''; ?><?php echo $this->_tpl_vars['menuitem']->getAttribute('target'); ?><?php echo ''; ?><?php else: ?><?php echo 'basefrm'; ?><?php endif; ?><?php echo '"><b>'; ?><?php echo smarty_function_oxmultilang(array('ident' => ((is_array($_tmp=@$this->_tpl_vars['menuitem']->getAttribute('name'))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['menuitem']->getAttribute('id')) : smarty_modifier_default($_tmp, @$this->_tpl_vars['menuitem']->getAttribute('id'))),'noerror' => true), $this);?><?php echo '</b></a>'; ?><?php elseif ($this->_tpl_vars['menuitem']->getAttribute('expand') == 'none'): ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['menuitem']->getAttribute('link'); ?><?php echo '" onclick="_navAct(this);" target="basefrm" class="rc"><b>'; ?><?php echo smarty_function_oxmultilang(array('ident' => ((is_array($_tmp=@$this->_tpl_vars['menuitem']->getAttribute('name'))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['menuitem']->getAttribute('id')) : smarty_modifier_default($_tmp, @$this->_tpl_vars['menuitem']->getAttribute('id'))),'noerror' => true), $this);?><?php echo '</b></a>'; ?><?php else: ?><?php echo '<a href="#" onclick="_navExp(this);return false;" class="rc"><b>'; ?><?php echo smarty_function_oxmultilang(array('ident' => ((is_array($_tmp=@$this->_tpl_vars['menuitem']->getAttribute('name'))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['menuitem']->getAttribute('id')) : smarty_modifier_default($_tmp, @$this->_tpl_vars['menuitem']->getAttribute('id'))),'noerror' => true), $this);?><?php echo '</b></a>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['menuitem']->childNodes->length): ?><?php echo '<ul>'; ?><?php $_from = $this->_tpl_vars['menuitem']->childNodes; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['submenuitem']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['submenuitem']->nodeType == XML_ELEMENT_NODE): ?><?php echo ''; ?><?php $this->assign('sm', $this->_tpl_vars['sm']+1); ?><?php echo ''; ?><?php if ($this->_tpl_vars['submenuitem']->getAttribute('linkicon')): ?><?php echo ' '; ?><?php $this->assign('linkicon', $this->_tpl_vars['submenuitem']->getAttribute('linkicon')); ?><?php echo ''; ?><?php endif; ?><?php echo '<li class="'; ?><?php if ($this->_tpl_vars['submenuitem']->getAttribute('active')): ?><?php echo 'act'; ?><?php $this->assign('sNavActId', "nav-".($this->_tpl_vars['mh'])."-".($this->_tpl_vars['mn'])."-".($this->_tpl_vars['sm'])); ?><?php echo ''; ?><?php endif; ?><?php echo '" id="nav-'; ?><?php echo $this->_tpl_vars['mh']; ?><?php echo '-'; ?><?php echo $this->_tpl_vars['mn']; ?><?php echo '-'; ?><?php echo $this->_tpl_vars['sm']; ?><?php echo '"><a href="'; ?><?php if ($this->_tpl_vars['submenuitem']->getAttribute('url')): ?><?php echo ''; ?><?php echo $this->_tpl_vars['submenuitem']->getAttribute('url'); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['submenuitem']->getAttribute('link'); ?><?php echo ''; ?><?php endif; ?><?php echo '" onclick="_navAct(this);" target="basefrm" class="rc"><b>'; ?><?php if ($this->_tpl_vars['linkicon']): ?><?php echo '<span class="'; ?><?php echo $this->_tpl_vars['linkicon']; ?><?php echo '">'; ?><?php endif; ?><?php echo ''; ?><?php echo smarty_function_oxmultilang(array('ident' => ((is_array($_tmp=@$this->_tpl_vars['submenuitem']->getAttribute('name'))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['submenuitem']->getAttribute('id')) : smarty_modifier_default($_tmp, @$this->_tpl_vars['submenuitem']->getAttribute('id'))),'noerror' => true), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['linkicon']): ?><?php echo '</span>'; ?><?php endif; ?><?php echo '</b></a></li>'; ?><?php $this->assign('linkicon', ''); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</ul>'; ?><?php endif; ?><?php echo '</li>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?>

        </ul>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>

    </td></tr>
    <tr><td class="extra">

    <ul>
        <?php echo ''; ?><?php $this->assign('mh', $this->_tpl_vars['mh']+1); ?><?php echo ''; ?><?php $this->assign('mn', 1); ?><?php echo ''; ?><?php $this->assign('sm', 0); ?><?php echo '<li id="nav-'; ?><?php echo $this->_tpl_vars['mh']; ?><?php echo '-'; ?><?php echo $this->_tpl_vars['mn']; ?><?php echo '" class="'; ?><?php if ($this->_tpl_vars['blOpenHistory']): ?><?php echo 'exp'; ?><?php $this->assign('sHistoryId', "nav-".($this->_tpl_vars['mh'])."-".($this->_tpl_vars['mn'])); ?><?php echo ''; ?><?php endif; ?><?php echo '"><a class="rc" name="_hist" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?><?php echo '&cl=navigation&item=navigation.tpl&openHistory=1&'; ?><?php echo time(); ?><?php echo '#_hist"><b>'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'NAVIGATION_HISTORY','noerror' => true), $this);?><?php echo '</b></a><ul>'; ?><?php $_from = $this->_tpl_vars['menuhistory']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['submenuitem']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['submenuitem']->nodeType == XML_ELEMENT_NODE): ?><?php echo ''; ?><?php $this->assign('sm', $this->_tpl_vars['sm']+1); ?><?php echo '<li id="nav-'; ?><?php echo $this->_tpl_vars['mh']; ?><?php echo '-'; ?><?php echo $this->_tpl_vars['mn']; ?><?php echo '-'; ?><?php echo $this->_tpl_vars['sm']; ?><?php echo '" class=""><a href="'; ?><?php echo $this->_tpl_vars['submenuitem']->getAttribute('link'); ?><?php echo '" onclick="_navAct(this);" target="basefrm" class="rc"><b>'; ?><?php echo smarty_function_oxmultilang(array('ident' => ((is_array($_tmp=@$this->_tpl_vars['submenuitem']->getAttribute('name'))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['submenuitem']->getAttribute('id')) : smarty_modifier_default($_tmp, @$this->_tpl_vars['submenuitem']->getAttribute('id'))),'noerror' => true), $this);?><?php echo '</b></a></li>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</ul></li>'; ?>

    </ul>

    <ul>
        <?php echo ''; ?><?php $this->assign('mh', $this->_tpl_vars['mh']+1); ?><?php echo ''; ?><?php $this->assign('mn', 1); ?><?php echo ''; ?><?php $this->assign('sm', 0); ?><?php echo '<li id="nav-'; ?><?php echo $this->_tpl_vars['mh']; ?><?php echo '-'; ?><?php echo $this->_tpl_vars['mn']; ?><?php echo '"><a class="rc" onclick="_navExp(this);return false;" href="#" ><b>'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'NAVIGATION_FAVORITES','noerror' => true), $this);?><?php echo '</b></a><a class="ed" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?><?php echo '&cl=navigation&amp;item=favorites.tpl" target="basefrm" >'; ?><?php echo smarty_function_oxmultilang(array('ident' => 'NAVIGATION_FAVORITES_EDIT','noerror' => true), $this);?><?php echo '</a><ul>'; ?><?php $_from = $this->_tpl_vars['menufavorites']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['submenuitem']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['submenuitem']->nodeType == XML_ELEMENT_NODE): ?><?php echo ''; ?><?php $this->assign('sm', $this->_tpl_vars['sm']+1); ?><?php echo '<li id="nav-'; ?><?php echo $this->_tpl_vars['mh']; ?><?php echo '-'; ?><?php echo $this->_tpl_vars['mn']; ?><?php echo '-'; ?><?php echo $this->_tpl_vars['sm']; ?><?php echo '" class=""><a href="'; ?><?php echo $this->_tpl_vars['submenuitem']->getAttribute('link'); ?><?php echo '" onclick="_navAct(this);" target="basefrm" class="rc"><b>'; ?><?php echo smarty_function_oxmultilang(array('ident' => ((is_array($_tmp=@$this->_tpl_vars['submenuitem']->getAttribute('name'))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['submenuitem']->getAttribute('id')) : smarty_modifier_default($_tmp, @$this->_tpl_vars['submenuitem']->getAttribute('id'))),'noerror' => true), $this);?><?php echo '</b></a></li>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</ul></li>'; ?>

    </ul>

    </td></tr>
    </table>

    <script type="text/javascript">
    <!--
    var _expid = <?php if ($this->_tpl_vars['blOpenHistory']): ?>'<?php echo $this->_tpl_vars['sHistoryId']; ?>
'<?php elseif ($this->_tpl_vars['sNavExpId']): ?>'<?php echo $this->_tpl_vars['sNavExpId']; ?>
'<?php else: ?>0<?php endif; ?>;
    function _navExp(el){
        var _cur = el.parentNode,
            _exp = document.getElementById(_expid);
        _cur.className = "exp";
        if(_expid != 0){ _exp.className = "";}
        if(_expid == _cur.id){ _expid = 0;}else{_expid = _cur.id;}
    }

    var _actid = <?php if ($this->_tpl_vars['sNavActId']): ?>'<?php echo $this->_tpl_vars['sNavActId']; ?>
'<?php else: ?>0<?php endif; ?>;
    function _navAct(el){
         var _cur = el.parentNode,
             _act = document.getElementById(_actid);
        _cur.className = "act";
        if(_actid != 0 && _actid != _cur.id){ _act.className = "";}
        _actid = _cur.id;
    }

    function _navExtExpAct(mnid,sbid){
        var _mnli = document.getElementById(mnid);
        var _sbli = document.getElementById(sbid);
        if(_mnli && _sbli) {
            var _mna = _mnli.getElementsByTagName("a");
            var _sba = _sbli.getElementsByTagName("a");
            if(_mna.length && _sba.length) {
                _navExp(_mna[0]);
                _navAct(_sba[0]);
            }
        }
    }

    function _navExtExp(mnid){
        var _mnli = document.getElementById(mnid);
        if(_mnli) {
            var _mna = _mnli.getElementsByTagName("a");
            if(_mna.length) {
                _navExp(_mna[0]);
            }
        }
    }

    //-->
    </script>
</body>
</html>
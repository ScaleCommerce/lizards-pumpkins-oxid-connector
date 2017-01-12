<?php /* Smarty version 2.6.28, created on 2017-01-12 09:17:03
         compiled from tooltips.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'tooltips.tpl', 43, false),array('modifier', 'date_format', 'tooltips.tpl', 64, false),array('modifier', 'oxformdate', 'tooltips.tpl', 64, false),)), $this); ?>
<script language=javascript type="text/javascript">

<!-- Hide script from older browsers
function getOffset( el ) {
    var _x = 0;
    var _y = 0;
    while( el && !isNaN( el.offsetLeft ) && !isNaN( el.offsetTop ) ) {
        _x += el.offsetLeft - el.scrollLeft;
        _y += el.offsetTop - el.scrollTop;
        el = el.offsetParent;
    }
    return { top: _y, left: _x };
}
function popUp(evt,currElem)
{
    var popUpWin = document.getElementById(currElem);
    var obj = null;
    if (evt.target) obj = evt.target;
        else if (evt.srcElement) obj = evt.srcElement;
    if (obj === null) return;
    if (obj.nodeType == 3) // defeat Safari bug
        obj = obj.parentNode;

    var x = getOffset(obj).left + obj.offsetWidth + 5;
    var y = getOffset(obj).top;
    
    popUpWin.style.top = Math.max(2,y)+'px';
    popUpWin.style.left= Math.max(2,x)+'px';
    popUpWin.style.visibility = "visible";
    window.status = "";

}
function popDown(currElem)
{
    var popUpWin = document.getElementById(currElem);
    popUpWin.style.visibility ="hidden"
}

// End hiding script -->

</script>

<span class="popUpStyle" id="user_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWUSER'), $this);?>
</span>
<span class="popUpStyle" id="user_result" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_OPENUSERLIST'), $this);?>
</span>
<span class="popUpStyle" id="user_newaddress" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWADDRESS'), $this);?>
</span>
<span class="popUpStyle" id="user_newpayment" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWUSERPAYMENT'), $this);?>
</span>
<span class="popUpStyle" id="user_newremark" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWREMARK'), $this);?>
</span>
<span class="popUpStyle" id="item_delete" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_ITEMDELETE'), $this);?>
</span>
<span class="popUpStyle" id="item_storno" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_ITEMSTORNO'), $this);?>
</span>
<span class="popUpStyle" id="payment_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWPAYMENT'), $this);?>
</span>
<span class="popUpStyle" id="newsletter_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWNEWSLETTER'), $this);?>
</span>
<span class="popUpStyle" id="addsumtype" style="position: absolute;visibility: hidden; z-index: 1;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_ADDSUMTYPE'), $this);?>
</span>
<span class="popUpStyle" id="addsumitmtype" style="position: absolute;visibility: hidden; z-index: 1;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_ADDSUMITMTYPE'), $this);?>
</span>
<span class="popUpStyle" id="shop_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWSHOP'), $this);?>
</span>
<span class="popUpStyle" id="usergroup_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWUSERGROUP'), $this);?>
</span>
<span class="popUpStyle" id="category_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWCATEGORY'), $this);?>
</span>
<span class="popUpStyle" id="category_resetnrofarticles" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_RESETNROFARTICLESINCAT'), $this);?>
</span>
<span class="popUpStyle" id="category_recalcnrofarticles" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_RECALCNROFARTICLESINCAT'), $this);?>
</span>
<span class="popUpStyle" id="vendor_recalcnrofarticles" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_RECALCNROFARTICLESINVND'), $this);?>
</span>
<span class="popUpStyle" id="manufacturer_recalcnrofarticles" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_RECALCNROFARTICLESINMAN'), $this);?>
</span>
<span class="popUpStyle" id="mallcategory_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWMALLCAT'), $this);?>
</span>
<span class="popUpStyle" id="article_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWARTICLE'), $this);?>
</span>
<span class="popUpStyle" id="article_vat" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_ARTICLEVAT'), $this);?>
</span>
<span class="popUpStyle" id="article_vonbis" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_TIMEFORMAT'), $this);?>
<?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")))) ? $this->_run_mod_handler('oxformdate', true, $_tmp, 'datetime', true) : smarty_modifier_oxformdate($_tmp, 'datetime', true)); ?>
</span>
<span class="popUpStyle" id="article_preview" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_ARTICLEREVIEW'), $this);?>
</span>
<span class="popUpStyle" id="article_stock" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_ARTICLESTOCK'), $this);?>
</span>
<span class="popUpStyle" id="article_delivery" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_ARTICLEDELIVERY'), $this);?>
<?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")))) ? $this->_run_mod_handler('oxformdate', true, $_tmp, 'date', true) : smarty_modifier_oxformdate($_tmp, 'date', true)); ?>
</span>
<span class="popUpStyle" id="article_template" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_ARTICLETEMPLATE'), $this);?>
</span>
<span class="popUpStyle" id="article_urlimg" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_ARTICLEURLIMG'), $this);?>
</span>
<span class="popUpStyle" id="article_unit" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_ARTICLEUNITDESCRIPTION'), $this);?>
</span>
<span class="popUpStyle" id="attribute_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWITEMS'), $this);?>
</span>
<span class="popUpStyle" id="article_variant_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWVAR1'), $this);?>
 <?php if ($this->_tpl_vars['issubvariant']): ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWVAR2'), $this);?>
<?php endif; ?><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWVAR3'), $this);?>
</span>
<span class="popUpStyle" id="selectlist_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWSELECTLIST'), $this);?>
</span>
<span class="popUpStyle" id="selectlist_valdesc" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_VALDESC'), $this);?>
</span>
<span class="popUpStyle" id="discount_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWDISCOUNT'), $this);?>
</span>
<span class="popUpStyle" id="vat_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWMWST'), $this);?>
</span>
<span class="popUpStyle" id="delivery_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWDELIVERY'), $this);?>
</span>
<span class="popUpStyle" id="deliveryset_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWDELIVERYSET'), $this);?>
</span>
<span class="popUpStyle" id="order_date" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_FORMAT'), $this);?>
</span>
<span class="popUpStyle" id="news_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWNEWS'), $this);?>
</span>
<span class="popUpStyle" id="voucher_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWVOUCHER'), $this);?>
</span>
<span class="popUpStyle" id="statistic_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWSTATISTIC'), $this);?>
</span>
<span class="popUpStyle" id="category_refresh" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWCATTREE'), $this);?>
</span>
<span class="popUpStyle" id="editvariant" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_EDITVAR'), $this);?>
</span>
<span class="popUpStyle" id="links_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWLINK'), $this);?>
</span>
<span class="popUpStyle" id="actions_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWACTIONS'), $this);?>
</span>
<span class="popUpStyle" id="vendor_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWVENDOR'), $this);?>
</span>
<span class="popUpStyle" id="vendor_resetnrofarticles" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_RESETNROFARTICLESINVND'), $this);?>
</span>
<span class="popUpStyle" id="manufacturer_new" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_NEWMANUFACTURER'), $this);?>
</span>
<span class="popUpStyle" id="manufacturer_resetnrofarticles" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_RESETNROFARTICLESINMAN'), $this);?>
</span>
<span class="popUpStyle" id="open_help" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_OPENHELP'), $this);?>
</span>
<span class="popUpStyle" id="searchfieldoxdynamic" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_ARTLIST_SEARCHFIELDOXDYNAMIC'), $this);?>
</span>
<span class="popUpStyle" id="searchfieldoxtitle" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_ARTLIST_SEARCHFIELDOXTITLE'), $this);?>
</span>
<span class="popUpStyle" id="searchfieldoxshortdesc" style="position: absolute;visibility: hidden;top:0;left:0;"><?php echo smarty_function_oxmultilang(array('ident' => 'TOOLTIPS_ARTLIST_SEARCHFIELDOXSHORTDESC'), $this);?>
</span>
<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/manufacturersslider.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'widget/manufacturersslider.tpl', 1, false),array('function', 'oxstyle', 'widget/manufacturersslider.tpl', 2, false),array('function', 'oxmultilang', 'widget/manufacturersslider.tpl', 7, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/libs/jquery.flexslider.min.js",'priority' => 2), $this);?>

<?php echo smarty_function_oxstyle(array('include' => "css/libs/jquery.flexslider.min.css"), $this);?>


<div class="row">
    <div id="manufacturerSlider" class="boxwrapper">
        <div class="page-header">
            <h3><?php echo smarty_function_oxmultilang(array('ident' => 'OUR_BRANDS'), $this);?>
</h3>
            <span class="subhead"><?php echo smarty_function_oxmultilang(array('ident' => 'MANUFACTURERSLIDER_SUBHEAD'), $this);?>
</span>
        </div>

        <div class="flexslider">
            <ul class="slides">
                <?php $_from = $this->_tpl_vars['oView']->getManufacturerForSlider(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oManufacturer']):
?>
                    <?php if ($this->_tpl_vars['oManufacturer']->oxmanufacturers__oxicon->value): ?>
                        <li>
                            <a href="<?php echo $this->_tpl_vars['oManufacturer']->getLink(); ?>
" title="<?php echo smarty_function_oxmultilang(array('ident' => 'VIEW_ALL_PRODUCTS'), $this);?>
">
                                <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('spinner.gif'); ?>
" data-src="<?php echo $this->_tpl_vars['oManufacturer']->getIconUrl(); ?>
" alt="<?php echo $this->_tpl_vars['oManufacturer']->oxmanufacturers__oxtitle->value; ?>
">
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        </div>
    </div>
</div>
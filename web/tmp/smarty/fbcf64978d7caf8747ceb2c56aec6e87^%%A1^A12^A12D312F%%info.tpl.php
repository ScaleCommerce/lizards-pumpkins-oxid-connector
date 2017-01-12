<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/footer/info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'oxifcontent', 'widget/footer/info.tpl', 3, false),array('function', 'oxgetseourl', 'widget/footer/info.tpl', 25, false),array('function', 'oxmultilang', 'widget/footer/info.tpl', 25, false),array('modifier', 'cat', 'widget/footer/info.tpl', 25, false),)), $this); ?>

    <ul class="information list-unstyled">
        <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oximpressum','object' => '_cont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <li><a href="<?php echo $this->_tpl_vars['_cont']->getLink(); ?>
"><?php echo $this->_tpl_vars['_cont']->oxcontents__oxtitle->value; ?>
</a></li>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxagb','object' => '_cont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <li><a href="<?php echo $this->_tpl_vars['_cont']->getLink(); ?>
"><?php echo $this->_tpl_vars['_cont']->oxcontents__oxtitle->value; ?>
</a></li>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxsecurityinfo','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <li><a href="<?php echo $this->_tpl_vars['oCont']->getLink(); ?>
"><?php echo $this->_tpl_vars['oCont']->oxcontents__oxtitle->value; ?>
</a></li>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxdeliveryinfo','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <li><a href="<?php echo $this->_tpl_vars['oCont']->getLink(); ?>
"><?php echo $this->_tpl_vars['oCont']->oxcontents__oxtitle->value; ?>
</a></li>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxrightofwithdrawal','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <li><a href="<?php echo $this->_tpl_vars['oCont']->getLink(); ?>
"><?php echo $this->_tpl_vars['oCont']->oxcontents__oxtitle->value; ?>
</a></li>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxorderinfo','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <li><a href="<?php echo $this->_tpl_vars['oCont']->getLink(); ?>
"><?php echo $this->_tpl_vars['oCont']->oxcontents__oxtitle->value; ?>
</a></li>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxcredits','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <li><a href="<?php echo $this->_tpl_vars['oCont']->getLink(); ?>
"><?php echo $this->_tpl_vars['oCont']->oxcontents__oxtitle->value; ?>
</a></li>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('blFooterShowNewsletter')): ?>
            <li><a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=newsletter") : smarty_modifier_cat($_tmp, "cl=newsletter"))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'NEWSLETTER'), $this);?>
</a></li>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('blFooterShowNews')): ?>
            <li><a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=news") : smarty_modifier_cat($_tmp, "cl=news"))), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'NEWS'), $this);?>
</a></li>
        <?php endif; ?>
    </ul>
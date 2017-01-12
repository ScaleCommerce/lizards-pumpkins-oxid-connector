<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/footer/newsletter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'widget/footer/newsletter.tpl', 15, false),)), $this); ?>

    <form class="form-inline" role="form" action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
        
            <div class="hidden">
                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                <input type="hidden" name="fnc" value="fill">
                <input type="hidden" name="cl" value="newsletter">
                <?php if ($this->_tpl_vars['oView']->getProduct()): ?>
                    <?php $this->assign('product', $this->_tpl_vars['oView']->getProduct()); ?>
                    <input type="hidden" name="anid" value="<?php echo $this->_tpl_vars['product']->oxarticles__oxnid->value; ?>
">
                <?php endif; ?>
            </div>

            
                <label class="sr-only" for="footer_newsletter_oxusername"><?php echo smarty_function_oxmultilang(array('ident' => 'NEWSLETTER'), $this);?>
</label>
                <input class="form-control" type="email" name="editval[oxuser__oxusername]" id="footer_newsletter_oxusername" value="" placeholder="<?php echo smarty_function_oxmultilang(array('ident' => 'EMAIL'), $this);?>
">
                <button class="btn btn-primary" type="submit"><?php echo smarty_function_oxmultilang(array('ident' => 'SUBSCRIBE'), $this);?>
</button>
            
        
    </form>
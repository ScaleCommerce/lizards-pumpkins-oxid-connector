<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/header/languages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'widget/header/languages.tpl', 4, false),array('modifier', 'oxaddparams', 'widget/header/languages.tpl', 15, false),)), $this); ?>
<?php if ($this->_tpl_vars['oView']->isLanguageLoaded()): ?>
    <div class="btn-group languages-menu">
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
            <?php $this->assign('sLangImg', ((is_array($_tmp=((is_array($_tmp="lang/")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getActLanguageAbbr()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getActLanguageAbbr())))) ? $this->_run_mod_handler('cat', true, $_tmp, ".png") : smarty_modifier_cat($_tmp, ".png"))); ?>
            
                <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl($this->_tpl_vars['sLangImg']); ?>
" alt=""/> <i class="fa fa-angle-down"></i>
            
        </button>
        <ul class="dropdown-menu dropdown-menu-right" role="menu">
            
                <?php $_from = $this->_tpl_vars['oxcmp_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_lng']):
?>
                    <?php $this->assign('sLangImg', ((is_array($_tmp=((is_array($_tmp="lang/")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['_lng']->abbr) : smarty_modifier_cat($_tmp, $this->_tpl_vars['_lng']->abbr)))) ? $this->_run_mod_handler('cat', true, $_tmp, ".png") : smarty_modifier_cat($_tmp, ".png"))); ?>
                    <?php if ($this->_tpl_vars['_lng']->selected): ?>
                        <?php ob_start(); ?>
                            <a class="flag <?php echo $this->_tpl_vars['_lng']->abbr; ?>
" title="<?php echo $this->_tpl_vars['_lng']->name; ?>
" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['_lng']->link)) ? $this->_run_mod_handler('oxaddparams', true, $_tmp, $this->_tpl_vars['oView']->getDynUrlParams()) : smarty_modifier_oxaddparams($_tmp, $this->_tpl_vars['oView']->getDynUrlParams())); ?>
" hreflang="<?php echo $this->_tpl_vars['_lng']->abbr; ?>
"><span style="background-image:url('<?php echo $this->_tpl_vars['oViewConf']->getImageUrl($this->_tpl_vars['sLangImg']); ?>
')" ><?php echo $this->_tpl_vars['_lng']->name; ?>
</span></a>
                        <?php $this->_smarty_vars['capture']['languageSelected'] = ob_get_contents(); ob_end_clean(); ?>
                    <?php endif; ?>
                    <li<?php if ($this->_tpl_vars['_lng']->selected): ?> class="active"<?php endif; ?>>
                        <a class="flag <?php echo $this->_tpl_vars['_lng']->abbr; ?>
" title="<?php echo $this->_tpl_vars['_lng']->name; ?>
" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['_lng']->link)) ? $this->_run_mod_handler('oxaddparams', true, $_tmp, $this->_tpl_vars['oView']->getDynUrlParams()) : smarty_modifier_oxaddparams($_tmp, $this->_tpl_vars['oView']->getDynUrlParams())); ?>
" hreflang="<?php echo $this->_tpl_vars['_lng']->abbr; ?>
">
                            <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl($this->_tpl_vars['sLangImg']); ?>
" alt=""/> <?php echo $this->_tpl_vars['_lng']->name; ?>

                        </a>
                    </li>
                <?php endforeach; endif; unset($_from); ?>
            
        </ul>
    </div>
<?php endif; ?>
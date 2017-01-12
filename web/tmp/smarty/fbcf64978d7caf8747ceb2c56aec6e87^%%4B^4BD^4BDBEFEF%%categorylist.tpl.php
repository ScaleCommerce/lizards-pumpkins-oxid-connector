<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/header/categorylist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'widget/header/categorylist.tpl', 21, false),array('function', 'oxgetseourl', 'widget/header/categorylist.tpl', 72, false),array('modifier', 'cat', 'widget/header/categorylist.tpl', 72, false),)), $this); ?>

    <?php if ($this->_tpl_vars['oxcmp_categories']): ?>
        <?php $this->assign('homeSelected', 'false'); ?>
        <?php if ($this->_tpl_vars['oViewConf']->getTopActionClassName() == 'start'): ?>
            <?php $this->assign('homeSelected', 'true'); ?>
        <?php endif; ?>
        <?php $this->assign('oxcmp_categories', $this->_tpl_vars['oxcmp_categories']); ?>
        <?php $this->assign('blFullwidth', $this->_tpl_vars['oViewConf']->getViewThemeParam('blFullwidthLayout')); ?>

        <nav id="mainnav" class="navbar navbar-default" role="navigation">
            <div class="<?php if ($this->_tpl_vars['blFullwidth']): ?>container<?php else: ?>container-fluid<?php endif; ?>">

                
                    <div class="navbar-header">
                        
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button><span class="visible-xs-inline"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_ROLES_BEMAIN_UIROOTHEADER'), $this);?>
</span>
                        
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul id="navigation" class="nav navbar-nav">
                            
                                <li <?php if ($this->_tpl_vars['homeSelected'] == 'true'): ?>class="active"<?php endif; ?>>
                                    <a href="<?php echo $this->_tpl_vars['oViewConf']->getHomeLink(); ?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'HOME'), $this);?>
</a>
                                </li>

                                <?php $_from = $this->_tpl_vars['oxcmp_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['root'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['root']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['catkey'] => $this->_tpl_vars['ocat']):
        $this->_foreach['root']['iteration']++;
?>
                                    <?php if ($this->_tpl_vars['ocat']->getIsVisible()): ?>
                                        <?php $_from = $this->_tpl_vars['ocat']->getContentCats(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['MoreTopCms'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['MoreTopCms']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['oTopCont']):
        $this->_foreach['MoreTopCms']['iteration']++;
?>
                                            <li>
                                                <a href="<?php echo $this->_tpl_vars['oTopCont']->getLink(); ?>
"><?php echo $this->_tpl_vars['oTopCont']->oxcontents__oxtitle->value; ?>
</a>
                                            </li>
                                        <?php endforeach; endif; unset($_from); ?>

                                        <li class="<?php if ($this->_tpl_vars['homeSelected'] == 'false' && $this->_tpl_vars['ocat']->expanded): ?>active<?php endif; ?><?php if ($this->_tpl_vars['ocat']->getSubCats()): ?> dropdown<?php endif; ?>">
                                            <a href="<?php echo $this->_tpl_vars['ocat']->getLink(); ?>
"<?php if ($this->_tpl_vars['ocat']->getSubCats()): ?> class="dropdown-toggle" data-toggle="dropdown"<?php endif; ?>>
                                                <?php echo $this->_tpl_vars['ocat']->oxcategories__oxtitle->value; ?>
<?php if ($this->_tpl_vars['ocat']->getSubCats()): ?> <i class="fa fa-angle-down"></i><?php endif; ?>
                                            </a>

                                            <?php if ($this->_tpl_vars['ocat']->getSubCats()): ?>
                                                <ul class="dropdown-menu">
                                                    <?php $_from = $this->_tpl_vars['ocat']->getSubCats(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['SubCat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['SubCat']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['subcatkey'] => $this->_tpl_vars['osubcat']):
        $this->_foreach['SubCat']['iteration']++;
?>
                                                        <?php if ($this->_tpl_vars['osubcat']->getIsVisible()): ?>
                                                            <?php $_from = $this->_tpl_vars['osubcat']->getContentCats(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['MoreCms'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['MoreCms']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ocont']):
        $this->_foreach['MoreCms']['iteration']++;
?>
                                                                <li>
                                                                    <a href="<?php echo $this->_tpl_vars['ocont']->getLink(); ?>
"><?php echo $this->_tpl_vars['ocont']->oxcontents__oxtitle->value; ?>
</a>
                                                                </li>
                                                            <?php endforeach; endif; unset($_from); ?>

                                                            <?php if ($this->_tpl_vars['osubcat']->getIsVisible()): ?>
                                                                <li <?php if ($this->_tpl_vars['homeSelected'] == 'false' && $this->_tpl_vars['osubcat']->expanded): ?>class="active"<?php endif; ?>>
                                                                    <a <?php if ($this->_tpl_vars['homeSelected'] == 'false' && $this->_tpl_vars['osubcat']->expanded): ?>class="current"<?php endif; ?> href="<?php echo $this->_tpl_vars['osubcat']->getLink(); ?>
"><?php echo $this->_tpl_vars['osubcat']->oxcategories__oxtitle->value; ?>
</a>
                                                                </li>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; endif; unset($_from); ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?>
                            
                        </ul>

                        <ul class="nav navbar-nav navbar-right fixed-header-actions">

                            <li>
                                <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=basket") : smarty_modifier_cat($_tmp, "cl=basket"))), $this);?>
" rel="nofollow">
                                    <svg class="shopping-bag-mini<?php if ($this->_tpl_vars['oxcmp_basket']->getItemsCount()): ?> filled<?php endif; ?>" viewBox="0 0 64 64">
                                        <use xlink:href="#shoppingBagMini" />                                     </svg>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(null)" class="search-toggle" rel="nofollow">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>

                        </ul>

                        <?php if ($this->_tpl_vars['oView']->isDemoShop()): ?>

                            <a href="<?php echo $this->_tpl_vars['oViewConf']->getBaseDir(); ?>
admin/" class="btn btn-sm btn-danger navbar-btn navbar-right visible-lg">
                                <?php echo smarty_function_oxmultilang(array('ident' => 'DD_DEMO_ADMIN_TOOL'), $this);?>

                                <i class="fa fa-external-link" style="font-size: 80%;"></i>
                            </a>

                        <?php endif; ?>

                    </div>
                

            </div>
        </nav>
    <?php endif; ?>
<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/product/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'widget/product/list.tpl', 45, false),array('modifier', 'cat', 'widget/product/list.tpl', 52, false),array('function', 'math', 'widget/product/list.tpl', 47, false),array('function', 'counter', 'widget/product/list.tpl', 51, false),array('function', 'oxid_include_widget', 'widget/product/list.tpl', 59, false),)), $this); ?>
<?php if (! $this->_tpl_vars['type']): ?>
    <?php $this->assign('type', 'infogrid'); ?>
<?php endif; ?>

<?php if (! $this->_tpl_vars['iProductsPerLine']): ?>
    <?php $this->assign('iProductsPerLine', 4); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['type'] == 'infogrid'): ?>
    <?php $this->assign('iProductsPerLine', 2); ?>
<?php elseif ($this->_tpl_vars['type'] == 'grid'): ?>
    <?php $this->assign('iProductsPerLine', 4); ?>
<?php elseif ($this->_tpl_vars['type'] == 'line'): ?>
    <?php $this->assign('iProductsPerLine', 1); ?>
<?php endif; ?>

<div class="boxwrapper" id="boxwrapper_<?php echo $this->_tpl_vars['listId']; ?>
">
    <?php if ($this->_tpl_vars['head']): ?>
        <?php if ($this->_tpl_vars['header'] == 'light'): ?>
            <div class="page-header">
                <span class="h3"><?php echo $this->_tpl_vars['head']; ?>
</span>

                <?php if ($this->_tpl_vars['subhead']): ?>
                    <small class="subhead"><?php echo $this->_tpl_vars['subhead']; ?>
</small>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <div class="page-header">
                <h2>
                    <?php echo $this->_tpl_vars['head']; ?>

                    <?php if ($this->_tpl_vars['rsslink']): ?>
                        <a class="rss" id="<?php echo $this->_tpl_vars['rssId']; ?>
" href="<?php echo $this->_tpl_vars['rsslink']['link']; ?>
" target="_blank">
                            <i class="fa fa-rss"></i>
                        </a>
                    <?php endif; ?>
                </h2>

                <?php if ($this->_tpl_vars['subhead']): ?>
                    <small class="subhead"><?php echo $this->_tpl_vars['subhead']; ?>
</small>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php $this->assign('productsCount', count($this->_tpl_vars['products'])); ?>
    <?php if ($this->_tpl_vars['productsCount'] > 0): ?>
        <?php echo smarty_function_math(array('equation' => "x / y",'x' => 12,'y' => $this->_tpl_vars['iProductsPerLine'],'assign' => 'iColIdent'), $this);?>


        <div class="list-container" id="<?php echo $this->_tpl_vars['listId']; ?>
">
            <?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['productlist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['productlist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_product']):
        $this->_foreach['productlist']['iteration']++;
?>
                <?php echo smarty_function_counter(array('print' => false,'assign' => 'productlistCounter'), $this);?>

                <?php $this->assign('testid', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['listId'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_') : smarty_modifier_cat($_tmp, '_')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_foreach['productlist']['iteration']) : smarty_modifier_cat($_tmp, $this->_foreach['productlist']['iteration']))); ?>

                <?php if ($this->_tpl_vars['productlistCounter'] == 1): ?>
                    <div class="row <?php echo $this->_tpl_vars['type']; ?>
View newItems">
                <?php endif; ?>

                <div class="productData col-xs-12<?php if ($this->_tpl_vars['type'] != 'line'): ?> col-sm-6 col-md-<?php echo $this->_tpl_vars['iColIdent']; ?>
<?php endif; ?> productBox">
                    <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwArticleBox','_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1,'_navurlparams' => $this->_tpl_vars['oViewConf']->getNavUrlParams(),'iLinkType' => $this->_tpl_vars['_product']->getLinkType(),'_object' => $this->_tpl_vars['_product'],'anid' => $this->_tpl_vars['_product']->getId(),'sWidgetType' => 'product','sListType' => "listitem_".($this->_tpl_vars['type']),'iIndex' => $this->_tpl_vars['testid'],'blDisableToCart' => $this->_tpl_vars['blDisableToCart'],'isVatIncluded' => $this->_tpl_vars['oView']->isVatIncluded(),'showMainLink' => $this->_tpl_vars['showMainLink'],'recommid' => $this->_tpl_vars['recommid'],'owishid' => $this->_tpl_vars['owishid'],'toBasketFunction' => $this->_tpl_vars['toBasketFunction'],'removeFunction' => $this->_tpl_vars['removeFunction'],'altproduct' => $this->_tpl_vars['altproduct'],'inlist' => $this->_tpl_vars['_product']->isInList(),'skipESIforUser' => 1,'testid' => $this->_tpl_vars['testid']), $this);?>

                </div>

                <?php if ($this->_tpl_vars['productlistCounter']%$this->_tpl_vars['iProductsPerLine'] == 0 || $this->_tpl_vars['productsCount'] == $this->_tpl_vars['productlistCounter']): ?>
                    </div>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['productlistCounter']%$this->_tpl_vars['iProductsPerLine'] == 0 && $this->_tpl_vars['productsCount'] > $this->_tpl_vars['productlistCounter']): ?>
                    <div class="row <?php echo $this->_tpl_vars['type']; ?>
View newItems">
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>

                        <?php echo smarty_function_counter(array('print' => false,'assign' => 'productlistCounter','start' => 0), $this);?>

        </div>
    <?php endif; ?>
</div>
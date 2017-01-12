<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from widget/minibasket/minibasket.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'oxhasrights', 'widget/minibasket/minibasket.tpl', 7, false),array('function', 'oxmultilang', 'widget/minibasket/minibasket.tpl', 17, false),array('function', 'oxprice', 'widget/minibasket/minibasket.tpl', 49, false),array('function', 'oxgetseourl', 'widget/minibasket/minibasket.tpl', 81, false),array('function', 'oxscript', 'widget/minibasket/minibasket.tpl', 88, false),array('modifier', 'strip_tags', 'widget/minibasket/minibasket.tpl', 39, false),array('modifier', 'cat', 'widget/minibasket/minibasket.tpl', 81, false),)), $this); ?>
<?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount() >= 5): ?>
    <?php $this->assign('blScrollable', true); ?>
<?php endif; ?>


    <?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
        <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>

            <?php if ($this->_tpl_vars['_prefix'] == 'modal'): ?>
                <div class="modal fade basketFlyout" id="basketModal" tabindex="-1" role="dialog" aria-labelledby="basketModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only"><?php echo smarty_function_oxmultilang(array('ident' => 'CLOSE'), $this);?>
</span>
                                </button>
                                <h4 class="modal-title" id="basketModalLabel"><?php echo $this->_tpl_vars['oxcmp_basket']->getItemsCount(); ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'ITEMS_IN_BASKET'), $this);?>
</h4>
                            </div>
                            <div class="modal-body">
                                <?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
                                    <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                        <div id="<?php echo $this->_tpl_vars['_prefix']; ?>
basketFlyout" class="basketFlyout">
                                            <div class="">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MINIBASKET_MODAL_TABLE_TITLE'), $this);?>
</th>
                                                            <th class="text-right"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MINIBASKET_MODAL_TABLE_PRICE'), $this);?>
</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $_from = $this->_tpl_vars['oxcmp_basket']->getContents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['miniBasketList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['miniBasketList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_product']):
        $this->_foreach['miniBasketList']['iteration']++;
?>
                                                            
                                                                <?php $this->assign('minibasketItemTitle', $this->_tpl_vars['_product']->getTitle()); ?>
                                                                <tr>
                                                                    <td>
                                                                        <a href="<?php echo $this->_tpl_vars['_product']->getLink(); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
">
                                                                            <span class="item">
                                                                                <?php if ($this->_tpl_vars['_product']->getAmount() > 1): ?>
                                                                                    <?php echo $this->_tpl_vars['_product']->getAmount(); ?>
 &times;
                                                                                <?php endif; ?>
                                                                                <?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>

                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <strong class="price"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['_product']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
 *</strong>
                                                                    </td>
                                                                </tr>
                                                            
                                                        <?php endforeach; endif; unset($_from); ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                                
                                                                    <td><strong><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL'), $this);?>
</strong></td>
                                                                    <td class="text-right">
                                                                        <strong class="price">
                                                                            <?php if ($this->_tpl_vars['oxcmp_basket']->isPriceViewModeNetto()): ?>
                                                                                <?php echo $this->_tpl_vars['oxcmp_basket']->getProductsNetPrice(); ?>

                                                                            <?php else: ?>
                                                                                <?php echo $this->_tpl_vars['oxcmp_basket']->getFProductsPrice(); ?>

                                                                            <?php endif; ?>
                                                                            <?php echo $this->_tpl_vars['currency']->sign; ?>
 *
                                                                        </strong>
                                                                    </td>
                                                                
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/minibasket/countdown.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        </div>
                                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                                <?php endif; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smarty_function_oxmultilang(array('ident' => 'DD_MINIBASKET_CONTINUE_SHOPPING'), $this);?>
</button>
                                <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=basket") : smarty_modifier_cat($_tmp, "cl=basket"))), $this);?>
" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="<?php echo smarty_function_oxmultilang(array('ident' => 'DISPLAY_BASKET'), $this);?>
">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo smarty_function_oxscript(array('add' => "$('#basketModal').modal('show');"), $this);?>

            <?php else: ?>
                
                    <p class="title">
                        <strong><?php echo $this->_tpl_vars['oxcmp_basket']->getItemsCount(); ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'ITEMS_IN_BASKET'), $this);?>
</strong>
                    </p>
                

                <div id="<?php echo $this->_tpl_vars['_prefix']; ?>
basketFlyout" class="basketFlyout<?php if ($this->_tpl_vars['blScrollable']): ?> scrollable<?php endif; ?>">
                    
                        <table class="table table-bordered table-striped">
                            <?php $_from = $this->_tpl_vars['oxcmp_basket']->getContents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['miniBasketList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['miniBasketList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_product']):
        $this->_foreach['miniBasketList']['iteration']++;
?>
                                
                                    <?php $this->assign('minibasketItemTitle', $this->_tpl_vars['_product']->getTitle()); ?>
                                    <tr>
                                        <td class="picture text-center">
                                            <span class="badge"><?php echo $this->_tpl_vars['_product']->getAmount(); ?>
</span>
                                            <a href="<?php echo $this->_tpl_vars['_product']->getLink(); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
">
                                                <img src="<?php echo $this->_tpl_vars['_product']->getIconUrl(); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
"/>
                                            </a>
                                        </td>
                                        <td class="title">
                                            <a href="<?php echo $this->_tpl_vars['_product']->getLink(); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</a>
                                        </td>
                                        <td class="price text-right"><?php echo $this->_tpl_vars['_product']->getFTotalPrice(); ?>
&nbsp;<?php echo $this->_tpl_vars['currency']->sign; ?>
</td>
                                    </tr>
                                
                            <?php endforeach; endif; unset($_from); ?>
                            <tr>
                                <td class="total_label" colspan="2">
                                    <strong><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL'), $this);?>
</strong>
                                </td>
                                <td class="total_price text-right">
                                    <strong>
                                        <?php if ($this->_tpl_vars['oxcmp_basket']->isPriceViewModeNetto()): ?>
                                            <?php echo $this->_tpl_vars['oxcmp_basket']->getProductsNetPrice(); ?>

                                        <?php else: ?>
                                            <?php echo $this->_tpl_vars['oxcmp_basket']->getFProductsPrice(); ?>

                                        <?php endif; ?>
                                        &nbsp;<?php echo $this->_tpl_vars['currency']->sign; ?>

                                    </strong>
                                </td>
                            </tr>
                        </table>
                        <div class="clearfix">
                            
                        </div>
                    
                </div>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/minibasket/countdown.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                
                    <p class="functions clear text-right">
                        <?php if ($this->_tpl_vars['oxcmp_user']): ?>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=payment") : smarty_modifier_cat($_tmp, "cl=payment"))), $this);?>
" class="btn btn-primary"><?php echo smarty_function_oxmultilang(array('ident' => 'CHECKOUT'), $this);?>
</a>
                        <?php else: ?>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=user") : smarty_modifier_cat($_tmp, "cl=user"))), $this);?>
" class="btn btn-primary"><?php echo smarty_function_oxmultilang(array('ident' => 'CHECKOUT'), $this);?>
</a>
                        <?php endif; ?>
                        <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=basket") : smarty_modifier_cat($_tmp, "cl=basket"))), $this);?>
" class="btn btn-default"><?php echo smarty_function_oxmultilang(array('ident' => 'DISPLAY_BASKET'), $this);?>
</a>
                    </p>
                
            <?php endif; ?>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php else: ?>
        
            <div class="alert alert-info"><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_EMPTY'), $this);?>
</div>
        
    <?php endif; ?>
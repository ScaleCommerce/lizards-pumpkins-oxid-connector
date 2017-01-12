<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:34
         compiled from layout/base.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'layout/base.tpl', 12, false),array('modifier', 'oxaddparams', 'layout/base.tpl', 68, false),array('modifier', 'cat', 'layout/base.tpl', 186, false),array('function', 'oxstyle', 'layout/base.tpl', 144, false),array('function', 'oxscript', 'layout/base.tpl', 241, false),array('function', 'oxid_include_dynamic', 'layout/base.tpl', 255, false),)), $this); ?>
<?php ob_start(); ?>
    <?php echo '<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" id="Viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"><meta http-equiv="Content-Type" content="text/html; charset='; ?><?php echo $this->_tpl_vars['oView']->getCharSet(); ?><?php echo '">'; ?><?php $this->assign('_sMetaTitlePrefix', $this->_tpl_vars['oView']->getTitlePrefix()); ?><?php echo ''; ?><?php $this->assign('_sMetaTitleSuffix', $this->_tpl_vars['oView']->getTitleSuffix()); ?><?php echo ''; ?><?php $this->assign('_sMetaTitlePageSuffix', $this->_tpl_vars['oView']->getTitlePageSuffix()); ?><?php echo ''; ?><?php $this->assign('_sMetaTitle', $this->_tpl_vars['oView']->getTitle()); ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php echo $this->_tpl_vars['_sMetaTitlePrefix']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['_sMetaTitlePrefix'] && $this->_tpl_vars['_sMetaTitle']): ?><?php echo ' | '; ?><?php endif; ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['_sMetaTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?><?php echo ''; ?><?php if ($this->_tpl_vars['_sMetaTitleSuffix'] && ( $this->_tpl_vars['_sMetaTitlePrefix'] || $this->_tpl_vars['_sMetaTitle'] )): ?><?php echo ' | '; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_tpl_vars['_sMetaTitleSuffix']; ?><?php echo ' '; ?><?php if ($this->_tpl_vars['_sMetaTitlePageSuffix']): ?><?php echo ' | '; ?><?php echo $this->_tpl_vars['_sMetaTitlePageSuffix']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('sPageTitle', ob_get_contents());ob_end_clean(); ?><?php echo '<title>'; ?><?php echo $this->_tpl_vars['sPageTitle']; ?><?php echo '</title>'; ?><?php if ($this->_tpl_vars['oView']->noIndex() == 1): ?><?php echo '<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">'; ?><?php elseif ($this->_tpl_vars['oView']->noIndex() == 2): ?><?php echo '<meta name="ROBOTS" content="NOINDEX, FOLLOW">'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['oView']->getMetaDescription()): ?><?php echo '<meta name="description" content="'; ?><?php echo $this->_tpl_vars['oView']->getMetaDescription(); ?><?php echo '">'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['oView']->getMetaKeywords()): ?><?php echo '<meta name="keywords" content="'; ?><?php echo $this->_tpl_vars['oView']->getMetaKeywords(); ?><?php echo '">'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['oViewConf']->getFbAppId()): ?><?php echo '<meta property="fb:app_id" content="'; ?><?php echo $this->_tpl_vars['oViewConf']->getFbAppId(); ?><?php echo '">'; ?><?php endif; ?><?php echo '<meta property="og:site_name" content="'; ?><?php echo $this->_tpl_vars['oViewConf']->getBaseDir(); ?><?php echo '"><meta property="og:title" content="'; ?><?php echo $this->_tpl_vars['sPageTitle']; ?><?php echo '"><meta property="og:description" content="'; ?><?php echo $this->_tpl_vars['oView']->getMetaDescription(); ?><?php echo '">'; ?><?php if ($this->_tpl_vars['oViewConf']->getActiveClassName() == 'details'): ?><?php echo '<meta property="og:type" content="product"><meta property="og:image" content="'; ?><?php echo $this->_tpl_vars['oView']->getActPicture(); ?><?php echo '"><meta property="og:url" content="'; ?><?php echo $this->_tpl_vars['oView']->getCanonicalUrl(); ?><?php echo '">'; ?><?php else: ?><?php echo '<meta property="og:type" content="website"><meta property="og:image" content="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl('basket.png'); ?><?php echo '"><meta property="og:url" content="'; ?><?php echo $this->_tpl_vars['oViewConf']->getCurrentHomeDir(); ?><?php echo '">'; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('canonical_url', $this->_tpl_vars['oView']->getCanonicalUrl()); ?><?php echo ''; ?><?php if ($this->_tpl_vars['canonical_url']): ?><?php echo '<link rel="canonical" href="'; ?><?php echo $this->_tpl_vars['canonical_url']; ?><?php echo '">'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['oView']->isLanguageLoaded()): ?><?php echo ''; ?><?php $this->assign('oConfig', $this->_tpl_vars['oViewConf']->getConfig()); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['oxcmp_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_lng']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['_lng']->id == $this->_tpl_vars['oConfig']->getConfigParam('sDefaultLang')): ?><?php echo '<link rel="alternate" hreflang="x-default" href="'; ?><?php echo $this->_tpl_vars['_lng']->link; ?><?php echo '"/>'; ?><?php endif; ?><?php echo '<link rel="alternate" hreflang="'; ?><?php echo $this->_tpl_vars['_lng']->abbr; ?><?php echo '" href="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['_lng']->link)) ? $this->_run_mod_handler('oxaddparams', true, $_tmp, $this->_tpl_vars['oView']->getDynUrlParams()) : smarty_modifier_oxaddparams($_tmp, $this->_tpl_vars['oView']->getDynUrlParams())); ?><?php echo '"/>'; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('oPageNavigation', $this->_tpl_vars['oView']->getPageNavigation()); ?><?php echo ''; ?><?php if ($this->_tpl_vars['oPageNavigation']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['oPageNavigation']->previousPage): ?><?php echo '<link rel="prev" href="'; ?><?php echo $this->_tpl_vars['oPageNavigation']->previousPage; ?><?php echo '">'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['oPageNavigation']->nextPage): ?><?php echo '<link rel="next" href="'; ?><?php echo $this->_tpl_vars['oPageNavigation']->nextPage; ?><?php echo '">'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('sFavicon512File', $this->_tpl_vars['oViewConf']->getViewThemeParam('sFavicon512File')); ?><?php echo ''; ?><?php if ($this->_tpl_vars['sFavicon512File']): ?><?php echo '<!-- iOS Homescreen Icon (version < 4.2)--><link rel="apple-touch-icon-precomposed" media="screen and (resolution: 163dpi)" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl("favicons/".($this->_tpl_vars['sFavicon512File'])); ?><?php echo '" /><!-- iOS Homescreen Icon --><link rel="apple-touch-icon-precomposed" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl("favicons/".($this->_tpl_vars['sFavicon512File'])); ?><?php echo '" /><!-- iPad Homescreen Icon (version < 4.2) --><link rel="apple-touch-icon-precomposed" media="screen and (resolution: 132dpi)" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl("favicons/".($this->_tpl_vars['sFavicon512File'])); ?><?php echo '" /><!-- iPad Homescreen Icon --><link rel="apple-touch-icon-precomposed" sizes="72x72" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl("favicons/".($this->_tpl_vars['sFavicon512File'])); ?><?php echo '" /><!-- iPhone 4 Homescreen Icon (version < 4.2) --><link rel="apple-touch-icon-precomposed" media="screen and (resolution: 326dpi)" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl("favicons/".($this->_tpl_vars['sFavicon512File'])); ?><?php echo '" /><!-- iPhone 4 Homescreen Icon --><link rel="apple-touch-icon-precomposed" sizes="114x114" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl("favicons/".($this->_tpl_vars['sFavicon512File'])); ?><?php echo '" /><!-- new iPad Homescreen Icon and iOS Version > 4.2 --><link rel="apple-touch-icon-precomposed" sizes="144x144" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl("favicons/".($this->_tpl_vars['sFavicon512File'])); ?><?php echo '" /><!-- Windows 8 -->'; ?><?php $this->assign('sFaviconMSTileColor', $this->_tpl_vars['oViewConf']->getViewThemeParam('sFaviconMSTileColor')); ?><?php echo ''; ?><?php if ($this->_tpl_vars['sFaviconMSTileColor']): ?><?php echo '<meta name="msapplication-TileColor" content="'; ?><?php echo $this->_tpl_vars['sFaviconMSTileColor']; ?><?php echo '"> <!-- Kachel-Farbe -->'; ?><?php endif; ?><?php echo '<meta name="msapplication-TileImage" content="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl("favicons/".($this->_tpl_vars['sFavicon512File'])); ?><?php echo '"><!-- Fluid --><link rel="fluid-icon" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl("favicons/".($this->_tpl_vars['sFavicon512File'])); ?><?php echo '" title="'; ?><?php echo $this->_tpl_vars['sPageTitle']; ?><?php echo '" />'; ?><?php endif; ?><?php echo '<!-- Shortcut Icons -->'; ?><?php $this->assign('sFaviconFile', $this->_tpl_vars['oViewConf']->getViewThemeParam('sFaviconFile')); ?><?php echo ''; ?><?php $this->assign('sFavicon16File', $this->_tpl_vars['oViewConf']->getViewThemeParam('sFavicon16File')); ?><?php echo ''; ?><?php $this->assign('sFavicon32File', $this->_tpl_vars['oViewConf']->getViewThemeParam('sFavicon32File')); ?><?php echo ''; ?><?php $this->assign('sFavicon48File', $this->_tpl_vars['oViewConf']->getViewThemeParam('sFavicon48File')); ?><?php echo ''; ?><?php $this->assign('sFavicon64File', $this->_tpl_vars['oViewConf']->getViewThemeParam('sFavicon64File')); ?><?php echo ''; ?><?php $this->assign('sFavicon128File', $this->_tpl_vars['oViewConf']->getViewThemeParam('sFavicon128File')); ?><?php echo ''; ?><?php if ($this->_tpl_vars['sFaviconFile']): ?><?php echo '<link rel="shortcut icon" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl("favicons/".($this->_tpl_vars['sFaviconFile'])); ?><?php echo '?rand=1" type="image/x-icon" />'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['sFavicon16File']): ?><?php echo '<link rel="icon" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl("favicons/".($this->_tpl_vars['sFavicon16File'])); ?><?php echo '" sizes="16x16" />'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['sFavicon32File']): ?><?php echo '<link rel="icon" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl("favicons/".($this->_tpl_vars['sFavicon32File'])); ?><?php echo '" sizes="32x32" />'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['sFavicon48File']): ?><?php echo '<link rel="icon" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl("favicons/".($this->_tpl_vars['sFavicon48File'])); ?><?php echo '" sizes="48x48" />'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['sFavicon64File']): ?><?php echo '<link rel="icon" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl("favicons/".($this->_tpl_vars['sFavicon64File'])); ?><?php echo '" sizes="64x64" />'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['sFavicon128File']): ?><?php echo '<link rel="icon" href="'; ?><?php echo $this->_tpl_vars['oViewConf']->getImageUrl("favicons/".($this->_tpl_vars['sFavicon128File'])); ?><?php echo '" sizes="128x128" />'; ?><?php endif; ?><?php echo ''; ?><?php echo smarty_function_oxstyle(array('include' => "css/styles.min.css"), $this);?><?php echo '<link href=\'https://fonts.googleapis.com/css?family=Raleway:200,400,700,600\' rel=\'stylesheet\' type=\'text/css\'>'; ?><?php $this->assign('rsslinks', $this->_tpl_vars['oView']->getRssLinks()); ?><?php echo ''; ?><?php if ($this->_tpl_vars['rsslinks']): ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['rsslinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rssentry']):
?><?php echo '<link rel="alternate" type="application/rss+xml" title="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['rssentry']['title'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?><?php echo '" href="'; ?><?php echo $this->_tpl_vars['rssentry']['link']; ?><?php echo '">'; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['oxidBlock_head']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_block']):
?><?php echo ''; ?><?php echo $this->_tpl_vars['_block']; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_pageHead', ob_get_contents());ob_end_clean(); ?>

<?php $this->assign('blIsCheckout', $this->_tpl_vars['oView']->getIsOrderStep()); ?>
<?php $this->assign('blFullwidth', $this->_tpl_vars['oViewConf']->getViewThemeParam('blFullwidthLayout')); ?>
<?php $this->assign('sBackgroundColor', $this->_tpl_vars['oViewConf']->getViewThemeParam('sBackgroundColor')); ?>

<?php if ($this->_tpl_vars['oViewConf']->getViewThemeParam('blUseBackground')): ?>
    <?php $this->assign('sBackgroundPath', $this->_tpl_vars['oViewConf']->getViewThemeParam('sBackgroundPath')); ?>
    <?php $this->assign('sBackgroundUrl', $this->_tpl_vars['oViewConf']->getImageUrl("backgrounds/".($this->_tpl_vars['sBackgroundPath']))); ?>
    <?php $this->assign('sBackgroundRepeat', $this->_tpl_vars['oViewConf']->getViewThemeParam('sBackgroundRepeat')); ?>
    <?php $this->assign('sBackgroundPosHorizontal', $this->_tpl_vars['oViewConf']->getViewThemeParam('sBackgroundPosHorizontal')); ?>
    <?php $this->assign('sBackgroundPosVertical', $this->_tpl_vars['oViewConf']->getViewThemeParam('sBackgroundPosVertical')); ?>
    <?php $this->assign('sBackgroundSize', $this->_tpl_vars['oViewConf']->getViewThemeParam('sBackgroundSize')); ?>
    <?php $this->assign('blBackgroundAttachment', $this->_tpl_vars['oViewConf']->getViewThemeParam('blBackgroundAttachment')); ?>

    <?php if ($this->_tpl_vars['sBackgroundUrl']): ?>
        <?php $this->assign('sStyle', "background:".($this->_tpl_vars['sBackgroundColor'])." url(".($this->_tpl_vars['sBackgroundUrl']).") ".($this->_tpl_vars['sBackgroundRepeat'])." ".($this->_tpl_vars['sBackgroundPosHorizontal'])." ".($this->_tpl_vars['sBackgroundPosVertical']).";"); ?>

        <?php if ($this->_tpl_vars['sBackgroundSize']): ?>
            <?php $this->assign('sStyle', ((is_array($_tmp=$this->_tpl_vars['sStyle'])) ? $this->_run_mod_handler('cat', true, $_tmp, "background-size:".($this->_tpl_vars['sBackgroundSize']).";") : smarty_modifier_cat($_tmp, "background-size:".($this->_tpl_vars['sBackgroundSize']).";"))); ?>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['blBackgroundAttachment']): ?>
            <?php $this->assign('sStyle', ((is_array($_tmp=$this->_tpl_vars['sStyle'])) ? $this->_run_mod_handler('cat', true, $_tmp, "background-attachment:fixed;") : smarty_modifier_cat($_tmp, "background-attachment:fixed;"))); ?>
        <?php endif; ?>
    <?php else: ?>
        <?php $this->assign('sStyle', "background:".($this->_tpl_vars['sBackgroundColor']).";"); ?>
    <?php endif; ?>
<?php elseif ($this->_tpl_vars['sBackgroundColor']): ?>
    <?php $this->assign('sStyle', "background:".($this->_tpl_vars['sBackgroundColor']).";"); ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="<?php echo $this->_tpl_vars['oView']->getActiveLangAbbr(); ?>
" <?php if ($this->_tpl_vars['oViewConf']->getShowFbConnect()): ?>xmlns:fb="http://www.facebook.com/2008/fbml"<?php endif; ?>>
    <head>
        <?php $_from = $this->_tpl_vars['oxidBlock_pageHead']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_block']):
?>
            <?php echo $this->_tpl_vars['_block']; ?>

        <?php endforeach; endif; unset($_from); ?>
        <?php echo smarty_function_oxstyle(array(), $this);?>


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="cl-<?php echo $this->_tpl_vars['oView']->getClassName(); ?>
<?php if ($_GET['plain'] == '1'): ?> popup<?php endif; ?><?php if ($this->_tpl_vars['blIsCheckout']): ?> is-checkout<?php endif; ?><?php if ($this->_tpl_vars['oxcmp_user'] && $this->_tpl_vars['oxcmp_user']->oxuser__oxpassword->value): ?> is-logged-in<?php endif; ?>"<?php if ($this->_tpl_vars['sStyle']): ?> style="<?php echo $this->_tpl_vars['sStyle']; ?>
"<?php endif; ?>>

                
        <div style="display: none;">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/svg/shoppingbag.svg", 'smarty_include_vars' => array('count' => $this->_tpl_vars['oxcmp_basket']->getItemsCount())));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
        

        <div class="<?php if ($this->_tpl_vars['blFullwidth']): ?>fullwidth-container<?php else: ?>container<?php endif; ?>">
            <div class="main-row">
                <?php $_from = $this->_tpl_vars['oxidBlock_pageBody']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_block']):
?>
                    <?php echo $this->_tpl_vars['_block']; ?>

                <?php endforeach; endif; unset($_from); ?>
            </div>
        </div>

        <?php $_from = $this->_tpl_vars['oxidBlock_pagePopup']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_block']):
?>
            <?php echo $this->_tpl_vars['_block']; ?>

        <?php endforeach; endif; unset($_from); ?>

        <?php if ($this->_tpl_vars['oViewConf']->getTopActiveClassName() == 'details' && $this->_tpl_vars['oView']->showZoomPics()): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/details/inc/photoswipe.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>

        
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "i18n/js_vars.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <?php echo smarty_function_oxscript(array('include' => "js/libs/jquery.min.js",'priority' => 1), $this);?>

            <?php echo smarty_function_oxscript(array('include' => "js/libs/jquery-ui.min.js",'priority' => 1), $this);?>

            <?php echo smarty_function_oxscript(array('include' => "js/scripts.min.js",'priority' => 1), $this);?>

        

        <?php if ($this->_tpl_vars['oViewConf']->isTplBlocksDebugMode()): ?>
            <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxblockdebug.min.js"), $this);?>

            <?php echo smarty_function_oxscript(array('add' => "$( 'hr.debugBlocksStart' ).oxBlockDebug();"), $this);?>

        <?php endif; ?>

        <!--[if gte IE 9]><style type="text/css">.gradient {filter:none;}</style><![endif]-->
        <?php echo smarty_function_oxscript(array(), $this);?>


        <?php if (! $this->_tpl_vars['oView']->isDemoShop()): ?>
            <?php echo smarty_function_oxid_include_dynamic(array('file' => "widget/dynscript.tpl"), $this);?>

        <?php endif; ?>

        <?php $_from = $this->_tpl_vars['oxidBlock_pageScript']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['_block']):
?>
            <?php echo $this->_tpl_vars['_block']; ?>

        <?php endforeach; endif; unset($_from); ?>

    </body>
</html>
<?php /* Smarty version 2.6.28, created on 2017-01-12 09:16:41
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'login.tpl', 4, false),array('modifier', 'count', 'login.tpl', 38, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title><?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN_TITLE'), $this);?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <link rel="shortcut icon" href="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl(); ?>
favicon.ico">
    <style type="text/css">
        html,body{background:#fff;height:100%;padding:0;margin:0;font:11px Trebuchet MS, Tahoma, Verdana, Arial, Helvetica, sans-serif;}
        div.box{width:330px;height:200px;padding:20px;background:#fff url(<?php echo $this->_tpl_vars['oViewConf']->getImageUrl(); ?>
login.png) no-repeat;position:absolute;top:50%;margin-top:-127px;left:50%;margin-left:-190px;}
        p{padding:0;margin:0;}
        img.logo {margin:0 0 0 125px;padding:0;}
        form{padding:0;margin:0;}
        label {width:100px;float:left;padding:2px 0;margin-top:2px;clear:both;}
        input,select {width:220px;margin-bottom:2px;font-face:Trebuchet MS, Tahoma, Verdana, Arial, Helvetica, sans-serif;}
        select{width:226px;}
        input.btn{margin-left:100px;width:226px;}
        a.help {text-decoration:none;text-align:center;display:block;color:#000;margin:2px 0 0 100px;}
        a.help:hover {text-decoration:underline;}
        div.errorbox{color:#f00;text-align:center;margin:0 0 5px 0;}
        .notify {position: fixed; width: 100%; font-size: 16px; color: #fff; background-color: #f77704; padding: 8px 0 8px 0; text-align: center; border-bottom: 1px solid #d36706;}
    </style>
</head>
<body>


<div class="box">

<form action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" target="_top" method="post" name="login" id="login">
    <p>
        <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl(); ?>
loginlogo.png" alt="" class="logo">

        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>


        <input type="hidden" name="fnc" value="checklogin">
        <input type="hidden" name="cl" value="login"><br>

        <?php if (count($this->_tpl_vars['Errors']['default'])): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_error.tpl", 'smarty_include_vars' => array('Errorlist' => $this->_tpl_vars['Errors']['default'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>

        <label for="usr"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_USER'), $this);?>
</label>
        <input type="text" name="user" id="usr" value="<?php echo $this->_tpl_vars['user']; ?>
" size="49" autofocus><br>

        <label for="pwd"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_PASSWORD'), $this);?>
</label>
        <input type="password" name="pwd" id="pwd" value="<?php echo $this->_tpl_vars['pwd']; ?>
" size="49"><br>

        <label for="lng"><?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN_LANGUAGE'), $this);?>
</label>
        <select name="chlanguage" id="lng">
            <?php $_from = $this->_tpl_vars['aLanguages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iLang'] => $this->_tpl_vars['oLang']):
?>
            <option value="<?php echo $this->_tpl_vars['oLang']->id; ?>
" <?php if ($this->_tpl_vars['oLang']->selected): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['oLang']->name; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
        </select><br>

        <?php if ($this->_tpl_vars['profiles']): ?>
        <label for="prf"><?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN_PROFILE'), $this);?>
</label>
        <select name="profile" id="prf">
            <?php $_from = $this->_tpl_vars['profiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['position'] => $this->_tpl_vars['curr_profile']):
?>
               <option value="<?php echo $this->_tpl_vars['position']; ?>
" <?php if ($this->_tpl_vars['curr_profile']['2']): ?>selected<?php endif; ?>><?php echo $this->_tpl_vars['curr_profile']['0']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
        </select><br>
        <?php endif; ?>

        <input type="submit" value="<?php echo smarty_function_oxmultilang(array('ident' => 'LOGIN_START'), $this);?>
" class="btn"><br>
    </p>
</form>
</div>

<script type="text/javascript">if (window != window.top) top.location.href = document.location.href;</script>

</body>
</html>
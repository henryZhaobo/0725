<?php
/* Smarty version 3.1.30, created on 2017-07-25 19:17:15
  from "C:\xampp\htdocs\0725\guestbook\application\views\home\update.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597728bb7e7510_63930381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6b60713f8d4dbc5c76689756e6da0ae1e7cd367' => 
    array (
      0 => 'C:\\xampp\\htdocs\\0725\\guestbook\\application\\views\\home\\update.html',
      1 => 1500981432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597728bb7e7510_63930381 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link href="../../../libs/bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<style>
.reg{
	border:1px,solid black;
	position:absolute;
	padding:15px;
	left:0;
	right:0;
	top:0;
	bottom:0;
	margin:auto;
	width:40%;
	height:350px;
	box-shadow:0 0 3px #ddd;
}
.reg input{
	margin-top:5px;
	width:90%;
}
</style>
<body>
<form action='' method="post" class="form-horizontal reg">
原密码:<input type="text" name=pwd2 value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]->pwd;?>
" class="form-control">
用户名：<input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]->username;?>
" class="form-control"><br>
密码：<input type="password" name="pwd" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]->pwd;?>
" class="form-control"><br>
email：<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]->email;?>
" class="form-control"><br>
<input type="submit" name="send" value="submit" class="btn btn-default">
</form>

</body>
</html><?php }
}

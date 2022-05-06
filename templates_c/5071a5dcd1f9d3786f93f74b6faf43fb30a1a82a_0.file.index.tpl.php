<?php
/* Smarty version 3.1.39, created on 2022-05-06 11:16:06
  from 'C:\projects\task_01\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6274e75618abc1_91564682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5071a5dcd1f9d3786f93f74b6faf43fb30a1a82a' => 
    array (
      0 => 'C:\\projects\\task_01\\templates\\index.tpl',
      1 => 1651828563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6274e75618abc1_91564682 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 01 - Webmaster</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/tiny-slider.css">
    <link rel="stylesheet" href="/css/theme.css">
</head>

<body>		
	<div class="container">
		<h2>Best sellers</h2>
		<div class="slider-container">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
				<div class="card" style="padding: 10px important;">
					<div class="card-img">
						<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link_rewrite'];?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['img_url'];?>
" alt="">
						</a>
					</div>
					<div>
						<p class="card-name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</p>
						<p>
							<span class="card-price"><?php echo number_format($_smarty_tpl->tpl_vars['product']->value['price'],2);?>
&euro;</span>
							<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_price']) {?> 
								<span class="card-specific_price"><?php echo number_format($_smarty_tpl->tpl_vars['product']->value['specific_price']['priceWithoutReduction'],2);?>
&euro;</span>
							<?php }?>
						</p>
					</div>
				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
		</div>
	</div>

     <?php $_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
?>
    <?php echo '<script'; ?>
 src="/js/jquery-3.6.0.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/tiny-slider.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/theme.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}

<?php
/* Smarty version 4.3.1, created on 2023-10-05 15:50:27
  from 'C:\wamp\www\admidio\adm_themes\simple\templates\sys-template-parts\parts\form.part.warning.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651e8deb4f8448_57204688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8aeb4db3791f95a05a60d98fe3cbc159e5c5c38' => 
    array (
      0 => 'C:\\wamp\\www\\admidio\\adm_themes\\simple\\templates\\sys-template-parts\\parts\\form.part.warning.tpl',
      1 => 1695378701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651e8deb4f8448_57204688 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['alertWarning']->value) {?>
    <div class="alert alert-warning mt-3" role="alert">
        <i class="fas fa-exclamation-triangle"></i><?php echo $_smarty_tpl->tpl_vars['alertWarning']->value;?>

    </div>
<?php }
}
}

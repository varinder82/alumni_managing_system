<?php
/* Smarty version 4.3.1, created on 2023-10-05 12:18:12
  from 'C:\wamp\www\admidio\adm_program\installation\templates\sys-template-parts\parts\form.part.icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651e8d64844042_10824222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebe98b03f54d7acd287ddbabf91a81235cd58ffb' => 
    array (
      0 => 'C:\\wamp\\www\\admidio\\adm_program\\installation\\templates\\sys-template-parts\\parts\\form.part.icon.tpl',
      1 => 1695378701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651e8d64844042_10824222 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['icon']->value) {?>
    <?php if (Image::isFontAwesomeIcon($_smarty_tpl->tpl_vars['icon']->value)) {?>
        <i class="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
 fas" <?php if ((isset($_smarty_tpl->tpl_vars['label']->value))) {?>data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
"<?php }?>></i>
    <?php } else { ?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['label']->value))) {?>alt="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
"<?php }?> />
    <?php }
}
}
}

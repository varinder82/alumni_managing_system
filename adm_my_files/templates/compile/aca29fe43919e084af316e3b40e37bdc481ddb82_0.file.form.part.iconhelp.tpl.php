<?php
/* Smarty version 4.3.1, created on 2023-10-05 12:18:14
  from 'C:\wamp\www\admidio\adm_program\installation\templates\sys-template-parts\parts\form.part.iconhelp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651e8d66976a86_97432314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aca29fe43919e084af316e3b40e37bdc481ddb82' => 
    array (
      0 => 'C:\\wamp\\www\\admidio\\adm_program\\installation\\templates\\sys-template-parts\\parts\\form.part.iconhelp.tpl',
      1 => 1695378701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651e8d66976a86_97432314 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['helpTextIdLabel']->value) {?>
    <?php if (Language::isTranslationStringId($_smarty_tpl->tpl_vars['helpTextIdLabel']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('helpTextIdLabel', $_smarty_tpl->tpl_vars['l10n']->value->get($_smarty_tpl->tpl_vars['helpTextIdLabel']->value));?>
    <?php }?>
    <i class="fas fa-info-circle admidio-info-icon" data-toggle="popover"
    data-html="true" data-trigger="hover click" data-placement="auto"
    title="<?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_NOTE');?>
" data-content="<?php echo SecurityUtils::encodeHTML($_smarty_tpl->tpl_vars['helpTextIdLabel']->value);?>
"></i>
<?php }
}
}

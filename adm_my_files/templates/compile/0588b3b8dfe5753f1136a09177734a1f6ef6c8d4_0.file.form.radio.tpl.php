<?php
/* Smarty version 4.3.1, created on 2023-10-08 14:58:18
  from 'C:\wamp\www\admidio\adm_themes\simple\templates\sys-template-parts\form.radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_652276329356c9_94444807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0588b3b8dfe5753f1136a09177734a1f6ef6c8d4' => 
    array (
      0 => 'C:\\wamp\\www\\admidio\\adm_themes\\simple\\templates\\sys-template-parts\\form.radio.tpl',
      1 => 1695378701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sys-template-parts/parts/form.part.icon.tpl' => 1,
    'file:sys-template-parts/parts/form.part.iconhelp.tpl' => 1,
    'file:sys-template-parts/parts/form.part.helptext.tpl' => 1,
    'file:sys-template-parts/parts/form.part.warning.tpl' => 1,
  ),
),false)) {
function content_652276329356c9_94444807 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['data']->value['property'] == 4) {?>
<input type="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['attributes'], 'itemvar');
$_smarty_tpl->tpl_vars['itemvar']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemvar']->key => $_smarty_tpl->tpl_vars['itemvar']->value) {
$_smarty_tpl->tpl_vars['itemvar']->do_else = false;
$__foreach_itemvar_0_saved = $_smarty_tpl->tpl_vars['itemvar'];
?>
    <?php echo $_smarty_tpl->tpl_vars['itemvar']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['itemvar']->value;?>
" <?php
$_smarty_tpl->tpl_vars['itemvar'] = $__foreach_itemvar_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
<?php } else { ?>
<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_group" class="form-group row <?php if ($_smarty_tpl->tpl_vars['property']->value == 1) {?>admidio-form-group-required<?php }?>">
    <label for="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="col-sm-3 control-label">
        <?php $_smarty_tpl->_subTemplateRender('file:sys-template-parts/parts/form.part.icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php echo $_smarty_tpl->tpl_vars['label']->value;?>

        <?php $_smarty_tpl->_subTemplateRender('file:sys-template-parts/parts/form.part.iconhelp.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </label>
    <div class="col-sm-9">
        <?php if ($_smarty_tpl->tpl_vars['showNoValueButton']->value) {?>
            <label for="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_0" class="radio-inline">
            <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_0" class="<?php echo $_smarty_tpl->tpl_vars['data']->value['attributes']['class'];?>
">---</label>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['values']->value, 'optionvar');
$_smarty_tpl->tpl_vars['optionvar']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['optionvar']->key => $_smarty_tpl->tpl_vars['optionvar']->value) {
$_smarty_tpl->tpl_vars['optionvar']->do_else = false;
$__foreach_optionvar_1_saved = $_smarty_tpl->tpl_vars['optionvar'];
?>
            <label for="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['optionvar']->key;?>
" class="radio-inline">
                <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['optionvar']->key;?>
" value="<?php echo $_smarty_tpl->tpl_vars['optionvar']->key;?>
"
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['attributes'], 'itemvar');
$_smarty_tpl->tpl_vars['itemvar']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemvar']->key => $_smarty_tpl->tpl_vars['itemvar']->value) {
$_smarty_tpl->tpl_vars['itemvar']->do_else = false;
$__foreach_itemvar_2_saved = $_smarty_tpl->tpl_vars['itemvar'];
?>
                    <?php echo $_smarty_tpl->tpl_vars['itemvar']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['itemvar']->value;?>
"
                <?php
$_smarty_tpl->tpl_vars['itemvar'] = $__foreach_itemvar_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php if ($_smarty_tpl->tpl_vars['defaultValue']->value == $_smarty_tpl->tpl_vars['optionvar']->key) {?>checked="checked"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['optionvar']->value;?>
</label>
            <?php
$_smarty_tpl->tpl_vars['optionvar'] = $__foreach_optionvar_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->_subTemplateRender('file:sys-template-parts/parts/form.part.helptext.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:sys-template-parts/parts/form.part.warning.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<?php }
}
}

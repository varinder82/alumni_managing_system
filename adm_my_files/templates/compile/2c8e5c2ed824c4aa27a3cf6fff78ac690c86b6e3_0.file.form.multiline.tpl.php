<?php
/* Smarty version 4.3.1, created on 2023-10-05 20:30:38
  from 'C:\wamp\www\admidio\adm_themes\simple\templates\sys-template-parts\form.multiline.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_651ecf96a14dc5_23960559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c8e5c2ed824c4aa27a3cf6fff78ac690c86b6e3' => 
    array (
      0 => 'C:\\wamp\\www\\admidio\\adm_themes\\simple\\templates\\sys-template-parts\\form.multiline.tpl',
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
function content_651ecf96a14dc5_23960559 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['data']->value['property'] == 4) {?>
    <textarea style="display: none;" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['attributes'], 'itemvar');
$_smarty_tpl->tpl_vars['itemvar']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemvar']->key => $_smarty_tpl->tpl_vars['itemvar']->value) {
$_smarty_tpl->tpl_vars['itemvar']->do_else = false;
$__foreach_itemvar_0_saved = $_smarty_tpl->tpl_vars['itemvar'];
?>
            <?php echo $_smarty_tpl->tpl_vars['itemvar']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['itemvar']->value;?>
"
        <?php
$_smarty_tpl->tpl_vars['itemvar'] = $__foreach_itemvar_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    ><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</textarea>
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
            <textarea name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['attributes'], 'itemvar');
$_smarty_tpl->tpl_vars['itemvar']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemvar']->key => $_smarty_tpl->tpl_vars['itemvar']->value) {
$_smarty_tpl->tpl_vars['itemvar']->do_else = false;
$__foreach_itemvar_1_saved = $_smarty_tpl->tpl_vars['itemvar'];
?>
                    <?php echo $_smarty_tpl->tpl_vars['itemvar']->key;?>
="<?php echo $_smarty_tpl->tpl_vars['itemvar']->value;?>
"
                <?php
$_smarty_tpl->tpl_vars['itemvar'] = $__foreach_itemvar_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                ><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</textarea>
            <?php if ($_smarty_tpl->tpl_vars['maxLength']->value > 0) {?>
                <small class="characters-count">(<?php echo $_smarty_tpl->tpl_vars['l10n']->value->get('SYS_STILL_X_CHARACTERS',array((('<span id="').($_smarty_tpl->tpl_vars['id']->value)).('_counter" class="">255</span>')));?>
)</small>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender('file:sys-template-parts/parts/form.part.helptext.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender('file:sys-template-parts/parts/form.part.warning.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
<?php }
}
}

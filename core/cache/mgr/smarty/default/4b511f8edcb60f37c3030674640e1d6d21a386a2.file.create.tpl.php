<?php /* Smarty version Smarty-3.0.4, created on 2015-03-03 20:56:19
         compiled from "/var/www/html/github/manager/templates/default/resource/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136548252154f5d29b8fcd97-30501482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b511f8edcb60f37c3030674640e1d6d21a386a2' => 
    array (
      0 => '/var/www/html/github/manager/templates/default/resource/create.tpl',
      1 => 1422520912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136548252154f5d29b8fcd97-30501482',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/github/core/model/smarty/plugins/modifier.escape.php';
?><div id="modx-panel-resource-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo $_smarty_tpl->getVariable('tvOutput')->value;?>
</div>
<?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hidden')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value){
?>
    <input type="hidden" id="tvdef<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->default_text);?>
" />
    <?php echo $_smarty_tpl->getVariable('tv')->value->get('formElement');?>

<?php }} ?>

<?php echo $_smarty_tpl->getVariable('onDocFormPrerender')->value;?>

<?php if ($_smarty_tpl->getVariable('resource')->value->richtext&&(isset($_smarty_tpl->getVariable('_config')->value['use_editor']) ? $_smarty_tpl->getVariable('_config')->value['use_editor'] : null)){?>
<?php echo $_smarty_tpl->getVariable('onRichTextEditorInit')->value;?>

<?php }?>
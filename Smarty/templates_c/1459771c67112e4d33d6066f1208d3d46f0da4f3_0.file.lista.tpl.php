<?php
/* Smarty version 4.2.1, created on 2022-10-01 08:42:54
  from 'C:\xampp\htdocs\Webdos\Smarty\templates\lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6337e16e7f00a3_19614485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1459771c67112e4d33d6066f1208d3d46f0da4f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Webdos\\Smarty\\templates\\lista.tpl',
      1 => 1664606573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/form_alta.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6337e16e7f00a3_19614485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/form_alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>    
        <li class="
            list-group-item d-flex justify-content-between 
            <?php if ($_smarty_tpl->tpl_vars['task']->value->finalizada) {?> finalizada <?php }?>
        ">
            <span> <b><?php echo $_smarty_tpl->tpl_vars['task']->value->titulo;?>
</b> - <?php echo $_smarty_tpl->tpl_vars['task']->value->descripcion;?>
(prioridad <?php echo $_smarty_tpl->tpl_vars['task']->value->prioridad;?>
) </span>
            <div>
            <a href="delete/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_tarea;?>
" type='button' class='btn btn-danger'>Borrar</a>
            <?php if (!$_smarty_tpl->tpl_vars['task']->value->finalizada) {?>
                <a href="update/<?php echo $_smarty_tpl->tpl_vars['task']->value->id_tarea;?>
" type='button' class='btn btn-success'>Finalizar</a>
            <?php }?>
            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

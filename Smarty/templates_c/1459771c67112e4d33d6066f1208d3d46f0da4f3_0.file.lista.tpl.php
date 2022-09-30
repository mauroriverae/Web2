<?php
/* Smarty version 4.2.1, created on 2022-09-30 21:55:29
  from 'C:\xampp\htdocs\Webdos\Smarty\templates\lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633749b1e2f156_46929799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1459771c67112e4d33d6066f1208d3d46f0da4f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Webdos\\Smarty\\templates\\lista.tpl',
      1 => 1664567724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633749b1e2f156_46929799 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>    
    <ul>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b><?php echo $_smarty_tpl->tpl_vars['task']->value->titulo;?>
</b> - <?php echo $_smarty_tpl->tpl_vars['task']->value->descripcion;?>
(prioridad <?php echo $_smarty_tpl->tpl_vars['task']->value->prioridad;?>
) </span>
            <a href='delete/$task->id_tarea' type='button' class='btn btn-danger ml-auto'>Borrar</a>
        </li>
    </ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}

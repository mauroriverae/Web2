{foreach from=$tasks item=$task }    
    <ul>
        <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span> <b>{$task->titulo}</b> - {$task->descripcion }(prioridad {$task->prioridad}) </span>
            <a href='delete/$task->id_tarea' type='button' class='btn btn-danger ml-auto'>Borrar</a>
        </li>
    </ul>
{/foreach}

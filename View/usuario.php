<div class="container">
        <div class="container">
            <!--- inicia carpeta --->
                <h1><i class="fa-solid fa-users"></i> Usuarios</h1>
                <div class="tabbable">
                    <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
                    <li class="active">
                    <a data-toggle="tab" href="#home4">Nombre y Correo</a>
                    </li>
                    <li>
                    <a data-toggle="tab" href="#profile4">Nombre y contraseña</a>
                    </li>
                    </ul>
                    <div class="tab-content">
                        <div id="home4" class="tab-pane fade in active">
                            <table id="dt_cliente" class="table table-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                            <tr>                                
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th></th>                                           
                            </tr>
                            </thead>
                            <tbody>
                            <tr><td><span id="fname">Juan</span><td><span id="fcorreo"><a href="#">Juan@email.com</a></span></td><td><button type='button' class='editar btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fa fa-pencil-square-o'></i></button>    <button type='button' class='eliminar btn btn-danger'><i class='fa fa-trash-o'></i></button></td></tr>
                            <tr><td><span id="fname">Alex Perez</span><td><span id="fcorreo"><a href="#">Alex@email.com</a></span></td><td><button type='button' class='editar btn btn-primary' data-toggle='modal' data-target='#modalEditar'><i class='fa fa-pencil-square-o'></i></button>    <button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button></td></tr>
                            </tbody>                    
                            </table>
                        </div>
                        <div id="profile4" class="tab-pane fade">
                            <table id="dt_contra" class="table table-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                            <tr>                                
                            <th>Nombre</th>
                            <th>Contraseña</th>
                            <th></th>                                           
                            </tr>
                            </thead>
                            <tbody>
                            <tr><td><span id="fname2">Alex</span><td><span id="fcontra">Root1234</span></td><td><button type='button' class='editar2 btn btn-primary' data-toggle='modal' data-target='#modalEditar2'><i class='fa fa-pencil-square-o'></i></button>    <button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button></td></tr>
                            <tr><td><span id="fname2">Juan</span><td><span id="fcontra">Root1234</span></td><td><button type='button' class='editar2 btn btn-primary' data-toggle='modal' data-target='#modalEditar2'><i class='fa fa-pencil-square-o'></i></button>    <button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button></td></tr>
                            
                            </tbody>                    
                            </table>
                        </div>                          
                    </div>
                </div>
        </div>
     <br>
     <button type="button" class="btn btn-info btn-block active btn-lg" data-toggle="modal" data-target="#myModal">Suscribirme</button>
     <br>
     <br>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Confirmar</h4>
      </div>
      <div class="modal-body">
        <p>Esta seguro de agregar un nuevo usuario</p>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-info" href="?c=Usuario&a=Crud">Aceptar</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <div>
        <form id="frmEliminarUsuario" action="" method="POST">
            <input type="hidden" id="idusuario" name="idusuario" value="">
            <input type="hidden" id="opcion" name="opcion" value="eliminar">
        </form>
    </div>
                <!-- Modal editar 1-->
            <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modalEliminarLabel">Editar datos</h4>
                        </div>
                        <div class="modal-body">                            
                            <div class="form-group">
        <label for="nombre">Nombre</label>
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" name="nombre" id="nombre"/>
    </div>
        <div class="form-group">
        <label for="email">Correo Electrónico</label>
         <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <div class="clearfix">
        <input type="email" name="email" id="email"/>
        </div>
    </div>
    </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Modal -->
                <!-- Modal editar 2-->
            <div class="modal fade" id="modalEditar2" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="modalEliminarLabel">Editar datos</h4>
                        </div>
                        <div class="modal-body">                            
                            <div class="form-group">
        <label for="nombre">Nombre</label>
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" name="nombre" id="n"/>
    </div>
        <div class="form-group">
        <label for="email">Contraseña</label>
         <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <div class="clearfix">
        <input type="email" name="email" id="c"/>
        </div>
    </div>
    </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Modal -->

<script type="text/javascript">
    $(document).ready(function(){
    $(".eliminar").click(function(){
    const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: '¿Estas seguro?',
  text: "Se eliminara permanentemente",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Si, Eliminar!',
  cancelButtonText: 'No, cancelar!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire(
      'Eliminado',
      'El registro ha sido eliminado.',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelado',
      'Tu registro ha sido salvado :)',
      'error'
    )
  }
})
    });
});
</script>
<script>
 $(document).on("ready", function(){ 
        listar();
        });
        var listar = function()
        {
            var table = $("#dt_cliente").DataTable({
                "destroy":true,
                "language":idioma_esp,
                pageLength : 1,
                lengthMenu: [[1, 10, 20, -1], [1, 10, 20, 'Todos']]
            });
        }
 $(document).on("ready", function(){ 
        listar2();
        });
        var listar2 = function()
        {
            var table = $("#dt_contra").DataTable({
                "destroy":true,
                "language":idioma_esp,
                pageLength : 1,
                lengthMenu: [[1, 10, 20, -1], [1, 10, 20, 'Todos']]
            });
        }


        var idioma_esp = {
    "processing": "Procesando...",
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "No se encontraron resultados",
    "emptyTable": "Ningún dato disponible en esta tabla",
    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar:",
    "infoThousands": ",",
    "loadingRecords": "Cargando...",
    "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
    },
    "aria": {
        "sortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad",
        "collection": "Colección",
        "colvisRestore": "Restaurar visibilidad",
        "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
        "copySuccess": {
            "1": "Copiada 1 fila al portapapeles",
            "_": "Copiadas %ds fila al portapapeles"
        },
        "copyTitle": "Copiar al portapapeles",
        "csv": "CSV",
        "excel": "Excel",
        "pageLength": {
            "-1": "Mostrar todas las filas",
            "_": "Mostrar %d filas"
        },
        "pdf": "PDF",
        "print": "Imprimir",
        "renameState": "Cambiar nombre",
        "updateState": "Actualizar",
        "createState": "Crear Estado",
        "removeAllStates": "Remover Estados",
        "removeState": "Remover",
        "savedStates": "Estados Guardados",
        "stateRestore": "Estado %d"
    },
    "autoFill": {
        "cancel": "Cancelar",
        "fill": "Rellene todas las celdas con <i>%d<\/i>",
        "fillHorizontal": "Rellenar celdas horizontalmente",
        "fillVertical": "Rellenar celdas verticalmentemente"
    },
    "decimal": ",",
    "searchBuilder": {
        "add": "Añadir condición",
        "button": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "clearAll": "Borrar todo",
        "condition": "Condición",
        "conditions": {
            "date": {
                "after": "Despues",
                "before": "Antes",
                "between": "Entre",
                "empty": "Vacío",
                "equals": "Igual a",
                "notBetween": "No entre",
                "notEmpty": "No Vacio",
                "not": "Diferente de"
            },
            "number": {
                "between": "Entre",
                "empty": "Vacio",
                "equals": "Igual a",
                "gt": "Mayor a",
                "gte": "Mayor o igual a",
                "lt": "Menor que",
                "lte": "Menor o igual que",
                "notBetween": "No entre",
                "notEmpty": "No vacío",
                "not": "Diferente de"
            },
            "string": {
                "contains": "Contiene",
                "empty": "Vacío",
                "endsWith": "Termina en",
                "equals": "Igual a",
                "notEmpty": "No Vacio",
                "startsWith": "Empieza con",
                "not": "Diferente de",
                "notContains": "No Contiene",
                "notStartsWith": "No empieza con",
                "notEndsWith": "No termina con"
            },
            "array": {
                "not": "Diferente de",
                "equals": "Igual",
                "empty": "Vacío",
                "contains": "Contiene",
                "notEmpty": "No Vacío",
                "without": "Sin"
            }
        },
        "data": "Data",
        "deleteTitle": "Eliminar regla de filtrado",
        "leftTitle": "Criterios anulados",
        "logicAnd": "Y",
        "logicOr": "O",
        "rightTitle": "Criterios de sangría",
        "title": {
            "0": "Constructor de búsqueda",
            "_": "Constructor de búsqueda (%d)"
        },
        "value": "Valor"
    },
    "searchPanes": {
        "clearMessage": "Borrar todo",
        "collapse": {
            "0": "Paneles de búsqueda",
            "_": "Paneles de búsqueda (%d)"
        },
        "count": "{total}",
        "countFiltered": "{shown} ({total})",
        "emptyPanes": "Sin paneles de búsqueda",
        "loadMessage": "Cargando paneles de búsqueda",
        "title": "Filtros Activos - %d",
        "showMessage": "Mostrar Todo",
        "collapseMessage": "Colapsar Todo"
    },
    "select": {
        "cells": {
            "1": "1 celda seleccionada",
            "_": "%d celdas seleccionadas"
        },
        "columns": {
            "1": "1 columna seleccionada",
            "_": "%d columnas seleccionadas"
        },
        "rows": {
            "1": "1 fila seleccionada",
            "_": "%d filas seleccionadas"
        }
    },
    "thousands": ".",
    "datetime": {
        "previous": "Anterior",
        "next": "Proximo",
        "hours": "Horas",
        "minutes": "Minutos",
        "seconds": "Segundos",
        "unknown": "-",
        "amPm": [
            "AM",
            "PM"
        ],
        "months": {
            "0": "Enero",
            "1": "Febrero",
            "10": "Noviembre",
            "11": "Diciembre",
            "2": "Marzo",
            "3": "Abril",
            "4": "Mayo",
            "5": "Junio",
            "6": "Julio",
            "7": "Agosto",
            "8": "Septiembre",
            "9": "Octubre"
        },
        "weekdays": [
            "Dom",
            "Lun",
            "Mar",
            "Mie",
            "Jue",
            "Vie",
            "Sab"
        ]
    },
    "editor": {
        "close": "Cerrar",
        "create": {
            "button": "Nuevo",
            "title": "Crear Nuevo Registro",
            "submit": "Crear"
        },
        "edit": {
            "button": "Editar",
            "title": "Editar Registro",
            "submit": "Actualizar"
        },
        "remove": {
            "button": "Eliminar",
            "title": "Eliminar Registro",
            "submit": "Eliminar",
            "confirm": {
                "_": "¿Está seguro que desea eliminar %d filas?",
                "1": "¿Está seguro que desea eliminar 1 fila?"
            }
        },
        "error": {
            "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
        },
        "multi": {
            "title": "Múltiples Valores",
            "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aquí, de lo contrario conservarán sus valores individuales.",
            "restore": "Deshacer Cambios",
            "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
        }
    },
    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
    "stateRestore": {
        "creationModal": {
            "button": "Crear",
            "name": "Nombre:",
            "order": "Clasificación",
            "paging": "Paginación",
            "search": "Busqueda",
            "select": "Seleccionar",
            "columns": {
                "search": "Búsqueda de Columna",
                "visible": "Visibilidad de Columna"
            },
            "title": "Crear Nuevo Estado",
            "toggleLabel": "Incluir:"
        },
        "emptyError": "El nombre no puede estar vacio",
        "removeConfirm": "¿Seguro que quiere eliminar este %s?",
        "removeError": "Error al eliminar el registro",
        "removeJoiner": "y",
        "removeSubmit": "Eliminar",
        "renameButton": "Cambiar Nombre",
        "renameLabel": "Nuevo nombre para %s",
        "duplicateError": "Ya existe un Estado con este nombre.",
        "emptyStates": "No hay Estados guardados",
        "removeTitle": "Remover Estado",
        "renameTitle": "Cambiar Nombre Estado"
    }
} 
</script> 
<script type="text/javascript">
    $(document).ready(function(){
    $(document).on('click', '.editar2', function(){
     var nombre=$('#fname2').text();
     $('#n').val(nombre);
    var pass=$('#fcontra').text();
     $('#c').val(pass);
    });
});
</script> 
<script type="text/javascript">
    $(document).ready(function(){
    $(document).on('click', '.editar', function(){
     var first=$('#fname').text();
     $('#nombre').val(first);
    var firs=$('#fcorreo').text();
     $('#email').val(firs);
    });
});
</script>

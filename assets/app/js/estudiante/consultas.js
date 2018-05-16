//------------------------------------------------------------------------------
//                      CARGO TODOS LOS PROFESORES
//                      PARA QUE SEAN EVALUADOS
//------------------------------------------------------------------------------
$(document).ready(function () {
    $('#tblProfesor').DataTable({
        "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "Todo"]],
        "processing": true,
        'paging': true,
        'info': true,
        'filter': true,
        'stateSave': true,
        'ajax': {
            "url": baseurl + "estudiante/estudiante/getProfesor/",
            "type": "POST",
            "dataSrc": function (data) {
                var suma = 0;
                for (var i = 0; i <= data.length - 1; i++) {
                    suma += parseFloat(data[i].id_estudiante);
                }
                $('#spSuma').html(suma);
                return data;
            }
        },
        'columns': [
            {data: 'cod_profesor'},
            {data: 'nombre1'},
            {data: 'apellido1'},
            {data: 'cod_sede'},
            {data: 'cod_facultad'},
            {data: 'cod_departamento'},
            {"orderable": true,
                render: function (data, type, row) {
                    return '<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#centralModalWarning1" onClick="selPersona(\'' + row.cod_sede + '\',\'' + row.cod_facultad + '\',\'' + row.cod_profesor + '\');">Small modal</button>';
                }
            }
        ],
        "columnDefs": [
            {
                "targets": [5],
                "data": "nombre1",
                "render": function (data, type, row) {
                    return "<span style='color:#1a237e;'><i class='fa fa-calendar' aria-hidden='true'></i> &nbsp;" + data + "</span><br>";
                }
            },
            {
                "targets": [4],
                "data": "cod_profesor",
                "render": function (data, type, row) {
                    return "<span style='color:#1a237e;'><i class='fa fa-calendar' aria-hidden='true'></i> &nbsp;" + data + "</span><br>";
                }
            },
            {
                "targets": [3],
                "data": "estatus",
                "render": function (data, type, row) {
                    return "<span style='color:#1a237e;'><i class='fa fa-calendar' aria-hidden='true'></i> &nbsp;" + data + "</span><br>";
                }
            },
            {
                "targets": [2],
                "data": "fecha_asignacion",
                "render": function (data, type, row) {
                    return "<span style='color:#1a237e;'><i class='fa fa-calendar' aria-hidden='true'></i> &nbsp;" + data + "</span><br>";
                }
            },
            {
                "targets": [1],
                "data": "id_profesor",
                "render": function (data, type, row) {
                    return "<span style='color:#1a237e;'><i class='fa fa-th-list' aria-hidden='true'></i> &nbsp;" + data + "</span><br>";
                }
            },
            {
                "targets": [0],
                "data": "id_estudiante",
                "render": function (data, type, row) {
                    return "<span style='color:#e65100;'><i class='fa fa-file-text'></i> &nbsp;" + data + "</span><br>";
                }
            }
        ],
        "order": [[0, "asc"]],
    });
});
//------------------------------------------------------------------------------
//     CON ESTA FUNCION PASAMOS LOS PARAMETROS A LOS TEXT DE LA FICHA
//------------------------------------------------------------------------------
selPersona = function (cod_sede, cod_facultad, cod_profesor) {
    $('#mtxtSede').val(cod_sede);
    $('#mtxtFacultad').val(cod_facultad);
    $('#mtxtProfesor').val(cod_profesor);
};
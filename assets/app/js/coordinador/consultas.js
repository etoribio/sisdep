//------------------------------------------------------------------------------
//                      CARGO TODOS LOS CASOS AGRUPDOS PARA
//                      LA ALERTA
//------------------------------------------------------------------------------
$(document).ready(function () {
    $('#tblNoticform2').DataTable({
        "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "Todo"]],
        "processing": true,
        'paging': true,
        'info': true,
        'filter': true,
        'stateSave': true,
        'ajax': {
            "url": baseurl + "brote/alertas/getNotic/",
            "type": "POST",
            "dataSrc": function (data) {
                var suma = 0;
                for (var i = 0; i <= data.length - 1; i++) {
                    suma += parseFloat(data[i].id_brote_alerta);
                }
                $('#spSuma').html(suma);
                return data;
            }
        },
        'columns': [
            {data: 'id_brote_alerta', 'sClass': 'dt-body-center'},
            {data: 'evento'},
            {data: 'lugar'},
            {data: 'detalle_eventos'},
            {data: 'fecha_alerta'},
            {data: 'estado'},
            {"orderable": true,
                render: function (data, type, row) {
                    if (row.estado == 1) {
                        return '<select class="custom-select">' +
                                '<option value="" disabled selected>[Seleccione]</option>' +
                                '<option value="1">Imprimir</option>' +
                                '</select>';
                    } else if (row.estado == 0) {
                        return '<select class="custom-select">' +
                                '<option value="" disabled selected>[Seleccione]</option>' +
                                '<option value="1" data-toggle="modal" data-target="#centralModalWarning" title="Editar informacion" onClick="selPersona(\'' + row.id_brote_alerta + '\',\'' + row.evento + '\',\'' + row.lugar + '\',\'' + row.fecha_alerta + '\',\'' + row.detalle_eventos + '\');"><a href="#">  Editar</option>' +
                                '<option value="2">Imprimir</option>' +
                                '</select>';
                    } else if (row.estado == 2) {
                        return '<select class="custom-select">' +
                                '<option value="" disabled selected>[Seleccione]</option>' +
                                '<option value="2">Imprimir</option>' +
                                '</select>';
                    }

                }
            }
        ],
        "columnDefs": [
            {
                "targets": [5],
                "data": "estado",
                "render": function (data, type, row) {

                    if (data == 0) {
                        return "<h6><span class='badge badge-warning'>Sospechoso</span></h6>";
                    } else if (data == 1) {
                        return "<h6><span class='badge badge-success'>Procesado</span></h6>";
                    } else if (data == 2) {
                        return "<h6><span class='badge badge-info'>Descartado</span></h6>";
                    }
                }
            },
            {
                "targets": [4],
                "data": "fecha_alerta",
                "render": function (data, type, row) {
                    return "<span style='color:#1a237e;'><i class='fa fa-calendar' aria-hidden='true'></i> &nbsp;" + data + "</span><br>";
                }
            },
            {
                "targets": [3],
                "data": "detalle_eventos",
                "render": function (data, type, row) {
                    return "<span style='color:#1a237e;'><i class='fa fa-th-list' aria-hidden='true'></i> &nbsp;" + data + "</span><br>";
                }
            },
            {
                "targets": [2],
                "data": "lugar",
                "render": function (data, type, row) {
                    return "<span style='color:#1a237e;'><i class='fa fa-map-marker' aria-hidden='true'></i> &nbsp;" + data + "</span><br>";
                }
            },
            {
                "targets": [1],
                "data": "evento",
                "render": function (data, type, row) {
                    return "<span style='color:#1a237e;'><i class='fa fa-stethoscope' aria-hidden='true'></i></i> &nbsp;" + data + "</span><br>";
                }
            },
            {
                "targets": [0],
                "data": "id_brote_alerta",
                "render": function (data, type, row) {
                    return "<span style='color:#e65100;'><i class='fa fa-file-text'></i> &nbsp;" + data + "</span><br>";
                }
            }
        ],
        "order": [[4, "asc"]],
    });
});
//------------------------------------------------------------------------------
//                      CARGO LOS TIPOS DE INSTITUCIONES
//------------------------------------------------------------------------------
$.post(baseurl + "brote/alertas/getInstitucion",
        {},
        function (data) {
            var obj = JSON.parse(data);
            $.each(obj, function (i, item) {
                $('#cboInstitucion').append('<option value="' + item.id_tipo_institucion + '">' + item.tipo_institucion + '</option>')
            });
        });


//------------------------------------------------------------------------------
//                      CARGO LOS TIPOS DE BROTES
//------------------------------------------------------------------------------
$.post(baseurl + "brote/alertas/getTipobrote",
        {},
        function (data) {
            var obj = JSON.parse(data);
            $.each(obj, function (i, item) {
                $('#cboTipobrote').append('<option value="' + item.id_tipo_brotes + '">' + item.tipo_brote + '</option>')
            });
        });


//------------------------------------------------------------------------------
//     CON ESTA FUNCION PASAMOS LOS PARAMETROS A LOS TEXT DE LA FICHA
//------------------------------------------------------------------------------
selPersona = function (id_brote_alerta, evento, lugar, fecha_alerta, detalle_eventos) {
    $('#mhdnIdPersona').val(id_brote_alerta);
    $('#mtxtNombre').val(evento);
    $('#mtxtApPaterno').val(lugar);
    $('#mtxtApMaterno').val(fecha_alerta);
    $('#mtxtEmail').val(detalle_eventos);
};
$(document).ready(function(){
   $(document).on('click','#inserta-pedimentos', function(){
       upload_archivo("pedimentos");
   });

    $(document).on('click', '#inserta-articulos', function(){
        upload_archivo("articulos");
    });
});


function upload_archivo(ele_id){
    var inputFileImage = document.getElementById(ele_id);
    var file = inputFileImage.files[0];
    var data = new FormData();
    var loader = $(".modal");
    data.append('myfile', file);
    data.append('nombre',ele_id);

    $.ajax({
        type: "POST",
        url: '../upload',
        data: data,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(data){
            insertaDatos(data, ele_id, loader );
        }
    });
}

function insertaDatos(data, nombre, loader){

    loader.modal({
        backdrop: "static",
        keyboard: false
    });


    $.ajax({
        type: "POST",
        url: "../" + nombre,
        data: {'registro': data},
        success: function(data){
            loader.modal("hide");
        }

    });

}

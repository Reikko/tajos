$("#p1").change(function ( event) {
    if(event.target.value == 1)
    {
        $("#p2").val(0);
    }
});

$("#p2").change(function ( event) {
        $("#p1").val(0);
});


//Funcion para Relaizar los cambios de defecto
$("#prototipo").change(function ( event) {

    $.get("cambia/"+event.target.value+"",function(response,state){
        $("#lote").empty(response);
        for(i=0 ; i < response.length;i++)
        {
            $("#lote").append("<option value = \""+response[i].id+"\"> "+response[i].nombre+"</option>");
        }
        //console.log($("#prototipo option:selected").text());
        //console.log(response);
    });

});
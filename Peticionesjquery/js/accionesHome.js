   $("document").ready(function(){

    $("#buscar").clik(function(){
        let bd = $("#txtBuscar").val();
        $.post("envio",{_envio:db},function(msg){
            $("#datos").html(msg);
        });
    });

});
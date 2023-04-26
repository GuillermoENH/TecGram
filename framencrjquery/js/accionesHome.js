   $("document").ready(function(){
   $("#boton").click(function(){
        //alert("Orale, no eres joto me sorprende xd");
        $("#contenido").html("Oralepapu eres un yolotroll");
        setTimeout(() => {$("#contenido").html(""), 5000});
        window.print();
    });

    $("#txtTexto").keyup(function(){
        let valor = $(this).val();
        $("#replicar").html(valor);
    });

    $(".accion").click(function(){
        let nombre = $(this).attr("nom");
        alert("eres joto x"+nombre);
    });
});
$(document).ready(function(){
        var valor;
    $(".Uno").click(function(){ valor = "Uno";})

    $(".Dos").click(function(){ valor = "Dos";})

    $(".Tres").click(function(){ valor = "Tres";})

    $(".Cuatro").click(function(){ valor = "Cuatro";})

    $(".Red").click(function(){ $("."+valor).attr("style", "background:Red; padding:60px; color:white;"); color = "Red";})

    $(".Blue").click(function(){ $("."+valor).attr("style", "background:Blue; padding:60px; color:white;");})

    $(".Green").click(function(){ $("."+valor).attr("style", "background:Green; padding:60px; color:white;");})

    $(".Yellow").click(function(){ $("."+valor).attr("style", "background:Yellow; padding:60px; color:black;");})
})
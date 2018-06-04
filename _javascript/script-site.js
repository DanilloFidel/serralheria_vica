    $(document).ready(function () {
        
        $("#box-fotos").attr("align", "center");

        $(".teste").mouseover(function(){
            $(this).css("boxShadow", "2px 2px 5px #3c3c3c")
        });
        $(".teste").mouseout(function(){
            $(this).css("boxShadow", "8px 10px 10px #3c3c3c")
        });
        
        var tam = $(window).width();

        //Faz leitura tamanho tela para esconder redes sociais e atribuir outros elementos visuais

        if (tam > 1024) {
            $("#redes-sociais").show();
            $("#lista-redes").show();
            $("#titulo").css("marginTop", "10%");

        } else {
            $("#icons i").css("padding", "3px");
            $("#icons i").css("font-size", "90%");
            $("#redes-sociais").hide();
            $("#lista-redes").hide();
            $('#box-fotos img').css("width", "95%");
            $('#box-fotos img').css("height", "95%");
            $('#description').css("marginLeft", "2px");
            $("#menu-1").css("padding", "0px");
            $("#menu-1").attr("align", "center");
            $("#logo-vica").css("marginLeft", "0px");
            $(".nav-item").css("padding", "0");
            //$("#btn-enviar-form").toggleClass("btn bnt-success btn-block");
            //$("#btn-enviar-form").css("marignBottom", "5%");
        }


    });


    /*remove contoles audio
        
    $(function(){
        $(".videos").click(function(){
            $(this).attr("controls", "muted");
        });
    });
    */



    //efeito dos icones Vica

    $(function () {
        $(".btn-logo").mouseover(function () {
            $(this).attr("src", "_imagens/logoV-2.png");

            $(".btn-logo").mouseout(function () {
                $(this).attr("src", "_imagens/logoV-1.png");
            });
        });
    });
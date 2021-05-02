$(document).ready(function(){
    $('#advDatos').hide();

    //var form=$('#form');

    $('#btnPen').click(function(){
        $('#form').submit(function(e){
            e.preventDefault();
            cant=$.trim($('#txtCant').val());
            if(cant.length > 0){
                document.form.action="../Controlador/ControladorConversion.php";
                document.form.method="POST";
                document.form.op.value="1";
                document.form.submit();
            }
            else{
                $("#advDatos").fadeTo(2000,500).slideUp(500,function(){
                    $("#advDatos").slideUp(450);
                });
            }
        });
    });

    $('#btnUsd').click(function(){
        $('#form').submit(function(e){
            e.preventDefault();
            cant=$.trim($('#txtCant').val());
            if(cant.length > 0){
                document.form.action="../Controlador/ControladorConversion.php";
                document.form.method="POST";
                document.form.op.value="2";
                document.form.submit();
            }
            else{
                $("#advDatos").fadeTo(2000,500).slideUp(500,function(){
                    $("#advDatos").slideUp(450);
                });
            }
        });
    });
});

function solonumeros(e)
{
    var key = window.event ? e.which : e.keyCode;
        if(key < 48 || key > 57)
            e.preventDefault();
}
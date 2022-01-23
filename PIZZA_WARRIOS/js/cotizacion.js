

$(document).ready(function(){
    $('#enviar').click(function(){
        var datos = $('#form').serialize();
        
        $.ajax({
            type:"POST",
            url:"Funciones/cotizacion.php",
            data:datos,
            success:function(r){
                if(r=='vacio'){
                    $('#alertf').html`
                    <div class="alert alert-warning text-center" role="alert" id="alert">
                        <b>Por Favor!</b> llene todos los campos, asi nos comunicaremos enseguida...
                    </div>
                    `;
                }else{
                    $('#alertf').html`
                    <div class="alert alert-success text-center" role="alert" id="alert">
                        <b>Gracias por preferirnos !</b> pronto nos comunicaremos contigo...
                    </div>
                    `;
                }
            }
        });
        
        return false;
    });
});

$(document).ready(function(){
//Abre ventana modal usuarios nuevos.
    $("#nuevo_usuario").click(function(){
        $(".modal-title").text("Agregar Nuevo Usuario");
        $(".modal-header").css("background-color","#f6c23e");
        $(".modal-header").css("color","black");
        $("#modal_body").trigger("reset");
        $("#modalagregar").modal("show");
    
        })


//Envia la informacion del nuevo usuario al archivo php/usuario.php
        $("#mAgregar").submit(function(e){
            e.preventDefault();
           
            nombre = $.trim($("#namea").val());
            identidadusuario = $.trim($("#ida").val());
            phone = $.trim($("#phonea").val());
            address = $.trim($("#address").val());
            permits = $.trim($("#permitsa").val());
            statusa = $.trim($("#statusa").val());
            user = $.trim($("#usera").val());
            pass = $.trim($("#passa").val());
            
            $.ajax({
                url:"./php/usuario.php",
        
                type:"POST",
                
                dataType:"json",
                
                data:{ nombre: nombre, identidadusuario:identidadusuario, phone: phone, address: address, 
                     permits: permits, statusa: statusa,
                user: user, pass: pass},
                success: function(data){
                    console.log(data);
                   
                    
                }
              
            });
           
        
            $('#modalagregar').modal('hide');
        
            (function(){
              setInterval(function() {
                     document.location.reload()
                 }, 
                     200)
             })()
        
        
        
        
        
            })
        

            $(document).on("click",".editar",function(){
                fila=$(this).closest("tr");
                $(".modal-title").text("Modificar Usuario");
                $(".modal-header").css("background-color","#f6c23e");
                $(".modal-header").css("color","black");
                $("#modalmodificar").modal("show");
                id=fila.find('td:eq(0)').text();
                name=fila.find('td:eq(1)').text();
                idau=fila.find('td:eq(2)').text();
                phone=fila.find('td:eq(3)').text();
                addressu=fila.find('td:eq(4)').text();
                useram=fila.find('td:eq(6)').text();
                pass=fila.find('td:eq(7)').text();
                
                $("#iduseru").val(id);
                $("#idau").val(idau);
                $("#nameu").val(name);
                $("#telefonomodificar").val(phone);
                $("#addressu").val(addressu);
                $("#useru").val(useram);
                $("#passu").val(pass);
             })
            
            
            
             $("#mModificar").submit(function(e){
                e.preventDefault();
                ide = $.trim($("#iduseru").val());
                nombre = $.trim($("#nameu").val());
                telefonomodificar = $.trim($("#telefonomodificar").val());
                idau = $.trim($("#idau").val());
                addressu = $.trim($("#addressu").val());
                permits = $.trim($("#permitsu").val());
                estado = $.trim($("#statusu").val());
                user = $.trim($("#useru").val());
                pass = $.trim($("#passu").val());
                
                $.ajax({
                    type:"POST",
                    url:"./php/modiusuario.php",
                    datatype:"json",
                    data:{ide:ide, nombre:nombre, telefonomodificar:telefonomodificar,idau:idau,addressu:addressu, permits:permits, estado:estado,
                    user:user, pass:pass},
                    success: function(data){
                        console.log(data);
                        
                        
                    }
                  
                });
               
            
                $('#modalmodificar').modal('hide');
            
                (function(){
                  setInterval(function() {
                         document.location.reload()
                     }, 
                         200)
                 })()
            
            
            
            
            
                })




});



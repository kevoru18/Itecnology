$(document).ready(function(){
    //Abre ventana modal usuarios nuevos.
        $("#nuevo_cliente").click(function(){
            $(".modal-title").text("Agregar Nuevo Cliente");
            $(".modal-header").css("background-color","#f6c23e");
            $(".modal-header").css("color","black");
            $("#modal_body").trigger("reset");
            $("#modalagregar").modal("show");
        
            })
    
    
    //Envia la informacion del nuevo cliente al archivo php/cliente.php
            $("#mAgregarcliente").submit(function(e){
                e.preventDefault();
               
                nombre = $.trim($("#nameacliente").val());
                identidadusuario = $.trim($("#idacliente").val());
                phone = $.trim($("#phoneacliente").val());
                address = $.trim($("#addresscliente").val());
                permits = $.trim($("#empresacliente").val());
                statusa = $.trim($("#statusacliente").val());
                user = $.trim($("#useracliente").val());
                pass = $.trim($("#passacliente").val());
                
                $.ajax({
                    
                    url:"./php/cliente.php",
            
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
                    empresamodi=fila.find('td:eq(5)').text();
                    useram=fila.find('td:eq(6)').text();
                    pass=fila.find('td:eq(7)').text();
                    
                    $("#iduseru").val(id);
                    $("#idau").val(idau);
                    $("#nameu").val(name);
                    $("#telefonomodificar").val(phone);
                    $("#addressu").val(addressu);
                    $("#empresamodi").val(empresamodi);
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
                    empresamodi = $.trim($("#empresamodi").val());
                    estado = $.trim($("#statusu").val());
                    user = $.trim($("#useru").val());
                    pass = $.trim($("#passu").val());
                    
                    $.ajax({
                        type:"POST",
                        url:"./php/modicliente.php",
                        datatype:"json",
                        data:{ide:ide, nombre:nombre, telefonomodificar:telefonomodificar,idau:idau,
                            addressu:addressu,empresamodi:empresamodi, estado:estado,
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
    
    
    
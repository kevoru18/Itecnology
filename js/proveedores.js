$(document).ready(function(){
    //Abre ventana modal Proveedores nuevos.
        $("#nuevo_proveedor").click(function(){
            $(".modal-title").text("Agregar Nuevo Proveedor");
            $(".modal-header").css("background-color","#f6c23e");
            $(".modal-header").css("color","black");
            $("#modal_body").trigger("reset");
            $("#modalagregar").modal("show");
        
            })
    
    
    //Envia la informacion del nuevo Proveedores al archivo php/proveedores.php
            $("#mAgregar").submit(function(e){
                e.preventDefault();
               
                nombre = $.trim($("#nameprovee").val());
                identidadproveedor = $.trim($("#idaprovee").val());
                phone = $.trim($("#phoneaprovee").val());
                address = $.trim($("#addressprovee").val());
                empresa = $.trim($("#empresaprovee").val());
                
                $.ajax({
                    url:"./php/proveedores.php",
            
                    type:"POST",
                    
                    dataType:"json",
                    
                    data:{ nombre: nombre, identidadproveedor:identidadproveedor, phone: phone, address: address, 
                        empresa:empresa},
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
                    $(".modal-title").text("Modificar Proveedor");
                    $(".modal-header").css("background-color","#f6c23e");
                    $(".modal-header").css("color","black");
                    $("#modalmodificar").modal("show");
                    id=fila.find('td:eq(0)').text();
                    nameu=fila.find('td:eq(1)').text();
                    idau=fila.find('td:eq(2)').text();
                    phone=fila.find('td:eq(3)').text();
                    addressu=fila.find('td:eq(4)').text();
                    empresam=fila.find('td:eq(5)').text();
                    
                    $("#iduserumodi").val(id);
                    $("#nameumodi").val(nameu);
                    $("#idau").val(idau);
                    
                    $("#telefonomodificarpro").val(phone);
                    $("#addressupro").val(addressu);
                    $("#empresampro").val(empresam);
                    
                 })
                
                
                
                 $("#mModificarproveedor").submit(function(e){
                    e.preventDefault();
                    iduserumodi = $.trim($("#iduserumodi").val());
                    nameumodi = $.trim($("#nameumodi").val());
                    telefonomodificarpro = $.trim($("#telefonomodificarpro").val());
                    idau = $.trim($("#idau").val());
                    addressupro = $.trim($("#addressupro").val());
                    empresampro = $.trim($("#empresampro").val());
                    
                    $.ajax({
                        type:"POST",
                        url:"./php/modiproveedores.php",
                        datatype:"json",
                        data:{iduserumodi:iduserumodi, nameumodi:nameumodi, 
                            telefonomodificarpro:telefonomodificarpro,
                            idau:idau, addressupro:addressupro, empresampro:empresampro},
                        success: function(data){
                            console.log(data);
                            
                            
                        }
                      
                    });
                   
                
                    $('#mModificarproveedor').modal('hide');
                
                    (function(){
                      setInterval(function() {
                             document.location.reload()
                         }, 
                             200)
                     })()
                
                
                
                
                
                    })
    
    
    
    
    });
    
    
    
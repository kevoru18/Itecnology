$(document).ready(function(){
    //Abre ventana modal usuarios nuevos.
        $("#nuevo_categoria").click(function(){
            $(".modal-title").text("Agregar Nueva Categoria de producto");
            $(".modal-header").css("background-color","#f6c23e");
            $(".modal-header").css("color","black");
            $("#modal_body").trigger("reset");
            $("#modalagregar").modal("show");
        
            })
    
    
    //Envia la informacion del nuevo cliente al archivo php/cliente.php
            $("#mAgregarcategoria").submit(function(e){
                e.preventDefault();
               
                categoria = $.trim($("#nameacategoria").val());
                
                $.ajax({
                        
                    url:"./php/categoria.php",
            
                    type:"POST",
                    
                    dataType:"json",
                    
                    data:{categoria:categoria},
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
                    $("#iduseru").val(id);
                    $("#nameu").val(name);
                    })
                
                
                
                 $("#mModificar").submit(function(e){
                    e.preventDefault();
                    ide = $.trim($("#iduseru").val());
                    nombre = $.trim($("#nameu").val());
                    
                    $.ajax({
                        type:"POST",
                        url:"./php/modicategoria.php",
                        datatype:"json",
                        data:{ide:ide, nombre:nombre},
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
    
    
    
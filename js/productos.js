$(document).ready(function(){

    var agrega; //captura la fila para editar.
  $("#nuevo_producto").click(function(){
    $("#correlativonuevo").focus();
    $(".modal-title").text("Agregar Nuevo Producto");
    $(".modal-header").css("background-color","#f6c23e");
    $(".modal-header").css("color","Black");
    $("#modal_body").trigger("reset");
    $("#modalagregarproducto").modal("show");
    
    
  })
  
  
  $("#mAgregarproducto").submit(function(e){
    e.preventDefault();
    correlativo = $.trim($("#correlativonuevo").val());
    descripcionproducto = $.trim($("#descripcionproducto").val());
    costoproducto = $.trim($("#costoproducto").val());
    precioproducto = $.trim($("#precioproducto").val());
    categoriapro = $.trim($("#categoriapro").val());
    proveedorproducto = $.trim($("#proveedorproducto").val());
    
    
    
    
    
    $.ajax({
        url:"./php/agregarproducto.php",
  
        type:"POST",
        
        dataType:"json",
        
        data:{ correlativo:correlativo, descripcionproducto: descripcionproducto,
             precioproducto: precioproducto,  proveedorproducto: proveedorproducto,
            costoproducto: costoproducto, categoriapro:categoriapro},
        success: function(data){
            console.log(data);
           
            
        }
      
    });
   
  
    $('#modalagregarproducto').modal('hide');
  
    (function(){
      setInterval(function() {
             document.location.reload()
         }, 
             200)
     })()
  
  
  
  
  
    })
  
  
  
  
  
  var fila; //captura la fila para editar.
  
  $(document).on("click",".editar",function(){
    fila=$(this).closest("tr");
    $(".modal-title").text("Modificar Producto");
    $(".modal-header").css("background-color","#f6c23e");
    $(".modal-header").css("color","black");
    $("#modalmodificarproducto").modal("show");
    id=fila.find('td:eq(0)').text();
    name=fila.find('td:eq(1)').text();
    phone=fila.find('td:eq(2)').text();
    position=fila.find('td:eq(3)').text();
    status=fila.find('td:eq(4)').text();
    $("#iduseru").val(id);
    $("#nameu").val(name);
    $("#idau").val(phone);
    $("#telefonomodificar").val(position);
    $("#addressu").val(status);
    
    
  })
  
  
  
  
  
  
  
  
    $("#mModificar").submit(function(e){
    e.preventDefault();
    ide = $.trim($("#iduseru").val());
    nombre = $.trim($("#nameu").val());
    phone = $.trim($("#idau").val()   );
    position = $.trim($("#telefonomodificar").val());
    office = $.trim($("#addressu").val());
   
    
    $.ajax({
        type:"POST",
        url:"./php/modiproducto.php",
        datatype:"json",
        data:{ide:ide, nombre:nombre,phone:phone,position:position,office:office},
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



//******************Modal Compras******************\

$(document).ready(function(){

  $("#nuevo_compra").click(function(){
    $(".modal-title").text("Agregar Nueva Orden de Compra");
    $(".modal-header").css("background-color","#f6c23e");
    $(".modal-header").css("color","black");
    $("#modal_body").trigger("reset");
    $("#modalOrdenCompra").modal("show");
    
})

$("#mAgregarOrdenCompra").submit(function(e){
  e.preventDefault();
  estado="Pendiente";
  codinuevafactura = $.trim($("#factura_pedido").val());
  codiproveedor = $.trim($("#proveedorcod").val());
  codigoproducto = $.trim($("#codproducto").val());
  costo = $.trim($("#costo").val());
  pventa = $.trim($("#pventa").val());
  cantidadpro = $.trim($("#cantidadpro").val());
  proveedorcod=document.getElementById('proveedorcod');
  codproducto=document.getElementById('codproducto'); 
  $('.guardado').val('');
      proveedorcod.disabled = true;
      codproducto.focus();
      $.ajax({
      url:"./php/pedidotemp.php",

      type:"POST",
      
      dataType:"json",
      
      data:{ estado:estado, codinuevafactura:codinuevafactura, codiproveedor:codiproveedor, 
         codigoproducto: codigoproducto,
        costo: costo, pventa:pventa, cantidadpro: cantidadpro},
        
      success: function(data){
          console.log(data);
         
          
      }

      
  });

    



 })





});

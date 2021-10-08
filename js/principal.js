
$(document).ready(function(){

    


//     $("#nuevo_compra").click(function(){
//       $(".modal-title").text("Agregar Nueva Orden de Compra");
//       $(".modal-header").css("background-color","#f6c23e");
//       $(".modal-header").css("color","black");
//       $("#modal_body").trigger("reset");
//       $("#modalOrdenCompra").modal("show");
      
//   })
  
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
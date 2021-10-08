

$(document).ready(function(){

    var agrega; //captura la fila para editar.
$("#btnNuevo").click(function(){
  proveedorcod.focus();  
  $(".modal-title").text("Agregar Nueva Venta");
    $(".modal-header").css("background-color","#f6c23e");
    $(".modal-header").css("color","black");
    $("#modal_body").trigger("reset");
    $("#modalagregar").modal("show");
    
})






$("#mAgregar").submit(function(e){
    e.preventDefault();
    estado="Pendiente";
    codinuevafactura = $.trim($("#factura_pedido1").val());
    codiproveedor = $.trim($("#proveedorcod").val());
    nombreprov = $.trim($("#nombre_prov").val());
    codigoproducto = $.trim($("#codproducto").val());
    descripcionactivo = $.trim($("#descripcionactivo").val());
    costo = $.trim($("#costo").val());
    ISVpro= $.trim($("#ISVpro").val());
    cantidadpro = $.trim($("#cantidadpro").val());
    $("#modalalerta").modal("show");
    $('.guardado').val('');
        proveedorcod.disabled = true;
        codproducto.focus();
    
        
    $.ajax({
        url:"ventatemp.php",

        type:"POST",
        
        dataType:"json",
        
        data:{ estado:estado, codinuevafactura:codinuevafactura, codiproveedor:codiproveedor, 
          nombreprov: nombreprov, codigoproducto: codigoproducto, 
          descripcionactivo: descripcionactivo, 
          costo: costo,ISVpro:ISVpro,  cantidadpro: cantidadpro},

        success: function(data){
            console.log(data);
           
            
        }
      
    });
   })







/****************************Modal Editar orden de compra******************************************* */
var fila; //captura la fila para editar.

$(document).on("click",".btnEditartemp",function(){
    fila=$(this).closest("tr");

    id=fila.find('td:eq(0)').text();
    $(".modal-title").text("Venta pendiente caja");
    $(".modal-header").css("background-color","#f6c23e");
    $(".modal-header").css("color","white");
    $("#modalmodificarcaja").modal("show");
    $("#iduseru").val(id);
    ide = id;
    $.ajax({
      type:"POST",
      url:"modiventacaja.php",
      datatype:"json",
      data:{ide:ide},
      success: function(data){
          console.log(data);
          
          $(".pruebass").html("");
          $(".pruebass").append("Detalle de Pedido </span>");
          $(".pruebass").html(data);
          calcular_total();
      },
      error: function(jqXHR,estado,error){
        $(".pruebass").html('Hubo un error: ');
      }
    
  });
 






  



  
  /*****Boton producto agregar */
$("#btn-producto1").click(function(){
  id=$.trim($('#codigo_factura').val());
  provecod=$.trim($('#codigo_proveedor_pendiente').val());
  provenom=$.trim($('#proveedor_pendiente').val());

  $(".modal-header").css("background-color","#f6c23e");
  $(".modal-header").css("color","black");
  $("#modalagregarproductomas").modal("show");
  $(".modal-titlemas").text("Agregar mas producto");
  document.getElementById("factura_pedidomas1").value=id;
  document.getElementById("proveedorcodmas").value=provecod;
  document.getElementById("nombre_provmas").value=provenom;
  
})

    
})
   










/******Modal factura nueva */

$("#mAgregarproducto").submit(function(e){
  e.preventDefault();
  estado="Pendiente";
  codinuevafactura = $.trim($("#factura_pedidomas1").val());
  codiproveedor = $.trim($("#proveedorcodmas").val());
  nombreprov = $.trim($("#nombre_provmas").val());
  codigoproducto = $.trim($("#codproductomas").val());
  descripcionactivo = $.trim($("#descripcionactivomas").val());
  costo = $.trim($("#costomas").val());
  cantidadpro = $.trim($("#cantidadpromas").val());
  proveedorcod=document.getElementById('proveedorcodmas');
  codproducto=document.getElementById('codproductomas'); 
  
  $('.guardado').val('');
      proveedorcod.disabled = true;
      codproducto.focus();
      $.ajax({
      url:"ventatemp.php",

      type:"POST",
      
      dataType:"json",
      
      data:{ estado:estado, codinuevafactura:codinuevafactura, codiproveedor:codiproveedor, 
        nombreprov: nombreprov, codigoproducto: codigoproducto, 
        descripcionactivo: descripcionactivo, 
        costo: costo,  cantidadpro: cantidadpro},
        
      success: function(data){
          console.log(data);
         
          
      }
      
      
  });


 })



/*************************Final modal editar orden de compra************************************************* */
/****************Funcion de orden de impresión************************************************************/
/*************************FinalFuncion de orden de impresión************************************************* */


/*************************Funcion para modal compras********************************************************* */

$(document).on("click",".nuevo_compra",function(){
  fila=$(this).closest("tr");

  id=fila.find('td:eq(0)').text();
  
  $(".modal-title").text("Venta pendiente");
  $(".modal-header").css("background-color","#f6c23e");
  $(".modal-header").css("color","white");
  $("#modalcompra").modal("show");
  $("#iduseru").val(id);
  
  ide = id;
  $.ajax({
    type:"POST",
    url:"ventapendiente.php",
    datatype:"json",
    data:{ide:ide},
    success: function(data){
        console.log(data);
        
        $(".compraprueba").html("");
        $(".compraprueba").html(data);
        calcular_total_pendiente();        
    },
    error: function(jqXHR,estado,error){
      $(".compraprueba").html('Hubo un error: ');
    }
  
});

  
})

/*************************Fin de Funcion********************************************************************* */
/*************************Guardar pedido para imprimir compra***************************************************/

$("#mModificarcaja").submit(function(e){
  e.preventDefault();
  id=$.trim($('#codigo_factura').val());
  codiprod = $("#codigo-producto").text();
  cantidadproducto = $.trim($('#cantidad-prodtemp').val());
  monto = $.trim($('#montotemp').val());
  totalfact = $.trim($('#totalModificar').val());
  ide2=id;
  $("#ModalImprimir").modal("show");
  $(".modal-title-imprimir").text("Deseas imprimir la Venta #"+id+ "...?");
  
  $(".modal-header").css("background-color","#f6c23e");
  $(".modal-header").css("color","white");
  document.getElementById("fact").value=id;
  document.getElementById("codigo_pedido").value=codiprod;
  document.getElementById("monto_pedido").value=monto;
  document.getElementById("cantidad_pedido").value=cantidadproducto;
  document.getElementById("totalfac").value=totalfact;
  capitalentregado.focus();
})


});
/*************************Final guardar orden de compra************************************************* */
/****************Funcion de orden de impresión************************************************************/
$("#mImprimir").submit(function(e){
  e.preventDefault();
    cod_fact = $.trim($("#fact").val());
    producto = $.trim($("#codigo_pedido").val());
    canti = $.trim($('#cantidad_pedido').val());
    precio = $.trim($('#monto_pedido').val());
    totalpago = $.trim($('#totalfac').val());
    capitalentregado = $.trim($('#capitalentregado').val());
    usuarioimprimir= $.trim($('#usuarioimprimir').val());
    $.ajax({
      url:"../ventasigua/actualiza_pedido.php",
      type: "POST",
      dataType: "json",
      data:{
        cod_fact: cod_fact, canti: canti, 
        precio: precio, producto: producto, totalpago: totalpago,
        capitalentregado :capitalentregado, usuarioimprimir: usuarioimprimir
      },
      success: function(data){
        console.log(data);
      }

    });

    $('#modalImprimir').modal('hide');

    (function(){
      setInterval(function() {
             document.location.reload()
         }, 
             200)
     })()


  });





/*************************FinalFuncion de orden de impresión************************************************* */
/*************************Funcion para imprimir************************************************************** */
$("#mImprimir").submit(function(e){
  e.preventDefault();
    cod_fact = $.trim($("#fact").val());
    producto = $.trim($("#codigo_pedido").val());
    canti = $.trim($('#cantidad_pedido').val());
    precio = $.trim($('#monto_pedido').val());
    totalpago = $.trim($('#totalfac').val());
    capitalentregado = $.trim($('#capitalentregado').val());
    cambioefectivo = $.trim($('#cambioefectivo').val());
    
    
    $.ajax({
      url:"factura.php",
      type: "POST",
      dataType: "json",
      data:{
        cod_fact: cod_fact, canti: canti, 
        precio: precio, producto: producto, totalpago: totalpago
      },
      success: function(data){
        console.log(data);
      }

    });

    window.open("factura.php?refact="+cod_fact+"&totalpago="+totalpago+"&capitalentregado="+capitalentregado+"&cambioefectivo="+cambioefectivo);
    
  });



/********************Funcion de calcular nuevo monto********************************************************/
function calcula_monto(){
  $('#tabla_articulos > tbody > tr').each(function(){
 var precio = parseInt($(this).find('td').eq(2).html());
 var cantidad = parseInt($(this).find('#cantidad-prodtemp').val());
 var result = precio*cantidad;
 result = result.toFixed();
 $(this).find('#montotemp').val(result);
 calcular_total();
 
 
 
 });
}

/*******************************************************************************************/




/*******************************************************************************************/
function calcular_total(){
  var array = document.getElementsByClassName('product-subtotalordenpendiente');
  var total = 0;
  var total1=0;
  value1=0;
  for(var i=0; i<array.length; i++){
     value1 = parseFloat(array[i].value);
     total += value1;
   
  }
  total1 = total.toString();
  $('#totalModificar').val(total1);
    
}


function calcular_cambio(){
  var totalfacturado = document.getElementById('totalfac').value;
  var valorrecibido=document.getElementById('capitalentregado').value;
  var total1=0;
  value1=0;
  value2=0;
  //for(var i=0; i<totalfacturado.length; i++){
     value1 = (totalfacturado);
     value2= (valorrecibido);
     total = value2 - value1 ;
   
  //}
  total1 = total.toString();
  $('#cambioefectivo').val(total1);


    
}




function calcular_total_pendiente(){
  var array = document.getElementsByClassName('subtotal2');
  var valorfactura = 0;
  var total1=0;
  value1=0;
  for(var i=0; i<array.length; i++){
     value1 = parseFloat(array[i].value);
     valorfactura += value1;
   
  }
  valorfactura = valorfactura.toString();
  $('#total1').val(valorfactura);
    
}



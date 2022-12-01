

<?php


if (isset($_POST['precio'])) {
 

  $rangoPrecio = $_POST['precio'];
  $todos= file_get_contents('data-1.json');
  $todos= json_decode($todos,true);


  function buscarPrecio($rangoPrecio,$todos){
    foreach ($todos as $key => $value) {
    
        $precio = str_replace(',', '', explode('$',$value['Precio'])[1]);
        $direccion = $value['Direccion'];
        $ciudad = $value['Ciudad'];
        $telefono = $value['Telefono'];
        $codigo_postal = $value['Codigo_Postal'];
        $tipo = $value['Tipo'];
        $minprecio= explode(';', $rangoPrecio)[0];
        $maxprecio= explode(';', $rangoPrecio)[1];
    
    
       
        if ($precio >=$minprecio&&$precio<=$maxprecio) {

echo'<div class="itemMostrado">
<img src="img/home.jpg" alt=""></img>
<div>
  <h5>Dirección: '.$direccion.'</h5>
  <h5>Ciudad: '.$ciudad.'</h5>
  <h5>Telefono: '.$telefono.'</h5>
  <h5>Código Postal: '.$codigo_postal.'</h5>
  <h5>Tipo: '.$tipo.'</h5>
  <h5 class="precioTexto">'.$precio.'</h5>

</div>


</div>';

            
       
         
        }
        
    }
 
}


buscarPrecio($rangoPrecio,$todos);
}

if (isset($_POST['todosi'])){
  
 
  $todos= file_get_contents('data-1.json');
  $todos= json_decode($todos,true);


  function buscarTodos($todos){
    foreach ($todos as $key => $value) {
    
        $precio = $value['Precio'];
        $direccion = $value['Direccion'];
        $ciudad = $value['Ciudad'];
        $telefono = $value['Telefono'];
        $codigo_postal = $value['Codigo_Postal'];
        $tipo = $value['Tipo'];
      
    
    
       
     

echo'<div class="itemMostrado">
<img src="img/home.jpg" alt="">
<div>
  <h5>Dirección: '.$direccion.'</h5>
  <h5>Ciudad: '.$ciudad.'</h5>
  <h5>Telefono: '.$telefono.'</h5>
  <h5>Código Postal: '.$codigo_postal.'</h5>
  <h5>Tipo: '.$tipo.'</h5>
  <h5 class="precioTexto">'.$precio.'</h5>

</div>


</div>';

            
       
         
        
        
    }
 
}


buscarTodos($todos);
}



















?>
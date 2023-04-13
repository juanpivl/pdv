

<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Conecta a la base de datos  con usuario, contraseña y title de la BD
$servidor = "localhost"; $usuario = "root"; $contrasenia = ""; $titleBaseDatos = "productos";
$conexionBD = new mysqli($servidor, $usuario, $contrasenia, $titleBaseDatos);

// Consulta todos los registros de la tabla productos
$sqlProductos = mysqli_query($conexionBD,"SELECT * FROM productos ");
if(mysqli_num_rows($sqlProductos) > 0){
    $productos = mysqli_fetch_all($sqlProductos,MYSQLI_ASSOC);
    echo json_encode($productos);
}
else{ echo json_encode([["success"=>0]]); }

//// Consulta datos y recepciona una clave para consultar dichos datos con dicha clave
//if (isset($_GET["consultar"])){
//    $sqlProductos = mysqli_query($conexionBD,"SELECT * FROM productos WHERE id=".$_GET["consultar"]);
//    if(mysqli_num_rows($sqlProductos) > 0){
//        $productos = mysqli_fetch_all($sqlProductos,MYSQLI_ASSOC);
//        echo json_encode($productos);
//        exit();
//    }
//    else{  echo json_encode(["success"=>0]); }
//}
////borrar pero se le debe de enviar una clave ( para borrado )
//if (isset($_GET["borrar"])){
//    $sqlProductos = mysqli_query($conexionBD,"DELETE FROM productos WHERE id=".$_GET["borrar"]);
//    if($sqlProductos){
//        echo json_encode(["success"=>1]);
//        exit();
//    }
//    else{  echo json_encode(["success"=>0]); }
//}
////Inserta un nuevo registro y recepciona en método post los datos de title y description
//if(isset($_GET["insertar"])){
//    $data = json_decode(file_get_contents("php://input"));
//    $title=$data->title;
//    $description=$data->description;
//    $image=$data->image;
//        if(($description!="")&&($title!="")&&($image!="")){
//            
//    $sqlProductos = mysqli_query($conexionBD,"INSERT INTO productos(title,description,image) VALUES('$title','$description','$image) ");
//    echo json_encode(["success"=>1]);
//        }
//    exit();
//}
//// Actualiza datos pero recepciona datos de title, description y una clave para realizar la actualización
//if(isset($_GET["actualizar"])){
//    
//    $data = json_decode(file_get_contents("php://input"));
//
//    $id=(isset($data->id))?$data->id:$_GET["actualizar"];
//    $title=$data->title;
//    $description=$data->description;
//    $image=$data->image;
//    
//    $sqlProductos = mysqli_query($conexionBD,"UPDATE productos SET title='$title',description='$description',image='$image' WHERE id='$id'");
//    echo json_encode(["success"=>1]);
//    exit();
//}



?>
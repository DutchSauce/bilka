<?php
  header('Content-Type: application/json');
include('database_connection.php');
  $product = new stdClass();
  $product->cpu = $_GET["cpu"];
  $product->storage = $_GET["storage"];
  $product->ram = $_GET["ram"];
  $product->gpu = $_GET["gpu"];


  $query = "select * from product where product_processor = :processor and product_ram = :ram and product_storage = :storage and product_gpu = :gpu;";
  $statement = $connect->prepare($query);
	$statement->execute([
    ':processor' => $product->cpu,
    ':ram' => $product->ram,
    ':storage' => $product->storage,
    ':gpu' => $product->gpu
  ]);
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	$total_row = $statement->rowCount();



  echo json_encode($result);

 ?>

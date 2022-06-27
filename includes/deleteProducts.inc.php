<?php
include './autoload.inc.php';

if (isset($_POST['submit'])) {
  $data = json_decode($_POST["productsId"]);

  $productContr = new ProductContr();

  $productContr->removeProducts($data);
}

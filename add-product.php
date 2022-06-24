<?php
require './includes/autoload.inc.php';
require_once "./abstract/productType.abstract.php";

if (isset($_POST["submit"])) {
  $productType = $_POST["productType"];
  // Create a object from the selected product type
  $type = new $productType();
  $validator = new validateProduct($_POST, $type);
  $errors = $validator->validateForm();
  //header('Location: http://localhost/product-list/');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/global.css" />
  <link rel="stylesheet" href="./css/add.css" />
  <script src="./js/type.js" defer></script>
  <title>Product Add</title>
</head>

<body>
  <header>
    <h1>Product Add</h1>
    <div>
      <button type="submit" name="submit" form="product_form">SAVE</button>
      <button onclick="location.href='/product-list/'">CANCEL</button>
    </div>
  </header>
  <main>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" id="product_form" method="post">
      <div>
        <label for="sku">SKU</label>
        <span>
          <input type="text" id="sku" name="sku" size="30" />
          <p class="error"><?php echo $errors['sku'] ?? '<br>' ?> </p>
        </span>
        <label for="name">Name</label>
        <span>
          <input type="text" id="name" name="name" size="30" />
          <p class="error"><?php echo $errors['name'] ?? '<br>' ?> </p>
        </span>
        <label for="price">Price ($)</label>
        <span>
          <input type="text" id="price" name="price" size="30" />
          <p class="error"><?php echo $errors['price'] ?? "<br>" ?></p>
        </span>
      </div>
      <label for="productTypes">Type Switcher</label>
      <select name="productType" id="productType">
        <option value="dvd" id="DVD">DVD</option>
        <option value="furniture" id="Furniture">Furniture</option>
        <option value="book" id="Book">Book</option>
      </select>
      <div id="dvd-form">
        <div>
          <label for="size">Size (MB)</label>
          <span>
            <input type="text" id="size" name="size" />
            <p class="error"><?php echo $errors['dvd'] ?? "<br>" ?></p>
          </span>
        </div>
        <p>Please provide size in megabytes</p>
      </div>
      <div id="furniture-form">
        <div>
          <label for="height">Height (CM)</label>
          <input type="text" id="height" name="height" />
          <label for="width">Width (CM)</label>
          <input type="text" id="width" name="width" />
          <label for="length">Length (CM)</label>
          <input type="text" id="length" name="length" />
        </div>
        <p>Please provide dimensions in HxWxL format</p>
      </div>
      <div id="book-form">
        <div>
          <label for="weight">Weight (KG)</label>
          <input type="text" id="weight" name="weight" />
        </div>
        <p>Please provide weight in kilograms</p>
      </div>
    </form>
  </main>
  <footer>
    <p>Scandiweb Test assignment</p>
  </footer>
</body>

</html>
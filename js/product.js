$(document).ready(() => {
  $.get("./includes/loadProducts.inc.php", (data) => {
    console.log(data);
  });
});

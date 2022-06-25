// Runs when "save" button is clicked in add-product.html
$(document).ready(() => {
  $("form").submit((e) => {
    e.preventDefault();
    
    const sku = $("#sku").val();
    const name = $("#name").val();
    const price = $("#price").val();
    // product type
    const type = $("#productType").val();
    // dvd
    const size = $("#size").val(); 
    // furniture
    const height = $("#height").val();
    const width = $("#width").val();
    const length = $("#length").val();
    // book
    const weight = $("#weight").val();

    const submit = $("#submit").val();

    $.post("./includes/validate.inc.php", {
      sku,
      name,
      price,
      type,
      size,
      height,
      width,
      length,
      weight,
      submit,
    }, (data) => {
      console.log(data);
    });
  });
});

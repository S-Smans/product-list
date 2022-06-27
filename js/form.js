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

    // stores data for php in object
    const formData = {
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
    };

    $.post("./includes/validate.inc.php", formData, (data) => {
      if (data.length) {
        removeErrors(formData);
        showErrors(data);
      } else {
        document.location.href = "https://sandissm.000webhostapp.com/";
      }
    });
  });
});

// show errors to user or create product
function showErrors(data) {
  data = JSON.parse(data);
  // show errors
  for (const error in data) {
    $("#" + error + "-error").text(data[error]);
  }
}

// removes errors for each input
function removeErrors(data) {
  for (const error in data) {
    $("#" + error + "-error")
      .text("")
      .append("<br>");
  }
}

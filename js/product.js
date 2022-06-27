// Creates products that are visible in product list page
class Product {
  constructor(id, sku, name, price, value, type) {
    this.id = id;
    this.sku = sku;
    this.name = name;
    this.price = price;
    this.value = value;
    this.type = type;
  }

  // Creates a product card that is displayed in DOM
  createProductCard() {
    const container = document.querySelector(".container");

    // creates elements
    const card = document.createElement("div");
    const checkbox = document.createElement("input");
    const div = document.createElement("div");

    // card
    card.className = "card";
    card.id = this.id + "-card";

    // checkbox
    checkbox.type = "checkbox";
    checkbox.className = "delete-checkbox";

    // stores the productId from DB in checkbox id
    checkbox.id = this.id;
    checkbox.addEventListener("click", (e) => {
      if (e.target.checked) {
        deleteProducts.addProduct(e.target.id);
      } else {
        deleteProducts.removeProduct(e.target.id);
      }

      // store the check id in array
      // after mass delete click send them to a different php include file
      // create a delete function in product class
      // create a php  file where the checkbox id's will be sent to
      // php include file creates productContr object that calls deleteProduct with array paramater that has to be deleted
    });

    // SKU
    const pSKU = this.addContent(this.sku);

    // name
    const name = this.addContent(this.name);

    // price
    const price = this.addContent(this.price.toFixed(2) + " $");

    // value
    // Adds text for specific product type
    const measurement = {
      dvd: this.addContent("Size: " + this.value + " MB"),
      book: this.addContent("Weight: " + this.value + " KG"),
      furniture: this.addContent("Dimension: " + this.value),
    };
    const value = measurement[this.type];

    // appends to div so content and checkbox styling is seperate
    div.append(pSKU);
    div.append(name);
    div.append(price);
    div.append(value);

    card.append(checkbox);
    card.append(div);
    container.append(card);
  }

  // Adds basic p tag to each property
  addContent(prop) {
    const para = document.createElement("p");
    para.textContent = prop;
    return para;
  }
}

class ProductDelete {
  products = [];

  addProduct(product) {
    this.products.push(product);
  }

  removeProduct(product) {
    const index = this.products.indexOf(product);
    if (index > -1) {
      this.products.splice(index, 1);
    }
  }

  getProducts() {
    return this.products;
  }

  removeAllProducts() {
    this.products = [];
  }
}

// Runs when website loads
$(document).ready(() => {
  $.get("./includes/loadProducts.inc.php", (data) => {
    // Parses data to readable json
    data = JSON.parse(data);
    // creates a Product object for each row
    data.forEach((prop) => {
      const products = new Product(
        prop["productId"],
        prop["SKU"],
        prop["Name"],
        prop["Price"],
        prop["Value"],
        prop["Type"]
      );

      // creates a card that is shown in DOM
      products.createProductCard();
    });
  });
});

// global variable that stores product id for deletion
const deleteProducts = new ProductDelete();

const massDelete = document.getElementById("delete-product-btn");

massDelete.addEventListener("click", () => {
  const products = deleteProducts.getProducts();
  // is product empty
  if (products.length) {
    // removes products from DOM by deleting the card
    products.forEach((id) => {
      console.log(id);
      document.getElementById(id + "-card").remove();
    });
    // deletes product from database
    $.post(
      "./includes/deleteProducts.inc.php",
      {
        productsId: JSON.stringify(products),
        submit: true,
      },
      (data) => {
        console.log(data);
      }
    );
  }
  // all products for deletion is emptied
  deleteProducts.removeAllProducts();
});

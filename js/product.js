class Product {
  constructor(sku, name, price, attribute) {
    this.sku = sku;
    this.name = name;
    this.price = price;
    this.attribute = attribute;
  }

  // Creates a product card that is displayed in DOM
  createProductCard() {
		const main = document.querySelector("main");

    // creates elements
    const card = document.createElement("div");
    const checkbox = document.createElement("input");
		const div = document.createElement("div");

    // card
    card.className = "card";

    // checkbox
    checkbox.type = "checkbox";

    // SKU
		// adds 2 decimal point
		const decimalSku = this.sku;
    const pSKU = this.addContent(this.sku);

    // name
    const name = this.addContent(this.name)

    // price
    const price = this.addContent(this.price.toFixed(2)+ " $");

    // attribute
    const attribute = this.addContent(this.attribute);

		// appends to div so content and checkbox styling is seperate
    div.append(pSKU);
    div.append(name);
    div.append(price);
    div.append(attribute);
		
    card.append(checkbox);
		card.append(div);
    main.append(card);
  }

	// Adds basic p tag to each property
	addContent(prop) {
		const para = document.createElement("p");
		para.textContent = prop;
		return para;
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
        prop["SKU"],
        prop["Name"],
        prop["Price"],
        prop["Attribute"]
      );

      // creates a card that is shown in DOM
      products.createProductCard();
    });
  });
});

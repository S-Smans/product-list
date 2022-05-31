// For each option selected create a desired form
const selection = document.getElementById("productType");
selection.addEventListener("change", (event) => {
	toggleForm(event.target.value);
});

// Picks the correct form layout function
const productForm= (type) => {
  // Object that stores each types functions
  const types = {
    dvd: changeForm("dvdForm"),
    furniture: changeForm("furnitureForm"),
    book: changeForm("bookForm"),
  };

	// returns function that allows form to become visible
  return types[type];
};

const changeForm = (type) => {
	// Get all forms from document
  const dvdForm = document.getElementById("dvd-form");
  const furnitureForm = document.getElementById("furniture-form");
  const bookForm = document.getElementById("book-form");

	// Disable all form visibility
  dvdForm.style.display = "none";
	furnitureForm.style.display = "none";
  bookForm.style.display = "none";

	// Store form visibility toggle in objects
	const forms = {
		dvdForm: () => {dvdForm.style.display = "grid"},
		furnitureForm: () => {furnitureForm.style.display = "grid"},
		bookForm: () => {bookForm.style.display = "grid"},
	}

	// Return the form that should become visible
	return forms[type];
}

// Displays form
const toggleForm = (type) => {
  const typeForm = productForm(type);
  typeForm();
}

// Loads form when user enters the page
toggleForm(selection.value);
// For each option selected create a desired form
const selection = document.getElementById("productType");
selection.addEventListener("change", (event) => {
  toggleForm(event.target.value); // value = book, furniture or dvd
});

const setFormVisible = (type) => {
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
    dvd: () => {
      dvdForm.style.display = "grid";
    },
    furniture: () => {
      furnitureForm.style.display = "grid";
    },
    book: () => {
      bookForm.style.display = "grid";
    },
  };

  // Return the form that should become visible
  return forms[type];
};

// Displays form
const toggleForm = (type) => {
  // Gets the required form for display
  const typeForm = setFormVisible(type);
  typeForm();
};

// Loads form when user enters the page
toggleForm(selection.value);


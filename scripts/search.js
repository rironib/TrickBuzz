//////////////////////////////////////// Search Function /////////////////////////////////////////

const searchInput = document.getElementById("searchInput");
const clearButton = document.getElementById("clearButton");

// Show the clear button when there's input content
searchInput.addEventListener("input", function () {
  clearButton.style.display = this.value ? "inline-block" : "none";
});

// Clear the input field when the clear button is clicked
clearButton.addEventListener("click", function () {
  searchInput.value = "";
  searchInput.focus();
  this.style.display = "none";
});

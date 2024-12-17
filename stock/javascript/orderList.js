const button = document.getElementById("orderButton");

button.addEventListener("click", () => {
  if (button.textContent === "Pending") {
    button.textContent = "Received";
    button.classList.add("received"); // Change to "Received" style
  } else {
    button.textContent = "Pending";
    button.classList.remove("received"); // Revert to "Pending" style
  }
});

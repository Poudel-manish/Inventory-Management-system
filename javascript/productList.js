function myFun() {
  // Get the search input and table rows
  let searchVal = document.getElementById("search").value.toUpperCase();
  let table = document.querySelector("table");
  let rows = table.getElementsByTagName("tr");
  console.log("search value ",searchVal);

  // Loop through all rows (excluding the header row)
  for (let i = 1; i < rows.length; i++) {
    let cells = rows[i].getElementsByTagName("td");
    let found = false;

    // Check each cell in the row
    for (let j = 0; j < cells.length; j++) {
      if (cells[j]) {
        let cellText = cells[j].innerText || cells[j].textContent;
        if (cellText.toUpperCase().indexOf(searchVal) > -1) {
          found = true;
          break;
        }
      }
    }

    // Toggle row visibility
    rows[i].style.display = found ? "" : "none";
  }
}

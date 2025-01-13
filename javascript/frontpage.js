document.addEventListener("DOMContentLoaded", function () {
  // Select all sidebar links
  const links = document.querySelectorAll("aside .sidebar a");
  // Get the current page name (e.g., "dashbord.php")
  const currentPage = window.location.pathname.split("/").pop();

  // Loop through links to find the active one
  links.forEach((link) => {
    // Check if the link's href matches the current page
    if (link.getAttribute("href").includes(currentPage)) {
      link.classList.add("active"); // Add the active class
    } else {
      link.classList.remove("active"); // Remove it from non-active links
    }
  });
});

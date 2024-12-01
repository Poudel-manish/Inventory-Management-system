function showSection(sectionId) {
    // Hide all sections
    const sections = document.querySelectorAll(".content-section");
    sections.forEach((section) => section.classList.remove("active"));
  
    // Show the selected section
    document.getElementById(sectionId).classList.add("active");
  }
  
  function logout() {
    alert("Logging out...");
    // You can redirect or clear session data here
  }

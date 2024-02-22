const sidebar = document.getElementById("sidebar");
const submenuItems = document.querySelectorAll(".submenu_item");
const sidebarOpen = document.querySelector("#sidebarOpen");
const sidebarClose = document.querySelector(".collapse_sidebar");
const sidebarExpand = document.querySelector(".expand_sidebar");

// Toggle sidebar on button click
sidebarOpen.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

// Close sidebar with hoverable behavior
sidebarClose.addEventListener("click", () => {
  sidebar.classList.add("close", "hoverable");
});

// Expand sidebar without hoverable behavior
sidebarExpand.addEventListener("click", () => {
  sidebar.classList.remove("close", "hoverable");
});

// Handle hoverable behavior on sidebar
sidebar.addEventListener("mouseenter", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.remove("close");
  }
});

sidebar.addEventListener("mouseleave", () => {
  if (sidebar.classList.contains("hoverable")) {
    sidebar.classList.add("close");
  }
});

// Handle submenu item clicks
submenuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    item.classList.toggle("show_submenu");
    submenuItems.forEach((item2, index2) => {
      if (index !== index2) {
        item2.classList.remove("show_submenu");
      }
    });
  });
});

if (window.innerWidth <= 768) {
  sidebar.classList.add("close");
} else {
  sidebar.classList.add("close", "hoverable");
}

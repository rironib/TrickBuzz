const darkLight = document.querySelector("#darkLight");
const sidebar = document.querySelector(".sidebar");
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

// Toggle dark/light mode
darkLight.addEventListener("click", () => {
  body.classList.toggle("dark");
  darkLight.classList.toggle("bx-sun");
  darkLight.classList.toggle("bx-moon");
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
  // When window width is less than or equal to 768, close the sidebar
  sidebar.classList.add("close");
} else {
  // When window width is more than 768, use hoverable behavior
  sidebar.classList.add("close", "hoverable");
}

// // Set initial sidebar state based on window width
// function setInitialSidebarState() {
//   if (window.innerWidth <= 767) {
//     // When window width is less than or equal to 768, close the sidebar
//     sidebar.classList.add("close");
//   } else {
//     // When window width is more than 768, use hoverable behavior
//     sidebar.classList.add("close", "hoverable");
//   }
// }

// // Event listener for window resize
// window.addEventListener("resize", setInitialSidebarState);

// // Set initial sidebar state on page load
// setInitialSidebarState();

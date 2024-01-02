const bioInfo = document.querySelector(".authorDesc");
const bioText = bioInfo.textContent;

if (bioText.length > 150) {
  bioInfo.textContent = bioText.slice(0, 150) + "...";
}

document.addEventListener("DOMContentLoaded", function () {
  var postExcerpts = document.querySelectorAll(".postExcerpt p");
  postExcerpts.forEach(function (excerpt) {
    var text = excerpt.textContent;
    if (text.length > 300) {
      excerpt.textContent = text.slice(0, 300) + "...";
    }
  });
});

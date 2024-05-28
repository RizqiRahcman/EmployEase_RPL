document.addEventListener("DOMContentLoaded", function () {
  const otherRadio = document.getElementById("other");
  const otherCategoryInput = document.getElementById("otherCategory");

  otherRadio.addEventListener("change", function () {
    if (otherRadio.checked) {
      otherCategoryInput.style.display = "block";
    } else {
      otherCategoryInput.style.display = "none";
    }
  });
});

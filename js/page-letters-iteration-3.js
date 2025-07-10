document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("filters-toggle");
  const target = document.getElementById("letters-iteration-3-category");

  if (!toggle || !target) return;

  // Default hidden
  target.style.display = "none";

  // Listen for toggle change
  toggle.addEventListener("toggle:changed", function (e) {
    const isActive = e.detail.active;
    target.style.display = isActive ? "block" : "none";
  });
});

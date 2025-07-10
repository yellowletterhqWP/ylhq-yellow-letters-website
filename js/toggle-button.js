(function () {
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".toggle-button").forEach(function (el) {
      el.addEventListener("click", function () {
        if (el.dataset.disabled === "true") return;

        const isActive = el.classList.toggle("is-active");
        const newValue = isActive ? "1" : "0";

        el.querySelector('input[type="hidden"]').value = newValue;
        el.dataset.state = newValue;

        // ⬇️ Trigger custom event
        el.dispatchEvent(new CustomEvent("toggle:changed", {
          bubbles: true,
          detail: {
            active: isActive,
            id: el.id
          }
        }));
      });
    });
  });
})();

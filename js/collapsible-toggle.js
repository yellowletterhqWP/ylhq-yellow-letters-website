(function () {
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.collapsible-toggle-button').forEach(function (btn) {
    btn.addEventListener('click', function () {
      const expanded = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', !expanded);

      const content = btn.nextElementSibling;
      if (content) {
        content.classList.toggle('show');
      }
    });
  });
});
})();
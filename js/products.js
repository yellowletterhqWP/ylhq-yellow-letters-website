document.addEventListener('DOMContentLoaded', function () {
  const categoryRadios = document.querySelectorAll('input[name="category_choice"]');
  const templates = document.querySelectorAll('.template-options');

  function updateTemplates(selectedId) {
    templates.forEach(template => {
      const allowed = template.dataset.showFor.split(',');
      template.style.display = allowed.includes(selectedId) ? 'block' : 'none';
    });
  }

  categoryRadios.forEach(radio => {
    radio.addEventListener('change', function () {
      updateTemplates(this.id);
    });

    // Run once on page load if pre-selected
    if (radio.checked) {
      updateTemplates(radio.id);
    }
  });
});
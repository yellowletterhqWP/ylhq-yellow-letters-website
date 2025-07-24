(function () {
  document.addEventListener('DOMContentLoaded', function () {
    const dropdownHeaders = document.querySelectorAll('.expandable-header');

    dropdownHeaders.forEach(header => {
      header.addEventListener('click', function () {
        const clickedDropdown = this.closest('.component-expandable');

        // Tutup semua dropdown yang lain
        document.querySelectorAll('.component-expandable.is-open').forEach(dropdown => {
          if (dropdown !== clickedDropdown) {
            dropdown.classList.remove('is-open');
          }
        });

        // Toggle dropdown yang diklik
        clickedDropdown.classList.toggle('is-open');
      });
    });
  });
})();

(function () {
  document.addEventListener('DOMContentLoaded', function () {
    const dropdownHeaders = document.querySelectorAll('.component-header');

    dropdownHeaders.forEach(header => {
      header.addEventListener('click', function () {
        const clickedDropdown = this.closest('.component-dropdown');

        // Tutup semua dropdown yang lain
        document.querySelectorAll('.component-dropdown.is-open').forEach(dropdown => {
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

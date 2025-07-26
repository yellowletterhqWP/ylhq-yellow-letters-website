(function () {

  document.querySelectorAll('.custom-select-wrapper select').forEach(select => {
    const arrow = select.parentElement.querySelector('.select-arrow');

    let isOpen = false;

    select.addEventListener('mousedown', () => {
      // Saat select ditekan, anggap dropdown akan terbuka
      isOpen = true;
      arrow.style.transform = 'translateY(-50%) rotate(180deg)';
      
      // Setup event listener satu kali
      setTimeout(() => {
        const handleClose = (e) => {
          // Jika klik terjadi DI LUAR select
          if (!select.contains(e.target)) {
            arrow.style.transform = 'translateY(-50%)';
            isOpen = false;
            document.removeEventListener('click', handleClose);
          } else {
            // Tetap reset walau klik di dalam (opsi)
            setTimeout(() => {
              arrow.style.transform = 'translateY(-50%)';
              isOpen = false;
              document.removeEventListener('click', handleClose);
            }, 150);
          }
        };

        document.addEventListener('click', handleClose);
      }, 100);
    });

    select.addEventListener('change', () => {
      arrow.style.transform = 'translateY(-50%)';
      isOpen = false;
    });

    select.addEventListener('blur', () => {
      arrow.style.transform = 'translateY(-50%)';
      isOpen = false;
    });
  });


})();

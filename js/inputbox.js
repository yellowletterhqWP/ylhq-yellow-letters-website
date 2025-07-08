(function () {
  window.togglePassword = function(id, el) {
    const input = document.getElementById(id);
    if (!input) return;

    if (input.type === 'password') {
      input.type = 'text';
      el.classList.add('visible');
    } else {
      input.type = 'password';
      el.classList.remove('visible');
    }
  };

  function getPasswordStrength(password) {
    let score = 0;
    if (password.length >= 6) score++;
    if (/[A-Z]/.test(password)) score++;
    if (/[0-9]/.test(password)) score++;
    if (/[^A-Za-z0-9]/.test(password)) score++;
    return score;
  }

  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('input[type="password"]').forEach(function (input) {
      input.addEventListener('input', function () {
        const id = input.id;
        const val = input.value;
        const score = getPasswordStrength(val);
        const bar = document.getElementById('strength-' + id);
        const label = document.getElementById('strength-label-' + id);

        if (!bar) return;

        // Reset
        bar.querySelectorAll('.strength-dot').forEach(dot => {
          dot.className = 'strength-dot';
        });
        if (label) label.textContent = '';

        if (score === 0) return;

        const dots = bar.querySelectorAll('.strength-dot');
        if (score === 1) {
          dots[0].classList.add('strength-active-weak');
          if (label) label.textContent = 'Weak';
        } else if (score <= 3) {
          dots[0].classList.add('strength-active-weak');
          dots[1].classList.add('strength-active-medium');
          if (label) label.textContent = 'Medium';
        } else {
          dots[0].classList.add('strength-active-weak');
          dots[1].classList.add('strength-active-medium');
          dots[2].classList.add('strength-active-strong');
          if (label) label.textContent = 'Strong';
        }
      });
    });

    // Detect filled input and add .filled
    document.querySelectorAll('.inputbox-group').forEach(function (group) {
      const input = group.querySelector('input.inputbox');
      const label = group.querySelector('label.inputbox-label');

      if (!input) return;

      const toggleFilledClass = () => {
        if (input.value?.trim()) {
          input.classList.add('filled');
          if (label) label.classList.add('filled');
        } else {
          input.classList.remove('filled');
          if (label) label.classList.remove('filled');
        }
      };

      input.addEventListener('input', toggleFilledClass);
      toggleFilledClass(); // inisialisasi saat load
    });
  });
})();

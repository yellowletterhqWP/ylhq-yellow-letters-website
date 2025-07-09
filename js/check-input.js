(function () {
  document.addEventListener('DOMContentLoaded', function () {
    function setupFormValidation(formSelector, buttonSelector) {
      const form = document.querySelector(formSelector);
      const buttonWrapper = document.querySelector(buttonSelector);
      const buttonEl = buttonWrapper?.querySelector('button, a');

      if (!form || !buttonWrapper || !buttonEl) return;

      const requiredInputs = form.querySelectorAll('input[required]');

      function checkFormValidity() {
        let valid = true;

        requiredInputs.forEach(input => {
          if (input.value.trim() === '') {
            valid = false;
          }
        });

        if (valid) {
          buttonWrapper.classList.remove('is-disabled');
          buttonWrapper.setAttribute('data-disabled', 'false');
          buttonEl.removeAttribute('tabindex');
          if (buttonEl.tagName.toLowerCase() === 'button') {
            buttonEl.removeAttribute('disabled');
          }
        } else {
          buttonWrapper.classList.add('is-disabled');
          buttonWrapper.setAttribute('data-disabled', 'true');
          buttonEl.setAttribute('tabindex', '-1');
          if (buttonEl.tagName.toLowerCase() === 'button') {
            buttonEl.setAttribute('disabled', 'disabled');
          }
        }
      }

      requiredInputs.forEach(input => {
        input.addEventListener('input', checkFormValidity);
      });

      checkFormValidity(); // initial
    }

    setupFormValidation('.register-form', '#register-button');
    setupFormValidation('.login-form', '#login-button');
    setupFormValidation('.forgot-password-form', '#forgot-password-button');
    setupFormValidation('.reset-password-form', '#save-new-password-button');
  });
})();

( function( $ ) {

document.addEventListener("DOMContentLoaded", function() {
  const radios = document.querySelectorAll('.handwritten-radio1 input[type="radio"][name="template_choice"]');

  radios.forEach(radio => {
    radio.addEventListener("change", function() {
      // hilangkan active di SEMUA label radio
      document.querySelectorAll('.button-radio, .product-radio-box').forEach(box => {
        box.classList.remove('active');
      });
      // tambahkan active di label terpilih
      radio.closest('label').classList.add('active');
    });
  });
});


}() );
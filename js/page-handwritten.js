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


  document.addEventListener("DOMContentLoaded", function () {
    const addToCartButtons = document.querySelectorAll(".add-to-cart");

    addToCartButtons.forEach(function (button) {
      button.addEventListener("click", function () {
        const categorySortSection = document.querySelector(".handwritten-page-iteration-2.category-sort");
        const categoryBrowseSection = document.querySelector(".handwritten-page-radio .category-browse");

        if (categorySortSection) {
          categorySortSection.style.display = "block";
          categoryBrowseSection.style.display = "none";
        }
      });
    });
  });

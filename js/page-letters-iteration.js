( function( $ ) {

document.addEventListener("DOMContentLoaded", function() {
  const radios = document.querySelectorAll('.letters-product-radio input[type="radio"][name="template_product_choice"]');

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


// document.addEventListener('DOMContentLoaded', function () {
//   const categoryRadios = document.querySelectorAll('input[name="category_choice"]');
//   const allTemplates = document.querySelectorAll('.template-options');

//   function updateTemplates(categoryId) {
//     allTemplates.forEach(template => {
//       if (template.dataset.category === categoryId || categoryId === 'category-all') {
//         template.style.display = 'block';
//       } else {
//         template.style.display = 'none';
//       }
//     });
//   }

//   categoryRadios.forEach(radio => {
//     radio.addEventListener('change', function () {
//       updateTemplates(this.id);
//     });

//     // Trigger change on page load if one is preselected
//     if (radio.checked) {
//       updateTemplates(radio.id);
//     }
//   });
// });

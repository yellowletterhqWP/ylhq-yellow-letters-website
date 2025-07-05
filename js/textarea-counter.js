( function() {
document.addEventListener("DOMContentLoaded", function() {
  document.querySelectorAll('textarea[data-counter="true"]').forEach(function(textarea){
    const counter = document.getElementById(textarea.id + "-counter");
    const updateCounter = () => {
      const count = textarea.value.length;
      counter.textContent = `${count} / ${textarea.maxLength} characters`;
    };
    textarea.addEventListener("input", updateCounter);
    updateCounter(); // initialize
  });
});
}() );
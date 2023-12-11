const open = document.getElementById("btn-formulario");
const close = document.getElementById("close-formulario");
const div = document.getElementById("formulario");


open.addEventListener("click", function() {
  div.style.transform = 'translateY(0px)';
});

close.addEventListener("click", function() {
  div.style.transform = 'translateY(-900px)';
});

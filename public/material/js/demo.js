window.addEventListener("scroll",function(){
  const header = document.querySelector('header');
  header.classList.toggle('sticky', window.scrollY > 0);
});

$('.navTrigger').click(function () {
  $(this).toggleClass('active');
  console.log("Clicked menu");
  $("#mainListDiv").toggleClass("show_list");
  $("#mainListDiv").fadeIn();

});
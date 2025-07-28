function accordion01(){
  var toggles = document.querySelectorAll(".commonfaq__box--content.type_q");

  toggles.forEach(function(toggle) {
    toggle.addEventListener("click", function() {
      //accordionにtoggleの兄弟要素（次）を格納
      var accordion = toggle.nextElementSibling;
      if(toggle.classList.contains("show")){
        toggle.querySelector(".toggle").classList.remove("open")
      }else{
        toggle.querySelector(".toggle").classList.add("open")
      }

      // アコーディオンが閉じている場合は開く
      if (accordion.style.maxHeight === "0px" || accordion.style.maxHeight === "") {
        var scrollHeight = accordion.scrollHeight;
        accordion.style.maxHeight = scrollHeight + "px";
        toggle.classList.add("show")
      } 
      // アコーディオンが開いている場合は閉じる
      else {
        accordion.style.maxHeight = "0px";
        toggle.classList.remove("show")
      }
      // if (accordion.classList.contains("nav__body--child")) {
      // }
    });
  });
}
function movieModal() {
  let iframe = document.getElementById('iframeMovieTarget');
  document.querySelectorAll('.movietrigger').forEach(function (trigger) {
      trigger.addEventListener('click', function () {
      iframe.src =
          'https://www.youtube.com/embed/JvEYsgQ3Qto?si=Gfa0yDeFv40u7W_Q';
      document.querySelector('.movie_modal').classList.add('show');
      document.body.classList.add('noscroll');
      });
  });

  document.querySelectorAll('.js-movie-close').forEach(function (close) {
      close.addEventListener('click', function () {
      document.querySelector('.movie_modal').classList.remove('show');
      iframe.src = '';
      movieModal();
      document.body.classList.remove('noscroll');
      });
  });
}

document.addEventListener('DOMContentLoaded', function () {
  movieModal();
  if(window.innerWidth > 896){
  }
})
window.addEventListener('load', function () {
  accordion01()
  if(window.innerWidth > 896){
  }
});

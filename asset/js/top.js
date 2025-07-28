
function mvAnimFunc(){
  let letters = document.querySelectorAll('.mv__ttl .letter');
  let mv = document.querySelector('.top__mv');
  document.querySelector(".opening").classList.add("on");

  // PC（896px以上の時）
  if(window.innerWidth > 896){
    setTimeout(function(){
      mv.classList.add('on');
    }, 2900);
  }else{
    mv.classList.add('on');
  }
}

document.addEventListener('DOMContentLoaded', function () {
 
  if(window.innerWidth > 896){
  }
})

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
window.addEventListener('load', function () {
  accordion01()
  mvAnimFunc()
  if(window.innerWidth > 896){
  }
});
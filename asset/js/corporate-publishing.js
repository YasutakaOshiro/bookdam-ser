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

function sidebarFix(){
  let sidebar = document.querySelector(".publishing__sidebar");
  let content = document.querySelector(".publishing__main");
  gsap.to(sidebar, {
    scrollTrigger: {
      trigger: sidebar,
      start: "bottom bottom-=20",
      endTrigger: content,
      end: "bottom bottom",
      pin: true,
    },
  });
}

function urlCopy (){
  let copyBtn = document.querySelectorAll('.js-copy');
  copyBtn.forEach(function(btn){
    btn.addEventListener('click', function() {
      // 現在のURLを取得
      const url = window.location.href;

      // テキストを一時的に保持するための要素を作成
      const textArea = document.createElement('textarea');
      textArea.value = url;

      // 要素を画面外に配置して選択し、コピーする
      document.body.appendChild(textArea);
      textArea.select();
      document.execCommand('copy');

      // 一時的に作成した要素を削除
      document.body.removeChild(textArea);

      // オプションで、コピー成功の通知をする
      alert('URLがコピーされました: ' + url);
    });
  })
}


document.addEventListener('DOMContentLoaded', function () {
  if(window.innerWidth > 896){
    sidebarFix()
  }
})
window.addEventListener('load', function () {
  urlCopy()
  accordion01()
  if(window.innerWidth > 896){
  }
});
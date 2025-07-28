// 読み込み後.loaded付与
function loadedAdd() {
  let body = document.querySelector("body");
  body.classList.add("loaded");
}

function navFunc(){
  //.menu-triggerにをクリックしたら#navに.showを付与。nav-close（複数あるうちのどれか）をクリックしたら.showを削除
  const menuTrigger = document.querySelector(".menu-trigger");
  const navClose = document.querySelectorAll(".nav-close");
  const nav = document.querySelector("#nav");
  const body = document.querySelector("body");
  menuTrigger.addEventListener("click", function () {
    nav.classList.add("show");
    body.classList.add("fixed");
  });
  navClose.forEach(function (close) {
    close.addEventListener("click", function () {
      nav.classList.remove("show");
      body.classList.remove("fixed");
    });
  });
}

function headerFunc(){
  //画面最上部から1pxでもスクロールしたら.headerの.hideを削除する
  let header = document.querySelector("header");
  let lastPosition = 0;
  window.addEventListener("scroll", function () {
    let position = window.scrollY;
    if (position > 1) {
      header.classList.add("show");
    } else {
      header.classList.remove("show");
    }
    lastPosition = position;
  });
}

// IntersectionObserverを用いたアニメーション関数
function scrollAnimFunc() {
  const commonAnims = document.querySelectorAll(
    ".anim, .rich_fade, .fade_y, .counter, .img_y, .svg_anim, .scr_cvr, .basebtn, .common_h2, .img_anim, .text_b, .sc_fade_y, .txt_y, .ttlAnim"
  );
  const bottomAnims = document.querySelectorAll(".anim_bottom");

  const observerOptions = {
    threshold: 0.17,
  };

  // 共通アニメーションのObserver
  const commonObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("on");
        commonObserver.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // 下部アニメーションのObserver
  const bottomObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("on");
        bottomObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  // 各要素にObserverを適用
  commonAnims.forEach((el) => commonObserver.observe(el));
  bottomAnims.forEach((el) => bottomObserver.observe(el));
}

function ttlTxtSplit() {
  var maintxtElements = document.querySelectorAll('.common_h2 .maintxt , .splittxt');

  maintxtElements.forEach(function(maintxt) {
    var parser = new DOMParser();
    var parsedHtml = parser.parseFromString(maintxt.innerHTML, 'text/html');
    var childNodes = parsedHtml.body.childNodes;
    maintxt.innerHTML = ''; // clear the original text
    var totalLetters = 0; // total letters counter

    childNodes.forEach(function(node) {
      if(node.nodeName === '#text') {  // this is a text node
      var letters = node.textContent.split('');
      letters.forEach(function(letter) {
        var span = document.createElement('span');
        span.innerHTML = letter === ' ' ? '&nbsp;' : letter;  // use &nbsp; for space
        span.style.transitionDelay = (totalLetters * 0.07) + 's';  // use totalLetters for delay
        maintxt.appendChild(span);
        totalLetters++; // increase the total letters counter
      });
      } else if(node.nodeName === 'BR') {  // this is a br element
      var br = document.createElement('br');
      if (node.className) { // if the original <br> had a class
        br.className = node.className; // keep the original class
      }
      maintxt.appendChild(br);
      }
    });
  });
}
function anchorLinkFunc(){
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  const anchorLinksArr = Array.prototype.slice.call(anchorLinks);

  anchorLinksArr.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const targetId = link.hash;
      const targetElement = document.querySelector(targetId);
      const vwOffset = window.innerWidth > 896 ? 0.08 : 0.20; // 8vw for desktop, 15vw for mobile
      const targetOffsetTop = window.pageYOffset + targetElement.getBoundingClientRect().top - (window.innerWidth * vwOffset);
      window.scrollTo({
      top: targetOffsetTop,
      behavior: "smooth"
      });
    });
  });
};

window.addEventListener("DOMContentLoaded", function () {
});
window.addEventListener("load", function () {
  loadedAdd()
  scrollAnimFunc()
  ttlTxtSplit()
  anchorLinkFunc()
  headerFunc()
  if(!document.querySelector("body.top")){
  }
  var w =
  window.innerWidth ||
  document.documentElement.clientWidth ||
  document.body.clientWidth;
  if(w > 896){
  }else{
    navFunc()
  }
});
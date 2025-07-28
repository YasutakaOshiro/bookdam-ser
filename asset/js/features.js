function counterAnim() {
  var counterDivs = document.querySelectorAll('.counter');

  counterDivs.forEach(counterDiv => {
    var numbers = counterDiv.textContent.trim();
    counterDiv.innerHTML = ''; // 一旦中身をクリア

    numbers.split('').forEach(digit => {
      if (isNaN(digit)) {
        // 数字でない場合はそのまま表示
        var span = document.createElement('span');
        span.textContent = digit;
        span.className = 'num static';
        counterDiv.appendChild(span);
      } else {
        // 数字の場合はスロットのようにアニメーション
        var numContainer = document.createElement('div');
        numContainer.className = 'num-container';

        var numList = document.createElement('div');
        numList.className = 'num-list';

        let randomNumbers = [];
        let loops = 5; // 10回分のスロット回転
        for (let i = 0; i < loops; i++) {
          randomNumbers.push(Math.floor(Math.random() * 10));
        }
        randomNumbers.push(parseInt(digit)); // 最後は指定の数字にする

        randomNumbers.forEach(num => {
          let numSpan = document.createElement('span');
          numSpan.textContent = num;
          numList.appendChild(numSpan);
        });

        numContainer.appendChild(numList);
        counterDiv.appendChild(numContainer);
      }
    });

    // アニメーション開始
    setTimeout(() => {
      document.querySelectorAll('.num-list').forEach(list => {
        let targetNumber = parseInt(list.lastElementChild.textContent);
        let translateY = (list.childElementCount - 1) * 3;
        list.style.transform = `translateY(${translateY}%)`;
      });
    }, 0);
  });
}

document.addEventListener('DOMContentLoaded', function () {
  counterAnim()
  if(window.innerWidth > 896){
  }
})
window.addEventListener('load', function () {
  if(window.innerWidth > 896){
  }
});
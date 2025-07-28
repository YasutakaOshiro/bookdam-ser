
document.addEventListener("DOMContentLoaded", function () {  
  // フォーム
  document.getElementById("formbtn").addEventListener("click", () => {
    var pref = document.querySelector("select[name=pref]").value;
    // var res = pref.length;
    if (pref !== "") {
      var errPref = document.querySelector(".errPref");
      errPref.innerHTML = "";
      var errInput = document.querySelector(".selectPref");
      errInput.classList.remove("errflag");
    } else {
      var errtxt = "所在地を選択してください";
      var errPref = document.querySelector(".errPref");
      var errInput = document.querySelector(".selectPref");
      errPref.classList.add("errflag");
      errInput.classList.add("errflag");
      errPref.innerHTML = "<b>" + errtxt + "</b>";
    }

    var company = document.querySelector("input[name=company]").value;
    var res = company.length;
    if (res >= 1) {
      var errCompany = document.querySelector(".errCompany");
      errCompany.innerHTML = "";
      let errInput = document.querySelector(".inputCompany");
      errInput.classList.remove("errflag");
    } else {
      var errtxt = "会社名を入力してください";
      var errCompany = document.querySelector(".errCompany");
      var errInput = document.querySelector(".inputCompany");
      errCompany.classList.add("errflag");
      errInput.classList.add("errflag");
      errCompany.innerHTML = "<b>" + errtxt + "</b>";
    }

    var name1 = document.querySelector("input[name=person]").value;
    var res = name1.length;
    if (res >= 1) {
      var errName = document.querySelector(".errName");
      errName.innerHTML = "";
      var errInput = document.querySelector(".inputName");
      errInput.classList.remove("errflag");
    } else {
      var errtxt = "お名前を入力してください";
      var errName = document.querySelector(".errName");
      var errInput = document.querySelector(".inputName");
      errName.classList.add("errflag");
      errInput.classList.add("errflag");
      errName.innerHTML = "<b>" + errtxt + "</b>";
    }

    var kana1 = document.querySelector("input[name=kana]").value;
    var errKana = document.querySelector(".errKana");
    var errtxt = "";
    
    if (kana1.length >= 1) {
      // 正規表現で全てカタカナか確認
      if (!kana1.match(/^[ァ-ヶー　]*$/)) {
        errtxt = "全角カタカナを入力してください";
      }
    } else {
      errtxt = "フリガナを入力してください";
    }
    
    if (errtxt !== "") {
      errKana.classList.add("errflag");
      var errInput = document.querySelector(".inputKana");
      errInput.classList.add("errflag");
      errKana.innerHTML = "<b>" + errtxt + "</b>";
    } else {
      errKana.innerHTML = "";
      var errInput = document.querySelector(".inputKana");
      errInput.classList.remove("errflag");
    }

    var tel = document.querySelector("input[name=tel]").value;
    var telRegex = /^(0{1}\d{1,4}-{0,1}\d{1,4}-{0,1}\d{4})$/;
    if (tel.match(telRegex)) {
        var errtel = document.querySelector(".errtel");
        errtel.innerHTML = "";
        var errInput = document.querySelector(".inputTel");
        errInput.classList.remove("errflag");
      } else if (tel === "") {
        var errInput = document.querySelector(".inputTel");
        var errtxt = "必須項目です";
        var errtel = document.querySelector(".errtel");
        errtel.classList.add("errflag");
        errInput.classList.add("errflag");
        errtel.innerHTML = "<b>" + errtxt + "</b>";
      } else if (!tel.match(telRegex)) {
        var errtxt = "電話番号の形式に誤りがあります";
        var errInput = document.querySelector(".inputTel");
        var errtel = document.querySelector(".errtel");
        errtel.classList.add("errflag");
        errInput.classList.add("errflag");
        errtel.innerHTML = "<b>" + errtxt + "</b>";
    }

    var email = document.querySelector("input[name=email]").value;
    var emailRegex =
      /^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/;
    if (email.match(emailRegex)) {
      var erremail = document.querySelector(".erremail");
      erremail.innerHTML = "";
      var errInput = document.querySelector(".inputEmail");
      errInput.classList.remove("errflag");
    } else if (email === "") {
      var errtxt = "メールアドレスを入力してください";
      var erremail = document.querySelector(".erremail");
      var errInput = document.querySelector(".inputEmail");
      erremail.classList.add("errflag");
      errInput.classList.add("errflag");
      erremail.innerHTML = "<b>" + errtxt + "</b>";
    } else if (!email.match(emailRegex)) {
      var errtxt = "メールアドレスの形式に誤りがあります";
      var erremail = document.querySelector(".erremail");
      erremail.classList.add("errflag");
      erremail.innerHTML = "<b>" + errtxt + "</b>";
    }
  });

  // アラートが残っていたらサブミットクリックを無効にする
  document
    .querySelector(".js-submit")
    .addEventListener("click", function (event) {
      if (document.querySelectorAll(".errReq b").length > 0) {
        // エラー文のある箇所にスクロール
        var w = window.innerWidth * 0.3;
        var position = document.querySelector(".errReq b").offsetTop - w;
        window.scrollTo({
          top: position,
          behavior: "smooth",
        });

        // サブミットクリックを無効化
        event.preventDefault();
      }
    });
});
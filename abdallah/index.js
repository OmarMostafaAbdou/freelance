// code for showing the hidden elements
let tabBtn = document.querySelectorAll(".tab");
let tab = document.querySelectorAll("#show");
var flag = 0;
function tabs(paneLIndex) {
  tab.forEach(function (node) {
    node.style.display = "none";
  });
  tab[paneLIndex].style.display = "block";
}
tabs(0);

// code for adding the active class to the other icones
//$()->syntax for selecting and manipulating HTML elements. In jQuery,
//function, also known as the jQuery function or the dollar sign function
//for accessing this code i had to use jQuery library :).
$(".tab").click(function () {
  $(this).addClass("active").siblings().removeClass("active");
});

////////////////////////////////////////////////////////////////////////////////////////////////
let fixed = document.getElementById("fixed");
let col = document.getElementById("col");

function stng() {
  if (fixed.style.display == "none") {
    col.style.display = "none";
    fixed.style.display = "block";
  }
}

function back() {
  if (col.style.display == "none") {
    col.style.display = "block";
    fixed.style.display = "none";
  }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //this part for user information
// let div = document.createElement("div");
// div.style.display = "none";

// let dad = document.getElementById("row");
// function drow() {
//   console.log("start");
//   let h1 = document.createElement("h1");
//   let img = document.createElement("img");
//   let h2_name = document.createElement("h2");
//   let p_name = document.createElement("p");
//   let h2_email = document.createElement("h2");
//   let p_email = document.createElement("p");
//   let h2_bd = document.createElement("h2");
//   let p_bd = document.createElement("p");
//   let div_small = document.createElement("div");
//   let btn = document.createElement("button");

//   img.src = "../images/a.png";
//   h1.innerText = "المعلومات الشخصية";
//   h2_name.innerText = "الاسم";
//   p_name.innerText = "عبدالله صلاح";
//   h2_email.innerText = "البريد الإلكتروني";
//   p_email.innerText = "adbo@wow.com";
//   h2_bd.innerText = "تاريخ الميلاد";
//   p_bd.innerText = "30/1/1997";
//   btn.innerText = "الإعدادات";

//   p_name.style.width = "100%";
//   p_email.style.width = "100%";
//   p_bd.style.width = "100%";
//   img.style.width = "35%";
//   img.style.alignSelf = "center";
//   (btn.style.marginBottom = "15px"),
//     (btn.style.marginTop = "0px"),
//     (btn.style.alignSelf = "  self-start");
//   btn.onclick = function () {
//     console.log("btn strat");
//     col.style.display = "block";
//     div.style.display = "none";
//   };

//   div.setAttribute("class", "col");
//   div.setAttribute("id", "mydiv");
//   div_small.setAttribute("class", "settings tabshow");
//   img.setAttribute("class", "tm-list-item-img");
//   btn.setAttribute("class", "btn stnBtn");

//   div_small.append(
//     h1,
//     img,
//     h2_name,
//     p_name,
//     h2_email,
//     p_email,
//     h2_bd,
//     p_bd,
//     btn
//   );
//   div.append(div_small);
//   dad.appendChild(div);
//   return div.innerHTML;
// }
// let col = document.getElementById("col");
// var dontRepeat = false;

// function stng() {
//   if (!dontRepeat) {
//     col.style.display = "none";
//     if (div.style.display == "none") {
//       div.style.display = "block";
//       drow();
//     }
//   }
//   dontRepeat = true;
//   if (flag > 0) {
//     col.style.display = "none";
//     document.getElementById("mydiv").style.display = "block";
//   }
//   flag++;
// }
//alert(flag);
// if (!dontRepeat) {
//   col.innerHTML = drow();
// }
// dontRepeat = true;
// col.innerHTML="<div class="settings tabshow"><h1>المعلومات الشخصية</h1><img src="images/a.png" class="tm-list-item-img" style="width: 35%; align-self: center;"><h2>الاسم</h2><p style="width: 100%;">عبدالله صلاح</p><h2>البريد الإلكتروني</h2><p style="width: 100%;">adbo@wow.com</p><h2>تاريخ الميلاد</h2><p style="width: 100%;">30/1/1997</p><button class="btn stnBtn" style="margin-bottom: 15px; margin-top: 0px; align-self: self-start;">الإعدادات</button></div></div>";

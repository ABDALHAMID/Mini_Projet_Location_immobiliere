let themecoockie = getCookie("theme");
let styleCss;
if (themecoockie == "dark") {
  styleCss = document.querySelector('link[href="assets/css/styledark.css"]');
} else {
  styleCss = document.querySelector('link[href="assets/css/style.css"]');
}
styleCss.href = "assets/css/styleDashboard.css";
let head = document.querySelector("head");
var newLink = document.createElement("link");
newLink.href = "assets/vendor/mdi/css/materialdesignicons.min.css";
newLink.rel = "stylesheet";
document.head.appendChild(newLink);

var new2Lind = document.createElement("link");
new2Lind.href = "assets/vendor/css/vendor.bundle.base.css";
new2Lind.rel = "stylesheet";
document.head.appendChild(new2Lind);

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
}

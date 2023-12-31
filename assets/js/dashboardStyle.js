let styleCss = document.querySelector('link[href="assets/css/style.css"]');
styleCss.href="assets/css/styleDashboard.css";
let head = document.querySelector('head');
var newLink = document.createElement('link');
newLink.href = 'assets/vendor/mdi/css/materialdesignicons.min.css';
    newLink.rel = 'stylesheet';
    document.head.appendChild(newLink);

    var new2Lind = document.createElement('link');
    new2Lind.href = 'assets/vendor/css/vendor.bundle.base.css';
    new2Lind.rel = 'stylesheet';
    document.head.appendChild(new2Lind);

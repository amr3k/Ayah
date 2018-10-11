const btn = document.querySelector('#btn');
const ayah = document.querySelector('#ayah');
btn.addEventListener('click', fill);

function fill() {
    var ajax = new XMLHttpRequest();
    ajax.open("POST", "app.php", true);
    ajax.onreadystatechange = function () {
        if (this.readyState !== 4) {
            ayah.innerHTML = "Err_code = 4";
            return;
        }
        if (this.status == 200) {
            ayah.innerHTML = this.responseText;
        }
    };
    ajax.send();
}
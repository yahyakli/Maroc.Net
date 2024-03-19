let menu = document.getElementById("menu_btn");
menu.onclick = function(){
    let menu_cont = document.getElementById("menu_cont");
    menu_cont.classList.toggle("put_in");
}
/////////////////////////////////////////////////////////////
let row_up = document.querySelectorAll(".to_top");
window.onscroll = function () {
    if (this.scrollY >= 500) {
        row_up.forEach(element => {
            element.classList.add("show");
        });
    }else {
        row_up.forEach(element => {
            element.classList.remove("show");
        });
    }
}
/////////////////////////////////////////////////////////////////
document.getElementById("search_button").onclick = function () {
    const inputElement = document.getElementById("input");
    if (inputElement.classList.contains("show-out") === true) {
        inputElement.classList.remove("show-out");
        inputElement.classList.add("show-in");
    } else if (inputElement.classList.contains("show-in") === true){
        inputsearch();
    } else {
        inputElement.classList.add("show-in");
    }
}
/////////////////////////////////////////////////////////////
const inputElement = document.getElementById("input");
const btn = document.getElementById("search_button")
document.addEventListener("click", function(e) {
    const isClickInsidePopUp = inputElement.contains(e.target);
    const isClickInsideAdd = btn.contains(e.target);
    if (!isClickInsidePopUp && !isClickInsideAdd) {
        inputElement.classList.remove("show-in");
        inputElement.classList.add("show-out");
    }
});
///////////////////////////////////////////////////////////
function inputsearch() {
    let input = document.getElementById('input');
    let selectedOption = input.value.toLowerCase();
    input.classList.remove("show-in");
    input.classList.add("show-out");
    if (selectedOption === 'forfaits') {
        window.location.href = 'index.php#forfait';
    }else if(selectedOption === 'wifi') {
        window.location.href = 'index.php#wifi'
    }else if (selectedOption === 'smartphone'){
        window.location.href = 'index.php#NetPhone'
    }else if (selectedOption === 'contact'){
        window.location.href = 'contact.php'
    } else if (selectedOption === 'a propos'){
        window.location.href = 'A propos.php'
    }else if(selectedOption === 'services'){
        window.location.href = 'services.php'
    }else if(selectedOption === 'fibre'){
        window.location.href = 'index.php#fibre'
    }else if(selectedOption === 'home'){
        window.location.href = 'index.php'
    }else if(selectedOption === 'avis'){
        window.location.href = 'avis.php'
    }
}
///////////////////////////////////////////////////////
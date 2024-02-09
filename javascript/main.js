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
document.getElementById("cont").onclick = function (){
    const inputElement = document.getElementById("input");
    if (inputElement.classList.contains("show-in") === true) {
        inputElement.classList.remove("show-in")
        inputElement.classList.add("show-out")
    }
}
document.getElementById("forfait").onclick = function (){
    const inputElement = document.getElementById("input");
    if (inputElement.classList.contains("show-in") === true) {
        inputElement.classList.remove("show-in")
        inputElement.classList.add("show-out")
    }
}
document.getElementById("wifi").onclick = function (){
    const inputElement = document.getElementById("input");
    if (inputElement.classList.contains("show-in") === true) {
        inputElement.classList.remove("show-in")
        inputElement.classList.add("show-out")
    }
}
document.getElementById("NetPhone").onclick = function (){
    const inputElement = document.getElementById("input");
    if (inputElement.classList.contains("show-in") === true) {
        inputElement.classList.remove("show-in")
        inputElement.classList.add("show-out")
    }
}
document.getElementById("fibre").onclick = function (){
    const inputElement = document.getElementById("input");
    if (inputElement.classList.contains("show-in") === true) {
        inputElement.classList.remove("show-in")
        inputElement.classList.add("show-out")
    }
}
document.getElementById("footer").onclick = function (){
    const inputElement = document.getElementById("input");
    if (inputElement.classList.contains("show-in") === true) {
        inputElement.classList.remove("show-in")
        inputElement.classList.add("show-out")
    }
}
///////////////////////////////////////////////////////////
function inputsearch() {
    let input = document.getElementById('input');
    let selectedOption = input.value.toLowerCase();
    input.classList.remove("show-in");
    input.classList.add("show-out");
    if (selectedOption === 'forfaits') {
        window.location.href = '#forfait';
    }else if(selectedOption === 'wifi') {
        window.location.href = '#wifi'
    }else if (selectedOption === 'smartphone'){
        window.location.href = '#NetPhone'
    }else if (selectedOption === 'contact'){
        window.location.href = '/contact.html'
    } else if (selectedOption === 'a propos'){
        window.location.href = '/A propos.html'
    }else if(selectedOption === 'services'){
        window.location.href = '/services.html'
    }else if(selectedOption === 'fibre'){
        window.location.href = '/index.html#fibre'
    }
}
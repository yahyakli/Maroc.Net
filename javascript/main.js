/////////////////////////////////////////////////////////////////
document.getElementById("search_button").onclick = function () {
    const inputElement = document.getElementById("input");
    if (inputElement.classList.contains("show-out") === true) {
        inputElement.classList.remove("show-out");
        inputElement.classList.add("show-in");
        // had lpartie dyal click on button search
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
    }
}
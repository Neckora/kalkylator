const button = document.getElementById("submit");
const sum = document.getElementById("sum");

function init(){
    document.getElementById("calcFrom").onInput = calc;
}
function calc(){

    let numb1 = parseFloat(document.getElementById("x").value) || 0;
    let numb2 = parseFloat(document.getElementById("y").value) || 0;

    button.addEventListener("click", () => {
        sum.value = eval(numb1, method(), numb2);
    });

}
function method(){
    
}



window.onload = init;   
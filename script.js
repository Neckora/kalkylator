let allMethods = {
    "+" : "+",
    "-" : "-",
    "*" : "*",
    "/" : "/",
    "%" : "/100",
    "^" : "**",
    "^(1/2)" : "**(1/2)",
    "(" : "(",
    ")" : ")",
}

for (let i = 0; i <= 9; i++) {
    allMethods[i] = String(i);
}

let calced = false;

function init(event){
    event.preventDefault();
    let buttons = document.getElementsByTagName("button");

    for ( var counter = 0; counter < buttons.length; counter++) {
        buttons[counter].addEventListener("click", onClick);
    }
}

function onClick(event){
    let toCalc = document.getElementById("toCalc");
    let display = document.getElementById("sum");

    if (event.currentTarget.textContent == "Kalkylera"){
        calc();
    }
    else if (event.currentTarget.textContent == "C"){
        toCalc.value = "";
        display.value = "";
    }
    else if (event.currentTarget.textContent == "Erase"){
        toCalc.value = toCalc.value.slice(0, -1);
    }
    else if (event.currentTarget.textContent == "Ce"){
        toCalc.value = "";
    } else{
        if (calced == true){
            toCalc.value = "";
            let textExpertion =  toCalc.value + allMethods[this.textContent.trim()];
            calced = false;
            toCalc.value = textExpertion;
        } else{
            let textExpertion =  toCalc.value + allMethods[this.textContent.trim()];
            toCalc.value = textExpertion;
        }
    };
}
function calc(){
    let toCalc = document.getElementById("toCalc");
    let display = document.getElementById("sum");

    try {
        if (toCalc.value == ""){
            display.value = ("error");
        }
        else{   
        display.value = eval(toCalc.value);
        calced = true;
        }
    } catch (e){
        display.value = ("error");
    }
}

window.onload = init;   
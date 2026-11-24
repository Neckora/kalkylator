const radians = {
    sin: math.sin, cos: math.cos, tan: math.tan,
};

let specialOperations = {
    "+" : "+",
    "-" : "-",
    "*" : "*",
    "/" : "/",
    "^" : "**",
    "√" : "sqrt(",
    "(" : "(",
    ")" : ")",
    "sin" : "sin(",
    "cos" : "cos(",
    "tan" : "tan(",
    "π" : "pi",
    "." : "."
}

for (let i = 0; i <= 9; i++) {
    specialOperations[i] = String(i);
}

let calced = false;
//const prevCalced = [];

function init(event){
    event.preventDefault();
    let buttons = document.getElementsByTagName("button");

    for ( var counter = 0; counter < buttons.length; counter++) {
        buttons[counter].addEventListener("click", onClick);
    }
}

function onClick(event){
    let toCalc = document.getElementById("toCalc");

    if (event.currentTarget.textContent == "Kalkylera"){
        calc();
    }
    else if (event.currentTarget.textContent == "Ce"){
        toCalc.value = "";
        display.value = "";
    }
    else if (event.currentTarget.textContent == "Erase"){
        toCalc.value = toCalc.value.slice(0, -1);
    }
    else if (event.currentTarget.textContent == "C"){
        toCalc.value = "";
    } else{
        if (calced == true){
            toCalc.value = "";
            let textExpertion =  toCalc.value + specialOperations[this.textContent.trim()];
            calced = false;
            toCalc.value = textExpertion;
        } else{
            let textExpertion =  toCalc.value + specialOperations[this.textContent.trim()];
            toCalc.value = textExpertion;
        }
    };
}
function calc(){
    let toCalc = document.getElementById("toCalc");
    let display = document.getElementById("sum");

    try {
        if (toCalc.value == ""){
            display.value = ("error: empty input");
        }
        else{   
        toCalc.value = math.format(math.evaluate(toCalc.value), { precision: 12 });
        calced = true;
        }
    } catch (e){
        display.value = "error:"+ e.massage;
        console.log(e)
    }
}

window.onload = init;   
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}

function show_number(){
    let element_first_number = document.querySelector(".first_number");
    let element_second_number = document.querySelector(".second_number");
    let data_second = Number(element_second_number.value);
    let data_first = Number(element_first_number.value);
    let element_choice = document.querySelector("select")


    if (data_first && data_second) {

        let result = 0;
        let element_result_num = document.querySelector('.result');
        if (element_choice.value === '+'){
            result = data_first + data_second;
        }
        if (element_choice.value === '-'){
            result = data_first - data_second;
        }
        if (element_choice.value === '/'){
            result = data_first / data_second;
        }
        if (element_choice.value === '*'){
            result = data_first * data_second;
        }
        element_result_num.innerHTML = 'Ответ: ' + result;

        console.dir(result);

        let element_window_number = document.querySelector(".mask");
        element_window_number.classList.remove("hidden");
    }
}
function hide_number(){
    let element_window_number = document.querySelector(".mask");
    element_window_number.classList.add("hidden");
}



function addclass(){
    if(windowWidth > 768)$("#Flexhide").addClass("flexx");
    else $("#Flexhide").removeClass("flexx");


 }



function log(message){
    console.log(message);
}

function qs(){
    return arguments.length === 1 ? document.querySelector(arguments[0]) : arguments[1].querySelector(arguments[0]);
}

function qsa(){
    return arguments.length === 1 ? document.querySelectorAll(arguments[0]) : arguments[1].querySelectorAll(arguments[0]);
}

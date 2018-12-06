
var valorAJAXGet = document.getElementById('get-form-valor');
var valorAJAXPost = document.getElementById('post-form-valor');

document.getElementById('get-form').onsubmit = function() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "http://127.0.0.1:8080?valor=" + valorAJAXGet.value, true);
    xhttp.send();
    // No enviamos el formulario normal
    // hemos enviado la información por AJAX
    return false;
};

document.getElementById('post-form').onsubmit = function() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "http://127.0.0.1:8080", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("valor=" + valorAJAXPost.value);
    // No enviamos el formulario normal
    // hemos enviado la información por AJAX
    return false;
};

// https://www.w3schools.com/xml/ajax_xmlhttprequest_send.asp

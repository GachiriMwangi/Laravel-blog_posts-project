function display(){
var spanarea = document.getElementById('span1');
var element = document.createElement('h3');
element.textContent = "Welcome to Smart Cascading Stylesheet.";

spanarea.appendChild(element);
}

window.onload = display;

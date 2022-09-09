const btn = document.querySelector("#button1");
const tab = document.querySelector(".tab-1")
const btn1 = document.querySelector(".button2");
const textbox1 = document.querySelector("#text1");
const text1 = document.querySelector("#text");


btn.addEventListener('click',() => {
    if(tab.style.display === "block") {
        tab.style.display = "none";
    } else {
        tab.style.display = "block";
    }
});

btn1.addEventListener('click',() => {
    window.open("index2.html", 'child', 'width=1000, height=800', true);
});


















    

const btn = document.querySelector("#button1");
const tab = document.querySelector(".tab-1")

btn.addEventListener('click',() => {

    if(tab.style.display === "block") {
        tab.style.display = "none";
    } else {
        tab.style.display = "block";
    }

});





    

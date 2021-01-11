
console.log("SWART -> actio-button.js is up and running!");


// SWART Button actions header-brand.php
const btnMail = document.querySelectorAll('.btn-s-mainh')[1];

btnMail.addEventListener('click',() => {
     window.location.href = "mailto:info@cv-plus.nl";
     console.log("We can expect a Mail -> info@cv-plus.nl");
})

// ----------------------------------------------------------

const btnLogin = document.querySelectorAll('.btn-s-mainh')[3];

function btnLoginDc () {
    window.prompt("ADMIN login routine");
    console.log("Attempt to Login as ADMIN");
}

btnLogin.addEventListener("dblclick", btnLoginDc);

// ----------------------------------------------------------

// SWART Button actions footer-brand.php
const btnMailsw = document.querySelectorAll('.btn-s-mainf')[3];

btnMailsw.addEventListener('click',() => {
     window.location.href = "mailto:info@swartwerk.nl";
     console.log("We can expect a Mail -> info@swartwerk.nl");
})

// ----------------------------------------------------------

// SWART Button actions Tabs CV-make pages

$(document).ready(function(){ 
     $("#myTab li:eq(0) a").tab('show'); // show 2nd tab on page load
 });



 // ----------------------------------------------------------
 console.log("SWART YEAH action button running to the END!");
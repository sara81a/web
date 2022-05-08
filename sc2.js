var theForm2 = document.testForm2;

// Form validation code
function validationFunc2() {
if (theForm2.service.value == "") {
    alert( "choose the service please" );
    theForm2.service.focus();
    return false;
}
if (theForm2.date.value == "") {
    alert( "Enter the price please" );
    theForm2.date.focus();
    return false;
}


return (true);
}





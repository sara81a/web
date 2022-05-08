/////////RegPage:
var theForm = document.testForm;
function validationFunc() {
if (theForm.Nservice.value == ""|| theForm.Nservice.value.length <3) {
    alert( "Enter the service please more than 3 charcter" );
    theForm.Nservice.focus();
    return false;
}
if (theForm.price.value == "") {
    alert( "Enter the price please" );
    theForm.price.focus();
    return false;
}
if (theForm.description.value == "" || theForm.description.value.length < 15) {
    alert( "Enter the description please more then 15 charcter" );
    theForm.description.focus();
    return false;
}

if (theForm.photo.value == "") {
    alert( "Enter the photo please" );
    theForm.photo.focus();
    return false;
}

return (true);
}
const myFile=document.querySelector("#myFile");
var upimg="";

myFile.addEventListener("change" , function(){

const reader=new FileReader();
reader.addEventListener("load",() =>{
    upimg=reader.result;
    document.querySelector("#addimg").style.backgroundImage=`url(${upimg})`;

});
reader.readAsDataURL(this.files[0]);

});
/////////////////////////////////setAvalibleAppointment:
var theForm2 = document.testForm2;


function validationFunc2() {
if (theForm2.service.value == "") {
    alert( "choose the service please" );
    theForm2.service.focus();
    return false;
}
if (theForm2.date.value == "") {
    alert( "Enter the date please" );
    theForm2.date.focus();
    return false;
}
if (theForm2.time.value == "") {
    alert( "Enter the time please" );
    theForm2.time.focus();
    return false;
}

if (theForm2.note.value == ""||theForm2.note.value.length < 10) {
    alert( "Enter the not please more then 10 charcter" );
    theForm2.note.focus();
    return false;
}


return (true);
}
///////////////////////////////////////////editAbout:
/*var theForm3 = document.testForm3;

function validationFunc3() {
if (theForm3.about.value == "") {
    alert( "Enter About us more than 15 charcter please" );
    theForm3.about.focus();
    return false;
}





return (true);
}*/



///////////////editMax:
















    


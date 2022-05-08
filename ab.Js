const myFile=document.querySelector("#myFile");
var upimg="";

myFile.addEventListener("change" , function() {

const reader=new FileReader();
reader.addEventListener("load",() =>{
    upimg=reader.result;
    document.querySelector("#addimg").style.backgroundImg='url(${upimg} )';

});
reader.readAsDataURL(this.files[0]);

});
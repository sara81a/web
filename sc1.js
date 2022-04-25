/*const myFile=document.querySelector("#myFile");
var upimg="";

myFile.addEventListener("change" , function(){

const reader=new FileReader();
reader.addEventListener("load",() =>{
    upimg=reader.result;
    document.querySelector("#addimg").style.backgroundImage='url(${upimg})';

});
reader.readAsDataURL(this.files[0]);

});*/
///////////////////////////////////
 var imageid=document.getElementById("myFile");
 var pic =document.getElementById("addimg");
 imageid.onchange=evt =>{
     const[myFile]=imageid.files;
     if(myFile){
         pic.src=URL.createObjectURL(myFile);
     }
 }
 //////////////////////////////////////

 
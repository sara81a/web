
 var imagei=document.getElementById("phAbo");//file
 var pi =document.getElementById("addi");//img
 imagei.onchange=ev =>{
     const[phAbo]=imagei.files;
     if(phAbo){
         pi.src=URL.createObjectURL(phAbo);
     }
 }

 
 /*
 document.getElementById("phAbo").addEventListener("change",function(){
    const reader = new FileReader();
    reader.addEventListener("load",()=>{
        localStorage.setItem("recent-image",reader.result);
    });
   
    reader.readAsDataURL(this.files[0]);
    if(this.files[0])
    document.getElementById("addi").setAttribute("src",URL.createObjectURL(this.files[0]) );
    
})

document.addEventListener("DOMContentLoaded",()=>{
    const myImage = localStorage.getItem("recent-image");

    if(myImage){
        document.getElementById("addi").setAttribute("src",myImage);
    }
})


 
 


 let scratch =document.querySelector("#te1");
 scratch.value=localStorage.getItem("notes");

let cancel;
 scratch.addEventListener("keyup",event =>{
     if(cancel)clearTimeout(cancel)
  cancel= setTimeout( ()=> {
    localStorage.setItem("notes",event.target.value);
     },1000);

 })

 var textBoxdata = $('#te1').val();
Store textbox current value
localStorage.setItem("firstnameval", "textBoxdata");

*/

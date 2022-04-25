
 var imagei=document.getElementById("phAbo");
 var pi =document.getElementById("addi");
 imagei.onchange=ev =>{
     const[phAbo]=imagei.files;
     if(phAbo){
         pi.src=URL.createObjectURL(phAbo);
     }
 }
 ///////////////////////////
 var imagei2=document.getElementById("phAbo2");
 var pi2 =document.getElementById("addi2");
 imagei2.onchange=evi =>{
     const[phAbo2]=imagei2.files;
     if(phAbo2){
         pi2.src=URL.createObjectURL(phAbo2);
     }
 }
 ////////////////////
 /*document.querySelector("#phAbo").addEventListener("change",function() {
  const reader=new FileReader();
  
  reader.addEventListener("load",() =>{
localStorage.setItem("recent-image",reader.result);
  });
  reader.readAsDataURL(this.files[0]);
 });
 document.addEventListener("DOMContentLoaded",() => {
     const recentImage=localStorage.getItem("recent-image");

     if(recentImage){
document.querySelector("#addi").setAttribute("src",recentImage);
     }

 });*/
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


 
 
////////////////////////////

 let scratch =document.querySelector("#te1");
 scratch.value=localStorage.getItem("notes");

let cancel;
 scratch.addEventListener("keyup",event =>{
     if(cancel)clearTimeout(cancel)
  cancel= setTimeout( ()=> {
    localStorage.setItem("notes",event.target.value);
     },1000);

 })

 /*var textBoxdata = $('#te1').val();
// Store textbox current value
localStorage.setItem("firstnameval", "textBoxdata");8*/


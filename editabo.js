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
////
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
///////////////////


document.getElementById("phAbo2").addEventListener("change",function(){
    const reader2 = new FileReader();
    reader2.addEventListener("load",()=>{
        localStorage.setItem("recent-image2",reader2.result);
    });
   
    reader2.readAsDataURL(this.files[0]);
    if(this.files[0])
    document.getElementById("addi2").setAttribute("src",URL.createObjectURL(this.files[0]) );
    
})

document.addEventListener("DOMContentLoaded",()=>{
    const myImage2 = localStorage.getItem("recent-image2");

    if(myImage2){
        document.getElementById("addi2").setAttribute("src",myImage2);
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

 });
 ///////////
 let scratch2 =document.querySelector("#te2");
 scratch2.value=localStorage.getItem("notes2");

let cance2;
 scratch2.addEventListener("keyup",event2 =>{
     if(cance2)clearTimeout(cance2)
  cance2= setTimeout( ()=> {
 var x=   localStorage.setItem("notes2",event2.target.value);
     },1000);

 });
///
let scratch3 =document.querySelector("#te3");
 scratch3.value=localStorage.getItem("notes3");

let cance3;
 scratch3.addEventListener("keyup",event3 =>{
     if(cance3)clearTimeout(cance3)
  cance3= setTimeout( ()=> {
    localStorage.setItem("notes3",event3.target.value);
     },1000);

 });
 //////////////
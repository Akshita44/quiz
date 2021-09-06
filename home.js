document.getElementById("main").style.display="none"; 
var interval="";          
       function hide() {
           document.getElementById("btn").style.display="none";
           document.getElementById("main").style.display="block"; 
           var i=0;
           interval=setInterval(()=>{
                 if(i<10)
                 {
                     i="0"+i;
                 }
                 document.getElementById("timer").innerText=`0:${i}`;
                 if(i>30)
                 {
                     document.getElementById("timer").innerText="Time Up";
                     window.location.href="index.php";
                 }
                 i++;
             },1000)          
       }
       document.getElementById("next").addEventListener("click",()=>{
           clearInterval(interval);
       })
     
    
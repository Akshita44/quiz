const a=document.querySelectorAll("a");
const signup=document.getElementById("signup");
const login=document.getElementById("login");
const password=document.getElementById("password");
const confirmpassword=document.getElementById("confirmpassword");
const box=document.querySelector("#innerbox .form");
console.log(box.username.value);
a.forEach((data)=>{
    data.addEventListener("click",(e)=>{
        e.preventDefault();
        if(data.id === "logins")
        {
            document.getElementById("login").style.display="block";
        }
        else if(data.id === "signups")
        {
            document.getElementById("signup").style.display="block";
        }
    })
})
const function1=()=>{
    document.getElementById("demo").innerHTML="You need to signup first!!";
    document.getElementById("signup").style.display="block";
}
const show=()=>
{
    document.getElementById("signup").style.display="none";
    document.getElementById("login").style.display="block";
}
const check=()=>{
    if(password.value !== confirmpassword.value)
    {
        document.getElementById("passcheck").innerHTML="Confirm Password does not match";
        console.log(box.username.value);
        box.username.value="";
        box.email.value="";
        box.password.value="";
        box.confirmpassword.value="";        
    }
}
signup.addEventListener("click",(e)=>{
    if(e.target.id == "signup")
    {
        console.log(e.target.id,"hellllllllllllo");
        // document.getElementById("login").style.display="none";
        document.getElementById("signup").style.display="none";
    }
})
login.addEventListener("click",(e)=>{
    if(e.target.id == "login")
    {
        document.getElementById("login").style.display="none";
        // document.getElementById("signup").style.display="none";
    }
})
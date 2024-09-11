var firstname = document.getElementById('firstname').value;
var lastname = document.getElementById('lastname').value;
var emailinput = document.getElementById('email').value;
var password = document.getElementById('password').value;
var confirmPass = document.getElementById('conf-pass').value;

function SignUp(){
 

    // localStorage.setItem('firstname', firstname);
    // localStorage.setItem('lastname', lastname);
    // localStorage.setItem('emailinput', emailinput);
    // localStorage.setItem('password', password);
    // localStorage.setItem('confirmPass', confirmPass);
    location.assign('signup.php')
}
function LogIn(){
    location.assign('login.php')
}
function goTo() {
    location.assign('Community.php')
}
function GoToDetails(){
    location.assign('post.php')
}
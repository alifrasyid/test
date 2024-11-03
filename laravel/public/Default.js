let username = document.getElementById("Uname-id");
let password = document.getElementById("P-id");
var formlogn = document.getElementById("formLogin-id");

var statusLogin = localStorage.getItem("statusLogin");
var statusAdmin = localStorage.getItem("statusAdmin");

function login(){
    if(username.value == "" || password.value == ""){
        window.alert("Masukkan Password/Username !!")
    }else{
        formlogn.action = "/LoginCheck";
        localStorage.setItem("statusLogin", "true");
        localStorage.setItem("statusAdmin", "false");
    }
}

function cekLogin(){
    var LoginBar = document.getElementById("LoginBar");
    var signUpBar = document.getElementById("SignUpBar");
    var porfileBar = document.getElementById("ProfileBar");
    var signOutBar = document.getElementById("SignOutBar");
    if(statusLogin == "false"){
        // window.alert("Harap Login untuk menggunakan fitur ini");
        porfileBar.style.display = 'none';
        signOutBar.style.display = 'none';
        return false;
    }else{
        LoginBar.style.display = 'none';
        signUpBar.style.display = 'none';
        return true;
    }
}

function cekAdmin(){
    var DropdownMenu = document.getElementById("dropdownID");
    statusAdmin = false;
    if(statusAdmin == "false"){
        DropdownMenu.style.display ='none'
        return false;
    }
}

function LogOut(){
    localStorage.setItem("statusLogin", "false");
    localStorage.setItem("statusAdmin", "false");
}


function AlertLogin(){
    if(statusLogin == "false"){
        window.alert("Harap Login untuk menggunakan fitur ini");
        return false;
    }else{
        location.href = "/Create-Artikel";
        return true;
    }
}

function previewImage(input) {
    var img = document.getElementById('preview-image');
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            img.src = e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}
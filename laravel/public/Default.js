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

document.addEventListener("DOMContentLoaded", function() {
    function calculateProfileCompletion() {
        let filledFields = 0;
        const totalFields = 5; // Total jumlah field yang ada pada profil

        if (document.getElementById("username").value) filledFields++;
        if (document.getElementById("NoHP").value) filledFields++;
        if (document.getElementById("Status").value) filledFields++;
        if (document.getElementById("TanggalLahir").value) filledFields++;
        if (document.getElementById("Note").value) filledFields++;

        const completionPercentage = (filledFields / totalFields) * 100;
        const profileCompletionBar = document.getElementById("profile-completion");
        profileCompletionBar.style.width = `${completionPercentage}%`;
        profileCompletionBar.setAttribute("aria-valuenow", completionPercentage);
        profileCompletionBar.innerText = `${Math.round(completionPercentage)}%`;
    }

    // Panggil fungsi setiap kali halaman dimuat
    calculateProfileCompletion();

    // Panggil fungsi saat field diubah
    document.querySelectorAll("input").forEach(input => {
        input.addEventListener("input", calculateProfileCompletion);
    });
});

function submitPasswordChange() {
    const form = document.getElementById('changePasswordForm');
    const errorDiv = document.getElementById('passwordError');
    
    // Reset error message
    errorDiv.classList.add('d-none');
    errorDiv.textContent = '';
    
    // Create FormData object
    const formData = new FormData(form);
    
    // Send AJAX request
    fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Password changed successfully
            alert(data.message);
            window.location.reload();
            form.reset();
        } else {
            // Show error message
            errorDiv.textContent = data.message;
            errorDiv.classList.remove('d-none');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        errorDiv.textContent = 'Terjadi kesalahan. Silakan coba lagi.';
        errorDiv.classList.remove('d-none');
    });
}
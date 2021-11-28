function Clear() {
    $('#name').val("");
    $('#username').val("");
    $('#password').val("");
    $('#cpassword').val("");
    $('#errmsg').html("");
    document.getElementById("lb-email").style["visibility"] = "hidden";
    document.getElementById("lb-pass").style["visibility"] = "hidden";
    document.getElementById("lb-name").style["visibility"] = "hidden";
    document.getElementById("lb-cpass").style["visibility"] = "hidden";
}
function RegistrationFieldValidation() {


    //$name = $username= $email = $phone_number = $location = $password = $confirm_password =$gender=$registrationid=$blood_group= $specialist="";

// $nameErr = $usernameErr= $emailErr = $phone_numberErr = $locationErr = $passwordErr = $confirm_passwordErr = $genderErr =$registrationidErr=$blood_groupErr=$specialistErr="";
// $flag=1;  
    var name = $('#name').val();
    var username = $('#username').val();
    var email = $('#email').val();
    var phone_number = $('#phone_number').val();
    var password = $('#password').val();
    var confirm_password = $('#confirm_password').val();
    var gender = $('#gender').val();
    var registrationid = $('#registrationid').val();
    var blood_group = $('#blood_group').val();
    var specialist = $('#specialist').val();
    
    // var password = $('#password').val();
    // var cPassword = $('#cpassword').val();

    //Clearing Error
    document.getElementById("email").style["visibility"] = "hidden";
    document.getElementById("password").style["visibility"] = "hidden";
    document.getElementById("name").style["visibility"] = "hidden";
    document.getElementById("confirm_password").style["visibility"] = "hidden";


    var status = "";

    var regEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var regPhone = /(^(013)|^(014)|^(015)|^(016)|^(017)|^(018)|^(019)){1}\d{8}/;
    name
    if (name.length >2) {
        document.getElementById("name").style["visibility"] = "visible";
        status = "name";
    }
    if (!(userName.toString()).match(regEmail) && (!(userName.toString()).match(regPhone) || userName.length > 11)) {
        document.getElementById("email").style["visibility"] = "visible";
        status = "useraname";
    }
    if (password.length < 6) {
        document.getElementById("lb-pass").style["visibility"] = "visible";
        status = "password";
    }
    if (cPassword != password) {
        document.getElementById("confirm_password").style["visibility"] = "visible";
        status = "confirm_passwords";
    }
    if (status == "") {
        AddUser(Name, username, password);
    }

}

function AddUser(name, uname, pass) {
    var catname = "addsuer";
    $.ajax({
        url: "/control/registration-validation.php",
        type: 'POST',
        data: {
            //addUser: catname,
            name: name,
            username: username,
            password: password
        },
        success: function (data, status) {
            $('#errmsg').html(data);
        }
    });
    return false;
}
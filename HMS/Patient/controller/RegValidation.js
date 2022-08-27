
function validateGen() {
    var gn = document.getElementsByName("gender");
    var checked = false;
    for (var i = 0; i < gn.length; i++) {
        if (gn[i].checked) {
            checked = true;
            break;
        }
    }
    return checked;
}

function Validation() {
    let name = document.getElementById("name").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    let CPass = document.getElementById("Cpassword").value;
    let age = document.getElementById("age").value;
    let mobile = document.getElementById("contact").value;


    if (name == "") {
        document.getElementById("ErrName").innerHTML = "Name Can not be empty";
    }
    else {
        document.getElementById("ErrName").innerHTML = "";
    }

    if (name.length<3) {
        document.getElementById("ErrName").innerHTML = "Name must contain 3 character";
    }
    else {
        document.getElementById("ErrName").innerHTML = "";
    }

    if (username == "") {
        document.getElementById("ErrUName").innerHTML = "Username Can not be empty";
    }
    else {
        document.getElementById("ErrUName").innerHTML = "";
    }

    if (password.length < 6) {
        document.getElementById("ErrPass").innerHTML = "Password must contain 6 character";
    }
    else {
        document.getElementById("ErrPass").innerHTML = "";
    }

    if (password != CPass) {
        document.getElementById("ErrCPass").innerHTML = "Password and Confirm password is not matching";
    }
    else {
        document.getElementById("ErrCPass").innerHTML = "";
    }

    if (age == "") {
        document.getElementById("ErrAge").innerHTML = "Age Filed Can not be empty";
    }
    else {
        document.getElementById("ErrAge").innerHTML = "";
    }

    if (mobile == "") {
        document.getElementById("ErrMobile").innerHTML = "Contact Number Can not be empty";
       
    }

    else {
        document.getElementById("ErrMobile").innerHTML = "";
    }

    if (validateGen() == false) {
        document.getElementById("Errgender").innerHTML = "Gender must requried";
        return false;
    }
    else {
        document.getElementById("Errgender").innerHTML = "";
    }



}
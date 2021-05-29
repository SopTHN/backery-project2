
var Accounts = [
    {Username: "Yazan", Password: MAR2008ia},
    {Username: "Maria", Password: 12345678905},
    {Username: "Zohair", Password: 98009900}
];

var User = document.getElementById("Username").value;
var Email = document.getElementById("Email").value;
var Pass = document.getElementById("PassWord").value;

function Print () {
    var isFound = false;
    for (var i = 0; i < Accounts.length; i++) {
        if (User == Accounts[i].Username && Pass == Accounts[i].Password) {
            alert("Logged in");
            isFound = true;
            break;
        }
    }
    if (isFound == false) {
        alert("Your Account Isn\'t Exists");
    }
}

function oldPrint() {
    alert("Hello World!");
}

function NotifyisCreated() {
    if (User != null || Pass != null) {
        alert("Your Account is Created Successfully!");
    } else {
        if (User == null) {
            alert("Make sure you make your Username");
        }

        if (Pass == null) {
            alert("Make sure you make your Password");
        }
    }
}

function check(){
    if (User == ""){
        alert("make Sure you Entered your Username Correctly");
        return;
    }

    if (email == "") {
        alert("make Sure you Entered your Email correctly");
        return;
    } 

    if (Pass == "") {
        alert("make Sure you Entered your Password Correctly");
        return;
    }
}
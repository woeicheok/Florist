function myFunction(){
    var x = document.getElementById("idnavbar")
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show" , "")
    }
}

function rememberMe(){
    var rememberme = document.forms["loginForm"]["idremember"].checked;
    var email = document.forms["loginForm"]["idemail"].value;
    var pass = document.forms["loginForm"]["idpass"].value;
    console.log("Form data:" + rememberme + "," + email + "," + pass);
    if (!rememberme){
        setCookies("cemail", "", 0);
        setCookies("cpass", "", 0);
        setCookies("crem", false, 0);
        document.forms["loginForm"]["idemail"].value = "";
        document.forms["loginForm"]["idpass"].value = "";
        document.forms["loginForm"]["idremember"].checked = false;
        alert("Credentials removed");
    } else {
        if (email == "" && pass == "") {
            document.forms["loginForm"]["idremember"].checked = false;
            alert("Please enter your information");
            return false;
        } else {
            setCookies("cemail", email, 30);
            setCookies("cpass", pass, 30);
            setCookies("crem", rememberme, 30);
            alert("Information Stored Success");
        }
    }
}

function setCookies(cookiename, cookiedata, exdays) {
    var d = new Date();
    d,setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cookiename + "=" + cookiedata + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' '){
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function loadCookies() {
    var username = getCookie("cemail");
    var password = getCookie("cpass");
    var rememberme = getCookie("crem");
    console.log("COOKIES:" + username, password, rememberme);
    document.forms["loginForm"]["idemail"].value = username;
    document.forms["loginForm"]["idpass"].value = password;
    if (rememberme) {
        document.forms["loginForm"]["idremember"].checked = true;
    } else {
        document.forms["loginForm"]["idremember"].checked = false;
    }
}

function confirmDialog() {
    var r = confirm("Confirm to sign up?");
    if(r == true){
        return true;
    } else {
        return false;
    }
}

function confirmDialog2() {
    var r = confirm("Confirm to register?");
    if(r == true){
        return true;
    } else {
        return false;
    }
}
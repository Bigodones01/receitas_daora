function checking() {
    var email = document.getElementById('email').value;
    var pass = document.getElementById('pass').value;
    var submitbtn = document.getElementById('logar');

    const regexmail = /[a-zA-Z0-9]+@[a-zA-Z]+(\.[a-zA-Z]+)+$/i;

    var mailtest = email.match(regexmail);
    if(mailtest && pass != null) {
        submitbtn.classList.add('btnsuccess');
        submitbtn.disabled = false;
    } else {
        submitbtn.classList.remove('btnsuccess');
        submitbtn.disabled = true;
    }
}
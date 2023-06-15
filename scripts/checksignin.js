function checking() {
    var button = document.getElementById('criar');

    var name = document.getElementById('name').value.length > 3 ? true : false;
    var email = document.getElementById('email').value ? true : false;
    var pass = document.getElementById('pass').value;
    var cpass = document.getElementById('cpass').value;

    if(name && email && pass && cpass) {
        button.classList.remove('btndisabled');
        button.classList.add('btnsuccess');
        button.disabled = false;
    } else {
        button.classList.remove('btnsuccess');
        button.classList.add('btndisabled');
        button.disabled = true;
    }


}
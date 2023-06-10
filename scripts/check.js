function checking() {
    let emailCheck = (document.getElementById('email').value != "") ? true : false;
    let passCheck = (document.getElementById('pass').value != "") ? true : false;
    let submitbtn = document.getElementById('btnLogin');

    if(emailCheck && passCheck) {
        submitbtn.disabled = false;
        submitbtn.classList.remove('btn-secondary');
        submitbtn.classList.add('btn-success');
    } else {
        submitbtn.disabled = true;
        submitbtn.classList.remove('btn-success');
        submitbtn.classList.add('btn-secondary');
    }
}

function validate(id) {
    var formId = document.getElementById(id);

    switch (id) {
        case 'email':
            if(formId.checkValidity()) {
                formId.classList.remove('is-invalid');
                break;
            } else {
                formId.classList.add('is-invalid');
                break;
            }
        case 'pass':
            if(formId.checkValidity()) {
                formId.classList.remove('is-invalid');
                break;
            } else {
                formId.classList.add('is-invalid');
                break;
            }
    }
}
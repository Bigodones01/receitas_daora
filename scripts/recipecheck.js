function checkform() {
    var name = document.getElementById('nome').value;
    var tempo = document.getElementById('tempo').value;
    var ingredientes = document.getElementById('ingredientes').value;
    var modpre = document.getElementById('modpre').value;
    var submitbtn = document.getElementById('cadastro');

    if(name && tempo && ingredientes && modpre) {
        submitbtn.classList.add('btnsuccess');
        submitbtn.classList.remove('btndisabled');
        submitbtn.disabled = false;
    } else {
        submitbtn.classList.remove('btnsuccess');
        submitbtn.classList.add('btndisabled');
        submitbtn.disabled = true;
    }
}
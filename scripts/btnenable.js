function dashboard() {
    var dashbord = document.getElementById('dashbord');

    if(dashbord.classList.contains('disable')) {
        dashbord.classList.remove('disable');
    } else {
        dashbord.classList.add("disable");
    }
}

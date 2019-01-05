function sePresenter(){
    document.getElementById("paragraphe01").innerHTML="je suis le paragraphe 1";
}

function seColorier(couleur){
    document.getElementById("paragraphe01").style.color=couleur;
}

function afficherAlerte(message01){
    var mensaje = message01;
    window.alert(mensaje);
}

function changerTaille(taille){
    document.getElementById("dateHeure").style.fontSize=taille;
}
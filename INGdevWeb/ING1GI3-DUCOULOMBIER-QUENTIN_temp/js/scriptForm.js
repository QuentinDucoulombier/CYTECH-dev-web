function validateForm() {
    // Récupération des valeurs saisies dans les champs
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var telephone = document.getElementById("Telephone").value;
    var email = document.getElementById("Email").value;
    var dateReservation = document.getElementById("dReserva").value;

    // Expression régulière pour vérifier le format de l'email
    var emailRegex = /^\S+@\S+\.\S+$/;
    //TODO:Finir
    /*
    var nameRegex = /^[a-zA-Z ]+$/;

    if (!(/^\d{10}$/.test(nom))) {
        document.getElementById("Nom").style.borderColor = "red";
        document.getElementById("Nom").value = telephone;
        document.getElementById("Nom").style.display = "inline";
        return false;
    } else {
        document.getElementById("Nom").style.borderColor = "";
        document.getElementById("Nom").style.display = "none";
    }
    */

    // Vérification du format du numéro de téléphone
    if (!(/^\d{10}$/.test(telephone))) {
        document.getElementById("Telephone").style.borderColor = "red";
        document.getElementById("Telephone").value = telephone;
        document.getElementById("TelephoneFormat").style.display = "inline";
        return false;
    } else {
        document.getElementById("Telephone").style.borderColor = "";
        document.getElementById("TelephoneFormat").style.display = "none";
    }

    // Vérification du format de l'email
    if (!emailRegex.test(email)) {
        document.getElementById("Email").style.borderColor = "red";
        document.getElementById("Email").value = email;
        document.getElementById("EmailFormat").style.display = "inline";
        return false;
    } else {
        document.getElementById("Email").style.borderColor = "";
        document.getElementById("EmailFormat").style.display = "none";
    }

    // Si toutes les données sont valides, on renvoie true
    return true;
}

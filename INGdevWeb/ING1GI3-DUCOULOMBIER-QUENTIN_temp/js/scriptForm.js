function validateForm() {

    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var tel = document.getElementById("Telephone").value;
    var email = document.getElementById("Email").value;
    var dateReserv = document.getElementById("dReserva").value;
    var sujetMail = document.getElementById("sMail").value;
    var contenuMail = document.getElementById("cMail").value;

  
    if (nom == "") {
      document.getElementById("nom").style.borderColor = "red";
      return false;
    }
  
    if (prenom == "") {
      document.getElementById("prenom").style.borderColor = "red";
      return false;
    }
  
    var telFormat = /^((\+)33|0)[1-9](\d{2}){4}$/;
    if (!tel.match(telFormat)) {
      document.getElementById("Telephone").style.borderColor = "red";
      document.getElementById("TelephoneFormat").style.display = "inline";
      return false;
    }
  
    
    var emailFormat = /^\S+@\S+\.\S+$/; 
    if (!email.match(emailFormat)) {
      document.getElementById("Email").style.borderColor = "red";
      document.getElementById("EmailFormat").style.display = "inline";
      return false;
    }
  
    /*On peut pas reserver a une date precedente*/
    var now = new Date();
    console.log(now);
    /*console.log(dateReserv);
    console.log(dateReserv.replace(/-/g,","));*/
    dateReserv = new Date(dateReserv.replace(/-/g,","));
    console.log(dateReserv)
    if (dateReserv < now) {
      
      document.getElementById("dReserva").style.borderColor = "red";
      document.getElementById("dReservaFormat").style.display = "inline";
      return false;
    }
  
    if (sujetMail == "") {
      document.getElementById("sMail").style.borderColor = "red";
      return false;
    }
  
    if (contenuMail == "" || contenuMail == "Veuillez saisir le sujet du mail.") {
      
      document.getElementById("cMail").style.borderColor = "red";
      return false;
    }
  
    return true;
  }
  
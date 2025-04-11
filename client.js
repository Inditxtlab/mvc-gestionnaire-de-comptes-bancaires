// Creation d'un formulaire: 
// champs obligatoires > nom, mail, message 
// Validation 
// Message de confirmation 

// Premier pass: 
document.getElementById("clientform").addEventListener("submit", (e) => {
    e.preventDefault();
    console.log(e);
    ValidationForm();
})


// Fonction: 
// D'abord on apel les valeurs de nos elements pour apres les manipule, ainsi que les div ou on va afficher de messages 

function ValidationForm() {
    let nom = document.getElementById("nom").value;
    let prenom = document.getElementById("prenom").value;
    let clientmail = document.getElementById("email").value;
    let tlf = document.getElementById("telephone").value;

    let erreur_nom = document.getElementById("nom_erreur");
    let erreur_prenom = document.getElementById("prenom_erreur");
    let erreur_mail = document.getElementById("mail_erreur");
    let erreur_tlf = document.getElementById("tlf_erreur");
    let erreur_adresse = document.getElementById("adresse_erreur");

    let Valid = true;
    erreur_nom.innerHTML = "";
    erreur_prenom.innerHTML = "";
    erreur_mail.innerHTML = "";
    erreur_tlf.innerHTML = "";
    erreur_adresse.innerHTML = "";

    if (nom === "") {
        erreur_nom.innerHTML = "Le nom est obligatoire"
        Valid = false
    }
    if (prenom === "") {
        erreur_prenom.innerHTML = "Le prénom est obligatoire"
        Valid = false
    if (email === "") {
        erreur_mail.innerHTML = "L'adresse e-mail est obligatoire"
        Valid = false
        } else if (!clientmail.includes("@")) {
            erreur_mail.innerHTML = "Saisi une adresse e-mail valide"
            Valid = false
        }
        if (tlf === "") {
            erreur_tlf.innerHTML = "N'oublie pas saisir le téléphone"
            Valid = false
        }
        if (adresse === "") {
            erreur_adresse.innerHTML = "N'oublie pas saisir l'adresse"
            Valid = false
        }
        if (Valid) {
            alert("Le client a été cree!")
        }
    }
}
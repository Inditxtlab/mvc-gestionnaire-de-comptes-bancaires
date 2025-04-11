// Creation d'un formulaire: 
// champs obligatoires > nom, mail, message 
// Validation 
// Message de confirmation 

// Premier pass: 
document.getElementById("compteform").addEventListener("submit", (e) => {
    e.preventDefault();
    console.log(e);
    ValidationForm();
})


// Fonction: 
// D'abord on apel les valeurs de nos elements pour apres les manipule, ainsi que les div ou on va afficher de messages 

function ValidationForm() {
    let rib = document.getElementById("rib").value;
    let solde = document.getElementById("solde").value;
    let clientId = document.getElementById("clientId").value;

    let erreur_rib = document.getElementById("rib_erreur");
    let erreur_solde= document.getElementById("solde_erreur");
    let erreur_clientId = document.getElementById("clientId_erreur");

    let Valid = true;
    erreur_rib.innerHTML = "";
    erreur_solde.innerHTML = "";
    erreur_clientId.innerHTML = "";

    if (rib === "") {
        erreur_rib.innerHTML = "Le RIB est obligatoire"
        Valid = false
    }
    if (solde === "") {
        erreur_solde.innerHTML = "Le solde est obligatoire"
        Valid = false
        }
    if (clientId === "") {
    erreur_clientId.innerHTML = "N'oubliez pas d'associer ce compte à un identifiant client"
    Valid = false
        }
        if (Valid) {
            alert("La compte a été cree et associe à le client "+clientId)
            document.getElementById("compteform").submit(); 
        }
    }
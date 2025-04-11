// Creation d'un formulaire: 
// champs obligatoires > nom, mail, message 
// Validation 
// Message de confirmation 

// Premier pass: 
document.getElementById("contractform").addEventListener("submit", (e) => {
    e.preventDefault();
    console.log(e);
    ValidationForm();
})

function ValidationForm() {
    let typeDeContract = document.getElementById("typeDeContract").value;
    let montant = document.getElementById("montant").value;
    let duree = document.getElementById("duree");
    let idClient = document.getElementById("idClient").value;

    let erreur_typeDeContract = document.getElementById("typedecontract_erreur");
    let erreur_montant= document.getElementById("montant_erreur");
    let erreur_duree= document.getElementById("duree_erreur");
    let erreur_clientId = document.getElementById("clientId_erreur");

    let Valid = true;
    erreur_typeDeContract.innerHTML = "";
    erreur_montant.innerHTML = "";
    erreur_duree.innerHTML = "";
    erreur_clientId.innerHTML = "";

    if (typeDeContract === "") {
        erreur_typeDeContract.innerHTML= "Veuillez choisir un contract"
        Valid = false
    }
    if (montant === "") {
        erreur_montant.innerHTML = "Champ obligatoire"
        Valid = false
        }
        if (duree === "") {
            erreur_duree.innerHTML = "Champ obligatoire"
            Valid = false
            }
    if (idClient === "") {
    erreur_clientId.innerHTML = "N'oubliez pas d'associer ce contract à un identifiant client"
    Valid = false
        }
        if (Valid) {
            alert("Le contract a été cree et associe à le client "+ clientId)
        }
    }
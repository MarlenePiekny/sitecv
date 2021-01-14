<?php
//Ajout du header
$metaTitle = "Contact";
$metaDescription = "Voici mon formulaire de contact";
require 'template/header.php';

//Traitement du formulaire via file_put_contents pour les stocker dans le fichier contact_Y-m-d-H-i-s.txt horodaté

//Affectation de l'horadatage Y-m-d-H-i-s" au nom du fichier
$fichiercontact = 'contact/contact_' . date("Y-m-d-H-i-s") . '.txt';

//Affectation des différents champs du formulaire à des variables
$civilitecontact = filter_input(INPUT_POST, 'civilite_contact' );
$nomcontact = filter_input(INPUT_POST, 'nom_contact' );
$prenomcontact = filter_input(INPUT_POST, 'prenom_contact' );
$emailcontact = filter_input(INPUT_POST, 'email_contact' );
$raisoncontact = filter_input(INPUT_POST, 'raison_contact' );
$messagecontact = filter_input(INPUT_POST, 'message_contact' );

//Création du fichier horodaté contact"Y-m-d-H-i-s" dans le repertoire contact
file_put_contents($fichiercontact, $civilitecontact, FILE_APPEND |  LOCK_EX );
file_put_contents($fichiercontact, $nomcontact, FILE_APPEND |  LOCK_EX );
file_put_contents($fichiercontact, $prenomcontact, FILE_APPEND |  LOCK_EX );
file_put_contents($fichiercontact, $emailcontact, FILE_APPEND |  LOCK_EX );
file_put_contents($fichiercontact, $raisoncontact, FILE_APPEND |  LOCK_EX );
file_put_contents($fichiercontact, $messagecontact, FILE_APPEND |  LOCK_EX );

?>

  <main>
    <h1>Contact</h1>

    <form action="index.php?page=contact" method="post">

        <div class="for-champ">
            <p>Civilité : </p>
            <select id="civilité" name="civilite_contact">
                <option value="M.">M.</option>
                <option value="Mme.">Mme.</option>
            </select>
        </div>

        <div class="form-champ">
            <label for="nom">Nom: </label>
            <input type=”text” id="nom" name="nom_contact">
        </div>

        <div class="form-champ">
            <label for="prénom">Prénom: </label>
            <input type=”text” id="prenom" name="prenom_contact">
        </div>

      <div class="form-champ">
        <label for="email">e-mail : </label>
        <input type=”email" id="email" name="email_contact">
      </div>

      <div class="form-champ">
        <p>Raison du contact : </p>
        <input type="radio" id="raison" name="raison_contact" value="proposition_emploi" checked>
        <label for="proposition_emploi">Proposition d'emploi</label>
        <input type="radio" id="raison" name="raison_contact" value="demande_information_prestations">
        <label for="demande_information_prestations">Demande d’information et prestations</label>
      </div>

      <div class="form-champ">
        <label for="message">Votre message : </label>
        <textarea id="message" name="message_contact"></textarea>
      </div>

      <div class="form-button">
        <button type="submit">Envoyer votre message</button>
      </div>

    </form>


  </main>

<?php
//"Ajout du footer"
require 'template/footer.php'
?>
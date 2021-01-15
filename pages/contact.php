<?php
//Ajout du header
$metaTitle = "Contact";
$metaDescription = "Voici mon formulaire de contact";
require 'template/header.php';

//Test sur l'envoi du formulaire
if (filter_has_var(INPUT_POST, 'soumis')) {

    //Affectation des différents champs du formulaire à des variables
    $civilitecontact = filter_input(INPUT_POST, 'civilite_contact', FILTER_SANITIZE_STRING);
    $nomcontact = filter_input(INPUT_POST, 'nom_contact', FILTER_SANITIZE_STRING);
    $prenomcontact = filter_input(INPUT_POST, 'prenom_contact', FILTER_SANITIZE_STRING);
    $emailcontact = filter_input(INPUT_POST, 'email_contact', FILTER_VALIDATE_EMAIL);
    $raisoncontact = filter_input(INPUT_POST, 'raison_contact', FILTER_SANITIZE_STRING);
    $messagecontact = filter_input(INPUT_POST, 'message_contact', FILTER_SANITIZE_STRING);

    //Test sur les champs du formulaire complétés
    if (!empty(trim($civilitecontact))
        && !empty(trim($nomcontact))
        && !empty(trim($prenomcontact))
        && !empty(trim($emailcontact))
        && !empty(trim($raisoncontact))
        && (!empty(trim($messagecontact)) && strlen($messagecontact) > 5)
    ) {

        //Le formulaire est complet : on traite le formulaire les champs pour les envoyer dans un fichier horodaté contact_Y-m-d-H-i-s.txt horodaté

        //Affectation de l'horadatage Y-m-d-H-i-s" au nom du fichier
        date_default_timezone_set('Europe/Paris');
        $fichiercontact = 'contact/contact_' . date('Y-m-d-H-i-s') . '.txt';

        //Création du fichier horodaté contact"Y-m-d-H-i-s" dans le repertoire contact qui prend les valeurs des différents champs
        $donneescontact = $civilitecontact . PHP_EOL
            . $nomcontact . PHP_EOL
            . $prenomcontact . PHP_EOL
            . $emailcontact . PHP_EOL
            . $raisoncontact . PHP_EOL
            . $messagecontact;

        file_put_contents($fichiercontact, $donneescontact);
        /*file_put_contents($fichiercontact, $civilitecontact, FILE_APPEND);
        file_put_contents($fichiercontact, $nomcontact, FILE_APPEND);
        file_put_contents($fichiercontact, $prenomcontact, FILE_APPEND);
        file_put_contents($fichiercontact, $emailcontact, FILE_APPEND);
        file_put_contents($fichiercontact, $raisoncontact, FILE_APPEND);
        file_put_contents($fichiercontact, $messagecontact, FILE_APPEND);*/

        //Afficher un message quand les infos du formulaire ont été envoyées
        echo("Je vous remercie, votre formulaire a bien été envoyé");

    } else {
        //Le formulaire n'est pas complet
        echo("Veuillez saisir tous les champs du formulaire");
    }
}
//Le formulaire n'est pas envoyé
?>

    <main>
        <h1>Contact</h1>

        <form action="index.php?page=contact" method="post">

            <div style="color:red">
                <?php //Vérification des champs et message d'erreur
                if (empty($civilitecontact) && filter_has_var(INPUT_POST, 'soumis')) {
                    echo("La civilité n'est pas complétée ");
                }
                ?>
            </div>
            <div class="for-champ">
                <p>Civilité : </p>
                <select id="civilité" name="civilite_contact">
                    <option value="M.">M.</option>
                    <option value="Mme.">Mme.</option>
                </select>
            </div>

            <div style="color:red">
                <?php // Vérification des champs et message d'erreur
                if (empty($nomcontact) && filter_has_var(INPUT_POST, 'soumis')) {
                    echo("Le nom n'est pas complété");
                }
                ?>
            </div>
            <div class="form-champ">
                <label for="nom">Nom: </label>
                <input type=”text” id="nom" name="nom_contact">
            </div>

            <div style="color:red">
                <?php //Vérification des champs et message d'erreur
                if (empty($prenomcontact) && filter_has_var(INPUT_POST, 'soumis')) {
                    echo("Le prénom n'est pas complété");
                }
                ?>
            </div>
            <div class="form-champ">
                <label for="prénom">Prénom: </label>
                <input type=”text” id="prenom" name="prenom_contact">
            </div>

            <div style="color:red">
                <?php //Vérification des champs et message d'erreur
                if ((empty(filter_input(INPUT_POST, 'email_contact'))) && filter_has_var(INPUT_POST, 'soumis')) {
                    //Si le champs n'est pas complété et que le formulaire est soumis
                    echo("L'e-mail n'est pas complété");
                } elseif ((empty(filter_input(INPUT_POST, 'email_contact', FILTER_VALIDATE_EMAIL))) && filter_has_var(INPUT_POST, 'soumis')) {
                    //Sinon si le formulaire est soumis et que le champs n'est pas au bon format
                    echo("Veuillez saisir une adresse email au format : xxxxx@yyyy.zz");
                }
                ?>
            </div>
            <div class="form-champ">
                <label for="email">e-mail : </label>
                <input type=”text" id="email" name="email_contact">
            </div>

            <div style="color:red">
                <?php //Vérification des champs et message d'erreur
                if (empty($raisoncontact) && filter_has_var(INPUT_POST, 'soumis')) {
                    echo("La raison n'est pas complétée");
                }
                ?>
            </div>
            <div class="form-champ">
                <p>Raison du contact : </p>
                <input type="radio" id="raison" name="raison_contact" value="proposition_emploi" checked>
                <label for="proposition_emploi">Proposition d'emploi</label>
                <input type="radio" id="raison" name="raison_contact" value="demande_information_prestations">
                <label for="demande_information_prestations">Demande d’information et prestations</label>
            </div>

            <div style="color:red">
                <?php // Vérification des champs et message d'erreur
                if (empty($messagecontact) && filter_has_var(INPUT_POST, 'soumis')) {
                    //Si le formulaire est soumis et que le champs n'est pas complété
                    echo("Le message n'est pas complété");
                } elseif ((strlen($messagecontact) <= 5) && filter_has_var(INPUT_POST, 'soumis')) {
                    //Sinon si le formulaire est soumis et que le champs n'a pas plus de 5 caractères
                    echo("Veuillez envoyer un message de plus de 5 caractères s'il vous plait");
                }
                ?>
            </div>
            <div class="form-champ">
                <label for="message">Votre message : </label>
                <textarea id="message" name="message_contact"></textarea>
            </div>

            <div class="form-button">
                <input type="submit" name="soumis" value="Envoyer votre message">
            </div>

        </form>

    </main>

<?php
//"Ajout du footer"
require 'template/footer.php'
?>
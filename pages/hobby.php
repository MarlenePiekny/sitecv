<?php
//"Ajout du header"
$metaTitle = "Hobby";
$metaDescription = "Voici mon hobby";
require 'template/header.php'
?>

  <main class="hobby">
    <h1>Peinture aquarelle</h1>
    <h2>En bref</h2>
    <p>L'aquarelle est une peinture à l'eau sur papier. Les pigments dilués dans l'eau laissent apparaître le support
      papier qui apporte déjà un fond. Sa simplicité n'est qu'apparente et demande de la technique et surtout du
      lâcher-prise.</p>
    <h2>Vidéo tutoriel</h2>
    <iframe width="517" height="291" src="https://www.youtube.com/embed/f3mPWOZ1Xug" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>
  </main>

<?php
//"Ajout du footer"
require 'template/footer.php'
?>
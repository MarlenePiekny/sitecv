
<?php
//"Ajout du header"
$metaTitle = "Contact";
$metaDescription = "Voici mon formulaire de contact";
require 'header.php'
?>

  <main>
    <h1>Contact</h1>

    <form action="https://httpbin.org/post" method="post">
      <div class="form-champ">
        <label for="email">Votre e-mail : </label>
        <input type="email" id="email" name="email-contact">
      </div>

      <div class="form-champ">
        <p>for="radio">Vous êtes : </p>
        <input type="radio" id="entreprise" name="type-contact" value="entreprise" checked>
        <label for="entreprise">Une entreprise</label>
        <input type="radio" id="autre" name="type-contact" value="autre">
        <label for="autre">Autre</label>
      </div>

      <div class="form-champ">
        <label for="localisation">Votre localisation : </label>
        <select id="localisation" name="localisation-contact">
          <option value="01">01 - AIN</option>
          <option value="02">02 - AISNE</option>
          <option value="03">03 - ALLIER</option>
          <option value="04">04 - ALPES DE HAUTE PROVENCE</option>
          <option value="05">05 - HAUTES - ALPES</option>
          <option value="06">06 - ALPES MARITIMES</option>
          <option value="07">07 - ARDECHE</option>
          <option value="08">08 - ARDENNES</option>
          <option value="09">09 - ARIEGE</option>
          <option value="10">10 - AUBE</option>
          <option value="11">11 - AUDE</option>
          <option value="12">12 - AVEYRON</option>
          <option value="13">13 - BOUCHES - DU - RHONE</option>
          <option value="14">14 - CALVADOS</option>
          <option value="15">15 - CANTAL</option>
          <option value="16">16 - CHARENTE</option>
          <option value="17">17 - CHARENTE - MARITIME</option>
          <option value="18">18 - CHER</option>
          <option value="19">19 - CORREZE</option>
          <option value="21">21 - COTE - D'OR</option>
          <option value="22">22 - COTES D'ARMOR</option>
          <option value="23">23 - CREUSE</option>
          <option value="24">24 - DORDOGNE</option>
          <option value="25">25 - DOUBS</option>
          <option value="26">26 - DROME</option>
          <option value="27">27 - EURE</option>
          <option value="28">28 - EURE - ET - LOIR</option>
          <option value="29">29 - FINISTERE</option>
          <option value="2A">2A - CORSE du SUD</option>
          <option value="2B">2B - HAUTE CORSE</option>
          <option value="30">30 - GARD</option>
          <option value="31">31 - HAUTE - GARONNE</option>
          <option value="32">32 - GERS</option>
          <option value="33">33 - GIRONDE</option>
          <option value="34">34 - HERAULT</option>
          <option value="35">35 - ILLE - ET - VILAINE</option>
          <option value="36">36 - INDRE</option>
          <option value="37">37 - INDRE - ET - LOIRE</option>
          <option value="38">38 - ISERE</option>
          <option value="39">39 - JURA</option>
          <option value="40">40 - LANDES</option>
          <option value="41">41 - LOIR - ET - CHER</option>
          <option value="42">42 - LOIRE</option>
          <option value="43">43 - HAUTE - LOIRE</option>
          <option value="44">44 - LOIRE - ATLANTIQUE</option>
          <option value="45">45 - LOIRET</option>
          <option value="46">46 - LOT</option>
          <option value="47">47 - LOT - ET - GARONNE</option>
          <option value="48">48 - LOZERE</option>
          <option value="49">49 - MAINE et LOIRE</option>
          <option value="50">50 - MANCHE</option>
          <option value="51">51 - MARNE</option>
          <option value="52">52 - HAUTE - MARNE</option>
          <option value="53">53 - MAYENNE</option>
          <option value="54">54 - MEURTHE - ET - MOSELLE</option>
          <option value="55">55 - MEUSE</option>
          <option value="56">56 - MORBIHAN</option>
          <option value="57">57 - MOSELLE</option>
          <option value="58">58 - NIEVRE</option>
          <option value="59">59 - NORD</option>
          <option value="60">60 - OISE</option>
          <option value="61">61 - ORNE</option>
          <option value="62">62 - PAS - DE - CALAIS</option>
          <option value="63">63 - PUY - DE - DOME</option>
          <option value="64">64 - PYRENNES - ATLANTIQUES</option>
          <option value="65">65 - HAUTES - PYRENNES</option>
          <option value="66">66 - PYRENNES - ORIENTALES</option>
          <option value="67">67 - BAS - RHIN</option>
          <option value="68">68 - HAUT - RHIN</option>
          <option value="69">69 - RHONE</option>
          <option value="70">70 - HAUTE - SAONE</option>
          <option value="71">71 - SAONE - ET - LOIRE</option>
          <option value="72">72 - SARTHE</option>
          <option value="73">73 - SAVOIE</option>
          <option value="74">74 - HAUTE - SAVOIE</option>
          <option value="75">75 - PARIS</option>
          <option value="76">76 - SEINE - MARITIME</option>
          <option value="77">77 - SEINE - ET - MARNE</option>
          <option value="78">78 - YVELINES</option>
          <option value="79">79 - DEUX SEVRES</option>
          <option value="80">80 - SOMME</option>
          <option value="81">81 - TARN</option>
          <option value="82">82 - TARN - ET - GARONNE</option>
          <option value="83">83 - VAR</option>
          <option value="84">84 - VAUCLUSE</option>
          <option value="85">85 - VENDEE</option>
          <option value="86">86 - VIENNE</option>
          <option value="87">87 - HAUTE - VIENNE</option>
          <option value="88">88 - VOSGES</option>
          <option value="89">89 - YONNE</option>
          <option value="90">90 - TERRITOIRE DE BELFORT</option>
          <option value="91">91 - ESSONNE</option>
          <option value="92">92 - HAUTS - DE - SEINE</option>
          <option value="93">93 - SEINE - SAINT - DENIS</option>
          <option value="94">94 - VAL - DE - MARNE</option>
          <option value="95">95 - VAL - D'OISE</option>
          <option value="971">971 - GUADELOUPE</option>
          <option value="972">972 - MARTINIQUE</option>
          <option value="973">973 - GUYANE</option>
          <option value="974">974 - REUNION</option>
          <option value="975">975 - ST PIERRE et MIQUELON</option>
          <option value="984">984 - TERRES AUSTRALES ANTARCTIQUES</option>
          <option value="985">985 - MAYOTTE</option>
          <option value="986">986 - WALLIS ET FUTUNA</option>
          <option value="987">987 - POLYNESIE FRANçAISE</option>
          <option value="988">988 - NOUVELLE - CALEDONIE</option>
          <option value="999">999 - ETRANGERS EN FRANCE</option>
        </select>

      </div>

      <div class="form-champ">
        <label for="message">Votre message : </label>
        <textarea id="message" name="message-contact"></textarea>
      </div>

      <div class="form-button">
        <button type="submit">Envoyer votre message</button>
      </div>

    </form>


  </main>

<?php
//"Ajout du footer"
require 'footer.php'
?>
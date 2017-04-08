<!--
TAF prioritaires
 - Lier slack avec les dépôts c57
 - Images/Icônes numéro des étapes
 (1 ce site (Edit On line / [VM], GitHub, outils /localhost/Fork-MR-Fetch / ...) - 2 Laravel - 3 Bestmomo - 4 oCMS - 5 C2B)
 - Pose d'un oCMS pour C57
 - Sur les numéros, créer lien sur pages blog pour chaque étape alors décrite de A à Z
 - CSS => Utiliser vraiment less
L'allure devra être comme celle-ci
- Ajouter Lien: Vous y gagner d'emblée (Compétences, trucs & astuces, temps, etc..) Mais... Et si en plus, cela vous rapportait directement...?

TAF secondaires
Lien dépît c57 - No mouvements
-->

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Accueil | c57.fr</title>
  <meta charset=UTF-8"/>
  <meta name="description" content="Page d'accueil de c57.fr"/>
  <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body>
<!--  Commenter/décommenter pour afficher un message dans le haut de la page-->
<div class="lio">
  <!--  <mark>À noter: Tests en cours...</mark>-->
</div>
<h1>
  C57.fr
</h1>
<h4><em class="noCadre ext">Le Dev Informatique, c'est pour tout le monde...<br/>
    ... & en plus, la puissance des <a href="https://fr.wikipedia.org/wiki/Open_source" target="_blank">O.S.</a>...
    <strong>C</strong>'est en <strong>5</strong> -<strong>7</strong>, même
    pour les 'pures' francophones !</em></h4>

<hr>

<h3>Apprendre par l'action: <a href="https://github.com/c57fr/c57" title="LE dépôt GitHub">
    1
    <mark>Dépôt GitHub</mark>
  </a></h3>

<h4><a href="https://github.com/c57fr/c57/issues">Besoin d'aide? Une question? Une attente ou une requête?</a></h4>

<hr>

<p class="etapes+">À voir aussi:
  <a href="http://laravel.c57.fr">2&nbsp;Laravel</a> |<a href="http://bestmomo.c57.fr">3&nbsp;Laravel
    (Customisé/BestMomo)</a> |<a href="http://october.c57.fr">4&nbsp;OctoberCMS</a> |<a
    href="http://portail.chemin2bonheur.com/be/backend/auth/signin">5&nbsp;C2B</a>
</p>

<?php
//echo '<p>Ce texte est issu d\'un script écrit en PHP ' . PHP_VERSION . '</p>';
?>

<p></p>
<hr/>

<div style="text-align: center" class="sp1 ext">
  <a href="http://c57.slack.com" target="_blank">Connection (Slack)</a>
</div>
<hr/>
<div style="text-align: right; margin-top: -.125%;" class="sp1">
  &copy; 2017 - Propulsé par <strong><a href="https://github.com/c57fr/c57" title="Dépôt GitHub">C57</a></strong> -
  <!--TAF C57 => Lien login du oCMS pr C57-->
  <em class="ext"><a href="http://sg1.COTE7.com" target="_blank">GC7</a></em>
</div>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.c57.fr"]);
  _paq.push(["setDomains", ["*.c57.fr"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function () {
    var u = "//piwik.cote7.com/";
    _paq.push(['setTrackerUrl', u + 'piwik.php']);
    _paq.push(['setSiteId', '7']);
    var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
    g.type = 'text/javascript';
    g.async = true;
    g.defer = true;
    g.src = u + 'piwik.js';
    s.parentNode.insertBefore(g, s);
  })();
</script>
<noscript><p><img src="//piwik.cote7.com/piwik.php?idsite=7&rec=1" style="border:0;" alt=""/></p></noscript>
<!-- End Piwik Code -->

</body>
</html>

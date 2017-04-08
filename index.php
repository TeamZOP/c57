<!--
TAF
 - Images/Icônes numéro des étape
 (1 ce site - 2 Laravel - 3 Bestmomo - 4 oCMS)
 - Pose d'un oCMS pour C57
 - CSS => Utiliser vraiment less
L'allure devra être comme celle-ci
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
<h4><em>Les OS, c'est en 5 à 7, même pour les francophones !</em></h4>

<hr>

<h3>Apprendre par l'action: <a href="https://github.com/c57fr/c57" title="Dépôt GitHub">
    <mark>Dépôt GitHub</mark>
  </a></h3>

<h4><a href="https://github.com/c57fr/c57/issues">Besoin d'aide? Une question? Une attente ou une requête?</a></h4>

<hr>

<p>À voir aussi:
  <a href="http://laravel.c57.fr">Laravel</a> |
  <a href="http://bestmomo.c57.fr">Laravel (Customisé/BestMomo)</a> |
  <a href="http://october.c57.fr">OctoberCMS</a>
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

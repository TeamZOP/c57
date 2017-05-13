<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>@yield('titre')</title>
</head>
<body>
Partie commune du template
@yield('contenu')


<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-61289532-2', 'auto');
  ga('send', 'pageview');
</script>

@include('partials.analytics')

</body>
</html>
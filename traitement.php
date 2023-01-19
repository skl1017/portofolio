<html>
  <head>
  <title>Newsletter</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="masterv3.css">
  </head>
  <body>
  <section>
  <div id="reponse">
  <?php print "Hi ";
  print $_POST["Prenom"] ;
  print " ";
  print $_POST["Nom"];
  print "<BR><BR>";
  print " Thank you for subscribing to my newsletter with ";
  print $_POST["Email"];
  print "<BR><BR>";
	print " I will contact you soon";
  ?>
</div>
</section>
  </body>
</html>

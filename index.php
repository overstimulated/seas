<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

//echo 'Hello world from Cloud9!';
header('HTTP/1.1 307 Temporary Redirect');
header('Location: FileManager/');
?>
<html>
  <head>
    <title>Moved</title>
  </head>
  <body>
    <h1>Moved</h1>
    <p>This page has moved to <a href="FileManager/">FileManager</a>.</p>
  </body>
</html>
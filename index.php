<!DOCTYPE html>
<html>
<title>MVC</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style2.css">
<link rel="shortcut icon" href="icon.png">
<link href="~/Content/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<body>

  <div class="sidebar">
    <a class="active" href="#home"><b><i>MENÜLER</i></b></a>
    <a href="?wanted_page=/Session/LoginForm"><b>Giriş Yap</b></a>
    <a href="?wanted_page=/Students">Öğrenciler</a>
    <a href="?wanted_page=/Teachers">Öğretmenler</a>
    <a href="?wanted_page=/Session/Logout"><b>Çıkış Yap</b></a>
  </div>

  <div class="content">
    <?php
require 'system/helpers.php';

$wanted_page = @$_GET['wanted_page'];

require 'system/Controllers.php';
require 'system/Models.php';
require 'system/Loader.php';
require 'system/DataBase.php';
require 'system/router.php';
?>
  </div>

</body>

</html>
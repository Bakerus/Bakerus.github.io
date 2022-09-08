<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iffosa</title>

    <script src="Js/caroussel.js"></script>
    <link rel="stylesheet" href="css/caroussel.css">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>
<body onload= "showSlides_desc_actu()" >

    <header>
        <?php
            include 'component/header.php';
         ?>
    </header>
    <section>
<!-- appel du composant section_presentation -->
        <?php
            include 'component/section_presentation.php';
         ?>
<!-- appel du composant section_description_actualités-->
        <?php 
        include 'component/section_description_and_actualite.php';
        ?>
     </section>
      <?php 
        include 'component/section_campus.php';
      ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="index.js"></script>
</body>
</html>
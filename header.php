<!DOCTYPE html>     
<!-- Anfang von jedem View, per include eingebunden-->

<html lang="de">
    <head>        
        <title>Georg-August-Universität Göttingen</title> 
        <meta charset="iso-8859-1" />           
        <!--Bootstrap CSS/JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>       

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


        <link rel="icon" href="http://getbootstrap.com/docs/3.3/favicon.ico">

        <link href="css/main.css" rel="stylesheet">  

        <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">



        <!--Eigene CSS: Verwaltungsseite Buttons -->
        <link href="css/verwaltung.css" rel="stylesheet">

        <!-- Javascript für Popovers -->
        <script>
            $(function () {
                $('[data-toggle="popover"]').popover()
            })
        </script>

    </head>

    <body>
        <div class="wrapper">
            <!-- Header-Bereich -->
            <header>
                <div class="header">
                    <div class="container"
                    <a href="https://www.uni-goettingen.de/"><img id="logo" src="./img/GAU.png" alt="Georg-August-Universität Göttingen"></a>
                    </div>
                </div>
            </header>

            <!-- Obere Navigationsleiste -->          
            <nav class="navbereich" style="background-color: #3979b5">
                <a href="http://www.uni-goettingen.de/de/aktuelles/13401.html">Aktuelles</a>
                <a href="http://www.uni-goettingen.de/de/die+fakult%c3%a4t/13567.html">Die Fakultät</a>
                <a href="http://www.uni-goettingen.de/de/forschung/13500.html">Forschung</a>
                <a href="http://www.uni-goettingen.de/de/forschung/13500.html">International</a>
                <a href="http://www.uni-goettingen.de/de/studierende/13518.html">Studierende</a>
                <a href="http://www.uni-goettingen.de/de/studieninteressierte/318444.html">Studieninteressierte</a>
                <a href="http://www.uni-goettingen.de/de/karriere+und+alumni/209102.html">Karriere und Alumni</a>       
                <a href="login.php">Login</a>
            </nav>

            <!-- Beginn des Inhalts -->  
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="content">
                            <div>

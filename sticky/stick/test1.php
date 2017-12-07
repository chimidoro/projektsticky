<?php

include("header.php");
include("db.php");
include("funktionen.php");
?>

<style>
   
    .Verwaltungsbereich{
        float:left;
        clear:both;
        width: 80%;
    }

    .Verwaltungsbereich ul{
        margin-left: 10%;
        float:left;
        padding: 2%;
    }

    .Verwaltungsbereich ul li{
        background-color: #3979b5;
        border: 1px solid transparent;
        width:220px;
        height:80px;
        float:left;
        margin:0 2% 10px 0;
        list-style-type:none;
        border-radius:14px;
        position: relative;
        transition: all 0.8s ease;
    }

    .Verwaltungsbereich ul li:hover{
        text-decoration: none;  
        background-color: #ffffff;
        border-color: #3979b5;
        transition: all 0.8s ease;
    }


    .Verwaltungsbereich ul li a{
        text-decoration: none;  
        float: left;
        width: 150px;
        padding: 15px 0 24px 20px;
        text-transform: uppercase;
        color:#ffffff!important;
        font-size:17px;
        text-align:left;
        transition: all 0.5s ease;
        background: url('img/menu.png');
    }

    .Verwaltungsbereich ul li a span{
        font-size: 12px!important;
        padding: 15px 0 24px 20px;
        margin-top: -10px;
        float: left;
        font-weight: bold;
        background: url('img/menu.png');
    }

    .Verwaltungsbereich ul li a:hover{
        text-decoration: none!important;
        color: #3979b5!important;
        transition: all 0.8s ease;
    }

    .Verwaltungsbereich ul li.Thema_uebersicht a {
        background-position: 129px -7px;
        background-repeat: no-repeat;
        width: 270px;
        height: 100px;
    }

    .Verwaltungsbereich ul li.Thema_uebersicht a span{
        background-position: -20px -110px;
        background-repeat: no-repeat;
        width: 51px;
        height: 50px;
        position: relative;
        top: -7px;
        right: 71px;
        float: right;
        transition: all 0.9s ease;
        opacity:0;
    }

    .Verwaltungsbereich ul li.thema_hochladen a {
        background-position: -200px -4px;
        background-repeat: no-repeat;
        width: 270px;
        height: 100px;
    }

    .Verwaltungsbereich ul li.thema_hochladen a span{
        background-position: -330px -102px;
        background-repeat: no-repeat;
        width: 52px;
        height: 52px;
        position: relative;
        top: -12px;
        right: 90px;
        float: right;
        transition: all 0.7s ease;
        opacity:0;
    }

    .Verwaltungsbereich ul li.inf_verwalten a {
        background-position: -170px -190px;
        background-repeat: no-repeat;
        width: 270px;
        height: 100px;
    }

    .Verwaltungsbereich ul li.inf_verwalten a span{
        background-position: -330px -280px;
        background-repeat: no-repeat;
        width: 51px;
        height: 253px;
        position: relative;
        top: -21px;
        right: 64px;
        float: right;
        transition: all 0.5s ease;
        opacity:0;
    }

    .Verwaltungsbereich ul li.report_erstellen a {
        background-position: 129px -190px;
        background-repeat: no-repeat;
        width: 270px;
        height: 100px;
    }

    .Verwaltungsbereich ul li.report_erstellen a span{
        background-position: -19px -280px;
        background-repeat: no-repeat;
        width: 51px;
        height: 61px;
        position: relative;
        top: -21px;
        right: 72px;
        float: right;
        transition: all 0.5s ease;
        opacity:0;
    }


    .Verwaltungsbereich ul li a:hover span{
        transition: all 0.8s ease;
        opacity:1;
    }

</style>

<h4>Verwaltungsbereich</h4>
Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sceso
Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sceso
Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sceso
Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sce 
Ich hab kein Bock mehr. Tschüss. DONE SO DONE. ICH WILL NICHT MEHR. 

<br><br>

<div class="Verwaltungsbereich">
    <ul>
        <li class="Thema_uebersicht"><a href="/gallery-portraits">Themen <br>Übersicht<span></span></a></li>
        <li class="thema_hochladen"><a href="/sports">Thema <br>hochladen<span></span></a></li> 

        <li class="inf_verwalten"><a href="/weddings">Informationen <br>verwalten<span></span></a></li>
        <li class="report_erstellen"><a href="/celebrations">Report <br>erstellen<span></span></a></li>
    </ul>
</div>

<?php

include 'navi.php';
include("footer.php");
?>

<?php
include("header.php");
include("db.php");
include("funktionen.php");
?>


<style> 
    .test {
        margin: 0px 10px 0 10px;        
        background-color: #3979b5;
        border: 1px solid transparent;
        -webkit-border-radius: 3px;
        border-radius:10px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        float:left;
        transition: all 0.8s ease;
        width: 100%;
        left: 100px;
        
    } 
        .test:hover{
        text-decoration: none;  
        background-color: #ffffff;
        border-color: #3979b5;
        transition: all 0.8s ease;
    }
    
        .test thema_hochladen a{
        width: 180px;
        text-decoration: none!important;
        float: left;
        padding: 25px 0 25px 20px;
        text-transform: uppercase;
        color:#ffffff!important;
        font-size:17px;
        text-align:left;
        transition: all 0.5s ease;
        background: url('img/pa.png');
        background-repeat: no-repeat;
         background-position: 150px ; 
         
    }
    
    .test thema_hochladen a:hover{
        width: 180px;
        text-decoration: none!important;
        float: left;
        padding: 25px 0 25px 20px;
        text-transform: uppercase;
        color:#3979b5!important;
        font-size:17px;
        text-align:left;
        transition: all 0.5s ease;
        background: url('img/ph.png');
        background-repeat: no-repeat;
         background-position: 150px; 
    }
    
        .test uebersicht a{
        width: 220px;
        height: 100px;
        text-decoration: none!important;
        float: left;
        padding: 35px 0 25px 20px;
        text-transform: uppercase;
        color:#ffffff!important;
        font-size:17px;
        text-align:left;
        transition: all 0.5s ease;
        background: url('img/them_ueb_a.png');
        background-repeat: no-repeat;
         background-position: 190px ; 
    }
    
    .test uebersicht a:hover{
        width: 220px;
        height: 100px;
        text-decoration: none!important;
        float: left;
        padding: 35px 0 25px 20px;
        text-transform: uppercase;
        color:#3979b5!important;
        font-size:17px;
        text-align:left;
        transition: all 0.5s ease;
        background: url('img/them_ueb_h.png');
        background-repeat: no-repeat;
         background-position: 190px ; 
    }
    
          .test report a{
        width: 165px;
        text-decoration: none!important;
        float: left;
        padding: 25px 0 25px 20px;
        text-transform: uppercase;
        color:#ffffff!important;
        font-size:17px;
        text-align:left;
        transition: all 0.5s ease;
        background: url('img/report_a.png');
        background-repeat: no-repeat;
         background-position: 135px ; 
    }
    
    .test report a:hover{
        width: 165px;
        text-decoration: none!important;
        float: left;
        padding: 25px 0 25px 20px;
        text-transform: uppercase;
        color:#3979b5!important;
        font-size:17px;
        text-align:left;
        transition: all 0.5s ease;
        background: url('img/report_h.png');
        background-repeat: no-repeat;
         background-position: 135px; 
    }
    
             .test information a{
        width: 210px;
        text-decoration: none!important;
        float: left;
        padding: 25px 0 25px 20px;
        text-transform: uppercase;
        color:#ffffff!important;
        font-size:17px;
        text-align:left;
        transition: all 0.5s ease;
        background: url('img/inf_a.png');
        background-repeat: no-repeat;
         background-position: 175px ; 
    }
    
    .test information a:hover{
        width: 210px;
        text-decoration: none!important;
        float: left;
        padding: 25px 0 25px 20px;
        text-transform: uppercase;
        color:#3979b5!important;
        font-size:17px;
        text-align:left;
        transition: all 0.5s ease;
        background: url('img/inf_h.png');
        background-repeat: no-repeat;
         background-position: 175px; 
    }
</style>

<h4>Verwaltungsbereich</h4>
Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sceso
Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sceso
Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sceso
Cras sit amet nibh libero, in gravida nulla. Nulla vel metus sce 
Ich hab kein Bock mehr. Tschüss. DONE SO DONE. ICH WILL NICHT MEHR. 

<br><br>

<table style="margin-left: 100px;">
    <tr>
    <td><div class="test"><information><a href="/gallery-portraits">Informationen verwalten</a></information></div></td>
 <td><div class="test"><thema_hochladen><a href="/gallery-portraits">Thema hochladen</a></thema_hochladen></div></td>
</tr>
 <tr>
 <td><div class="test"><uebersicht><a href="/gallery-portraits">Themen Übersicht</a></uebersicht></div></td>
 <td><div class="test"><report><a href="/gallery-portraits">Report erstellen</a></report></div></td>
</tr>
</table>

 
<?php
include 'navi.php';
include("footer.php");
?>

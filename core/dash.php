<?php

$html = <<<EOF


<html>
   <head>
      <!-- Material Design fonts -->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
      <!-- Bootstrap -->
      <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
      <!-- Bootstrap Material Design -->
      <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-material-design.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/ripples.min.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/jquery.dropdown.css">
      <!-- Bootstrap.js -->
      <script src="../assets/js/bootstrap.min.js"></script>
      <!-- Dropdown.js -->
      <script src="../assets/js/jquery.dropdown.js"></script>
      <!-- Material.js -->
      <script src="../assets/js/material.js"></script>

      <script>
         $.material.init()
      </script>

      <script>

        function printAlert() {

          alert("CIAO");
        }
      </script>
   </head>
   <body>
      <div class="navbar navbar-default">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="javascript:void(0)"><strong>Cerberus</strong></a>
            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="https://github.com/EpsilonOrionis/Cerberus" target="_blank">Github</a></li>
                  <li><a href="javascript:history.back()">Logout</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div style="position: fixed; bottom: 0; right: 0;">
         <a href="" onclick="printAlert()" style="float: right; margin-right: 60px; margin-bottom: 40px;" class="btn btn-primary btn-fab">
            <i class="material-icons">create</i>
            <div class="ripple-container"></div>
         </a>
      </div>
   </body>
</html>



EOF;

echo $html;
?>

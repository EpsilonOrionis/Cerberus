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

      <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

      <!-- GRIDSTACK.JS -->
      <link rel="stylesheet" href="../assets/dist/gridstack.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.5.0/lodash.min.js"></script>
      <script src="../assets/dist/gridstack.js"></script>
      <script src="../assets/dist/gridstack.jQueryUI.js"></script>

      <style type="text/css">
          .grid-stack {
              background: #2c3e50;
          }

          .grid-stack-item-content {
              color: #2c3e50;
              text-align: center;
              background-color: #FFFFFF;
          }
      </style>


      <script type="text/javascript">

        $(function () {
            var options = {
                // turns animation on
                animate: true,
                cellHeight: 80,
                verticalMargin: 10
            };
            $('.grid-stack').gridstack(options);
        });
</script>

    <!--  <script>
         $.material.init()
      </script>-->

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

      <div class="grid-stack" data-gs-width="12">
	<div class="grid-stack-item" data-gs-x="0" data-gs-y="0" data-gs-width="4" data-gs-height="2"><div class="grid-stack-item-content"></div></div>
	<div class="grid-stack-item" data-gs-x="4" data-gs-y="0" data-gs-width="4" data-gs-height="4"><div class="grid-stack-item-content"></div></div>
	<div class="grid-stack-item" data-gs-x="8" data-gs-y="0" data-gs-width="2" data-gs-height="2" data-gs-min-width="2" data-gs-no-resize="yes"><div class="grid-stack-item-content"> <span class="fa fa-hand-o-up"></span> Drag me! </div></div>
	<div class="grid-stack-item" data-gs-x="10" data-gs-y="0" data-gs-width="2" data-gs-height="2"><div class="grid-stack-item-content"></div></div>
	<div class="grid-stack-item" data-gs-x="0" data-gs-y="4" data-gs-width="2" data-gs-height="2"><div class="grid-stack-item-content"></div></div>
	<div class="grid-stack-item" data-gs-x="2" data-gs-y="4" data-gs-width="2" data-gs-height="4"><div class="grid-stack-item-content"></div></div>
	<div class="grid-stack-item" data-gs-x="8" data-gs-y="4" data-gs-width="4" data-gs-height="2"><div class="grid-stack-item-content"></div></div>
	<div class="grid-stack-item" data-gs-x="0" data-gs-y="6" data-gs-width="2" data-gs-height="2"><div class="grid-stack-item-content"></div></div>
	<div class="grid-stack-item" data-gs-x="4" data-gs-y="6" data-gs-width="4" data-gs-height="2"><div class="grid-stack-item-content"></div></div>
	<div class="grid-stack-item" data-gs-x="8" data-gs-y="6" data-gs-width="2" data-gs-height="2"><div class="grid-stack-item-content"></div></div>
	<div class="grid-stack-item" data-gs-x="10" data-gs-y="6" data-gs-width="2" data-gs-height="2"><div class="grid-stack-item-content"></div></div>
</div>
   </body>
</html>



EOF;

echo $html;
?>

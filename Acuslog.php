<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Acus</title>   
    <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">   
    <link href="Login.css" rel="stylesheet"> 
	<link href="Acus.css" rel="stylesheet">	
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	<script src="Functies.js"></script>
 
  </head>

  <body>
  
	<?php
	// Connect met php bestand
	require "Sql.php";
	?>




			<!-- Modals -->
			<div class="modal fade" id="Rooster" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  data-backdrop="static" >
				<div class="modal-dialog">
					<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<div class="modal-header">
						
							<h2 class="modal-title" id="myModalLabel">Roosters</h2>
						</div>
						<div class="modal-body">
							<h3>Deze link leidt naar de nova roosters:
								<a href="http://www.novaprojecten.nl/roosters/lbl/basis/default.htm">Roosters</a></h3>
							<h3>
								INFORMATIE HIER BLOEDHONDEN<br>
								INFORMATIE HIER BLOEDHONDEN<br>
								INFORMATIE HIER BLOEDHONDEN<br>
								INFORMATIE HIER BLOEDHONDEN<br>
								INFORMATIE HIER BLOEDHONDEN<br>
								INFORMATIE HIER BLOEDHONDEN<br>
								INFORMATIE HIER BLOEDHONDEN<br>
								INFORMATIE HIER BLOEDHONDEN<br>
								INFORMATIE HIER BLOEDHONDEN<br>
								INFORMATIE HIER BLOEDHONDEN<br>
								INFORMATIE HIER BLOEDHONDEN<br>
								INFORMATIE HIER BLOEDHONDEN<br>
								INFORMATIE HIER BLOEDHONDEN<br>
								INFORMATIE HIER BLOEDHONDEN<br>
								INFORMATIE HIER BLOEDHONDEN<br>
								INFORMATIE HIER BLOEDHONDEN<br>
							</h3>
						

                </div>
              </div>
            </div>
          </div>

       



      <!-- Static navbar -->
      <nav class="navbar navbar-default " role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/Acus/Acus.php"></span><span class="glyphicon glyphicon-random"> Acus</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

            	<!-- Welkom -->
									<li class="dropdown">
										<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user"> Login <span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
										<li class="logtop">Login</li>
									
									    <?php
									                  include('login.php'); // Includes Login Script
									                  ?>
																		                  <form class="form-horizontal" action="" method="post">
									                  <div class="form-group">
									                    <label for="inputEmail3" class="col-sm-2 control-label">Naam</label>
									                    <div class="col-sm-10">
									                      <input class="form-control" id="name" name="username" placeholder="username" type="text">
									                    </div>
									                  </div>
									                  <div class="form-group">
									                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
									                    <div class="col-sm-10">
									                      <input class="form-control" id="password" name="password" placeholder="**********" type="password">
									                    </div>
									                  </div>
									                  <div class="form-group">
									                    <div class="col-sm-offset-2 col-sm-10">
									                      <div class="checkbox">
									                      </div>
									                    </div>
									                  </div>
									                  <div class="form-group" style="margin-left: 170px; margin-top: -30px;">
									                    <div class="col-sm-offset-2 col-sm-10">
									                      <button type="submit" name="submit" class="btn btn-default" value=" Login ">Login</button>
									                 <span> <?php echo $error; ?> </span>
									                    </div>
									                  </div>
									                </form>
													</li>
									</ul>
									<li class="dropdown">
										<a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
											
											<li class="dropdown-header"><h4>Aanpassings Menu</h4></li>
											<li class="divider"></li>
											<li><a href="#"><h4><span class="glyphicon glyphicon-pencil">  Kopje Bewerken</h4></a></li>
											<li><a href="#"><h4><span class="glyphicon glyphicon-trash">  Kopje Verwijderen</h4></a></li>
											<li><a href="logout.php"><h4><span class="glyphicon glyphicon-user">  Uitloggen</h4></a></li>

									                  <!-- table voor inlog -->
									                  <?php
									                  include('login.php'); // Includes Login Script
									                  ?>

									                  <!-- End Table -->
										</ul>
									</li>
								</ul>
							</div><!--/.nav-collapse -->
						</div><!--/.container-fluid -->
					</nav>

					<!-- Main component for a primary marketing message or call to action -->

				<div class="container">
			
				
				<div class="row">
				<div class="col-md-4">
					<button type="button" class="btn btn-info btn-lg knop " data-toggle="modal" data-target="#Printer"> <span class="glyphicon glyphicon-print"></br>Printers</button>
				</div>
				<div class="col-md-4">
					<button type="button" class="btn btn-info btn-lg knop " data-toggle="modal" data-target="#Rooster"><span class="glyphicon glyphicon-list-alt"></br>Roosters</button>
				</div>
				<div class="col-md-4">
					<button type="button" class="btn btn-info btn-lg knop " data-toggle="modal" data-target="#Office"><span class="glyphicon glyphicon-th-large"></br>Office</button>
				</div>
				<div class="col-md-4">
					<button type="button" class="btn btn-info btn-lg knop " data-toggle="modal" data-target="#Ziekmelden"><span class="glyphicon glyphicon-plus"></br>Ziekmelden</button>
				</div>

				<div class="col-md-4">
					<button type="button" class="btn btn-info btn-lg knop " data-toggle="modal" data-target="#Prog"><span class="glyphicon glyphicon-folder-open"></br>Programma's</button>
				</div>
				<div class="col-md-4">
					<button type="button" class="btn btn-info btn-lg knop" data-toggle="modal" data-target="#Docent"><span class="glyphicon glyphicon-user"></br>Docenten</button>
				</div>


            </div>

			<!-- De Plus button Voor als je ingelogd bent -->
				
				<div class="row">
                <div class="col-md-4">
				<button type="button" class="btn btn-success btn-lg add "><span class="glyphicon glyphicon-plus"></br></button>
                </div>
				</div>     
					
				<footer class="footer">

				<div class="container">
				<p class="text-muted">

								Place sticky footer content here.

				</p>
				</div>
				</footer>
            
            
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="Bootstrapjs/bootstrap.min.js"></script>
    <script src="Bootstrap/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
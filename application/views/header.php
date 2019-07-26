<html>
    <head>
        <title>Лио</title>
        <?php
        	echo '<script type="text/javascript" src="'.base_url().'assets/bootstrap/jquery-3.3.1.js" charset="UTF-8"></script>';
        	echo '<link rel="stylesheet" href="'. base_url() . 'assets/bootstrap/bootstrap.min.css" />';
        	echo '<script type="text/javascript" src="'.base_url().'assets/bootstrap/bootstrap.js" charset="UTF-8"></script>';
        ?>
    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-1 pr-3" style="min-height:40px">
	  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarColor03">
	  </div>
	</nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand ml-3" href="#">Лио</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor01">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="#">Насловна</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Претрага</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Обавештења</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Контакт</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="row mb-5 mt-1 mr-0 ml-0">
	    <div class="col-sm-10 offset-sm-1" >
	    		<?php
	    			echo '<img src=" ' . base_url() . 'assets/images/book.jpg" class="img-fluid" />';
	    		?>
	    </div>
	</div>
    <body>
    	<div class="container body-content">

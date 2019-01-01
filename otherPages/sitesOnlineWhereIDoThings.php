<!doctype html>
<html lang="en">
  <head>
	<?php require '/home/public/head.php';?>
    <title>Sites Online Where I Do Things</title>
	<style>
    div.col-xs-4, div.col-lg-4 {
      border: 1px solid rgb(255,187,255); 
      padding: 3em;
    }
    </style>
  </head>
  <body>
    <div class="header-container">
      <header class="wrapper clearfix">
        <h1 class="title">Sites Online Where I Do Things</h1>
      </header>
    </div>

    <div class="main-container container-fluid">
      <nav>
		<?php require '/home/public/navBarTemplate.php';?>
	  </nav>
	  <!-- all right, 11/22/2018, Thanksgiving, the goal is to start putting together a fun collection of I guess divs
	  that are going to do fun animation thingies when I run a cursor over them or maybe when I click them. we shall see.
	  anyway, starting this today with the help of this great reference online: https://cssreference.io/ I should mention this in the journal
	  in an entry for today. :) -->
	  <!--first row of columns--><h2>still used at least sometimes</h2>
	  <div class="row">
	    <div class="col-xs-4 col-lg-4">
		  <h3>work</h3><!--a column for work-->
		  <div class="row"><a href="https://learn.freecodecamp.org/">freecodecamp</a></div>
          <div class="row"><a href="https://www.codecademy.com">codecademy</a></div>
          <div class="row"><a href="https://projecteuler.net/">project euler</a></div>
	      <div class="row"><a href="https://www.codingame.com/start">codingame</a></div>			  
		  <div class="row"><a href="https://unity3d.com/learn/tutorials/projects/interactive-tutorials/play-edit-mode?playlist=49382">exciting unity tutorial for super beginners like myself</a></div>
		</div>
		
		<div class="col-xs-4 col-lg-4">
		  <h3>play</h3><!--a column for play-->
		  <div class="row">
		    <h4>learning for both fun AND professional growth!</h4>
		    <div class="row"><a href="https://www.udemy.com/">udemy</a></div>
		    <div class="row"><a href="https://github.com/">github</a></div>
		    <div class="row"><a href="https://www.w3schools.com/bootstrap/bootstrap_grid_basic.asp">w3schools for all things; this happens to be specific to bootstrap</a></div>
		    <div class="row"><a href="https://public.tableau.com/profile/lisa.martinez3656#!/">tableau public</a></div>
			
			<h4>games</h4>
		    <div class="row"><a href="https://store.steampowered.com/">steam gamin'</a></div>
		    <div class="row"><a href="http://www.digyourowngrave.com/">dig your own grave</a></div>
		    <div class="row"><a href="https://www.newgrounds.com/portal/view/218789">the bill cosby fun game</a></div>
		  </div>
		</div>
		
        <div class="col-xs-4 col-lg-4">	
	      <h3>food</h3><!--a column for food-->
		  <div class="row">
			<div class="col-xs-4 col-lg-4"><!--first of three columns of food sites-->
			<h4>sweets</h4>
		    <div class="row"><a href="https://www.cookiedelivery.com/">tiff's treats</a></div>
			</div>
			<div class="col-xs-4 col-lg-4"><!--second of three columns of food sites-->
			<h4>pizza</h4>
		      <div class="row"><a href="https://www.pizzahut.com/">pizza hut</a></div>
		      <div class="row"><a href="https://www.dominos.com/en/">dominos</a></div>
		      <div class="row"><a href="https://www.papajohns.com/">papa john's</a></div>
			</div>
			<div class="col-xs-4 col-lg-4"><!--third of three columns of food sites-->
			<h4>other</h4>
		      <div class="row"><a href="https://www.7-eleven.com/">seven eleven</a></div>
		      <div class="row"><a href="https://www.eat24.com/">eat24 & grubhub</a></div>
		      <div class="row"><a href="https://www.doordash.com/">doordash</a></div>
            </div>
		  </div>
		</div><!--third of three columns -->
	  </div>

      <!--second row of links--><h2>neglected but existent</h2>
	  <div class="row"><a href="https://martinezlisacs.wixsite.com/yosoyunagranartista">wix site I created to help with job applications previously</a></div>
	  <div class="row"><a href="https://yu-nguyen.livejournal.com">my old livejournal</a></div>
	  <div class="row"><a href="https://www.daniweb.com/members/205298/mallim">daniweb - a place for IT pros they say</a></div>
	  <div class="row"><a href="https://stackoverflow.com/users/7910604/mallim">stackoverflow!</a></div>
	  <div class="row"><a href="https://www.duolingo.com/LilDebi">duolingo</a></div>
	  <div class="row"><a href="https://data.world/lmmgitusername">data.world</a></div>
	  <div class="row"><a href="https://www.translate.com/">translate.com</a></div>
	  
	  <!--third row of links--><h2>likely lost for neglect</h2>
	  <div class="row"><a href="https://www.rev.com/">rev</a></div>
	  <div class="row"><a href="https://www.habbo.com/">habbo hotel</a></div>
	  <div class="row"><a href="https://www.writing.com/">writing.com</a></div>
		  
    </div> <!-- #main-container -->

    <footer>
	  <?php require '/home/public/footer.php';?>
    </footer>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

  </body>
</html>

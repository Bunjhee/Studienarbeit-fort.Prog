<?php
   include ("includes/header.php");
?>




    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/slide1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Mountain Bike tracks</h1>
              <p>All Tracks you need to know!</p>
              <p><a class="btn btn-lg btn-primary" href="addPoint.php" role="button">Add Place</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Best Surfing places</h1>
              <p>Blue water and White beaches</p>
              <p><a class="btn btn-lg btn-primary" href="addPoint.php" role="button">Add Place</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Drive with the Sun! Longboarding</h1>
              <p>The Best Longboarding Tracks for you!</p>
              <p><a class="btn btn-lg btn-primary" href="addPoint.php" role="button">Add Place
              </a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          
          
         
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          
         
        
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          
         
          
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Set up your Points.<br> <span class="text-muted">Add Points for you and your friends</span></h2>
          <p class="lead">Sign in Today and Add your Friends, to show them your best Places!</p>
        </div>
        <div class="col-md-5">
          <a href="addPoint.php"><img class="ima" src="img/TrackPSD.jpg" alt="Generic placeholder image"></a>
        </div>
      </div>

      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-5">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted"></span></h2>
          <p class="lead"></p>
        </div>
      </div>
      <div class="row featurette">
      </div>
   


      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        
        <p>Philipp Böcher || Ralph Grünwald</p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
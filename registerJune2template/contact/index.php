<!DOCTYPE html>
<html>
    <head>
  <title>Ace in the Hole Multisport</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="../css/reset.css" rel="stylesheet">
      <link href="../css/generic.css" rel="stylesheet">
      <link href="../style.css" rel="stylesheet">
      <link href="../css/bootstrap.css" rel="stylesheet">
     <link href="../css/pushy.css" rel="stylesheet">
     <link href="../css/demo.css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="../js/navigation.js"></script>
    <script src="../js/pushy.js"></script>
        <script src="../js/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
    <body>
    <?php include '../includes/header.inc.html.php'; ?>
<!--<header>
    
        <article class="site-header push">Go Race With the Pros
   
    </article>

        <!-- Pushy Menu -->
        <!--<nav class="pushy pushy-left" data-focus="#first-link">
            <div class="pushy-content">
                <ul>
                    <li class="pushy-submenu">
                        <button id="first-link">Submenu 1</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Item 1</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button>Submenu 2</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Item 1</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button>Submenu 3</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Item 1</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button>Submenu 4</button>
                        <ul>
                            <li class="pushy-link"><a href="#">Item 1</a></li>
                            <li class="pushy-link"><a href="#">Item 2</a></li>
                            <li class="pushy-link"><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                    <li class="pushy-link"><a href="#">Item 1</a></li>
                    <li class="pushy-link"><a href="#">Item 2</a></li>
                    <li class="pushy-link"><a href="#">Item 3</a></li>
                    <li class="pushy-link"><a href="#">Item 4</a></li>
                </ul>
            </div>
        </nav>
    </header>-->
<main>   
    <section>    
        <div class="container text-center">    
              <div class="row">
                   <div class="col-sm-3">
                        <figure class="AIH"></figure>
                        <!-- Menu Button -->
                        <div class="site-overlay"></div>
                        <button class="menu-btn">&#9776; Menu</button> 
                    </div>
                <div class="col-sm-9">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel" data-slide-to="1"></li>
                                </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                              <div class="item active">
                                <img src="../images/whitestairscropped.JPG" alt="stairs">
                                <div class="carousel-caption">
                                  <h3>Running</h3>
                                  <p>On Stairs</p>
                                </div>      
                              </div>

                              <div class="item">
                                <img src="../images/street.JPG" alt="street">
                                <div class="carousel-caption">
                                  <h3>Running</h3>
                                  <p>On the Streets</p>
                                </div>      
                              </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                        </div>
                  </div>
            </div>
        </div>
    </section>
        <section>
            <div class="container text-center">    
          <br>
              <div class="row">
                    <div class="col-sm-3">
                      <img src="../images/colorwater.jpg" class="img-responsive" style="width:100%" alt="Image">
                      <p>Get Registered</p>
                    </div>
                    <div class="col-sm-3"> 
                      <img src="../images/bikecroppedmed.png" class="img-responsive" style="width:100%" alt="Image">
                      <p>Get Prepared</p>    
                    </div>
                    <div class="col-sm-3">
                      <img src="../images/womenswim.JPG" class="img-responsive" style="width:100%" alt="Image">
                      <p>Get Course Details</p>    
                    </div>
                       <div class="col-sm-3">
                      <img src="../images/runningcropped.JPG" class="img-responsive" style="width:100%" alt="Image">
                      <p>Get Results and Photos</p>    
                    </div>

                </div>
            </div> 
    </section>
        <section>
<div id="bring" class="container-fluid text-center">   
  <div class="row">
      <div class="col-sm-11 col-sm-offset-1">
      <form action="" method="POST" enctype="multipart/form-data">
                         <h3>Contact Us</h3>
            <input name="action" value="submit" type="hidden"> Your name:<br>
            <input name="name" size="30" type="text"><br> Your email:<br>
            <input name="email" size="30" type="text"><br> Your message:<br>
            <textarea name="message" rows="7" cols="30">
            </textarea><br>
            <input value="Send email" type="submit">
            </form> 
        </div>
    </div>
</div>
                        <!--</div>
                    </div>
                </div>-->
        </section>
      </main> 
        <?php include '../includes/footer.inc.html.php'; ?>
        <!--<footer class="container-fluid text-center">
              <div class="row">
                    <div class="col-sm-2 col-sm-offset-2">
                    <p>Navigation Menu</p>
                </div>

                    <div class="col-sm-2 col-sm-offset-2">
                        <p>Social Media</p>
                    </div>

                    <div class="col-sm-2 col-sm-offset-2">
                <p>Contact</p>
                    </div>
                </div>        
        </footer>
        <!-- Pushy JS -->
        <script src="../js/pushy.min.js"></script>

    </body>
</html>

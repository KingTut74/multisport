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
       <link href="../css/jquery.dataTables.min.css" rel="stylesheet">   
       
         <link href="../css/jquery-ui.theme.min.css" rel="stylesheet">   
        <link href="../jquery.dataTables_themeroller.css" rel="stylesheet">   
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="../js/navigation.js"></script>
    <script src="../js/pushy.js"></script>
        <script src="../js/jquery.min.js"></script>
    <script src="../js/scripts2.js"></script>
       <script src="../js/jquery.dataTables.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/js/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99921184-1', 'auto');
  ga('send', 'pageview');

</script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
    <body>
    <?php include '../includes/header.inc.html.php'; ?>

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
    <body>
        
<div class="container-fluid text-center">   
      <div class="row">
        <div class="col-sm-12">
            <h3>Race Results</h3>
            <table id="book-grid">
	<thead>
		<tr>
			<th>Bib Number</th>
			<th>Name</th>
			<th>City, State</th>
			<th>Sex</th>
			<th>Age</th>
            <th>Chip Time</th>
			<th>Overall Place</th>
		</tr>
	</thead>
	<tbody>
		
		<tr>
			<td>708</td>
			<td>Robblee, Megan</td>
			<td>Bothell, WA</td>
			<td>Female</td>
			<td>27</td>
            <td>42:20:00</td>
			<td>2/551</td>
		</tr>
		<tr>
			<td>355</td>
			<td>Norris, Laura</td>
			<td>Snohomish, WA</td>
			<td>Female</td>
			<td>40</td>
            <td>46:23:00</td>
			<td>11/551</td>
		</tr>
		
		<tr>
			<td>307</td>
			<td>Stillwell, Jake</td>
			<td>Mill Creek, WA</td>
			<td>Male</td>
			<td>53</td>
            <td>47:59:00</td>
			<td>3/100</td>
		</tr>
		<tr>
			<td>163</td>
			<td>Rodgers, Joleen</td>
			<td>Lake Stevens, WA</td>
			<td>Female</td>
			<td>13</td>
            <td>48:34:00</td>
			<td>6/81</td>
		</tr>
		
		<tr>
			<td>685</td>
			<td>Rodgers, Cheyenne</td>
			<td>Mukiteo, WA</td>
			<td>male</td>
			<td>25</td>
            <td>50:55:00</td>
			<td>4/54</td>
		</tr>
		
		<tr>
			<td>367</td>
			<td>Bernhardt, Randi</td>
			<td>Vashon, WA</td>
			<td>male</td>
			<td>31</td>
            <td>50:23:00</td>
			<td>3/54</td>
		</tr>
		<tr>
			<td>708</td>
			<td>Robblee, Megan</td>
			<td>Bothell, WA</td>
			<td>Female</td>
			<td>27</td>
            <td>42:20:00</td>
			<td>2/551</td>
		</tr>
		<tr>
			<td>355</td>
			<td>Norris, Laura</td>
			<td>Snohomish, WA</td>
			<td>Female</td>
			<td>40</td>
            <td>46:23:00</td>
			<td>11/551</td>
		</tr>
		
		<tr>
			<td>307</td>
			<td>Stillwell, Jake</td>
			<td>Mill Creek, WA</td>
			<td>Male</td>
			<td>53</td>
            <td>47:59:00</td>
			<td>3/100</td>
		</tr>
		<tr>
			<td>163</td>
			<td>Rodgers, Joleen</td>
			<td>Lake Stevens, WA</td>
			<td>Female</td>
			<td>13</td>
            <td>48:34:00</td>
			<td>6/81</td>
		</tr>
		
		<tr>
			<td>685</td>
			<td>Rodgers, Cheyenne</td>
			<td>Mukiteo, WA</td>
			<td>male</td>
			<td>25</td>
            <td>50:55:00</td>
			<td>4/54</td>
		</tr>
		
		<tr>
			<td>367</td>
			<td>Bernhardt, Randi</td>
			<td>Vashon, WA</td>
			<td>male</td>
			<td>31</td>
            <td>50:23:00</td>
			<td>3/54</td>
		</tr>
		<tr>
			<td>708</td>
			<td>Robblee, Megan</td>
			<td>Bothell, WA</td>
			<td>Female</td>
			<td>27</td>
            <td>42:20:00</td>
			<td>2/551</td>
		</tr>
		<tr>
			<td>355</td>
			<td>Norris, Laura</td>
			<td>Snohomish, WA</td>
			<td>Female</td>
			<td>40</td>
            <td>46:23:00</td>
			<td>11/551</td>
		</tr>
		
		<tr>
			<td>307</td>
			<td>Stillwell, Jake</td>
			<td>Mill Creek, WA</td>
			<td>Male</td>
			<td>53</td>
            <td>47:59:00</td>
			<td>3/100</td>
		</tr>
		<tr>
			<td>163</td>
			<td>Rodgers, Joleen</td>
			<td>Lake Stevens, WA</td>
			<td>Female</td>
			<td>13</td>
            <td>48:34:00</td>
			<td>6/81</td>
		</tr>
		
		<tr>
			<td>685</td>
			<td>Rodgers, Cheyenne</td>
			<td>Mukiteo, WA</td>
			<td>male</td>
			<td>25</td>
            <td>50:55:00</td>
			<td>4/54</td>
		</tr>
		
		<tr>
			<td>367</td>
			<td>Bernhardt, Randi</td>
			<td>Vashon, WA</td>
			<td>male</td>
			<td>31</td>
            <td>50:23:00</td>
			<td>3/54</td>
		</tr>
		
		<tr>
			<td>708</td>
			<td>Robblee, Megan</td>
			<td>Bothell, WA</td>
			<td>Female</td>
			<td>27</td>
            <td>42:20:00</td>
			<td>2/551</td>
		</tr>
		<tr>
			<td>355</td>
			<td>Norris, Laura</td>
			<td>Snohomish, WA</td>
			<td>Female</td>
			<td>40</td>
            <td>46:23:00</td>
			<td>11/551</td>
		</tr>
		
		<tr>
			<td>307</td>
			<td>Stillwell, Jake</td>
			<td>Mill Creek, WA</td>
			<td>Male</td>
			<td>53</td>
            <td>47:59:00</td>
			<td>3/100</td>
		</tr>
		<tr>
			<td>163</td>
			<td>Rodgers, Joleen</td>
			<td>Lake Stevens, WA</td>
			<td>Female</td>
			<td>13</td>
            <td>48:34:00</td>
			<td>6/81</td>
		</tr>
		
		<tr>
			<td>685</td>
			<td>Rodgers, Cheyenne</td>
			<td>Mukiteo, WA</td>
			<td>male</td>
			<td>25</td>
            <td>50:55:00</td>
			<td>4/54</td>
		</tr>
		
		<tr>
			<td>367</td>
			<td>Bernhardt, Randi</td>
			<td>Vashon, WA</td>
			<td>male</td>
			<td>31</td>
            <td>50:23:00</td>
			<td>3/54</td>
		</tr>
		<tr>
			<td>708</td>
			<td>Robblee, Megan</td>
			<td>Bothell, WA</td>
			<td>Female</td>
			<td>27</td>
            <td>42:20:00</td>
			<td>2/551</td>
		</tr>
		<tr>
			<td>355</td>
			<td>Norris, Laura</td>
			<td>Snohomish, WA</td>
			<td>Female</td>
			<td>40</td>
            <td>46:23:00</td>
			<td>11/551</td>
		</tr>
		
		<tr>
			<td>307</td>
			<td>Stillwell, Jake</td>
			<td>Mill Creek, WA</td>
			<td>Male</td>
			<td>53</td>
            <td>47:59:00</td>
			<td>3/100</td>
		</tr>
		<tr>
			<td>163</td>
			<td>Rodgers, Joleen</td>
			<td>Lake Stevens, WA</td>
			<td>Female</td>
			<td>13</td>
            <td>48:34:00</td>
			<td>6/81</td>
		</tr>
		
		<tr>
			<td>685</td>
			<td>Rodgers, Cheyenne</td>
			<td>Mukiteo, WA</td>
			<td>male</td>
			<td>25</td>
            <td>50:55:00</td>
			<td>4/54</td>
		</tr>
		
		<tr>
			<td>367</td>
			<td>Bernhardt, Randi</td>
			<td>Vashon, WA</td>
			<td>male</td>
			<td>31</td>
            <td>50:23:00</td>
			<td>3/54</td>
		</tr>
		<tr>
			<td>708</td>
			<td>Robblee, Megan</td>
			<td>Bothell, WA</td>
			<td>Female</td>
			<td>27</td>
            <td>42:20:00</td>
			<td>2/551</td>
		</tr>
		<tr>
			<td>355</td>
			<td>Norris, Laura</td>
			<td>Snohomish, WA</td>
			<td>Female</td>
			<td>40</td>
            <td>46:23:00</td>
			<td>11/551</td>
		</tr>
		
		<tr>
			<td>307</td>
			<td>Stillwell, Jake</td>
			<td>Mill Creek, WA</td>
			<td>Male</td>
			<td>53</td>
            <td>47:59:00</td>
			<td>3/100</td>
		</tr>
		<tr>
			<td>163</td>
			<td>Rodgers, Joleen</td>
			<td>Lake Stevens, WA</td>
			<td>Female</td>
			<td>13</td>
            <td>48:34:00</td>
			<td>6/81</td>
		</tr>
		
		<tr>
			<td>685</td>
			<td>Rodgers, Cheyenne</td>
			<td>Mukiteo, WA</td>
			<td>male</td>
			<td>25</td>
            <td>50:55:00</td>
			<td>4/54</td>
		</tr>
		
		<tr>
			<td>367</td>
			<td>Bernhardt, Randi</td>
			<td>Vashon, WA</td>
			<td>male</td>
			<td>31</td>
            <td>50:23:00</td>
			<td>3/54</td>
		</tr>
		
		
	</tbody>
</table>
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

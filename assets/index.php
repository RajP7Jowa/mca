<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container-fluid">
         <h2 style="background-color: black; color: white; padding: 20px">Guru ramdash khalsha I.S.T Jabalpur (M.P.)</h2>
         <div class="row">
            <div class="col-md-7"  style="padding-bottom: 20px">
               <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                     <div class="item active">
                        <img src="images/topic.jpg" alt="Los Angeles" style="width:100%;">
                        <div class="carousel-caption">
                           <h3>Default image</h3>
                           <p>Static</p>
                        </div>
                     </div>
                     <div class="item">
                        <img src="images/topic.jpg" alt="Los Angeles" style="width:100%;">
                        <div class="carousel-caption">
                           <h3>Default image</h3>
                           <p>Static</p>
                        </div>
                     </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
            <div class="col-md-5">
               <div class="jumbotron " style="align:center; height:100%">
                  <h3><u> Author </u></h3>
                  <h1>Raj Parihar</h1>
                  <h3>Full stack Developer</h3>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4">
               <div class="list-group">
                  <div class="list-group-item active">PHP Topic</div>
                  <?php
                     $myfile = fopen("filedata.txt", "r");
                     while(!feof($myfile)) {
                       $linedata = fgets($myfile);
                       $array = explode("|", $linedata);
                      // print link
		   ?>
                  <a href="#" class="list-group-item" >
                      <?php echo $array[0]; ?>
                  </a>
                  <?php 
                     }
                     fclose($myfile);
                  ?>
               </div>
            </div>
            <div id="aaa" class="col-md-8" style="height:400px;overflow-x:scroll">
               <p id="gdata1">
               <h2>Heading </h2>
               <div>Description</div>
               <img src="images/topic.jpg" style="height: 100px; width: 150px">
               </p>
               <hr>
               <p id="gdata2">
               <h2>Heading2 </h2>
               <div>Description</div>
               <img src="images/topic.jpg" style="height: 100px; width: 150px">
               </p>
               <p id="gdata3">
               <h2>Heading3 </h2>
               <div>Description</div>
               <img src="images/topic.jpg" style="height: 100px; width: 150px">
               </p>
               <p id="gdata4">
               <h2>Heading4 </h2>
               <div>Description</div>
               <img src="images/topic.jpg" style="height: 100px; width: 150px">
               </p>
               <p id="gdata5">
               <h2>Heading5 </h2>
               <div>Description</div>
               <img src="images/topic.jpg" style="height: 100px; width: 150px">
               </p>
               <p id="gdata6">
               <h2>Heading6 </h2>
               <div>Description</div>
               <img src="images/topic.jpg" style="height: 100px; width: 150px">
               </p>
            </div>
         </div>
      </div>
      </div>
   </body>
</html>
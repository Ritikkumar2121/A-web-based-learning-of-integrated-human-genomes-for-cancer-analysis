<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "project";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

// return $conn;

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

      <style type="text/css">


.ed{
  text-align: center;

}
.rg{
  float:right;
  margin-top: -30px;
  margin-right: 5px;
}
      .bd-placeholder-img {
           font-size: 1.125rem;
           text-anchor: middle;
           -webkit-user-select: none;
           -moz-user-select: none;
           -ms-user-select: none;
           user-select: none;
         }

         @media (min-width: 768px) {
           .bd-placeholder-img-lg {
             font-size: 3.5rem;
           }
         }
      hr {
                 position: relative;
                 top: -25px;
                 border-color: yellow;
                 border-width:3px;

                 height: 12px;
                 background: black;
                 margin-bottom: 50px;
             }
      .cont {
          font-weight: bold;
        font-family: "Times New Roman", Times, serif;
            color:black;
            font-size: 30px;

      }
      .cont1 {
          font-weight: bold;
        font-family: "Times New Roman", Times, serif;
            color:yellow;
            background-color: black;
            font-size: 30px;
              margin-bottom: 45px;
              margin-top:55px;
      }




      html {

          background: url(https://images.unsplash.com/photo-1528460033278-a6ba57020470?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1575&q=80) no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;

          }
          	p{
	font-size:20px;

}
.fa {
  padding: 20px;
  font-size: 30px;
  width: auto;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
	.checkbox label{
	font-size:15px;
	}
          body {

              background: none;
              color: black;

          }

          #logInForm {

              display:none;

          }

          .toggleForms {

              font-weight: bold;

          }
          .jumbotron {
    background: none
}
.ri{
margin-top: -80px;
  //color:yellow;

}
          #diary {

              width: 100%;
              height: 100%;

          }

	#pro{
	margin-top:-40px;
	}
  .serif {
  font-family: "Times New Roman", Times, serif;
}
.hr1{
  position: relative;
  top: -10px;
  border-color: yellow;
  border-width:2px;
margin-left: 300px;
margin-right: 300px;
  height: 8px;
  background: black;
  margin-bottom: 50px;
}
.rg1{
  margin-top: -65px;
}
a:hover{
  color:black;
}



      </style>
  </head>
  <body>






<hr>

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body>


<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="cont ri">LOCATION WISE SEARCHING </h1>
      <hr class="hr1">
      <p class="cont1">View Gene name and Gene Type that falls in your given range.<span ><p><p></span><p>
        <form method="post" action="output.php?action=loc">
          <div class="form-group">
            <label for="chrom">Chrom</label>
            <input type="text" name="chrome" class="form-control" id="chrom" aria-describedby="emailHelp" placeholder="Chrom">

          </div>
          <div class="form-group">
            <label for="startcoordinate">Start Coordinate</label>
            <input type="text" name="start" class="form-control" id="startcoordinate" placeholder="Start coordinate">
          </div>
          <div class="form-group">
            <label for="endcoordinate">End Coordinate</label>
            <input type="text" name="end" class="form-control" id="endcoordinate" placeholder="End Coordinate">
          </div>

          <button name="location" type="submit" class="btn btn-success">Submit</button>
        </form>



      




     </form>

      </p>
    </div>
  </section>



</body>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>


  <!-- Footer -->


    <!-- Footer Elements -->

    <!-- Footer Elements -->
</body>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:Ritik Singh

    </div>

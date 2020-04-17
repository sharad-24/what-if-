<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}

?>

<!doctype html>
<html lang="en">
  <head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155058741-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-155058741-2');
    </script>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>COVID-19 Dashboard</title>
    <meta name="description" content="Coronavirus (COVID-19) dashboard to show the dynamics of Сoronavirus distribution per country">
    <meta name="author" content="Oleksii Trekhleb">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/4add81f750.js" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    >
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
      crossorigin="anonymous"
    >
    <link rel="stylesheet" href="./css/index.css">
  </head>
  <style>
  	.button {
  		font-family: cursive;
  background-color: #309ccf;
  border-radius: 15px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 3px 24px;
  cursor: pointer;
}
  </style>

  <body>
  	<hr class=".col-xs-6 mx-auto pt-0.9" style="background-color:  #2DB1FE; width: 85%">
    <iframe src="https://webchat.snatchbot.me/53bd53ae40b0a333048d76d3ba043cc1266670e6f2a85df19eddafd4af1402b8" allow="microphone *" height="400" width="1200" style="margin: 30px;"></iframe>

  	
  	  
  	  <hr class=".col-xs-6 mx-auto pt-0.9" style="background-color:  #2DB1FE; width: 85%">
    <div class="container-fluid">
      <div class="row mb-1">
        <div class="col-sm">
          <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="navbar-brand mb-0 h1">
              <i class="fas fa-chart-bar"></i> <a class="navbar-brand" href="https://trekhleb.github.io/covid-19/">COVID-19 Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="https://www.arcgis.com/apps/opsdashboard/index.html#/bda7594740fd40299423467b48e9ecf6">
                    <i class="fas fa-globe-americas"></i> JHU Dashboard
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="row mb-1">
        <div class="col-sm">
          <div id="root"></div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-sm">
        
        </div>
      </div>
    </div>

    <!-- Load dependencies. -->
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
<!--    <script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin></script>-->
<!--    <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin></script>-->

    <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/papaparse@5.1.1/papaparse.min.js" crossorigin></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin></script>

    <!-- Load custom scripts. -->
    <script src="js/utils.js"></script>
    <script src="js/data.js"></script>
    <script src="js/index.js"></script>
 <a href="https://www.google.com/maps/search/government+hospitals/@28.8612306,76.6190749,11z/data=!3m1!4b1" class="button">Hospitals</a>
  <a href="https://www.google.com/maps/search/testing+labs/" class="button">Testing lab</a>
   <a href="fre.html" class="button">Frequently ask questions</a>
    <a href="contact.html" class="button">Other Health Issue</a>
    <a href="https://paytm.com/helpinghand/pm-cares-fund" class="button">Donation</a>
<a href="index.php?logout=true" class="button">Logout</a>
 <hr class=".col-xs-6 mx-auto pt-0.9" style="background-color:  #2DB1FE; width: 85%">
  </body>
</html>




<?php
  echo "<script>console.log('test');</script>";
  //  if(isset($_GET['id']){
  //    $id = $_GET['id'];
  //    //echo $id;
  // //   echo "<script>console.log($id);</script>";
  //  }
?>
<!DOCTYPE html>
<html>
<?php
    $id = $_GET['id'];
    echo "<script>console.log($id);</script>";
?>
<head>
	<title>UEFA Champions League</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UEFA Champions League Legends" />
    <meta name="keywords" content="UEFA, Champions League, Soccer, Legends, Teams, Games"/> 

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,800' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.custom.js"></script>

</head>
<body>
<div class="container">

<!-- /////////////////////    
//      Navigation      //
////////////////////// -->  
<nav class="navbar navbar-default">
    <!-- Logo and Menu icon -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><img src="img/logo.png"></a>
    </div>

    <!-- Dropdown menu -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">2016 Results</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Legendary Teams<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="team.php?id=0">Real Madrid</a></li>
            <li><a href="team.php?id=1">FC Barcelona</a></li>
            <li><a href="team.php?id=2">Bayern Munich</a></li>
            <li><a href="team.php?id=3">Liverpool</a></li>
            <li><a href="team.php?id=4">Inter</a></li>
            <li><a href="team.php?id=5">Milan</a></li>
          </ul>
        </li>
      </ul>
    </div>
</nav>


<!-- /////////////////////    
//        Banner        //
////////////////////// -->
<div class="jumbotron" id="texture">
<div class="row banner">
  
</div>
</div>



<!-- /////////////////////    
//   Rosters           //
////////////////////// -->  
<div class="row center">       
	<div class="col-xs-12 col-md-12 col-lg-12">
		<h2>ROSTERS</h2>
		<p>Check out the players who won a championship for Real Madrid and what year they won.</p>
    <img src="img/dots.jpg">
	</div>
</div>

<!-- /////////////////////    
//    Team Players     //
////////////////////// --> 
<div class="team"> 

  <div class="row center">       
    <div class="col-xs-12 col-md-12 col-lg-12">
      <h2>2014 Championship Team Roster</h2>
    </div>
  </div>
<!-- Row of Players -->
<div class="row row-rosters">
<!--   <div class="col-xs-6 col-md-3 thumbnail">
      <img src="img/grey_box.jpg">
      <h3>Player Name (#)</h3>
          <p>Positon:</p>
          <p>Country:</p>
  </div>
    <div class="col-xs-6 col-md-3 thumbnail">
      <img src="img/grey_box.jpg">
      <h3>Player Name (#)</h3>
          <p>Positon:</p>
          <p>Country:</p>
  </div>
    <div class="col-xs-6 col-md-3 thumbnail">
      <img src="img/grey_box.jpg">
      <h3>Player Name (#)</h3>
          <p>Positon:</p>
          <p>Country:</p>
  </div>
    <div class="col-xs-6 col-md-3 thumbnail">
      <img src="img/grey_box.jpg">
      <h3>Player Name (#)</h3>
          <p>Positon:</p>
          <p>Country:</p>
    </a>
  </div> -->
</div>
<!-- Row of Players -->
<!-- <div class="row">
  <div class="col-xs-6 col-md-3 thumbnail">
      <img src="img/grey_box.jpg">
      <h3>Player Name (#)</h3>
          <p>Positon:</p>
          <p>Country:</p>
  </div>
    <div class="col-xs-6 col-md-3 thumbnail">
      <img src="img/grey_box.jpg">
      <h3>Player Name (#)</h3>
          <p>Positon:</p>
          <p>Country:</p>
  </div>
    <div class="col-xs-6 col-md-3 thumbnail">
      <img src="img/grey_box.jpg">
      <h3>Player Name (#)</h3>
          <p>Positon:</p>
          <p>Country:</p>
  </div>
    <div class="col-xs-6 col-md-3 thumbnail">
      <img src="img/grey_box.jpg">
      <h3>Player Name (#)</h3>
          <p>Positon:</p>
          <p>Country:</p>
    </a>
  </div>
</div> -->

</div> <!-- Close team roster section -->


<!-- /////////////////////    
//   Strategy          //
////////////////////// -->  
<div class="row center">       
  <div class="col-xs-12 col-md-12 col-lg-12">
    <h2>STRATEGY</h2>
    <p>View Real Madrid’s most frequently used formation.</p>
  </div>
</div>
<div class="row strategy"> 
   <div class="col-xs-12 col-md-12 col-lg-12">
    <img src="img/soccer_field.jpg">
  </div>
</div>
    
<!-- /////////////////////    
//      Team Logos      //
////////////////////// -->    
<div class="row center" id="fade">       
  <div class="col-xs-12 col-md-12 col-lg-12">
    <h2>Check Out More Teams</h2>
    <img src="img/dots.jpg">
  </div>
</div>

<div class="row teams" id="texture2">  
  <div class="row">     
      <div class="col-md-4 col-xs-12">
          <p><a href="#"><img src="img/real_madrid.png"></a></p>
      </div>
      <div class="col-md-4 col-xs-12">
          <p><a href="#"><img src="img/milan.png"></a></p>
      </div>
      <div class="col-md-4 col-xs-12">
          <p><a href="#"><img src="img/barcelona.png"></a></p>
      </div>
  </div>
  <div class="row">     
      <div class="col-md-4 col-xs-12">
          <p><a href="#"><img src="img/liverpool.png"></a></p>
      </div>
      <div class="col-md-4 col-xs-12">
          <p><a href="#"><img src="img/bayern.png"></a></p>
      </div>
      <div class="col-md-4 col-xs-12">
          <p><a href="#"><img src="img/inter.png"></a></p>
      </div>
  </div>
</div>

<!-- /////////////////////    
//   Game Results       //
////////////////////// -->  
<div class="row center" id="fade">       
  <div class="col-xs-12 col-md-12 col-lg-12">
    <h2>2016 Tournament Results</h2>
    <img src="img/dots.jpg">
    <h3>Quarter Final</h3>
  </div>
</div>
<div class="row results"> 
   <div class="col-xs-12 col-md-12 col-lg-12">
    <img src="img/results_1.jpg">
  </div>
</div>


   <footer>
        <p>&copy; UEFA Champions League Legends</p>
    </footer>
    
</div> <!-- Close Container --> 


 <!-- jQuery Plugins-->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src="http://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!-- Close jQuery Plugins-->
<style> 
.thumbnail{
  position: relative;
}
.thumbnail img.player-img{
  position: absolute;
  clip: rect(0px,235px,200px,0px);
}
.number{
  margin-top: 220px;
}
</style>
<script type="text/template" id="row-of-players">
  <div class="col-xs-6 col-md-3 thumbnail">
      <img src="img/{{image}}" class="player-img">
      <!-- <h3 class="number"># {{number}}</h3> -->
      <p class="number">{{position}} <strong>{{number}}</strong> <img src="{{country_image}}" width="20px"> {{name}}</p>
      
      <!-- <p>Positon:{{position}}</p> -->
      <!-- <p>Country:{{country}}</p> -->
      <!-- <p><img src=""></p> -->
  </div>

</script>

<script type="text/template" id="banner">
  <div class="col-xs-12 col-md-8 col-lg-8">
    <h1>{{banner_head}}</h1>
    <p>{{banner_content}}</p>
  </div>
  <div class="col-xs-12 col-md-4 col-lg-4" id="logo">
    <p><img src="img/{{banner_image}}"></p>
  </div>

</script>


  <script type="text/javascript">
    var mustacheTemplate = function(template,data){
    for(var key in data){
        if(data.hasOwnProperty(key) === false) continue;
        template = template.replace(RegExp('\{\{' + key + '}}', 'g'), data[key]);
    }
    return template;
}
  
function getData(url,id){
  $.ajax({
    url:url,
    dataType:"json"
  }).done(function(data){
    console.log(data);
    var banner = "";
    var rows = "";
    for(var i in data[id].rosters){
      rows +=  mustacheTemplate(
        $("#row-of-players").html(),data[id].rosters[i]
      );
    }
    banner +=  mustacheTemplate(
      $("#banner").html(),data[id]
    );

    $(".row-rosters").html(rows);
    $(".banner").html(banner);
  });
}

function showData(){

}

$(function(){
  var id = <?php echo $id; ?>;
  getData("data.json",id);
});
  </script>
</body>
</html>
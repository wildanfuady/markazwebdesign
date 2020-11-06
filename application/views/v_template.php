
<!DOCTYPE html>
<html lang="en">
<head>
<?php
  foreach ($instansi->result() as $row):
    ?>
  <title><?php echo $judul; ?> - <?php echo $row->nama_instansi; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link href="<?php echo base_url('foto/foto_instansi/'.$row->favicon_instansi); ?>" rel="shortcut icon" />
  <!-- CSS & Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
  <link href="<?php echo base_url('library/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('library/bower_components/metisMenu/dist/metisMenu.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('library/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('library/bower_components/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

  <!-- Custom Fonts -->
  <link href="css/style_user.css" rel="stylesheet" type="text/css">

  <style type="text/css">

    #testimoni{
      font-size: 24px;
      text-transform: none;
      color: #fff;
      font-weight: 600;
      margin-bottom: 30px;
      background-image: url('img/bg1.jpg');
    }
    #testimoni h2{
      text-transform: none;
      color: #fff;
    }
    #testimoni h4{
      text-transform: none;
      color: #fff;
    }
    #testimoni h5{
      text-transform: none;
      color: #fff;
    }

    .image {
      opacity: 1;
      display: block;
      width: 100%;
      height: auto;
      transition: .5s ease;
      backface-visibility: hidden;
    }

    .middle {
      transition: .5s ease;
      opacity: 0;
      position: absolute;
      top: 40%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%)
    }

    .thumb-image:hover .image {
      opacity: 0.3;
    }

    .thumb-image:hover .middle {
      opacity: 1;
    }

    .text {
      background-color: #337ab7;
      color: #fff;
      font-size: 16px;
      padding: 16px 32px;
    }

    .thumbs-image{
      background: url('img/drink800.jpg');
      background-size: 100%;
      color: #fff;
      overflow: hidden;
      margin: 0;
      padding: 0;
    }
    .image-description h1{
      padding-top: 250px;
      color: #fff;
      font-family: "arial";
      font-size: 20pt;
      text-align: center;
    }
    .image-description p{
      padding-bottom: 250px;
      color: #fff;
      font-family: "arial";
      font-size: 16pt;
      text-align: center;
    }

    .image-description a{
      color: #333;
      font-family: "arial";
      font-size: 16pt;
      text-align: center;
      box-sizing: 10px;
      border: 3px solid #dedede;
      padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 10px;
      padding-right: 10px;
      background: #fff;
    }

    .image-description a:hover{
      color: #337ab7;
      background: #fff;
      font-family: "arial";
      font-size: 16pt;
      text-align: center;
      box-sizing: 10px;
      border: 3px solid #dedede;
      padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 10px;
      padding-right: 10px;
      text-decoration-line: none;
    }

    footer .all{
      background-color: #333;
      color: #fff;
      list-style-type: none;
      border-top: 1px solid #333;
    }
    footer .all ul li{
      color: #fff;
      list-style-type: none;
      border-bottom: 1px solid #3c3c3c;
    }
    footer ul li a{
      color: #fff;
      overflow: hidden;

    }
    footer ul li a:hover{
      color: #A9A9A9;
      overflow: hidden;
      text-decoration: none;
      -o-transition: all 0.15s ease-in;
      -webkit-transition: all 0.15s ease-in;
      -moz-transition: all 0.15s ease-in;
      transition: all 0.15s ease-in;
      list-style-type: none; 
    }
    footer ul li a:hover, a:active{
      outline: 0;
      overflow: hidden;
      list-style-type: none;
    }
    footer ul h3 {
      border-bottom: 1px solid #fff;
      width: 100%; 
      overflow: hidden;
      color: #fff;
      -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box;
        box-sizing: border-box;
        list-style-type: none;
    }
    footer .footer2{
      position: relative;
      background: #2e2e2e;
      line-height: 35px;
      border-top: 1px solid #444;
      color: #ccc;
      padding: 15px 0;
    }
    .footer2 a{
      color: #fff;
    }
    .footer2 a:hover{
      color: #A9A9A9;
      overflow: hidden;
      text-decoration: none;
    }
    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      height: 50px;
      width: 50px;
      z-index: 99;
      border: none;
      outline: none;
      background-color: #337ab7;
      color: white;
      cursor: pointer;
      padding: 10px;
      border-radius: 10px;
    }

    #myBtn:hover {
      background-color: #555;
    }

    .isi {
      width: 1300px;
      margin: 0 auto;
    }

    .button {
      padding: 11px;
      background: transparent;
      color: #fff;
      border: 2px solid #fff;
      text-transform: uppercase;
      margin-top: 15px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.2s;
    }
    .button:hover {
      background: #fff;
      color: #333;
      transition: 0.2s;
    
  </style>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <div class="col-md-12">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <i class="fa fa-bars fa-3x"></i>
          </button>
          <a class="navbar-brand" href="<?php echo base_url('home', 'HOME'); ?>"><img src="<?php echo base_url('foto/foto_instansi/'.$row->logo_instansi); ?>" /></a>
        </div>
  <?php
  endforeach; // end instansi
  ?>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
          <?php 
          foreach ($menu->result() as $row) {
          ?>
            <li><a href="<?php echo base_url().$row->link_menu; ?>" ><?php echo $row->nama_menu; ?></a></li>
            <?php
          }
          ?>
          </ul>
        </div>
      </div>
    </nav>
  </div>

<!-- Main Content -->

<?php include "main_content.php"; ?>

<!-- Footer -->
<footer>
  <div class="col-md-12 all">
  <?php 
  foreach ($blok_footer->result() as $blok) {
    
    if($blok->blok1 == 111) {
      ?>
    	<div class="col-sm-3">
        <ul>
          <h3><?php echo $blok->nama_blok1; ?></h3><br />
            <?php
            foreach($second_menu1->result() as $s1) {
              ?>
          		<li><a href="<?php echo $s1->link_menu; ?>"><?php echo $s1->second_menu; ?></a></li>  
              <?php
              }
              ?>
        </ul>
    	</div>

    <?php

    } else if($blok->blok1 == 112) {
      ?>
      <div class="col-sm-3"> 
        <ul>
          <h3><?php echo $blok->nama_blok1; ?></h3><br />
           <?php
            foreach($social_media1->result() as $s1) {

              if($s1->status_facebook == "1"){
                echo "<li><a href='".$s1->link_facebook."'><i class='fa fa-facebook-square fa-fw'></i> ".$s1->nama_facebook."</a></li>";
              } else {}

              if($s1->status_google == "1"){
                 echo "<li><a href='".$s1->link_google."'><i class='fa fa-google fa-fw'></i> ".$s1->nama_google."</a></li>";
              } else {}

              if($s1->status_twitter == "1"){
                 echo "<li><a href='".$s1->link_twitter."'><i class='fa fa-twitter fa-fw'></i> ".$s1->nama_twitter."</a></li>";
              } else {}

              if($s1->status_instagram == "1"){
                 echo "<li><a href='".$s1->link_instagram."'><i class='fa fa-instagram fa-fw'></i> ".$s1->nama_instagram."</a></li>";
              } else {}

              if($s1->status_youtube == "1"){
                 echo "<li><a href='".$s1->link_youtube."'><i class='fa fa-youtube fa-1x'></i> ".$s1->nama_youtube."</a></li>";
              } else {}
            }
            ?>
        </ul>
    </div>
    <?php
    } else if($blok->blok1 == 113){
      ?>
      <div class="col-sm-3">
      <ul>
        <h3><?php echo $blok->nama_blok1; ?></h3><br />
          <?php
            foreach($counter->result() as $row):
            echo "<li>Dikunjungi oleh <b>".$row->hits."</b> user</li>";
          endforeach;
            echo "<li>Browser : <b>".$browser."</b></li>";
            ?>
      </ul>
    </div>
    <?php
    } else {}

  if($blok->blok2 == 111) {

      ?>
      <div class="col-sm-3">
        <ul>
          <h3><?php echo $blok->nama_blok2; ?></h3><br />
            <?php
            foreach($second_menu2->result() as $s2) {
              ?>
              <li><a href="<?php echo $s2->link_menu; ?>"><?php echo $s2->second_menu; ?></a></li>  
              <?php
              }
              ?>
        </ul>
      </div>

    <?php

    } else if($blok->blok2 == 112) {
      ?>
      <div class="col-sm-3"> 
        <ul>
          <h3><?php echo $blok->nama_blok2; ?></h3><br />
           <?php
            foreach($social_media2->result() as $s2) {

              if($s2->status_facebook == "1"){
                echo "<li><a href='".$s2->link_facebook."'><i class='fa fa-facebook-square fa-fw'></i> ".$s2->nama_facebook."</a></li>";
              } else {}

              if($s2->status_google == "1"){
                 echo "<li><a href='".$s2->link_google."'><i class='fa fa-google fa-fw'></i> ".$s2->nama_google."</a></li>";
              } else {}

              if($s2->status_twitter == "1"){
                 echo "<li><a href='".$s2->link_twitter."'><i class='fa fa-twitter fa-fw'></i> ".$s2->nama_twitter."</a></li>";
              } else {}

              if($s2->status_instagram == "1"){
                 echo "<li><a href='".$s2->link_instagram."'><i class='fa fa-instagram fa-fw'></i> ".$s2->nama_instagram."</a></li>";
              } else {}

              if($s2->status_youtube == "1"){
                 echo "<li><a href='".$s2->link_youtube."'><i class='fa fa-youtube fa-1x'></i> ".$s2->nama_youtube."</a></li>";
              } else {}
            }
            ?>
        </ul>
    </div>
    <?php
    } else if($blok->blok2 == 113){
      ?>
      <div class="col-sm-3">
      <ul>
        <h3><?php echo $blok->nama_blok2; ?></h3><br />
          <?php
            foreach($counter->result() as $row):
            echo "<li>Dikunjungi oleh <b>".$row->hits."</b> user</li>";
          endforeach;
            echo "<li>Browser : <b>".$browser."</b></li>";
            ?>
      </ul>
    </div>
    <?php
    }

    if($blok->blok3 == 111) {

      ?>
      <div class="col-sm-3">
        <ul>
          <h3><?php echo $blok->nama_blok3; ?></h3><br />
            <?php
            foreach($second_menu3->result() as $s3) {
              ?>
              <li><a href="<?php echo $s3->link_menu; ?>"><?php echo $s3->second_menu; ?></a></li>  
              <?php
              }
              ?>
        </ul>
      </div>

    <?php

    } else if($blok->blok3 == 112) {
      ?>
      <div class="col-sm-3"> 
        <ul>
          <h3><?php echo $blok->nama_blok3; ?></h3><br />
           <?php
            foreach($social_media3->result() as $s3) {

              if($s3->status_facebook == "1"){
                echo "<li><a href='".$s3->link_facebook."'><i class='fa fa-facebook-square fa-fw'></i> ".$s3->nama_facebook."</a></li>";
              } else {}

              if($s3->status_google == "1"){
                 echo "<li><a href='".$s3->link_google."'><i class='fa fa-google fa-fw'></i> ".$s3->nama_google."</a></li>";
              } else {}

              if($s3->status_twitter == "1"){
                 echo "<li><a href='".$s3->link_twitter."'><i class='fa fa-twitter fa-fw'></i> ".$s3->nama_twitter."</a></li>";
              } else {}

              if($s3->status_instagram == "1"){
                 echo "<li><a href='".$s3->link_instagram."'><i class='fa fa-instagram fa-fw'></i> ".$s3->nama_instagram."</a></li>";
              } else {}

              if($s3->status_youtube == "1"){
                 echo "<li><a href='".$s3->link_youtube."'><i class='fa fa-youtube fa-1x'></i> ".$s3->nama_youtube."</a></li>";
              } else {}
            }
            ?>
        </ul>
    </div>
    <?php
    } else if($blok->blok3 == 113){
      ?>
      <div class="col-sm-3">
      <ul>
        <h3><?php echo $blok->nama_blok3; ?></h3><br />
          <?php
            foreach($counter->result() as $row):
            echo "<li>Dikunjungi oleh <b>".$row->hits."</b> user</li>";
          endforeach;
            echo "<li>Browser : <b>".$browser."</b></li>";
            ?>
      </ul>
    </div>
    <?php
    }

    if($blok->blok4 == 111) {

      ?>
      <div class="col-sm-3">
        <ul>
          <h3><?php echo $blok->nama_blok4; ?></h3><br />
            <?php
            foreach($second_menu4->result() as $s4) {
              ?>
              <li><a href="<?php echo $s4->link_menu; ?>"><?php echo $s4->second_menu; ?></a></li>  
              <?php
              }
              ?>
        </ul>
      </div>

    <?php

    } else if($blok->blok4 == 112) {
      ?>
      <div class="col-sm-3"> 
        <ul>
          <h3><?php echo $blok->nama_blok4; ?></h3><br />
           <?php
            foreach($social_media4->result() as $s4) {

              if($s4->status_facebook == "1"){
                echo "<li><a href='".$s4->link_facebook."'><i class='fa fa-facebook-square fa-fw'></i> ".$s4->nama_facebook."</a></li>";
              } else {}

              if($s4->status_google == "1"){
                 echo "<li><a href='".$s4->link_google."'><i class='fa fa-google fa-fw'></i> ".$s4->nama_google."</a></li>";
              } else {}

              if($s4->status_twitter == "1"){
                 echo "<li><a href='".$s4->link_twitter."'><i class='fa fa-twitter fa-fw'></i> ".$s4->nama_twitter."</a></li>";
              } else {}

              if($s4->status_instagram == "1"){
                 echo "<li><a href='".$s4->link_instagram."'><i class='fa fa-instagram fa-fw'></i> ".$s4->nama_instagram."</a></li>";
              } else {}

              if($s4->status_youtube == "1"){
                 echo "<li><a href='".$s4->link_youtube."'><i class='fa fa-youtube fa-1x'></i> ".$s4->nama_youtube."</a></li>";
              } else {}
            }
            ?>
        </ul>
    </div>
    <?php
    } else if($blok->blok4 == 113){
      ?>
      <div class="col-sm-3">
      <ul>
        <h3><?php echo $blok->nama_blok4; ?></h3><br />
          <?php
            foreach($counter->result() as $row):
            echo "<li>Dikunjungi oleh <b>".$row->hits."</b> user</li>";
          endforeach;
            echo "<li>Browser : <b>".$browser."</b></li>";
            ?>
      </ul>
    </div>
    <?php
    }
  }
?>

  </div>
<div class="text-center col-md-12 footer2">
  <p>Copyright @ 2017 By <a href="http://www.markazwebdesign.net" title="Visit markazwebdesign">Markaz Web Design</a></p>
</div>
</footer>
<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-chevron-up"></span></button>
<script>
$(document).ready(function(){
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>


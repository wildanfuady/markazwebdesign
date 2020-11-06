<?php
switch($jenis){
  case "Beranda"; include("v_home.php"); break;
  case "Hubungi Kami"; include("v_hubungi_kami.php"); break;
  case "Layanan"; include("v_layanan.php"); break;
  case "Portofolio"; include("v_portofolio.php"); break;
  case "Testimoni"; include("v_testimoni.php"); break;
  case "Semua Artikel"; include("v_artikel.php"); break;
  case "Cari Artikel"; include("v_cari.php"); break;
  case "Detail Artikel"; include("v_det_artikel.php"); break;
  case "Detail Page"; include("v_page.php"); break;
}
?>
 
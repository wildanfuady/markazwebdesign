<?php
switch($jenis){
  case "Beranda";	include("beranda.php"); break;
  case "Instansi"; include("instansi/v_instansi.php"); break;
  case "Kategori"; include("kategori/tampil_kategori.php"); break;
  case "Ubah Kategori"; include("kategori/ubah_kategori.php"); break;
  case "Product"; include("product/tampil_product.php"); break;
  case "Ubah Product"; include("product/ubah_product.php"); break;
  case "Tambah Product"; include("product/tambah_product.php"); break;
  case "Menu"; include("menu/tampil_menu.php"); break;
  case "Ubah Menu"; include("menu/ubah_menu.php"); break;
  case "Menu Primary"; include("menu/tampil_menu_primary.php"); break;
  case "Ubah Menu Primary"; include("menu/ubah_menu_primary.php"); break;
  case "Pesan"; include("pesan/tampil_pesan.php"); break;
  case "Balas Pesan"; include("pesan/balas_pesan.php"); break;
  case "Artikel"; include("artikel/tampil_artikel.php"); break;
  case "Tambah Artikel"; include("artikel/tambah_artikel.php"); break;
  case "Ubah Artikel"; include("artikel/ubah_artikel.php"); break;
  case "Testimoni"; include("testimoni/tampil_testimoni.php"); break;
  case "Tambah Testimoni"; include("testimoni/tambah_testimoni.php"); break;
  case "Ubah Testimoni"; include("testimoni/ubah_testimoni.php"); break;
  case "Whyme"; include("whyme/tampil_whyme.php"); break;
  case "Tambah Whyme"; include("whyme/tambah_whyme.php"); break;
  case "Ubah Whyme"; include("whyme/ubah_whyme.php"); break;
  case "Portofolio"; include("portofolio/tampil_portofolio.php"); break;
  case "Tambah Portofolio"; include("portofolio/tambah_portofolio.php"); break;
  case "Ubah Portofolio"; include("portofolio/ubah_portofolio.php"); break;
  case "Users"; include("users/tampil_users.php"); break;
  case "Tambah Users"; include("users/tambah_users.php"); break;
  case "Ubah Users"; include("users/ubah_users.php"); break;
  case "Page"; include("page/tampil_page.php"); break;
  case "Tambah Page"; include("page/tambah_page.php"); break;
  case "Ubah Page"; include("page/ubah_page.php"); break;
  case "Style"; include("style/v_style.php"); break;
  case "Page Builder"; include("page_builder/v_page_builder.php"); break;


}
?>

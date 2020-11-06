<h3 class="judul">Selamat Datang...</h3>
<span class="isi">
Hai <b><?php echo $this->session->userdata('username') ?></b>, Selamat datang di halaman Administrator. Anda login dengan username <b><?php echo $this->session->userdata('username') ?></b>. Untuk mengelola konten web, silahkan klik menu sebelah kiri. <br />
Perlu diperhatikan!! Apabila Anda ingin keluar system, harap klik <b><?php echo anchor('login/logout', 'Logout'); ?></b> untuk menjaga keamanan system web ini. Terima kasih..
</span>
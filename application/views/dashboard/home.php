<!-- 
Author : Wildan Fuady
Website : www.markazwebdesign.com
-->
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Markaz Admin</title>
    
    <!-- Favicon -->
    <link href="<?php echo base_url('img/favicon.png'); ?>" rel="shortcut icon" /> 
    
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('library/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('library/bower_components/metisMenu/dist/metisMenu.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('library/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('library/bower_components/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    
    <style type="text/css"> 
    thead {
        background:#286090;
        color:#fff;
    }
    .img-icon {
        -moz-box-shadow: 0 0 5px #ccc; 
        -webkit-box-shadow: 0 0 5px #ccc; 
        box-shadow: 0 0 5px #ccc;
        padding: 10px; 
        } 
    .img-icon:hover { 
        -moz-box-shadow: 0 0 15px #ccc; 
        -webkit-box-shadow: 0 0 15px #ccc; 
        box-shadow: 0 0 15px #ccc;
        }
        
    </style>

</head> 

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="markaz_admin"><i class="fa fa-globe fa-fw"></i> Markaz Admin</a>
            </div>
            <!-- /.navbar-header -->
            
                <ul class="nav navbar-nav">
                    <li class="active">
                         <a href="<?php echo base_url('home'); ?>"> <i class="fa fa-globe fw-fa"></i> Lihat Web</a>
                    </li>
                    <!--
                    <li>
                        <a href="#"> <i class="fa fa-phone fa fw"> </i> 0822 4090 6362 (WA) / 0838 1824 5539 (Tlp/Sms)</a></li>
                    <li>
                        <a href="mailto:admin@markazwebdesign.net"> <i class="fa fa-envelope-o fa fw"></i> wildanfuady@gmail.com</a>
                    </li>
                    <li>
                        <a href="http://markazwebdesign.net"> <i class="fa fa-globe fa fw"></i> www.markazwebdesign.com</a>
                    </li>
                    -->
                </ul>
            
                <ul class="nav navbar-top-links navbar-right">
                <!-- Memulai Session Start -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('jabatan') ?> <i class="fa fa-caret-down"></i>
                        </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <a href="<?php echo base_url('markaz_admin/users'); ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('markaz_admin/ubah_password'); ?>"><i class="fa fa-key fa-fw"></i> Ubah Password</a>
                                 </li>
                                <li>
                                    <a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                </li>
                            </ul>
                                    <!-- /.dropdown-user -->
                    </li>
                          
                </ul>
                        <!-- /.navbar-top-links -->
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <div align="center">
                            <?php 
                            $tanggal = date("d-m-Y");
                            echo "<br><b>Info Login: $tanggal</b><br /><br>";
                             ?>
                            </div>
                        </li>
                        <li>
                            <a href="<?php echo base_url('markaz_admin'); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('markaz_admin/artikel'); ?>"><i class="fa fa-pencil fa-fw"></i> Manajemen Artikel</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('markaz_admin/kategori'); ?>"><i class="fa fa-cubes fa-fw"></i> Manajemen Kategori</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('markaz_admin/menu_utama'); ?>"><i class="fa fa-bars fa-fw"></i> Manajemen Menu Utama</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('markaz_admin/menu_primary'); ?>"><i class="fa fa-bars fa-fw"></i> Manajemen Menu Primary</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('markaz_admin/page'); ?>"><i class="fa fa-gears fa-fw"></i> Manajemen Page </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('markaz_admin/page_builder'); ?>"><i class="fa fa-gears fa-fw"></i> Manajemen Page Builder </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('markaz_admin/pesan'); ?>"><i class="fa fa-envelope-o fa-fw"></i> Manajemen Pesan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('markaz_admin/portofolio'); ?>"><i class="fa fa-file-photo-o fa-fw"></i> Manajemen Portofolio</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('markaz_admin/product'); ?>"><i class="fa fa-shopping-cart fa-fw"></i> Manajemen Produk</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('markaz_admin/testimoni'); ?>"><i class="fa fa-comments fa-fw"></i> Manajemen Testimoni</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('markaz_admin/users'); ?>"><i class="fa fa-users fa-fw"></i> Manajemen Users</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('markaz_admin/whyme'); ?>"><i class="fa fa-rocket fa-fw"></i> Manajemen Why Me?</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <?php include "main_content_markaz_admin.php"; ?>
                </div>
            <!-- /.row -->
            
        </div>
        <p>
        <p>
        <!-- /#page-wrapper kiri kanan -->
            
    </div>
    <!-- /#wrapper -->
    
    <!--footer-->       
        <div class="col-lg-12">
            <hr>
            <center><p>Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.markazwebdesign.net">Markaz Web Design</a></p></center>
        </div>
    <!-- end footer -->
    
    <!-- jQuery -->
    <script src="<?php echo base_url('library/bower_components/jquery/dist/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('library/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('library/bower_components/metisMenu/dist/metisMenu.min.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('library/dist/js/sb-admin-2.js'); ?>"></script>
    
    <script src="<?php echo base_url('library/js/validasi.js'); ?>"></script>
    
    <link rel="stylesheet" href="<?php echo base_url('library/datepicker/themes/base/jquery.ui.all.css'); ?>">
    <script src="<?php echo base_url('library/datepicker/ui/jquery.ui.core.js'); ?>"></script>
    <script src="<?php echo base_url('library/datepicker/ui/jquery.ui.widget.js'); ?>"></script>
    <script src="<?php echo base_url('library/datepicker/ui/jquery.ui.datepicker.js'); ?>"></script>
    <script src="<?php echo base_url('library/js/jquery.maskMoney.js'); ?>"></script>
    <script>
    $(function() {
        $( "#tgl" ).datepicker({
        changeMonth: true,
        changeYear: true,
        });
        $( "#tgl1" ).datepicker({
        changeMonth: true,
        changeYear: true,
        });
        $( "#tgl2" ).datepicker({
        changeMonth: true,
        changeYear: true,
        });
        $( "#tgl3" ).datepicker({
        changeMonth: true,
        changeYear: true,
        });
        $( "#tgl4" ).datepicker({
        changeMonth: true,
        changeYear: true,
        });
    });
    </script>
    
    <script src="<?php echo base_url('library/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('library/datatables/dataTables.bootstrap.js'); ?>"></script>
    <script type="text/javascript">
            $(document).ready(function() {
                $("#tbl").dataTable();
            
            });
    </script>

</body>

</html>
<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Data Warehouse Penjualan Kendaraan Roda empat</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
              <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><h6><center><img width=190 height=60 src='images/logo_mobil2.png' /></center></span></a></div> 
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                    <li>
                        <h2><font color="white">DATA PENJUALAN KENDARAAN RODA EMPAT</h2></font>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="images/admin.png" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Administrator</b> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="index.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Informasi Kendaraan</span></a>
                    </li>
                     <li>
                        <a href="vendor.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Informasi Vendor</span></a>
                    </li>
                     <li>
                        <a href="karyawan.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Informasi Karyawan</span></a>
                    </li>
                    <li>
                        <a href="penjualan.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Fakta Penjualan</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Informasi Kendaraan</h4> </div>
                        <ol class="breadcrumb">
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <!-- /.row -->
                <!--row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">FAKTA PENJUALAN</h3>
                          
                              
                                         <?php
                                                if (! @$_GET['tombol']) 
                                                    @$_GET['tombol']="";
                                                if (! @$_POST['tombol_update']) 
                                                    @$_POST['tombol_update']="";            
                                        ?>

                                        <form name='form1' method='get' action=''>
                                          <table width="600" border="0" align="center">
                                            <tr bgcolor="#009999">
                                              <td colspan="2">
                                                <div align="center"><strong>FAKTA PENJUALAN
                                                </div></td></tr>
                                           
                                             <?php //koneksi
                                                    $host='localhost'; 
                                                    $user='root'; 
                                                    $pass=''; 
                                                    $database='db_baru'; 
                                                    $konek=mysqli_connect($host, $user, $pass); 
                                                    mysqli_select_db($konek, $database); 
                                                    echo " <tr bgcolor='#CCCCCC'>";
                                                    echo "<td>ID Nasabah</td>";
                                                       echo "<td><label><select name='Nasabah'>";
                                                    $tampil="SELECT f.IDnasabah, f.IDmobil, f.IDbank, f.ID_CMO, f.IDvendor, f.IDcabang, f.tanggal, f.tahun, f.bulan, f.jumlah, f.angsuran_bulan, f.total_angsuran, f.biaya_administrasi from fakta_penjualan f, dim_bank b, dim_cabang c, dim_cmo o, dim_mobil m, dim_nasabah n, dim_vendor v where f.IDnasabah=n.IDnasabah and f.IDmobil=m.IDmobil and f.IDbank=b.IDbank and f.ID_CMO=o.ID_CMO and f.IDvendor=v.IDvendor and f.IDcabang=c.IDcabang ORDER BY f.IDnasabah asc ";
                                                     $sql = mysqli_query($konek, $tampil);
                                                    echo "<option value='belum milih' selected>- ID Nasabah -</option>";

                                                    while($w=mysqli_fetch_array($sql))
                                                    {
                                                        echo "<option value=$w[IDnasabah] selected>$w[IDnasabah]</option>";        
                                                    }
                                                     echo "</select></label></td></tr>";

                                                     ?>
                                                <?php //koneksi
                                                    $host='localhost'; 
                                                    $user='root'; 
                                                    $pass=''; 
                                                    $database='db_baru'; 
                                                    $konek=mysqli_connect($host, $user, $pass); 
                                                    mysqli_select_db($konek, $database); 
                                                    echo " <tr bgcolor='#DDDDDD'>";
                                                    echo "<td>ID Mobil</td>";
                                                       echo "<td><label><select name='Mobil'>";
                                                    $tampil="SELECT f.IDnasabah, f.IDmobil, f.IDbank, f.ID_CMO, f.IDvendor, f.IDcabang, f.tanggal, f.tahun, f.bulan, f.jumlah, f.angsuran_bulan, f.total_angsuran, f.biaya_administrasi from fakta_penjualan f, dim_bank b, dim_cabang c, dim_cmo o, dim_mobil m, dim_nasabah n, dim_vendor v where f.IDnasabah=n.IDnasabah and f.IDmobil=m.IDmobil and f.IDbank=b.IDbank and f.ID_CMO=o.ID_CMO and f.IDvendor=v.IDvendor and f.IDcabang=c.IDcabang ORDER BY f.IDnasabah asc ";
                                                     $sql = mysqli_query($konek, $tampil);
                                                    echo "<option value='belum milih' selected>- ID Mobil -</option>";

                                                    while($w=mysqli_fetch_array($sql))
                                                    {
                                                        echo "<option value=$w[IDmobil] selected>$w[IDmobil]</option>";        
                                                    }
                                                     echo "</select></label></td></tr>";

                                                     ?>
                                                    <?php //koneksi
                                                    $host='localhost'; 
                                                    $user='root'; 
                                                    $pass=''; 
                                                    $database='db_baru'; 
                                                    $konek=mysqli_connect($host, $user, $pass); 
                                                    mysqli_select_db($konek, $database); 
                                                    echo " <tr bgcolor='#CCCCCC'>";
                                                    echo "<td>ID Bank</td>";
                                                       echo "<td><label><select name='Bank'>";
                                                    $tampil="SELECT f.IDnasabah, f.IDmobil, f.IDbank, f.ID_CMO, f.IDvendor, f.IDcabang, f.tanggal, f.tahun, f.bulan, f.jumlah, f.angsuran_bulan, f.total_angsuran, f.biaya_administrasi from fakta_penjualan f, dim_bank b, dim_cabang c, dim_cmo o, dim_mobil m, dim_nasabah n, dim_vendor v where f.IDnasabah=n.IDnasabah and f.IDmobil=m.IDmobil and f.IDbank=b.IDbank and f.ID_CMO=o.ID_CMO and f.IDvendor=v.IDvendor and f.IDcabang=c.IDcabang ORDER BY f.IDnasabah asc ";
                                                     $sql = mysqli_query($konek, $tampil);
                                                    echo "<option value='belum milih' selected>- ID Bank -</option>";

                                                    while($w=mysqli_fetch_array($sql))
                                                    {
                                                        echo "<option value=$w[IDbank] selected>$w[IDbank]</option>";        
                                                    }
                                                     echo "</select></label></td></tr>";

                                                     ?>
                                                     <?php //koneksi
                                                    $host='localhost'; 
                                                    $user='root'; 
                                                    $pass=''; 
                                                    $database='db_baru'; 
                                                    $konek=mysqli_connect($host, $user, $pass); 
                                                    mysqli_select_db($konek, $database); 
                                                    echo " <tr bgcolor='#DDDDDD'>";
                                                    echo "<td>ID CMO</td>";
                                                       echo "<td><label><select name='CMO'>";
                                                    $tampil="SELECT f.IDnasabah, f.IDmobil, f.IDbank, f.ID_CMO, f.IDvendor, f.IDcabang, f.tanggal, f.tahun, f.bulan, f.jumlah, f.angsuran_bulan, f.total_angsuran, f.biaya_administrasi from fakta_penjualan f, dim_bank b, dim_cabang c, dim_cmo o, dim_mobil m, dim_nasabah n, dim_vendor v where f.IDnasabah=n.IDnasabah and f.IDmobil=m.IDmobil and f.IDbank=b.IDbank and f.ID_CMO=o.ID_CMO and f.IDvendor=v.IDvendor and f.IDcabang=c.IDcabang ORDER BY f.IDnasabah asc ";
                                                     $sql = mysqli_query($konek, $tampil);
                                                    echo "<option value='belum milih' selected>- ID CMO -</option>";

                                                    while($w=mysqli_fetch_array($sql))
                                                    {
                                                        echo "<option value=$w[ID_CMO] selected>$w[ID_CMO]</option>";        
                                                    }
                                                     echo "</select></label></td></tr>";

                                                     ?>
                                                     <?php //koneksi
                                                    $host='localhost'; 
                                                    $user='root'; 
                                                    $pass=''; 
                                                    $database='db_baru'; 
                                                    $konek=mysqli_connect($host, $user, $pass); 
                                                    mysqli_select_db($konek, $database); 
                                                    echo " <tr bgcolor='#CCCCCC'>";
                                                    echo "<td>ID Vendor</td>";
                                                       echo "<td><label><select name='Vendor'>";
                                                    $tampil="SELECT f.IDnasabah, f.IDmobil, f.IDbank, f.ID_CMO, f.IDvendor, f.IDcabang, f.tanggal, f.tahun, f.bulan, f.jumlah, f.angsuran_bulan, f.total_angsuran, f.biaya_administrasi from fakta_penjualan f, dim_bank b, dim_cabang c, dim_cmo o, dim_mobil m, dim_nasabah n, dim_vendor v where f.IDnasabah=n.IDnasabah and f.IDmobil=m.IDmobil and f.IDbank=b.IDbank and f.ID_CMO=o.ID_CMO and f.IDvendor=v.IDvendor and f.IDcabang=c.IDcabang ORDER BY f.IDnasabah asc ";
                                                     $sql = mysqli_query($konek, $tampil);
                                                    echo "<option value='belum milih' selected>- ID Vendor -</option>";

                                                    while($w=mysqli_fetch_array($sql))
                                                    {
                                                        echo "<option value=$w[IDvendor] selected>$w[IDvendor]</option>";        
                                                    }
                                                     echo "</select></label></td></tr>";

                                                     ?>
                                                     <?php //koneksi
                                                    $host='localhost'; 
                                                    $user='root'; 
                                                    $pass=''; 
                                                    $database='db_baru'; 
                                                    $konek=mysqli_connect($host, $user, $pass); 
                                                    mysqli_select_db($konek, $database); 
                                                    echo " <tr bgcolor='#DDDDDD'>";
                                                    echo "<td>ID Cabang</td>";
                                                       echo "<td><label><select name='Cabang'>";
                                                    $tampil="SELECT f.IDnasabah, f.IDmobil, f.IDbank, f.ID_CMO, f.IDvendor, f.IDcabang, f.tanggal, f.tahun, f.bulan, f.jumlah, f.angsuran_bulan, f.total_angsuran, f.biaya_administrasi from fakta_penjualan f, dim_bank b, dim_cabang c, dim_cmo o, dim_mobil m, dim_nasabah n, dim_vendor v where f.IDnasabah=n.IDnasabah and f.IDmobil=m.IDmobil and f.IDbank=b.IDbank and f.ID_CMO=o.ID_CMO and f.IDvendor=v.IDvendor and f.IDcabang=c.IDcabang ORDER BY f.IDnasabah asc ";
                                                     $sql = mysqli_query($konek, $tampil);
                                                    echo "<option value='belum milih' selected>- ID Cabang -</option>";

                                                    while($w=mysqli_fetch_array($sql))
                                                    {
                                                        echo "<option value=$w[IDcabang] selected>$w[IDcabang]</option>";        
                                                    }
                                                     echo "</select></label></td></tr>";

                                                     ?>
                                            <tr bgcolor="#CCCCCC">
                                              <td>Tanggal</td>
                                              <td><label>
                                                <input type="text" name="tanggal">
                                              </label></td>
                                            </tr>
                                             <tr bgcolor="#DDDDDD">
                                              <td>Tahun</td>
                                              <td><label>
                                                <input type="text" name="tahun">
                                              </label></td>
                                            </tr>
                                            <tr bgcolor="#CCCCCC">
                                              <td>Bulan</td>
                                              <td><label>
                                                <input type="text" name="bulan">
                                              </label></td>
                                            </tr>
                                            <tr bgcolor="#CCCCCC">
                                              <td>Kategori Id</td>
                                              <td><label>
                                                <input type="text" name="kategori_id">
                                              </label></td>
                                            </tr>
                                            <tr bgcolor="#DDDDDD">
                                              <td>Harga</td>
                                              <td><label>
                                                <input type="text" name="harga">
                                              </label></td>
                                            </tr>       
                                            <tr bgcolor="#009999">
                                              <td colspan="2"><div align="right">
                                                <label>        
                                                <input type="submit" name="tombol" value="Submit">
                                                        <input type="submit" name="tombol" value="Cancel">
                                                </label>
                                              </div></td>
                                            </tr>
                                          </table>
                                        </form>
                                <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Mobil</th>
                                            <th>Produk</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Jumlah</th>
                                            <th>Angsuran/bulan</th>
                                            <th>Total Angsuran</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                                $host='localhost'; 
                                                    $user='root'; 
                                                    $pass=''; 
                                                    $database='db_baru'; 
                                                    $konek=mysqli_connect($host, $user, $pass); 
                                                    mysqli_select_db($konek, $database); 
                                                $i=0; //inisialisasi untuk penomoran data
                                                    //perintah untuk menampilkan data, id_brg terbesar ke kecil
                                                $tampil = "SELECT d.merk_mobil, d.produk, f.tanggal, f.jumlah, f.angsuran_bulan, f.total_angsuran from dim_mobil d, fakta_penjualan f where d.IDmobil=f.IDmobil";
                                                //perintah menampilkan data dikerjakan
                                                $sql = mysqli_query($konek, $tampil);
                                            echo '<tr>';
                                            //tampilkan seluruh data yang ada pada tabel user
                                            while($data = mysqli_fetch_array($sql))
                                             {
                                             $i++;
                                             
                                            echo "
                                             <td class='txt-oflo'>".$i."</td>
                                             <td class='txt-oflo'>".$data['merk_mobil']."</td>
                                             <td class='txt-oflo'>".$data['produk']."</td>
                                             <td class='txt-oflo'>".$data['tanggal']."</td>
                                             <td class='txt-oflo'>".$data['jumlah']."</td>
                                             <td class='txt-oflo'>".$data['angsuran_bulan']."</td>
                                             <td class='txt-oflo'>".$data['total_angsuran']."</td>
                                             </tr>";
                                             }
                                            echo '</body>';
                                            echo '</table>';
                                             
                                        ?>
                                       
                        </div>
                    </div>
                </div>
                <!--row -->
                <!-- /.row -->
                <!-- row -->
            <!-- /.container-fluid -->
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="../plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="../plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Welcome to Pixel admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
</body>

</html>

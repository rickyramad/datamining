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
                     
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Informasi Vendor</h4> </div>
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
                            <h3 class="box-title">Data Vendor(Shoroom Roda Empat)</h3>
                          
                                    <input type="button" value="Tahun 2015" onclick="window.location = 'vendor.php';"/>
                                    <input type="button" value="Tahun 2016" onclick="window.location = 'vendor1.php';"/>
                                    <input type="button" value="Tahun 2017" onclick="window.location = 'vendor2.php';"/>
                                
                            
                          
                                <?php
                                       $host='localhost'; 
                                        $user='root'; 
                                        $pass=''; 
                                        $database='db_baru'; 
                                        $konek=mysqli_connect($host, $user, $pass); 
                                        mysqli_select_db($konek, $database); 
                                         $vendor       = mysqli_query($konek, "SELECT DISTINCT d.nama_vendor FROM fakta_penjualan f,dim_vendor d where d.IDvendor=f.IDvendor and f.tahun='2016'  ORDER BY f.jumlah asc ");
                                        $penghasilan = mysqli_query($konek, "SELECT SUM(f.jumlah) FROM fakta_penjualan f, dim_vendor d where d.IDvendor=f.IDvendor and f.tahun='2016' GROUP BY d.IDvendor ORDER BY f.jumlah asc");
                                ?>
                                            <script src="Chart.bundle.js"></script>
                                     
                                            <style type="text/css">
                                                .container {
                                                    width: 100%;
                                                    margin: 15px auto;
                                                }
                                            </style>
                                <div class="container">
                                                <canvas id="myChart" width="100" height="100"></canvas>
                                            </div>
                                            <script>
                                                var ctx = document.getElementById("myChart");
                                                var myChart = new Chart(ctx, {
                                                    type: 'bar',
                                                    data: {
                                                        labels: [<?php while ($d = mysqli_fetch_array($vendor)) { echo '"' . $d['nama_vendor'] .  '",';}?>],     
                                                        datasets: [{
                                                                label: 'Tahun 2016',
                                                                data: [<?php while ($p = mysqli_fetch_array($penghasilan)) { echo '"' . $p['SUM(f.jumlah)'] . '",';}?>],
                                                                backgroundColor: [
                                                                    'rgba(255, 99, 132, 0.2)',
                                                                    'rgba(54, 162, 235, 0.2)',
                                                                    'rgba(255, 206, 86, 0.2)',
                                                                    'rgba(75, 192, 192, 0.2)',
                                                                    'rgba(153, 102, 255, 0.2)',
                                                                    'rgba(255, 159, 64, 0.2)',
                                                                    'rgba(255, 99, 132, 0.2)',
                                                                    'rgba(54, 162, 235, 0.2)',
                                                                    'rgba(255, 206, 86, 0.2)',
                                                                    'rgba(75, 192, 192, 0.2)',
                                                                    'rgba(153, 102, 255, 0.2)',
                                                                    'rgba(255, 159, 64, 0.2)'
                                                                ],
                                                                borderColor: [
                                                                    'rgba(255,99,132,1)',
                                                                    'rgba(54, 162, 235, 1)',
                                                                    'rgba(255, 206, 86, 1)',
                                                                    'rgba(75, 192, 192, 1)',
                                                                    'rgba(153, 102, 255, 1)',
                                                                    'rgba(255, 159, 64, 1)',
                                                                    'rgba(255, 99, 132, 0.2)',
                                                                    'rgba(54, 162, 235, 0.2)',
                                                                    'rgba(255, 206, 86, 0.2)',
                                                                    'rgba(75, 192, 192, 0.2)',
                                                                    'rgba(153, 102, 255, 0.2)',
                                                                    'rgba(255, 159, 64, 0.2)'
                                                                ],
                                                                borderWidth: 1
                                                            }]
                                                    },
                                                    options: {
                                                        scales: {
                                                            yAxes: [{
                                                                    ticks: {
                                                                        beginAtZero: true
                                                                    }
                                                                }]
                                                        }
                                                    }
                                                });
                                            </script>
                        </div>
                    </div>
                </div>
                <!--row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 >Nama Administrator
                            </h3>
                            <br>
                            <h3 class="box-title">1. RICKY RAMADHAN                    (E1E1 15 044)
                            </h3>
                            <br>
                            <h3 class="box-title">2. PINI ASTATI                                  (E1E1 15 040)
                            </h3>
                            <br>
                            <h3 class="box-title">3. HASRAN JAYA                             (E1E1 15 018)
                            </h3>
                            <br>
                            <h3 class="box-title">4. AGUSTINA RAHMAN                  (E1E1 15 033)
                            </h3>
                            <br>
                            <h3 class="box-title">Data Vendor 2015-2017
                            </h3>
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Vendor</th>
                                            <th>Nama vendor</th>
                                            <th>Mobil</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Jumlah</th>
                                            <th>Angsuran/bulan</th>
                                            <th>Total Angsuran</th>
                                            <th>Biaya Administrasi</th>

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
                                                $tampil = "SELECT d.IDvendor, d.nama_vendor, j.merk_mobil,f.tanggal, f.jumlah, f.angsuran_bulan, f.total_angsuran, f.biaya_administrasi from dim_mobil j, fakta_penjualan f, dim_vendor d where j.IDmobil=f.IDmobil and d.IDvendor=f.IDvendor ";
                                                //perintah menampilkan data dikerjakan
                                                $sql = mysqli_query($konek, $tampil);
                                            echo '<tr>';
                                            //tampilkan seluruh data yang ada pada tabel user
                                            while($data = mysqli_fetch_array($sql))
                                             {
                                             $i++;
                                             
                                            echo "
                                             <td class='txt-oflo'>".$i."</td>
                                             <td class='txt-oflo'>".$data['IDvendor']."</td>
                                             <td class='txt-oflo'>".$data['nama_vendor']."</td>
                                             <td class='txt-oflo'>".$data['merk_mobil']."</td>
                                             <td class='txt-oflo'>".$data['tanggal']."</td>
                                             <td class='txt-oflo'>".$data['jumlah']."</td>
                                             <td class='txt-oflo'>".$data['angsuran_bulan']."</td>
                                             <td class='txt-oflo'>".$data['total_angsuran']."</td>
                                             <td class='txt-oflo'>".$data['biaya_administrasi']."</td>
                                             </tr>";
                                             }
                                            echo '</body>';
                                            echo '</table>';
                                             
                                        ?>
                                       
                        </div>
                    </div>
                </div>
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

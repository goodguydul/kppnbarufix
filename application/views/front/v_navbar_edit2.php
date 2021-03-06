<body>
    <!-- wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><?php echo '
                <a class="navbar-brand" href="'. base_url() .'">
                    <img style="width: 100%;height: 60px;" src="'. base_url() .'assets/images/logo-mid.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
            ';?>
                <li>
                    <script type="text/javascript">
                        tday=new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
                        tmonth=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

                        function GetClock(){
                        var d=new Date();
                        var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
                        if(nyear<1000) nyear+=1900;
                        var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds();
                        if(nmin<=9) nmin="0"+nmin
                        if(nsec<=9) nsec="0"+nsec;

                        document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+ndate+" "+tmonth[nmonth]+" "+nyear+" "+nhour+":"+nmin+":"+nsec+"";
                        }

                        window.onload=function(){
                        GetClock();
                        setInterval(GetClock,1000);
                        }
                    </script>
                    <div id="clockbox" style="margin-top: 33px;margin-right: 30px;font-size: 15px;font-style: italic;"></div>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                       <li><a href="<?php echo base_url();?>front/about"><i class="fa fa-user fa-fw"></i>About</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li> 
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->
        </nav>
<?php
foreach ($query as $row) {
        $level = "";
        $levels = $row->level;
        if ($levels == '1'){
            $level = "Admin";
        }else if ($levels == '2'){
            $level = "Middle Office";
        }else if ($levels == '3'){
            $level = "Front Officer";
        }
echo '

        <!-- end navbar top -->
        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="'.base_url().'assets/images/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                 <div >'. $row->nama_petugas_FO .' <br> <p style="font-size:11px;"> '. $level .' </p></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pencil" ></i> Input Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="sidebar-search">
                                <!-- search section-->
                                <form class="form-inline" action="'.base_url().'front/cari" method="POST"  >
                                    <div class="form-group">
                                        <input type="text" name="search" class="form-control" placeholder="No Satker" required pattern=".{6}" title="6 karakter">
                                    </div>
                                    <button style="float: right;" class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!--end search section-->
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-search" ></i> Cari Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="sidebar-search">
                                <!-- search section-->
                                <form class="form-inline" action="'.base_url().'front/carikarwas" method="POST"  >
                                    <div class="form-group">
                                        <input type="text" name="searchkarwas" class="form-control" placeholder="No Karwas" required>
                                    </div>
                                    <button style="float: right;" class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                </form>
  
                            </li>
                        </ul>

                    </li>

                     <li>
                        <a href="#"><i class="fa fa-pencil-square-o" ></i> Edit Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="sidebar-search">
                                <!-- search section-->
                                <form class="form-inline" action="'.base_url().'front/editdata" method="POST"  >
                                    <div class="form-group">
                                        <input style="width: 168px;" type="text" name="searchkarwas" class="form-control" placeholder="No Karwas" value="'.$row->no.'" readonly >
                                    </div>
                                    ';
}
?>
                                    <button style="float: right;" class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="right" title="" data-original-title="Edit data sesuai Nomor Karwas">Edit</button>
                                </form>
                            <script>
                                $(document).ready(function(){
                                    $('[data-toggle="tooltip"]').tooltip();   
                                });
                            </script>
                            </li>
                        </ul>

                    </li>

                    <li>
                        <a href="#"><i class="fa fa-print" ></i> Cetak Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="sidebar-search">
                                <center><button class="btn btn-success" onclick="printContent('forms')">Cetak</button></center>
                            </li>
                        </ul>

                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->

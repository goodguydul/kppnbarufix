<body>
    <!--  wrapper -->
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
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>">
                    <img style="width: 100%;height: 60px;" src="<?php echo base_url();?>assets/images/logo-mid.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
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
                        <li><a href="<?php echo base_url();?>middle/about"><i class="fa fa-user fa-fw"></i>About</a>
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
        <!-- end navbar top -->
        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">

            <div class="sidebar-collapse">

                <ul class="nav" id="side-menu">
                    <li>
                       
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="<?php echo base_url();?>assets/images/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div ><?php foreach($query->result_array()as$row){
                                         $seid = $this->session->userdata('username');
                                         if($seid == $row['username']){
                                            echo $row['nama'] ;
                                            echo "<br>";
                                            echo "<p style='font-size:11px;'>";
                                            $level = $row['level'];
                                            if ($level == '1'){
                                                echo "Admin";
                                            }else if ($level == '2'){
                                                echo "Middle Office";
                                            }else if ($level == '3'){
                                                echo "Front Officer";
                                            }
                                            echo "</p>";
                                         }          
                                  } 
                                ?></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>

                    </li>
                    
                    <li>
                        <a href="<?php echo base_url();?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw" ></i> Data Satuan Kerja<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li style="font-size: 12px;">
                                <a href="<?php echo base_url();?>middle/daftar_satker"><i class="fa fa-table fa-fw"></i> Daftar Satuan Kerja</a>
                            </li>
                            <li style="font-size: 10px;">
                                <a href="<?php echo base_url();?>middle/daftar_satker_terlambat"><i class="fa fa-table fa-fw"></i> Daftar Satker Terlambat Menyerahkan BAST</a>
                            </li>
                            <li style="font-size: 11px;">
                                <a href="<?php echo base_url();?>middle/daftar_satker_belum"><i class="fa fa-table fa-fw"></i> Daftar Satker Belum Menyerahkan BAST</a>
                            </li>
                            <li style="font-size: 11px;">
                                <a href="<?php echo base_url();?>middle/daftar_satker_sudah"><i class="fa fa-table fa-fw"></i> Daftar Satker Sudah Menyerahkan BAST</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
                    <li>
                                <a href="<?php echo base_url();?>middle/read"><i class="fa fa-table fa-fw"></i> Rekapitulasi Bank Garansi</a>
                            </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
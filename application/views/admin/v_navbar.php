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
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>

                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url();?>admin/about"><i class="fa fa-user fa-fw"></i>About</a>
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
                    <li class="">
                        <a href="<?php echo base_url();?>"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user" ></i> Akun User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>admin/daftar_user"><i class="fa fa-user" ></i> Daftar User</a>
  
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>admin/add_user"><i class="fa fa-user" ></i> Tambah User</a>
  
                            </li>
                        </ul>
                    </li>
                     <li style="font-size: 12px">
                                <a href="<?php echo base_url();?>admin/form_garansi"><i class="fa fa-user" ></i> Setting Form Garansi Bank</a>
  
                            </li>
                    <li style="font-size: 12px">
                                <a href="<?php echo base_url();?>admin/form_kantor"><i class="fa fa-user" ></i> Setting Data Kantor</a>
  
                            </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
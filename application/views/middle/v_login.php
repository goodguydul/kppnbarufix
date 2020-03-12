<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/images/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" style="box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">                  
                    <div class="panel-heading" align="center">
                        <img src="<?php echo base_url(); ?>assets/images/logo-mid.png" style="width: 190px;" >
                        <h2 class="panel-title"><b>Login Penatausahaan Garansi Bank</b></h2>
                        <p>Silahkan memasukkan Username dan Password Anda</p>
                    </div>
                    <div class="panel-body">
                            <fieldset>          
                                <?php 
                                $att = "role = 'form'";
                                echo form_open('login',$att);?>
                                <?php
                             // Cetak jika ada notifikasi
                                if($this->session->flashdata('sukses')) {
                                     echo '<p class="warning" style="margin: 10px 20px;" align="center">'.$this->session->flashdata('sukses').'</p>';
                                }
                                ?>
                                <p>Username:</p>
                                <p>
                                     <input class="form-control" type="text" name="username" value="<?php echo set_value('username'); ?>"/>
                                </p>
                                <p> <?php echo form_error('username'); ?> </p>
                           
                                <p>Password:</p>
                                <p>
                                     <input class="form-control" type="password" name="password" value="<?php echo set_value('password'); ?>"/>
                                </p>
                                <p> <?php echo form_error('password'); ?> </p>
                           
                                <p>
                                <br>
                                     <button type="submit" class="btn btn-primary" name="btnSubmit">Login</button>
                                </p>
                           
                                <?php echo form_close();?>
                            </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah User</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                    <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="row">
                        <div class="col-lg-3"></div>
                            <div class="col-lg-7">
                                <form role="form" action="<?php echo base_url();?>admin/tambah_user" method="POST">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px" style="width:140px;text-align: left">Username</span>
                                        <input class="form-control" placeholder="Username" style="width:400px" type="text" name="username" required>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="width:140px;text-align: left;">Password</span>
                                        <input class="form-control" placeholder="Password" style="width:400px" type="password" name="password" required>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px">Confirm Password</span>
                                        <input class="form-control" placeholder="Password" style="width:400px" type="password" name="password2" required> 
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px">Nama</span>
                                        <input class="form-control" placeholder="Nama" style="width:400px" type="text" name="nama" required>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;text-align: left;width:140px">NIP</span>
                                        <input class="form-control" placeholder="NIP" style="width:400px" type="text" name="nip" required>
                                    </div>
                                    <div class="form-group" >
                                        <span class="input-group-addon" style="text-align: left;width:140px;height:32px;display:inline-block">Level</span>
                                        <select class="form-control" style="width:400px;display:inline-block;margin-left:-4px;height: 32px;" name="level" required>
                                            <option value="1">Administrator</option>
                                            <option value="2">Middle Office</option>
                                            <option value="3">Front Office</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                    <button type="reset" class="btn btn-success">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
     <!-- End Form Elements -->
    </div>
</div>
       
<div id="page-wrapper">
    <div class="row">
        <!--  page header -->
        <div class="col-lg-12">
            <h1 class="page-header">Daftar user</h1>
        </div>
         <!-- end  page header -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No. </th>
                                    <th style="text-align: center;">Username </th>
                                    <th style="text-align: center;">Nama </th>
                                    <th style="text-align: center;">NIP</th>
                                    <th style="text-align: center;">Level</th>
                                    <th style="text-align: center;">Status</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                        <?php
                        $users = $this->session->userdata('username');
                        $no=1;
                        foreach ($user as $row) {

                                $lepel = "";
                                if ($row['level'] == '1'){
                                    $lepel = "Administrator";
                                }else if ($row['level'] == '2') {
                                     $lepel = "Middle Office";
                                }else if ($row['level'] == '3') {
                                     $lepel = "Front Office";
                                }

                                $status ="";
                                if ($row['logged_in'] == '1'){
                                    $status = "<span class='user-circle-online btn btn-success btn-circle '></span>&nbsp;Online";
                                }else if ($row['logged_in'] == '0') {
                                    $status = "<span class='user-circle-online btn btn-danger btn-circle '></span>&nbsp;Offline";
                                }
                                
                                echo "   
                                    <tr id='".$row['id']. "'>
                                        <td style='text-align:center'>" .$no. "</td>
                                        <td>" .$row['username']. "</td>
                                        <td>" .$row['nama']. "</td>
                                        <td>" .$row['nip']. "</td>
                                        <td>" .$lepel. "</td>
                                        <td>" .$status. "</td>
                                        ";
                                if($users != $row['username']){
                                    echo " 
                                        <td class='center'  align='center'>
                                                <button type='button' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#myModal".$row['id']. "'>Hapus
                                                </button>
                                                <button type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#myModal2".$row['id']. "'>Edit
                                                </button>
                                        </td>
                                                <div id='myModal".$row['id']. "' class='modal fade' role='dialog'>
                                                    <div class='modal-dialog' style='width: 300px;'>
                                                        <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                                                <h4 class='modal-title'>Hapus user '".$row['username']."'</h4>
                                                            </div>
                                                            <div class='modal-body'>
                                                                <form action='".base_url()."admin/hapus_user/' method='POST'>
                                                                    <p>
                                                                      Hapus user '".$row['username']."' ?  
                                                                    </p>
                                                                    <input hidden type='text' name='id' value='".$row['id']. "'>
                                                            </div>
                                                            <div class='modal-footer'>
                                                            <button type='submit' class='btn btn-danger'>Hapus</button>
                                                                </form>
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id='myModal2".$row['id']. "' class='modal fade' role='dialog'>
                                                    <div class='modal-dialog' style='width: 300px;'>
                                                        <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                                                <h4 class='modal-title'>Edit user '".$row['username']."'?</h4>
                                                            </div>
                                                            <div class='modal-body'>
                                                                <form action='".base_url()."admin/edit_user' method='POST'>
                                                                    <p>
                                                                    <label style='padding-right:3px'>Nama :</label>
                                                                        <input class='form-control' type='text' name='nama' value='".$row['nama']."'>
                                                                        <br>
                                                                    <label style='padding-right:3px'>Username :</label>
                                                                        <input class='form-control' type='text' name='username' value='".$row['username']."'>
                                                                        <br>
                                                                    <label style='padding-right:3px'>Password : </label>
                                                                        <input class='form-control' type='password' name='password' placeholder='Masukkan Password'>
                                                                        <br>
                                                                    <label style='padding-right:3px'>NIP : </label>
                                                                        <input class='form-control' type='text' name='nip' value='".$row['nip']."'>
                                                                        <br>
                                                                    <label style='padding-right:7px'>Status Satker : </label>
                                                                        <select name='level' class='form-control'>
                                                                        <option value='1'>Administrator</option>
                                                                        <option value='2'>Middle Office</option>
                                                                        <option value='3'>Front Office</option>
                                                                        </select><br>
                                                                    </p>
                                                                    <input hidden type='text' name='id' value='".$row['id']. "'>
                                                            </div>
                                                            <div class='modal-footer'>
                                                            <button type='submit' class='btn btn-success'>Update</button>
                                                                </form>
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                    </tr>
                                "; }else{
                                    echo '<td> </td></tr>';
                                }

                            $no++; 
                        }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
</div>
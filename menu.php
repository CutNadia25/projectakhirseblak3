<?php
 $result=[];
    include "proses/connect.php";
    $query = mysqli_query($conn, "SELECT * FROM tb_daftar_menu");
    while ($record = mysqli_fetch_array($query)) {
        $result[] = $record;
    }
    ?>



 <div class="col-lg-9 mt-2">
     <div class="card">
         <div class="card-header">
             Halaman Menu
         </div>
         <div class="card-body">
             <div class="row">
                 <div class="col d-flex justify-content-end">
                     <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser">Tambah Menu</button>
                 </div>
             </div>
             <!--modal tambah menu-->
             <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Menu</h1>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                             <form class="needs-validation" novalidate action="proses/proses_input_menu.php" method="POST" enctype="multipart/form-data">
                                 <div class="row">
                                     <div class="col-lg-6">
                                         <div class="input-group mb-3">
                                             <input type="file" class="form-control py-3" id="UploadFoto" placeholder="Foto Menu" name="foto" required>
                                             <label class="input-group-text" for="UploadFoto">Upload Foto Menu</label>
                                             <div class="invalid-feedback">
                                                 Harap Masukkan File Foto Menu
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                     <div class="col-lg-12">
                                         <div class="form-floating mb-3">
                                             <input type="text" class="form-control" id="floatingInput" placeholder="Keterangan" name="keterangan">
                                             <label for="floatingPassword">Keterangan</label>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-lg-4">
                                         <div class="form-floating mb-3">
                                             <input type="text" class="form-control" id="floatingInput" placeholder="Nama Menu" name="nama_menu" required>
                                             <label for="floatingInput">Nama Menu</label>
                                             <div class="invalid-feedback">
                                                 Harap Masukkan Nama Menu
                                             </div>
                                         </div>
                                     </div>
                                
                                     <div class="col-lg-4">
                                         <div class="form-floating mb-3">
                                             <input type="number" class="form-control" id="floatingInput" placeholder="harga" name="harga" required>
                                             <label for="floatingInput">Harga</label>
                                             <div class="invalid-feedback">
                                                 Harap Masukkan Harga Menu
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-lg-4">
                                         <div class="form-floating mb-3">
                                             <input type="number" class="form-control" id="floatingInput" placeholder="stok" name="stok" required>
                                             <label for="floatingInput">Stok</label>
                                             <div class="invalid-feedback">
                                                 Harap Masukkan Stok Jumlah Menu
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 </div>
                            </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary" name="input_menu_valid" value="12345">Save changes</button>
                         </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
         <!--end modal tambah menu-->
         <?php
         if (empty($result)) {
            echo "Data menu tidak ada";
        } else {
            foreach ($result as $row) {
            ?>
             <!--modal view-->
             <div class="modal fade" id="ModalView<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Menu</h1>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                             <form class="needs-validation" novalidate action="proses/proses_input_menu.php" method="POST" enctype="multipart/form-data">
                                 <div class="row">
                                     <div class="col-lg-12">

                                     </div>
                                     <div class="row">
                                     <div class="col-lg-12">
                                         <div class="form-floating mb-3">
                                             <input disabled type="text" class="form-control" id="floatingInput" value="<?php echo $row['keterangan'] ?>">
                                             <label for="floatingPassword">Keterangan</label>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-lg-4">
                                         <div class="form-floating mb-3">
                                             <input disabled type="text" class="form-control" id="floatingInput" value="<?php echo $row['nama_menu'] ?>">
                                             <label for="floatingInput">Nama Menu</label>
                                             <div class="invalid-feedback">
                                                 Harap Masukkan Nama Menu
                                             </div>
                                         </div>
                                     </div>
                                
                                     <div class="col-lg-4">
                                         <div class="form-floating mb-3">
                                             <input disabled type="number" class="form-control" id="floatingInput" value="<?php echo $row['harga'] ?>">
                                             <label for="floatingInput">Harga</label>
                                             <div class="invalid-feedback">
                                                 Harap Masukkan Harga Menu
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-lg-4">
                                         <div class="form-floating mb-3">
                                             <input disabled type="number" class="form-control" id="floatingInput" value="<?php echo $row['stok'] ?>">
                                             <label for="floatingInput">Stok</label>
                                             <div class="invalid-feedback">
                                                 Harap Masukkan Stok Jumlah Menu
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 </div>
                            </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary" name="input_menu_valid" value="12345">Save changes</button>
                         </div>
                         </form>
                     </div>
                 </div>
             </div>
         
             <!--end modal view-->

             <!--modal edit-->
             <div class="modal fade" id="ModalEdit<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Menu</h1>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                             <form class="needs-validation" novalidate action="proses/proses_edit_menu.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                 <div class="row">
                                     <div class="col-lg-6">
                                         <div class="input-group mb-3">
                                             <input type="file" class="form-control py-3" id="UploadFoto" placeholder="Foto Menu" name="foto" required>
                                             <label class="input-group-text" for="UploadFoto">Upload Foto Menu</label>
                                             <div class="invalid-feedback">
                                                 Harap Masukkan File Foto Menu
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                     <div class="col-lg-12">
                                         <div class="form-floating mb-3">
                                             <input type="text" class="form-control" id="floatingInput" placeholder="Keterangan" name="keterangan" value="<?php echo $row['keterangan'] ?>">
                                             <label for="floatingPassword">Keterangan</label>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-lg-4">
                                         <div class="form-floating mb-3">
                                             <input type="text" class="form-control" id="floatingInput" placeholder="Nama Menu" name="nama_menu" value="<?php echo $row['nama_menu'] ?>">
                                             <label for="floatingInput">Nama Menu</label>
                                             <div class="invalid-feedback">
                                                 Harap Masukkan Nama Menu
                                             </div>
                                         </div>
                                     </div>
                                
                                     <div class="col-lg-4">
                                         <div class="form-floating mb-3">
                                             <input type="number" class="form-control" id="floatingInput" placeholder="harga" name="harga" required value="<?php echo $row['harga'] ?>">
                                             <label for="floatingInput">Harga</label>
                                             <div class="invalid-feedback">
                                                 Harap Masukkan Harga Menu
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-lg-4">
                                         <div class="form-floating mb-3">
                                             <input type="number" class="form-control" id="floatingInput" placeholder="stok" name="stok" required value="<?php echo $row['stok'] ?>">
                                             <label for="floatingInput">Stok</label>
                                             <div class="invalid-feedback">
                                                 Harap Masukkan Stok Jumlah Menu
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 </div>
                            </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary" name="edit_menu_valid" value="12345">Save changes</button>
                         </div>
                         </form>
                     </div>
                 </div>
             </div>
         
             <!--end modal edit-->



             <!--modal delete-->
             <div class="modal fade" id="ModalDelete<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-md modal-fullscreen-md-down">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Menu</h1>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                             <form class="needs-validation" novalidate action="proses/proses_delete_menu.php" method="POST">
                                 <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                 <input type="hidden" value="<?php echo $row['foto'] ?>" name="foto">
                                 <div class="col-lg-12">
                                    Apakah anda ingin menghapus menu <b><?php echo $row['nama_menu'] ?></b>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-danger" name="input_user_valid" value="12345">Hapus</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
             <!--end modal delete -->

             <!--modal ubah passoword-->
             <div class="modal fade" id="ModalResetPassword<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-md modal-fullscreen-md-down">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h1 class="modal-title fs-5" id="exampleModalLabel">Reset Password</h1>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                             <form class="needs-validation" novalidate action="proses/proses_reset_password.php" method="POST">
                                 <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                 <div class="col-lg-12">
                                    <?php
                                    if($row['username'] == $_SESSION['username_SeblakKuyy']){
                                        echo "<div class='alert alert-danger'>Anda Tidak Dapat Mereset Password Sendiri</div>";
                                    }else{
                                        echo "Apakah Anda Yakin Ingin Mereset Pssword User <b>$row[username]</b> Menjadi Password Bawaan Sistem Yaitu <b>password</b>";
                                    }
                                     ?>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-success" name="input_user_valid" value="12345" <?php echo ($row['username'] == $_SESSION['username_SeblakKuyy']) ? 'disabled': '' ; ?>>Reset Password</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
             <!--end modal ubah password -->
         <?php
            }
            ?>
             <div class="table-responsive">
                 <table class="table table-striped table-hover">
                     <thead>
                         <tr class="text-nowrap">
                             <th scope="col">No</th>
                             <th scope="col">Foto Menu</th>
                             <th scope="col">Nama Menu</th>
                             <th scope="col">Keterangan</th>
                             <th scope="col">Harga</th>
                             <th scope="col">Stok</th>
                             <th scope="col">Aksi</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                            $no = 1;
                            foreach ($result as $row) {
                            ?>
                             <tr>
                                 <th scope="row">
                                   <?php echo $no++ ?>
                                </th>
                                <td>
                                   <div style="width: 90px">
                                   <img src="assets/img/<?php echo $row['foto'] ?>" class="img-thumbnail" alt="...">
                                   </div>
                                </td>
                                 <td><?php echo $row['nama_menu'] ?></td>
                                 <td><?php echo $row['keterangan'] ?></td>
                                 <td><?php echo $row['harga'] ?></td>
                                 <td><?php echo $row['stok'] ?></td>
                                 <td>
                                    <div class="d-flex">
                                     <button class="btn btn-info btn-sm me-2" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['id'] ?>"><i class="bi bi-eye-fill"></i></button>
                                     <button class="btn btn-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id'] ?>"><i class="bi bi-pencil-square"></i></button>
                                     <button class="btn btn-danger btn-sm me-2" data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id'] ?>"><i class="bi bi-trash3"></i></button>
                                    </div>
                                 </td>
                                 
                             </tr>
                         <?php
                            }
                            ?>
                     </tbody>
                 </table>
             </div>
         <?php
            }
            ?>
     </div>
 </div>
 </div>
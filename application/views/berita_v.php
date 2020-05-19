<!DOCTYPE html>
<html>       
<head>
    <meta charset="UTF-8">   
    <title>Input Galeri</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>       
</head>       
<body>
    <div class="container">


                   <br><br>
                    <p>
                        <a class="btn btn-success" href="<?php echo site_url('Category/index'); ?>"><i class="fa fa-plus"></i> Category</a>
                        <a class="btn btn-success" href="<?php echo site_url('Berita/index'); ?>"><i class="fa fa-plus"></i> News</a>
                        <a class="btn btn-success" href="<?php echo site_url('Product/index'); ?>"><i class="fa fa-plus"></i> Product</a>
                        <a class="btn btn-success" href="<?php echo site_url('Help/index'); ?>"><i class="fa fa-plus"></i> Help</a>
                        <a class="btn btn-success" href="<?php echo site_url('Category/index'); ?>"><i class="fa fa-plus"></i> User</a>
                    </p>  
                    <br><br><br><br><br>

                        <p><a class="btn btn-success" href="<?php echo site_url('Berita/form'); ?>"><i class="fa fa-plus"></i> Tambah</a></p>              
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>    
                                    <th scope="col">Nomor</th>
                                    <th   scope="col">Judul</th>
                                    <th scope="col">Isi</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>    

                            <tbody>
                                <?php
                                $berita= $this->Berita_m->select_db();
                                $no = 1;
                                foreach ($berita as $row) {
                                    ?>  
                                    <tr>    
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->judul; ?></td>
                                        <td><?php echo $row->isi; ?></td>
                                        <td>
                                            <img src="<?php echo base_url();
                                    ?>assets/upload_berita/<?php echo $row->gambar;
                                    ?>" style="width: 80px"> 
                                        </td>

                                        <td><?php echo $row->tanggal; ?></td>
                                        <td>
                                            <a class="btn btn-danger" href="<?php
                                            echo site_url('Berita/delete/' . $row->id_berita);
                                            ?>"onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus </a>

                                            <a class="btn btn-info" href="<?php
                                               echo site_url('Berita/select_by/' . $row->id_berita);
                                               ?>">Edit</a>
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
            </body>
            </html>
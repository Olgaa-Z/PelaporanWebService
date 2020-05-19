<!DOCTYPE html>
<html>       
<head>
    <meta charset="UTF-8">   
    <title>Input Help</title>
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

                        <p><a class="btn btn-success" href="<?php echo site_url('Help/form'); ?>"><i class="fa fa-plus"></i> Tambah</a></p>              
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>    
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Help Name</th>
                                    <th scope="col">Picture</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>    

                            <tbody>
                                <?php
                                $help= $this->Help_m->select_db();
                                $no = 1;
                                foreach ($help as $row) {
                                    ?>  
                                    <tr>    
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->help_name; ?></td>
                                        <td>
                                            <img src="<?php echo base_url();
                                            ?>assets/upload_berita/<?php echo $row->help_image;
                                            ?>" style="width: 80px"> 
                                        </td>
                                        <td><?php echo $row->help_description; ?></td>

                                        <td>
                                            <a class="btn btn-danger" href="<?php
                                            echo site_url('Help/delete/' . $row->help_id);
                                            ?>"onclick="return confirm('Are you sure to delete the data?')">Delete </a>

                                            <a class="btn btn-info" href="<?php
                                               echo site_url('Help/select_by/' . $row->help_id);
                                               ?>">Edit</a>
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
            </body>
            </html>
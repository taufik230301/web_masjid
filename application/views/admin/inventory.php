<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/components/header');?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Berhasil Ditambahakan!",
        text: "Data Berhasil Ditambahkan!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?=base_Url();?>assets/admin_lte/dist/img/AdminLTELogo.png"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <?php $this->load->view('admin/components/navbar');?>

        <?php $this->load->view('admin/components/sidebar');?>



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Inventory</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Inventory</li>
                            </ol>

                        </div><!-- /.col -->
                        <button type="button" class="btn btn-primary ml-2 mt-3" data-toggle="modal"
                            data-target="#tambah_inventory">
                            Tambah Data Inventory
                        </button>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Inventory</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Inventory</th>
                                                <th>Merk</th>
                                                <th>Satuan</th>
                                                <th>Jumlah</th>
                                                <th>Kondisi Barang</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $id = 0;
                                            foreach($inventory as $i)
                                            :
                                            $id++;
                                            $id_inventory = $i['id_inventory'];
                                            $nama_inventory = $i['nama_inventory'];
                                            $merk = $i['merk'];
                                            $satuan = $i['satuan'];
                                            $jumlah = $i['jumlah'];
                                            $kondisi_barang = $i['kondisi_barang'];
                                            $tanggal_masuk = $i['tanggal_masuk'];
                                          

                                            ?>
                                            <tr>
                                                <td><?=$id?></td>
                                                <td><?=$nama_inventory?>
                                                </td>
                                                <td><?=$merk?></td>
                                                <td><?=$satuan?></td>
                                                <td><?=$jumlah?></td>
                                                <td><?=$kondisi_barang?></td>
                                                <td><?=$tanggal_masuk?></td>
                                                <td>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#ubah_inventory">
                                                                Edit <i class="nav-icon fas fa-edit"></i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#delete_inventory"
                                                                class="btn btn-danger">Hapus <i
                                                                    class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Modal -->
                                            <div class="modal fade" id="ubah_inventory" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Data
                                                                Inventory
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="delete_inventory" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data
                                                                Inventory</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.container-fluid -->
                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- Modal -->
                <div class="modal fade" id="tambah_inventory" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data
                                    Inventory
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?=base_url();?>Inventory/tambah_inventory" method="POST">
                                    <div class="form-group">
                                        <label for="nama_inventory">Nama Inventory</label>
                                        <input type="text" class="form-control" id="nama_inventory"
                                            name="nama_inventory" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="merk">Merk</label>
                                        <input type="text" class="form-control" id="merk" name="merk" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="satuan">Satuan</label>
                                        <select class="form-control" id="satuan" name="satuan" required>
                                            <option value="Lembar">Lembar</option>
                                            <option value="Buah">Buah</option>
                                            <option value="Kodi">Kodi</option>
                                            <option value="Lusin">Lusin</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah</label>
                                        <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kondisi_barang">Kondisi Barang</label>
                                        <select class="form-control" id="kondisi_barang" name="kondisi_barang" required>
                                            <option value="Tidak Baik">Tidak Baik</option>
                                            <option value="Sedang">Sedang</option>
                                            <option value="Amat Baik">Amat Baik</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_masuk">Tanggal Masuk</label>
                                        <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk"
                                            required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
            <!-- /.content -->
            <!-- /.content -->
        </div>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('admin/components/js');?>
</body>

</html>
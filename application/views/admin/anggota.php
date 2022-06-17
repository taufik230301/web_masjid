<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/components/header');?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
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
                            <h1 class="m-0">Anggota</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Anggota</li>
                            </ol>
                        </div><!-- /.col -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary ml-2 mt-3" data-toggle="modal"
                            data-target="#exampleModal">
                            Tambah Data
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
                                    <h3 class="card-title">Data Anggota</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>Jabatan</th>
                                                <th>Nomor KK</th>
                                                <th>Nomor KTP</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Agama</th>
                                                <th>Nomor HP</th>
                                                <th>Alamat</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Foto KK</th>
                                                <th>Status Verifikasi</th>
                                                <th>Tanggal Register</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $id = 0;
                                            foreach($anggota as $i)
                                            :
                                            $id++;
                                            $id_user = $i['id_user'];
                                            $nama_lengkap = $i['nama_lengkap'];
                                            $jabatan = $i['jabatan'];
                                            $no_kk = $i['no_kk'];
                                            $no_ktp = $i['no_ktp'];
                                            $jenis_kelamin = $i['jenis_kelamin'];
                                            $agama = $i['agama'];
                                            $no_hp = $i['no_hp'];
                                            $alamat = $i['alamat'];
                                            $tempat_lahir = $i['tempat_lahir'];
                                            $tanggal_lahir = $i['tanggal_lahir'];
                                            $foto_kk = $i['foto_kk'];
                                            $id_status_verifikasi = $i['id_status_verifikasi'];
                                            $tanggal_registered = $i['tanggal_registered'];
                                            
                                          

                                            ?>
                                            <tr>
                                                <td><?=$id?></td>
                                                <td><?=$nama_lengkap?>
                                                </td>
                                                <td><?=$jabatan?></td>
                                                <td><?=$no_kk?></td>
                                                <td><?=$no_ktp?></td>
                                                <td><?=$jenis_kelamin?></td>
                                                <td><?=$agama?></td>
                                                <td><?=$no_hp?></td>
                                                <td><?=$alamat?></td>
                                                <td><?=$tempat_lahir?></td>
                                                <td><?=$tanggal_lahir?></td>
                                                <td>
                                                    <center> <a
                                                            href="<?= base_url();?>assets/foto/<?php echo $foto_kk?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/foto/<?php echo $foto_kk?>"
                                                                style="width: 25%"> </a></center>
                                                </td>
                                                <td><?=$id_status_verifikasi?></td>
                                                <td><?=$tanggal_registered?></td>
                                                <td>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#ubah_anggota">
                                                                Edit <i class="nav-icon fas fa-edit"></i>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" data-toggle="modal" data-target="#delete_anggota"
                                                                class="btn btn-danger">Hapus <i
                                                                    class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!-- Modal -->
                                                <div class="modal fade" id="ubah_anggota" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Ubah Data
                                                                    Anggota
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
                                                <div class="modal fade" id="delete_anggota" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Delete
                                                                    Data
                                                                    Anggota
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
                                            </tr>
                                            <?php endforeach;?>
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
                <!-- /.container-fluid -->

                <!-- Modal Tambah Data Anggota -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Anggota</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?=base_url();?>Anggota/tambah_data_admin">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" id="password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_kk">Nomor Kartu Keluarga</label>
                                        <input type="text" class="form-control" id="no_kk" name="no_kk" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_ktp">Nomor KTP</label>
                                        <input type="text" class="form-control" id="no_ktp" name="no_ktp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <input type="text" class="form-control" id="agama" name="agama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">Nomor HP</label>
                                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            name="alamat" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto_kk">Foto Kartu Keluarga</label>
                                        <input type="file" class="form-control" id="foto_kk" name="foto_kk" required>
                                        <small id="foto_kk" class="form-text text-muted">Format PNG/JPG/JPEG (Max
                                            2MB)</small>
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
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

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
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('bendahara/components/header');?>
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

    <?php if ($this->session->flashdata('eror_input')){ ?>
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
            <img class="animation__shake" src="<?=base_Url();?>assets/admin_lte/dist/img/Loading.png" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <?php $this->load->view('bendahara/components/navbar');?>

        <?php $this->load->view('bendahara/components/sidebar');?>

        <?php 
        function rupiah($angka) {
    $hasil = 'Rp ' . number_format($angka, 2, ",", ".");
    return $hasil;
    } 
    ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Kas</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Kas</li>
                            </ol>
                        </div><!-- /.col -->
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
                                    <h3 class="card-title">Data Kas</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis Kas</th>
                                                <th>Nominal</th>
                                                <th>Keterangan Kas</th>
                                                <th>Tanggal Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $id = 0;
                                            foreach($kas as $i)
                                            :
                                            $id++;
                                            $id_kas = $i['id_kas'];
                                            $jenis_kas = $i['jenis_kas'];
                                            $nominal = $i['nominal'];
                                            $keterangan_kas = $i['keterangan_kas'];
                                            $tanggal_transaksi = $i['tanggal_transaksi'];

                                            ?>
                                            <tr>
                                                <td><?=$id?></td>
                                                <td><?=$jenis_kas?></td>
                                                <td><?=rupiah($nominal)?></td>
                                                <td><?=$keterangan_kas?></td>
                                                <td><?=$tanggal_transaksi?></td>
                                            </tr>
                                            <?php endforeach?>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="card p-4">
                                <h2 class="text-danger">Pengeluaran : <b> <?=rupiah($kas_kredit['nominal'])?> </b></h2>
                                <h2 class="text-success">Pemasukan :<b> <?=rupiah($kas_debit['nominal'])?> </b></h2>
                                <h2 class="text-primary">Total Kas Sekarang :<b>
                                        <?=rupiah($kas_debit['nominal']-$kas_kredit['nominal']) ?> </b></h2>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kematian</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?=base_url();?>Kas/tambah_data_bendahara" method="POST">
                                    <div class="form-group">
                                        <label for="jenis_kas">Jenis Kas</label>
                                        <select class="form-control" id="jenis_kas" name="jenis_kas">
                                            <option value="Debit">Debit (Pemasukan)</option>
                                            <option value="Kredit">Kredit (Pengeluaran)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nominal">Nominal</label>
                                        <input type="text" class="form-control" id="nominal" name="nominal" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan_kas">Keterangan Kas</label>
                                        <textarea class="form-control" id="keterangan_kas" rows="3"
                                            name="keterangan_kas" required></textarea>
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

    <?php $this->load->view('bendahara/components/js');?>
</body>

</html>
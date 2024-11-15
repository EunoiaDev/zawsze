<?= $this->extend('layout/backend') ?>;

<?= $this->section('content') ?>
<title>Assist &mdash; Daftar Akun </title>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <!-- <h1>Selamat Datang, Reza!</h1> -->
        <a href="<?= site_url('aktiva/new') ?>" class="btn btn-primary">Tambah Akun</a>
    </div>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert"> x </button>
                <?= session()->getFlashdata('success'); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert"> x </button>
                <?= session()->getFlashdata('error'); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="section-body">
        <!-- dinamis tempat data -->
        <div class="card">
            <div class="card-header">
                <h4>Daftar Akun</h4>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-striped table-md" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Akun</th>
                                <th>Nama Akun</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dtaktiva as $key => $value) : ?>

                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $value->kode_akun ?></td>
                                    <td><?= $value->nama_akun ?></td>
                                    <td class="text-center" style="width: 21%;">
                                        <!-- <a href="" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a> -->
                                        <a href="<?= site_url('aktiva/edit/' . $value->id_akun) ?> " class="btn btn-warning" style="width: 75px; height: 35px; display: inline-flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-pencil-alt"></i> Rincian
                                        </a>
                                        <!-- <a href="" class="btn btn-danger" style="width: 75px; height: 35px; display: inline-flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-trash-alt"></i> Hapus
                                        </a> -->
                                        <form action="<?= site_url('aktiva/' . $value->id_akun) ?>" method="post" id="del-<?= $value->id_akun ?>" class="d-inline ">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger btn-sm" style="width: 75px; height: 35px; display: inline-flex; align-items: center; justify-content: center;" data-confirm="Hapus Data...? | Apakah Anda Yakin...?" data-confirm-yes="hapus(<?= $value->id_akun ?>)"><i class="fas fa-trash"></i>Delete</button>

                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection(); ?>
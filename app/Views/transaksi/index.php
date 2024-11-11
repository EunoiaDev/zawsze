<?= $this->extend('layout/backend') ?>;

<?= $this->section('content') ?>
<title>Assist &mdash; Transaksi </title>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <!-- <h1>Selamat Datang, Reza!</h1> -->
        <a href="<?= site_url('transaksi/new') ?>" class="btn btn-primary">Tambah Transaksi</a>
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
                <h4>Jurnal Transaksi Kas Operasional</h4>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-striped table-md" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Bundle</th>
                                <th>Tanggal</th>
                                <th>Deskripsi</th>
                                <th>Debit</th>
                                <th>Kredit</th>
                                <th>PIC</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dttransaksi as $key => $value) : ?>

                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $value->no_bundle ?></td>
                                    <td><?= $value->tanggal ?></td>
                                    <td><?= $value->deskripsi ?></td>
                                    <td><?= $value->debit ?></td>
                                    <td><?= $value->kredit ?></td>
                                    <td><?= $value->PIC ?></td>
                                    <td class=" text-center" style="width: 21%;">
                                        <!-- <a href="" class="btn btn-warning"><i class="fas fa-pencil-alt"></i> Edit</a>
                                        <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a> -->
                                        <a href="<?= site_url('transaksi/' . $value->id_transaksi) . '/edit' ?> " class="btn btn-warning" style="width: 75px; height: 35px; display: inline-flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-pencil-alt"></i> Rincian
                                        </a>
                                        <!-- <a href="" class="btn btn-danger" style="width: 75px; height: 35px; display: inline-flex; align-items: center; justify-content: center;">
                                            <i class="fas fa-trash-alt"></i> Hapus
                                        </a> -->
                                        <form action="<?= site_url('transaksi/' . $value->id_transaksi) ?>" method="post" id="del-<?= $value->id_transaksi ?>" class="d-inline ">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger btn-sm" style="width: 75px; height: 35px; display: inline-flex; align-items: center; justify-content: center;" data-confirm="Hapus Data...? | Apakah Anda Yakin...?" data-confirm-yes="hapus(<?= $value->id_transaksi ?>)"><i class="fas fa-trash"></i>Delete</button>

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
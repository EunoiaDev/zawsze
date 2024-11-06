<?= $this->extend('layout/backend') ?>;

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <!-- <h1>Selamat Datang, Reza!</h1> -->
        <a href="<?= site_url('transaksi') ?>" class="btn btn-primary">Tambah Transaksi</a>
    </div>

    <div class="section-body">
        <!-- dinamis tempat data -->
        <div class="card">
            <div class="card-header">
                <h4>Tambah Transaksi</h4>
            </div>
            <div class="card-body p-4">
                <form method="post" action="<?= site_url('transaksi') ?>">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label>Kwitansi</label>
                        <input type="text" class="form-control" name="kwitansi" placeholder="Kwitansi" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" required>
                    </div>
                    <div class="form-group">
                        <label>Keterangan Jurnal</label>
                        <input type="text" class="form-control" name="ketjurnal" placeholder="Keterangan Jurnal" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i>Submit</button>
                        <button class="btn btn-secondary" type="reset"><i></i>Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>
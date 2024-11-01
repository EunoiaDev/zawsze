<?= $this->extend('layout/backend') ?>;


<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <!-- <h1>Selamat Datang, Reza!</h1> -->
        <a href="<?= site_url('aktiva') ?>" class="btn btn-primary">Tambah Akun</a>
    </div>

    <div class="section-body">
        <!-- dinamis tempat data -->
        <div class="card">
            <div class="card-header">
                <h4>Tambah Akun</h4>
            </div>
            <div class="card-body p-4">
                <form method="post" action="<?= site_url('aktiva') ?>">
                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label>Kode Akun</label>
                        <input type="text" class="form-control" name="kode_akun" placeholder="Kode Akun" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Akun</label>
                        <input type="text" class="form-control" name="nama_akun" placeholder="Nama Akun" required>
                    </div>
                    <div class="form-group">
                        <label>Grup Akun</label>
                        <input type="text" class="form-control" name="grup_akun" placeholder="Grup Akun" required>
                    </div>
                    <div class="form-group">
                        <label>Grup Laporan</label>
                        <input type="text" class="form-control" name="grup_laporan" placeholder="Grup Laporan" required>
                    </div>
                    <div class="form-group">
                        <label>Saldo Awal Debet</label>
                        <input type="text" class="form-control" name="saldo_awal_debet" placeholder="Saldo Awal Debet" required>
                    </div>
                    <div class="form-group">
                        <label>Saldo Awal Kredit</label>
                        <input type="text" class="form-control" name="saldo_awal_kredit" placeholder="Saldo Awal Kredit" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-paper-plane"></i>Submit</button>
                        <button class="btn btn-secondary" type="submit"><i></i>Reset</button>

                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection(); ?>
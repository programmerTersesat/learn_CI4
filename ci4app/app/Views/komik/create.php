<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Tambah Data Komik</h2>


                <form action="/komik/save" method="post">
                    <?=csrf_field(); ?>

                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input name="judul" autofocus value="<?= old('judul') ?>" type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '' ?>" id="judul" placeholder="judul">
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                        <div class="col-sm-10">
                            <input value="<?= old('penulis') ?>" name="penulis" type="text" class="form-control" id="penulis" placeholder="penulis">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                        <div class="col-sm-10">
                            <input value="<?= old('penerbit') ?>" name="penerbit" type="text" class="form-control" id="penerbit" placeholder="penerbit">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                        <div class="col-sm-10">
                            <input value="<?= old('sampul') ?>"  name="sampul" type="text" class="form-control" id="sampul" placeholder="sampul">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Edit Data Komik</h2>


                <form action="/komik/update/<?= $komik['id']; ?>" method="post">

                    <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
                    <?=csrf_field(); ?>

                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input name="judul" autofocus value="<?= $komik['judul'] ?>" type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '' ?>" id="judul" placeholder="judul">
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                        <div class="col-sm-10">
                            <input value="<?= $komik['penulis'] ?>" name="penulis" type="text" class="form-control" id="penulis" placeholder="penulis">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                        <div class="col-sm-10">
                            <input value="<?= $komik['penerbit'] ?>" name="penerbit" type="text" class="form-control" id="penerbit" placeholder="penerbit">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                        <div class="col-sm-10">
                            <input value="<?= $komik['sampul'] ?>"  name="sampul" type="text" class="form-control" id="sampul" placeholder="sampul">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>
<?= $this->extend('guest_book_layout/template'); ?>

<?= $this->section('guest_book_content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Guest Book Data Edit</h2>

                <form action="/guest_book/gb_update/<?= $gbdata['id']; ?>" method="post">

                    <input type="hidden" name="id" value="<?= $gbdata['id']; ?>" />

                    <input type="hidden" name="id_user" value="<?= $session_id_user; ?>" />
                    <?=csrf_field(); ?>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input autofocus name="nama" value="<?= $gbdata['nama'] ?>" type="text" class="form-control" id="nama" placeholder="nama">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input name="title" value="<?= $gbdata['title']?>" type="text" class="form-control" id="title" placeholder="title" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label> <br>
                        <textarea name="alamat"
                                  class="form-control"
                                  cols="30" rows="10"
                                  placeholder="Write a great news!"><?=$gbdata['alamat'] ?></textarea>
                    </div>

                    <div class="form-group row">
                        <label for="institusi" class="col-sm-2 col-form-label">Institusi</label>
                        <div class="col-sm-10">
                            <input name="institusi" value="<?=$gbdata['institusi'] ?>" type="text" class="form-control" id="institusi" placeholder="institusi" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-10">
                            <input name="no_telp" value="<?=$gbdata['no_telp'] ?>" type="text" class="form-control" id="no_telp" placeholder="no_telp" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label> <br>
                        <select name="status" id="status">
                            <option value="0" <?= ($gbdata["status"] == 0)? "selected" : "" ?> >Tidak Aktif</option>
                            <option value="1" <?= ($gbdata["status"] == 1)? "selected" : "" ?> > Aktif </option>
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis_kelamin</label> <br>
                        <select name="jenis_kelamin" id="jenis_kelamin">
                            <option value="Pria" <?= ($gbdata["status"] == "Pria") ? "selected" : "" ?> >Pria</option>
                            <option value="Wanita" <?= ($gbdata["status"] == "Wanita") ? "selected" : "" ?> > Wanita </option>
                        </select>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <br />
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>
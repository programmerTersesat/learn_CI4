<?= $this->extend('guest_book_layout/template'); ?>

<?= $this->section('guest_book_content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Create Data User Guest Book</h2>

                <form action="/guest_book/user_save" method="post">

                    <?=csrf_field(); ?>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input autofocus name="nama" type="text" class="form-control" id="nama" placeholder="nama">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" type="text" class="form-control" id="email" placeholder="email" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name="password" type="text" class="form-control" id="password" placeholder="password" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input name="nik" type="text" class="form-control" id="nik" placeholder="nik" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label> <br>
                        <textarea name="alamat"
                                  class="form-control"
                                  cols="30" rows="10"
                                    placeholder="Write a great news!"></textarea>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label> <br>
                        <select name="status" id="status">
                            <option value="0">Tidak Aktif</option>
                            <option value="1"> Aktif </option>
                        </select>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-10">
                            <br />
                            <button type="submit" class="btn btn-primary">Create Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>
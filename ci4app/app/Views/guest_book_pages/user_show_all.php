<?= $this->extend('guest_book_layout/template'); ?>

<?= $this->section('guest_book_content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/guest_book/user_create" class="btn btn-primary mb-3 mt-1">Tambah Data User</a>
            <h1 class="mt-2">Tambah User Guest Book</h1>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status</th>
                    <th scope="col">Detail</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach($user as $k): ?>
                    <tr>
                        <th scope="row"><?php echo $i++; ?></th>
                        <td><?php echo $k['nama'] ?></td>
                        <td><?php echo $k['email'] ?></td>
                        <td><?php echo $k['nik'] ?></td>
                        <td><?php echo $k['alamat'] ?></td>
                        <td><?php echo ($k['status'] == 1) ? 'Aktif' : 'Tidak';  ?></td>
                        <td>
                            <a href="/guest_book/user/<?=$k['id'] ?>" class="btn btn-success">Detail</a>
                        </td>
                        <td>
                            <a href="/guest_book/user_delete/<?=$k['id'] ?>" class="btn btn-success">Delete</a>
                        </td>
                        <td>
                            <a href="/guest_book/user_edit/<?=$k['id'] ?>" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

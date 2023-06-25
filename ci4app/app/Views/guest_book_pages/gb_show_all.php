<?= $this->extend('guest_book_layout/template'); ?>

<?= $this->section('guest_book_content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/guest_book/gb_create" class="btn btn-primary mb-3 mt-1">Tambah Data Guest Book</a><br />
            <h1 class="mt-2">Guest Book Show Data</h1>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Institusi</th>
                    <th scope="col">No Telp</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach($gbdata as $k): ?>
                    <tr>
                        <th scope="row"><?php echo $i++; ?></th>
                        <td><?php echo $k['title'] ?></td>
                        <td><?php echo $k['nama'] ?></td>
                        <td><?php echo $k['alamat'] ?></td>
                        <td><?php echo $k['institusi'] ?></td>
                        <td><?php echo $k['no_telp'] ?></td>
                        <td><?php echo $k['jenis_kelamin'] ?></td>
                        <td><?php echo ($k['status'] == 1) ? 'Aktif' : 'Tidak';  ?></td>

                        <td>
                            <a href="/guest_book/gb_delete/<?=$k['id'] ?>" class="btn btn-success">Delete</a>
                        </td>
                        <td>
                            <a href="/guest_book/gb_edit/<?=$k['id'] ?>" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<a href="<?= BASE_URL.'index.php?r=home/insertbarang' ?>" class="btn btn-primary">Tambah Barang</a>
<br/><br/>
        <table class="table">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>QTY</th>
            </tr>
            </thead>
            <?php foreach ($data as $item) : ?>
            <tr scope="row">
                <td><?= $item['id'] ?></td>
                <td><?= $item['nama'] ?></td>
                <td><span class="badge bg-<?=$item['qty']>50? 'success':'danger' ?>"><?=$item['qty'] ?></span></td>
                <td>
                    <a href="<?= BASE_URL.'index.php?r=home/updatebarang/'.$item['id']?>"class="badge text-primary">Update</a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>


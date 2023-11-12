
<div class="card mt-5">
    <h5 class="card-header">
        Kebutuhan Buku
    </h5>
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Judul</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pengadaan as $ms): ?>
                    <tr>
                        <td><?php echo $ms->nama_buku; ?></td>
                        <td><?php echo $ms->penerbit; ?></td>
                        <td><?php echo $ms->stok; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

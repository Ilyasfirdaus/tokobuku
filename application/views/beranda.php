<!-- spasi -->
<br>
<!-- akhir spasi -->



<!-- ini adalah menu card -->
<div class="card text-center">
 
  <div class="card-body">
    <h5 class="card-title">Selamat Datang</h5>
    <p class="card-text">Di Toko Kami.</p>
  
  </div>
  

        <div class="container">
            <div class="wrapper mt-4">
                <form method="post" class="d-flex" action="<?php echo site_url('Welcome/pencarianbuku'); ?>">
                    <input type="text" name="cari" placeholder="Judul Buku" class="form-control me-2">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                </form>
                <table class="table table-bordered table-hover mt-2">
                    <thead>
                        <tr>
                            <th>No. Buku</th>
                            <th>Nama Buku</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Penerbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($GetDataCariBuku) && !empty($GetDataCariBuku)) {
                            foreach ($GetDataCariBuku as $buku) { ?>
                                <tr>
                                    <td><?php echo $buku->id_buku; ?></td>
                                    <td><?php echo $buku->nama_buku; ?></td>
                                    <td><?php echo $buku->kategori; ?></td>
                                    <td><?php echo $buku->harga; ?></td>
                                    <td><?php echo $buku->stok; ?></td>
                                    <td><?php echo $buku->penerbit; ?></td>
                                </tr>
                            <?php
                            }
                        } else { ?>
                            <tr>
                                <td colspan="2">Tidak ada hasil pencarian.</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
</div>
<!-- akhir -->


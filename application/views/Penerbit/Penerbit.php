<br>
<div class="card">
  <h5 class="card-header">Penginputan Penerbit</h5>
  <div class="card-body">

    <!-- Button Tambah -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Tambah">
    + Add Data
    </button>
    <a href="<?php echo site_url('Welcome/pencarianpenerbit')?>" class="btn btn-outline-primary">Cari Penerbit</a>
    <!-- Button Tambah -->

    <!-- Modal Tambah -->
    <div class="modal fade" id="Tambah" tabindex="-1" aria-labelledby="TambahLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="TambahLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="<?php echo site_url('Welcome/penerbitInsert'); ?>" method="post">
              <div class="mb-3">
                <label for="id_penerbit" class="col-form-label">ID:</label>
                <input type="text" class="form-control" name="id_penerbit">
              </div>
              <div class="mb-3">
                <label for="nama" class="col-form-label">Nama:</label>
                <input type="text" class="form-control" name="nama">
              </div>
              <div class="mb-3">
                <label for="alamat" class="col-form-label">Alamat:</label>
                <input type="text" class="form-control" name="alamat">
              </div>
              <div class="mb-3">
                <label for="kota" class="col-form-label">Kota:</label>
                <input type="text" class="form-control" name="kota">
              </div>
              <div class="mb-3">
                <label for="telepon" class="col-form-label">Telepon:</label>
                <input type="text" class="form-control" name="telepon">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Add Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Tambah -->

    <!-- Table  -->
    <table class="table table-bordered mt-3">
      <thead>
        <tr>
          <th scope="col">ID Penerbit</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Kota</th>
          <th scope="col">Telepon</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          if (!empty($DataPencarianBuku)) {

            foreach ($DataPencarianBuku as $ReadDS) {
          ?>
        <tr>

          <td><?php echo $ReadDS->id_penerbit; ?></td>
          <td><?php echo $ReadDS->nama; ?></td>
          <td><?php echo $ReadDS->alamat; ?></td>
          <td><?php echo $ReadDS->kota; ?></td>
          <td><?php echo $ReadDS->telepon; ?></td>
          <td>

            <!-- ini button edit   -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $ReadDS->id_penerbit; ?>">Edit</button>
            <!-- ini button end -->

            <!-- ini modal Edit-->
            <div class="modal fade" id="exampleModal_<?php echo $ReadDS->id_penerbit; ?>" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="<?php echo site_url('Welcome/penerbitUpdate'); ?>" method="post">
                      <div class="mb-3">
                        <label for="id_penerbit" class="col-form-label"> ID:</label>
                        <input type="text" class="form-control" name="id_penerbit" value="<?php echo $ReadDS->id_penerbit; ?> " hidden>
                        <input type="text" class="form-control" name="id_penerbit" value="<?php echo $ReadDS->id_penerbit; ?> " disabled>
                      </div>
                      <div class="mb-3">
                        <label for="nama" class="col-form-label"> Nama:</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $ReadDS->nama; ?>">
                      </div>
                      <div class="mb-3">
                        <label for="alamat" class="col-form-label">Alamat:</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $ReadDS->alamat; ?>">
                      </div>
                      <div class="mb-3">
                        <label for="kota" class="col-form-label">Kota:</label>
                        <input type="text" class="form-control" name="kota" value="<?php echo $ReadDS->kota; ?>">
                      </div>
                      <div class="mb-3">
                        <label for="telepon" class="col-form-label">Telepon:</label>
                        <input type="text" class="form-control" name="telepon" value="<?php echo $ReadDS->telepon; ?>">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- akhir modal -->

            <!-- hapus button awal -->
            <a type="button" class="btn btn-danger" href="<?php echo site_url('Welcome/penerbitDelete/' . $ReadDS->id_penerbit); ?>" onclick="return confirm('are you sure?')">
              Delete
            </a>
            <!-- hapus button akhir -->
          </td>
        </tr>
    <?php
            }
          }
    ?>
      </tbody>
    </table>
  </div>
</div>
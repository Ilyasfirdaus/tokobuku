<!-- spasi -->
<br>
<!-- akhir spasi -->


<!-- ini tampilan awal search -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex" role="search">
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- ini adalah tampilan akhir search -->




<!-- ini adalah header -->
<div class="card">
  <h5 class="card-header">Form Data Buku</h5>
  <div class="card-body">
<!-- ini adalah akhir header -->








<!-- ini adalah tabel -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID Buku</th>
      <th scope="col">Kategori</th>
      <th scope="col">Nama Buku</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Penerbit</th>
    </tr>
  </thead>
  <?php
	if(!empty($DataPencarianBuku))
	{
        $no= 1;
		foreach($DataPencarianBuku as $ReadDS)
    {
	?>
  <tbody>
    <tr>
      <th><?php echo $no; ?></th>
      <td><?php echo $ReadDS->id_buku; ?></td>
      <td><?php echo $ReadDS->kategori; ?></td>
      <td><?php echo $ReadDS->nama_buku; ?></td>
      <td><?php echo $ReadDS->harga; ?></td>
      <td><?php echo $ReadDS->stok; ?></td>
      <td><?php echo $ReadDS->penerbit; ?></td>
     
</tr>
<?php		
      	$no++;}
	}
	?>
   
</tbody>
</table>
<!-- akhir tabel-->





  </div>
</div>


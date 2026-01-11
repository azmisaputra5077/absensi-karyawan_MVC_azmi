<div style="background: rgba(255, 255, 255, 0.9); border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); padding: 40px; margin: 40px auto; max-width: 1200px;">
<h3>Laporan Absensi</h3>
<a href="/laporan/export" class="btn btn-success mb-3">Export ke CSV</a>
<table class="table table-striped mt-4">
<tr><th>Nama</th><th>Tanggal</th><th>Status</th></tr>
<?php foreach($data as $d): ?>
<tr><td><?= $d['nama'] ?></td><td><?= $d['tanggal'] ?></td><td><?= $d['status'] ?></td></tr>
<?php endforeach; ?>
</table>
</div>
<div style="background: rgba(255, 255, 255, 0.9); border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); padding: 40px; margin: 40px auto; max-width: 1200px;">
<h3>Absensi</h3>
<form method="post" action="/absensi/store">
<input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" class="form-control mb-3" required>
<select name="karyawan_id" class="form-select mb-3">
<?php foreach($karyawan as $k): ?>
<option value="<?= $k['id'] ?>"><?= $k['nama'] ?></option>
<?php endforeach; ?>
</select>
<select name="status" class="form-select mb-3">
<option value="Hadir">Hadir</option>
<option value="Izin">Izin</option>
<option value="Alpha">Alpha</option>
</select>
<button class="btn btn-primary">Absen</button>
</form>
<table class="table table-striped mt-4">
<tr><th>Nama</th><th>Tanggal</th><th>Status</th></tr>
<?php foreach($data as $d): ?>
<tr><td><?= $d['nama'] ?></td><td><?= $d['tanggal'] ?></td><td><?= $d['status'] ?></td></tr>
<?php endforeach; ?>
</table>
</div>
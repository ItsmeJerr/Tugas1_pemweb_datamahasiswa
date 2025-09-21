
<?php
$title = 'Data Mahasiswa';
ob_start();
?>

<div class="row mb-4">
    <div class="col-md-8">
        <h2 class="mb-0">
            <i class="fas fa-users text-primary me-2"></i>
            Data Mahasiswa
        </h2>
        <p class="text-muted">Kelola data mahasiswa dengan mudah</p>
    </div>
    <div class="col-md-4 text-end">
        <a href="index.php?action=create" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>
            Tambah Mahasiswa
        </a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <?php if (!empty($mahasiswa)): ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th width="10%">No</th>
                            <th>Nama Mahasiswa</th>
                            <th>NIM</th>
                            <th width="20%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mahasiswa as $index => $m): ?>
                        <tr>
                            <td class="text-muted"><?= $index + 1 ?></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div>
                                        <strong><?= htmlspecialchars($m['nama']) ?></strong>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-light text-dark"><?= htmlspecialchars($m['nim']) ?></span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="index.php?action=edit&id=<?= $m['id'] ?>" 
                                       class="btn btn-outline-primary btn-sm" 
                                       title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="index.php?action=delete&id=<?= $m['id'] ?>" 
                                       class="btn btn-outline-danger btn-sm" 
                                       title="Hapus"
                                       onclick="return confirm('Apakah Anda yakin ingin menghapus data mahasiswa <?= htmlspecialchars($m['nama']) ?>?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="text-center py-5">
                <div class="mb-3">
                    <i class="fas fa-users fa-3x text-muted"></i>
                </div>
                <h5 class="text-muted">Belum ada data mahasiswa</h5>
                <p class="text-muted">Klik tombol "Tambah Mahasiswa" untuk menambahkan data pertama</p>
                <a href="index.php?action=create" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>
                    Tambah Mahasiswa Pertama
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<style>
.avatar-sm {
    width: 40px;
    height: 40px;
}
</style>

<?php
$content = ob_get_clean();
include 'layout.php';
?>
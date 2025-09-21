
<?php
$title = 'Tambah Mahasiswa';
ob_start();
?>

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">
                    <i class="fas fa-user-plus me-2"></i>
                    Tambah Mahasiswa Baru
                </h4>
            </div>
            <div class="card-body">
                <?php if (isset($error)): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <?= htmlspecialchars($error) ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <?php endif; ?>
                
                <form method="post" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="nama" class="form-label">
                            <i class="fas fa-user me-1"></i>
                            Nama Lengkap
                        </label>
                        <input type="text" 
                               class="form-control" 
                               id="nama" 
                               name="nama" 
                               placeholder="Masukkan nama lengkap mahasiswa"
                               required>
                        <div class="invalid-feedback">
                            Mohon masukkan nama lengkap mahasiswa.
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="nim" class="form-label">
                            <i class="fas fa-id-card me-1"></i>
                            Nomor Induk Mahasiswa (NIM)
                        </label>
                        <input type="text" 
                               class="form-control" 
                               id="nim" 
                               name="nim" 
                               placeholder="Masukkan NIM mahasiswa"
                               required>
                        <div class="invalid-feedback">
                            Mohon masukkan NIM mahasiswa.
                        </div>
                    </div>
                    
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-fill">
                            <i class="fas fa-save me-2"></i>
                            Simpan Data
                        </button>
                        <a href="index.php" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-2"></i>
                            Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
// Bootstrap form validation
(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>

<?php
$content = ob_get_clean();
include 'layout.php';
?>

<?php
$title = 'Edit Mahasiswa';
ob_start();
?>

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">
                    <i class="fas fa-user-edit me-2"></i>
                    Edit Data Mahasiswa
                </h4>
            </div>
            <div class="card-body">
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
                               value="<?= htmlspecialchars($data['nama']) ?>"
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
                               value="<?= htmlspecialchars($data['nim']) ?>"
                               placeholder="Masukkan NIM mahasiswa"
                               required>
                        <div class="invalid-feedback">
                            Mohon masukkan NIM mahasiswa.
                        </div>
                    </div>
                    
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-warning flex-fill">
                            <i class="fas fa-save me-2"></i>
                            Update Data
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
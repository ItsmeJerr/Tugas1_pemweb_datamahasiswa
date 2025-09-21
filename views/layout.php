<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Sistem Mahasiswa' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            border-radius: 0.5rem;
        }
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
        }
        .table {
            background-color: white;
        }
        .table thead th {
            border-top: none;
            font-weight: 600;
            color: #495057;
        }
        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
        }
        .btn-group .btn {
            border-radius: 0.375rem;
        }
        .btn-group .btn:first-child {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        .btn-group .btn:last-child {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 0.375rem;
        }
        @media (max-width: 768px) {
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }
            .table-responsive {
                border-radius: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-graduation-cap me-2"></i>
                Sistem Mahasiswa
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-list me-1"></i>
                    Daftar Mahasiswa
                </a>
                <a class="nav-link" href="index.php?action=create">
                    <i class="fas fa-plus me-1"></i>
                    Tambah Mahasiswa
                </a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?= $content ?>
    </div>

    <footer class="bg-light text-center text-muted py-3 mt-5">
        <div class="container">
            <small>&copy; 2025 Sistem Mahasiswa. Dibuat dengan Bootstrap.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

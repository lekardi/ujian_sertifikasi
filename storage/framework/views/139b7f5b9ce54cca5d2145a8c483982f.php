<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengguna</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <style>
        body {
            background-image: url('assets/images/new-cars-model/glry1.jpg'); /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            display: flex; /* Menggunakan flex untuk pusatkan konten */
            align-items: center; /* Vertikal center */
            justify-content: center; /* Horizontal center */
        }
        .card {
            background-color: white; /* Warna latar belakang putih */
            opacity: 0.9; /* Sedikit transparansi, bisa diubah sesuai kebutuhan */
            border-radius: 10px; /* Sudut membulat */
            padding: 20px; /* Ruang dalam card */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Bayangan */
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login Pengguna</div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Masuk
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\asust\Downloads\ujian_sertifikasi\ujian_sertifikasi\resources\views/auth/login.blade.php ENDPATH**/ ?>
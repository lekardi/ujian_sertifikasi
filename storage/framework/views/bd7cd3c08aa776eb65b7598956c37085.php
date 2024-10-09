
<?php $__env->startSection('content'); ?>
<div class="container mt-5 d-flex justify-content-center">
    <div class="card p-4 shadow-sm" style="width: 400px;">
        <h2 class="mb-4 text-center text-primary">Tambahkan User</h2>

        <!-- Display success or error messages -->
        <?php if(session('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- Form to add a user -->
        <form action="<?php echo e(route('admin.addUser')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group mb-3">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-group mb-4">
                <label for="role">Login as:</label>
                <select name="role" class="form-control" required>
                    <option value="admin">User</option>
                    <option value="user">Anggota</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Tambahkan User</button>
        </form>

        <!-- Logout Button -->
        <form action="<?php echo e(route('logout')); ?>" method="POST" style="display: inline;">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-danger mt-3 btn-block">Logout</button>
        </form>

      
        
    </div>
</div>

<!-- Button to navigate to Create User page -->
<?php /**PATH C:\Users\WINDOWS 10\OneDrive\Documents\sertifikasi\ujian_sertifikasi\resources\views/dashboard.blade.php ENDPATH**/ ?>
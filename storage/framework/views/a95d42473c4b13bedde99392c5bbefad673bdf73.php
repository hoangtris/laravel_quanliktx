

<?php $__env->startSection('content'); ?>

	<div class="row container-fluid my-5">
		<div class="col-4"></div>
		<div class="col-4">
			<p class="h1 text-center text-primary text-uppercase mb-4">Đăng nhập</p>
			<form action="" method="post" accept-charset="utf-8">
                <input type="email" name="txt_email" class="form-control mb-4" placeholder="E-mail">
                                
                <input type="password" class="form-control" placeholder="Mật khẩu" name="matkhau">
                
                <button class="btn btn-outline-primary my-4 btn-block" name="btn_DangNhap" type="submit">Đăng nhập</button>
                
                <small id="#" class="form-text text-muted mb-4 text-center">
                Chưa có tài khoản, <a href="<?php echo e(route('dangki')); ?>">ấn vào đây để đăng kí</a>
                </small>
			</form>
		</div>
		<div class="col-4"></div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/laravel_quanliktx/resources/views/pages/dangnhap.blade.php ENDPATH**/ ?>
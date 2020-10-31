

<?php $__env->startSection('content'); ?>

	<div class="row container-fluid my-5">
		<div class="col-3"></div>
		<div class="col-6">
			<p class="h1 text-center text-primary text-uppercase mb-4">Đăng kí thành viên</p>
			<form action="" method="post" accept-charset="utf-8">
				<div class="form-row mb-4">
                	<div class="col">
                        <!-- First name -->
                        <input type="text" id="txt_ten" name="txt_ten" class="form-control" placeholder="Họ Tên">
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <select class="form-control" name="sl_gioitinh" id="sl_gioitinh">
							<option value="null">Giới tính</option>
							<option value="Nam">Nam</option>
							<option value="Nữ">Nữ</option>
						</select>
                    </div>
                </div>

                <!-- Password -->
                <div class="form-row mb-4">
                    <div class="col-6">
                        <input type="password" class="form-control" placeholder="Mật khẩu" name="matkhau">
                    </div>

                    <div class="col-6">
                        <input type="password" class="form-control" placeholder="Xác nhận mật khẩu" name="xacnhanmatkhau">
                    </div>
                </div>

                <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
					</small>

                <!-- so dt & CMND -->
                <div class="form-row">
                    <div class="col-6">
                        <input type="tel" class="form-control mb-4" placeholder="Số điện thoại" name="sdt">
                    </div>
                    <div class="col-6">
                        <input type="number" class="form-control mb-4" placeholder="CMND" name="cmnd">
                    </div>
                </div>

                <!-- E-mail -->
                <input type="email" name="txt_email" class="form-control mb-4" placeholder="E-mail">

                <!-- Địa chỉ -->
                <input type="text" name="txt_diachi" class="form-control mb-4" placeholder="Địa chỉ">
				
				<!-- Ảnh đại diện -->
				<label for="">Ảnh đại diện</label>
				
                <input type="file" name="txt_HinhAnh" class="form-control-file">

                <!-- Sign up button -->
                <button class="btn btn-outline-primary my-4 btn-block" name="btn_DangKi" type="submit">Đăng kí</button>
				
				<small id="#" class="form-text text-muted mb-4 text-center">
 				Đã có tài khoản, <a href="<?php echo e(route('dangnhap')); ?>">ấn vào đây để đăng nhập</a>
					</small>
			</form>
		</div>
		<div class="col-3"></div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/laravel_quanliktx/resources/views/pages/dangki.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?>
<div class="container my-5 py-5 z-depth-1">
      <!--Section: Content-->
      <section class="text-center">
        <!-- Section heading -->
        <h3 class="font-weight-bold mb-5">Chi tiết phòng #<?php echo e($phong->ID_Phong); ?></h3>
        <div class="row">
          <div class="col-lg-6 mr-3">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb1" class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4" data-ride="carousel">
              <!--Slides-->
              <div class="carousel-inner text-center text-md-left" role="listbox">
                <div class="carousel-item active">
                  <img src="
                  <?php if(strstr($phong->HinhAnh,'http')): ?>
                  	<?php echo e($phong->HinhAnh); ?>

                  <?php else: ?>
                  	<?php echo e(asset('image/'.$phong->HinhAnh)); ?>

                  <?php endif; ?>
                  " alt="" height="550px">
                </div>
              </div>
              <!--/.Slides-->
            </div>
            <!--/.Carousel Wrapper-->
          </div>

          <div class="col-lg-5 text-center text-md-left">

            <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">Phòng số #<?php echo e($phong->ID_Phong); ?>       
            </h2>

            <h4 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
              <span class="red-text font-weight-bold">
                <strong><?php echo e(number_format($phong->Gia)); ?></strong>
              </span>
            </h4>

            <div class="font-weight-normal">
            <p><?php echo e($phong->MoTaNgan); ?></p>
            <p><strong>Sức chứa: </strong><?php echo e($phong->SucChua); ?> người</p>
            <p><strong>Khu vực: </strong><?php echo e($phong->ID_KhuVuc); ?></p>
            <p><strong>Loại phòng: </strong><?php echo e($phong->ID_LoaiPhong); ?></p>
            <p><strong>Số lượng nhà vệ sinh: </strong><?php echo e($phong->WC); ?></p>
            <p><strong>An ninh: </strong><?php echo e($phong->AnNinh); ?></p>
            <p><strong>Tiện nghi: </strong><?php echo e($phong->TienNghi); ?></p>

              <div class="mt-5">
                <p class="grey-text"><strong>Thời hạn muốn thuê theo hợp đồng</strong></p>
                <form action="../thanhtoan/index.php" method="post" class="ml-3">  
                    <div class="row text-center text-md-left">
                      <div class="col-md-4 ">
                        <div class="form-group">
                          <input class="form-check-input" name="radio_thoihan" type="radio" checked="checked" value="1">
                          <label for="radio100" class="form-check-label dark-grey-text">1 tháng</label>
                        </div>
                      </div>
                      <div class="col-md-4 ">
                        <div class="form-group">
                          <input class="form-check-input" name="radio_thoihan" type="radio" value="3">
                          <label for="radio100" class="form-check-label dark-grey-text">3 tháng</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input class="form-check-input" name="radio_thoihan" type="radio" value="6">
                          <label for="radio101" class="form-check-label dark-grey-text">6 tháng</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input class="form-check-input" name="radio_thoihan" type="radio" value="12">
                          <label for="radio102" class="form-check-label dark-grey-text">1 năm</label>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3 mb-4">
                      <div class="col-md-12 text-center text-md-left text-md-right">
                        <input type="hidden" name="id_phong" value="<?php echo e($phong->ID_Phong); ?>">
                        <input type="submit" class="btn btn-primary btn-rounded" value=" Đặt phòng">
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Content-->

        <div id="accordion">
            <div class="card">
              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                  <div class="card-header">
                    Mô tả
                  </div>
              </a>
              <div id="collapseOne" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <?php echo e($phong->MoTaDai); ?>

                </div>
              </div>
            </div>
            
            <div class="card">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
              <div class="card-header">
                Ghi chú
              </div>  
              </a>

              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <?php echo e($phong->GhiChu); ?>

                </div>
              </div>
            </div>
            
            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                  Đánh giá
                </a>
              </div>
              <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                	<?php $__empty_1 = true; $__currentLoopData = $danhgia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	                    <div class="media border p-3">
	                      <img src="
	                      		<?php $__currentLoopData = $taikhoan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                        		<?php if($dg->ID_TaiKhoan == $tk->ID_TaiKhoan): ?>
	                        			<?php echo e(asset('image/'.$tk->AnhDaiDien)); ?>

	                        		<?php endif; ?>
	                        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                      " alt="avatar" class="mr-3 mt-3 rounded-circle" width="70px" height="70px">
	                      <div class="media-body">
	                        <h5>
	                        	<?php $__currentLoopData = $taikhoan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                        		<?php if($dg->ID_TaiKhoan == $tk->ID_TaiKhoan): ?>
	                        			<?php echo e($tk->HoTen); ?>

	                        		<?php endif; ?>
	                        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <small><i>Đánh giá vào <?php echo e(date_format(date_create($dg->ThoiGian),'d-m-Y H:i:s')); ?></i></small></h5>
	                        <p><?php echo e($dg->NoiDung); ?></p>
	                      </div>
	                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    	<p>Chưa có đánh giá cho căn phòng này</p>
                    <?php endif; ?>
                </div>
              </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/laravel_quanliktx/resources/views/pages/chitietphong.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?>

  <!-- Page Content -->
  <div class="container-fluid px-5 pt-5">

    <div class="row">

      <div class="col-3 mb-3">
		    <h2 class="my-4">Tìm kiếm</h2>
  			<form class="example" action="<?php echo e(route('dangkiphong/search')); ?>" method="get">
  			  <input type="text" placeholder="Nhập giá trị.." name="tukhoa" class="form-control mb-1">
  			  <button type="submit" class="btn btn-outline-primary"><i class="fa fa-search"></i> Tìm</button>
  			</form>
		  
        <h2 class="my-4">Khu vực</h2>
        <div class="list-group">
		  	<?php $__currentLoopData = $khuvuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          	<a href="<?php echo e(route('dangkiphong/khuvuc', $kv->ID_KhuVuc)); ?>" class="list-group-item list-group-item-action"><?php echo e($kv->Ten); ?></a>
			  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
		  
	      <h2 class="my-4">Loại phòng</h2>
        <div class="list-group">
		  	<?php $__currentLoopData = $loaiphong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          	<a href="<?php echo e(route('dangkiphong/loaiphong', $kv->ID_LoaiPhong)); ?>" class="list-group-item list-group-item-action"><?php echo e($kv->MoTa); ?></a>
			  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <h2 class="my-4">Mức giá</h2>
        <div class="list-group">
            <a href="<?php echo e(route('dangkiphong/mucgia', '<1tr')); ?>" class="list-group-item list-group-item-action">Dưới 1 triệu</a>
            <a href="<?php echo e(route('dangkiphong/mucgia', '1-2tr')); ?>" class="list-group-item list-group-item-action">1 triệu ~ 2 triệu</a>
            <a href="<?php echo e(route('dangkiphong/mucgia', '2-3tr')); ?>" class="list-group-item list-group-item-action">2 triệu ~ 3 triệu</a>
            <a href="<?php echo e(route('dangkiphong/mucgia', '3-4tr')); ?>" class="list-group-item list-group-item-action">3 triệu ~ 4 triệu</a>
            <a href="<?php echo e(route('dangkiphong/mucgia', '>4tr')); ?>" class="list-group-item list-group-item-action">Trên 4 triệu</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col">
        <div class="row">
  		    <?php $__empty_1 = true; $__currentLoopData = $phong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <div class="col-lg-4 col-md-4 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top"
                src="
                  <?php if(strstr($p->HinhAnh,'http')): ?>
                    <?php echo e($p->HinhAnh); ?>

                  <?php else: ?>
                    <?php echo e(asset('image/'.$p->HinhAnh)); ?>

                  <?php endif; ?>
                " alt="" height="250px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="<?php echo e(route('xemphong', $p->ID_Phong)); ?>">Phòng số #<?php echo e($p->ID_Phong); ?></a>			
                </h4>

                <h5><?php echo e(number_format($p->Gia)); ?> VND</h5>
        				<div class="card-text">Khu vực: 
        					<?php $__currentLoopData = $khuvuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        						<?php if($p->ID_KhuVuc == $kv->ID_KhuVuc): ?>
        							<?php echo e($kv->Ten); ?>

        						<?php endif; ?>
        					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        				</div>	
        				<div class="card-text">Loại phòng: 
        					<?php $__currentLoopData = $loaiphong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        						<?php if($p->ID_LoaiPhong == $lp->ID_LoaiPhong): ?>
        							<?php echo e($lp->MoTa); ?>

        						<?php endif; ?>
        					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        				</div>
        				<div class="card-text">Sức chứa: <?php echo e($p->SucChua); ?></div> 
        				<div class="card-text">Thời hạn: <?php echo e($p->ThoiHan); ?></div>
        				<div class="card-text">An ninh: <?php echo e($p->AnNinh); ?></div>   
              </div>
              
              <div class="card-footer">
                  <a href="#"><button type="button" class="btn btn-outline-primary" style="width: 100%">Xem phòng</button></a>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          	<p class="h4">Không tìm thấy phòng.<p>
  		    <?php endif; ?>
        </div>
        <!-- /.row -->
        <?php echo e($phong->onEachSide(1)->links()); ?>

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/xampp/htdocs/laravel_quanliktx/resources/views/pages/phong.blade.php ENDPATH**/ ?>
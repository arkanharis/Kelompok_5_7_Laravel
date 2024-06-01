<?php $__env->startSection('dashboard-admin-content'); ?>


<?php if($errors->any()): ?>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div id="errorBox" style="text-align:center;margin-top:20px;" class="alert alert-danger col-md-12 alert-dismissible fade show" role="alert">
          <strong style="color:white;"><?php echo $error; ?></strong>
          <button type="button" style="color:white;" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true" style="color:white;" >&times;</span>
          </button>
      </div>

      <script>

        window.onload=function(){

          $("#errorBox").delay(3000).fadeOut("slow");

        }

      </script>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>


<?php if(session()->has('message')): ?>

    <div id="successBox" style="text-align:center;margin-top:20px;" class="alert alert-success col-md-12 alert-dismissible fade show" role="alert">
        <strong> <?php echo e(session()->get('message')); ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <script>

        setTimeout(
        function()
        {
            $("#successBox").delay(3000).fadeOut("slow");

        }, 1000);

    </script>

<?php endif; ?>



<div class="card">
    <div class="card-body">
      <h3 class="panel-title" style="text-align:center;">Pending Requests</h3>
      <br>



      <?php $__currentLoopData = $pending_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="card text-white bg-dark mb-3">
            <div class="card-header bg-dark ">
              <strong><?php echo e($data->date_of_leave); ?> (<?php echo e($data->firstname); ?> <?php echo e($data->lastname); ?>)</strong>
              <i class="float-right" style="font-size:85%;">Request sent on :- <?php echo e($data->date_of_request); ?></i>
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo e($data->type_of_leave); ?></h5>
              <p class="card-text"><?php echo e($data->description); ?></p>

              <a style="margin-left:10px;" class="btn btn-danger  float-right " href="/decline-request/<?php echo e($data->auto_id); ?>">Decline</a>
              <a class="btn btn-primary float-right" href="/accept-request/<?php echo e($data->auto_id); ?>">Accept</a>

            </div>
          </div>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>
</div>



<?php $__env->stopSection(); ?>

<script>

    window.onload=function(){

      $(".nav-item:eq(0)").addClass("active");

    }

</script>

<?php echo $__env->make('admin-dashboard-layout.dashboard-template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kelompok_5_7_Laravel-main\resources\views/admin-dashboard-content/home-page.blade.php ENDPATH**/ ?>
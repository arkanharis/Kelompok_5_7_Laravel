<?php $__env->startSection('dashboard-admin-content'); ?>

<?php if($errors->any()): ?>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div id="errorBox" style="text-align:center;margin-top:20px;" class="alert alert-danger col-md-12 alert-dismissible fade show" role="alert">
          <strong><?php echo $error; ?></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
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

        <h3 class="panel-title" style="text-align:center;">Register Staffs</h3>
        <br>

        <form action="/insert-staff-data" method="POST">
          <?php echo e(csrf_field()); ?>

          <div class="form-row">

            <div class="col-md-4 mb-3">
              <label for="staff_id">Staff ID</label>
              <input type="text" class="form-control" id="staff_id" name="staff_id" placeholder="Enter Staff ID" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="date_of_birth">Date of Birth</label>
              <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="phone_number">Phone Number</label>
              <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone Number" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="position">Position</label>
              <input type="text" class="form-control" id="position" name="position" placeholder="Enter Position/Role" required>
            </div>

          </div>
          <input class="btn btn-lg btn-primary" value="Register" type="submit">
        </form>

      </div>
</div>

<br>

<div class="card">
      <div class="card-body">

          <table class="table table-bordered table-hover table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Staff ID</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Date of Birth</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Position</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $staff_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <th scope="row"><?php echo e($key + 1); ?></th>
                        <td><?php echo e($data->staff_id); ?></td>
                        <td><?php echo e($data->firstname); ?></td>
                        <td><?php echo e($data->lastname); ?></td>
                        <td><?php echo e($data->dob); ?></td>
                        <td><?php echo e($data->email); ?></td>
                        <td><?php echo e($data->phone_number); ?></td>
                        <td><?php echo e($data->position); ?></td>
                        <td><a class="btn btn-primary" href="/view-staff-management-edit/<?php echo e($data->auto_id); ?>">Edit</a> <a class="btn btn-danger confirmation" href="/delete-staff-data/<?php echo e($data->auto_id); ?>">Delete</a></td>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </tbody>
          </table>

      </div>
</div>





<?php $__env->stopSection(); ?>

<script>

    window.onload=function(){
      $(".nav-item:eq(1)").addClass("active");

      $('.confirmation').on('click', function () {
          return confirm('Are you sure to delete?');
      });

    }

</script>

<?php echo $__env->make('admin-dashboard-layout.dashboard-template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kelompok_5_7_Laravel-main\resources\views/admin-dashboard-content/staff-management-page-1-index.blade.php ENDPATH**/ ?>
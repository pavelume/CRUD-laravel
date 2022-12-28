<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">

    <title>View List</title>
  </head>
  <body>
    <div class="container">

    <a href="<?php echo url('/add-data'); ?>", class="btn btn-primary my 2"> Add Data</a>
    <?php if(Session::has('msg')): ?>
    <p class = "alert alert-success"> <?php echo e(Session::get('msg')); ?></p>
    <?php endif; ?>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $showData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td> <?php echo e($data -> name); ?></td>
      <td> <?php echo e($data -> email); ?></td>
      <td> <?php echo e($data -> phone); ?></td>
      <td> <?php echo e($data -> address); ?></td>
      <td> 
         <a href="<?php echo url('/edit-data/'.$data->id); ?>", class="btn btn-success">Edit</a>
         <a href="<?php echo url('/delete-data/'.$data->id); ?>", onclick = "return confirm ('Are You Sure To Delete')" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </tbody>
</table>

<?php echo e($showData->links()); ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    
  </body>
</html><?php /**PATH C:\xampp\htdocs\laravel\crud\resources\views/show_data.blade.php ENDPATH**/ ?>
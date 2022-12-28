<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="<?php echo csrf_token(); ?>" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
    <div class="container">
    <a href="<?php echo url('/'); ?>", class="btn btn-primary my-3"> Show Data</a>

     <form action="<?php echo url('/update-data/'.$editData->id); ?>", method="post">

     <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <div class="form-group">
            <label for="Name"></label>
            <input type="text" class="form-control" name = "name" value ="<?php echo e($editData->name); ?>" placeholder = "Enter your name">

            <!-- error message -->
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class ="text-danger"><?php echo e($message); ?> </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <!-- error message -->

        </div>
        <div class="form-group">
            <label for="Email"></label>
            <input type="text" class="form-control" name = "email" value ="<?php echo e($editData->email); ?>" placeholder = "Enter your email">
            
            <!-- error message -->
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class ="text-danger"><?php echo e($message); ?> </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <!-- error message -->
        </div>

        <div class="form-group">
            <label for="Phone"></label>
            <input type="number" class="form-control" name = "phone" value ="<?php echo e($editData->phone); ?>" placeholder = "Enter your phone number">
           
            <!-- error message -->
            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class ="text-danger"><?php echo e($message); ?> </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <!-- error message -->
        </div>

        <div class="form-group">
            <label for="Address"></label>
            <input type="text" class="form-control" name = "address" value ="<?php echo e($editData->address); ?>" placeholder = "Enter your address">
         

        </div>

        <input type="submit" class = "btn btn-primary my-3" value ="submit" >
        

     </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    
  </body>
</html><?php /**PATH C:\xampp\htdocs\laravel\crud\resources\views/edit_data.blade.php ENDPATH**/ ?>
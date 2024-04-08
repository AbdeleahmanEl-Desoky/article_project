<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('admin.include.auth.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('css'); ?>
  </head>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signing"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
      </div>
    </div>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\article_project\resources\views/layouts/admin/login.blade.php ENDPATH**/ ?>
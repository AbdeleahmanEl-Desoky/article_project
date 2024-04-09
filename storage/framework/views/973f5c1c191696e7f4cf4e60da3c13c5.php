<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
      <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
   </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
      <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo e(route('logout')); ?>"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
      <span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>

   <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
       <?php echo csrf_field(); ?>
   </form>
    </a>
  </div>
<?php /**PATH C:\xampp\htdocs\Article_new\resources\views/admin/include/menu_footer_buttons.blade.php ENDPATH**/ ?>
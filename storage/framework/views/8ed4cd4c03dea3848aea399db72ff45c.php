<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
        <ul class=" navbar-right">
          <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
              <?php echo e(auth()->user()->user_name); ?>

            </a>
            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item"  href="<?php echo e(route('logout')); ?>"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">

            <i class="fa fa-sign-out pull-right"></i> Log Out</a>

           <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
               <?php echo csrf_field(); ?>
           </form>
            </div>
          </li>

        </ul>
      </nav>
    </div>
  </div>
<?php /**PATH C:\xampp\htdocs\article_project\resources\views/admin/include/nav.blade.php ENDPATH**/ ?>
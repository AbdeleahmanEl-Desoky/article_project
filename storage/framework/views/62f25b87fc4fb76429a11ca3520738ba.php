<?php $__env->startSection('content'); ?>
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>الاقسام</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row" style="display: block;">

        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
                <a href="<?php echo e(route('admin.articles.create')); ?>" class="btn btn-info" > <h2>add new Article</h2></a>

              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>

                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>

            <div class="x_content">


              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                      <th class="column-title"># </th>
                      <th class="column-title">Title</th>
                      <th class="column-title no-link last"><span class="nobr">Action</span></th>
                  </thead>
                  <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tbody>

                      <td><?php echo e($index+1); ?></td>
                      <td ><?php echo e($article->title_en); ?></td>
                      <td>
                        <div class="row">
                            <a href="<?php echo e(route('admin.articles.details.create',$article->id)); ?>" class="btn btn-default"><i class="fa fa-edit">create Details</i></a>
                            <a href="<?php echo e(route('admin.articles.show',$article->id)); ?>" class="btn btn-default"><i class="fa fa-edit">Show</i></a>
                            <a href="<?php echo e(route('admin.articles.edit',$article->id)); ?>" class="btn btn-default"><i class="fa fa-edit"> Edit</i></a>
                            <form id="deleteForm" action="<?php echo e(route('admin.articles.destroy', $article->id)); ?>" method="post" style="display: inline-block">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('delete')); ?>

                                <button type="button" onclick="showConfirmation()" class="btn btn-default"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                      </td>
                      <script>
                        function confirmDelete() {
                            if (confirm("Are you sure you want to delete this article?")) {
                                document.getElementById('deleteForm').submit();
                            }
                        }
                    </script>
                  </tbody>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
              </div>


            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
<!-- Bootstrap Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Delete Article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this article?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="deleteArticle()" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>

<script>
    function showConfirmation() {
        $('#confirmationModal').modal('show');
    }

    function deleteArticle() {
        document.getElementById('deleteForm').submit();
    }
</script>

  <?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Article_new\resources\views/admin/article/index.blade.php ENDPATH**/ ?>
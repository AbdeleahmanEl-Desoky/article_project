@extends('layouts.admin.app')
@section('content')
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
                <a href="{{route('admin.articles.create')}}"  > <h2>add article description</h2></a>

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
                  <tbody>
                    @foreach ($articles as $index=>$article)

                      <td>{{$index+1}}</td>
                      <td >{{$article->title_en}}</td>
                      <td>
                        <div class="row">
                            <a href="{{route('admin.articles.details',$article->id)}}" class="btn btn-default"><i class="fa fa-edit">create Details</i></a>
                            <a href="{{route('admin.articles.show',$article->id)}}" class="btn btn-default"><i class="fa fa-edit">Show</i></a>
                            <a href="{{route('admin.articles.edit',$article->id)}}" class="btn btn-default"><i class="fa fa-edit"> Edit</i></a>
                            <form id="deleteForm" action="{{ route('admin.articles.destroy', $article->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
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
                    @endforeach
                  </tbody>
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

  @endsection





@extends('layouts.admin.app')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Article</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> create form</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>

                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />

                            <form method="get" action="{{ route('admin.media.store') }}"enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="hidden" value="{{ $media->id }}" name="id">

                                    <div class="col-md-6">
                                        <label>	facebook<span class="required">*</span></label>
                                        <input type="text" value="{{ $media->facebook }}" id="facebook"
                                            name="	facebook" class="form-control @error('facebook') is-invalid @enderror">
                                        @error('facebook')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <label>phone<span class="required">*</span>
                                        </label>
                                        <input type="text" id="phone" name="phone" value=" {{$media->phone }}">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                </div>


                                <div class="col-md-6">
                                    <label>whatsupp <span class="required">*</span></label>
                                    <input type="text"  value="{{ $media->whatsupp }}" id="whatsupp" name="whatsupp"
                                        class="form-control @error('whatsupp') is-invalid @enderror">
                                    @error('whatsupp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <label>	instgram <span class="required">*</span></label>
                                    <input type="text" value="{{ $media->instgram }}" id="instgram" name="instgram"
                                        class="form-control @error('instgram') is-invalid @enderror">
                                    @error('instgram')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>




                                <div class="col-md-6">
                                    <label>tiktok <span class="required">*</span></label>
                                    <input type="text" value="{{ $media->tiktok }}" id="tiktok" name="tiktok"
                                        class="form-control @error('tiktok') is-invalid @enderror">
                                    @error('tiktok')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                                <div class="col-md-6">
                                    <label>youtube <span class="required">*</span></label>
                                    <input type="text" value="{{ $media->youtube }}" id="youtube" name="youtube"
                                        class="form-control @error('youtube') is-invalid @enderror">
                                    @error('youtube')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>





                                <div class="col-md-6">
                                    <label>linkedin <span class="required">*</span></label>
                                    <input type="text" value="{{ $media->linkedin }}" id="linkedin" name="linkedin"
                                        class="form-control @error('linkedin') is-invalid @enderror">
                                    @error('linkedin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>







                                <div class="row">

                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection

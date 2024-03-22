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
                        <h2> Edit form</h2>
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

                            <form method="POST" action="{{ route('admin.articles.update',$article->id) }}"enctype="multipart/form-data">
                                @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label >title <span class="required">*</span></label>
                                    <input type="text" id="title" name="title_en" value="{{$article->title_en}}" class="form-control @error('title') is-invalid @enderror">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="col-md-6">
                                    <label >keywords en <span class="required">*</span></label>
                                    <input type="text" id="keywords_en" name="keywords_en" value="{{$article->keywords_en}}"class="form-control @error('keywords_en') is-invalid @enderror">
                                    @error('keywords_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label >url en <span class="required">*</span></label>
                                    <input type="text" id="url_en" name="url_en" value="{{$article->url_en}}" class="form-control @error('url_en') is-invalid @enderror">
                                    @error('url_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="col-md-6">
                                    <label >google site verification en <span class="required">*</span></label>
                                    <input type="text" id="google_site_verification_en" name="google_site_verification_en"value="{{$article->google_site_verification_en}}" class="form-control @error('google_site_verification_en') is-invalid @enderror">
                                    @error('google_site_verification_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label>google-title En<span class="required">*</span>
                                    </label>
                                    <input class="form-control" id="google_title_en" name="google_title_en" value="{{$article->google_title_en}}">
                                    @error('google_title_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-md-12">
                                    <label>Description en<span class="required">*</span>
                                    </label>
                                    <textarea class="form-control" id="description_en" name="description_en" rows="5">value="{{$article->description_en}}"</textarea>
                                    @error('description_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            <div class="ln_solid"></div>
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



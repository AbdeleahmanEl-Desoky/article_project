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

                            <form method="get" action=""enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="hidden" value="{{ $messages->id }}" name="id">

                                    <div class="col-md-6">
                                        <label>name<span class="required">*</span></label>
                                        <input type="text" value="{{ $messages->name }}" id="name" name="name"
                                            class="form-control @error('name') is-invalid @enderror">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>






                                <div class="col-md-6">
                                    <label>title<span class="required">*</span></label>
                                    <input type="text" value="{{ $messages->title }}" id="title" name="name"
                                        class="form-control @error('title') is-invalid @enderror">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>







                        <div class="col-md-6">
                            <label>email<span class="required">*</span></label>
                            <input type="text" value="{{ $messages->email }}" id="email" name="email"
                                class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>









                    <div class="col-md-6">
                        <label>message<span class="required">*</span></label>
                        <input type="text" value="{{ $messages->message }}" id="message" name="message"
                            class="form-control @error('message') is-invalid @enderror">
                        @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>



                <div class="col-md-6">
                    <label>lang<span class="required">*</span></label>
                    <input type="text" value="{{ $messages->lang }}" id="lang" name="lang"
                        class="form-control @error('lang') is-invalid @enderror">
                    @error('lang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



            <div class="row">



                </form>
            </div>
        </div>
    </div>
    </div>


    </div>
    </div>
@endsection

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

                            <form method="get" action="{{ route('admin.contact.store') }}"enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="hidden" value="{{ $contact->id }}" name="id">

                                    <div class="col-md-6">
                                        <label>title_en<span class="required">*</span></label>
                                        <input type="text" value="{{ $contact->title_en }}" id="title_en"
                                            name="title_en" class="form-control @error('title_en') is-invalid @enderror">
                                        @error('title_en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                        <label>description_en<span class="required">*</span>
                                        </label>
                                        <textarea class="form-control" id="description_en" name="description_en" rows="5">{{ $contact->description_en }}</textarea>
                                        @error('description_en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                </div>


                                <div class="col-md-6">
                                    <label>email <span class="required">*</span></label>
                                    <input type="email" id="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <label>phone <span class="required">*</span></label>
                                    <input type="numper" value="{{ $contact->phone }}" id="phone" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>




                                <div class="col-md-6">
                                    <label>address <span class="required">*</span></label>
                                    <input type="text" value="{{ $contact->address }}" id="address" name="address"
                                        class="form-control @error('address') is-invalid @enderror">
                                    @error('address')
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

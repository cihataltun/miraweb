@extends('layouts.master')

@section('title','Slider Page')

@section('content')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Slider Düzenle</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sliders</a></li>
                                        <li class="breadcrumb-item active">Slider Düzenle</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('admin/slider-list') }}" type="button" class="btn btn-md btn-outline-primary waves-effect waves-light mb-3">
                        <i class="fa-solid fa-circle-arrow-left"></i> Geri
                    </a>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $errors }}</li>
                                        @endforeach
                                    </div>
                                    @endif
                                    <h4 class="card-title">Slider Bilgileri</h4>
                                    <br>
                                    <form class="custom-validation" action="{{ url('admin/slider-update/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="">Top Title</label>
                                            <input type="text" name="top_title" value="{{ $slider->top_title }}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Title</label>
                                            <input type="text" name="title" value="{{ $slider->title }}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Sub Title</label>
                                            <input type="text" name="sub_title" value="{{ $slider->sub_title }}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="image">Slider Görseli</label>
                                            <input type="file" name="image" value="{{ $slider->image }}" class="form-control" />
                                            @if ($slider->image)
                                                <img src="{{ asset('assets/admin/images/sliders/' . $slider->image) }}" width="250px" height="150px" alt="Slider Resmi">
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Offer</label>
                                            <input type="text" name="offer" value="{{ $slider->offer }}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Link</label>
                                            <input type="text" name="link" value="{{ $slider->link }}" class="form-control" />
                                        </div>
                                        <div class="form-check mb-3">
                                            <label class="form-check-label" for="formCheck1">Status</label>
                                            <input name="status" class="form-check-input" type="checkbox" id="formCheck1" name="status" {{ $slider->status == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="mb-0">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                    Değişiklikleri Kaydet
                                                </button>
                                                <a href="{{ url('admin/slider-list') }}" type="button" class="btn btn-secondary waves-effect">
                                                    Cancel
                                                </a>
                                            </div>
                                        </div>
                                    </form>
    
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
@endsection
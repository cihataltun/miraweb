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
                                <h4 class="mb-sm-0">Slider Ekle</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sliders</a></li>
                                        <li class="breadcrumb-item active">Slider Ekle</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <form class="custom-validation" action="{{ url('admin/slider-create') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="">Top Title</label>
                                            <input type="text" name="top_title" class="form-control" placeholder="Slider Top Title Yazınız"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Slider Title Yazınız"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Sub Title</label>
                                            <input type="text" name="sub_title" class="form-control" placeholder="Slider Sub Title Yazınız"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Slider Görseli</label>
                                            <input type="file" name="image" class="form-control" required placeholder="Slider Görseli Ekleyiniz"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Offer</label>
                                            <input type="text" name="offer" class="form-control" placeholder="Slider Offer Giriniz"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Link</label>
                                            <input type="text" name="link" class="form-control" placeholder="Slider Link Giriniz"/>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input name="status" class="form-check-input" type="checkbox" id="formCheck1">
                                            <label class="form-check-label" for="formCheck1">
                                                Status
                                            </label>
                                        </div>
                                        <div class="mb-0">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                    Kaydet
                                                </button>
                                                <a href="{{ url('admin/slider-list') }}" type="button" class="btn btn-secondary waves-effect">
                                                    İptal
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
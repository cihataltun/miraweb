@extends('layouts.master')

@section('title','Category Page')

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
                                <h4 class="mb-sm-0">Kategori Ekle</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Kategoriler</a></li>
                                        <li class="breadcrumb-item active">Kategori Ekle</li>
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
                                    
                                    <h4 class="card-title">Kategori Bilgileri</h4>
                                    <br>
                                    <form class="custom-validation" action="{{ url('admin/category-create') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="">Kategori Adı</label>
                                            <input type="text" name="name" class="form-control" required placeholder="Kategori adını yazınız"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Kategori Slug</label>
                                            <input type="text" name="slug" class="form-control" required placeholder="Kategori slug yazınız"/>
                                        </div>
                                        <div class="mb-0">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                    Kaydet
                                                </button>
                                                <a href="{{ url('admin/category-list') }}" type="button" class="btn btn-secondary waves-effect">
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
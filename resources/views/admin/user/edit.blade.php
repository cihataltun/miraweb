@extends('layouts.master')

@section('title','User Page')

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
                                <h4 class="mb-sm-0">Kullanıcı Düzenle</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Kullanıcılar</a></li>
                                        <li class="breadcrumb-item active">Kullanıcı Düzenle</li>
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
                                    <a href="{{ url('admin/user-list') }}" type="button" class="btn btn-md btn-outline-primary waves-effect waves-light float-end">
                                        <i class="fa-solid fa-circle-arrow-left"></i> Geri
                                    </a>
                                    <h4 class="card-title">Kullanıcı Bilgileri</h4>
                                    <br>
                                    <form class="custom-validation" action="{{ url('admin/user-update/'.$user->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="">Kullanıcı Adı</label>
                                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="">E-Posta</label>
                                            <input type="email" name="email" value="{{ $user->email }}" class="form-control" />
                                        </div>
                                        <div class="mb-0">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                    Değişiklikleri Kaydet
                                                </button>
                                                <a href="{{ url('admin/user-list') }}" type="button" class="btn btn-secondary waves-effect">
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
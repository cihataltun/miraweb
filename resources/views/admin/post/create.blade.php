@extends('layouts.master')

@section('title','Blog Page')

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
                                <h4 class="mb-sm-0">Post Ekle</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                        <li class="breadcrumb-item active">Post Ekle</li>
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
                                    
                                    <h4 class="card-title">Post Bilgileri</h4>
                                    <br>
                                    <form class="custom-validation" action="{{ url('admin/post-create') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="validationCategory" class="form-label">Kategoriler</label>
                                            <select name="category_id" class="form-select" id="validationCategory" required="">
                                                <option selected="" disabled="" value="">Kategori seçiniz</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Lütfen bir kategori seçiniz!
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="">Post Adı</label>
                                            <input type="text" name="name" class="form-control" required placeholder="Post adını yazınız"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Post Slug</label>
                                            <input type="text" name="slug" class="form-control" required placeholder="Post slug yazınız"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Başlık Açıklaması</label>
                                            <input type="text" name="title_description" class="form-control" required placeholder="Başlık açıklaması Yazınız"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Post Başlık Görseli</label>
                                            <input type="file" name="title_image" class="form-control" placeholder="Post başlık görseli ekleyiniz"/>
                                        </div>
                                        <div class="mb-3">
                                            <label>Post Açıklaması</label>
                                            <div>
                                                <textarea name="description" id="ckeditor-dev" tabindex="0" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        {{-- <div class="mb-3">
                                            <label for="">Post Görseli</label>
                                            <input type="file" name="image" class="form-control" placeholder="Post Görseli Ekleyiniz"/>
                                        </div> --}}
                                        <br>
                                        <h6>SEO Tags</h6>
                                        <br>
                                        <div class="mb-3">
                                            <label for="">Meta Title</label>
                                            <input type="text" name="meta_title" class="form-control" required />
                                        </div>
                                        <div class="mb-3">
                                            <label>Meta Description</label>
                                            <div>
                                                <textarea name="meta_description" required class="form-control" rows="3"></textarea>
                                            </div>
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

@section('js-import')

<!-- CKEditor Plugin -->
<script type="text/javascript" src="{{ asset('assets/admin/libs/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('ckeditor-dev');
</script>
  
@endsection
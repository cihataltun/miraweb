@extends('layouts.master')

@section('title','Offers Page')

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
                                <h4 class="mb-sm-0">Offer Ekle</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Teklifler</a></li>
                                        <li class="breadcrumb-item active">Teklif Ekle</li>
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
                                    
                                    <h4 class="card-title">Teklif Bilgileri</h4>
                                    <br>
                                    <form class="custom-validation" action="{{ url('admin/offer-create') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="">Top Title</label>
                                            <input type="text" name="top_title" class="form-control" placeholder="Offer top title yazınız"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Offer title yazınız"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Sub Title</label>
                                            <input type="text" name="sub_title" class="form-control" placeholder="Offer sub title yazınız"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Bottom Title</label>
                                            <input type="text" name="bottom_title" class="form-control" placeholder="Offer bottom title yazınız"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Offer Görselleri</label>
                                            <input type="file" name="slider_images[]" class="form-control" required placeholder="Görselleri ekleyiniz" multiple>
                                        </div>
                                        <div class="mb-3">
                                            <label>Seo Açıklaması</label>
                                            <div>
                                                <textarea name="seo_description" id="ckeditor-dev" tabindex="0" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Meta Title</label>
                                            <input type="text" name="meta_title" class="form-control" placeholder="Meta title giriniz"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Meta Title</label>
                                            <input type="text" name="meta_description" class="form-control" placeholder="Meta description giriniz"/>
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
                                                <a href="{{ url('admin/offer-list') }}" type="button" class="btn btn-secondary waves-effect">
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
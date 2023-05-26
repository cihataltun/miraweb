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
                                <h4 class="mb-sm-0">Teklif Düzenle</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Teklifler</a></li>
                                        <li class="breadcrumb-item active">Teklif Düzenle</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('admin/offer-list') }}" type="button" class="btn btn-md btn-outline-primary waves-effect waves-light mb-3">
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
                                    <h4 class="card-title">Teklif Bilgileri</h4>
                                    <br>
                                    <form class="custom-validation" action="{{ url('admin/offer-update/'.$offer->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="">Üst Başlık</label>
                                            <input type="text" name="top_title" value="{{ $offer->top_title }}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Başlık</label>
                                            <input type="text" name="title" value="{{ $offer->title }}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Sub Başlık</label>
                                            <input type="text" name="sub_title" value="{{ $offer->sub_title }}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Sol Alt Açıklama</label>
                                            <input type="text" name="bottom_desc_left" value="{{ $offer->bottom_desc_left }}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Orta Alt Açıklama</label>
                                            <input type="text" name="bottom_desc_center" value="{{ $offer->bottom_desc_center }}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Sağ Alt Açıklama</label>
                                            <input type="text" name="bottom_desc_right" value="{{ $offer->bottom_desc_right }}" class="form-control" />
                                        </div>
                                        <div class="container mb-3" style="margin-left: -25px;">
                                            <div class="row">
                                                <label for="image">Teklif Görselleri</label>
                                                @php
                                                $sliderImages = explode(',', $offer->slider_images);
                                                @endphp
                                                <input type="file" name="slider_images[]" multiple class="form-control mb-3" />
                                                @foreach ($sliderImages as $s_images)
                                                    <div class="col">
                                                        @php
                                                        // Tırnak işaretlerini kaldır
                                                        $s_images = trim($s_images, '[]"');
                                                        $imagePath = asset('assets/admin/images/offers/' . $s_images);
                                                        @endphp
                                                        @if ($s_images)
                                                        <img src="{{ $imagePath }}" width="300px" height="150px" alt="Slider Resimleri">
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="container mb-3" style="margin-left: -25px;">
                                            <div class="row">
                                                <label for="image">Mobil Teklif Görselleri</label>
                                                @php
                                                $sliderImages = explode(',', $offer->slider_images_mobile);
                                                @endphp
                                                @foreach ($sliderImages as $sm_images)
                                                    <div class="col">
                                                        @php
                                                        // Tırnak işaretlerini kaldır
                                                        $sm_images = trim($sm_images, '[]"');
                                                        $imagePath = asset('assets/admin/images/offers/' . $sm_images);
                                                        @endphp
                                                        <input type="file" name="slider_images_mobile[]" multiple class="form-control mb-3" />
                                                        @if ($sm_images)
                                                        <img src="{{ $imagePath }}" width="200px" height="250px" alt="Slider Mobil Resimleri">
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="image">Fırsat Teklif Görseli</label>
                                            <input type="file" name="opportunity_image" class="form-control mb-3" />
                                            @if ($offer->opportunity_image)
                                                <img src="{{ asset('assets/admin/images/offers/' . $offer->opportunity_image) }}" width="200px" height="200px" alt="Fırsat Teklif Resmi">
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Fırsat Başlık</label>
                                            <input type="text" name="opportunity_title" value="{{ $offer->opportunity_title }}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Fırsat Url</label>
                                            <input type="text" name="opportunity_slug" value="{{ $offer->opportunity_slug }}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label>Seo Açıklaması</label>
                                            <div>
                                                <textarea name="seo_description" id="ckeditor-dev" tabindex="0" class="form-control">{!! $offer->seo_description !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Meta Title</label>
                                            <input type="text" name="meta_title" value="{{ $offer->meta_title }}" class="form-control" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Meta Description</label>
                                            <input type="text" name="meta_description" value="{{ $offer->meta_description }}" class="form-control" />
                                        </div>
                                        <div class="form-check mb-3">
                                            <label class="form-check-label" for="formCheck1">Status</label>
                                            <input name="status" class="form-check-input" type="checkbox" id="formCheck1" name="status" {{ $offer->status == '1' ? 'checked' : '' }}>
                                        </div>
                                        <div class="mb-0">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                    Değişiklikleri Kaydet
                                                </button>
                                                <a href="{{ url('admin/offer-list') }}" type="button" class="btn btn-secondary waves-effect">
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

@section('js-import')

<!-- CKEditor Plugin -->
<script type="text/javascript" src="{{ asset('assets/admin/libs/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('ckeditor-dev');
</script>
  
@endsection
@extends('layouts.master')

@section('title','Image Gallery Page')

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
                                <h4 class="mb-sm-0">Gallery</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li>
                                        <li class="breadcrumb-item active">Galeri</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <form action="{{ route('dropzone.store') }}" method="POST" enctype="multipart/form-data" class="dropzone dz-clickable" id="dropzoneForm">
                      @csrf
                      <div class="dz-default dz-message p-5">
                        <div>
                          <h3 class="text-center"> Upload Image By Click On Box</h3> 
                        </div>
                        <span>Drop files here to upload</span>
                      </div>
                    </form>


                    <div class="text-center m-3">
                      <button type="button" class="btn btn-primary" id="submit-all">Upload All Images</button>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title mt-3">Uploaded Image</h3>
                      </div>
                      <div class="panel-body" id="uploaded_image">
                        
                      </div>
                    </div>

                    {{-- <h3 class="text-center">Image Upload in Gallery</h3>
                    <br />
                        
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Select Image</h3>
                        </div>
                        <div class="panel-body">
                          <form action="{{ route('dropzone.upload') }}" id="dropzoneForm" class="dropzone" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                          </form>
                          <div class="text-center m-3">
                            <button type="button" class="btn btn-primary" id="submit-all">Upload</button>
                          </div>
                        </div>
                      </div>
                      <br />
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Uploaded Image</h3>
                        </div>
                        <div class="panel-body" id="uploaded_image">
                          
                        </div>
                      </div> --}}
                                    
                </div>
            </div>
        </div>
@endsection
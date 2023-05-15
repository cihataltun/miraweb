@extends('layouts.master')

@section('title','Admin Dashboard')

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
                                    <h4 class="mb-sm-0">Admin Panel</h4>
                                    {{-- <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Total Sales</p>
                                                <h4 class="mb-2">1452</h4>
                                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from previous period</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-shopping-cart-2-line font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                            
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">New Orders</p>
                                                <h4 class="mb-2">938</h4>
                                                <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from previous period</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-usd font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                              
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">New Users</p>
                                                <h4 class="mb-2">8246</h4>
                                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>16.2%</span>from previous period</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-user-3-line font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                              
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Unique Visitors</p>
                                                <h4 class="mb-2">29670</h4>
                                                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from previous period</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-btc font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                              
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                        {{-- <div class="row">
                            <div class="col-xl-6">
    
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="float-end d-none d-md-inline-block">
                                            <div class="dropdown card-header-dropdown">
                                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Export</a>
                                                    <a class="dropdown-item" href="#">Import</a>
                                                    <a class="dropdown-item" href="#">Download Report</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title mb-4">Email Sent</h4>

                                        <div class="text-center pt-3">
                                            <div class="row">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <div class="d-inline-flex">
                                                        <h5 class="me-2">25,117</h5>
                                                        <div class="text-success font-size-12">
                                                            <i class="mdi mdi-menu-up font-size-14"> </i>2.2 %
                                                        </div>
                                                    </div>
                                                    <p class="text-muted text-truncate mb-0">Marketplace</p>
                                                </div><!-- end col -->
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <div class="d-inline-flex">
                                                        <h5 class="me-2">$34,856</h5>
                                                        <div class="text-success font-size-12">
                                                            <i class="mdi mdi-menu-up font-size-14"> </i>1.2 %
                                                        </div>
                                                    </div>
                                                    <p class="text-muted text-truncate mb-0">Last Week</p>
                                                </div><!-- end col -->
                                                <div class="col-sm-4">
                                                    <div class="d-inline-flex">
                                                        <h5 class="me-2">$18,225</h5>
                                                        <div class="text-success font-size-12">
                                                            <i class="mdi mdi-menu-up font-size-14"> </i>1.7 %
                                                        </div>
                                                    </div>
                                                    <p class="text-muted text-truncate mb-0">Last Month</p>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div>
                                    </div>
                                    <div class="card-body py-0 px-2">
                                        <div id="area_chart" class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="float-end d-none d-md-inline-block">
                                            <div class="dropdown">
                                                <a class="text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted">This Years<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                    <a class="dropdown-item" href="#">This Year</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title mb-4">Revenue</h4>

                                        <div class="text-center pt-3">
                                            <div class="row">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <div>
                                                        <h5>17,493</h5>
                                                        <p class="text-muted text-truncate mb-0">Marketplace</p>
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <div>
                                                        <h5>$44,960</h5>
                                                        <p class="text-muted text-truncate mb-0">Last Week</p>
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-sm-4">
                                                    <div>
                                                        <h5>$29,142</h5>
                                                        <p class="text-muted text-truncate mb-0">Last Month</p>
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div>
                                    </div>
                                    <div class="card-body py-0 px-2">
                                        <div id="column_line_chart" class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                        </div> --}}
                        <!-- end row -->
    
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
    
                                        <h4 class="card-title mb-4">Blog Listesi</h4>
    
                                        <div class="table-responsive">
                                            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Kategori</th>
                                                        <th>Name</th>
                                                        <th>Slug</th>
                                                        <th>Created By</th>
                                                        <th>Status</th>
                                                        <th class="text-center">İşlemler</th>
                                                        {{-- <th>Slug</th> --}}
                                                        {{-- <th>Image</th> --}}
                                                        {{-- <th>Meta Title</th>
                                                        <th>Meta Description</th> --}}
                                                    </tr>
                                                </thead><!-- end thead -->
                                                <tbody>
                                                    @foreach ($posts as $post)
                                                <tr data-id="1">
                                                    <td data-field="id" style="width: 80px">{{ $post->id }}</td>
                                                    <td data-field="category_name">{{ $post->category->name }}</td>
                                                    <td data-field="name">{{ $post->name }}</td>
                                                    <td data-field="slug">{{ $post->slug }}</td>
                                                    {{-- <td data-field="description">{!! $post->description !!}</td> --}}
                                                    <td data-field="created_by">{{ Auth::user()->name }}</td>
                                                    <td data-field="status">
                                                        @if($post->status == '1')
                                                        <div class="font-size-13">
                                                            <i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>ACTİVE
                                                        </div>
                                                        @else
                                                        <div class="font-size-13">
                                                            <i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>PASİVE
                                                        </div>
                                                        @endif
                                                    </td>
                                                    {{-- <td data-field="image">
                                                        <img src="{{ asset('uploads/post/'.$post->image) }}" width="50px" height="50px" alt="Img">
                                                    </td> --}}
                                                    <td style="width: 100px">
                                                        <a href="{{ url('admin/post-edit/'.$post->id) }}" class="btn btn-md btn-warning m-2" title="Düzenle">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-bs-backdrop="static"  aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="myModalLabel">Uyarı</h5>
                                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Silmek istediğinize emin misiniz?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="{{ url('admin/post-delete/'.$post->id) }}" type="button" class="btn btn-danger">Evet, sil!</a>
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Modal -->
                                                        <a href="" 
                                                            class="btn btn-md btn-danger" data-bs-toggle="modal" data-bs-target="#myModal" title="Sil">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody><!-- end tbody -->
                                            </table> <!-- end table -->
                                        </div>
                                    </div><!-- end card -->
                                </div><!-- end card -->
                            </div>
                            <!-- end col -->
                           
                            {{-- <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <select class="form-select shadow-none form-select-sm">
                                                <option selected>Apr</option>
                                                <option value="1">Mar</option>
                                                <option value="2">Feb</option>
                                                <option value="3">Jan</option>
                                            </select>
                                        </div>
                                        <h4 class="card-title mb-4">Monthly Earnings</h4>
                                        
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="text-center mt-4">
                                                    <h5>3475</h5>
                                                    <p class="mb-2 text-truncate">Market Place</p>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-4">
                                                <div class="text-center mt-4">
                                                    <h5>458</h5>
                                                    <p class="mb-2 text-truncate">Last Week</p>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-4">
                                                <div class="text-center mt-4">
                                                    <h5>9062</h5>
                                                    <p class="mb-2 text-truncate">Last Month</p>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="mt-4">
                                            <div id="donut-chart" class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                            </div> --}}
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    
                </div>
                <!-- End Page-content -->
               
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                Copyright © <script>document.write(new Date().getFullYear())</script> Tüm Hakları Saklıdır.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Coding with <i class="mdi mdi-heart text-danger"></i> by Cihat Altun
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                
            </div>
            <!-- end main content-->
@endsection
@extends('layouts.master')

@section('title','User List')

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
                                <h4 class="mb-sm-0">Kullancılar </h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li>
                                        <li class="breadcrumb-item active">Kullanıcılar</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Kullancı Listesi</h4>
                                    @if (session('message'))
                                        <div class="alert alert-success">{{ session('message') }}</div>
                                    @endif
                                    <div class="table-responsive">
                                        <table id="selection-datatable" class="table table-editable table-nowrap align-middle table-edits">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Kullanıcı Adı</th>
                                                    <th>E-Posta Adresi</th>
                                                    <th>Rol</th>
                                                    @if (Auth::user()->role_as == '1')
                                                    <th class="text-center">İşlemler</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                <tr data-id="1">
                                                    <td data-field="id" style="width: 80px">{{ $user->id }}</td>
                                                    <td data-field="name">{{ $user->name }}</td>
                                                    <td data-field="email">{{ $user->email }}</td>
                                                    <td data-field="role_as">{{ $user->role_as == '1' ? 'Admin' : 'User' }}</td>
                                                    @if (Auth::user()->role_as == '1')
                                                        <td style="width: 100px">
                                                            <a href="{{ url('admin/user-edit/'.$user->id) }}" class="btn btn-md btn-warning m-2" title="Düzenle">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="{{ url('admin/user-delete/'.$user->id) }}" 
                                                                class="btn btn-md btn-danger" title="Sil">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </td>
                                                    @endif
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div>
            </div>
        </div>
@endsection

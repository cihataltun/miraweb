            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->
                    <div class="user-profile text-center mt-3">
                        <div class="">
                            @if (Auth::user()->role_as == '1')
                                <img src="{{ asset('assets/admin/images/users/avatar-6.jpg') }}" alt="" class="avatar-md rounded-circle">
                                @else
                                <img src="{{ asset('assets/admin/images/users/avatar-4.jpg') }}" alt="" class="avatar-md rounded-circle">
                            @endif
                        </div>
                        <div class="mt-3">
                            <h4 class="font-size-16 mb-1">{{ Auth::user()->name }}</h4>
                            <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
                        </div>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title text-center">Panel Yönetimi</li>

                            <li>
                                <a href="{{ url('/admin/dashboard') }}" class="waves-effect">
                                    <i class="ri-dashboard-line"></i>
                                    <span>Anasayfa</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('/admin/category-list') }}" class="waves-effect">
                                    <i class="fas fa-cubes"></i>
                                    <span>Kategoriler</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-pages-line"></i>
                                    <span>Blog Sayfalar</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="{{ url('/admin/post-list') }}"><i class="ri-file-list-line"></i>Makale Listele</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/post-create') }}"><i class="ri-file-add-line"></i>Makale Ekle</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('/admin/slider-list') }}" class="waves-effect">
                                    <i class="ri-slideshow-2-line"></i>
                                    <span>Sliders</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/offer-list') }}" class="waves-effect">
                                    <i class="ri-service-line"></i>
                                    <span>Teklifler</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/dropzone') }}" class="waves-effect">
                                    <i class="ri-gallery-fill"></i>
                                    <span>Resim Gallerisi</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/user-list') }}" class="waves-effect">
                                    <i class="ri-account-circle-line"></i>
                                    <span>Kullanıcılar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
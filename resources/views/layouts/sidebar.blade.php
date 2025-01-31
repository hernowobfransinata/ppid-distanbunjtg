<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i data-feather="home" class="icon-dual"></i> <span>Beranda</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i data-feather="grid" class="icon-dual"></i> <span>Profile</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Profil Badan Publik</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Tugas dan Fungsi PPID</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Struktur PPID</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Pejabat Struktural</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">SK PPID</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">SK Kontributor PPID</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">LHKPN dan LHKASN</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Maklumat</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmail">
                                    @lang('translation.email')
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarEmail">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-mailbox" class="nav-link">@lang('translation.mailbox')</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebaremailTemplates" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebaremailTemplates">
                                                @lang('translation.email-templates')
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebaremailTemplates">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-email-basic" class="nav-link"> @lang('translation.basic-action') </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-email-ecommerce" class="nav-link"> @lang('translation.ecommerce-action') </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i data-feather="layout" class="icon-dual"></i> <span>Informasi Publik</span><span class="badge badge-pill bg-danger" data-key="t-hot">@lang('translation.hot')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts">
                    <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Informasi Berkala</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Informasi Setiap Saat</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Informasi Sertamerta</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">DIP dan DIK</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Alur Data & Informasi</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Informasi Penerimaan Pegawai</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i data-feather="users" class="icon-dual"></i> <span>Layanan</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Layanan Non Elektronik</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Layanan Terintegrasi</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">SOP Layanan PPID</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">SOP Layanan Publik</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Kontak</a>
                </li>
                <li class="nav-item">
                    <a target="_blank" href="https://laporgub.jatengprov.go.id/" class="nav-link">Pengaduan</a>
                </li>
                <li class="nav-item">
                    <a target="_blank" href="https://data.jatengprov.go.id/organization/dinas-pertanian-dan-perkebunan-provinsi-jawa-tengah" class="nav-link">Open Data</a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>

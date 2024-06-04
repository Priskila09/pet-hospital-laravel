<div class="col-lg-2 bg-white min-h-lg-screen py-3 px-2 px-lg-3 sidebar">
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center gap-2 fs-5 fw-bold text-pink">
            <img src="{{ url('assets/images/logo.png') }}" style="width: 40px" alt="logo">
            <span>Pet Shop</span>
        </a>
        <button class="btn btn-light d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navMenu">
            <i class="bx bx-menu"></i>
        </button>
    </div>
    <hr class="my-4 d-none d-lg-block border-secondary">
    <div class="menus d-none d-lg-block">
        <p class="mb-2 text-secondary fw-semibold fs-7">Utama</p>
        <a href="{{ route('admin.dashboard') }}" class="link-menu btn {{ request()->is('admin') ? 'active' : '' }}">
            <i class="bx bxs-dashboard"></i> Dashboard
        </a>

        <p class="mt-4 mb-2 text-secondary fw-semibold fs-7">Shop</p>
        <a href="{{ route('produk.index') }}"
            class="link-menu btn {{ request()->is('admin/produk*') ? 'active' : '' }}">
            <i class='bx bx-box'></i> Produk
        </a>
        <a href="#" class="link-menu btn">
            <i class='bx bx-store'></i> Order
        </a>

        <p class="mt-4 mb-2 text-secondary fw-semibold fs-7">Reservasi</p>
        <a href="{{ route('dokter.index') }}"
            class="link-menu btn {{ request()->is('admin/dokter*') ? 'active' : '' }}">
            <i class='bx bx-user-pin'></i> Dokter
        </a>
        <a href="{{ route('reservasi.index') }}"
            class="link-menu btn {{ request()->is('admin/reservasi*') ? 'active' : '' }}">
            <i class="bx bxs-calendar"></i> Reservasi
        </a>
        <a href="#" class="link-menu btn">
            <i class="bx bx-history"></i> History
        </a>
        <a href="#" class="link-menu btn">
            <i class="bx bxs-user"></i> Customer
        </a>

        <p class="mt-4 mb-2 text-secondary fw-semibold fs-7">Pengaturan</p>
        <a href="#" class="link-menu btn">
            <i class="bx bx-cog"></i> Pengaturan
        </a>
        <a href="{{ route('logout') }}" class="link-menu btn"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bx bx-log-out"></i> Keluar
        </a>
    </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="navMenu" aria-labelledby="navMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="navMenuLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="sidebar">
            <p class="mb-2 text-secondary fw-semibold fs-7">Utama</p>
            <a href="{{ route('admin.dashboard') }}"
                class="link-menu btn {{ request()->is('admin') ? 'active' : '' }}">
                <i class="bx bxs-dashboard"></i> Dashboard
            </a>

            <p class="mt-4 mb-2 text-secondary fw-semibold fs-7">Shop</p>
            <a href="{{ route('produk.index') }}"
                class="link-menu btn {{ request()->is('admin/produk*') ? 'active' : '' }}">
                <i class='bx bx-box'></i> Produk
            </a>
            <a href="#" class="link-menu btn">
                <i class='bx bx-store'></i> Order
            </a>

            <p class="mt-4 mb-2 text-secondary fw-semibold fs-7">Reservasi</p>
            <a href="{{ route('dokter.index') }}"
                class="link-menu btn {{ request()->is('admin/dokter*') ? 'active' : '' }}">
                <i class='bx bx-user-pin'></i> Dokter
            </a>
            <a href="{{ route('reservasi.index') }}"
                class="link-menu btn {{ request()->is('admin/reservasi*') ? 'active' : '' }}">
                <i class="bx bxs-calendar"></i> Reservasi
            </a>
            <a href="#" class="link-menu btn">
                <i class="bx bx-history"></i> History
            </a>
            <a href="#" class="link-menu btn">
                <i class="bx bxs-user"></i> Customer
            </a>

            <p class="mt-4 mb-2 text-secondary fw-semibold fs-7">Pengaturan</p>
            <a href="#" class="link-menu btn">
                <i class="bx bx-cog"></i> Pengaturan
            </a>
            <a href="{{ route('logout') }}" class="link-menu btn"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bx bx-log-out"></i> Keluar
            </a>
        </div>
    </div>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

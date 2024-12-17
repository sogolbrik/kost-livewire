<div>
    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item {{ request()->routeIs('back.index') ? 'active' : '' }}"><a href="{{ route('back.index') }}" wire:navigate>Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <h1>Hola</h1>
</div>

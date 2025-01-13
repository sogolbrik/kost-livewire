<div>
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('customer.dashboard') }}" wire:current='active' wire:navigate>
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('customer.page') }}" wire:current='active' wire:navigate>
                    <i class="bi bi-grid"></i>
                    <span>Kamar Ku</span>
                </a>
            </li>

        </ul>

    </aside><!-- End Sidebar-->
</div>

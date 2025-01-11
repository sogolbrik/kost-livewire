<div>
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('back.index') }}" wire:current='active' wire:navigate>
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-heading">Control</li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Manage Data</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('bedroom.data') }}" wire:current='active' wire:navigate>
                            <i class="bi bi-circle"></i><span>Bedroom</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('transaction.data') }}" wire:current="active" wire:navigate>
                            <i class="bi bi-circle"></i><span>Transaction</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#fintech" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Rekening</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="fintech" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('fintech.data') }}" wire:current='active' wire:navigate>
                            <i class="bi bi-circle"></i><span>Fintech</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-heading">User</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('user.data') }}" wire:current='active' wire:navigate>
                    <i class="bi bi-person"></i>
                    <span>User</span>
                </a>
            </li>

        </ul>

    </aside><!-- End Sidebar-->
</div>

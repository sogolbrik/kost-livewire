<div>
    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Pengguna</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('back.index') }}" wire:navigate>Beranda</a></li>
                <li class="breadcrumb-item active">Pengguna</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Pengguna</h5>
                    <a href="{{ route('user.form') }}" class="btn btn-primary btn-sm" wire:navigate>Baru</a>
                    <table class="table">
                        <div class="col-md-4 mt-2">
                            <div class="input-group mb-2">
                                <input wire:model.live="search" type="search" class="form-control" placeholder="Cari nama...">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>
                                    <b>N</b>ama
                                </th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($user as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bu bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <button type="button" class="btn btn-sm dropdown-item" wire:click="showUserDetail({{ $item->id }})">
                                                        Detail
                                                    </button>
                                                </li>
                                                <li><a href="{{ route('user.form', $item->id) }}" wire:navigate class="btn btn-sm dropdown-item">Edit</a></li>
                                                <li><button onclick="confirmationDelete({{ $item->id }})" class="btn btn-sm dropdown-item">Hapus</button></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        @if (!empty($item->bedroom_id))
                                            <form wire:submit.prevent="inactiveUser({{ $item->id }})">
                                                <button type="button" class="btn btn-sm btn-warning shadow-sm" onclick="confirmDeactivation({{ $item->id }})">Matikan akun</button>

                                                <script>
                                                    function confirmDeactivation(userId) {
                                                        Swal.fire({
                                                            title: 'Apa kamu yakin?',
                                                            text: "Kamu tidak akan bisa mengembalikannya!",
                                                            icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor: '#3085d6',
                                                            cancelButtonColor: '#d33',
                                                            confirmButtonText: 'Ya, Nonaktifkan!'
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                @this.call('inactiveUser', userId);
                                                                Swal.fire(
                                                                    'Nonaktif!',
                                                                    'Akun user telah dinonaktifkan.',
                                                                    'success'
                                                                )
                                                            }
                                                        })
                                                    }
                                                </script>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <pre class="fs-3 text-center">tidak ada data.</pre>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $user->links() }}
                </div>
            </div>
        </div>

    </div>

    <!-- Modal Detail User -->
    <div class="modal fade @if ($showModal) show d-block @endif" tabindex="-1" role="dialog"
        style="@if ($showModal) display: block; background-color: rgba(0,0,0,0.5); @endif">
        <div class="modal-dialog" role="document">
            @if ($selectedUser)
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail User</h5>
                        <button type="button" class="btn-close" wire:click="$set('showModal', false)"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Nama:</strong> {{ $selectedUser->name }}</p>
                        <p><strong>Email:</strong> {{ $selectedUser->email }}</p>
                        <p><strong>Telepon:</strong> {{ $selectedUser->phone }}</p>
                        <p><strong>Alamat:</strong> {{ $selectedUser->address }}</p>
                        <p><strong>Kota:</strong> {{ $selectedUser->city }}</p>
                        <p><strong>Provinsi:</strong> {{ $selectedUser->state }}</p>
                        <p><strong>Check In:</strong> {{ $selectedUser->check_in }}</p>
                        <p><strong>Status:</strong> {{ $selectedUser->status }}</p>
                        <p><strong>Role:</strong> {{ $selectedUser->role }}</p>
                        <p><strong>KTP:</strong></p>
                        @if ($selectedUser->ktp)
                            <img src="{{ Storage::url($selectedUser->ktp) }}" class="img-fluid rounded" alt="KTP">
                        @else
                            <img src="{{ asset('seed/ktp/ktp.jpg') }}" class="img-fluid rounded" alt="KTP Default">
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="$set('showModal', false)">Tutup</button>
                    </div>
                </div>
            @endif
        </div>
    </div>

</div>

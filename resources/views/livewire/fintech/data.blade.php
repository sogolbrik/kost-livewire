<div>
    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Rekening</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('back.index') }}" wire:navigate>Beranda</a></li>
                <li class="breadcrumb-item active">Rekening</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Rekening</h5>
                    <a href="{{ route('fintech.form') }}" class="btn btn-primary btn-sm" wire:navigate>Baru</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>
                                    <b>N</b>ama
                                </th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fintech as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        @if ($item->photo)
                                            <img src="{{ Storage::url($item->photo) }}" alt="{{ $item->name }}" class="img-fluid" width="150">
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bu bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('fintech.form', $item->id) }}" wire:navigate class="btn btn-sm dropdown-item">Edit</a></li>
                                                <li><button onclick="confirmationDelete({{ $item->id }})" class="btn btn-sm dropdown-item">Hapus</button></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<div>
    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Kamar</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('back.index') }}" wire:navigate>Beranda</a></li>
                <li class="breadcrumb-item active">Kamar</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Kamar</h5>
                    <a href="{{ route('bedroom.form') }}" class="btn btn-primary btn-sm" wire:navigate>Baru</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>
                                    <b>N</b>ama
                                </th>
                                <th>Tipe</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bedroom as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td><em>Rp {{ number_format($item->price, 0, ',', '.') }}</em></td>
                                    <td>
                                        @if ($item->status == 'Tersedia')
                                            <span class="badge rounded-pill bg-primary">{{ $item->status }}</span>
                                        @else
                                            <span class="badge rounded-pill bg-secondary">{{ $item->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bu bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><button type="button" class="btn btn-sm dropdown-item" data-bs-toggle="modal" data-bs-target="#detailBedroom{{ $item->id }}">
                                                        Detail
                                                    </button></li>
                                                <li><a href="{{ route('bedroom.form', $item->id) }}" wire:navigate class="btn btn-sm dropdown-item">Edit</a></li>
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


    {{-- Modal Detail --}}
    @foreach ($bedroom as $item)
        <div class="modal fade" id="detailBedroom{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Kamar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="d-flex justify-content-center">Foto:</label>
                                <img src="{{ Storage::url($item->photo) ?? 'tidak ada'}}" alt="{{ $item->name }}" class="img-fluid rounded w-100">
                            </div>
                            <div class="col-md-6">
                                <label class="d-flex justify-content-center">Fasilitas:</label>
                                <ul>
                                    @foreach ($item->bedroomDetail as $see)
                                        <li>{{ ucfirst(str_replace('_', ' ', $see->facility)) }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="d-flex justify-content-center">Deskripsi:</label>
                                <em>{{ $item->description }}</em>
                            </div>
                            <div class="col-md-6">
                                <label class="d-flex justify-content-center">Lebar Kamar:</label>
                                <em>{{ $item->width }}</em>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

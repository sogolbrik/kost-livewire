<div>
    <div class="pagetitle">
        <h1>Transaksi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('back.index') }}" wire:navigate>Beranda</a></li>
                <li class="breadcrumb-item active">Transaksi</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Transaksi</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>
                                        <b>N</b>ama
                                    </th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Periode Pembayaran</th>
                                    <th>Durasi</th>
                                    <th>Status</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaction as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->payment_date }}</td>
                                        <td>{{ date('F Y', strtotime($item->billing_period)) }}</td>
                                        <td>{{ $item->duration }}+ Bulan</td>
                                        <td>
                                            @if ($item->status == 'Ditunda')
                                                <span class="badge rounded-pill bg-warning shadow-sm">{{ $item->status }}</span>
                                            @elseif ($item->status == 'Disetujui')
                                                <span class="badge rounded-pill bg-success shadow-sm">{{ $item->status }}</span>
                                            @elseif ($item->status == 'Ditolak')
                                                <span class="badge rounded-pill bg-danger shadow-sm">{{ $item->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#detailTransaction{{ $item->id }}">
                                                Detail
                                            </button>
                                        </td>
                                        <td>
                                            @if ($item->status == 'Ditunda')
                                                <div class="d-flex">
                                                    <form wire:submit.prevent="changeStatus('Disetujui', {{ $item->id }})" class="me-2">
                                                        <button class="status-btn btn btn-sm btn-success">Terima</button>
                                                    </form>
                                                    <form wire:submit.prevent="changeStatus('Ditolak', {{ $item->id }})">
                                                        <button class="status-btn btn btn-sm btn-danger">Tolak</button>
                                                    </form>
                                                </div>
                                            @endif
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


    {{-- Modal Detail --}}
    @foreach ($transaction as $item)
        <div class="modal fade" id="detailTransaction{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Transaksi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-4">
                            <div class="col-md-12 text-center">
                                <label class="fw-semibold">Bukti:</label>
                            </div>
                            <div class="col-md-12 text-center">
                                <img src="{{ Storage::url($item->payment_proof) }}" alt="{{ $item->user->name }}" class="img-fluid rounded w-50">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="fw-semibold">Kamar:</label>
                                <em>{{ $item->bedroom->name }}</em>
                                <br>
                                <label class="fw-semibold">Tipe:</label>
                                <em>{{ $item->bedroom->type }}</em>
                            </div>
                            <div class="col-md-6">
                                <label class="fw-semibold">Tanggal Masuk Kamar:</label>
                                <em>{{ $item->entering_room }}</em>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



</div>

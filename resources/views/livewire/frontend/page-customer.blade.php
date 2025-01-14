<div>
    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Kamar Ku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('customer.dashboard') }}" wire:navigate>Beranda</a></li>
                <li class="breadcrumb-item active">Singgah</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <h5 class="text-center badge bg-secondary m-3">{{ $bedroom->name }}</h5>
                        <div class="card-body">
                            <img src="{{ Storage::url($bedroom->photo) }}" class="img-fluid rounded w-100">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <h4 class="card-title text-center fs-5">Informasi</h4>
                        <hr class="mt-1">
                        <div class="card-body">

                            <div class="row g-6">
                                <div class="col-6 mt-2 mb-4">
                                    <h5>Nama: </h5>{{ auth()->user()->name }}
                                </div>
                                <div class="col-6 mt-2 mb-4">
                                    <h5>Kamar: </h5>{{ $bedroom->name }}
                                </div>
                                <div class="col-6">
                                    <h5>Tanggal Check-in: </h5>
                                    {{ date('d F Y', strtotime(auth()->user()->check_in)) }}
                                </div>
                                <div class="col-6 mb-4">
                                    <h5>Status User: </h5>
                                    <p class="badge bg-secondary">{{ auth()->user()->status }}</p>
                                </div>
                                <div class="col-6 mt-3">
                                    @dd($today, $maturity)
                                    <h5>Perpanjang bulan: </h5>
                                    @if ($today >= $maturity)
                                        <a href="{{ route('transaction.period') }}" wire:navigate class="btn btn-primary btn-sm shadow-sm">
                                            Ajukan
                                        </a>
                                    @else
                                        <button class="btn btn-primary btn-sm shadow-sm"
                                            onclick="Swal.fire('Perpanjangan', 'Belum waktunya mengajukan perpanjangan bulan ini.', 'info')">Ajukan</button>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                {{-- Transaction History --}}
                <div class="col-md-12 mt-4 mb-3">
                    <div class="card shadow-sm">
                        <h4 class="card-title text-center">Riwayat Transaksi</h4>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Tanggal Pembayaran</th>
                                        <th>Periode Bulan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaction as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bukti{{ $item->id }}">
                                                    Lihat Bukti
                                                </button>
                                            </td>
                                            <td>{{ $item->payment_date }}</td>
                                            <td>{{ $item->billing_period }}</td>
                                            @if ($item->status == 'pending')
                                                <td class="badge bg-warning mt-2 text-light">{{ $item->status }}</td>
                                            @elseif ($item->status == 'paid')
                                                <td class="badge bg-success mt-2 text-light">{{ $item->status }}</td>
                                            @elseif ($item->status == 'declined')
                                                <td class="badge bg-danger mt-2 text-light">{{ $item->status }}</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @foreach ($transaction as $see)
        <div class="modal fade" id="bukti{{ $see->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Bukti Foto Pembayaran</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{ Storage::url($see->payment_proof) }}" class="img-fluid rounded w-100">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

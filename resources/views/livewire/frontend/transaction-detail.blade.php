<div class="light-background">
    <section class="mt-4">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3>Detail Pesanan</h3>
                        </div>
                        <div class="card-body">
                            @foreach ($transaction as $item)
                                <div class="mb-3">
                                    <h5 class="mb-1 d-flex justify-content-center">Pesanan #{{ $loop->iteration }}</h5>
                                    <p><strong>Nama Pelanggan:</strong> {{ auth()->user()->name }}</p>
                                    <p><strong>Nama Kamar:</strong> {{ $item->bedroom->name }}</p>
                                    <p><strong>Type Kamar:</strong> {{ $item->bedroom->type }}</p>
                                    <p><strong>Tanggal Masuk:</strong> {{ date('d F Y', strtotime($item->entering_room)) }}</p>
                                    <p><strong>Durasi:</strong> {{ $item->duration }} Bulan</p>
                                    <p><strong>Tanggal Pembayaran:</strong> {{ date('d F Y', strtotime($item->payment_date)) }}</p>
                                    <p><strong>Harga:</strong> Rp{{ number_format($item->bedroom->price, 0, ',', '.') }}</p>
                                    @if ($item->status == 'pending')
                                        <p><strong>Status Pembayaran:</strong>
                                        <p class="badge rounded-pill bg-warning shadow-sm">Menunggu</p>
                                        </p>
                                    @elseif($item->status == 'paid')
                                        <p><strong>Status Pembayaran:</strong>
                                        <p class="badge rounded-pill bg-success shadow-sm">Diterima</p>
                                        </p>
                                    @elseif($item->status == 'declined')
                                        <p><strong>Status Pembayaran:</strong>
                                        <p class="badge rounded-pill bg-danger shadow-sm">Ditolak</p>
                                        </p>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

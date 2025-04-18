<div class="light-background">
    <section class="mt-4">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow">
                        <div class="card-header">
                            <h2>Selesaikan Pembayaran</h2>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                @foreach ($fintech as $item)
                                    <div class="col-md-3 text-center">
                                        @if ($item->photo == null)
                                            @if ($item->name == 'BRI')
                                                <img src="{{ asset('seed/fintech/bri.jpg') }}" alt="{{ 'BRI' }}" class="img-fluid rounded shadow-sm mb-2"
                                                    style="width: 200px; height: 100px; object-fit: cover;">
                                                <div>No Rek: <em>{{ 623872957278248 }}</em></div>

                                            @elseif ($item->name == 'BNI')
                                                <img src="{{ asset('seed/fintech/bni.jpg') }}" alt="{{ 'BNI' }}" class="img-fluid rounded shadow-sm mb-2"
                                                    style="width: 200px; height: 100px; object-fit: cover;">
                                                <div>No Rek: <em>{{ 3891462829 }}</em></div>

                                                @elseif ($item->name == 'BCA')
                                                <img src="{{ asset('seed/fintech/bca.jpg') }}" alt="{{ 'BCA' }}" class="img-fluid rounded shadow-sm mb-2"
                                                    style="width: 200px; height: 100px; object-fit: cover;">
                                                <div>No Rek: <em>{{ 8712876471 }}</em></div>

                                                @elseif ($item->name == 'MANDIRI')
                                                <img src="{{ asset('seed/fintech/mandiri.jpg') }}" alt="{{ 'MANDIRI' }}" class="img-fluid rounded shadow-sm mb-2"
                                                    style="width: 200px; height: 100px; object-fit: cover;">
                                                <div>No Rek: <em>{{ 8001782381924 }}</em></div>
                                            @endif
                                        @else
                                            <img src="{{ Storage::url($item->photo) }}" alt="{{ $item->name }}" class="img-fluid rounded shadow-sm mb-2"
                                                style="width: 200px; height: 100px; object-fit: cover;">
                                            <div>No Rek: <em>{{ $item->description }}</em></div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            <div class="mb-4">
                                <h4>Harga Kamar: Rp {{ number_format($transaction['total_price'], 0, ',', '.') }}</h4>
                            </div>
                            <form wire:submit.prevent='store' enctype="multipart/form-data">
                                <label class="form-label">Silahkan masukkan bukti pembayaran disini</label>
                                <input type="file" wire:model.live='payment_proof' class="form-control mb-3">
                                <button class="btn btn-sm btn-primary">Bayar Sekarang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 230px;"></div>
    </section>
</div>

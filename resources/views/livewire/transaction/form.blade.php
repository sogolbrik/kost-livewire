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
                                        <img src="{{ Storage::url($item->photo) }}" alt="{{ $item->name }}" class="img-fluid rounded shadow-sm mb-2" style="width: 200px; height: 100px; object-fit: cover;">
                                        <div>No Rek: <em>{{ $item->description }}</em></div>
                                    </div>
                                @endforeach
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

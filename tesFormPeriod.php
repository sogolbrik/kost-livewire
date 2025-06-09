
<div>

    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Pembayaran</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('customer.dashboard') }}" wire:navigate>Beranda</a></li>
                <li class="breadcrumb-item">Form</li>
                <li class="breadcrumb-item active">Perpanjangan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Pembayaran</h5>

                    <!-- General Form Elements -->
                    <form wire:submit.prevent="store" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <div class="row mb-3">
                                @foreach ($fintech as $item)
                                    <div class="col-md-3">
                                        <label class="form-label fw-semibold">{{ $item->name }}</label>
                                        <img src="{{ Storage::url($item->photo) }}" alt="{{ $item->name }}" class="img-fluid rounded shadow-sm mb-2" style="width: 200px; height: 100px; object-fit: cover;">
                                        <em><span class="fw-normal">no rek:</span> {{ $item->description }}</em>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Durasi</label>
                            <div class="col-sm-10">
                                <select class="form-select" wire:model.live="duration">
                                    <option value="">- Pilih -</option>
                                    <option value="1">+1 Bulan</option>
                                    <option value="3">+3 Bulan</option>
                                    <option value="6">+6 Bulan</option>
                                </select>
                            </div>
                            @error('duration')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputDescription" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
                            <div class="col-sm-10">
                                <input class="form-control {{ $this->isValid('payment_proof') }}" type="file" id="formFile" wire:model.live="payment_proof">
                            </div>
                            @error('payment_proof')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            @if (is_object($payment_proof))
                                <div class="form-group mb-2">
                                    <label class="col-sm-2 col-form-label d-flex">Bukti</label>
                                    <img src="{{ $payment_proof->temporaryUrl() }}" class="img-fluid rounded w-50">
                                </div>
                            @endif
                        </div>

                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>

</div>

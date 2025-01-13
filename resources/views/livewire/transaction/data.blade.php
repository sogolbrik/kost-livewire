<div>
    <div class="pagetitle">
        <h1>Transaction</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('back.index') }}" wire:navigate>Home</a></li>
                <li class="breadcrumb-item active">Transaction</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Transaction Data</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>
                                        <b>N</b>ame
                                    </th>
                                    <th>Payment Date</th>
                                    <th>Billing Period</th>
                                    <th>Duration</th>
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
                                        <td>{{ $item->duration }}+ Month</td>
                                        <td>
                                            @if ($item->status == 'pending')
                                                <span class="badge rounded-pill bg-warning shadow-sm">{{ $item->status }}</span>
                                            @elseif ($item->status == 'paid')
                                                <span class="badge rounded-pill bg-success shadow-sm">{{ $item->status }}</span>
                                            @elseif ($item->status == 'declined')
                                                <span class="badge rounded-pill bg-danger shadow-sm">{{ $item->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#detailTransaction{{ $item->id }}">
                                                Detail
                                            </button>
                                        </td>
                                        <td>
                                            @if ($item->status == 'pending')
                                                <div class="d-flex">
                                                    <form wire:submit.prevent="changeStatus('paid', {{ $item->id }})" class="me-2">
                                                        <button class="status-btn btn btn-sm btn-success">Approve</button>
                                                    </form>
                                                    <form wire:submit.prevent="changeStatus('declined', {{ $item->id }})">
                                                        <button class="status-btn btn btn-sm btn-danger">Reject</button>
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Transaction Detail</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-4">
                            <div class="col-md-12 text-center">
                                <label class="fw-semibold">Proof:</label>
                            </div>
                            <div class="col-md-12 text-center">
                                <img src="{{ Storage::url($item->payment_proof) }}" alt="{{ $item->user->name }}" class="img-fluid rounded w-50">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="fw-semibold">Bedroom:</label>
                                <em class="me-5">{{ $item->bedroom->name }}</em>
                                <label class="fw-semibold">Type:</label>
                                <em>{{ $item->bedroom->type }}</em>
                            </div>
                            <div class="col-md-6">
                                <label class="fw-semibold">Entering Room:</label>
                                <em>{{ $item->entering_room }}</em>
                                <label class="fw-semibold">Payment Method:</label>
                                <em>{{ $item->metode }}</em>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



</div>

<div>
    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Bedroom</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('back.index') }}" wire:navigate>Home</a></li>
                <li class="breadcrumb-item active">Bedroom</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bedroom Data</h5>
                    <a href="{{ route('bedroom.form') }}" class="btn btn-primary btn-sm" wire:navigate>New</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>
                                    <b>N</b>ame
                                </th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bedroom as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ number_format($item->price, 0, ',', '.') }}</td>
                                    <td>
                                        @if ($item->status == 'available')
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
                                                <li><button wire:click="destroy({{ $item->id }})" class="btn btn-sm dropdown-item">Delete</button></li>
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Bedroom Detail</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="d-flex justify-content-center">Photo:</label>
                                <img src="{{ Storage::url($item->photo) }}" alt="{{ $item->name }}" class="img-fluid rounded w-100">
                            </div>
                            <div class="col-md-6">
                                <label class="d-flex justify-content-center">Facility:</label>
                                <ul>
                                    @foreach ($item->bedroomDetail as $see)
                                        <li>{{ ucfirst(str_replace('_', ' ', $see->facility)) }}</li>
                                    @endforeach
                                </ul>
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

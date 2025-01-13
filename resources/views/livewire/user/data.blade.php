<div>
    <!-- Page Title -->
    <div class="pagetitle">
        <h1>User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('back.index') }}" wire:navigate>Home</a></li>
                <li class="breadcrumb-item active">User</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Data</h5>
                    <a href="{{ route('user.form') }}" class="btn btn-primary btn-sm" wire:navigate>New</a>
                    <div class="table-responsive">
                        <table class="table">
                            <div class="col-md-4 mt-2">
                                <div class="input-group mb-2">
                                    <input wire:model.live="search" type="search" class="form-control" placeholder="Search user by name...">
                                    <span class="input-group-text">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                            </div>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>
                                        <b>N</b>ame
                                    </th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($user as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bu bi-three-dots-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><button type="button" class="btn btn-sm dropdown-item" data-bs-toggle="modal" data-bs-target="#detailUser{{ $item->id }}">
                                                            Detail
                                                        </button></li>
                                                    <li><a href="{{ route('user.form', $item->id) }}" wire:navigate class="btn btn-sm dropdown-item">Edit</a></li>
                                                    <li><button wire:click="destroy({{ $item->id }})" class="btn btn-sm dropdown-item">Delete</button></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <form wire:submit.prevent="inactiveUser({{ $item->id }})">
                                                <button class="btn btn-sm btn-warning">Deactivate</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <pre class="fs-3 text-center">no does match.</pre>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $user->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>

    @foreach ($user as $item)
        <div class="modal fade" id="detailUser{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">User Detail</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="fw-semibold">Name:</label>
                                <ul>
                                    <li>
                                        <p>{{ $item->name }} </p>
                                    </li>
                                </ul>
                                <label class="fw-semibold">Email:</label>
                                <ul>
                                    <li>
                                        <p>{{ $item->email }} </p>
                                    </li>
                                </ul>
                                <label class="fw-semibold">Phone:</label>
                                <ul>
                                    <li>
                                        <p>{{ $item->phone }} </p>
                                    </li>
                                </ul>
                                <label class="fw-semibold">Address:</label>
                                <ul>
                                    <li>
                                        <p>{{ $item->address }} </p>
                                    </li>
                                </ul>
                                <label class="fw-semibold">City:</label>
                                <ul>
                                    <li>
                                        <p>{{ $item->city }} </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <label class="fw-semibold">State:</label>
                                <ul>
                                    <li>
                                        <p>{{ $item->state }} </p>
                                    </li>
                                </ul>
                                <label class="fw-semibold">Check in:</label>
                                <ul>
                                    <li>
                                        <p>{{ $item->check_in }} </p>
                                    </li>
                                </ul>
                                <label class="fw-semibold">Status:</label>
                                <ul>
                                    <li>
                                        <p>{{ $item->status }} </p>
                                    </li>
                                </ul>
                                <label class="fw-semibold">Role:</label>
                                <ul>
                                    <li>
                                        <p>{{ $item->role }} </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="fw-semibold">KTP:</label>
                                <img src="{{ Storage::url($item->ktp) }}" alt="{{ $item->name }}" class="img-fluid rounded">
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

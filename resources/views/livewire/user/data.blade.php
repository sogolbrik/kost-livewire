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
                                                <li><a href="{{ route('user.form', $item->id) }}" wire:navigate class="btn btn-sm dropdown-item">Edit</a></li>
                                                <li><button wire:click="destroy({{ $item->id }})" class="btn btn-sm dropdown-item">Delete</button></li>
                                            </ul>
                                        </div>
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

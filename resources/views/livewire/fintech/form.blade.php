<div>
    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Fintech</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('back.index') }}" wire:navigate>Home</a></li>
                <li class="breadcrumb-item">Fintech</li>
                <li class="breadcrumb-item active">Form</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Fintech Form</h5>
                    <a href="{{ route('fintech.data') }}" class="btn btn-dark btn-sm" wire:navigate>return</a>

                    <!-- General Form Elements -->
                    <form wire:submit.prevent="save" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.live="name">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" class="form-control @error('ddescription') is-invalid @enderror" rows="4" wire:model.live="description"></textarea>
                            </div>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Photo</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('photo') is-invalid @enderror" type="file" id="formFile" wire:model.live="photo">
                            </div>
                            <div wire:loading wire:target="photo" class="mt-1">
                                <p class="badge bg-primary rounded-pill">Uploading...</p>
                            </div>
                            <div>
                                @error('photo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            @if (empty(!$fintech))
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label class="col-sm-2 col-form-label">Old Photo</label>
                                        <img src="{{ Storage::url($fintech->photo) }}" alt="" class="img-fluid rounded w-50">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @if (is_object($photo))
                                        <div class="form-group mb-2">
                                            <img src="{{ $photo->temporaryUrl() }}" class="img-fluid rounded w-50">
                                        </div>
                                    @endif
                                </div>
                            @else
                                <div class="col-md-6">
                                    @if (is_object($photo))
                                        <div class="form-group mb-2">
                                            <img src="{{ $photo->temporaryUrl() }}" class="img-fluid rounded w-50">
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>

                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>

</div>

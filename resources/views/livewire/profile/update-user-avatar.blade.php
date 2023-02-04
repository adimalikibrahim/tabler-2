<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            {{ __('profile.header.update_avatar') }}
        </h3>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                {{ $errors->first() }}
            </div>
        @endif

        <div class="row mb-3">
            <div class="col-md-2 text-center m-auto">
                <span
                    style="--tblr-avatar-size: 8rem; background-image: url('{{ auth()->user()->getAvatarUrl() }}')"
                    class="avatar avatar-xl"></span>
            </div>
            <div class="col-md-10">
                <form wire:submit.prevent="upload">
                {{-- <form enctype="multipart/form-data" action="profile.avatar" method="POST"> --}}
                    @csrf
                    <div class="form-group mb-3">
                        <div class="form-label">Upload your own Profile Picture</div>
                        <input type="file" name="avatar" class="form-control" wire:model="avatar"
                               accept=".png,.jpg,.jpeg,.gif,.webp">
                        <small class="form-hint">We recommend uploading a image with a min width of
                            200px and a max width of 1000px. Only png, jpg, gif and webp files are
                            allowed.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Avatar</button>

                </form>
            </div>

        </div>
    </div><!-- /.card-body -->
</div><!-- /.card -->

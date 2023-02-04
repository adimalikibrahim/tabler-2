<div>
    @slot('title')
        List siswa aktif
    @endslot

    @slot('subtitle')
        <div class="text-muted mt-1">
            Terdata {{ $total }} siswa disistem
        </div>
    @endslot

    @slot('actions')
        <div class="col-auto ms-auto d-print-none" name="action">
            <div class="d-flex">
                {{-- <input type="search" wire:model='search' class="form-control d-inline-block w-9 me-3" placeholder="Search"/> --}}
                <a href="#" class="btn btn-primary">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                    </svg>
                    New user
                </a>
            </div>
        </div>
    @endslot

    <div class="container-xl">
        <div class="row row-cards">
            <x-status />
            <x-errors />
            <div class="card-head">
                <input type="search" wire:model='search' class="form-control d-inline-block w-9 me-3" placeholder="Search"/>
            </div>
            @if ($users->count() < 1)
                <div class="card-body">
                    <x-no-result />
                </div>
            @else
                @foreach ($users as $user)
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            @if (auth()->user()->id === $user->id)
                                <div class="card-status-top bg-danger"></div>
                                <div class="ribbon bg-red">YOU</div>
                            @endif
                            <div class="card-body p-4 text-center">
                                <span class="avatar avatar-xl mb-3 avatar-rounded"
                                    style="background-image: url('{{ $user->getAvatarUrl() }}')"></span>
                                <h3 class="m-0 mb-1">
                                    <a href="{{ route('users.edit', $user) }}">
                                        {{ $user->name }}
                                    </a>
                                </h3>
                            </div>
                            <div class="d-flex">
                                @if (auth()->user()->id === $user->id)
                                    <a href="{{ route('profile') }}" class="card-btn text-danger">
                                        <x-icons.user-check class="me-2" />
                                        Profile
                                    </a>
                                @else
                                    <a href="{{ route('users.edit', $user) }}" class="card-btn text-info">
                                        <x-icons.edit class="me-2" />
                                        Edit
                                    </a>

                                    <a href="{{ route('users.delete', $user) }}"
                                        class="card-btn text-danger btn-delete-user">
                                        <x-icons.trash class="me-2" />
                                        Delete
                                    </a>
                                    <form action="{{ route('users.delete', $user) }}" method="post"
                                        id="user-delete-{{ $user->id }}" style="display: none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="d-flex mt-4 justify-content-center">
                    {{ $users->links('livewire.livewire-pagination') }}
                </div>
            @endif
        </div>
    </div>
</div>

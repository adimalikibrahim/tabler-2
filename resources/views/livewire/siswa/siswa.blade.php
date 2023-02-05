@slot('title', 'List Siswa')

<div class="container-xl">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Invoices</h3>
            </div>
            <div class="card-body border-bottom py-3">
                <div class="d-flex">
                    <div class="text-muted">
                        Show
                        <div class="mx-2 d-inline-block">
                            <input type="text" class="form-control form-control-sm" value="8" size="3"
                                aria-label="Invoices count">
                        </div>
                        entries
                    </div>
                    <div class="ms-auto text-muted">
                        Search:
                        <div class="ms-2 d-inline-block">
                            <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th class="w-1">No.
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 15l6 -6l6 6" />
                                </svg>
                            </th>
                            <th>Nama</th>
                            <th>NIS</th>
                            <th>NISN</th>
                            <th>Rombel</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $d)
                                                    <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d[$key]['nama'] }}</td>
                                {{-- <td>{{ $d['nipd'] }}</td>
                                <td>{{ $d['nisn'] }}</td>
                                <td>{{ $d['nama_rombel'] }}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $data->links() }} --}}
                {{-- {!! $data->render() !!} --}}
            </div>
        </div>
    </div>
</div>


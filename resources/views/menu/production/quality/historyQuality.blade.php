@extends('main')
@section('content')
    <link rel="stylesheet" type="text/css" href="css/quality.css">
    <div class="main-content d-flex flex-column">
        <div class="row w-100 fs-1 fw-1">
            {{-- <div onclick="" class="col-12 text-center shadow-lg p-3 mb-5 bg-body-tertiary rounded fs-2">
        MONITORING
      </div> --}}

        </div>
        <div class="row w-100">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center d-flex flex-columns">
                        <div class="col-4">
                            <a href="/monitor" style="text-decoration: none; color:aliceblue;">
                                <div class="col-4 text-center shadow-lg p-3 bg-secondary rounded fs-7">
                                    <i class='bx bx-left-arrow '></i> MONITORING
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <h3> TABEL PROBLEM</h3>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <button type="button" class="btn btn-primary ">Download</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>TANGGAL</th>
                                    <th>NO</th>
                                    <th>NAMA PART</th>
                                    <th>PROBLEM</th>
                                    <th>AKTIVITAS</th>
                                    <th>JAM</th>
                                    <th>STATUS</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key)
                                    <tr>
                                        <td>{{ $key->created_at->format('Y-m-d') }}</td>
                                        <td>{{ $key->no_mesin }}</td>
                                        <td>{{ $key->nama_part }}</td>
                                        <td>{{ $key->problem }}</td>
                                        <td>{{ $key->aktivitas }}</td>
                                        <td>{{ $key->created_at->format('H:i') }}</td>
                                        <td>{{ $key->status }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('main')
@section('content')
    <div class="main-content d-flex flex-column ">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <p class="fs-4 fw-bold text-center mt-2">DATA LOT INGOT</p>

                    <div class="table-responsive">
                        <a class="btn btn-success float-end mb-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+ Lot Ingot</a>
                        <table id="table_id" class="table table-striped-columns table-hover table-bordered nowrap display" style="overflow-x: scroll">
                            <thead>
                                <tr class="text-center">
                                    <th>NO</th>
                                    <th>TANGGAL CHARGING</th>
                                    <th>NAMA VENDOR</th>
                                    <th>MATERIAL</th>
                                    <th>BERAT (KG)</th>
                                    <th>LOT</th>
                                    <th nowrap="nowrap" class="text-center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr >
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{date('d M y', strtotime($item->tanggal))}}</td>
                                        <td>{{ $item->nama_vendor }}</td>
                                        <td>{{ $item->material }}</td>
                                        <td class="text-end">{{ $item->berat }} KG</td>
                                        <td>{{ $item->lot_ingot }}</td>
                                        <td class="text-center"><a href="/production/lot-ingot/delete{{  $item->id }}" class="fw-bold">Hapus</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">LOT INGOT</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="col-12 mb-3">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" value="" name="tanggal" id="tanggal">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="nama_vendor">nama_vendor</label>
                            <input type="text" class="form-control" value="" name="nama_vendor" id="nama_vendor">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="material">material</label>
                            <input type="text" class="form-control" value="" name="material" id="material">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="col-12 mb-3">
                            <label for="berat">berat (KG)</label>
                            <input type="number" class="form-control" value="" name="berat" id="berat">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="lot_ingot">lot_ingot</label>
                            <input type="text" class="form-control" value="" name="lot_ingot" id="lot_ingot">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>
    <script>
        $(document).ready(function() {
            $('#table_id').dataTable({
                responsive: true,
            });
        });

    </script>
@endsection

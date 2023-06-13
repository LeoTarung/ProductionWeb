<main>
    <div class="container-fluid">
        <div class="row mx-3 mb-3">
            <div class="col-auto">
                <button class="btn btn-danger border border-dark-subtle" data-bs-dismiss="modal"
                    onclick="status(1)">PROBLEM</button>
            </div>
            <div class="col-auto">
                <button class="btn btn-success border border-dark-subtle " data-bs-dismiss="modal"
                    onclick="status(2)">GO</button>
            </div>
            <div class="col-auto">
                <button class="btn btn-warning border border-dark-subtle" data-bs-dismiss="modal"
                    onclick="status(3)">VERIFIKASI</button>
            </div>
            <div class="col-auto">
                <button class="btn btn-info border border-dark-subtle" data-bs-dismiss="modal"
                    onclick="status(4)">OFF</button>
            </div>
            <div class="col-auto">
                <button class="btn btn-light border border-dark-subtle" data-bs-dismiss="modal"
                    onclick="status(5)">TRIAL</button>
            </div>
            <div class="col-auto">
                <button class="btn purple border border-dark-subtle" data-bs-dismiss="modal"
                    onclick="status(6)">OVERHAUL</button>
            </div>
        </div>
        <table class="table table-bordered m-3">
            <thead>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Part</th>
                <th>Problem</th>
                <th>Aktivitas</th>
                <th>Jam</th>
                <th>status</th>
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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        console.log('aneh');
        console.log('test');

        function status(id) {
            var url = "/updateStatus" + "/" + id + "/" + "{{ $noMesin }}";
            var token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: token
                },
                success: function(response) {
                    console.log('success');
                },
                error: function(xhr) {
                    console.log('gagal');
                }
            });
        }
    </script>
</main>

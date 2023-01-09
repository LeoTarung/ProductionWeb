@extends('mainLHP')
@section('content')
    <table class="table table-success table-striped">
        <thead class="table-dark text-center fw-bold">
            <tr>
                <td>
                    ID
                </td>
                <td>
                    SHIFT
                </td>
                <td>
                    MESIN
                </td>
                <td>
                    NRP
                </td>
                <td>
                    INGOT
                </td>
        </thead>
        <tbody>
            @foreach ($molt as $a)
                <tr>
                    <td class="text-center">
                        <div class="col-sm">
                            <input type="text" class="form-control text-center" aria-label="City" value="{{ $a['id_lhp'] }}"
                                name="id_lhp" readonly>

                        </div>
                    </td>
                    <td class="text-center">
                        <input type="text" class="form-control text-center" aria-label="City" value="{{ $a['shift'] }}"
                            name="shift" readonly>

                    </td>
                    <td class="text-center">
                        <input type="text" class="form-control text-center" aria-label="City" value="{{ $a['mesin'] }}"
                            name="mesin">

                    </td>
                    <td>
                    <td class="text-center">
                        <input type="text" class="form-control text-center" aria-label="City"
                            value="{{ $a->lhpMelting->nrp }}" name="nrp">
                    </td>
                    </td>
                    <td class="text-center">
                        <input type="text" class="form-control text-center" aria-label="City" value="{{ $a['ingot'] }}"
                            name="ingot">
                    </td>

                </tr>
            @endforeach
    </table>
@endsection

@extends('mainLHP')
@section('content')
    <div class="container m-3"></div>
    <table class="table table-success table-striped">
        <thead class="table-dark text-center fw-bold">
            <tr>
                <td class="fs-4">
                    Jam
                </td>
                <td class="fs-4">
                    Total Charging
                </td>
                <td class="fs-4">
                    Ingot
                </td>
                <td class="fs-4">
                    Return Scrap
                </td>
                <td class="fs-4">
                    Tapping
                </td>
                <td class="fs-4">
                    Dross
                </td>
        </thead>
        <tbody class="fs-4">
            @foreach ($molt as $a)
                <tr>
                    <td class="text-center fs-4">
                        <div class="col-sm">
                            <input type="text" class="form-control text-center fs-4 fw-bold" aria-label="City"
                                value="{{ $a['jam'] }}" name="jam" readonly>

                        </div>
                    </td>
                    <td class="text-center fs-4">
                        <input type="text" class="form-control text-center fs-4 fw-bold" aria-label="City"
                            value="{{ $a->lhpMelting->total_charging_rs }}" name="total_charging_rs" readonly>
                    </td>
                    <td class="text-center fs-4">
                        <input type="text" class="form-control text-center fs-4 fw-bold" aria-label="City"
                            value="{{ $a['ingot'] }}" name="ingot">
                    </td>
                    <td class="text-center fs-4">
                        <input type="text" class="form-control text-center fs-4 fw-bold" aria-label="City"
                            value="{{ $a->lhpMelting->total_return_rs }}" name="total_return_rs">

                    </td>
                    </td>
                    <td class="text-center fs-4">
                        <input type="text" class="form-control text-center fs-4 fw-bold" aria-label="City"
                            value="{{ $a['tapping'] }}" name="total_return_rs">
                    </td>
                    <td class="text-center fs-4">
                        <input type="text" class="form-control text-center fs-4 fw-bold" aria-label="City"
                            value="{{ $a['dross'] }}" name="dross">
                    </td>

                </tr>
            @endforeach
    </table>
@endsection

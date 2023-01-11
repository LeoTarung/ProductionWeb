<div class="container m-3"></div>
<table class="table table-success table-striped">
    <thead class="table-dark text-center fw-bold">
        <tr>
            <td class="fs-4">
                JAM
            </td>
            <td class="fs-4">
                TOTAL CHARGING
            </td>
            <td class="fs-4">
                INGOT
            </td>
            <td class="fs-4">
                SCRAP
            </td>
            <td class="fs-4">
                TAPPING
            </td>
            <td class="fs-4">
                DROSS
            </td>
    </thead>
    <tbody class="fs-4">
        @foreach ($sql1 as $a)
            <tr>
                <td class="text-center fs-4">
                    <div class="col-sm">
                        <input type="text" class="form-control text-center fs-4 fw-bold" aria-label="City"
                            value="{{date('H', strtotime($a->jam))}}:00:00" name="jam" readonly>
                    </div>
                </td>
                <td class="text-center fs-4">
                    <input type="text" class="form-control text-center fs-4 fw-bold" aria-label="City"
                        value="{{ $a->total_charging_rs }}" name="total_charging_rs" readonly>
                </td>
                <td class="text-center fs-4">
                    <input type="text" class="form-control text-center fs-4 fw-bold" aria-label="City"
                        value="{{ $a->ingots }}" name="ingot">
                </td>
                <td class="text-center fs-4">
                    <input type="text" class="form-control text-center fs-4 fw-bold" aria-label="City"
                        value="{{ $a->total_return_rs }}" name="total_return_rs">

                </td>
                </td>
                <td class="text-center fs-4">
                    <input type="text" class="form-control text-center fs-4 fw-bold" aria-label="City"
                        value="{{ $a->tappings }}" name="total_return_rs">
                </td>
                <td class="text-center fs-4">
                    <input type="text" class="form-control text-center fs-4 fw-bold" aria-label="City"
                        value="{{ $a->drosss }}" name="dross">
                </td>

            </tr>
        @endforeach
</table>
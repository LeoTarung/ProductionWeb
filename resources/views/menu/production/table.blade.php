@extends('main')
@section('content')
    <div class="main-content d-flex flex-column container-fluid">
        <div class="container-fluid">
            <div class="row text-center">
                <h2>Details Report STRIKO-1</h2>
            </div>
            <div class="row justify-content-end text-end mt-1">
                <div class="col-5">
                    <input type="date"> &ensp; s/d &ensp;
                    <input type="date">
                    <button class=" ms-1 btn btn-primary">filter</button>
                </div>
            </div>
            <table class="table table-bordered mt-2 nowrap">
                <thead class="head-dtl">
                    <tr>
                        <td class="text-center nowrap">NO</td>
                        <td class="text-center nowrap">TANGGAL</td>
                        <td class="text-center nowrap">SHIFT</td>
                        <td class="text-center nowrap">MESIN</td>
                        <td class="text-center nowrap">MATERIAL</td>
                        <td class="text-center nowrap">K-VALUE</td>
                        <td class="text-center nowrap">INGOT</td>
                        <td class="text-center nowrap">EXGATE</td>
                        <td class="text-center nowrap">REJECT PARTS</td>
                        <td class="text-center nowrap">ALM. TREAT</td>
                        <td class="text-center nowrap">OIL SCRAP</td>
                        <td class="text-center nowrap">FLUXING</td>
                        <td class="text-center nowrap">TAPPING</td>
                        <td class="text-center nowrap">STOK MOLTEN</td>
                        <td class="text-center nowrap">DROSS</td>
                        <td>GAS AKHIR</td>
                        <td colspan="2" class="text-center">AKSI</td>
                    </tr>
                </thead>
                <tbody>
                    <td>1.</td>
                    <td>13/02/2023</td>
                    <td>Shift-3</td>
                    <td>SWIF ASIA</td>
                    <td>ADC-12</td>
                    <td>-</td>
                    <td>100</td>
                    <td>200</td>
                    <td>300</td>
                    <td>400</td>
                    <td>500</td>
                    <td>3</td>
                    <td>600</td>
                    <td>3500</td>
                    <td>200</td>
                    <td>12345</td>
                    <td>Detail</td>
                    <td>Edit</td>
                </tbody>
            </table>
        </div>
    </div>
@endsection

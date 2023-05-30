{{-- @include('production.finalInspection.navbarFins') --}}

<div class="row w-100 mb-3">
    <div class="col-lg-6 col-md-6 fs-3 fw-1"> Dashboard</div>
    <div class="col-md-2 col-lg-2">
        <select class="form-select" name="nama_part" style="width: 100%;" required>
            <option value="">Choose Part</option>
            @foreach($nama_part as $select)

            <option value="{{ $select->nama_part}}">{{ $select->nama_part}}</option>                 
            @endforeach
            </select>
    </div>
    <div class="col-md-2 col-2 d-flex">
        <label for="from" class="mt-2">From:</label> 
        <input type="date" id="from" name="from" class="border border-3 ms-2">
        <label for="to" class="mt-2 ms-2">To:</label> 
        <input type="date" id="to" name="to" class="border border-3 ms-2">    
    </div>
    {{-- <div class="col-sm-2 col-lg">
        <label for="to">To:</label> 
        <input type="date" id="to" name="to" class="border border-3">
    </div> --}}
    <div class="col-sm-2 d-flex ">
        <button type="button" class="btn btn-primary w-100">Filter Part</button>
    </div>
</div>
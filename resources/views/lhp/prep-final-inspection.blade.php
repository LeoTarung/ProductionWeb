@extends('mainLHP')
@section('content')

 {{-- -------------------------------- CSS  ------------------------------ --}}
 <link rel="stylesheet" type="text/css" href="{{ asset('/css/final-inspection.css') }}">
 {{-- --------------------------------      ------------------------------ --}}

<div class="container">
        <div class="card">
            <div class="card-header">P R E P A R A T I O N</div>
            <form action="/lhp-final-inspection" method="post">
            
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                           <div class="col-3">
                                <label for="nrp">NRP</label>
                           </div>
                           <div class="col-9">
                                <input type="text" id="nrp" name="nrp" placeholder="Masukkan NRP">
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="gate">Gate</label>
                           </div>
                           <div class="col-9">
                                <input type="text" id="gate" name="gate" placeholder="Masukkan ">
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="part">PART</label>
                           </div>
                           <div class="col-9">
                                <select id="part" name="country">
                                    <option value="australia">Australia</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                </select>
                           </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-end">
                    <button type="reset" class="btn btn-secondary">Reset
                    </button>
                    <button type="submit" class="btn btn-success mx-3">Simpan </button>
                </div>
            
            </form>
        </div>
    </div>
@endsection
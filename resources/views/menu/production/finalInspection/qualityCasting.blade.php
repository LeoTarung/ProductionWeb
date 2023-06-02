@extends('main')
@section('content')

<style>
 
</style>
<div class="main-content d-flex flex-column">
    <div class="col-2"></div>
    <div class="col-8 gambar"> 
        <img class="qc" src="{{ url('/img/qc.jpg') }}" alt="Image" />
        <div class="row">
            <div class="col-2">

                <div class="button1" onclick="buttonClicked(1)">1</div>

            </div>
        </div>
    </div>
    <div class="col-2"></div>
</div>

<script>
    function buttonClicked(buttonNumber) {
    console.log("Button " + buttonNumber + " clicked!");
    // Perform additional actions based on the clicked button
    // For example, you can update the UI, make an API call, etc.
    }
    </script>
@endsection
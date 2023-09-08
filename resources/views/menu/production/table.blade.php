@extends('main')
@section('content')
    <div class="main-content d-flex flex-column">
        <div class="container-fluid">
            <div class="card">
                <select id="year" name="year" class="form-control ">
                    <div class="form-group">
                        <label for="task" class="col-sm-1 control-label">Text</label>
                        @for ($i = 0; $i < $count; $i++)
                            <div class="col-sm-12">
                                <input type="text" name="text[{{ $i }}]" id="text[{{ $i }}]"
                                    class="form-control">
                            </div>
                        @endfor
                    </div>
            </div>

        </div>
    </div>
    <script></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection

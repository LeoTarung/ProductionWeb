<nav class="nav navbar-header nav-expand shadow-sm rounded">
    <div class="row">
        <div class="col-4">
            <svg id="toggle-menu" class="toggle-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
            </svg>

            {{-- <div class="col-auto"> --}}
            {{-- <div class="d-flex justify-content-start"> --}}
            <img class="logo" src="{{ url('/img/nusametal.png') }}" alt="Image" />
            {{-- </div> --}}
            {{-- </div> --}}
        </div>
        <div class="col-4 d-flex justify-content-center">
            <div class="title mt-3"></div>
        </div>
        <div class="col-4 d-flex justify-content-end">
            <div class="d-flex justify-content-end ms-3 mt-3">
                <label id="MyClockDisplay" class="clock border border-bottom rounded mt-3 px-5 mb-3 "
                    onload="showTime()">
                </label>

            </div>
        </div>
    </div>
</nav>

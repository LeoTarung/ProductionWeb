<nav class="nav shadow-lg">
    <ul>
        <li> <a href="{{ url('/lhp-melting') }}" class="navbar-brand">
                <div class="rectangle-logo shadow">
                    <img class="navbarimg" src="{{ url('/img/nusametal.png') }}" alt="Image" />
                </div>
            </a>
        </li>
        <li>
            @if (Request::url() == url('/lhp-melting'))
                <a>
                    <div class="shift border-bottom">
                        {{ $shift }}
                    </div>
                </a>
            @elseif(Request::url() == url('/lhpforklift'))
                <a>
                    <div class="shift border-bottom">
                        {{ $shift }}
                    </div>
                </a>
            @elseif(Request::url() == url('/forklift/' . $mesin . '/' . $id . ''))
                <a onClick="ModalSupply('{{ $mesin }}', '{{ $id }}')">
                    <div class="shift border-bottom">
                        {{ $shift }}
                    </div>
                </a>
            @else
                <a onClick="ModalResume('{{ $mesin }}', '{{ $id }}')">
                    <div class="shift border-bottom">
                        {{ $shift }}
                    </div>
                </a>
            @endif
        </li>
        <li class="ms-2 ">
            <!-- <a href="" class="time1"> -->
            <a href="" class="time shadow-lg navitems">
                <div id="MyClockDisplay" class="clock " onload="showTime()"></div>
                <!-- <div class="kotak">
            </  div> -->
                <div id="date-1">
                </div>
            </a>
            <!-- </a> -->
        </li>
        <li>

            {{-- LHP MELTING --}}
            @if ($nrp != 0 && Request::url() == url('/lhp-melting'))
                <a href="{{ url('/lhp-melting') }}" class="navitems">
                    <div class="nrp">
                        <div class="font-white"> NRP : </div>
                    </div>
                    <div class="nrp nrp-child border-bottom ">
                        <div class="font-white fw-bold">{{ $nrp }}</div>
                    </div>
                </a>
            @elseif(Request::url() == url('/lhp-melting'))
                <a href="{{ url('/lhp-melting') }}" class="navitems">
                    <div class="nrp border-bottom">
                        <div class="font-white"> PILIH MESIN </div>
                    </div>
                </a>
            @elseif(Request::url() == url('/lhp-melting/' . $mesin . '/' . $id . ''))
                <a href="{{ url('/lhp-melting') }}" class="navitems">
                    <div class="nrp">
                        <div class="font-white"> NRP : </div>
                    </div>
                    <div class="nrp nrp-child border-bottom ">
                        <div class="font-white fw-bold">{{ $nrp }}</div>
                    </div>
                </a>

                {{-- LHP FORKLIFT --}}
            @elseif ($nrp != 0 && Request::url() == url('/lhpforklift'))
                <a href="{{ url('/lhpforklift') }}" class="navitems">
                    <div class="nrp">
                        <div class="font-white"> NRP : </div>
                    </div>
                    <div class="nrp nrp-child border-bottom ">
                        <div class="font-white fw-bold">{{ $nrp }}</div>
                    </div>
                </a>
            @elseif($nrp == null && Request::url() == url('/lhpforklift'))
                <a href="{{ url('/lhpforklift') }}" class="navitems">
                    <div class="nrp border-bottom">
                        <div class="font-white"> PILIH FORKLIFT </div>
                    </div>
                </a>
            @elseif(Request::url() == url('/forklift/' . $mesin . '/' . $id . ''))
                <a href="{{ url('/lhpforklift') }}" class="navitems">
                    <div class="nrp">
                        <div class="font-white"> NRP : </div>
                    </div>
                    <div class="nrp nrp-child border-bottom ">
                        <div class="font-white fw-bold">{{ $nrp }}</div>
                    </div>
                </a>

                {{-- LHP CASTING --}}
            @elseif(Request::url() == url('/final'))
                <a href="{{ url('/lhp-melting') }}" class="navitems">
                    <div class="nrp border-bottom">
                        <div class="font-white"> CASTING</div>
                    </div>
                </a>

                {{-- SETTINGS --}}
            @elseif(Request::url() == url('/settings'))
                <a href="{{ url('/settings') }}" class="navitems">
                    <div class="nrp border-bottom">
                        <div class="font-white"> Admin </div>
                    </div>
                </a>
            @elseif(Request::url() == url('/settings/mesincasting/' . $id . ''))
                <a href="{{ url('/settings') }}" class="navitems">
                    <div class="nrp border-bottom">
                        <div class="font-white"> Menu Utama </div>
                    </div>
                </a>
            @endif

        </li>
        <li>

            {{-- Preparation Forklift --}}
            @if ($mesin == 'FORKLIFT')
                <a href="{{ url('/lhpforklift') }}" class="machine shadow-lg">
                    <div class="mesin">
                        @if ($mesin == 'FORKLIFT')
                            <div class="font-white "> {{ $mesin }} </div>
                        @else
                            <div class="font-white choose_machine"> {{ $mesin }} </div>
                        @endif
                    </div>
                </a>

                {{-- Preparation Melting --}}
            @elseif($mesin == 'MELTING')
                <a href="{{ url('/lhp-melting') }}" class="machine shadow-lg">
                    <div class="mesin">
                        @if ($mesin == 'MELTING')
                            <div class="font-white "> {{ $mesin }} </div>
                        @else
                            <div class="font-white choose_machine"> {{ $mesin }} </div>
                        @endif
                    </div>
                </a>

                {{-- LHP Forklift --}}
            @elseif($mesin == $forklift)
                <a href="{{ url('/lhpforklift') }}" class="machine shadow-lg">
                    <div class="mesin">
                        @if ($mesin == 'FINAL .INS')
                            <div class="font-white "> {{ $mesin }} </div>
                        @else
                            <div class="font-white choose_machine"> {{ $mesin }} </div>
                        @endif
                    </div>
                </a>

                {{-- Setting --}}
            @elseif(Request::url() == url('/settings'))
                <a href="{{ url('/settings') }}" class="machine shadow-lg">
                    <div class="mesin">
                        @if ($mesin == 'FINAL .INS')
                            <div class="font-white "> {{ $mesin }} </div>
                        @else
                            <div class="font-white choose_machine"> {{ $mesin }} </div>
                        @endif
                    </div>
                </a>
            @elseif(Request::url() == url('/settings/mesincasting/' . $id . ''))
                <a href="{{ url('/settings') }}" class="machine shadow-lg">
                    <div class="mesin">
                        @if ($mesin == 'FINAL .INS')
                            <div class="font-white "> {{ $mesin }} </div>
                        @else
                            <div class="font-white choose_machine"> {{ $mesin }} </div>
                        @endif
                    </div>
                </a>

                {{-- LHP MELTING --}}
            @else
                <a href="{{ url('/lhp-melting') }}" class="machine shadow-lg">
                    <div class="mesin">
                        @if ($mesin == 'FINAL .INS')
                            <div class="font-white "> {{ $mesin }} </div>
                        @else
                            <div class="font-white choose_machine"> {{ $mesin }} </div>
                        @endif
                    </div>
                </a>
            @endif
        </li>
        <li>
            <a onClick="ModalInstruksi('{{ $mesin }}')">
                <div class="information " data-bs-toggle="modal" data-bs-target="#instruksi-kerja">
                    <i class='bx bx-info-circle bx-md'></i>
                </div>
            </a>
        </li>
    </ul>
</nav>

{{-- MODAL --}}
<!-- Modal -->
<div class="modal fade" id="ModalNavbar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-3" id="ModalNavbarLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="page" class="p-2"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</nav>

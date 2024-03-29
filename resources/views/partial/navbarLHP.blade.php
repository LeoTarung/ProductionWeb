<nav class="nav shadow-lg">
    <ul>
        <li> <a href="{{ url('/lhp-melting') }}" class="navbar-brand">
                <div class="rectangle-logo shadow">
                    <img class="navbarimg" src="{{ url('/img/nusametal.png') }}" alt="Image" />
                </div>
            </a>
        </li>
        {{-- SHIFT --}}
        <li>

            {{-- { LHP Final Inspection} --}}
            @if (Route::currentRouteName() == 'prepareFinalInspection')
                <a>
                    <div class="shift border-bottom">
                        {{ $shift }}
                    </div>
                </a>
            @elseif(Route::currentRouteName() == 'LHPFinalInspection')
                <a onClick="ModalResume('{{ $mesin }}', '{{ $id }}')">
                    <div class="shift border-bottom">
                        {{ $shift }}
                    </div>
                </a>

                {{-- { LHP MELTING} --}}
            @elseif (Route::currentRouteName() == 'preparationMelting')
                <a>
                    <div class="shift border-bottom">
                        {{ $shift }}
                    </div>
                </a>
            @elseif(Route::currentRouteName() == 'LHPMelting')
                <a onClick="ModalResume('{{ $mesin }}', '{{ $id }}')">
                    <div class="shift border-bottom">
                        {{ $shift }}
                    </div>
                </a>

                {{-- { LHP SUPPLY} --}}
            @elseif(Route::currentRouteName() == 'preparationSupply')
                <a>
                    <div class="shift border-bottom">
                        {{ $shift }}
                    </div>
                </a>
            @elseif(Route::currentRouteName() == 'LHPSupply')
                <a onClick="ModalSupply('{{ $mesin }}', '{{ $id }}')">
                    <div class="shift border-bottom">
                        {{ $shift }}
                    </div>
                </a>

                {{-- Settings --}}
            @elseif (Route::currentRouteName() == 'MainSettings')
                <a>
                    <div class="shift border-bottom">
                        {{ $shift }}
                    </div>
                </a>
            @elseif (Route::currentRouteName() == 'MCSettings')
                <a>
                    <div class="shift border-bottom">
                        {{ $shift }}
                    </div>
                </a>

                {{-- LHP CASTING --}}
            @elseif (Route::currentRouteName() == 'preparationCasting')
                <a>
                    <div class="shift border-bottom">
                        {{ $shift }}
                    </div>
                </a>
            @elseif (Route::currentRouteName() == 'LHPCasting')
                <a onClick="ModalCasting('{{ $mc }}', '{{ $id }}')">
                    <div class="shift border-bottom">
                        {{ $shift }}
                    </div>
                </a>
            @endif
        </li>
        {{-- JAM --}}
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
        {{-- NRP --}}
        <li>
            {{-- PREP FINAL INSPECTION --}}

            @if (Route::currentRouteName() == 'prepareFinalInspection')
                <a href="{{ url('/lhp-final-inspection') }}" class="navitems">
                    <div class="nrp">
                        <div class="font-white"> NRP : </div>
                    </div>
                    <div class="nrp nrp-child border-bottom ">
                        <div class="font-white fw-bold">{{ $nrp }}</div>
                    </div>
                </a>
            @elseif(Route::currentRouteName() == 'prepareFinalInspection')
                <a href="{{ url('/lhp-final-inspection') }}" class="navitems">
                    <div class="nrp border-bottom">
                        <div class="font-white"> PILIH MESIN </div>
                    </div>
                </a>

                {{-- LHP FINAL INSPECTION --}}
            @elseif (Route::currentRouteName() == 'LHPFinalInspection')
                <a href="{{ url('/lhp-final-inspection') }}" class="navitems">
                    <div class="nrp">
                        <div class="font-white"> NRP : </div>
                    </div>
                    <div class="nrp nrp-child border-bottom ">
                        <div class="font-white fw-bold">{{ $nrp }}</div>
                    </div>
                </a>


                {{-- LHP MELTING --}}
            @elseif (Route::currentRouteName() == 'preparationMelting')
                <a href="{{ url('/lhp-melting') }}" class="navitems">
                    <div class="nrp">
                        <div class="font-white"> NRP : </div>
                    </div>
                    <div class="nrp nrp-child border-bottom ">
                        <div class="font-white fw-bold">{{ $nrp }}</div>
                    </div>
                </a>
            @elseif(Route::currentRouteName() == 'preparationMelting')
                <a href="{{ url('/lhp-melting') }}" class="navitems">
                    <div class="nrp border-bottom">
                        <div class="font-white"> PILIH MESIN </div>
                    </div>
                </a>
            @elseif (Route::currentRouteName() == 'LHPMelting')
                <a href="{{ url('/lhp-melting') }}" class="navitems">
                    <div class="nrp">
                        <div class="font-white"> NRP : </div>
                    </div>
                    <div class="nrp nrp-child border-bottom ">
                        <div class="font-white fw-bold">{{ $nrp }}</div>
                    </div>
                </a>

                {{-- Preparation FORKLIFT --}}
            @elseif (Route::currentRouteName() == 'preparationSupply')
                <a href="{{ url('/lhpforklift') }}" class="navitems">
                    <div class="nrp">
                        <div class="font-white"> NRP : </div>
                    </div>
                    <div class="nrp nrp-child border-bottom ">
                        <div class="font-white fw-bold">{{ $nrp }}</div>
                    </div>
                </a>
            @elseif(Route::currentRouteName() == 'preparationSupply')
                <a href="{{ url('/lhpforklift') }}" class="navitems">
                    <div class="nrp border-bottom">
                        <div class="font-white"> PILIH FORKLIFT </div>
                    </div>
                </a>
                {{-- LHP FORKLIFT --}}
            @elseif(Route::currentRouteName() == 'LHPSupply')
                <a href="{{ url('/lhpforklift') }}" class="navitems">
                    <div class="nrp">
                        <div class="font-white"> NRP : </div>
                    </div>
                    <div class="nrp nrp-child border-bottom ">
                        <div class="font-white fw-bold">{{ $nrp }}</div>
                    </div>
                </a>


                {{-- SETTINGS --}}
            @elseif(Route::currentRouteName() == 'MainSettings')
                <a href="{{ url('/settings') }}" class="navitems">
                    <div class="nrp border-bottom">
                        <div class="font-white"> Admin </div>
                    </div>
                </a>
            @elseif(Route::currentRouteName() == 'MCSettings')
                <a href="{{ url('/settings') }}" class="navitems">
                    <div class="nrp border-bottom">
                        <div class="font-white"> Menu Utama </div>
                    </div>
                </a>

                {{-- LHP Casting --}}
                {{-- Preparation casting --}}
            @elseif(Route::currentRouteName() == 'preparationCasting')
                {{-- <a href="{{ url('/lhp-casting') }}" class="navitems"> --}}
                <div class="nrp">
                    <div class="font-white text-center"> NRP : </div>
                </div>
                <div class="nrp nrp-child border-bottom ">
                    <div class="font-white fw-bold text-center">Preparation</div>
                </div>


                {{-- lhp casting  --}}
            @elseif (Route::currentRouteName() == 'LHPCasting')
                {{-- <a href="{{ url('/lhp-casting') }}" class="navitems"> --}}
                <div class="nrp border-bottom">
                    <div class="font-white"> {{ $nrp1 }}</div>
                </div>
            @endif

        </li>
        {{-- MESIN --}}
        <li>
            {{-- Preparation Final Inspection --}}
            @if (Route::currentRouteName() == 'prepareFinalInspection')

                <a href="{{ url('/lhp-final-inspection') }}" class="machine shadow-lg">
                    <div class="mesin">
                        @if ($mesin == 'MELTING')
                            <div class="font-white "> {{ $mesin }} </div>
                        @else
                            <div class="font-white choose_machine"> {{ $mesin }} </div>
                        @endif
                    </div>
                </a>
                {{-- LHP Final Inspection --}}
            @elseif(Route::currentRouteName() == 'LHPFinalInspection')
                <a href="{{ url('/lhp-final-inspection') }}" class="machine shadow-lg">
                    <div class="mesin">
                        @if ($mesin == 'FINAL .INS')
                            <div class="font-white "> {{ $mesin }} </div>
                        @else
                            <div class="font-white choose_machine"> {{ $mesin }} </div>
                        @endif
                    </div>
                </a>

                {{-- Preparation Melting --}}
            @elseif (Route::currentRouteName() == 'preparationMelting')
                <a href="{{ url('/lhp-melting') }}" class="machine shadow-lg">
                    <div class="mesin">
                        @if ($mesin == 'MELTING')
                            <div class="font-white "> {{ $mesin }} </div>
                        @else
                            <div class="font-white choose_machine"> {{ $mesin }} </div>
                        @endif
                    </div>
                </a>
                {{-- LHP MELTING --}}
            @elseif(Route::currentRouteName() == 'LHPMelting')
                <a href="{{ url('/lhp-melting') }}" class="machine shadow-lg">
                    <div class="mesin">
                        @if ($mesin == 'FINAL .INS')
                            <div class="font-white "> {{ $mesin }} </div>
                        @else
                            <div class="font-white choose_machine"> {{ $mesin }} </div>
                        @endif
                    </div>
                </a>

                {{-- Preparation Forklift --}}
            @elseif(Route::currentRouteName() == 'preparationSupply')
                <a href="{{ url('/lhpforklift') }}" class="machine shadow-lg">
                    <div class="mesin">
                        @if ($mesin == 'FORKLIFT')
                            <div class="font-white "> {{ $mesin }} </div>
                        @else
                            <div class="font-white choose_machine"> {{ $mesin }} </div>
                        @endif
                    </div>
                </a>


                {{-- LHP Forklift --}}
            @elseif(Route::currentRouteName() == 'LHPSupply')
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
            @elseif(Route::currentRouteName() == 'MainSettings')
                <a href="{{ url('/settings') }}" class="machine shadow-lg">
                    <div class="mesin">
                        @if ($mesin == 'FINAL .INS')
                            <div class="font-white "> {{ $mesin }} </div>
                        @else
                            <div class="font-white choose_machine"> {{ $mesin }} </div>
                        @endif
                    </div>
                </a>
            @elseif(Route::currentRouteName() == 'MCSettings')
                <a href="{{ url('/settings') }}" class="machine shadow-lg">
                    <div class="mesin">
                        @if ($mesin == 'FINAL .INS')
                            <div class="font-white "> {{ $mesin }} </div>
                        @else
                            <div class="font-white choose_machine"> {{ $mesin }} </div>
                        @endif
                    </div>
                </a>

                {{-- Preparation Casting --}}
            @elseif(Route::currentRouteName() == 'preparationCasting')
                <a href="{{ url('/lhp-casting') }}" class="machine shadow-lg">
                    <div class="mesin">
                        <div class="font-white choose_machine"> {{ $mesin }} </div>
                    </div>
                </a>
                {{-- LHP Casting --}}
            @elseif (Route::currentRouteName() == 'LHPCasting')
                <a href="{{ url('/lhp-casting') }}" class="machine shadow-lg">
                    <div class="mesin">
                        <div class="font-white choose_machine"> MESIN - {{ $mc }} </div>

                    </div>
                </a>

            @endif

        </li>
        {{-- INSTRUKSI --}}
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
                <div id="page" class=""></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</nav>

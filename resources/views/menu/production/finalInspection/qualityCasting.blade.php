@extends('main')
@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/qc.css') }}" />

    <div class="main-content d-flex flex-column">
        <div class="col-2">
            <div class="keterangan">
                <div class="judul">LEGEND :</div>
                    <div class="isi">
                        <div class="bulet1"></div>
                        <div class="ket1">: Problem Kualitas</div>
                        <div class="bulet2"></div>
                        <div class="ket2">: Produksi</div>
                        <div class="bulet3"></div>
                        <div class="ket3">: Verifikasi QC</div>
                        <div class="bulet4"></div>
                        <div class="ket4">: Off</div>
                        <div class="bulet5"></div>
                        <div class="ket5">: Trial Eng QC</div>
                    </div>
                </div>
            </div>

        <div class="col-8 m-5" style=" position: relative;">
        
            <img class="img" src="{{ url('/img/qc.jpg') }}" alt="image" style="width: 100%; height:auto;">

                        <div id="lingkaran5" class="lingkaran" href data-bs-toggle="modal" data-bs-target="#exampleModal5">
                            <div class="center">05</div>
                        </div>
                        <div id="lingkaran6" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                            <div class="center">06</div>
                        </div>
                        <div id="lingkaran2" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <div class="center">02</div>
                        </div>
                        <div id="lingkaran1" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            <div class="center">01</div>
                        </div>
                        <div id="lingkaran43" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal43">
                            <div class="center">43</div>
                        </div>
                        <div id="lingkaran44" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal44">
                            <div class="center">44</div>
                        </div>
                        <div id="lingkaran45" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal45">
                            <div class="center">45</div>
                        </div>
                        <div id="lingkaran46" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal46">
                            <div class="center">46</div>
                        </div>
                        <div id="lingkaran36" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal36">
                            <div class="center">36</div>
                        </div>
                        <div id="lingkaran37" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal37">
                            <div class="center">37</div>
                        </div>
                        <div id="lingkaran25" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal25">
                            <div class="center">25</div>
                        </div>
                        <div id="lingkaran35" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal35">
                            <div class="center">35</div>
                        </div>
                        <div id="lingkaran49" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal49">
                            <div class="center">49</div>
                        </div>

                    <div id="lingkaran47" class="lingkaran"  data-bs-toggle="modal" data-bs-target="#exampleModal47">
                        <div class="center">47</div>
                    </div>
                    <div id="lingkaran48" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal48">
                        <div class="center">48</div>
                    </div>
                    <div id="lingkaran54" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal54">
                        <div class="center">54</div>
                    </div>
                    <div id="lingkaran7" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                        <div class="center">07</div>
                    </div>
                    <div id="lingkaran34" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal34">
                        <div class="center">34</div>
                    </div>
                    <div id="lingkaran33" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal33">
                        <div class="center">33</div>
                    </div>
                    <div id="lingkaran32" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal32">
                        <div class="center">32</div>
                    </div>
                    <div id="lingkaran31" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal31">
                        <div class="center">31</div>
                    </div>
                    <div id="lingkaran30" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal30">
                        <div class="center">30</div>
                    </div>
                    <div id="lingkaran29" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal29">
                        <div class="center">29</div>
                    </div>
                    <div id="lingkaran27" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal27">
                        <div class="center">27</div>
                    </div>
                    <div id="lingkaran28" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal28">
                        <div class="center">28</div>
                    </div>
                    <div id="lingkaran20" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal20">
                        <div class="center">20</div>
                    </div>
                    <div id="lingkaran22" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal22">
                        <div class="center">22</div>
                    </div>
                    <div id="lingkaran24" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal24">
                        <div class="center">24</div>
                    </div>
                    <div id="lingkaran12" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal12">
                        <div class="center">12</div>
                    </div>
                    <div id="lingkaran40" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal40">
                        <div class="center">40</div>
                    </div>
                    <div id="lingkaran10" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal10">
                        <div class="center">10</div>
                    </div>
               
            
            
                    {{-- <div class="row" style="position: relative;">
                <div class="shift1" >
                    <div id="lingkaran5" class="lingkaran" style="position: relative;" href data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        <div class="center">05</div>
                    </div>
                    <div id="lingkaran6" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                        <div class="center">06</div>
                    </div>
                    <div id="lingkaran2" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <div class="center">02</div>
                    </div>
                    <div id="lingkaran1" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <div class="center">01</div>
                    </div>
                    <div id="lingkaran43" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal43">
                        <div class="center">43</div>
                    </div>
                    <div id="lingkaran44" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal44">
                        <div class="center">44</div>
                    </div>
                    <div id="lingkaran45" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal45">
                        <div class="center">45</div>
                    </div>
                    <div id="lingkaran46" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal46">
                        <div class="center">46</div>
                    </div>
                    <div id="lingkaran36" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal36">
                        <div class="center">36</div>
                    </div>
                    <div id="lingkaran37" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal37">
                        <div class="center">37</div>
                    </div>
                    <div id="lingkaran25" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal25">
                        <div class="center">25</div>
                    </div>
                    <div id="lingkaran35" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal35">
                        <div class="center">35</div>
                    </div>
                    <div id="lingkaran49" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal49">
                        <div class="center">49</div>
                    </div>
                </div>
            </div> --}}
                {{-- <div class="semualingkaran"> --}}
                    {{-- <div class="shift1"> --}}
                        {{-- <div id="lingkaran5" class="lingkaran" style="position: relative;" href data-bs-toggle="modal" data-bs-target="#exampleModal5">
                            <div class="center">05</div>
                        </div> --}}
                        {{-- <div id="lingkaran6" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                            <div class="center">06</div>
                        </div>
                        <div id="lingkaran2" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <div class="center">02</div>
                        </div>
                        <div id="lingkaran1" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            <div class="center">01</div>
                        </div>
                        <div id="lingkaran43" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal43">
                            <div class="center">43</div>
                        </div>
                        <div id="lingkaran44" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal44">
                            <div class="center">44</div>
                        </div>
                        <div id="lingkaran45" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal45">
                            <div class="center">45</div>
                        </div>
                        <div id="lingkaran46" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal46">
                            <div class="center">46</div>
                        </div>
                        <div id="lingkaran36" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal36">
                            <div class="center">36</div>
                        </div>
                        <div id="lingkaran37" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal37">
                            <div class="center">37</div>
                        </div>
                        <div id="lingkaran25" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal25">
                            <div class="center">25</div>
                        </div>
                        <div id="lingkaran35" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal35">
                            <div class="center">35</div>
                        </div>
                        <div id="lingkaran49" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal49">
                            <div class="center">49</div>
                        </div> --}}
                    {{-- </div> --}}
                    {{-- <div class="shift2">  
                        <div id="lingkaran47" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal47">
                            <div class="center">47</div>
                        </div>
                        <div id="lingkaran48" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal48">
                            <div class="center">48</div>
                        </div>
                        <div id="lingkaran54" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal54">
                            <div class="center">54</div>
                        </div>
                        <div id="lingkaran7" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                            <div class="center">07</div>
                        </div>
                        <div id="lingkaran34" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal34">
                            <div class="center">34</div>
                        </div>
                        <div id="lingkaran33" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal33">
                            <div class="center">33</div>
                        </div>
                        <div id="lingkaran32" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal32">
                            <div class="center">32</div>
                        </div>
                        <div id="lingkaran31" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal31">
                            <div class="center">31</div>
                        </div>
                        <div id="lingkaran30" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal30">
                            <div class="center">30</div>
                        </div>
                        <div id="lingkaran29" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal29">
                            <div class="center">29</div>
                        </div>
                        <div id="lingkaran27" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal27">
                            <div class="center">27</div>
                        </div>
                        <div id="lingkaran28" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal28">
                            <div class="center">28</div>
                        </div>
                        <div id="lingkaran20" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal20">
                            <div class="center">20</div>
                        </div>
                        <div id="lingkaran22" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal22">
                            <div class="center">22</div>
                        </div>
                        <div id="lingkaran24" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal24">
                            <div class="center">24</div>
                        </div>
                        <div id="lingkaran12" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal12">
                            <div class="center">12</div>
                        </div>
                        <div id="lingkaran40" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal40">
                            <div class="center">40</div>
                        </div>
                        <div id="lingkaran10" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal10">
                            <div class="center">10</div>
                        </div>'
                    </div>
                    <div class="shift3">   
                        <div id="lingkaran51" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal51">
                            <div class="angka">51</div>
                        </div>   
                        <div id="lingkaran52" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal52">
                            <div class="angka">52</div>
                        </div>   
                        <div id="lingkaran53" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal53">
                            <div class="angka">53</div>
                        </div>   
                        <div id="lingkaran50" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal50">
                            <div class="center">50</div>
                        </div>   
                        <div id="lingkaran38" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal38">
                            <div class="center">38</div>
                        </div>   
                        <div id="lingkaran39" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal39">
                            <div class="center">39</div>
                        </div>   
                        <div id="lingkaran4" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                            <div class="center">04</div>
                        </div>   
                        <div id="lingkaran23" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal23">
                            <div class="center">23</div>
                        </div>   
                        <div id="lingkaran55" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal55">
                            <div class="center">55</div>
                        </div>   
                        <div id="lingkaran15" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal15">
                            <div class="center">15</div>
                        </div>   
                        <div id="lingkaran21" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal21">
                            <div class="center">21</div>
                        </div>   
                        <div id="lingkaran41" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal41">
                            <div class="center">41</div>
                        </div>   
                        <div id="lingkaran42" class="lingkaran" data-bs-toggle="modal" data-bs-target="#exampleModal42">
                            <div class="center">42</div>
                        </div>
                    </div> --}}
                {{-- </div> --}}
            
        </div>
    
        <div class="col-2"></div>
    </div>

    <div class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Input Keterangan</h1>
                </div>
                <div class="modal-body">
                    <form action="index.php" method="post">		
                        <table>
                            <tr>
                                <td >No</td>
                                <td><input type="text" name="no" id="number" ></td>					
                            </tr>	
                            <tr>
                                <td>Nama Part</td>
                                <td><input type="text" name="nama"></td>					
                            </tr>	
                            <tr>
                                <td>Problem</td>
                                <td><input type="text" name="problem"></td>					
                            </tr>
                                
                            <tr>
                                <td>Aktivitas</td>
                                <td><input type="text" name="aktivitas"></td>					
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td><input type="radio" name="status" value="open">open</td>
                                <td><input type="radio" name="status" value="close">close</td>					
                            </tr>
                            <tr lg-3px>
                                <td></td>
                                <td>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" value="submit" name="submit" class="btn btn-primary">Save changes</button>				
                            </td>
                            </tr>
                        </table>  
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>ubah data</h1>
                </div>
                <div class="modal-body">
                    <form action="index.php" method="post" id="modalform">		
                        <table>
                            <tr>
                                <td>No</td>
                                <td><input type="text" name="noo" id="noo" ></td>					
                            </tr>
                            <tr>
                                <td>Nama Part</td>
                                <td><input type="text" name="namaa" id="nameedit"></td>					
                            </tr>	
                            <tr>
                                <td>Problem</td>
                                <td><input type="text" name="problemm" id="problemm"></td>					
                            </tr>
                                
                            <tr>
                                <td>Aktivitas</td>
                                <td><input type="text" name="aktivitass" id="aktivitass"></td>					
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td><select name="statuss" id="statuss">
                                    <option value="open">open</option>
                                    <option value="close">close</option>
                                </td>				
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>				
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="savemodalbutton" value="submit" name="update" class="btn btn-primary">Save changes</button>				
                            </td>
                            </tr>
                        </table>  
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="login2" data-bs-toggle="modal" data-bs-target="#login">
        <button type="button" class="btn btn-primary" onclick="">Login/register</button>
    </div>

    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="regist" data-bs-toggle="modal" data-bs-target="#signup">
                    <button type="button" class="signup">Sign Up</button>
                </div>
                <div class="modal-body">
                    <form action="monitoring.php" method="post" id="loginmasuk">		
                        <table>
                            <tr>
                                <td>Username</td>
                                <td><input type="username" name="username" id="username" ></td>					
                            </tr>	
                            <tr>
                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Password</td>
                                <td><input type="password" name="password" id="password" ></td>					
                            </tr>
                            <tr>
                                <td> </td>
                                <td> </td>				
                            </tr>
                        </table>
                        <div class="modal-footer">
                        <div data-bs-toggle="modal" data-bs-target="#">
                            <button type="button" class="btn btn-secondary">close</button>
                        </div>
                            <button type="submit" id="savemodalbutton" value="submit" name="login" class="btn btn-primary">login</button>
                        
                    </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Sign Up</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="index.php" method="post" id="loginmasuk">		
                        <table>
                            <tr>
                                <td class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Nama</td>
                                <td><input type="text" name="nama" id="nama" ></td>					
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="username" id="username" ></td>					
                            </tr>
                            
                            <tr>
                                <td>email</td>
                                <td><input type="text" name="email" id="email" ></td>					
                            </tr>	
                            <tr>
                                <td>password</td>
                                <td><input type="text" name="password" id="password"></td>					
                            </tr>
                            <tr>
                                <td> </td>
                                <td> </td>				
                            </tr>
                        </table>
                        <div class="modal-footer">
                        <div data-bs-toggle="modal" data-bs-target="#">
                            <button type="button" class="btn btn-secondary">close</button>
                        </div>
                            <button type="submit" id="savemodalbutton" value="submit" name="signin" class="btn btn-primary">save</button>
                        
                    </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>

   
@endsection
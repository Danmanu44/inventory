<x-app-layout>


    <div class="content-body text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6 p-4">
                <div class="card">
                    <div class="card-header mt-2">
                        <h4 class="card-title">Bauchi state Paliative QR Codes</h4>
                        {{-- <a href="{{ route('all_categories') }}" class="btn btn-success float-right">View</a> --}}
                    </div>
                    <div class="card-body">
                        <div class="basic-form">


                       @foreach ($clients as $client)
                            <div class="client-qrcode mt-4">
                                <?php
                                // $qrcode = SimpleSoftwareIO\QrCode\Facades\QrCode::size(200)->generate($client->custom_id);
                                // $label = $client->name;
                                // $ward_label= $client->ward;

                                ?>

                               <div>
                                {{$qrcode }}
                                </div>
                                <p>{{ $label }}</p>
                                <p>{{$ward_label}}</p>
                                <p>{{$client->phone_number}}</p>
                            </div>
                        @endforeach

                        @php

                        @endphp
                        {{-- @for ($i = 1; $i <= 830; $i++)
                       <div class="client-qrcode mt-4 p-4 card ">
                             <?php
                            // $randomNumber = "MKM(B)-" . rand(1000, 9999);
                            // $qrcode = SimpleSoftwareIO\QrCode\Facades\QrCode::size(200)->generate($randomNumber);
                            // $label = "MKM(B)";
                            // // $ward_label= $client->ward;


                            ?>

                           <div>
                            {{$qrcode }}
                            </div>
                            <p>{{$randomNumber}}</p>

                            <p>{{ $label }} Ward</p>
                            <p>Bauchi State Paliative Tag</p>
                            <p>{{$client->phone_number}}</p>
                        </div>
                    @endfor --}}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



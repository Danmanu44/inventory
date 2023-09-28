<x-app-layout>
    <div class="content-body">


        <div class="container-fluid mt-3">
            @if(auth()->user()->role=='state')

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h3 class="card-title text-white">Household Registered</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $clientCount }}</h2>
                                <p class="text-white mb-0">Dependent: {{ $totalDependents }}</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-7">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="card-title text-white">Total Beneficiaries</h3>
                            <div class="d-inline-block">
                                @php
                                    $totalBeneficiaries = $clientCount + ($totalDependents);
                                @endphp
                                <h2 class="text-white">{{ number_format($totalBeneficiaries) }}  </h2>
                                <p class="text-white mb-0">Total Individuals</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-3">
                        <div class="card-body">
                            <h3 class="card-title text-white">Total Allocated Items</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $userCount }}</h2>
                                <p class="text-white mb-0">{{ $dateRange }}</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-4">
                        <div class="card-body">
                            <h3 class="card-title text-white">No of Registered Ward</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $wardCount }}</h2>
                                <p class="text-white mb-0">Total Registered Wards</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fas fa-building"></i></span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="product-slider">
                        @foreach ($products as $product)
                        <div class="col-lg-3 col-sm-6 product-card">
                            <div class="card gradient-4">
                                <div class="card-body">
                                    <h3 class="card-title  text-white">{{ $product->name }}</h3>
                                    <div class="d-inline-block">
                                        <p class=" text-white"><i class="fa fa-cube"></i> Quantity: {{ $product->quantity }}</p>
                                        <p class="text-white"><i class="fa fa-naira"></i> Price: ₦{{ number_format($product->price, 2) }}</p>
                                    </div>
                                    <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body pb-0 d-flex justify-content-between">
                                    <div>
                                        <h4 class="mb-1">Beneficiary Per Wards</h4>

                                    </div>
                                    <div>
                                        <ul>
                                            <li class="d-inline-block mr-3"><a class="text-dark" href="#">Bauchi State</a></li>
                                            {{-- <li class="d-inline-block mr-3"><a class="text-dark" href="#">Week</a></li>
                                            <li class="d-inline-block"><a class="text-dark" href="#">Month</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="chart-wrapper">
                                    {{-- <canvas id="chart_widget_2"></canvas> --}}

                                        <canvas id="barChart"></canvas>

                                </div>
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @endif




            <div class="row">

                <div class="col-xl-6 col-lg-12 col-sm-12 col-xxl-12">
                    <div class="card">
                        <div class="card-body">
                                <h4 class="card-title mb-0">Store Location</h4>
                            <div id="world-map" style="height: 470px;"></div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-facebook">
                                <span class="s-icon"><i class="fa fa-facebook"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">89k</h4>
                                        <p class="m-0">Friends</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">119k</h4>
                                        <p class="m-0">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-linkedin">
                                <span class="s-icon"><i class="fa fa-linkedin"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">89k</h4>
                                        <p class="m-0">Friends</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">119k</h4>
                                        <p class="m-0">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-googleplus">
                                <span class="s-icon"><i class="fa fa-google-plus"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">89k</h4>
                                        <p class="m-0">Friends</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">119k</h4>
                                        <p class="m-0">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-twitter">
                                <span class="s-icon"><i class="fa fa-twitter"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">89k</h4>
                                        <p class="m-0">Friends</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">119k</h4>
                                        <p class="m-0">Followers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- #/ container -->

        <script>
            // Sample data for states and populations
        const states = ["State A", "State B", "State C", "State D", "State E"];
        const populations = [5000000, 7000000, 3000000, 4500000, 6000000];

        // Create a bar chart
        const data = @json($ward_client_data);
        const labels = data.map(item => item.ward);
        const counts = data.map(item => item.ward_count);

        // Create a bar chart
        const ctx = document.getElementById('barChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Population',
                    data: counts,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Population'
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        </script>
    </div>

</x-app-layout>

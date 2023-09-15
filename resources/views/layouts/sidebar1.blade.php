   <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard </li>
                    <li>
                        <a class="has-arrow" href="{{route('dashboard')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><i class="fa-heart"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">

                            {{-- <li><a href="./index.html">Home 1</a></li> --}}
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>


                        @auth
                        @if(auth()->user()->role=='admin')
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Categories</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all_categories') }}">All Categories</a></li>
                            <li><a href="{{ route('add_categories') }}">Add Category</a></li>

                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Products</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all_product') }}">All products</a></li>
                            <li><a href="{{route('add_product')}}">Add Product</a></li>

                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Stores</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all_store') }}">View Store</a></li>
                            <li><a href="{{route('add_store')}}">Add Store</a></li>

                        </ul>
                    </li>


                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Beneficiaries</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('client.index')}}">All Baneficiary</a></li>
                            <li><a href="{{route('client.create')}}">Add Baneficiary</a></li>

                        </ul>
                    </li>

                    <li class="nav-label">Item Product</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">

                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Item</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all_item') }}">View Item</a></li>
                            <li><a href="{{ route('add_item') }}">New Item</a></li>
                        </ul>

                    </li>
                    <li class="nav-label">Unit Allocation</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">

                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Allocations</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('view.allocation') }}">View Allocations</a></li>
                            <li><a href="{{ route('allocation.create') }}">New Allocations</a></li>
                        </ul>
                    </li>
                    <li>
                        <li class="mega-menu mega-menu-sm">
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-note menu-icon"></i><span class="nav-text">User Management</span>
                            </a>
                            <ul aria-expanded="false">
                                {{-- <li><a href="./layout-blank.html">All Dispense</a></li> --}}
                                <li><a href="{{ route('user.create') }}">Add User</a></li>

                            </ul>
                        <li>



                        @elseif(auth()->user()->role=='state')
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Categories</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all_categories') }}">All Categories</a></li>
                            <li><a href="{{ route('add_categories') }}">Add Category</a></li>

                        </ul>
                    </li>
                    <li class="nav-label">Manage Stock</li>

                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Products</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all_product') }}">All products</a></li>
                            <li><a href="{{route('add_product')}}">Register Product</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">

                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Add Product Quantity</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('add_item') }}">Add Quantity</a></li>

                            <li><a href="{{ route('all_item') }}">History</a></li>
                        </ul>

                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Stores</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all_store') }}">View Store</a></li>
                            <li><a href="{{route('add_store')}}">Add Store</a></li>

                        </ul>
                    </li>


                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Beneficiaries</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('client.index')}}">All Baneficiary</a></li>
                            <li><a href="{{route('client.create')}}">Add Baneficiary</a></li>

                        </ul>
                    </li>


                    <li class="nav-label">Unit Allocation</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">

                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Allocations</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('view.allocation') }}">View Allocations</a></li>
                            <li><a href="{{ route('allocation.create') }}">New Allocations</a></li>
                        </ul>
                    </li>
                    <li>
                        <li class="mega-menu mega-menu-sm">
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-note menu-icon"></i><span class="nav-text">User Management</span>
                            </a>
                            <ul aria-expanded="false">
                                {{-- <li><a href="./layout-blank.html">All Dispense</a></li> --}}
                                <li><a href="{{ route('user.create') }}">Add User</a></li>

                            </ul>
                        <li>



                        @elseif(auth()->user()->role=='local')
                        <li class="mega-menu mega-menu-sm">
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-note menu-icon"></i><span class="nav-text">Dispense</span>
                            </a>
                            <ul aria-expanded="false">
                                {{-- <li><a href="./layout-blank.html">All Dispense</a></li> --}}
                                <li><a href="{{ route('add_dispense') }}">Add Dispense</a></li>

                            </ul>
                        <li>


                        @else
                        <li class="mega-menu mega-menu-sm">
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-note menu-icon"></i><span class="nav-text">Pending Approval</span>
                            </a>
                            {{-- <ul aria-expanded="false">
                                <li><a href="">Pending approval </a></li>

                            </ul> --}}
                        <li>


                        @endif







                        {{-- <a href="widgets.html" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                        </a> --}}
                    </li>

                        @endauth

                         </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

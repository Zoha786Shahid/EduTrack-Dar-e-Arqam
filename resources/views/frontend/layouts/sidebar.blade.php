<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
              

                <li class="{{ request()->routeIs('home') ?'active':'' }}">
                    <a href="#">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

               

                
                {{-- <li class="{{ request()->routeIs('products.*') ?'active':'' }}">
                    <a href="{{route('products.index')}}">
                        <i data-feather="box"></i>
                        <span class="menu-text">Product</span>
                    </a>
                </li> --}}
                <li  class="{{ request()->routeIs('trips.*') ? 'active':'' }}">
                    <a href="#" >
                        <i data-feather="box"></i>
                        <span class="menu-text">Users</span>
                    </a>
                </li>
                
                
               


                {{-- {{ route('user.index') }} --}}
                   
              

                {{-- <li>
                    <a href="#">
                        <i data-feather="layout"></i>
                        <span data-key="t-horizontal">Products</span>
                    </a>
                </li> --}}

                

                

                
               

               

               

            </ul>

            
        </div>
        <!-- Sidebar -->
    </div>
</div>
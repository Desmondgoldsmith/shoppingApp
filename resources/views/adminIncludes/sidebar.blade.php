 {{-- sidebarrrrrrr start --}}

  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('Backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dessy Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('Backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item {{Request::is('dashboard') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{Request::is('dashboard') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('dashboard')}}" class="nav-link {{Request::is('dashboard') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v1</p>
                  </a>
                </li>
                </ul>
          </li>
            <li class="nav-item {{Request::is('addcategory') ? 'menu-open' : ''}} {{Request::is('category') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{Request::is('addcategory') ? 'active' : ''}} {{Request::is('category') ? 'active' : ''}}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                        Categoiries
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="/addcategory" class="nav-link {{Request::is('addcategory') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>add category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/category" class="nav-link {{Request::is('category') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>categories</p>
                </a>
              </li>
            </ul>
        </li>
          <li class="nav-item {{Request::is('addSlider') ? 'menu-open' : ''}} {{Request::is('slider') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{Request::is('addSlider') ? 'active' : ''}} {{Request::is('slider') ? 'active' : ''}}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Sliders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL('addSlider')}}" class="nav-link {{Request::is('addSlider') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL('slider')}}" class="nav-link {{Request::is('slider') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view Sliders</p>
                </a>
              </li>
            </ul>
            </li> 
          <li class="nav-item {{Request::is('addProduct') ? 'menu-open' : ''}} {{Request::is('viewProduct') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{Request::is('addProduct') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item  ">
                <a href="{{URL('addProduct')}}" class="nav-link {{Request::is('addProduct') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL('viewProduct')}}" class="nav-link {{Request::is('product') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
              
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
                          </ul>
          </li>

{{-- {{dead end}} --}}

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
                  </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
{{-- sidebar ends --}}

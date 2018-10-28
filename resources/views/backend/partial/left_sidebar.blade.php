<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="/images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Richard V.Welsh</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         
          
          
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Manage Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.products') }}"> Manage Products </a>
                  <a class="nav-link" href="{{ route('admin.product.create') }}"> Add Product </a>
                </li>
                
              </ul>
            </div>
          </li>
            
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category-pages" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Manage Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.categories') }}"> Manage Category </a>
                  <a class="nav-link" href="{{ route('admin.category.create') }}"> Add Category </a>
                </li>
                
              </ul>
            </div>
          </li>
            
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#divisions-pages" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Manage Division</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="divisions-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.divisions') }}"> Manage Division </a>
                  <a class="nav-link" href="{{ route('admin.divisions.create') }}"> Add Division </a>
                </li>
                
              </ul>
            </div>
          </li>
            
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#districts-pages" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Manage District</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="districts-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.districts') }}"> Manage District </a>
                  <a class="nav-link" href="{{ route('admin.districts.create') }}"> Add District </a>
                </li>
                
              </ul>
            </div>
          </li>
            
        </ul>
      </nav>
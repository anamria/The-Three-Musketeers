<aside class="main-sidebar elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{ asset("img/logo.png")}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    @if (Auth::user()->role == 1 )
      <span class="brand-text font-weight-light">Halaman Guru</span>
    @endif
    @if (Auth::user()->role == 2 )
      <span class="brand-text font-weight-light">Halaman Guru</span>
    @endif
    @if (Auth::user()->role == 3 )
      <span class="brand-text font-weight-light">Halaman Siswa</span>
    @endif
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset("img/account.png")}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      @if (Auth::user()->role == 1 )
        <li class="nav-item">
          <a href="{{URL::to('/list_Materi')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              List Materi 
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/add_Materi')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Tambah Materi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/list_Soalquizcategory')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              List Soal quiz 
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/add_Soalquizcategory')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Tambah Soal Quiz
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/user_list')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              List Guru & Siswa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/add_user')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Tambah Guru & Siswa
            </p>
          </a>
        </li>
      @endif
      @if (Auth::user()->role == 2 )
        <li class="nav-item">
          <a href="{{URL::to('/list_Materi')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              List Materi Category
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/add_Materi')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Add Materi Category
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/list_Soalquizcategory')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              List Soal quiz Category
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/add_Soalquizcategory')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Add Soal quiz Category
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
      @endif
      @if (Auth::user()->role == 3 )
      <li class="nav-item">
        <a href="{{URL::to('/materisatu')}}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Materi 
          </p>
        </a>
      </li>
        <li class="nav-item">
          <a href="{{URL::to('/lpgame')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Game 
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{URL::to('/lb')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Papan Peringkat
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
      @endif
        <li class="nav-item">
          <a href="{{URL::to('/about')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              About
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Log Out
              <!-- <span class="right badge badge-danger">New</span> -->
            </p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
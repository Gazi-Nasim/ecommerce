<!DOCTYPE html>
<html lang="en">
@include('backend.layouts.links')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  

  <!-- Navbar -->
  @include('backend.layouts.navBar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
                                               
          <li class="nav-item">
            <a href="{{route('product.index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                  Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="{{route('blog.index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('fb.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/carousel')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Carosel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('fp.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Featured Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/banner_two')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('fp.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Rated Product</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('fb.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>From The Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p></p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('fb.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/carousel')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Carosel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('fp.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Featured Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/banner_two')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('fp.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Rated Product</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('fb.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>From The Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p></p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('fb.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/carousel')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Carosel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('fp.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Featured Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/banner_two')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('fp.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Rated Product</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('fb.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>From The Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p></p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Contact
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('fb.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/carousel')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Carosel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('fp.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Featured Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/banner_two')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('fp.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Rated Product</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('fb.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>From The Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p></p>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">E-Commerce project OGANI backend </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
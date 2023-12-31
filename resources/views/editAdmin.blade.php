<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="/admin/css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="/admin/jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="/admin/css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.html">
          <h1 class="tm-site-title mb-0">Product Admin</h1>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('donhang') }}">
                <i class="fas fa-shopping-cart"></i> Cart
              
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('index.index') }}">
                <i class="fas fa-store"></i> Products
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('kh') }}">
                <i class="far fa-user"></i> User
              </a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-cog"></i>
                <span> Settings <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Billing</a>
                <a class="dropdown-item" href="#">Customize</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="login.html">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Edit Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="{{ route('index.update', ['MaSP' => $sanpham->MaSP]) }}" method="POST" class="tm-edit-product-form">
                  @csrf
                  @method('PUT')
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Product id
                    </label>
                    <input
                      id="name"
                      name="MaSP"
                      type="text"
                      value="{{ $sanpham->MaSP }}"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="hang"
                      >Manufacturer
                    </label>
                    <input
                      id="hang"
                      name="hang"
                      value="{{ $sanpham->hang }}"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Category</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category"
                      name="MaLSP"
                    >
                    @foreach($loaisanpham as $lsp)
                                    <option value="{{ $lsp->MaLSP }}" {{ $lsp->MaLSP == $sanpham->MaLSP ? 'selected' : '' }}>{{ $lsp->TenLSP }}</option>
                    @endforeach
                    </select>
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="tensp"
                      >Product name
                    </label>
                    <input
                      id="tensp"
                      name="tensp"
                      type="text"
                      value="{{ $sanpham->tensp }}"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="mota"
                      >Describe
                    </label>
                    <input
                      id="mota"
                      name="mota"
                      type="text"
                      value="{{ $sanpham->mota }}"
                      class="form-control validate"
                      required
                    />
                  </div>
                 
                  <div class="form-group mb-3">
                    <label
                      for="sl"
                      >Quantity
                    </label>
                    <input
                      id="sl"
                      name="sl"
                      type="text"
                      value="{{ $sanpham->sl }}"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="gia"
                      >Price
                    </label>
                    <input
                      id="gia"
                      name="gia"
                      type="text"
                      value="{{ $sanpham->gia }}"
                      class="form-control validate"
                      required
                    />
                  </div>
                   
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
              
              <div class="form-group mb-3 col-xs-12 col-sm-6">
              <label for="image">Image</label>
<input value="{{ $sanpham->image ?? '' }}" id="image" name="image" type="file" class="form-control-file">

</div> 

                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label  for="image1">Image1</label>
                          <input  value="{{ $sanpham->image1 }}" id="image1" name="image1" type="file" class="form-control-file" >
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="image2">Image2</label>
                          <input  value="{{ $sanpham->image2 }}" id="image2" name="image2" type="file" class="form-control-file" >
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="image3d">Image3d</label>
                          <input  value="{{ $sanpham->image3d }}" id="image3d" name="image3d" type="file" class="form-control-file">
                        </div>
                
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
        </div>
    </footer> 

    <script src="/admin/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="/admin/jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="/admin/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>

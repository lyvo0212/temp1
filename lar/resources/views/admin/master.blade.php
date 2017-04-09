
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title')</title>
     <link href="{{asset('css/style.css')}}" rel="stylesheet">

<!-- dung font-awesome để tạo icon nhà -->
     <link href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
<!---->

<!-- dùng cho getbootstrap-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js')}}"></script>
<!---->

<!--dùng cho datatable jquery-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.min.css')}}">
    <script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js
')}}"></script>
    <script type="text/javascript" class="init">
      $(document).ready(function() {
        $('#example').DataTable();
      });
     </script>
<!-- -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">

    <script src="{{asset('js/ie-emulation-modes-warning.js')}}"></script>

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
         <!--  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> -->
          <a class="navbar-brand"><img width="110" height="50" style="margin-top: -15px;margin-left: 35px" src="{{asset('images/eternal-beauty-logo-600-bc.gif')}}"/></a>
         
          <a class="navbar-brand" style="margin-left:20;margin-top: -8px" href="{{url('/')}}/index">
               <i class="fa fa-home fa-fw fa-2x" aria-hidden="true"></i>
              Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li></li>
            <li><a style="list-style-type: none;color: #fcf8e3">Xin chao admin</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="{{url('/')}}/users/logout">Log out</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div id="admin-menu" class="col-sm-1 col-md-2 sidebar"  >
          <ul class="nav nav-sidebar">

            <li class="active">
                <a href="{{url('/')}}/admin" style="position: relative;">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;&nbsp;Dashboard
                </a>
            </li>

            <li > 
                <a href="{{url('/')}}/admin/member">
                    <i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Staff Manager
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-users" aria-hidden="true"></i>&nbsp; Staff Group Manager
               </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-user-o" aria-hidden="true"></i>&nbsp; Customer Manager
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-cc" aria-hidden="true"></i>&nbsp; Supplier Manager
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-motorcycle" aria-hidden="true"></i>&nbsp; Delivery Company Manager
                </a>
            </li>
          </ul>

          <ul class="nav nav-sidebar">
            <li>
                <a href="">
                      <i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp; News
                  </a>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-film" aria-hidden="true"></i>&nbsp; SlideShow
                </a>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-btc" aria-hidden="true"></i>&nbsp; Convert Coin
                </a>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-money" aria-hidden="true"></i>&nbsp; Ship Price
                </a>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>&nbsp; Payments
                </a>
            </li>
          </ul>

          <ul class="nav nav-sidebar">
            <li>
                <a href="">
                   <i class="fa fa-product-hunt" aria-hidden="true"></i>&nbsp; Products
                </a>
                 <ul class="sub-menu-sidebar">
                    <li>
                        <a href="{{url('/')}}/admin/product">
                             All Products
                        </a>
                    </li>
                    <li class="">
                        <a href="{{url('/')}}/admin/categories-product">Categories</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp; 
                </a>
            </li>

            <li>  
                <a href="">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp; News
                </a>
            </li>
          </ul>
        </div>

      <!-- content-->  
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <section class="content-header">
               <div class="row">
                     <div class="col-sm-6 title">
                                <h2 class="page-header"> @yield('title')</h2>
                      </div>
                           @yield('btn-action')

               </div>
            </section>
                <div class="row placeholders">
                      @yield('content')
                </div>

        </div>

    <!-- ket thuc content -->
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{asset('js/holder.min.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>
  </body>
  <footer>

 <!-- dùng javascript modal -->  
    @yield('script')
    
    
</footer>
</html>

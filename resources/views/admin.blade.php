<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="dns-prefetch" href="//fonts.gstatic.com">    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>

<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="http://jskrishna.com/work/merkury/images/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        {{-- <li><a href="href="{{ route('logout')}}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Login</span></a></li> --}}
                        <li><a  href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                            <i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Logout</span></a></li>
                        <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Workflow</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Statistics</span></a></li>
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                       

                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                           
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                
                                        <ul class="dropdown-menu">
                                             <!-- Authentication Links -->
                                                @guest
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                                @if (Route::has('register'))
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @endguest


                                            {{-- <li>
                                                <div class="navbar-content">
                                                    <span>JS Krishna</span>
                                                    <p class="text-muted small">
                                                        me@jskrishna.com
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="#" class="view btn-sm active">View Profile</a>
                                                </div>
                                            </li> --}}
                                        </ul>
                                 >
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                    <h1>Hello, {{Auth::user()->name}}</h1>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 gutter">

                            <div class="sales table-responsive">
                                <h2>Products</h2>
                                <table class=" table table-hover">
                                    <thead>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                        <th>
                                            Price
                                        </th>
                                        <th>
                                            Buy
                                        </th>
                                    
                                    </thead>
                                    <tbody>
                                        @if($products->count()>0)
                                            
                                        @foreach($products as $product)

                                        <tr>
                                            <td>
                                                {{$product->Name}}	
                                            </td>
                                            <td>{{$product->description}}</td>
                                            <td>
                                               NGN {{$product->price}}
                                            </td>
                                            <td>
                                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                            
                                                <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                                                <input type="hidden" name="orderID" value="345">
                                                <input type="hidden" name="amount" value="{{$product->price*100}}"> {{-- required in kobo --}}
                                                <input type="hidden" name="quantity" value="1">
                                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                                                {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                                    
                                                 <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                                                
                                                    <button class="btn-success btn-xs type="submit">pay</button>
                                                    
                                                 {{-- <button class="btn-success btn-xs" type="submit">
                                                     Pay
                                                    </button> --}}
                                    
                                            </form>
                                            </td>
                                        </tr>


                                        
                                        @endforeach
                                    

                                    @else
                                        <td colspan="5" class="text-center">No posting</td>

                                    @endif

                                    </tbody>

                                </table>

                               
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 gutter">

                            <div class="sales report table-responsive">
                                <h2>Wallets</h2>

                                <table class=" table table-hover">
                                    <thead>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                       Transaction ref
                                        </th>
                                        <th>
                                        Buyer email
                                        </th>
                                        <th>
                                            Amount payed
                                        </th>
                                        
                                    
                                    </thead>
                                    <tbody>
                                        @if($wallets->count()>0)
                                            
                                        @foreach($wallets as $wallet)

                                        <tr>
                                            <td>
                                                {{Auth::user()->name}}	
                                            </td>
                                            <td>{{$wallet->transaction_id}}</td>
                                            <td>
                                               {{$wallet->buyer_email}}
                                            </td>
                                            <td>
                                                {{$wallet->amount}}
                                            </td>
                                            
                                        </tr>


                                        
                                        @endforeach
                                    

                                    @else
                                        <td colspan="5" class="text-center">No posting</td>

                                    @endif

                                    </tbody>

                                </table>

                           
                              
                            </div>
                        </div>

                        

                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
   
</body>
</html>
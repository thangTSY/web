

<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>
    <div class="content">
        <form class="form-login" method="POST" action="{{ route('admin.customLogin') }}">
            @csrf
            <h1 class="heading">LOGIN ADMIN</h1>
            <div class="form-group">

                <input type="email" class="input" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">

                <input type="password" class="input" name="password" id="password" placeholder="Password" required>
            </div>
            <button id="button" type="submit" class="button">Sign In</button>

            
        </form>
    </div>
    
    
</body> 


@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

@if(Auth::guard('admin')->check())
    <h1>Welcome, {{ Auth::guard('admin')->user()->name }}!</h1>
    <a href="{{ route('admin.signOut') }}" class="btn btn-primary">Sign Out</a>
@endif

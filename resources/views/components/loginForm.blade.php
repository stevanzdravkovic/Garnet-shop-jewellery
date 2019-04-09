

<!------ Include the above in your HEAD tag ---------->

<body>
<br/>
<div id="login">

    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success">

                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('message'))
            <div class="alert alert-danger">

                {{ session()->get('message') }}
            </div>
        @endif

        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">

                    <form id="login-form" class="form" action="{{route('do-login')}}" method="post">
                        {{csrf_field()}}

                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Email:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="{{asset('/register')}}" class="text-info">Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

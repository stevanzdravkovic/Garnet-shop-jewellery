<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">




        <form action="{{route('do-register')}}" method='post'class="col-xs-12 col-sm-12 col-md-12">
            {{csrf_field()}}
            <h2>Please fill all mandatory(*) fields</h2>
            <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Enter Name *" name="name" required>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="surname" placeholder="Enter Last Name *" name="lastName" required>
            </div>

            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Enter email *" name="email" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="pwd" placeholder="Enter password *" name="pwd" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="pwd" placeholder="Repeat password *" name="Rptpwd" required>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="remember"> <span>Remember me</span></label>
            </div>
            <button type="submit" class="btn btn-success">Submit <i class="glyphicon glyphicon-send"></i></button>
        </form>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


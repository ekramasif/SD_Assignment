<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<h1>Dashboard</h1><br><hr>
    @if(Session::has('userrole') && Session::get('userrole') == 'Admin')
    <div class="container">
        <p>This is for admin only!!</p>
    </div>
    @endif
    @if(Session::has('userrole') && Session::get('userrole') == 'Manager')
    <div class="container">
    <p>This is For manager</p>
    </div>
    @endif
    @if(Session::has('userrole') && Session::get('userrole') == 'Other')
    <div class="container">
    <p>This is For Other</p>
    </div>
    @endif
   <div class="container">
   <p>Role: {{Session::get('userrole')}}</p>
   </div>
   
   @if(Session::has('authmsg'))
   <div class="container">
   <h4>{{ Session::get('authmsg') }}</h4>
   </div>
   @endif
    <div class="container">
    <a class="btn btn-success" href="{{ URL::to('logout') }}">Logout</a>
    </div>

</body>
</html>
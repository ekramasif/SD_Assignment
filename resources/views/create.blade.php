<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<style>
    fieldset.custom-border {
        border: 4px groove #ddd !important;
        padding: 0 1.4em 1.4em 1.4em !important;
        margin: 0 0 1.5em 0 !important;
        -webkit-box-shadow: 0px 0px 0px 0px #000;
        box-shadow: 0px 0px 0px 0px #000;
    }

    legend.custom-border {
        width: auto;
        padding: 0 10px;
        border-bottom: none;
    }
</style>

<body>
<div class="jumbotron text-center" style="margin-bottom:2px">
  <h1>Create Employee</h1>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <b class="navbar-brand">ABC</b>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('employees')}}">All Employee</a>
                    </li>
                    </ul>
                </div>  
                </nav>
    <div class="container offset-3">
        <fieldset class="custom-border col-md-8">
            <legend class="custom-border">
                <h1>Create Employee</h1>
            </legend>
            <div class="col-md-12">
                <form action="{{URL::to('store-employee')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Name</b></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Email</b></label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Email" require>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Password</b></label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0"><b>Gender</b></legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="male">
                                    <label class="form-check-label">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="female">
                                    <label class="form-check-label">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-2"><b>Active</b></div>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" name="is_active" type="checkbox" value="1">
                                <label class="form-check-label">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="is_active" type="checkbox" value="0">
                                <label class="form-check-label">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Birthday</b></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="birthday">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Role</b></label>
                        <div class="col-sm-10">
                        <select name="role" class="custom-select">
                            <option selected>--Select--</option>
                            <option value="Admin">Admin</option>
                            <option value="Manager">Manager</option>
                            <option value="Other">Other</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary col-12">Submit</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <a class="btn btn-dark col-12" href="{{URL::to('employees')}}">All Employees</a>
                        </div>
                    </div>
                </form>
            </div>
        </fieldset>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
    <div class="container offset-3">
        <fieldset class="custom-border col-md-8">
            <legend class="custom-border">
                <h1>Edit Employee</h1>
            </legend>
            <div class="col-md-12">
                <form action="{{URL::to('update-employee/'.$employee->id)}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Name</b></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $employee->name }}" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Email</b></label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" value="{{ $employee->email }}" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Password</b></label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" value="{{ $employee->password }}" name="password" placeholder="Password">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0"><b>Gender</b></legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="male" {{ ($employee->gender == 'male')? 'checked': ''  }}>
                                    <label class="form-check-label">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="female" {{ ($employee->gender == 'female')? 'checked': '' }}>
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
                            <div class="form-check" {{ ($employee->is_active=='1')? 'hidden':''}}>
                                <input class="form-check-input aaa" id="A" name="is_active" type="checkbox" value="1" {{ ($employee->is_active=='1')? 'checked':''}}>
                                <label class="form-check-label">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check" {{ ($employee->is_active=='0')? 'hidden':''}}>
                                <input class="form-check-input aaa" id="A" name="is_active" type="checkbox" value="0" {{ ($employee->is_active=='0')? 'checked':''}}>
                                <label class="form-check-label">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Birthday</b></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" value="{{ $employee->birthday }}" name="birthday">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Role</b></label>
                        <div class="col-sm-10">
                        <select name="role" class="custom-select">
                            <option selected>--Select--</option>
                            <option value="Admin" {{ ($employee->role =='Admin')? 'selected':''}}>Admin</option>
                            <option value="Manager" {{ ($employee->role =='Manager')? 'selected':''}}>Manager</option>
                            <option value="Other" {{ ($employee->role =='Other')? 'selected':''}}>Other</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success col-12">Update</button>
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
<script>
    $(document).ready(function() {
        $(".aaa").change(function() {
            $(".aaa").prop('checked', false);
            $(this).prop('checked', true);
        });

    });
</script>

</html>
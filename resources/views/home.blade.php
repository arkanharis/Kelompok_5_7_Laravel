@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col s12">
        <div class="page-title">
            <h4>Welcome to Employee Leave Management System</h4>
        </div>

        <div class="col s12 m6 l8 offset-l2 offset-m3">
            <div class="card white darken-1">

                <div class="card-content ">
                    <span class="card-title" style="font-size:20px;">Employee Login</span>
                    <div class="row">
                        <form class="col s12" name="signin" method="post">
                            <div class="input-field col s12">
                                <input id="username" type="text" name="username" class="validate"
                                    autocomplete="off" required>
                                <label for="email">Email Id</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate" name="password"
                                    autocomplete="off" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="col s12 right-align m-t-sm">

                                <input type="submit" name="signin" value="Sign in"
                                    class="waves-effect waves-light btn teal">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
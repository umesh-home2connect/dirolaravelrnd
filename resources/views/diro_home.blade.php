@extends('layouts.diro_master')
@section('content')
<div class='container'>
    <div class='row'>
        <p>Already Account ?</p><a href=''>Login</a> Or  
    </div>
    <div class='panel-body'> 
        <h3>Signup</h3>
        <form method="POST" class="form-horizontal border-form jquery-validate" id='frm'>
            <div class="row form-group">
               
                <label for="name" class="control-label col-md-3">Name</label>
                <div class="col-md-5 col-sm-6 col-xs-8 controls">
               
                    <input type="text" id="name" class="form-control" name="name" placeholder="Name" required="true">
                    
                    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                </div>
            </div>
            <div class="row form-group">
                <label for="email" class="control-label col-md-3">Email</label>
                <div class="col-md-5 col-sm-6 col-xs-8 controls">
                <input type="email" id="email" class="form-control col-md-6" name="email" placeholder="Email">
                @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                </div>
            </div>
            <div class="row form-group">
                <label for="password" class="control-label col-md-3">Password</label>
                <div class="col-md-5 col-sm-6 col-xs-8 controls">
                <input type="password" id="password" class="form-control col-md-6" name="password">
                 @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                </div>
            </div>
<!--            <div class="row form-group">
                <label for="password_confirm" class="control-label col-md-3">Confirm Password</label>
                <div class="col-md-5 col-sm-6 col-xs-8 controls">
                <input type="password" id="password_confirm" class="form-control col-md-6" name="password_confirm">
                @if ($errors->has('password_confirm')) <p class="help-block">{{ $errors->first('password_confirm') }}</p> @endif
                </div>
            </div>-->
            <button type="submit" class="btn btn-success col-md-offset-3">Submit</button>
        </form>
     
    </div>
</div>
@endsection









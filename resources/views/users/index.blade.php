@extends('layouts.master')

@section('content')
    <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div>

<!--@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif-->

     <div>
        <span>Already Have Account </span><a href='/bucket_test'> Click Here! </a>
    </div>

<div>
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
            <button type="submit" class="btn btn-success col-md-offset-3">Submit</button>
        </form>
     
     
</div>
<div class='container'>
    <div class="return-data">
        
    </div>
    
</div>
@stop
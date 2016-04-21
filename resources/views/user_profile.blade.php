@extends('layouts.master')

@section('content')
    <div>
      
           @if(Session::has('msg'))
                    {{Session::get('msg')}}
                @endif   
        <div class="col-md-offset-4"><h3><?php echo $user_data['name'];?></h3></div>
        <form method="POST" class="form-horizontal border-form jquery-validate" id='frm'>
            <div class="row form-group">
               
                <label for="name" class="control-label col-md-3">Name</label>
                <div class="col-md-5 col-sm-6 col-xs-8 controls">
               
                    <input type="text" id="name" class="form-control" name="name" placeholder="Name" required="true" value="<?php echo $user_data['name'];?>">
                    
                    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                </div>
            </div>
            <div class="row form-group">
                <label for="email" class="control-label col-md-3">Email</label>
                <div class="col-md-5 col-sm-6 col-xs-8 controls">
                    <input type="email" id="email" class="form-control col-md-6" name="email" placeholder="Email" value="<?php echo $user_data['email'] ;?> ">
                @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                </div>
            </div>
<!--            <div class="row form-group">
                <label for="password" class="control-label col-md-3">Password</label>
                <div class="col-md-5 col-sm-6 col-xs-8 controls">
                <input type="password" id="password" class="form-control col-md-6" name="password">
                 @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                </div>
            </div>-->
            <button type="submit" class="btn btn-success col-md-offset-3">Edit</button>
        </form>

</div>
<div class='container'>
    <div class="return-data">
        
    </div>
</div>
@endsection
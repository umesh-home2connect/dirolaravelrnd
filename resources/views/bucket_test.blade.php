@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="col-md-8">
                    <h3> Login Form </h3>
                    <!--<div class="panel panel-default">-->
                        
                        
                     <?php // echo "<pre>"; print_r($return_value->value['fname']); echo "</pre>";?>	
                       <div style="margin-top: 10%;"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> there are some problems with input!
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
           <form method="POST" class="form-horizontal border-form jquery-validate" id='frm'>
          
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
     
                    
                    
                    
                    

<!--                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"
                                               name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary"
                                        style="margin-right: 15px;">
                                    Log in
                                </button>
                            </div>
                        </div>
                    </form>-->
                    
                </div>
            </div>
        </div>
    </div>
</div>
                    </div>
		</div>
	<!--</div>-->
@endsection
      
        
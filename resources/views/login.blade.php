@extends('Master.master')
@section('content')
<br>

		<div class="col-md-2">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4>User
              <p>Registration</p></h4>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="index" class="small-box-footer">Click Here!</a>
          </div>
        </div>
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Login</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

           	 	@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            	@endif

            <form class="form-horizontal" action="{{url('/index')}}" method="post">
            	{{csrf_field() }}
              <div class="box-body">
              	<div class="form-group">
                  <label for="inputName" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" placeholder="Name" name="inputName">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="inputEmail">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputUsername" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="inputUsername">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="inputPassword">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassCon" class="col-sm-2 control-label">Password Confirmation</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassCon" placeholder="Password" name="inputPassCon">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
      </div>

@endsection
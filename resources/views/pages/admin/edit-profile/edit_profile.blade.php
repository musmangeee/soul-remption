@extends('layouts.account')
@section('content')
<!-- Main content -->
<section>

  <div class="row">
    <div class="col-3">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Update Profile</a>


        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
      </div>
    </div>
    <div class="col-9">
      @foreach($details as $detail)
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
          <div class="col-md-9">
            <div class="nav-tabs-custom">


              <ul class="nav nav-tabs">
                <li class="active"><a href="#settings" data-toggle="tab">Update Profile</a></li>
              </ul>


              <div class="tab-content">
                <div class="tab-pane active" id="settings">
                  @if(session()->has('Success'))
                  <div class="alert alert-success">
                    {{ session()->get('Success') }}
                  </div>
                  @endif

                  <form role="form" method="post" action="{{route('update-profile')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="box-body">
                          <div class="form-group">
                            <div class="profile-pic">
                              <label class="-label" for="file">
                                <span class="glyphicon glyphicon-camera"></span>
                                <span>Change Image</span>
                              </label>
                              <input id="file" type="file" name="avatar" onchange="loadFile(event)" />
                              <img src="{{ URL::asset('public/'. $detail->avatar)}}" id="output" width="200" />
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Name<label class="text-danger">*</label></label>
                            <input type="text" class="form-control" id="" placeholder="Enter Name" name="name" value="{{$detail->name}}">
                          </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Email<label class="text-danger">*</label></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="email" value="{{$detail->email}}">
                          </div>
                            </div>
                          </div>
                         
                          
                        </div>
                      </div>
                      <br>
                    </div>

                    <br>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                  @endforeach
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
        </div>
        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>

        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
          @if(session()->has('Success'))
          <div class="alert alert-success">
            {{ session()->get('Success') }}
          </div>
          @endif
          <form role="form" method="post" action="{{route('update-password')}}">
            @csrf
            <div class="col-md-8">
              <div class="form-group" style="margin-top: 54px;">
                <label for="exampleInputPassword1">New Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
              <div class="form-group" style="margin-top: 54px;">
                <label>Confrm Password</label class="text-danger">*</label></label>
                <input type="password" class="form-control pull-right" placeholder="Current Password" name="confirm-password" required>
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  </div>
  <!-- /.col -->
  <!-- /.col -->

  </div>
  <!-- /.row -->



</section>
<!-- /.content -->

@endsection
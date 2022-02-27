@extends('lecturer.layout.app')

@section('title', 'Settings')

@section('content')

            
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">@yield('title')</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-lock fa-fw"></i> Change Password
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form action="{{$config->homeUrl}}/settings/change-password" method="post">
                                        <div class="form-group">
                                            <label for="">Current Password</label>
                                            <input type="password" class="form-control" name="cur_password" placeholder="Current Password" required />
                                        </div>

                                        <div class="form-group">
                                            <label for="">New Password</label>
                                            <input type="password" class="form-control" name="new_password" placeholder="New Password" required />
                                        </div>

                                        <div class="form-group">
                                            <label for="">Retype New Password</label>
                                            <input type="password" class="form-control" name="renew_password" placeholder="Retype New Password" required />
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" value="Change Password" class="form-control btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>
                    </div>

@stop

            
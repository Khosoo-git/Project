@extends('layouts.app')

@section('content')
<div class="container">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginRegisterPopup">
        Open Login/Register Modal
    </button>

    <!-- Modal Section -->
    <div class="modal fade text-left" id="loginRegisterPopup" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close d-md-none" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                </button>
                <div class="modal-body">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="login_register_tab">
                                <a href="#loginPopup" aria-controls="loginPopup" role="tab" class="active" data-toggle="tab">
                                    Нэвтрэх
                                </a>
                            </li>
                            <li role="presentation" class="login_register_tab">
                                <a href="#registerPopup" aria-controls="registerPopup" role="tab" data-toggle="tab">
                                    Бүртгүүлэх
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <!-- Login Tab -->
                            <div role="tabpanel" class="tab-pane active" id="loginPopup">
                                <form class="oe_login_form" role="form" method="post" action="{{ url('/login') }}">
                                    @csrf
                                    <div class="form-group field-login">
                                        <label for="login">Email</label>
                                        <input type="text" placeholder="Email" name="login" id="login" required class="form-control" />
                                    </div>
                                    <div class="form-group field-password">
                                        <label for="password">Нууц үг</label>
                                        <input type="password" placeholder="Нууц үг" name="password" id="password" required class="form-control" />
                                    </div>
                                    <div class="alert-success-error">
                                        <p class="alert alert-success d-none">Та амжилттай нэвтэрлээ</p>
                                        <p class="alert alert-danger d-none"></p>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                            </div>

                            <!-- Register Tab -->
                            <div role="tabpanel" class="tab-pane" id="registerPopup">
                                <form class="oe_register_form" role="form" method="post" action="{{ url('/register') }}">
                                    @csrf
                                    <!-- Add registration fields here -->
                                    <div class="form-group">
                                        <label for="name">Нэр</label>
                                        <input type="text" placeholder="Нэр" name="name" id="name" required class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" placeholder="Email" name="email" id="email" required class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Нууц үг</label>
                                        <input type="password" placeholder="Нууц үг" name="password" id="password" required class="form-control" />
                                    </div>
                                    <button type="submit" class="btn btn-success">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('master')

@section('content')

	<div class="row container-fluid my-5">
		<div class="col-4"></div>
		<div class="col-4">
			<p class="h1 text-center text-primary text-uppercase mb-4">Đăng nhập</p>
			<form action="" method="post" accept-charset="utf-8">
                <input type="email" name="txt_email" class="form-control mb-4" placeholder="E-mail">
                                
                <input type="password" class="form-control" placeholder="Mật khẩu" name="matkhau">
                
                <button class="btn btn-outline-primary my-4 btn-block" name="btn_DangNhap" type="submit">Đăng nhập</button>
                
                <small id="#" class="form-text text-muted mb-4 text-center">
                Chưa có tài khoản, <a href="{{ route('dangki') }}">ấn vào đây để đăng kí</a>
                </small>
			</form>
		</div>
		<div class="col-4"></div>
	</div>

@endsection
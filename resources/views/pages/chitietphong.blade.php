@extends('master')

@section('content')
<div class="container my-5 py-5 z-depth-1">
      <!--Section: Content-->
      <section class="text-center">
        <!-- Section heading -->
        <h3 class="font-weight-bold mb-5">Chi tiết phòng #{{ $phong->ID_Phong }}</h3>
        <div class="row">
          <div class="col-lg-6 mr-3">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb1" class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4" data-ride="carousel">
              <!--Slides-->
              <div class="carousel-inner text-center text-md-left" role="listbox">
                <div class="carousel-item active">
                  <img src="
                  @if(strstr($phong->HinhAnh,'http'))
                  	{{ $phong->HinhAnh }}
                  @else
                  	{{ asset('image/'.$phong->HinhAnh) }}
                  @endif
                  " alt="" height="550px">
                </div>
              </div>
              <!--/.Slides-->
            </div>
            <!--/.Carousel Wrapper-->
          </div>

          <div class="col-lg-5 text-center text-md-left">

            <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">Phòng số #{{ $phong->ID_Phong }}       
            </h2>

            <h4 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
              <span class="red-text font-weight-bold">
                <strong>{{ number_format($phong->Gia) }}</strong>
              </span>
            </h4>

            <div class="font-weight-normal">
            <p>{{ $phong->MoTaNgan }}</p>
            <p><strong>Sức chứa: </strong>{{ $phong->SucChua }} người</p>
            <p><strong>Khu vực: </strong>{{ $phong->ID_KhuVuc }}</p>
            <p><strong>Loại phòng: </strong>{{ $phong->ID_LoaiPhong }}</p>
            <p><strong>Số lượng nhà vệ sinh: </strong>{{ $phong->WC }}</p>
            <p><strong>An ninh: </strong>{{ $phong->AnNinh }}</p>
            <p><strong>Tiện nghi: </strong>{{ $phong->TienNghi }}</p>

              <div class="mt-5">
                <p class="grey-text"><strong>Thời hạn muốn thuê theo hợp đồng</strong></p>
                <form action="../thanhtoan/index.php" method="post" class="ml-3">  
                    <div class="row text-center text-md-left">
                      <div class="col-md-4 ">
                        <div class="form-group">
                          <input class="form-check-input" name="radio_thoihan" type="radio" checked="checked" value="1">
                          <label for="radio100" class="form-check-label dark-grey-text">1 tháng</label>
                        </div>
                      </div>
                      <div class="col-md-4 ">
                        <div class="form-group">
                          <input class="form-check-input" name="radio_thoihan" type="radio" value="3">
                          <label for="radio100" class="form-check-label dark-grey-text">3 tháng</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input class="form-check-input" name="radio_thoihan" type="radio" value="6">
                          <label for="radio101" class="form-check-label dark-grey-text">6 tháng</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input class="form-check-input" name="radio_thoihan" type="radio" value="12">
                          <label for="radio102" class="form-check-label dark-grey-text">1 năm</label>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3 mb-4">
                      <div class="col-md-12 text-center text-md-left text-md-right">
                        <input type="hidden" name="id_phong" value="{{ $phong->ID_Phong }}">
                        <input type="submit" class="btn btn-primary btn-rounded" value=" Đặt phòng">
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Content-->

        <div id="accordion">
            <div class="card">
              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                  <div class="card-header">
                    Mô tả
                  </div>
              </a>
              <div id="collapseOne" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  {{ $phong->MoTaDai }}
                </div>
              </div>
            </div>
            
            <div class="card">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
              <div class="card-header">
                Ghi chú
              </div>  
              </a>

              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  {{ $phong->GhiChu }}
                </div>
              </div>
            </div>
            
            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                  Đánh giá
                </a>
              </div>
              <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                	@forelse($danhgia as $dg)
	                    <div class="media border p-3">
	                      <img src="
	                      		@foreach($taikhoan as $tk)
	                        		@if($dg->ID_TaiKhoan == $tk->ID_TaiKhoan)
	                        			{{ asset('image/'.$tk->AnhDaiDien) }}
	                        		@endif
	                        	@endforeach
	                      " alt="avatar" class="mr-3 mt-3 rounded-circle" width="70px" height="70px">
	                      <div class="media-body">
	                        <h5>
	                        	@foreach($taikhoan as $tk)
	                        		@if($dg->ID_TaiKhoan == $tk->ID_TaiKhoan)
	                        			{{ $tk->HoTen}}
	                        		@endif
	                        	@endforeach <small><i>Đánh giá vào {{ date_format(date_create($dg->ThoiGian),'d-m-Y H:i:s') }}</i></small></h5>
	                        <p>{{ $dg->NoiDung }}</p>
	                      </div>
	                    </div>
                    @empty
                    	<p>Chưa có đánh giá cho căn phòng này</p>
                    @endforelse
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
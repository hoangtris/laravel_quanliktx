@extends('master')

@section('content')

  <!-- Page Content -->
  <div class="container-fluid px-5 pt-5">

    <div class="row">

      <div class="col-3 mb-3">
		    <h2 class="my-4">Tìm kiếm</h2>
  			<form class="example" action="{{ route('dangkiphong/search') }}" method="get">
  			  <input type="text" placeholder="Nhập giá trị.." name="tukhoa" class="form-control mb-1">
  			  <button type="submit" class="btn btn-outline-primary"><i class="fa fa-search"></i> Tìm</button>
  			</form>
		  
        <h2 class="my-4">Khu vực</h2>
        <div class="list-group">
		  	@foreach($khuvuc as $kv)
          	<a href="{{ route('dangkiphong/khuvuc', $kv->ID_KhuVuc) }}" class="list-group-item list-group-item-action">{{ $kv->Ten }}</a>
			  @endforeach
        </div>
		  
	      <h2 class="my-4">Loại phòng</h2>
        <div class="list-group">
		  	@foreach($loaiphong as $kv)
          	<a href="{{ route('dangkiphong/loaiphong', $kv->ID_LoaiPhong) }}" class="list-group-item list-group-item-action">{{ $kv->MoTa }}</a>
			  @endforeach
        </div>

        <h2 class="my-4">Mức giá</h2>
        <div class="list-group">
            <a href="{{ route('dangkiphong/mucgia', '<1tr') }}" class="list-group-item list-group-item-action">Dưới 1 triệu</a>
            <a href="{{ route('dangkiphong/mucgia', '1-2tr') }}" class="list-group-item list-group-item-action">1 triệu ~ 2 triệu</a>
            <a href="{{ route('dangkiphong/mucgia', '2-3tr') }}" class="list-group-item list-group-item-action">2 triệu ~ 3 triệu</a>
            <a href="{{ route('dangkiphong/mucgia', '3-4tr') }}" class="list-group-item list-group-item-action">3 triệu ~ 4 triệu</a>
            <a href="{{ route('dangkiphong/mucgia', '>4tr') }}" class="list-group-item list-group-item-action">Trên 4 triệu</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col">
        <div class="row">
  		    @forelse($phong as $p)
          <div class="col-lg-4 col-md-4 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top"
                src="
                  @if(strstr($p->HinhAnh,'http'))
                    {{ $p->HinhAnh }}
                  @else
                    {{ asset('image/'.$p->HinhAnh) }}
                  @endif
                " alt="" height="250px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="{{ route('xemphong', $p->ID_Phong) }}">Phòng số #{{ $p->ID_Phong }}</a>			
                </h4>

                <h5>{{ number_format($p->Gia) }} VND</h5>
        				<div class="card-text">Khu vực: 
        					@foreach($khuvuc as $kv)
        						@if($p->ID_KhuVuc == $kv->ID_KhuVuc)
        							{{$kv->Ten}}
        						@endif
        					@endforeach
        				</div>	
        				<div class="card-text">Loại phòng: 
        					@foreach($loaiphong as $lp)
        						@if($p->ID_LoaiPhong == $lp->ID_LoaiPhong)
        							{{$lp->MoTa}}
        						@endif
        					@endforeach
        				</div>
        				<div class="card-text">Sức chứa: {{ $p->SucChua }}</div> 
        				<div class="card-text">Thời hạn: {{ $p->ThoiHan }}</div>
        				<div class="card-text">An ninh: {{ $p->AnNinh }}</div>   
              </div>
              
              <div class="card-footer">
                  <a href="#"><button type="button" class="btn btn-outline-primary" style="width: 100%">Xem phòng</button></a>
              </div>
            </div>
          </div>
          @empty
          	<p class="h4">Không tìm thấy phòng.<p>
  		    @endforelse
        </div>
        <!-- /.row -->
        {{ $phong->onEachSide(1)->links() }}
      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection
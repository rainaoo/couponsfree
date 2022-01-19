@extends('admin.layout')
@section('contant')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Catalogues</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Banners</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- /.card -->
 
            @if(Session::has('success_message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:10px;">
               {{Session::get('success_message') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
            <div class="box">
              <div class="box-header">
                <h3 class="card-title">Banners</h3>
                <a href="{{url('add_edit_banner')}}" class="btn  btn-primary" 
                   style="max-width:150px;float:right;display-inline-block">Add Banners</a>

              </div>
              <!-- /.card-header -->
              @if(session()->has('message')) 
                <div class="alert alert-dismissible" style="color:red">
                    {{session('message')}}
                </dive> 
             @endif   
              <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Image</th>
                      <th>Link</th>
                      <th>Title</th>
                      <th>Title_ar</th>
                      <th>Alt</th>
                      <th>Action</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($banners as $banner)
                    <tr>
                      <td>{{$banner['id'] }}</td>
                      <td>
                         <a href=""><img  style="width:180px;" src="{{asset('public/backend/dist/img/banner_images/'.$banner['image']) }}"></a>
                      </td>
                      <td>{{$banner['link'] }}</td>
                      <td>{{$banner['title'] }}</td>
                      <td>{{$banner['title_ar'] }}</td>
                      <td>{{$banner['alt'] }}</td>
                      <td>
                        <a title="Edit Banner" style="font-size: 20px" href="{{url('add_edit_banner/'.$banner['id'])}}" class=" btn-xs"><i class="fa fa-edit"></i></a>
                        &nbsp;&nbsp;
                        <a title="Delete Banner"  href="javascript:void(0)" style="font-size: 20px" class="confirmDelete btn-xs" name="banner" record="banner" recordid="{{$banner['id'] }}" ><i class="fa fa-trash"></i></a>
                          &nbsp;&nbsp;
                     @if($banner['status']==1)
                       <a class="updateBannerStatus" style="font-size: 20px" id="banner-{{$banner['id'] }}" 
                        banner_id="{{$banner['id'] }}" href="javascript:void(0)" ><i class="fa fa-toggle-on" aria-hidden="true" status="Active"></i></a>
                     @else
                     <a class="updateBannerStatus"   style="font-size: 20px"  id="banner-{{$banner['id'] }}" 
                        banner_id="{{$banner['id'] }}" href="javascript:void(0)" > <i class="fa fa-toggle-off" aria-hidden="true" status="Inactive"></i></a>
                     @endif
                    </td>
                      
                    </tr>
                   @endforeach
                  </table>
                 
              </div>
              <!-- /.card-body -->
           </div>
            <!-- /.card -->
        </div>
          <!-- /.col -->
       </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
     </section>
    <!-- /.content -->

@endsection

@push('footer-script')
 {{-- <script>
     $(document).ready(function(){
         $(document).on("click",".deletepost",function(){
            var id=$(this).attr('post-id');
            var image=$(this).attr('image');

            if(confirm('Are you sure want to delet this post with all data?')){
                $.ajax({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    },
                    url:'{{route('post-delete')}}',
                    data:{"id":id,"image":image},
                    type:"post",
                    success:function(data){
                        if(data==true){
                            alert("post deleted successfuly");
                        }else{
                            alert(data);
                        }
                        window.location.reload();
                    }
                });
            }
         });
         
     });
 </script> --}}
@endpush

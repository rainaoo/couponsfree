@extends('admin.layout')
@section('contant')
  <!-- Content Header (Page header) -->
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
            <li class="breadcrumb-item active">Deals</li>
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
         
          <!-- /.box -->
          
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
              <h3 class="box-title">Deals</h3>
              <a href="{{ url('add_edit_deal') }}" class="btn  btn-success" style="max-width:150px;float:right;display-inline-block">Add deal</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="Deals" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>deal Title</th>
                    <th>deal Title_ar</th>
                    <th>deal price_old</th>
                    <th>deal price_new</th>
                    <th>deal discount</th>
                    <th>deal Image</th>
                    <th>Category</th>
                    <th>store</th>
                    <th>Status</th>
                    <th>Actions</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($deals as $deal)
                     
                    <tr>
                      <td>{{$deal->id }}</td>
                      <td>{{$deal->title }}</td>
                      <td>{{$deal->title_ar }}</td>
                      <td>{{$deal->price_old }}</td>
                      <td>{{$deal->price_new}}</td>
                      <td>{{$deal->discount}}</td>
                      <td>
                        <?php $coupon_image_path="public/backend/dist/img/deal_images/".$deal->main_image; ?>
                        @if(!empty($deal->main_image) /*&& file_exists($product_image_path)*/)
                          <img  style="width:100px" src="{{asset('public/backend/dist/img/deal_images/'.$deal->main_image) }}">
                         @else
                          <img  style="width:100px" src="{{asset('public/backend/dist/img/deal_images/no_image.png') }}">
                        @endif 
                      </td>
                      <td>{{$deal->category['name']}}  </td>
                      <td>{{$deal->store['name']}}</td>
                      <td>{{$deal->expires}}</td>
                      <td>
                        @if($deal->status==1)
                          <a class="updateDealStatus" style="font-size: 20px"  id="deal-{{$deal->id }}" 
                              deal_id="{{$deal['id'] }}" href="javascript:void(0)"><i class="fa fa-toggle-on" aria-hidden="true" status="Active"></i></a>
                        @else
                        <a class="updateDealStatus"   style="font-size: 20px" id="deal-{{$deal->id }}" 
                          deal_id="{{$deal['id']  }}" href="javascript:void(0)"> <i class="fa fa-toggle-off" aria-hidden="true" status="Inactive"></i></a>
                        @endif
                    </td>
                    <td>
                      <a title="Edit deal" style="font-size: 20px" href="{{ url('add_edit_deal',$deal->id)}}"><i class="fa fa-edit"></i></a>
                      &nbsp;&nbsp;
                      <a title="Delete deal" style="font-size: 20px" class="confirmDelete" name="deal" record="deal" recordid="{{$deal->id }}" 
                        <?php /*  href="{{ url('delete-deal',$deal->id)}}" */?>><i class="fa fa-trash"></i></a>
                    </td> 
                    </tr>
                 @endforeach
                </table>
               
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>




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

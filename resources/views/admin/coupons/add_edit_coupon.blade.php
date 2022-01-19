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
              <li class="breadcrumb-item active">Coupon</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if ($errors->any())
            <div class="alert alert-danger" style="margin-top:10px">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(Session::has('success_message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:10px;">
                {{Session::get('success_message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <form name="couponForm" id="couponForm"
            @if(empty($coupon['id']))
                  action="{{route('addeditecoupon') }}"
                @else
                  action="{{url('add_edit_coupon/'.$coupon['id']) }}" 
                @endif  
                    method="post" enctype="multipart/form-data">@csrf
                <!-- SELECT2 EXAMPLE -->
                <div class="box box-default">
                    <div class="box-header">
                        <h3 class="box-title">{{$title}}</h3>

                        <div class="box-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fa fa-times"></i>
                        </button>
                        </div>
                    </div>
                <!-- /.card-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Category</label>
                                <select  id="category_id" name="category_id" class="form-control select2" style="width: 100%;">
                                    <option value="">Select</option>
                                      @foreach($categories as $category)
                                        <option value="{{$category['id']}}"
                                          @if(!empty(@old('category_id'))&& $category['id']==@old('category_id'))
                                             selected=""
                                            @elseif(!empty($coupondata['category_id']) && $coupondata['category_id']==$category['id'])
                                              selected=""
                                            @endif
                                            >&nbsp;&nbsp;--&nbsp;&nbsp;{{$category['name']}}</option>
                                      @endforeach
                                    
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label>Select Brand</label>
                                  <select  id="store_id" name="store_id" class="form-control select2" style="width: 100%;">
                                  <option value="">Select</option>
                                  @foreach($stores as $store)
                                   <option value="{{$store['id']}}" 
                                        @if(!empty(@old('store_id'))&& $store['id']==@old('store_id'))
                                        selected=""
                                          @elseif(!empty($coupondata['store_id']) && $coupondata['store_id']==$store['id'])
                                            selected=""
                                        @endif
                                      >{{$store['name']}}</option>
                                   @endforeach
                                  </select>
                              </div>
                                <div class="form-group">
                                    <label for="title">Coupon Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter product Name"
                                    @if(!empty($coupondata['title']))
                                     value="{{$coupondata['title']}}" 
                                      @else
                                      value="{{old('title') }}" 
                                    @endif
                                   >
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="title_ar">Coupon Title in arabic</label>
                                <input type="text" class="form-control" id="title_ar" name="title_ar" placeholder="Enter product Name"
                                @if(!empty($coupondata['title_ar']))
                                  value="{{$coupondata['title_ar']}}"
                                  @else
                                  value="{{old('title_ar')}}"  
                                  @endif
                                  >
                             </div>
                                    <div class="form-group">
                                    <label for="coupon_code">coupon Code</label>
                                    <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Enter coupon Code"
                                    @if(!empty($coupondata['coupon_code']))
                                      value="{{$coupondata['coupon_code']}}"
                                      @else
                                      value="{{old('coupon_code')}}"  
                                      @endif>
                                </div>
            
                                <div class="form-group">
                                    <label for="coupon_discount">coupon dicount %</label>
                                    <input type="text" class="form-control" id="coupon_discount" name="coupon_discount" placeholder="Enter coupon discount"
                                    @if(!empty($coupondata['coupon_discount']))
                                      value="{{$coupondata['coupon_discount'] }}"
                                          
                                      @else
                                      value="{{old('coupon_discount') }}"  
                                      @endif>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">coupon Description</label>
                                    <textarea id="description" name="description" class="form-control" rows="3" placeholder="Enter ...">
                                    @if(!empty($coupondata['description']))
                                      {{$coupondata['description'] }}
                                          
                                      @else
                                      {{old('description') }}  
                                      @endif</textarea>
                                </div>
            
                                <div class="form-group">
                                    <label for="description_ar">coupon Description in arabic</label>
                                    <textarea id="description_ar" name="description_ar" class="form-control" rows="3" placeholder="Enter ...">
                                    @if(!empty($coupondata['description_ar']))
                                      {{$coupondata['description_ar'] }}
                                          
                                      @else
                                      {{old('description_ar') }}  
                                      @endif</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="expires">coupon expires</label>
                                    <input type="text" class="form-control" id="expires" name="expires" placeholder="Enter coupon expires "
                                    @if(!empty($coupondata['expires']))
                                      value="{{$coupondata['expires'] }}"
                                          
                                      @else
                                      value="{{old('expires') }}"  
                                      @endif>
                                </div>
                                <div class="form-group">
                                    <label for="expires">coupon link</label>
                                    <input type="text" class="form-control" id="link" name="link" placeholder="Enter coupon link "
                                    @if(!empty($coupondata['link']))
                                      value="{{$coupondata['link'] }}"
                                          
                                      @else
                                      value="{{old('link') }}"  
                                      @endif>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">coupon Main Image</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="main_image" name="main_image" >
                                        <label class="custom-file-label" for="main_image">Choose file</label>
                                           
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    </div>
                                    <div>Recommend Image Size:(width:1040px ,height:1200px)</div>
                                    @if(!empty($coupondata['main_image']))
                                    <div><img style="width:80px;margin-top:5px;" src="{{ asset('public/backend/dist/img/coupon_images/'.$coupondata['main_image']) }}">
                                         &nbsp;
                                         <a  class="confirmDelete" href="javascript:void(0)" record="coupon-image" recordid="{{$coupondata['id']}}"> Delete Image</a>
                                    </div>
                                    @endif 
                                   
                                </div>
                                <!-- /.form-group -->
                            </div>
                        </div>
                        <!-- /.row -->
                  
                
                </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class="box-footer">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
                <!-- /.card -->
            </form>
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
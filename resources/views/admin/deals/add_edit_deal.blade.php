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
              <li class="breadcrumb-item active">Deal</li>
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
            <form name="dealForm" id="daelForm"
            @if(empty($deal['id']))
                  action="{{route('addeditedeal') }}"
                @else
                  action="{{url('add_edit_deal/'.$deal['id']) }}" 
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
                                            @elseif(!empty($dealdata['category_id']) && $dealdata['category_id']==$category['id'])
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
                                          @elseif(!empty($dealdata['store_id']) && $dealdata['store_id']==$store['id'])
                                            selected=""
                                        @endif
                                      >{{$store['name']}}</option>
                                   @endforeach
                                  </select>
                              </div>
                                <div class="form-group">
                                    <label for="title">deal Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter product Name"
                                    @if(!empty($dealdata['title']))
                                     value="{{$dealdata['title']}}" 
                                      @else
                                      value="{{old('title') }}" 
                                    @endif
                                   >
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="title_ar">deal Title in arabic</label>
                                <input type="text" class="form-control" id="title_ar" name="title_ar" placeholder="Enter product Name"
                                @if(!empty($dealdata['title_ar']))
                                  value="{{$dealdata['title_ar']}}"
                                  @else
                                  value="{{old('title_ar')}}"  
                                  @endif
                                  >
                             </div>
                                    <div class="form-group">
                                    <label for="price_old">price_old </label>
                                    <input type="text" class="form-control" id="price_old" name="price_old" placeholder="Enter deal Code"
                                    @if(!empty($dealdata['price_old']))
                                      value="{{$dealdata['price_old']}}"
                                      @else
                                      value="{{old('price_old')}}"  
                                      @endif>
                                </div>
                                <div class="form-group">
                                  <label for="price_new">price_new</label>
                                  <input type="text" class="form-control" id="price_new" name="price_new" placeholder="Enter deal Code"
                                  @if(!empty($dealdata['price_new']))
                                    value="{{$dealdata['price_new']}}"
                                    @else
                                    value="{{old('price_new')}}"  
                                    @endif>
                              </div>
            
                                <div class="form-group">
                                    <label for="discount">deal dicount %</label>
                                    <input type="text" class="form-control" id="discount" name="discount" placeholder="Enter deal discount"
                                    @if(!empty($dealdata['discount']))
                                      value="{{$dealdata['discount'] }}"
                                          
                                      @else
                                      value="{{old('discount') }}"  
                                      @endif>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">deal Description</label>
                                    <textarea id="description" name="description" class="form-control" rows="3" placeholder="Enter ...">
                                    @if(!empty($dealdata['description']))
                                      {{$dealdata['description'] }}
                                          
                                      @else
                                      {{old('description') }}  
                                      @endif</textarea>
                                </div>
            
                                <div class="form-group">
                                    <label for="description_ar">deal Description in arabic</label>
                                    <textarea id="description_ar" name="description_ar" class="form-control" rows="3" placeholder="Enter ...">
                                    @if(!empty($dealdata['description_ar']))
                                      {{$dealdata['description_ar'] }}
                                          
                                      @else
                                      {{old('description_ar') }}  
                                      @endif</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="expires">deal expires</label>
                                    <input type="text" class="form-control" id="expires" name="expires" placeholder="Enter deal expires "
                                    @if(!empty($dealdata['expires']))
                                      value="{{$dealdata['expires'] }}"
                                          
                                      @else
                                      value="{{old('expires') }}"  
                                      @endif>
                                </div>
                                <div class="form-group">
                                    <label for="expires">deal link</label>
                                    <input type="text" class="form-control" id="link" name="link" placeholder="Enter deal link "
                                    @if(!empty($dealdata['link']))
                                      value="{{$dealdata['link'] }}"
                                          
                                      @else
                                      value="{{old('link') }}"  
                                      @endif>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">deal Main Image</label>
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
                                    @if(!empty($dealdata['main_image']))
                                    <div><img style="width:80px;margin-top:5px;" src="{{ asset('public/backend/dist/img/deal_images/'.$dealdata['main_image']) }}">
                                         &nbsp;
                                         <a  class="confirmDelete" href="javascript:void(0)" record="deal-image" recordid="{{$dealdata['id']}}"> Delete Image</a>
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
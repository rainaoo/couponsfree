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
              <li class="breadcrumb-item active">Stores</li>
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
            <form name="storeForm" id="storeForm"
            @if(empty($store['id']))
                  action="{{route('addeditestore') }}"
                @else
                  action="{{url('add_edit_store/'.$store['id']) }}" 
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
                                    <label for="exampleInputFile">store Image</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image" >
                                        <label class="custom-file-label" for="main_image">Choose file</label>
                                        
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    </div>
                                    <div>Recommend Image Size:(width:500px ,height:800px)</div>
                                    @if(!empty($store['image']))
                                    <div><img style="width:80px;margin-top:5px;" src="{{ asset('public/backend/dist/img/store_images/'.$store['image']) }}">
                                        &nbsp;
                                    </div>
                                    @endif 
                                
                                </div>
                                <div class="form-group">
                                    <label for="link">store Link</label>
                                    <input type="text" class="form-control" id="url" name="url" placeholder="Enter store link"
                                    @if(!empty($store['url']))
                                    value="{{$store['url'] }}"
                                        
                                    @else
                                    value="{{old('url') }}"  
                                    @endif>
                                </div>
                               
                                <!-- /.form-group -->
                            </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">store name </label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter store name"
                                @if(!empty($store['name']))
                                value="{{$store['name'] }}"
                                    
                                @else
                                value="{{old('name') }}"  
                                @endif>
                            </div>
                            <div class="form-group">
                                <label for="description">store description</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Enter banners description"
                                @if(!empty($store['description']))
                                value="{{$store['description'] }}"
                                    
                                @else
                                value="{{old('description') }}"  
                                @endif>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="description_ar">description_ar</label>
                                <input type="text" class="form-control" id="description_ar" name="description_ar" placeholder="Enter banners description in arabic"
                                @if(!empty($store['description_ar']))
                                value="{{$store['description_ar'] }}"
                                    
                                @else
                                value="{{old('description_ar') }}"  
                                @endif>
                            </div>


                           
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
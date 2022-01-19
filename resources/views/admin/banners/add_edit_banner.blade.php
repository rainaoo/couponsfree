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
            <form name="bannerForm" id="bannerForm"
            @if(empty($banner['id']))
                  action="{{route('addeditebanner') }}"
                @else
                  action="{{url('add_edit_banner/'.$banner['id']) }}" 
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
                                    <label for="exampleInputFile">Banner Image</label>
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
                                    @if(!empty($banner['image']))
                                    <div><img style="width:80px;margin-top:5px;" src="{{ asset('public/backend/dist/img/banner_images/'.$banner['image']) }}">
                                        &nbsp;
                                    </div>
                                    @endif 
                                
                                </div>
                                <div class="form-group">
                                    <label for="link">Banner Link</label>
                                    <input type="text" class="form-control" id="link" name="link" placeholder="Enter banner link"
                                    @if(!empty($banner['link']))
                                    value="{{$banner['link'] }}"
                                        
                                    @else
                                    value="{{old('link') }}"  
                                    @endif>
                                </div>
                               
                                <!-- /.form-group -->
                            </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Banner Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter banners title"
                                @if(!empty($banner['title']))
                                value="{{$banner['title'] }}"
                                    
                                @else
                                value="{{old('title') }}"  
                                @endif>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label for="title_ar">Banner Title_ar</label>
                                <input type="text" class="form-control" id="title_ar" name="title_ar" placeholder="Enter banners title in arabic"
                                @if(!empty($banner['title_ar']))
                                value="{{$banner['title_ar'] }}"
                                    
                                @else
                                value="{{old('title_ar') }}"  
                                @endif>
                            </div>

                            <div class="form-group">
                                <label for="title">Banner alternate text</label>
                                <input type="text" class="form-control" id="alt" name="alt" placeholder="Enter banners alt"
                                @if(!empty($banner['alt']))
                                value="{{$banner['alt'] }}"
                                    
                                @else
                                value="{{old('alt') }}"  
                                @endif>
                            </div>

                            <div class="form-group">
                                <label for="title">discount</label>
                                <input type="text" class="form-control" id="discount" name="discount" placeholder="Enter discount"
                                @if(!empty($banner['discount']))
                                value="{{$banner['discount'] }}"
                                    
                                @else
                                value="{{old('discount') }}"  
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
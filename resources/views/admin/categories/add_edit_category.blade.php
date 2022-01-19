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
              <li class="breadcrumb-item active">Category</li>
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
            <form name="categoryForm" id="categoryForm"
            @if(empty($category['id']))
                  action="{{route('addeditecategory') }}"
                @else
                  action="{{url('add_edit_category/'.$category['id']) }}" 
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
                                    <label for="title">category name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name"
                                    @if(!empty($category['name']))
                                    value="{{$category['name'] }}"
                                        
                                    @else
                                    value="{{old('name') }}"  
                                    @endif>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="name_ar">category name_ar</label>
                                    <input type="text" class="form-control" id="name_ar" name="name_ar" placeholder="Enter category name in arabic"
                                    @if(!empty($category['name_ar']))
                                    value="{{$category['name_ar'] }}"
                                        
                                    @else
                                    value="{{old('name_ar') }}"  
                                    @endif>
                                </div>
    
                            </div>
                        <!-- /.col -->
                       
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
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
            <li class="breadcrumb-item active">Blogs</li>
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
              <h3 class="box-title">Blogs</h3>
              <a href="{{ url('add_edit_blog') }}" class="btn  btn-success" style="max-width:150px;float:right;display-inline-block">Add blog</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="Blogs" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>blog Title</th>
                    <th>blog Title_ar</th>
                    <th>blog description</th>
                    <th>blog description_ar</th>
                    <th>blog Image</th>
                    <th>Category</th>
                    <th>store</th>
                    <th>Status</th>
                    <th>Actions</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($blogs as $blog)
                     
                    <tr>
                      <td>{{$blog->id }}</td>
                      <td>{{$blog->title }}</td>
                      <td>{{$blog->title_ar }}</td>
                      <td>{{$blog->description }}</td>
                      <td>{{$blog->description_ar}}</td>
                      <td>
                        <?php $blog_image_path="public/backend/dist/img/blog_images/".$blog->main_image; ?>
                        @if(!empty($blog->main_image) /*&& file_exists($product_image_path)*/)
                          <img  style="width:100px" src="{{asset('public/backend/dist/img/blog_images/'.$blog->main_image) }}">
                         @else
                          <img  style="width:100px" src="{{asset('public/backend/dist/img/blog_images/no_image.png') }}">
                        @endif 
                      </td>
                      <td>{{$blog->category['name']}}  </td>
                      <td>{{$blog->store['name']}}</td>
                      <td>{{$blog->expires}}</td>
                      <td>
                        @if($blog->status==1)
                          <a class="updateBlogStatus" style="font-size: 20px"  id="blog-{{$blog->id }}" 
                              blog_id="{{$blog['id'] }}" href="javascript:void(0)"><i class="fa fa-toggle-on" aria-hidden="true" status="Active"></i></a>
                        @else
                        <a class="updateBlogStatus"   style="font-size: 20px" id="blog-{{$blog->id }}" 
                          blog_id="{{$blog['id']}}" href="javascript:void(0)"> <i class="fa fa-toggle-off" aria-hidden="true" status="Inactive"></i></a>
                        @endif
                    </td>
                    <td>
                      <a title="Edit blog" style="font-size: 20px" href="{{ url('add_edit_blog',$blog->id)}}"><i class="fa fa-edit"></i></a>
                      &nbsp;&nbsp;
                      <a title="Delete blog" style="font-size: 20px" class="confirmDelete" name="blog" record="blog" recordid="{{$blog->id }}" 
                        <?php /*  href="{{ url('delete-blog',$blog->id)}}" */?>><i class="fa fa-trash"></i></a>
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

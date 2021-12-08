@extends('admin.layout')
@section('contant')
<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">student details</h3>

            @if(session()->has('message')) 
                <div class="alert alert-dismissible" style="color:red">
                    {{session('message')}}
                </dive> 
            @endif   
          </div><!-- /.box-header -->
          <div class="navbar-right" style="margin-right:20px;margin-bottom:20px">
            <a href="{{('add-post')}}" class="btn btn-primary">Add New</a>
        </div> 
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                    <th>page</th>
                    <th>section title</th>
                    <th>post title</th>
                    <th>post description</th>
                    <th>image</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post->page_title}}</td>
                        <td>{{$post->section_title}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td><img src="backend/dist/img/uploads/{{$post->image}}" style="height:50px;width:50"></td>
          
                        <td>
                          <a href="{{route('post-edit')}}/{{$post->id}}" class="btn btn-primary btn-xs" ><i class="fa fa-pencil"></i></a>
                         {{--  <a  class="btn btn-primary btn-xs deletepost" image="{{$post->image}}" post-id="{{$post->id}}"><i class="fa fa-trash"></i></a> --}}
                         <a title="Delete Post"  href="javascript:void(0)" class="confirmDelete btn btn-primary btn-xs " name="post" record="post" recordid="{{$post->id }}"><i class="fa fa-trash"></i></a> 

                        </td>   
                    </tr>  
                   @endforeach  
               
             
              
              </tbody>
              <tfoot>
                <tr>
                  
                </tr>
              </tfoot>
            </table>
            <h2>{{$posts->links()}}</h2>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section><!-- /.content -->

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
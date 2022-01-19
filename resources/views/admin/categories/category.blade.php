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
            <li class="breadcrumb-item active">Categories</li>
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
                <h3 class="card-title">Categories</h3>
                <a href="{{url('add_edit_category')}}" class="btn  btn-primary" 
                   style="max-width:150px;float:right;display-inline-block">Add Categories</a>

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
                      <th>Name</th>
                      <th>Name_ar</th>
                      <th>Action</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($categories as $category)
                    <tr>
                      <td>{{$category['id'] }}</td>
                      <td>{{$category['name'] }}</td>
                      <td>{{$category['name_ar'] }}</td>
                      <td>
                        <a title="Edit Category" style="font-size: 20px" href="{{url('add_edit_category/'.$category['id'])}}" class=" btn-xs"><i class="fa fa-edit"></i></a>
                        &nbsp;&nbsp;
                        <a title="Delete Category"  href="javascript:void(0)" style="font-size: 20px" class="confirmDelete btn-xs" name="category" record="category" recordid="{{$category['id'] }}" ><i class="fa fa-trash"></i></a>
                          &nbsp;&nbsp;
                     @if($category['status']==1)
                       <a class="updateCategoryStatus" style="font-size: 20px" id="category-{{$category['id'] }}" 
                       category_id="{{$category['id'] }}" href="javascript:void(0)" ><i class="fa fa-toggle-on" aria-hidden="true" status="Active"></i></a>
                     @else
                     <a class="updateCategoryStatus"   style="font-size: 20px"  id="category-{{$category['id'] }}" 
                     category_id="{{$category['id'] }}" href="javascript:void(0)" > <i class="fa fa-toggle-off" aria-hidden="true" status="Inactive"></i></a>
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

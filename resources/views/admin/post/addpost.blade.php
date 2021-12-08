@extends('admin.layout')
@section('contant')


<section class="content">
    <div class="row">
      <!-- left column -->
     
      <!-- right column -->
      <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title ">Page Content</h3>
                <div class="box-tools pull-right" >
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div><!-- /.box-tools -->
          </div><!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" action="{{route('post-store',$post->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
            @endif   
            
            @if(session()->has('message')) 
                <div class="alert alert-dismissible" style="color:red">
                    {{session('message')}}
                </dive> 
            @endif       
            <div class="box-body">
                
              <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Title:</label>
                <div class="col-sm-10">
                    <select name="page_title" id="page_title" class="form-control" value="{{$post->page_title}}">
                        <option value="Home"{{$post->page_title == "Home" ? 'selected':''}}>Home</option>
                        <option value="About" {{$post->page_title == "About" ? 'selected':''}}>About</option>
                        <option value="Servies"{{$post->page_title == "Servies" ? 'selected':''}}>Servies</option>
                        <option value="Contact"{{$post->page_title == "Contact" ? 'selected':''}}>Contact</option>
                       
                    </select>          
                </div>
                <span class="hws_error text-right text-danger">
                    {{$errors->first('title')}}
                </span> 
              </div>
            
              <div class="form-group">
                <label for="image" class="col-sm-2 control-label">Section title:</label>
                <div class="col-sm-10">
                    <input type="text" name="section_title" value="{{$post->section_title}}" class="form-control" placeholder="Section Title">
                   
                </div>
              </div>

              <div class="form-group">
                <label for="image" class="col-sm-2 control-label">Post title :</label>
                <div class="col-sm-10">
                    <input type="text" name="title" value="{{$post->title}}" class="form-control" placeholder="Title">
                          
                </div>
              </div>

              <div class="form-group">
                <label for="image" class="col-sm-2 control-label">Post Description :</label>
                <div class="col-sm-10">
                    <textarea name="description" palceholder="description" class="form-control">{{$post->description}}</textarea>
                </div>
              </div>
             
              <div class="form-group">
                <label for="image" class="col-sm-2 control-label">Post Image :</label>
                <div class="col-sm-10">
                    <img src="{{url('backend/dist/img/uploads')}}/{{$post->image}}" style="height:100px;width:100px">
                    <input type="hidden" name="old_image" value="{{$post->image}}">
                    <input type="file" name="image"  id="file" class="form-control">
                   
                </div>
              </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary pull-right" name="save" value="save">save</button>
            </div><!-- /.box-footer -->
          </form>
        </div><!-- /.box -->
        
      </div><!--/.col (right) -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->


  <!-- bad design-->
{{-- <div class="container">
<div class="row">
  <div class="col-md-12" style="margin-top:20px">
    <form action="{{route('post-store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif  
            @if(session()->has('message')) 
                <div class="alert alert-dismissible" style="color:red">
                    {{session('message')}}
                </dive> 
            @endif       
        <div class="box box-warning box-solid">
            <div class="box-header with-border">
                <h3 class="box-title ">Page Content</h3>
                <div class="box-tools pull-right" >
                     <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body ">
                <div class="form-group has-feedback " style="position:relative;">
                    <label for="name" class="hws_form_label">Page:</lable>
                    <select name="page_title" class="form-control" >
                            <option value="home">Home</option>
                            <option value="about">About</option>
                            <option value="services">Servies</option>
                            <option value="contact">Contact</option>
                    </select>          
                    
                </div><!--form-group-->
                <div class="form-group has-feedback " style="position:relative;">
                    <label for="name" class="hws_form_label">Section Title:</lable>
                    <input type="text" name="section_title" value="" class="form-control" placeholder="Section Title">
                   
                </div><!--form-group-->
                <div class="form-group has-feedback " style="position:relative;">
                    <label for="name" class="hws_form_label">Post Title:</lable>
                    <input type="text" name="title" value="" class="form-control" placeholder="Title">
                   
                </div><!--form-group-->
                <div class="form-group has-feedback " style="position:relative;">
                    <label for="name" class="hws_form_label">Post description:</lable>
                    <textarea name="description" value="" class="form-control"></textarea>
                   
                </div><!--form-group-->
                <div class="form-group has-feedback " style="position:relative;">
                    <label for="name" class="hws_form_label">Post description:</lable>
                    <input type="file" name="image" id="file" class="form-control">
                   
                </div><!--form-group-->
        
                    <input type="submit" name="save" value="save" class="btn btn-primary">
            
            </div> 
        </div>       
     
    </form>    
</div>
</div>    
</div>  
 --}}
@endsection
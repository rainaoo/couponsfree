@extends('admin.layout')
@section('contant')
 
<section class="content">
    <div class="row">
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
            <form class="form-horizontal" action="{{route('create-page')}}" method="post" enctype="multipart/form-data">
                @csrf

                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
                @endif        
                <div class="box-body">
                    
                  <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="title"  name="title"  value="ourcompany" readonly="readonly" required >
                    </div>
                    <span class="hws_error text-right text-danger">
                        {{$errors->first('title')}}
                    </span> 
                  </div>
                
                  <div class="form-group">
                    <label for="image" class="col-sm-2 control-label">Banner Image:</label>
                    <div class="col-sm-10">
                        <input type="hidden" name='image[]'  value="banner_image" >
                        <input type="file" name="banner_image" id="file" class="form-control" >
                        @foreach($page as $value)
                            @if($value->section_title == 'banner_image')
                            <img src="{{asset('backend/dist/img/uploads')}}/{{$value->data}}"  style="height:200px;width:200px">
                            @endif
                        @endforeach
                    </div>
                  </div>
    
                  <div class="form-group">
                    <label for="image" class="col-sm-2 control-label">Second Section :</label>
                    <div class="col-sm-10">
                        <input type="hidden" name='txt_name[]'  value="second_title" >
                                @foreach($page as $value)
                                   @if($value->section_title == 'second_title')
                                     <input type="text" name="second_title" value='{{$value->data}}'  class="form-control" required>
                                    @endif
                                @endforeach
                    </div>
                  </div>
    
                  <div class="form-group">
                    <label for="image" class="col-sm-2 control-label">Third Section :</label>
                    
                    <div class="col-sm-10">
                        <label for="image" class="col-sm-2 control-label">Title :</label>
                        <input type="hidden" name='txt_name[]'  value="third_title" >
                        @if($total_row)
                        @foreach($page as $value)
                            @if($value->section_title == 'third_title')
                               <input type="text" name="third_title" value='{{$value->data}}'  class="form-control" required>
                            @endif
                            @endforeach 
                          @else 
                          <input type="text" name="third_title" value=''  class="form-control" required>
                          @endif
                        
                            
                       
                            
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

@endsection
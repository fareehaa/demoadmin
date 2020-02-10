@extends('admin.app')
@section('header')
<link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">
@endsection
@section('content')
@section('content')

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add Post</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
   @include('includes.msg')
  <form role="form" method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
  {{csrf_field()}}
    <div class="box-body">
    <div class="col-lg-6">
    <div class="form-group">
    <label for="">Title</label>
    <input type="text" class="form-control" name="title" placeholder="title">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">subtitle</label>
    <input type="text" class="form-control" name="subtitle" placeholder="sub title">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">slug</label>
      <input type="text" class="form-control" name="slug" placeholder="slug">
      </div>
    </div>
    <div class="col-lg-6">
    <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile" name="img">
    </div>
    <div class="form-group">
      <label>select Tag</label>
      <select class="form-control select2" name="tags[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" >
        
          {{-- <option>Alabama</option> --}}
          @foreach($tags as $tag)
          <option value="{{$tag->id}}">{{$tag->name}} </option>
          @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>select Category</label>
      <select class="form-control select2" name="categories[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" >
        
          {{-- <option>Alabama</option> --}}
          @foreach($cats as $categorie)
          <option value="{{$categorie->id}}">{{$categorie->name}} </option>
          @endforeach
      </select>
    </div>
    <div class="checkbox">
    <label>
    <input type="checkbox" name="status" value="1"> Check me out
    </label>
    </div>
    </div>
    </div>
    <h3 class="box-title">Write your Post</h3>
    <br>
    <textarea name="body" {{-- class="textarea" --}} placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
    <div class="box-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
</form>
@endsection
@section('footer')
<script src="{{asset('admin/plugins/select2/select2.full.min.js')}}"></script>
<script>
    $(document).ready(function()
    {
        $(".select2").select2();
    });
</script>
@endsection
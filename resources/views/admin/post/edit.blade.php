@extends('admin.app')
@section('header')
<link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">
@endsection
@section('content')
@section('content')

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Post</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
   @include('includes.msg')
  <form role="form" method="post" action="{{route('post.update',$posts->id)}}" enctype="multipart/form-data">
  {{csrf_field()}}
  {{method_field('PUT')}}
    <div class="box-body">
    <div class="col-lg-6">
    <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" value="{{$posts->title}} " name="title" >
    </div>
    <div class="form-group">
    <label >subtitle</label>
    <input type="text" class="form-control"  value="{{$posts->subtitle}} " name="subtitle">
    </div>
    <div class="form-group">
      <label >slug</label>
      <input type="text" class="form-control"  value="{{$posts->slug}} " name="slug"> 
      </div>
    </div>
    <div class="col-lg-6">
    <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file"  value=" " name="img">
    </div>
    <div class="form-group">
      <label>select Category</label>
      <select class="form-control select2" name="categories[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" >
        
          {{-- <option>Alabama</option> --}}
          @foreach($categories as $categorie)
          <option value="{{$categorie->id}} "
            @foreach($posts->categories as $postcat)
            @if($postcat->id == $categorie->id)
            selected
            @endif
            @endforeach
            >{{$categorie->name}} </option>
          @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>select tag</label>
      <select class="form-control select2" name="tags[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" >
        
          {{-- <option>Alabama</option> --}}
          @foreach($tags as $tag)
      <option value="{{$tag->id}}"
        @if(($posts)!='')
        @foreach($posts->tag as $PostTag)
        @if($PostTag->id == $tag->id) 
        selected
        @endif
        @endforeach
        @endif
        >{{$tag->name}} </option>
          @endforeach
      </select>
    </div>
    <div class="checkbox">
    <label>
    <input type="checkbox" name="status" value="1" @if(($posts->status)==1) checked @endif> Check me out
    </label>
    </div>
    
    <label for="">BOdy</label>
    <textarea name="body"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
        {{$posts->body}}
    </textarea>
    <div class="box-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a  class="btn btn-danger" href="{{route('post.index')}} ">back</a>
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
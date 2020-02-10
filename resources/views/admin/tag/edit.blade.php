@extends('admin.app')
@section('header')
<link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">
@endsection
@section('content')
 
    <!-- form start -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Tag</h3>
              </div>
              {{-- //@if(count($tags)>0) --}}
              <div class="col-lg-offset-3 col-lg-6">
                @include('includes.msg')
    <form role="form" action=" {{route('tag.update',$tags->id)}} " method="POST" enctype="multipart/form-data">
       {{ csrf_field()}}
       {{ method_field('PUT')}}
        <div class="box-body">
        
        <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" value="{{$tags->name}} " name="name" placeholder="Enter tag">
        </div>
        <div class="form-group">
                <label for="exampleInputPassword1">slug</label>
                <input type="text" class="form-control"value="{{$tags->slug}} " name="slug" placeholder="slug">
         </div>
         <div class="form-group">
            <label>select tag</label>
            <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                @foreach($posts as $post)
                <option>{{$post->title}} </option>
                @endforeach
            </select>
          </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    

    </form>
</div>
</div>
</div>
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
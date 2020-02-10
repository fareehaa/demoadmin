@extends('admin.app')
@section('content')
<a href="{{route('post.create')}}" class="btn btn-defualt">Add post</a>
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Hover Data Table</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>Sr.No</th>
          <th>Title</th>
          <th>Subtitle</th>
          <th>slug</th>
          <th>Image</th>
          <th>body</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @if(count($posts)>0)
            @foreach ($posts as $post)
            <tr>
            <td>{{$loop->index +1 }}</td>
            <td>{{$post->title}}</td>
                <td> {{$post->subtitle}} </td>
                <td> {{$post->slug}} </td>
                <td> {{-- {{$post->img}} --}} image </td>
                <td> {{$post->body}} </td>
                <td><a href="{{route('post.edit',$post->id)}} "><i class="fa fa-edit"></i></a> </td>
                <td>
                <form action=" {{route('post.destroy',$post->id)}} " method="POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input type="hidden" name="id" value="{{$post->id}}">
                <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure,delete this');"><i class="fa fa-trash-o"></i></button>
                
                </form>
                </td>
              </tr>  
            @endforeach
        @endif
        
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

@endsection
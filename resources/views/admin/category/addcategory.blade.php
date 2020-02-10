@extends('admin.app')
@section('content')
 
    <!-- form start -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <div class="box-header with-border">
                <h3 class="box-title">Add Category</h3>
              </div>
              <div class="col-lg-offset-3 col-lg-6">
    <form role="form" action=" {{route('category.store')}} " method="post">
        {{csrf_field()}}
        {{-- {{method_field('POST')}} --}}
        <div class="box-body">
        
        <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter tag">
        </div>
        <div class="form-group">
                <label >slug</label>
                <input type="text" class="form-control" name="slug" placeholder="slug">
         </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    

    </form>
</div>
</div>
</div>
@endsection
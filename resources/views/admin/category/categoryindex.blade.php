@extends('admin.app')
@section('content')
<a href=" {{route('category.create')}} ">add categorie</a>
<br>
<section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Hover Data Table</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
             <tr>
               <th>Sr.no</th>
               <th> Name </th>
               <th>slug </th>
               <th>Edit </th>
               <th> Delete</th>
             </tr>
              </thead>
              <tbody>
                @if(count($categories)>0)
                @foreach($categories as $categorie)
                <tr>
                  <td>{{$loop->index + 1}} </td>
                  <td> {{$categorie->name}} </td>
                  <td>{{$categorie->slug}} </td>
                  <td>
                      <a href=" {{route('category.edit',$categorie->id)}} "><i class="fa fa-fw fa-edit"></i> </a>
                  </td>
                  <td> 
                  <form method="POST" action=" {{route('category.destroy',$categorie->id)}}  ">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                  <input type="hidden" name="id" value="{{$categorie->id}}">
                  
                  <button type="submit" class="btn btn-primary" onclick="return confirm('are you sure,delete this');"><i class="fa fa-trash-o"></i></button>
                </form>
                    
                      
                 </td>
                </tr>
                @endforeach
                @else
                <tr>
                   <th>No data found</th>
                 </tr>
              @endif
              </tbody>
              {{-- <tfoot>
              <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
              </tr>
              </tfoot> --}}
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

       
      </div>
      <!-- /.col -->
    </div>
@endsection
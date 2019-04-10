@extends('Master.master')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Category</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <script src="main.js"></script>
</head>
<body>
  
  @section('content')
  
    @foreach ($data as $row)
  <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{route('category.update',$row->id_category)}}" method="post">
            {{ csrf_field() }}
            {{method_field('PUT')}}
              <div class="box-body">
                <!-- ID Category -->
                <div class="form-group">
                  
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="inputIDCategory" placeholder="ID Category" name="inputIDCategory" value="{{$row->id_category}}">
                  </div>
                </div>

                <!-- Category Kain-->
                <div class="form-group">
                  <label for="inputCategoryKain" class="col-sm-2 control-label">Category Kain</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCategoryKain" placeholder="Category Kain" name="inputCategoryKain" value="{{$row->category_kain}}">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default"><a href="master">Cancel</a></button>
                <button type="submit" class="btn btn-info pull-right">Edit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
        @endforeach
        @endsection
</body>
</html>
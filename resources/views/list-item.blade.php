@extends('Master.master')
<!DOCTYPE html>
<html>
<head>
	<title>List Items</title>
</head>
<body>

	@section('content')
		<br>			
          <div class="col-md-2">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4>Create
              <p>New Data</p></h4>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="create" class="small-box-footer">Click Here!</a>
          </div>
        </div>

        
        <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">List Items Table</h3>
          </div>  
          <form action="{{route('post.cari')}}" method="get" >
      		<div class="input-group">
        		<input type="text" name="q" class="form-control" placeholder="Search...">
          		<span class="input-group-btn">
           			<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
							</span>
  	  		</div>
					
  				</form>

            <div class="box-body">
              <table class="table table-bordered">
				        <tr>
								<th>Id Item</th>
								<th>Id Category</th>
								<th>Nama Item</th>
								<th>Warna</th>
								<th>Stok</th>
                                <th>Harga</th>
                                <th>Satuan</th>
                                <th>Keterangan</th>
                                <th>Action</th>
								</tr>
				
								@foreach($listitem as $item)
        				<tr>
								<td>{{$item->id_item}}</td>
                                <td>{{$item->id_category}}</td>
								<td>{{$item->nama_item}}</td>
								<td>{{$item->warna}}</td>
								<td>{{$item->stok}}</td>
                                <td>{{$item->harga}}</td>
                                <td>{{$item->satuan}}</td>
                                <td>{{$item->keterangan}}</td>
								<td>
								<button type="submit" class="btn btn-default btn-info"><a href="{{route('admin.edit',$item->id_item)}}">Edit</a></button>
										|
                    <form action="{{route('admin.destroy',$item->id_item)}}" method="post">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
									<button type="submit" class="btn btn-default btn-danger" style="color: white">Hapus										</button>
                </form>
									</td>
								</tr>
								@endforeach
								
							</table>
          	</div>			

					<div class="box-footer clearfix">
                    <!--<button type="submit" class="btn btn-default"><a href="{{route('post.insert')}}">Create New Data</button>-->

						
						
            <ul class="pagination pagination-sm no-margin pull-right">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
	        </div>
				</div>
			</div>
		</div>
	@endsection

</body>
</html>




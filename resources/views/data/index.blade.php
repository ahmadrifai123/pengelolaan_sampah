@extends('template.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Tables
			<small>advanced tables</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Tables</a></li>
			<li class="active">Data tables</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">


				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Data Table With Full Features</h3>
						<div class="box-tools pull-right">
							<a href="{{ route('me.create')}}" class="btn btn-primary btn-sm btn-flat">

								Tambah Data
							</a>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Email</th>
									<th>Tanggal</th>
									<th>No Telepon</th>
										<th>Gender</th>
										<th></th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>

									<?php $no=1; ?>
									<?php foreach ($sopir as $dt): ?>



										<tr>
											<td class="text-center"><?php echo $no++ ?></td>
											<td>{{$dt->email}}</td>
											<td>{{$dt->date}}</td>
											<td>{{$dt->tlp}}y</td>
											<td>{{$dt->gender}}</td>
											<td><img style="width: 100px;height: 100px;" src="{{ URL::asset('image/'.$dt->foto) }}"></td>
											<td class="text-center" style="width:150px;">
												<form method="POST" action="" accept-charset="UTF-8">
													<a href="" class="btn btn-primary btn-sm btn-flat" >
														Edit
													</a>
													<input name="_method" type="hidden" value="DELETE">
													<input name="_token" type="hidden" value="{{ csrf_token() }}">
													<input type="submit" class="btn btn-danger btn-sm btn-flat" onclick="return confirm('Anda yakin akan menghapus data ini?');" value="Hapus">

												</form>
											</td> 
										</tr>

									<?php endforeach ?>

								</tbody>
							</table>
								
							</div>
							<!-- /.box-body -->
					</div>
						<!-- /.box -->
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->



		<!-- jQuery 3 -->
		<script src="{{asset('assets/backend/bower_components/jquery/dist/jquery.min.js')}}"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="{{asset('assets/backend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<!-- DataTables -->
		<script src="{{asset('assets/backend/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
		<!-- SlimScroll -->
		<script src="{{asset('assets/backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
		<!-- FastClick -->
		<script src="{{asset('assets/backend/bower_components/fastclick/lib/fastclick.js')}}"></script>
		<!-- AdminLTE App -->
		<script src="{{asset('assets/backend/dist/js/adminlte.min.js')}}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{asset('assets/backend/dist/js/demo.js')}}"></script>
		<!-- page script -->
		<script>
			$(function () {
				$('#example1').DataTable()
				$('#example2').DataTable({
					'paging'      : true,
					'lengthChange': false,
					'searching'   : false,
					'ordering'    : true,
					'info'        : true,
					'autoWidth'   : false
				})
			})
		</script>
	

	@endsection
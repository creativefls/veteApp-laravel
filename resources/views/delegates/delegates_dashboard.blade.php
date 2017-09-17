@extends('layouts.master')

@section('title','Delegates')

@section('content')
  <div class="container-fluid">
	<div class="row">

		<!-- contoh kelas penuh -->
		<div class="col-lg-4 col-md-4 col-sm-6">
			<div class="card">
				<div class="header">
					<h5 class="title">Apa yang harus Aku lakukan ?</h5>
				</div>
				<div class="content">
					<ul class="list-unstyled team-members">
						<li>
							<div class="row">
								<div class="col-xs-3">
									<div class="avatar">
										<img src="https://user-images.githubusercontent.com/10141928/29959371-2acadc44-8f21-11e7-9f87-659f1a6f8387.png" alt="Circle Image" class="img-circle img-no-padding img-responsive" alt="Pilih Kelas Workshop">
									</div>
								</div>
								<div class="col-xs-6">
									Pilih Workshop
									<br>
									<!-- cek apakah sudah memilih kelas workshop -->
                    <span class="text-success"><small><i class="ti-check-box"></i> Sudah Dilakukan</small></span>'
								</div>

								<div class="col-xs-3 text-right">
									<a href="{{ url('/') }}" class="btn btn-sm btn-success btn-icon"><i class="ti-eye"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-xs-3">
									<div class="avatar">
										<img src="https://user-images.githubusercontent.com/10141928/29959370-2ac6cfaa-8f21-11e7-908a-f400599369fe.png" alt="Circle Image" class="img-circle img-no-padding img-responsive" alt="Pilih Komunitas Favorit">
									</div>
								</div>
								<div class="col-xs-6">
									Vote Komunitas
									<br>
                    <span class="text-danger"><small><i class="ti-na"></i> Belum Dilakukan</small></span>
								</div>

								<div class="col-xs-3 text-right">
									<a href="{{ url('/') }}" class="btn btn-sm btn-success btn-icon"><i class="ti-eye"></i></a>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-xs-3">
									<div class="avatar">
										<img src="https://user-images.githubusercontent.com/10141928/30063933-798eca0a-927a-11e7-8fe6-8cea0eea64cc.png" alt="Circle Image" class="img-circle img-no-padding img-responsive" alt="Pilih Makanan">
									</div>
								</div>
								<div class="col-xs-6">
									Pilih Makanan
									<br>
                  <span class="text-danger"><small><i class="ti-na"></i> Belum Dilakukan</small></span>

								</div>

								<div class="col-xs-3 text-right">
									<a href="{{ url('/') }}" class="btn btn-sm btn-success btn-icon"><i class="ti-eye"></i></a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@extends('layouts.master')

@section('title','Rangers')

@section('content')
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="card">
              <!-- kelas workshop -->
                <div class="content">
                    <div class="row">
                        <div class="col-xs-5">
                            <img class="img-voting" src="https://user-images.githubusercontent.com/10141928/29959371-2acadc44-8f21-11e7-9f87-659f1a6f8387.png" alt="Kabar Workshop">
                        </div>
                        <div class="col-xs-7">
                            <div class="numbers">
                                0
                                <p>Delegates</p>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <hr />
                        <div class="stats">
                            <i class="ti-reload"></i> sudah memilih <strong>workshop</strong>
                            <b>(- 240)</b>
                        </div>
                    </div>
                </div>
                <!-- end of kelas workshop -->
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="card">
            <!-- voting -->
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <img class="img-voting" src="https://user-images.githubusercontent.com/10141928/29959370-2ac6cfaa-8f21-11e7-908a-f400599369fe.png" alt="Kabar Komunitas">
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            0
                            <p>Delegates</p>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-reload"></i> sudah melakukan <strong>voting</strong>
                        <b>(- 240)</b>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-6">
          <div class="card">
            <!-- voting -->
            <div class="content">
                <div class="row">
                    <div class="col-xs-5">
                        <img class="img-voting" src="https://user-images.githubusercontent.com/10141928/30063933-798eca0a-927a-11e7-8fe6-8cea0eea64cc.png" alt="Kabar Makan">
                    </div>
                    <div class="col-xs-7">
                        <div class="numbers">
                            0
                            <p>Delegates</p>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="ti-reload"></i> sudah memilih <strong>menu makan</strong> (<b>- 240</b>)
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection

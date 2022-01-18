@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                            <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                              <h5 class="card-title">Topi Sekolah</h5>
                              <p class="card-text">Harga : Rp10.000</p>
                              <a href="#" class="btn btn-primary">Beli Sekarang</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUjb6OCxOI5vZFLk0CZeXRVuC63ntSMZCYLg&usqp=CAU=" class="card-img-top" alt="...">
                                  <h5 class="card-title">Gesper Sekolah</h5>
                                  <p class="card-text">Harga : Rp8.000</p>
                                  <a href="#" class="btn btn-primary">Beli Sekarang</a>
                                </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUjb6OCxOI5vZFLk0CZeXRVuC63ntSMZCYLg&usqp=CAU=" class="card-img-top" alt="...">
                                  <h5 class="card-title">Gesper Sekolah</h5>
                                  <p class="card-text">Harga : Rp8.000</p>
                                  <a href="#" class="btn btn-primary">Beli Sekarang</a>
                                </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUjb6OCxOI5vZFLk0CZeXRVuC63ntSMZCYLg&usqp=CAU=" class="card-img-top" alt="...">
                                  <h5 class="card-title">Gesper Sekolah</h5>
                                  <p class="card-text">Harga : Rp8.000</p>
                                  <a href="#" class="btn btn-primary">Beli Sekarang</a>
                                </div>
                          </div>
                        </div>
                        <div class="col-sm-3" style="margin-top: 10px">
                            <div class="card">
                                <div class="card-body">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUjb6OCxOI5vZFLk0CZeXRVuC63ntSMZCYLg&usqp=CAU=" class="card-img-top" alt="...">
                                  <h5 class="card-title">Gesper Sekolah</h5>
                                  <p class="card-text">Harga : Rp8.000</p>
                                  <a href="#" class="btn btn-primary">Beli Sekarang</a>
                                </div>
                          </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

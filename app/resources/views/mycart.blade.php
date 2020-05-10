@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">

                            <div class="card-body">
                                <h1 class="text-center font-weight-bold" style="color:#555555;  font-size:1.2em; padding:24px 0px;">
                                    {{ Auth::user()->name }}さんのカートの中身</h1>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    @foreach($carts as $cart)
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">ユーザーID</label>

                                        <div class="col-md-6">
                                            {{$cart->user_id}}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">ストックID</label>

                                        <div class="col-md-6">
                                            {{$cart->stock_id}}

                                        </div>
                                    </div>

                                    <div class="form-group row">

                                    </div>

                                    <div class="form-group row mb-0">

                                    </div>
                                </form>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
@endsection

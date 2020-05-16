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

                                    @foreach($carts as $cart)
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">商品名</label>

                                        <div class="col-md-6">
                                            {{$cart['stock']->name}}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">個数</label>

                                        <div class="col-md-6">
                                            {{$cart->number}}

                                        </div>
                                    </div>
                                    <div class="form-group row col-md-6">
                                        <form action="/delete" method="post">
                                            @csrf
                                            <input type="hidden" name="stock_id" value="{{$cart['stock']->id}}">
                                            <div class="col-md-6">
                                            <input type="submit" value="削除">
                                            </div>
                                        </form>
                                    </div>

                                @endforeach
                                <div class="form-group row col-md-6">
                                    <form action="/preview" method="post" name="preview">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{$cart->user_id}}">
                                        <div class="col-md-6">
                                            <input type="submit" value="注文確認">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="">
                <div class="mx-auto" style="max-width:1200px">
                    <h1 class="text-center font-weight-bold" style="color:#555555;  font-size:1.2em; padding:24px 0px;">
                        {{ Auth::user()->name }}詳細</h1>

                    <div class="">
                        <div class="d-flex flex-row flex-wrap">

                            <div class="col-xs-6 col-sm-4 col-md-4 ">
                                <div class="mycart_box">
                                    {{$stock[0]->name}} <br>
                                    {{$stock[0]->fee}}円<br>
                                    <img src="/image/{{$stock[0]->filename}}" alt="" class="incart" >
                                    <br>
                                    {{$stock[0]->content}} <br>
                                    {!! Form::open(['method'=>'post', 'url'=>'/items']) !!}
                                    @csrf
                                    <input type="hidden" name="stock_id" value="{{ $stock[0]->id }}">
                                    {!! Form::select('number',config('shop.number'),'',['class'=>'form-control']) !!}

                                    <input type="submit" value="カートに入れる">
                                    {{Form::Close()}}
                                </div>
                            </div>
                                <a href="/">商品一覧へ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

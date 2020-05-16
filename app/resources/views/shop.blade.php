@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="">
            <div class="mx-auto" style="max-width:1200px">
                <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
                <div class="d-flex flex-row flex-wrap">
                    @foreach($stocks as $stock)
                        <div class="col-xs-6 col-sm-4 col-md-4 ">
                            <div class="mycart_box">
                                {{$stock->name}} <br>
                                {{$stock->fee}}円<br>
                                <img src="/image/{{$stock->filename}}" alt="" class="incart"><br>
                                {{$stock->content}}<br>
                                    {!! Form::open(['method'=>'get', 'url'=>'/items']) !!}
                                    @csrf
                                    <input type="hidden" name="stock_id" value="{{ $stock->id }}">
                                    <input type="submit" value="詳細">
                                    {{Form::Close()}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

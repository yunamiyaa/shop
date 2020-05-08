@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="">
            <div class="mx-auto" style="max-width:1200px">
                <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
{{--                <div class="">--}}
{{--                    @foreach($stocks as $stock)--}}
{{--                        {{$stock->name}} <br>--}}
{{--                        {{$stock->fee}}円<br>--}}
{{--                        <img src="/image/flower.svg" alt="" class="incart" >--}}
{{--                        <br>--}}
{{--                        {{$stock->content}} <br>--}}
{{--                        <form action="mycart" method="post">--}}
{{--                            @csrf--}}
{{--                            <input type="hidden" name="stock_id" value="{{ $stock->id }}">--}}
{{--                            <input type="submit" value="カートに入れる">--}}
{{--                        </form>--}}
{{--                    @endforeach--}}
{{--                    {{$stocks->links()}}--}}
{{--                </div>--}}
                <div class="d-flex flex-row flex-wrap">

                    @foreach($stocks as $stock)


                        <div class="col-xs-6 col-sm-4 col-md-4 ">
                            <div class="mycart_box">
                                {{$stock->name}} <br>
                                {{$stock->fee}}円<br>
                                <img src="/image/{{$stock->imgpath}}" alt="" class="incart" >
                                <br>
                                {{$stock->content}} <br>

                                {{-- 追加 --}}

{{--                                <form action="cart" method="post">--}}
                                    {!! Form::open(['method'=>'post', 'url'=>'/cart']) !!}
                                    @csrf
                                    <input type="hidden" name="stock_id" value="{{ $stock->id }}">
                                    {!! Form::select('number',config('shop.number'),'',['class'=>'form-control']) !!}

                                    <input type="submit" value="カートに入れる">
                                {{Form::Close()}}
{{--                                </form>--}}

                                {{-- ここまで --}}
                            </div>

                            {{-- 追加 --}}

                            {{-- ここまで --}}

                        </div>
                    @endforeach
                        <a class="text-center" href="/">商品一覧へ</a>
                </div>
{{--                <div class="text-center" style="width: 200px;margin: 20px auto;">--}}
{{--                    {{  $stocks->links()}}--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection

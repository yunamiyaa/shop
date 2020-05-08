@extends('layouts.app')

@section('content')
{{--    <h1>top</h1>--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="">--}}
{{--            <div class="mx-auto" style="max-width:1200px">--}}
{{--                <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>--}}
{{--                <div class="">--}}
{{--                    <div class="d-flex flex-row flex-wrap">--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<div class="mainimg">
    <img src="image/flower.svg" alt="サブページ画像">
</div>
<main>
    <article>
        <div class="container">
            <div class="row">
                <div class="col span-12">
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="index.html">ホーム</a> > サブページ</li>
                        </ul>
                    </div>

                    <h2 class="underline">見出し</h2>
                    <p>タイトルなどの見出しに使用します。h1からh6までの大きさがあります。</p>
                    <h1>h1　見出し</h1>
                    <h2>h2　見出し</h2>
                    <h3>h3　見出し</h3>
                    <h4>h4　見出し</h4>
                    <h5>h5　見出し</h5>
                    <h6>h6　見出し</h6>

                    <h2 class="underline">カラム</h2>
                    <p>シンプルなカラムのみ制作しています。横幅が12の数字になるように、レイアウトを組みます。</p>
                    <div class="row">
                        <div style="background-color: #F1F1F1; padding:1rem 0; margin-bottom: 1em;" class="col span-1">カラム1</div>
                        <div style="background-color: #F1F1F1; padding:1rem 0; margin-bottom: 1em;" class="col span-11">カラム11</div>
                    </div>
                    <div class="row">
                        <div style="background-color: #F1F1F1; padding:1rem 0; margin-bottom: 1em;"  class="col span-2">カラム2</div>
                        <div style="background-color: #F1F1F1; padding:1rem 0; margin-bottom: 1em;" class="col span-10">カラム10</div>
                    </div>
                    <div class="row">
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;"  class="col span-3">カラム3</div>
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;" class="col span-9">カラム9</div>
                    </div>
                    <div class="row">
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;"  class="col span-4">カラム4</div>
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;" class="col span-8">カラム8</div>
                    </div>
                    <div class="row">
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;"  class="col span-5">カラム5</div>
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;" class="col span-7">カラム7</div>
                    </div>
                    <div class="row">
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;"  class="col span-6">カラム6</div>
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;" class="col span-6">カラム6</div>
                    </div>
                    <div class="row">
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;"  class="col span-7">カラム7</div>
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;" class="col span-5">カラム5</div>
                    </div>
                    <div class="row">
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;"  class="col span-8">カラム8</div>
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;" class="col span-4">カラム4</div>
                    </div>
                    <div class="row">
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;"  class="col span-9">カラム9</div>
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;" class="col span-3">カラム3</div>
                    </div>
                    <div class="row">
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;"  class="col span-10">カラム10</div>
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;" class="col span-2">カラム2</div>
                    </div>
                    <div class="row">
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;"  class="col span-11">カラム11</div>
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;" class="col span-1">カラム1</div>
                    </div>
                    <div class="row">
                        <div style="background-color: #F1F1F1; padding:1rem 0;  margin-bottom: 1rem;"  class="col span-12">カラム12</div>
                    </div>

                    <h2 class="underline">ボタン</h2>
                    <p><a href="" class="button">ボタン</a><a href="" class="button">ボタン</a><a href="" class="button">ボタン</a><a href="" class="button">ボタン</a><a href="" class="button">ボタン</a><a href="" class="button">ボタン</a><a href="" class="button">ボタン</a><a href="" class="button">ボタン</a><a href="" class="button">ボタン</a><a href="" class="button">ボタン</a></p>

                    <h2 class="underline">フォーム</h2>
                    <form action="" method="post">
                        <p>
                            <label for="name">お名前</label>
                            <input class="full-width" type="text" id="name" name="name">
                        </p>
                        <p>
                            <label for="email">メールアドレス</label>
                            <input class="full-width" type="email" id="email" name="email">
                        </p>
                        <p>
                            <label for="message">お問い合わせ内容</label>
                            <textarea class="full-width" id="textarea" name="textarea"></textarea>
                        </p>
                        <p>
                            <input class="button" type="submit" value="送信">
                        </p>
                    </form>

                    <h2 class="underline">リスト</h2>
                    <ul>
                        <li>リストスタイル</li>
                        <li>リストスタイル</li>
                        <li>リストスタイル</li>
                    </ul>
                    <ol>
                        <li>番号付きのリスト</li>
                        <li>番号付きのリスト</li>
                        <li>番号付きのリスト</li>
                    </ol>

                    <h2 class="underline">テーブル</h2>
                    <table class="full-width">
                        <thead>
                        <tr>
                            <th>タイトル</th>
                            <th>タイトル</th>
                            <th>タイトル</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>文章</td>
                            <td>文章</td>
                            <td>文章</td>
                        </tr>
                        <tr>
                            <td>文章</td>
                            <td>文章</td>
                            <td>文章</td>
                        </tr>
                        <tr>
                            <td>文章</td>
                            <td>文章</td>
                            <td>文章</td>
                        </tr>
                        </tbody>
                    </table>

                    <h2 class="underline">コード</h2>
                    <pre><code>.test-class {
background-color: F1F1F1;
font-size: 16px;}</code></pre>

                </div>
            </div>
        </div>
    </article>
@endsection

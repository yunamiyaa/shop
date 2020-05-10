<?php

namespace App\Http\Controllers;

use App\EloquentModels\Stocks;
use App\EloquentModels\Carts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stocks::all(); //Eloquantで検索
//        $stocks = Stocks::Paginate(2);
//        dd($stocks);
        $number = Config('shop,number');
        return view('shop')->with([
            'stocks' => $stocks,
            'number' => $number
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function show(Request $request)
    {
//        dd($request);
        $stock_id = $request->stock_id;
//        $stockId = $request->all()->;
        $stock = Stocks::where('id', $stock_id)->get();
//        dd($stock[0]->name);
        return view('items')->with([
            'stock' => $stock
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);

        $user_id = Auth::id();
        $stock_id=$request->stock_id;

        $cart_add_info=Carts::firstOrCreate(['stock_id' => $stock_id,'user_id' => $user_id,'number' => $request->number]);

        if($cart_add_info->wasRecentlyCreated){
            $message = 'カートに追加しました';
        }
        else{
            $message = 'カートに登録済みです';
        }

        $carts = Carts::where('user_id',$user_id)->get();

        return view('mycart')
            ->with([
                'carts' => $carts,
                'message' => $message
                ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
//        dd($id);
        $user_id = Auth::id();
        $carts = Carts::where('user_id', $user_id)->get();
        return view('mycart')->with([
            'carts' => $carts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

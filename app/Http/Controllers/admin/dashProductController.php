<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\admin\HelperController;
use App\Http\Controllers\Controller;
use App\Models\admin\Product;
use Illuminate\Http\Request;


class dashProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Product::exists()) {
        $pruducts = new Product;
        $allpruduct = $pruducts::paginate(10);
        return view("dashboard.product.index",compact('allpruduct'));
        }else{
            return view("dashboard.product.index");

        }
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.product.add");
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $helper      = new HelperController;
        $address     ="uploads/products/";
        if($request->file('umainImg') != null){
            $mainImg     = $request->file('umainImg');
            $extension   = $mainImg->getClientOriginalExtension();
            $filename    = $helper->imagefilename().'.'.$extension;
            $mainImg->move($address, $filename);
            $DatamainImg     = $address.$filename;
        }else{
            $mainImg     = "";
        }

        if($request->file('uSquareImg') != null){
            $SquareImg   = $request->file('uSquareImg');
            $extension   = $SquareImg->getClientOriginalExtension();
            $filename    = $helper->imagefilename().'.'.$extension;
            $SquareImg->move($address, $filename);
            $DataSquareImg   = $address.$filename;
        }else{
            $SquareImg   = "";
        }

        if($request->file('ulargeImg') != null){
            $largeImg    = $request->file('ulargeImg');
            $extension   = $largeImg->getClientOriginalExtension();
            $filename    = $helper->imagefilename().'.'.$extension;
            $largeImg->move($address, $filename);
            $DatalargeImg     = $address.$filename;
        }else{
            $largeImg = "";
        }

        $newReq  = $request;
        unset($newReq["umainImg"]);
        unset($newReq["uSquareImg"]);
        unset($newReq["ulargeImg"]);
        $newReq["mainImg"]=$DatamainImg;
        $newReq["SquareImg"]=$DataSquareImg;
        $newReq["largeImg"]=$DatalargeImg;
        $theproduct = new Product;
        if($theproduct::create($newReq->all())){
            return redirect()->route('products.index',array("message"=>"ثبت شد"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
       
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}

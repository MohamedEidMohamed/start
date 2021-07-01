<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Http\Requests\Offerrequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


class CrudController extends Controller
{
    public function insertmethod(){
        //Offer::create(['name'=>'tometo','price'=>'50','quality'=>'20']);
    }

    public function show_offer(){
        //Offer::create(['name'=>'carrot','price'=>'505','quality'=>'20']);
        return view('offers.create');
    }

    public function insert_offer(Offerrequest $request){





    //    $validator=Validator::make($request->all(),$rules, $messages);

    //    if ($validator->fails()){
    //        return redirect()->back()->withErrors($validator)->withInputs($request->all());
    //    }

        Offer::create([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'price'=>$request->price,
            'quality'=>$request->quality
        ]);


        return redirect()->back()->with(['success'=>'stored']);

    }

    public function show_all(){

        $offers=Offer::select(
            'id',
            'name_'.LaravelLocalization::getCurrentLocale().' as name',
            'price',
            'quality'
        )->get();
        return view('offers.show_all',compact('offers'));
    }

}

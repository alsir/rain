<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Http\Requests\StoreAdRequest;
use App\Http\Requests\UpdateAdRequest;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::orderBy('id','Asc')->get();
        return view('admin.ad.index')->with('ads', $ads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdRequest $request)
    {
        $ad = new ad();
        $ad->ad_1_555 = $request->ad_1_555;
        $ad->ad_2_555 = $request->ad_2_555;
        $ad->ad_1_350 = $request->ad_1_350;
        $ad->ad_2_350 = $request->ad_2_350;
        $ad->ad_3_350 = $request->ad_3_350;
        $ad->ad_1_1110 = $request->ad_1_1110;
        $ad ->save();
        toastr()->success('تم حفظ بيانات العميل بنجاح !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show(Ad $ad)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $ad = ad::find($id);
        return view('admin.ad.edit')->with('ad', $ad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdRequest  $request
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdRequest $request, $id)
    {
        $ad=ad::find($id);
        $ad->ad_1_555 = $request->ad_1_555;
        $ad->ad_2_555 = $request->ad_2_555;
        $ad->ad_1_350 = $request->ad_1_350;
        $ad->ad_2_350 = $request->ad_2_350;
        $ad->ad_3_350 = $request->ad_3_350;
        $ad->ad_1_1110 = $request->ad_1_1110;
        $ad ->save();
        toastr()->success('تم حفظ بيانات العميل بنجاح !!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad =  ad::find($id)->delete();
            toastr()->success('تم حذف بيانات العميل بنجاح !!');
            return back();
    }
}

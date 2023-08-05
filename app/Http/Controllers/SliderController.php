<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = slider::orderBy('id','Asc')->get();
        return view('admin.slider.index')->with('sliders', $sliders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSliderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSliderRequest $request)
    {
        $slider = new slider();
        $slider->ad_1_825 = $request->ad_1_825;
        $slider->heading_1 = $request->heading_1;
        $slider->sub_heading_1 = $request->sub_heading_1;
        $slider->description_1 = $request->description_1;
        $slider->ad_2_825 = $request->ad_2_825;
        $slider->heading_2 = $request->heading_2;
        $slider->sub_heading_2 = $request->sub_heading_2;
        $slider->description_2 = $request->description_2;
        $slider->ad_3_825 = $request->ad_3_825;
        $slider->heading_3 = $request->heading_3;
        $slider->sub_heading_3 = $request->sub_heading_3;
        $slider->description_3 = $request->description_3;
        $slider ->save();
        toastr()->success('تم حفظ بيانات العميل بنجاح !!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $slider = slider::find($id);
        return view('admin.slider.edit')->with('slider', $slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSliderRequest  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSliderRequest $request,  $id)
    {
        $slider=slider::find($id);
        $slider->slider_1_555 = $request->slider_1_555;
        $slider->slider_2_555 = $request->slider_2_555;
        $slider->slider_1_350 = $request->slider_1_350;
        $slider->slider_2_350 = $request->slider_2_350;
        $slider->slider_3_350 = $request->slider_3_350;
        $slider->slider_1_1110 = $request->slider_1_1110;
        $slider ->save();
        toastr()->success('تم حفظ بيانات العميل بنجاح !!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $slider =  slider::find($id)->delete();
            toastr()->success('تم حذف بيانات العميل بنجاح !!');
            return back();
    }
}

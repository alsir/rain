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
        $slider->heading_1 = $request->heading_1;
        $slider->sub_heading_1 = $request->sub_heading_1;
        $slider->description_1 = $request->description_1;
        $slider->heading_2 = $request->heading_2;
        $slider->sub_heading_2 = $request->sub_heading_2;
        $slider->description_2 = $request->description_2;
        $slider->heading_3 = $request->heading_3;
        $slider->sub_heading_3 = $request->sub_heading_3;
        $slider->description_3 = $request->description_3;
        if ($request->hasFile('ad_1_825')) {
            if ($request->file('ad_1_825')->isValid()) {
                $path = $request->file('ad_1_825')->store('users','public_file');
                $slider->ad_1_825 = 'files/'.$path;
            }
        }
        if ($request->hasFile('ad_2_825')) {
            if ($request->file('ad_2_825')->isValid()) {
                $path = $request->file('ad_2_825')->store('users','public_file');
                $slider->ad_2_825 = 'files/'.$path;
            }
        }
        if ($request->hasFile('ad_3_825')) {
            if ($request->file('ad_3_825')->isValid()) {
                $path = $request->file('ad_3_825')->store('users','public_file');
                $slider->ad_3_825 = 'files/'.$path;
            }
        }
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
        $slider->heading_1 = $request->heading_1;
        $slider->sub_heading_1 = $request->sub_heading_1;
        $slider->description_1 = $request->description_1;
        $slider->heading_2 = $request->heading_2;
        $slider->sub_heading_2 = $request->sub_heading_2;
        $slider->description_2 = $request->description_2;
        $slider->heading_3 = $request->heading_3;
        $slider->sub_heading_3 = $request->sub_heading_3;
        $slider->description_3 = $request->description_3;
        if ($request->hasFile('ad_1_825')) {
            if ($request->file('ad_1_825')->isValid()) {
                $path = $request->file('ad_1_825')->store('users','public_file');
                $slider->ad_1_825 = 'files/'.$path;
            }
        }
        if ($request->hasFile('ad_2_825')) {
            if ($request->file('ad_2_825')->isValid()) {
                $path = $request->file('ad_2_825')->store('users','public_file');
                $slider->ad_2_825 = 'files/'.$path;
            }
        }
        if ($request->hasFile('ad_3_825')) {
            if ($request->file('ad_3_825')->isValid()) {
                $path = $request->file('ad_3_825')->store('users','public_file');
                $slider->ad_3_825 = 'files/'.$path;
            }
        }
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Slider;


class SlidersController extends Controller
{
    public function addsliders(){
        return view('admin.addsliders');
    }

    public function sliders(){
        $sliders = Slider::All();
        return view('admin.sliders')->with('sliders', $sliders);
    }

    public function saveslider(Request $request){
        $this->validate($request, ['description1' => 'required',
                                    'description2' => 'required',
                                    'slider_image' => 'image|nullable|max:1999|required']);

        $fileNameWithExt = $request->file('slider_image')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('slider_image')->getClientOriginalExtension();
        $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

        $path = $request->file('slider_image')->storeAs('public/slider_images', $fileNameToStore);
        

        $slider = new Slider();

        $slider->description1 = $request->input('description1');
        $slider->description2 = $request->input('description2');
        $slider->slider_image = $fileNameToStore;
        $slider->status = 1;
        $slider->save();

        return back()->with('status', 'The slider has been saved successfully.');
    }

    public function edit_slider($id){
        $slider = Slider::find($id);
        return view('admin.edit_slider')->with('slider', $slider);
    }

    public function updateslider(Request $request){
        $this->validate($request, ['description1' => 'required',
                                    'description2' => 'required',
                                    'slider_image' => 'image|nullable|max:1999']);

        $slider = slider::find($request->input('id'));

        $slider->description1 = $request->input('description1');
        $slider->description2 = $request->input('description2');
        $slider->slider_image = $request->input('slider_image');

        if ($request->hasFile('slider_image')) {
            $fileNameWithExt = $request->file('slider_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('slider_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;

            $path = $request->file('slider_image')->storeAs('public/slider_images', $fileNameToStore);

            if ($slider->slider_image != 'noimage.jpg') {
                Storage::delete('public/slider_images/' . $slider->slider_image);
            }

            $slider->slider_image = $fileNameToStore;
        }

        $slider->update();

        return redirect('/sliders')->with('status', 'The slider has been updated successfully.');
    }

    public function delete_slider($id){
        $slider = Slider::find($id);
        
        Storage::delete('public/slider_images/' . $slider->slider_image);

        $slider->delete();

        return back()->with('status', 'The slider has been deleted successfully.');
    }

    public function activate_slider($id){
        $slider = Slider::find($id);
        $slider->status = 1;
        $slider->update();

        return back()->with('status', 'The slider has been activated successfully.');

    }

    public function unactivate_slider($id){
        $slider = Slider::find($id);
        $slider->status = 0;
        $slider->update();

        return back()->with('status', 'The slider has been unactivated successfully.');

    }
}

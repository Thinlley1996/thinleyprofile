<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.view-news')->with('news',$news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'    =>  'required',
            'image' => 'required',
            'image__two' => 'nullable',
            'image__two.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);
         $photo = $request->file('image');
        $new_photo =  rand() . '.' . $photo->getClientOriginalExtension();
        $photo->move(('assets/img/news'), $new_photo);
       
        $photo_two = $request->file('image_two');
        $new_photo_two =  rand() . '.' . $photo_two->getClientOriginalExtension(); 
        $photo_two->move(('assets/img/news'), $new_photo_two);  
        $form_data = array(
            'title' => $request->title,
            'subtitle'=> $request->subtitle,
            'type'=> $request->type,
            'date'=> $request->date,
            'short_dep'=>$request->short_dep,
            'long_dep' => $request->long_dep,
            'image_two' => $new_photo_two,
            'image' => $new_photo,
        );
        News::create($form_data);
        return redirect('news')->with('status','New News successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = News::findOrFail($id);
        return view('admin.edit-news',compact('data','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = News::findOrFail($id);
       return view('admin.edit-news',compact('data','id'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = News::findOrFail($id);

        if ($request->hasFile('image')){
            $image_name = ('assets/img/news').'/'.$data->image;
            if (News::exists($image_name)) {
                News::delete($image_name);
            }
            $bannerImage = $request->file('image');
            $imgName = $bannerImage->getClientOriginalName();
            $destinationPath = ('assets/img/news');
            $bannerImage->move($destinationPath, $imgName);
          } else {
            $imgName = $data->image;
          }
          if ($request->hasFile('image_two')){
            $image_two = ('assets/img/news').'/'.$data->image_two;
            if (News::exists($image_two)) {
                News::unlink($image_two);
            }
            $bannerImage = $request->file('image_two');
            $imgTwo = $bannerImage->getClientOriginalName();
            $destinationPath = ('assets/img/news');
            $bannerImage->move($destinationPath, $imgTwo);
          } else {
            $imgTwo = $data->image_two;
          }
        $form_data = array(
            'title' => $request->title,
            'subtitle'=> $request->subtitle,
            'type'=> $request->type,
            'date'=> $request->date,
            'short_dep'=>$request->short_dep,
            'long_dep' => $request->long_dep,
            'image_two' =>  $imgTwo,
            'image' => $imgName
        );
        News::whereId($id)->update($form_data);
        return redirect('news')->with('status','News successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = News::findOrFail($id); 
        $photo__two = ('assets/img/news').'/'.$data->image_two;
        unlink($photo__two);
        $image_path = ('assets/img/news').'/'.$data->image;
         unlink($image_path);
        $data->delete();
        return redirect('news')->with('danger', 'News successfully deleted');
    }
}

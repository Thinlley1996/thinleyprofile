<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.view-project')->with('projects',$projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-project');
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
        ]);
         $photo = $request->file('image');
        $new_photo = rand() . '.' . $photo->getClientOriginalName();
        $photo->move(('assets/img/project'), $new_photo);

        $photo__two = $request->file('image_two');
        $new_photo_two = $photo__two->getClientOriginalName();
        $photo__two->move(('assets/img/project'), $new_photo_two);

        $form_data = array(
            'title' => $request->title,
            'subtitle'=> $request->subtitle,
            'short_dep'=>$request->short_dep,
            'long_dep' => $request->long_dep,
            'image_two' => $new_photo_two,
            'image' => $new_photo
        );
        Project::create($form_data);
        return redirect('project')->with('status','New project successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Project::findOrFail($id);
       return view('admin.edit-project',compact('data','id'));
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
        $image_name = $request->hidden_image;
        $photo = $request->file('image');
        $photo_name = $request->hidden_image_two;
        $image_two = $request->file('image_two');
        $data = Project::findOrFail($id);
        if( $request->hasFile('image') || $request->hasFile('image_two'))
        {
            $image_name = ('asssets/img/image').'/'.$data->image;
            $photo_name = ('asssets/img/image').'/'.$data->image_two;
            if (Project::exists( $image_name , $photo_name)) { // unlink or remove previous image from folder
                unlink( $image_name);
                unlink( $photo_name);
            }
           
        }
        if($photo != '' || $image_two != '' )
        {
            $request->validate([
                'title'    =>  'required',
            ]);

            $image_name = rand() . '.' . $photo->getClientOriginalName();
            $photo->move(('assets/img/project'), $image_name);
            
            $photo_name = rand() . '.' . $image_two->getClientOriginalName();
            $image_two->move(('assets/img/project'),  $photo_name);
        }
        else
        {
            $request->validate([
                'title'    =>  'required',
            ]);
        }
        $form_data = array(
            'title' => $request->title,
            'subtitle'=> $request->subtitle,
            'short_dep'=>$request->short_dep,
            'long_dep' => $request->long_dep,
            'image_two' => $photo_name,
            'image' => $image_name
        );
        Project::whereId($id)->update($form_data);
        return redirect('project')->with('status','Project successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Project::findOrFail($id); 
        $photo__two = ('assets/img/project').'/'.$data->image_two;
         unlink($photo__two);
        $image_path = ('assets/img/project').'/'.$data->image;
         unlink($image_path);
        $data->delete();
        return redirect('project')->with('danger', 'Project successfully deleted');
    }
}

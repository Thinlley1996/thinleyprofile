<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = Team::all();
       return view('admin.show-team')->with('data',$data);
       

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.create-team');
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
            'name'    =>  'required',
            'job'    =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);
        $photo = $request->file('image');
        $new_photo = rand() . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path('image'), $new_photo);

        $form_data = array(
            'name' => $request->name,
            'job' => $request->job,
            'description' => $request->description,
            'experience' => $request->experience,
            'image' => $new_photo
        );
        Team::create($form_data);
        return redirect('ourteam')->with('status','New member successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
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
        $data = Team::findOrFail($id);
       return view('admin.edit-team',compact('data','id'));
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
        $data = Team::findOrFail($id);
        if( $request->hasFile('image'))
        {
            $image_path = ('asset/img/team').'/'.$data->image;
            if (Team::exists( $image_path)) { // unlink or remove previous image from folder
                unlink( $image_path);
            }
           
        }
        if($photo != '')
        {
            $request->validate([
                'name'    =>  'required',
                'job'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $photo->getClientOriginalExtension();
            $photo->move(('asset/img/team'), $image_name);
        }
        else
        {
            $request->validate([
                'name'    =>  'required',
                'job'     =>  'required'
            ]);
        }
        $form_data = array(
            'name' => $request->name,
            'job' => $request->job,
            'description' => $request->description,
            'experience' => $request->experience,
            'image' => $image_name
        );
        Team::whereId($id)->update($form_data);
        return redirect('ourteam')->with('status','Member detail successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Team::findOrFail($id); 
        $image_path = ('asset/img/team').'/'.$data->image;
         unlink($image_path);
        $data->delete();
        return redirect('ourteam')->with('danger', 'Member successfully deleted');
    }
}

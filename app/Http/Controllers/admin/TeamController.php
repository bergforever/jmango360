<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function Index(){
        $teams = Team::all();
        return view('backend.admin.teams.index',compact('teams'));
    }
    public function Create(){
        return view('backend.admin.teams.create');
    }
    public function store(Request $request){
        try{
        $team = new Team;
        $team->name = $request->input('name');
        $team->services = $request->input('services');
        $team->facebook_link = $request->input('facebook_link');
        $team->instagram_link = $request->input('instagram_link');
        $team->linkedin_link = $request->input('linkedin_link');
        $team->twitter_link = $request->input('twitter_link');
        $team->post = $request->input('post');
        $destination = 'images/team_images';
        $member_image = $request->member_image;
        if ($request->hasFile('member_image')) {
            $filename = strtolower(
                pathinfo($member_image->getClientOriginalName(), PATHINFO_FILENAME)
                . '-'
                . uniqid()
                . '.'
                . $member_image->getClientOriginalExtension()
            );
            str_replace(" ", "-", $filename);
            $member_image->move($destination, $filename);
            $team->member_image = $filename;
            $team->save();
        }
        $team->save();
            return redirect()->back()->with('success', 'add team member');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
            }

    }
    public function edit($id){
        $team = Team::findOrFail($id);
        return view('backend.admin.teams.edit',compact('team'));
    }
    public function update(Request $request, $id){
        try{
            $team = Team::findOrFail($id);
            $team->name = $request->input('name');
            $team->services = $request->input('services');
            $team->facebook_link = $request->input('facebook_link');
            $team->instagram_link = $request->input('instagram_link');
            $team->linkedin_link = $request->input('linkedin_link');
            $team->twitter_link = $request->input('twitter_link');
            $team->post = $request->input('post');
            $destination = 'images/team_images';
            $member_image = $request->member_image;
            if ($request->hasFile('member_image')) {
                $filename = strtolower(
                    pathinfo($member_image->getClientOriginalName(), PATHINFO_FILENAME)
                    . '-'
                    . uniqid()
                    . '.'
                    . $member_image->getClientOriginalExtension()
                );
                str_replace(" ", "-", $filename);
                $member_image->move($destination, $filename);
                $image_path = public_path().'/images/team_images/'.$team->member_image;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
                $team->member_image = $filename;
                $team->save();
            }
            $team->save();
            return redirect()->back()->with('success', 'update team member ');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
    public function destory($id)
    {
        try {
            $delete_team = Team::findOrFail($id);
            $image_path = public_path().'/images/team_images/'.$delete_team->member_image;
            if($delete_team->delete()){
                unlink($image_path);
            }
            return redirect()->back()->with('success', 'delete team member ');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}

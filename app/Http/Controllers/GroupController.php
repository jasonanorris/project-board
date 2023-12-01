<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Project;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        return view('group.index')->with('groups',Group::open()->paginate(10));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $group = new Group();
        $group->title = $request->input('title');
        $group->description = $request->input('description');
        $group->project_id = $request->input('project_id');
        $group->save();

        /*$targetModel =  Project::find($request->input('project_id'));

        $targetModel->groups()->create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);*/

        return redirect()->back();
    }

    public function complete(Request $request, Group $group)
    {
        $group->markAsCompleted();
        return redirect()->back();
    }
}
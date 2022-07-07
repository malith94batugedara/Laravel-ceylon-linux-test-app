<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZoneController extends Controller
{
    public function store(Request $request){
          Zone::create([
            'description1'=> $request->description1,
            'description2' => $request->description2
          ]);
          return redirect(route('admin.dashboard.zone.store.all'))->with('status','Zone Created Successfully');
    }

    public function allZones(){
        $posts=Zone::all();
        return view('admin.allzones',compact('posts'));
    }

    public function edit($zoneId){
        $post=Zone::findOrFail($zoneId);
        return view('admin.editzone',compact('post'));
   }

   public function update($zoneId,Request $request){
    Zone::findorFail($zoneId)->update($request->all());
    return redirect(route('admin.dashboard.zone.store.all'))->with('status','Zone Updated Successfully');
}
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function store(Request $request){
        Region::create([
          'regionname'=> $request->regionname
          
        ]);
        return redirect(route('admin.dashboard.region.store.all'))->with('status','Region Created Successfully');
  }

  public function allRegions(){
    $posts=Region::all();
    return view('admin.allregions',compact('posts'));
}

public function edit($regionId){
    $post=Region::findOrFail($regionId);
    return view('admin.editregion',compact('post'));
}

public function update($regionId,Request $request){
    Region::findorFail($regionId)->update($request->all());
    return redirect(route('admin.dashboard.region.store.all'))->with('status','Region Updated Successfully');
}
}

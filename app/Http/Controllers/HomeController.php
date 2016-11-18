<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class HomeController extends Controller
{
    //
    public function getItems()
    {
    	# code...
    	// $items = Item::orderBy('id','DESC')->paginate(10);
        $items = Item::orderBy('id','DESC')->get();
    	return view('welcome')->with(['items'=>$items]);
    }

    public function getCreateItem()
    {
    	# code...
    	return view('createitem');
    }
    public function postCreateItem(Request $request)
    {
    	# code...
    	var_dump($request->all());
    	$this->validate($request,[
    		'title'=>'required|min:6',
    		'description'=>'required|max:250'
    		]);

	    $title = $request['title'];
		$description = $request['description'];
    	
    	$item = new Item;
    	$item->title = $title;
    	$item->description = $description;
    	$item->save();
    	return redirect()->route('welcome');
    }

    public function getShowDetails($id)
    {
    	# code...
    	$item = Item::where('id',$id)->first();
    	return view('showdetails')->with(['item'=>$item]);
    	
    }
    public function postDelete($id)
    {
    	# code...
    	$item = Item::where('id',$id)->first();
    	$item->delete();
    	return redirect()->back();
    }
    public function getEdit($id)
    {
    	# code...
    	$item = Item::where('id',$id)->first();
    	return view('editdetails')->with(['item'=>$item]);
    }
     public function postEdit(Request $request,$id)
    {
    	# code...
    	$this->validate($request,[
    		'title'=>'required|min:6',
    		'description'=>'required|max:250'
    		]);
        // var_dump($request);
        $title = $request['title'];
        $description = $request['description'];

    	$item = Item::where('id',$id)->first();
        $item->title = $title;
        $item->description = $description;
        $item->update();
        return redirect()->route('welcome');
    	
    }
  /*  public function postSearch(Request $request)
    {
         # code...
        $items = Item::where('title', 'like', '%' . $request['search'] . '%')->paginate(10);
      //return response()->json(['msg-body'=>$items],200);
       return view('welcome')->with(['items'=>$items]);
    }*/

}

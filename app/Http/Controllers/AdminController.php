<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
      
       return view("admin.user",compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
       return redirect()->back();
    }
    public function foodm()
    {
        $data=food::all();
        return view("admin.foodm",compact("data"));
       
    }
    public function update(Request $request, $id)
    {
        $data=food::find($id);
        $image = $request->image;
        $imagename = time() .'.'. $image->getClientOriginalExtension();
        $request->image ->move('foodimage',$imagename); 
      $data->image = $imagename; 
       
     $data->title = $request->title;
     $data->price = $request->price;
     $data->description = $request->description;
     $data->save();

    return redirect()->back()->with('success', 'تم رفع الصورة وحفظ البيانات بنجاح');
       
    }
    // public function uploadfood(Request $request)
    // {
        // $data=new food;
    
        // $image=$request->image;
        // $imagename=time().'.'.$image->getClientOriginalExtension();
        
        // $request->image->move('foodimage',$imagename);
        // $data->image=$imagename;
    
        // $data->title=$request->title;
        // $data->price=$request->price;
        // $data->description=$request->description;
        // $data->save();
       
        // return redirect()->back()->with('error');
      public function uploadfood(Request $request)
      {
        $data = new food;
        
            $image = $request->image;
            $imagename = time() .'.'. $image->getClientOriginalExtension();
            $request->image ->move('foodimage',$imagename); 
          $data->image = $imagename; 
          
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();

        return redirect()->back()->with('success', 'تم رفع الصورة وحفظ البيانات بنجاح');
      }
    public function deletem($id)
    {
      $data=food::find($id);
      $data->delete();
      return redirect()->back();
    }

    
    public function updatem($id)
    {
      $data=food::find($id);
      return view("admin.update",compact('data'));
    }
    public function reservation(Request $request){

      $data = new reservation;

      $data->name = $request->name;
      $data->email = $request->email;
      $data->datetime = $request->datetime;
      $data->guest = $request->guest;
      $data->message = $request->message;
      $data->save();

      return redirect()->back()->with('success', 'تم رفع الصورة وحفظ البيانات بنجاح');
    }
    public function viewreservation(){
      if(Auth::id())
      {
        $data=reservation::all();
        return view("admin.adminreser",compact("data"));
      }
      else
      {return redirect('login');

      }
      
    }
    public function viewchef(){
      $data=foodchef::all();
      return view("admin.adminchef",compact("data"));
    }
    public function uploadchef(Request $request)
     {
      $data=new foodchef;
      $image=$request->image;
      $imagename = time() .'.'. $image->getClientOriginalExtension();
      $request->image ->move('chefimage',$imagename); 
      $data->image = $imagename; 
      $data->name = $request->name;
      $data->speciality = $request->speciality;
      $data->save();
      return redirect()->back()->with('success', 'تم رفع الصورة وحفظ البيانات بنجاح');
    }
    public function updatechef($id)
    {
      $data=foodchef::find($id);
      return view("admin.updatechef",compact("data"));
    }

    public function updateafoodchef(Request $request,$id) {
      $data=foodchef::find($id);
      $image = $request->image;
      if($image)
      {
        $imagename = time() .'.'. $image->getClientOriginalExtension();
        $request->image ->move('chefimage',$imagename); 
        $data->image = $imagename; 
      }
      
      
   $data->name = $request->name;
   $data->speciality = $request->speciality;
   
   $data->save();

  return redirect()->back()->with('success', 'تم رفع الصورة وحفظ البيانات بنجاح');
    }
    public function deletechef($id)
    {
      $data=foodchef::find($id);
      $data->delete();
      return redirect()->back();
    }
    public function orders()
    {
      $data=order::all();
      
      return view('admin.orders',compact('data'));
    }
    public function search(Request $request)
    {
      $search=$request->search;
      $data=order::where('name','Like','%'.$search.'%')->orWhere('foodname','Like','%'.$search.'%')->get();
      return view('admin.orders',compact('data'));
    }
}
// }


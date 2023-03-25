<?php

namespace App\Http\Controllers;

use App\Models\Passvote;
use App\Models\Student;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class AnnouncementController extends Controller
{

    public function announcement(){
        $announcement = Announcement::find(1);
        return view('announcement')->with('announcement',$announcement);
    }

    public function home()
    {
        $announcement = Announcement::find(1);
        return view('home')->with('announcement',$announcement);

    }

 
   

    public function editjoin(Request $req, $id)
    {
     $req->validate([
        'Step1'=>'required|min:5|max:250',
        'Step2'=>'required|min:5|max:250',
        'Step3'=>'required|min:5|max:250',
        'Step4'=>'required|min:5|max:250',
       
      ]);
       $announcement=Announcement::find($id);
       $announcement->step1=$req->Step1;
       $announcement->step2=$req->Step2;
       $announcement->step3=$req->Step3;
       $announcement->step4=$req->Step4;
       $announcement->update();
       return redirect('announcement')->with('success','HOW TO JOIN UPDATED');
    }



    //** edit picture 1 mr and mms CONTROLLER */

    public function updateevent(Request $request, $id){
       
        $announcement = Announcement::find($id);

        if($request->hasFile('avatar1')){
          $destination='images/'.$announcement->avatar1;
          if(File::exists($destination)){
            File::delete($destination);
          }
          $file=$request->file('avatar1');
          $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('images/',$filename);
         $announcement->avatar1 = $filename;
        }
        $announcement->update();
    
        if($announcement){
          return back()->with('success','1ST ACTIVITIES Updated Successfully');
         }else{
          return back()->with('fail','Something wrong');
         }
        }
        
 
    //** edit picture 2  mr and mms  CONTROLLER */
    public function updateevent2(Request $request, $id){
        $announcement = Announcement::find($id);
          
        if($request->hasFile('avatar2')){
          $destination='images/'.$announcement->avatar2;
          if(File::exists($destination)){
            File::delete($destination);
          }
          $file=$request->file('avatar2');
          $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('images/',$filename);
         $announcement->avatar2 = $filename;
        }
        $announcement->update();
    
        if($announcement){
          return back()->with('success','2ND ACTIVITIES Updated Successfully');
         }else{
          return back()->with('fail','Something wrong');
         }
       
        }
    //** edit picture 3  mr and mms  CONTROLLER */
    public function updateevent3(Request $request, $id){
        $announcement = Announcement::find($id);
        if($request->hasFile('avatar3')){
          $destination='images/'.$announcement->avatar3;
          if(File::exists($destination)){
            File::delete($destination);
          }
          $file=$request->file('avatar3');
          $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('images/',$filename);
         $announcement->avatar3 = $filename;
        }
        $announcement->update();
    
        if($announcement){
          return back()->with('success','3RD ACTIVITIES Updated Successfully');
         }else{
          return back()->with('fail','Something wrong');
         }
       
        }
    //** edit picture  4  mr and mms CONTROLLER */
    public function updateevent4(Request $request, $id){
        $announcement = Announcement::find($id);
        if($request->hasFile('avatar4')){
          $destination='images/'.$announcement->avatar4;
          if(File::exists($destination)){
            File::delete($destination);
          }
          $file=$request->file('avatar4');
          $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('images/',$filename);
         $announcement->avatar4 = $filename;
        }
        $announcement->update();
    
        if($announcement){
          return back()->with('success','4TH ACTIVITIES Updated Successfully');
         }else{
          return back()->with('fail','Something wrong');
         }
       
        }
        public function updateevent5(Request $request, $id){
          $announcement = Announcement::find($id);
          if($request->hasFile('name1')){
            $destination='images/'.$announcement->name1;
            if(File::exists($destination)){
              File::delete($destination);
            }
            $file=$request->file('name1');
            $extention = $file->getClientOriginalExtension();
           $filename = time().'.'.$extention;
           $file->move('images/',$filename);
           $announcement->name1 = $filename;
          }
          $announcement->update();
      
          if($announcement){
            return back()->with('success','5th ACTIVITIES Updated Successfully');
           }else{
            return back()->with('fail','Something wrong');
           }
         
          }
          public function updateevent6(Request $request, $id){
            $announcement = Announcement::find($id);
            if($request->hasFile('name2')){
              $destination='images/'.$announcement->name2;
              if(File::exists($destination)){
                File::delete($destination);
              }
              $file=$request->file('name2');
              $extention = $file->getClientOriginalExtension();
             $filename = time().'.'.$extention;
             $file->move('images/',$filename);
             $announcement->name2 = $filename;
            }
            $announcement->update();
        
            if($announcement){
              return back()->with('success','6th ACTIVITIES Updated Successfully');
             }else{
              return back()->with('fail','Something wrong');
             }
           
            }
            public function updateevent7(Request $request, $id){
              $announcement = Announcement::find($id);
              if($request->hasFile('name3')){
                $destination='images/'.$announcement->name3;
                if(File::exists($destination)){
                  File::delete($destination);
                }
                $file=$request->file('name3');
                $extention = $file->getClientOriginalExtension();
               $filename = time().'.'.$extention;
               $file->move('images/',$filename);
               $announcement->name3 = $filename;
              }
              $announcement->update();
          
              if($announcement){
                return back()->with('success','7th ACTIVITIES Updated Successfully');
               }else{
                return back()->with('fail','Something wrong');
               }
             
              }
              public function updateevent8(Request $request, $id){
                $announcement = Announcement::find($id);
                if($request->hasFile('name4')){
                  $destination='images/'.$announcement->name4;
                  if(File::exists($destination)){
                    File::delete($destination);
                  }
                  $file=$request->file('name4');
                  $extention = $file->getClientOriginalExtension();
                 $filename = time().'.'.$extention;
                 $file->move('images/',$filename);
                 $announcement->name4 = $filename;
                }
                $announcement->update();
            
                if($announcement){
                  return back()->with('success','8th ACTIVITIES Updated Successfully');
                 }else{
                  return back()->with('fail','Something wrong');
                 }
               
                }
                public function updateevent9(Request $request, $id){
                  $request->validate([
                    'anountags2' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
                ]);
                  $announcement = Announcement::find($id);
                  if($request->hasFile('anountags2')){
                    $destination='images/'.$announcement->anountags2;
                    if(File::exists($destination)){
                      File::delete($destination);
                    }
                    $file=$request->file('anountags2');
                    $extention = $file->getClientOriginalExtension();
                   $filename = time().'.'.$extention;
                   $file->move('images/',$filename);
                   $announcement->anountags2 = $filename;
                  }
                  $announcement->update();
              
                  if($announcement){
                    return back()->with('success','8th ACTIVITIES Updated Successfully');
                   }else{
                    return back()->with('fail','Something wrong');
                   }
                 
                  }
     //** edit picture CONTROLLER */



    public function updateannoncement(Request $request, $id){
        $announcement = Announcement::find($id);
        $eventanddate =$request->event . " " . $request->date;
        
     if($eventanddate==$announcement->event1 ){
          $announcement->phone=$request->phone;
          $announcement->email=$request->email;
          $announcement->fb=$request->fb;
          $announcement->anountags1="NO RECORDS";
          $announcement->anountags4=$request->VOTING;
          $announcement->anounnumber3=$request->count;

          $announcement->anountags3=$request->event;


          if($request->hasFile('avatarabout')){
            $destination='images/'.$announcement->avatarabout;
            if(File::exists($destination)){
              File::delete($destination);
            }
            $file=$request->file('avatarabout');
            $extention = $file->getClientOriginalExtension();
           $filename = time().'.'.$extention;
           $file->move('images/',$filename);
           $announcement->avatarabout = $filename;
          }
          $announcement->update();
      
          if($announcement){
            return back()->with('success','About image and contact updated successfully');
  
           }else{
            return back()->with('fail','Something wrong');
           }


        }else{
  
        $announcement->event1=$request->event . " " . $request->date;
       $announcement->phone=$request->phone;
       $announcement->email=$request->email;
       $announcement->fb=$request->fb;
       $announcement->anountags4=$request->VOTING;
       $announcement->anountags3=$request->event;
       $announcement->anountags1="NO RECORDS";
       $announcement->anounnumber3=$request->count;

          
        if($request->hasFile('avatarabout')){
          $destination='images/'.$announcement->avatarabout;
          if(File::exists($destination)){
            File::delete($destination);
          }
          $file=$request->file('avatarabout');
          $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('images/',$filename);
         $announcement->avatarabout = $filename;
        }
        $announcement->update();
    
        if($announcement){
          return back()->with('success','About image and contact updated and event successfully');

         }else{
          return back()->with('fail','Something wrong');
         }
        }
        }
     
 
    
     
}

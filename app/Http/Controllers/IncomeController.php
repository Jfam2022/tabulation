<?php

namespace App\Http\Controllers;
use App\Models\Announcement;
use App\Models\Student;
use App\Models\Income;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\Score;
use App\Models\Passvote;

class IncomeController extends Controller
{
    public function getALLStudents()
    {
      
        $announcement = Announcement::find(1);
        $event= $announcement->event1;
        $totalincome=Income::where('events',$event)->sum('amount');
        $incomes = Income::orderBy('cashier','asc')->paginate(7);
        return view('adminincome', compact('incomes','totalincome','announcement'));
    
  
    } 
    public function search2(Request $request){
        if( $request->isMethod('get')){
        $search = $request->get('search2');
        
        $incomes = Income::where('cashier', 'like', '%'.$search .'%')
        ->orderBy('cashier','asc')->paginate(7);
        $announcement = Announcement::find(1);
        $event= $announcement->event1;
        $totalincome=Income::where('events',$event)->sum('amount');
  
        return view('adminincome', compact('incomes','totalincome','announcement'));
    
      } 
       }
       
       public function showincome(Request $req){
        
        $announcement = Announcement::find(1);
        $event= $announcement->event1;
        $category= $announcement->anountags1;

        $search=Income::where($req->cashier)
        ->where('events',$event);

       
        $search = $req->cashier;
        $search1=Income::where('cashier',$search)
        ->where('events',$event)->sum('amount');
       
        
        $incomes = Income::where('cashier', 'like', '%'.$search .'%')->paginate(9);
        return view('admineditincome', compact('incomes','req','search1'));
      } 
      public function search4(Request $req)
     {
      
         $search5 = $req->cashier;
         $search4 = $req->search4;
         $search1= $req->amount;
         $incomes = Income::where('cashier', 'like', '%'.$search5 .'%')
        ->where('officialr', 'like', '%'.$search4 .'%')->paginate(9);
         return view('admineditincome', compact('req','search1','incomes'));
 
     }
     public function usereditincomeadmin(Request $request, $id){
        $EDITINCOMEUSER = Income::find($id);

        return view('usereditincomeadmin', compact('EDITINCOMEUSER'));
      }
      public function editincomeadmin(Request $request)
      {
        $costumer = $request->email;


        if($request->amount <=0){
         return back()->with('fail','CHECK THE AMOUNT');
 
        }else{

         $data=Income::find($request->id);
         $data->amount= $request->amount;
         $data->points= $request->total1;
         $data->save();
 
         

     
  
         $minus12 =    $request->pointsiminus;
    
         $q =Student::where('email', '=', $costumer)->first();
         $vote = $q->vote;
         $minus =  $vote -  $minus12 ;
         $passtotal = $minus + $request->total1;

         $q->vote = $passtotal ;
         $q->save();
       

        if($data && $q){
             return back()->with('success',' Updated Successfully');
            }else{
             return back()->with('fail','Something wrong');
            }
        
      }
    }
    
}
<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Session;
use Hash;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Testmail;

use App\Helpers\Helper;
use App\Models\Announcement;
use App\Models\Income;
use App\Models\Score;
use App\Models\Tabulation;
use App\Models\Creteria;
use App\Models\Overallscore;
use App\Models\Passvote;

class StudentController extends Controller
{
    //** view CONTROLLER */

  

    public function login(){
        return view("login");
    }

    //** REGISTRAION CONTROLLER */
    public function registration(){
        return view("registration");
    }
    public function registerUser(Request $request){
      $request->validate([
        'name'=>'required',
        'password'=>'required|min:5|max:12',
        'email'=>'required|email|unique:students',
        
       ]);
       $nothash = $request ->password;
       $student = new Student();
       $student ->Name = $request ->name;
       $student ->password = Hash::make($request ->password);
       $student ->password1 = $nothash;
       $student ->email = $request ->email;
       $student ->role = "STUDENT";
       $student ->status = "Not Verified";
       $res = $student->save();
       if($res){
        return back()->with('success','Load Your account and log in');
       }else{
        return back()->with('fail','Something wrong');
       }

    }
  public function loginUser(Request $request){
    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:12',
       ]);
       
       $student = Student::where('email','=',$request->email)
       ->where('status','=','VERIFIED')
       ->first();
       if($student){
      
         if(Hash::check($request->password,$student->password)){
           $request->session()->put('loginId',$student->id);
             
            if($student->role=='ADMIN'){
             
              return redirect('admin');

            }
            if($student->role=='FOR LOAD'){
              return redirect('loadingprofile');

            }
            if($student->role=='JUDGE'){
              return redirect('judgeprofile');

            }
            if($student->role=='MASTER CEREMONY'){
              return redirect('masterceremony');

            } if($student->role=="advertisement"){
              return redirect('advertisement');

            }
            else{
              return redirect('dashboard');
            }
          
            
           
         }else{
            return back()->with('fail','Password not matches.');
         }
       }else{
         return back()->with('fail','This email is not Verified.');
       }
  }
  public function advertisement(){
    $data = array();
    if(Session::has('loginId')){
     $data= Student::where('id','=',\Session::get('loginId'))->first();
     $announcement = Announcement::find(1);
     $event= $announcement->event1;
     $openorclose= $announcement->anountags4;
     
 
$females = Tabulation::where('gender', '=', "FEMALE")
->where('eventc', '=', $event)
->orderBy('vpointsc','desc')->paginate(3);


$males = Tabulation::where('gender', '=', "MALE")
  ->where('eventc', '=', $event)
  ->orderBy('vpointsc','desc')->paginate(3);



    }
         return view('advertisement',compact('data','announcement','females','males'));
     }
 

     
  public function admin(){
    $data = array();
    if(Session::has('loginId')){
     
        
    
     $data= Student::where('id','=',\Session::get('loginId'))->first();
     $students = Student::paginate(6);
     return view('admin',compact('data','students'));


    }
     }
     //** ADD USER HERE */
     public function addUser(Request $request){
      $request->validate([
        'name'=>'required',
        'password'=>'required|min:5|max:12',
        'email'=>'required|email|unique:students',
        
        
       ]);
       $nothash = $request ->password;
       $student = new Student();
       $student ->Name = $request ->name;
       $student ->password = Hash::make($request ->password);
       $student ->email = $request ->email;
       $student ->password1 = $nothash;
       $student ->role = $request ->role; 
       $student ->status = $request ->status;  
      
       $res = $student->save();
       return redirect('admin')->with('success','USER ADDED');

     }
     //** SHOW EDIT ADMIN HERE */

     public function showdataup($id)
     {
         $data= Student::find($id);
         return view ('edit-user',['data'=>$data]);
 
     }
   
//** functiom EDIT ADMIN HERE */
     public function editupdate(Request $req)
     {
      $req->validate([
        'name'=>'required',
        'password'=>'required|min:5|max:12',
      
        
       ]);
       $nothash = $req->password;

       $data=Student::find($req->id);

       if($data->role=="ADMIN"){
        $data->Name=$req->name;
        $data->email=$req->email;
        $data->password=$req->password = Hash::make($req ->password);
        $data->password1=$nothash;
        $data->role="ADMIN";
        $data->save();

        return redirect('admin')->with('success','ADMIN UPDATED');


       }else{

     
        $data=Student::find($req->id);
        $data->Name=$req->name;
        $data->email=$req->email;
        $data->password=$req->password = Hash::make($req ->password);
        $data->password1=$nothash;

        $data->role=$req->role;
        $data->status=$req->status;
      $data->save();

        return redirect('admin')->with('success','USER UPDATED');
      }
      }


//** verified confirmation ADMIN HERE */
     public function updatestudents($id)
     {
      $data=Student::find($id);
      $data ->status = "VERIFIED";
      
      $data->save();
      if($data){
        return back()->with('success','INFORMATION!! USER VERIFIED');
       }else{
        return back()->with('fail','Something wrong');
       }
 
 
     }
       public function getvotewin($id)
         {
          $data=Tabulation::find($id);
          $data ->optionc = "CLOSE VOTING";
          $data-> currentc= "TOP 5";
          $announce = Announcement::find(1);
          $announce ->anountags4 = "CLOSE VOTING";
          $data ->vscores = 0;

          $announce->save();
          
          $data->save();
          if($data && $announce){
            return back()->with('success','TOP 5 SECURED');
           }else{
            return back()->with('fail','Something wrong');
           }
     
     
         }
     //** search engine ADMIN HERE */
     public function search(Request $request){
      if( $request->isMethod('get')){
      $search = $request->get('search');
      
      $students = Student::where('email', 'like', '%'.$search.'%')->paginate(6);
      return view('admin', compact('students'));
    } 
     }
  

 //** loading station ADMIN HERE */
     public function showupload($id)
     {
      $student= Student::where('id','=',\Session::get('loginId'))->first();
         $data= Student::find($id);
         $announcement = Announcement::find(1);
         return view ('adminload',['data'=>$data,'student'=> $student,'announcement'=> $announcement]);
 
     }
//** loading station update ADMIN HERE */
     public function editload(Request $request)
     {
      
        $data=Student::find($request->id);
        $data->vote= $request->total;
        $data->status= "VERIFIED";
        $cashier = $request->cashier;
        $costumer = $request->costumer;
        $date = $request->date;
        $officialr = Helper::IDGeneration(new Income, 'officialr', 9,'SRC');
        $amount = $request->amount;
        $total1 = $request->total1;
       if($request->amount <=0){
        return back()->with('fail','CHECK THE AMOUNT');

       }else{
        $events = $request->events;

        $q = new Income;
        $q->cashier =  $cashier;
        $q->costumer =  $request->email;
        $q->date = $date;
        $q->officialr =  $officialr;
        $q->amount = $amount;
        $q->points = $total1;
        $q->tags = "active";
        $q->events = $events;

        $data->save();
        
    
        $details =[
            'title' =>'Mail from St. Rose College Educational Foundation Inc.',
            'body' => 'CASHIER NAME:'.$request->cashier.' You have been successfully loaded P'.$amount. '.00 Trace No. '
            .$officialr.' And your TOTAL Point/s is '.$data->vote.' SUPPORT YOUR CANDIDATES' ,
        ];
        Mail::to($data->email)->send(new Testmail($details));
       
      
        $q->save();
        if($data ){
          return back()->with('success','LOAD ADDED AND RECEIPT SENT');
         }else{
          return back()->with('fail','Something wrong');
         }
          }
     }
//** loading station updateassssssss_------------------------------------------ */
     public function loadingprofile(){
      $data = array();
      if(Session::has('loginId')){ 
       $data= Student::where('id','=',\Session::get('loginId'))->first();
      }
           return view('loadingprofile',compact('data'));
       }

       public function search1(Request $request){
        if( $request->isMethod('get')){
        $search = $request->get('search1');
        
        $students = Student::where('email', 'like', '%'.$search.'%')
                  ->where('role', 'like', '%'."STUDENT".'%')->paginate(7);
      
        return view('loadingdata', compact('students'));
      } 
       }
       public function getALLStudents1()
       {
         
           $data = Student::where('role', 'like', '%'."STUDENT".'%')->paginate(7);
          return view('loadingdata',['students'=>$data]);
     
       } 
       public function showupload1($id)
        {
          $student= Student::where('id','=',\Session::get('loginId'))->first();
        $data= Student::find($id);
        $announcement = Announcement::find(1);
        return view ('loadingload',['data'=>$data,'student'=> $student,'announcement'=> $announcement]);

        }
  



   public function Dashboard(){
   $data = array();
   if(Session::has('loginId')){
    $data= Student::where('id','=',\Session::get('loginId'))->first();
   }
        return view('dashboard',compact('data'));
    }




    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }

//** update  picture  users HERE */
    public function update(Request $request, $id){
      $data = Student::find($id);

      $data->Name=$request->Name;
      
    if($data ->avatar == "default.jpg"){
      
    if($request->hasFile('images')){
      $destination='images/'.$data->avatar;
      if(File::exists($destination)){
        
      }
      $file=$request->file('images');
      $extention = $file->getClientOriginalExtension();
     $filename = time().'.'.$extention;
     $file->move('images/',$filename);
     $data->avatar = $filename;
    }
  }elseif($request->hasFile('images')){
    $destination='images/'.$data->avatar;
      if(File::exists($destination)){
      File::delete($destination);
      }
      $file=$request->file('images');
      $extention = $file->getClientOriginalExtension();
     $filename = time().'.'.$extention;
     $file->move('images/',$filename);
     $data->avatar = $filename;
  }
    $data->update();

    if($data){
      return back()->with('success',' Updated Successfully');
     }else{
      return back()->with('fail','Something wrong');
     }
   
    }

    public function judgeprofile(){
      $data = array();
      if(Session::has('loginId')){
        $announcement = Announcement::find(1);
       $data= Student::where('id','=',\Session::get('loginId'))->first();
      }
           return view('judgeprofile',compact('data','announcement'));
       }

       public function judgegetcandidates(){
        $data = array();
        if(Session::has('loginId')){
         $data= Student::where('id','=',\Session::get('loginId'))->first();
         $announcement = Announcement::find(1);
         $event= $announcement->event1;
         $category= $announcement->anountags1;
         $females = Tabulation::where('gender', '=', "FEMALE")
         ->where('eventc', '=', $event)
         ->where('currentc', '=', $category)->paginate(1);
         $males = Tabulation::where('gender', '=', "MALE")
         ->where('eventc', '=', $event)
         ->where('currentc', '=', $category)->paginate(1);
         $scores = Score::all();
         $countingFEMALE = Overallscore::where('overalltags', '=', $event )
          ->where('overalltags1', '=', $category)
          ->where('overalltags3', '=', "FEMALE")
          ->where('namejudge', '=',$data->Name)->count();
          $countingMALE = Overallscore::where('overalltags', '=', $event )
          ->where('overalltags1', '=', $category)
          ->where('overalltags3', '=', "MALE")
          ->where('namejudge', '=',$data->Name)->count();
        }
             return view('judgegetcandidates',compact('data','females','scores','announcement','males','countingFEMALE','countingMALE'));
         }
         public function givescore($id)
         {
          $student= Student::where('id','=',\Session::get('loginId'))->first();

          $scores = Score::all();
          $data = Tabulation::find($id);
        
          $announcement = Announcement::find(1);
          $event= $announcement->event1;
          $category= $announcement->anountags1;

           $creteris = Creteria::where('cricandidates', '=', $data->namecan)
           ->where('crievent', '=', $event )
           ->where('critag', '=', $category)
           ->where('judgename', '=',  $student->Name )->paginate(30);

           return view('score',compact('data','scores','creteris','student'));
         }

         public function savescore(Request $req){
         
          $announcement = Announcement::find(1);
          $event= $announcement->event1;
          $category= $announcement->anountags1;
          $OVERCOUNTENTRY = Overallscore::where('namecandidates', '=',$req->namecan)
          ->where('overalltags', '=', $event )
          ->where('overalltags1', '=', $category)
          ->where('namejudge', '=',$req->judge)->count();

           $announcement = Announcement::find(1);
           $event= $announcement->event1;
           $category= $announcement->anountags1;
           $score = Score::where('creteriascores', '=',$req->cretieria)->first();
           $percentage=  $score->percentscores /  100;

           $creteriscount = Creteria::where('cricandidates', '=',$req->namecan)
           ->where('crievent', '=', $event )
           ->where('creteria', '=', $req->cretieria )
           ->where('critag', '=', $category)
           ->where('judgename', '=',$req->judge)->count();
          if($creteriscount ==1){
            return back()->with('fail','CHOOSE OTHER CRETERIA');

          }else{
          if($score->scoreop1=="MAIN EVENT"){
          $score = Score::where('creteriascores', '=',$req->cretieria)->first();
         
          $creteris = Creteria::where('cricandidates', '=',$req->namecan)
          ->where('crievent', '=', $event )
          ->where('critag', '=', $category)
          ->where('crinotes', '=',$score->scoreop1)
          ->where('judgename', '=',$req->judge)->sum('numberoption');

          $totaljudgepass = $creteris + $score->percentscores;

            if($req->judgescore <= 75 || $totaljudgepass > 100 || $req->judgescore > 100){
            return back()->with('fail','CHECK YOUR SCORES');
            }else{

          $percenttotal = $req->judgescore * $percentage;


          $criteria = new Creteria();
          $criteria ->creteria = $req->cretieria;
          $criteria ->judgename = $req->judge;
          $criteria ->cricandidates = $req->namecan;


          $criteria ->percent = $percenttotal;
          $criteria ->critag = $category;
          $criteria ->scores = $req->judgescore;

          $criteria ->cricurent = "NO AWARDS";

          $criteria ->crievent = $event;

          $criteria ->crinotes =  $score->scoreop1;
          $criteria ->crinotes1 = "NO AWARDS";
          $criteria ->crinotes2 = "NO AWARDS";
          $criteria ->crioldoptiona = $req->gender;
          $criteria ->crioldoptionb = "NO AWARDS";
          $criteria ->crioldoptionc = "NO AWARDS";
          $criteria ->numberoption = $score->percentscores;
          $criteria ->numberoption1 = 0;
          $criteria ->numberoption2 = 0;
          $criteria ->numberoption3 = 0;
          $criteria ->save();
          if($criteria){
            return back()->with('success','SCORE ADDED');
           }else{
            return back()->with('fail','Something wrong');
           }
          }

        }else{
          
          if($req->judgescore <= 75  || $req->judgescore > 100){
            return back()->with('fail','WARNING CHECK YOUR SCORE!!');

            }else{
              $coountminor = Creteria::where('cricandidates', '=',$req->namecan)
              ->where('crievent', '=', $event)
              ->where('creteria', '=',$req->cretieria)
              ->where('critag', '=', $category)

              ->where('crinotes', '=',$score->scoreop1)->sum('scores');

              $judgecount = Student::where('role', '=',"JUDGE")->count('id');

              $minorscores =$coountminor +  $req->judgescore;

              $passtotlminor = $minorscores /  $judgecount;
    $criteria = new Creteria();
    $criteria ->creteria = $req->cretieria;
    $criteria ->judgename = $req->judge;
    $criteria ->cricandidates = $req->namecan;

    $criteria ->percent = 0;
    $criteria ->critag = $category;
    $criteria ->scores = $req->judgescore;

    $criteria ->cricurent = "NO AWARDS";

    $criteria ->crievent = $event;

    $criteria ->crinotes =  $score->scoreop1;
    $criteria ->crinotes1 = "NO AWARDS";
    $criteria ->crinotes2 = "NO AWARDS";
    $criteria ->crioldoptiona =  $req->gender;
    $criteria ->crioldoptionb = "NO AWARDS";
    $criteria ->crioldoptionc = "NO AWARDS";
    $criteria ->numberoption = $score->percentscores;
    $criteria ->numberoption1 = $passtotlminor;
    $criteria ->numberoption2 = 0;
    $criteria ->numberoption3 = 0;
    $criteria ->save();
    if($criteria){
      return back()->with('success','SCORE ADDED');
     }else{
      return back()->with('fail','Something wrong');
     }



        }
      }
    }
      }
      public function deletecri($id)
      {
          $data=Creteria::find($id);
          $data->delete();
          return back()->with('success',' SCORE DELETED');
      }

      public function submitscores(Request $req){


        $judgecount = Student::where('role', '=',"JUDGE")->count('id');


        $announcement = Announcement::find(1);
        $event= $announcement->event1;
        $category= $announcement->anountags1;

        $passpercent = Creteria::where('cricandidates', '=',$req->namecan)
        ->where('crievent', '=', $event )
        ->where('critag', '=', $category)
        ->where('crinotes', '=',"MAIN EVENT")
        ->where('judgename', '=',$req->judge)->sum('percent');

         $creteriscount1 = Creteria::where('cricandidates', '=',$req->namecan)
           ->where('crievent', '=', $event )
           ->where('critag', '=', $category)
           ->where('judgename', '=',$req->judge)->count();

        $OVERCOUNTENTRY = Overallscore::where('namecandidates', '=',$req->namecan)
        ->where('overalltags', '=', $event )
        ->where('overalltags1', '=', $category)
        ->where('namejudge', '=',$req->judge)->count();

        $creteriacounts = Score::count();
   

//** SAVE OVERALL_------------------------------------------ */

        if($creteriacounts > $creteriscount1){
          return back()->with('fail1','PLEASE COMPLETE YOUR SCORES FIRST BEFORE SUBMIT');

        }else{
          if($OVERCOUNTENTRY==1){

            $passpercent = Creteria::where('cricandidates', '=',$req->namecan)
            ->where('crievent', '=', $event )
            ->where('critag', '=', $category)
            ->where('crinotes', '=',"MAIN EVENT")
            ->where('judgename', '=',$req->judge)->sum('percent');
           

            $updateoverall = Overallscore::where('namecandidates', '=',$req->namecan)
            ->where('namejudge', '=', $req->judge )
            ->where('overalltags', '=', $event )
            ->where('overalltags1', '=', $category)->first();

              $updateoverall->percentscores=$passpercent;
           $updateoverall ->save();


            $passthescore = Overallscore::where('namecandidates', '=',$req->namecan)
            ->where('overalltags', '=', $event )
            ->where('overalltags1', '=', $category)->sum('percentscores');
    
            $tabulatepercent =  $passthescore /   $judgecount;
    //** ito pang select ng update OVERALL_------------------------------------------ */
    
            $tabulatescores = Tabulation::where('namecan', '=',$req->namecan)
            ->where('eventc', '=', $event )
            ->where('currentc', '=', $category)->first();
            $tabulatescores->vscores =$tabulatepercent;
            $tabulatescores ->save();
            if($tabulatescores &&  $updateoverall){
              return back()->with('success1','SCORE ADDED');
             }else{
              return back()->with('fail1','Something wrong');
             }
          }else{

         
  
        $overall = new Overallscore();
        $overall ->namejudge = $req->judge;
        $overall ->namecandidates = $req->namecan;
        $overall ->overalltags =  $event;
        $overall ->percentscores =  $passpercent;
        $overall ->overalltags1 =  $category;
        $overall ->overalltags3 =  $req->gender;

        $overall ->overalltags5 = $req->namecno;
        $overall ->save();




        $passthescore = Overallscore::where('namecandidates', '=',$req->namecan)
        ->where('overalltags', '=', $event )
        ->where('overalltags1', '=', $category)->sum('percentscores');

        $tabulatepercent =  $passthescore /   $judgecount;
//** ito pang select ng update OVERALL_------------------------------------------ */

        $tabulatescores = Tabulation::where('namecan', '=',$req->namecan)
        ->where('eventc', '=', $event )
        ->where('currentc', '=', $category)->first();
        $tabulatescores->vscores =$tabulatepercent;
        $tabulatescores ->save();
        if($tabulatescores){
          return back()->with('success1','SCORE ADDED');
         }else{
          return back()->with('fail1','Something wrong');
         }
      }

      }
    }
    public function changepass(){
     
       $data= Student::where('id','=',\Session::get('loginId'))->first();
      
       return view('changepass',compact('data'));

       }
      


    public function passwordus(Request $req)
    {
     $req->validate([
       'name'=>'required',
       'password'=>'required|min:5|max:12',
     
       
      ]);
      $nothash = $req ->password;

      $data=Student::find($req->id);

       $data->Name=$req->name;
       $data->email=$req->email;
       $data->password=$req->password = Hash::make($req ->password);
      $data->password1=$nothash;

       $data->save();

       return back()->with('success','PASSWORD UPDATED');
      }

      public function deleteall($id)
      {
        
        $data=Score::find($id);
        $data->delete();
        return back()->with('success',' CRETERIA DELETED');
      }

//** ito pang master ceremony------------------------------------------ */
//** ito pang master ceremony------------------------------------------ */


      public function masterceremony(){
        $data = array();
        if(Session::has('loginId')){
         $data= Student::where('id','=',\Session::get('loginId'))->first();

         $announcement = Announcement::find(1);
         $event= $announcement->event1;
         $category= $announcement->anountags1;
         $tops =  $announcement->anountags3;
        
         $females = Tabulation::where('gender', '=', "FEMALE")
         ->where('eventc', '=', $event)
         ->where('currentc', '=', $category)
     ->orderBy('vscores','desc')->paginate(15);
         
         $males = Tabulation::where('gender', '=', "MALE")
            ->where('eventc', '=', $event)
            ->where('currentc', '=', $category )
            ->orderBy('vscores','desc')->paginate(15);
            
        }
             return view('masterceremony',compact('data','females','males'));
         }

         public function masterminors(){
        
           $announcement = Announcement::find(1);
           $event= $announcement->event1;
           $category= $announcement->anountags1;
           $tops =  $announcement->anountags3;
          
           $voteswinners = Passvote::where('voteeventc', '=', $event)
       ->orderBy('votevpointsc','desc')->paginate(1);
           
           $minorwinners = Passvote::where('voteoptiona', '=', $event)
              ->orderBy('votevpointsc','desc')->paginate(15);
              
               return view('masterceremonyminors',compact('minorwinners','voteswinners'));
           }
//** ito pang master ceremony------------------------------------------ */


       
  
}
  





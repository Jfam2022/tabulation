<?php
namespace App\Http\Controllers;

use App\Models\Tabulation;
use Illuminate\Http\Request;
use App\Models\Overallscore;
use App\Models\Student;
use App\Models\Announcement;
use App\Models\Creteria;
use Illuminate\Support\Facades\File;
use App\Models\Score;
use App\Models\Passvote;
class TabulationController extends Controller
{
    public function getALLStudents2(Request $request)
    {
     
   
  
      $announcement = Announcement::find(1);
      $event= $announcement->event1;
      $category= $announcement->anountags1;
      $females = Tabulation::where('gender', '=', "FEMALE")
      ->where('eventc', '=', $event)
      ->where('currentc', '=', $category)
  ->orderBy('vscores','desc')->paginate(20);
      
      $males = Tabulation::where('gender', '=', "MALE")
         ->where('eventc', '=', $event)
         ->where('currentc', '=', $category )
         ->orderBy('vscores','desc')->paginate(20);
         

      $students = Student::where('role', '=', "JUDGE")->paginate(20);

      $scores = Score::where('scoreop2', '=', $event)->paginate(20);
      $total=Score::where('scoreop2', '=', $event)
      ->where('scoreop3', '=', $category)->sum('percentscores');
    
        return view('event', compact('females','males','announcement','students','total','scores'));
    
  
    } 

    public function addcandidatesuser(Request $request){
     
       $announcement = Announcement::find(1);
       $candidates = new Tabulation();
   
       
       $candidates ->eventc = $announcement ->event1;
       $candidates ->candino = $request ->candino;
       $candidates ->namecan = $request ->namecan;
       
       $candidates ->currentc = $announcement->anountags1;
       $candidates ->agec = $request ->agec;
       $candidates ->deptc = $request ->deptc;
       $candidates ->gender = $request ->gender; 
       $candidates ->optionc = $announcement-> anountags4;  
       $candidates ->vpointsc = 0; 
       $candidates ->vscores = 0; 
       $candidates ->eventc = $announcement ->event1;
       
      

        $candidates->save();
       if($candidates){
        return back()->with('success','CANDIDATE ADDED');
       }else{
        return back()->with('fail','Something wrong');
       }
     }
     public function editcandidates($id)
     {
         $data= Tabulation::find($id);
         return view ('edit-candidates',['data'=>$data]);
 
     }

     public function updatecandidates(Request $request, $id){
      
        $candidate = Tabulation::find($id);
     
       $candidate->candino =$request->candino;
       $candidate->namecan =$request->namecan;
       $candidate->deptc =$request->deptc;
       $candidate->gender =$request->gender;
       $candidate->agec =$request->agec;
       $candidate->vpointsc =$request->vpointsc;
       $candidate->vscores =$request->vscores;
       $candidate->currentc =$request->CATEGORY; 
       if($candidate ->image == "default.jpg"){
      
        if($request->hasFile('image')){
          $destination='images/'.$candidate->image;
          if(File::exists($destination)){
            
          }
          $file=$request->file('image');
          $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('images/',$filename);
         $candidate->image = $filename;
        }
      }elseif($request->hasFile('image')){
        $destination='images/'.$candidate->image;
          if(File::exists($destination)){
          File::delete($destination);
          }
          $file=$request->file('image');
          $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('images/',$filename);
         $candidate->image = $filename;
      }
        $candidate->update();
        if($candidate){
          return back()->with('success','INFORMATION UPDATED');
         }else{
          return back()->with('fail','Something wrong');
         }
       
        }

        public function addcriteriauser(Request $request){

          $total1 = $request->total + $request->percent;

          if($total1 > 100 || $request->percent <= 0 && $request->deptc=="MAIN EVENT" || $request->deptc=="MINOR AWARDS" && $request->percent > 0 ){
            return back()->with('fail','CHECK THE CRITERIA');

          }else{
     
            $announcement = Announcement::find(1);
            $event= $announcement->event1;
            $category= $announcement->anountags1;

          $scores = new Score();
          $scores ->creteriascores = $request ->creteria;
          $scores ->percentscores = $request ->percent;
          $scores ->scoreop1 = $request ->deptc;
          $scores ->scoreop2 =  $event;
          $scores ->scoreop3 =  $category;

      
   
           $scores->save();
          if($scores){
           return back()->with('success','CRITERIA ADDED');
          }else{
           return back()->with('fail','Something wrong');
          }
        }
      }
      public function viewjudge(Request $req)
      {
        $search = $req->Name;
        $announcement = Announcement::find(1);
         $event= $announcement->event1;
         $category= $announcement->anountags1;

          $judges = Overallscore::where('namejudge', '=', $req->Name)
          ->where('overalltags', '=', $event )
        ->where('overalltags1', '=', $category)->paginate(30);


          $creteriscount = Overallscore::where('overalltags', '=', $event )
          ->where('overalltags1', '=', $category)
          ->where('namejudge', '=',$search)->count();

          return view('viewjudge', compact('judges','req','creteriscount'));
      }
      public function searchtally(Request $req){
        $announcement = Announcement::find(1);
        $event= $announcement->event1;
        $category= $announcement->anountags1;
        $namejudge = $req->Name;
        $searchcandi = $req->searchtally;
        $judges = Overallscore::where('namejudge', 'like', '%'.$namejudge.'%')
        ->where('namecandidates', 'like', '%'.$searchcandi.'%')
        ->where('overalltags1', '=', $category)
        ->where('overalltags', '=', $event )->paginate(30);
        $search = $req->Name;
        $creteriscount = Overallscore::where('overalltags', '=', $event )
          ->where('overalltags1', '=', $category)
          ->where('namejudge', '=',$search)->count();
        return view('viewjudge', compact('judges','req','creteriscount'));
    
       }
       public function viewtally(Request $req )
       {
        $data=Overallscore::find($req->id);
        $judge =$data ->namejudge;
        $candi =$data ->namecandidates;

        $announcement = Announcement::find(1);
         $event= $announcement->event1;
         $category= $announcement->anountags1;
          $creteris = Creteria::where('cricandidates', '=', $candi)
          ->where('crievent', '=', $event )
          ->where('critag', '=', $category)
          ->where('judgename', '=', $judge )->paginate(30);
          return view('viewtally', compact('creteris','data')); 
       }
     
   




//** ito pang view para sa student dashboad old candidates------------------------------------------ */

public function dashviewcandi(Request $request)
{

  $announcement = Announcement::find(1);
  $event= $announcement->event1;
  
  if($announcement->anountags4=="CLOSE VOTING"){
    return back()->with('fail','VOTING IS OFFICIALLY CLOSE');


  }else{
  $females = Tabulation::where('gender', '=', "FEMALE")->paginate(12);
  $males = Tabulation::where('gender', '=', "MALE")->paginate(12);

    return view('dashviewcandi', compact('females','males'));

  }
} 

public function adminoldcandidates(Request $request)
{


  $females = Tabulation::where('gender', '=', "FEMALE")->paginate(12);
  $males = Tabulation::where('gender', '=', "MALE")->paginate(12);

    return view('adminoldcandidates', compact('females','males'));


} 

public function votenow(Request $request)
{
  
  $announcement = Announcement::find(1);
  $event= $announcement->event1;
  
  $category= $announcement->anountags1;
  if($announcement->anountags4=="CLOSE VOTING"){
    return back()->with('fail','VOTING IS OFFICIALLY CLOSE');


  }else{
  if($announcement->anountags3=="MR AND MS INTRAMS"){
    return back()->with('fail','VOTING IS CLOSE THE EVENT IS MR AND MS INTRAMS');

  }else{
  $females = Tabulation::where('gender', '=', "FEMALE")
  ->where('eventc', '=', $event)
  ->where('currentc', '=', $category)
  ->orderBy('vpointsc','desc')->paginate(20);

  $males = Tabulation::where('gender', '=', "MALE")
     ->where('eventc', '=', $event)
     ->where('currentc', '=', $category )
     ->orderBy('vpointsc','desc')->paginate(20);
     return view('votenow', compact('females','males'));
    }
  }
} 
public function addvote($id){
  $vote= Tabulation::find($id);
  return view('addvote', compact('vote'));

 
}

public function castvote(Request $request, $id){
  $data= Student::where('id','=',\Session::get('loginId'))->first();
  $tabulates = Tabulation::find($id);


  $announcement = Announcement::find(1);

  if($announcement->anountags4=="CLOSE VOTING"){
      return back()->with('fail','VOTING IS CLOSE');
    }else{
      if($data->vote < $request->vpointsc || $request->vpointsc <= 0 ){
        return back()->with('fail','REQUEST DENIED CHECK YOUR LOAD/YOUR NUMBER ENTERED');
      }else{

       $minusan = $data->vote - $request->vpointsc;
       $data->vote =$minusan;
       $data->save();

       $candidates = new Passvote();
   
       
       $candidates ->votecandino = $request ->candino;
       $candidates ->votenamecan	 = $request ->namecan;
       $candidates ->votedeptc = "NO RECORDS";
       $candidates ->voteeventc = $request ->eventc;
    

       $candidates ->votevpointsc =$request ->vpointsc;  
       $candidates->save();
       $sumvote = Passvote::where('votenamecan', '=', $request->namecan)
       ->where('voteeventc', '=', $request->eventc)->sum('votevpointsc');
     
        $tabulates ->vpointsc = $sumvote;
      

        $tabulates->save();
      

        if($data && $tabulates && $candidates){
          return back()->with('success','Score Updated');
         }else{
          return back()->with('fail','Something wrong');
         }


      }

    }
  
}

public function adminvote(Request $request)
{
  $announcement = Announcement::find(1);
  $event= $announcement->event1;
  $openorclose = $announcement->anountags4;

if($openorclose=="CLOSE VOTING"){
  $totalvotesss = Tabulation::where('gender', '=', "FEMALE")
  ->where('eventc', '=', $event)
  ->where('optionc', '=', "CLOSE VOTING")->sum('vpointsc');
 

  $totalvotefemale = $totalvotesss;
  $totalvotesssm = Tabulation::where('gender', '=', "MALE")
  ->where('eventc', '=', $event)
  ->where('optionc', '=', "CLOSE VOTING")->sum('vpointsc');

  $totalvotemale = $totalvotesssm;

  $females = Tabulation::where('gender', '=', "FEMALE")
  ->where('eventc', '=', $event)
  ->where('optionc', '=', $openorclose)
  ->orderBy('vpointsc','desc')->paginate(20);

  $males = Tabulation::where('gender', '=', "MALE")
     ->where('eventc', '=', $event)
     ->where('optionc', '=', $openorclose )
     ->orderBy('vpointsc','desc')->paginate(20);

  return view('adminvote', compact('females','males','totalvotefemale','totalvotemale'));

}else{
 
  $totalvotesss = Tabulation::where('gender', '=', "FEMALE")
  ->where('eventc', '=', $event)->sum('vpointsc');
 

  $totalvotefemale = $totalvotesss;
  $totalvotesssm = Tabulation::where('gender', '=', "MALE")
  ->where('eventc', '=', $event)->sum('vpointsc');

  $totalvotemale = $totalvotesssm;

  $females = Tabulation::where('gender', '=', "FEMALE")
  ->where('eventc', '=', $event)
  ->orderBy('vpointsc','desc')->paginate(20);

  $males = Tabulation::where('gender', '=', "MALE")
     ->where('eventc', '=', $event)
     ->orderBy('vpointsc','desc')->paginate(20);
     return view('adminvote', compact('females','males','totalvotefemale','totalvotemale'));
} 
}
public function editvoteadmin($id){
  $vote= Tabulation::find($id);
  return view('editvoteadmin', compact('vote'));

 
}
public function editvote(Request $request, $id){
  $tabulates = Tabulation::find($id);

$tabulates->vpointsc = $request->vpointsc;
 
  $tabulates->save();
  if($tabulates){
    return back()->with('success','Score Updated');
   }else{
    return back()->with('fail','Something wrong');
   }

           

}
public function editcri($id)
{
    $data= Score::find($id);
    return view ('editcri',['data'=>$data]);

}
public function updatcritera1(Request $request)
{
         $announcement = Announcement::find(1);
         $event= $announcement->event1;
        $category= $announcement->anountags1;

          if($request->percent <= 0 && $request->scoreop1=="MAIN EVENT" || $request->scoreop1=="MINOR AWARDS" && $request->percent > 0 ){
            return back()->with('fail','CHECK THE CRITERIA');

          }else{
     
          $scores=Score::find($request->id);
          $scores ->creteriascores = $request ->creteria;
          $scores ->percentscores = $request ->percent;
          $scores->save();
          if($scores){
           return back()->with('success','CRITERIA UPDATED');
          }else{
           return back()->with('fail','Something wrong');
          }
        }
}
public function getwinner(Request $request)
    {
      $announcement = Announcement::find(1);
      $event= $announcement->event1;
      $category= $announcement->anountags1;
      $tops =  $announcement->anountags3;
     
   if($announcement->anountags3 =="MR AND MS ST ROSE COLLEGE"){

      $females = Tabulation::where('gender', '=', "FEMALE")
      ->where('eventc', '=', $event)
      ->where('currentc', '=', $category)
   ->orderBy('vscores','desc')->paginate(5);
      
      $males = Tabulation::where('gender', '=', "MALE")
         ->where('eventc', '=', $event)
         ->where('currentc', '=', $category )
         ->orderBy('vscores','desc')->paginate(5);
         

         $voteswinnerFs = Tabulation::where('gender', '=', "FEMALE")
         ->where('eventc', '=', $event)
         ->where('optionc', '=', "CLOSE VOTING")->paginate(1);

         $voteswinnerMs = Tabulation::where('gender', '=', "MALE")
         ->where('eventc', '=', $event)

         ->where('optionc', '=', "CLOSE VOTING")->paginate(1);
 
    
        return view('getwinner', compact('females','males','voteswinnerMs','voteswinnerFs'));
      }else{
        $females = Tabulation::where('gender', '=', "FEMALE")
        ->where('eventc', '=', $event)
        ->orderBy('vscores','desc')->paginate(3);
        
        $males = Tabulation::where('gender', '=', "MALE")
           ->where('eventc', '=', $event)
           ->orderBy('vscores','desc')->paginate(3);
          
           $voteswinnerFs = Tabulation::where('gender', '=', "FEMALE")
           ->where('eventc', '=', $event)
           ->where('optionc', '=', "CLOSE VOTING")->paginate(1);
  
           $voteswinnerMs = Tabulation::where('gender', '=', "MALE")
           ->where('eventc', '=', $event)
  
           ->where('optionc', '=', "CLOSE VOTING")->paginate(1);

           return view('getwinner', compact('females','males','voteswinnerMs','voteswinnerFs'));

      }
  
    } 



    public function voteleading(Request $request)
    {
      $announcement = Announcement::find(1);
      $event= $announcement->event1;
      $openorclose= $announcement->anountags4;
      
    $femalesvote = Tabulation::where('gender', '=', "FEMALE")
      ->where('eventc', '=', $event)
    ->max('vpointsc');

    $malesvote = Tabulation::where('gender', '=', "MALE")
  ->where('eventc', '=', $event)
->max('vpointsc');
  
$females = Tabulation::where('gender', '=', "FEMALE")
->where('eventc', '=', $event)
->where('vpointsc',$femalesvote)->paginate(1);

$males = Tabulation::where('gender', '=', "MALE")
   ->where('eventc', '=', $event)
   ->where('vpointsc',$malesvote)->paginate(1);


        return view('voteleading', compact('females','males'));
   
    
      
    
    } 


     public function updatetop($id)
     {

     
      $announcement = Announcement::find(1);
      $event=$announcement-> event1;
      $data=Tabulation::find($id);
      $data-> vscores;

      $countverifiyf = Tabulation::where('eventc', '=', $event )
      ->where('gender', '=', "FEMALE")
      ->where('currentc', '=', "NO RECORDS")->max('vscores');

      $countverifiym = Tabulation::where('eventc', '=', $event )
      ->where('gender', '=', "MALE")
      ->where('currentc', '=', "NO RECORDS")->max('vscores');

      $counttopf = Tabulation::where('eventc', '=', $event )
      ->where('gender', '=', "FEMALE")
      ->where('currentc', '=', "TOP 5")->count();
      
      $counttopm = Tabulation::where('eventc', '=', $event )
      ->where('gender', '=', "MALE")
      ->where('currentc', '=', "TOP 5")->count();

      $overalltop5 = Tabulation::where('eventc', '=', $event )
      ->where('currentc', '=', "TOP 5")->count();
      
      if($announcement->anountags3 =="MR AND MS ST ROSE COLLEGE" ){
           if($counttopf <=4 && $data-> vscores == $countverifiyf ){
              $data ->currentc = "TOP 5";
              $data ->vscores = 0;
              $data->save();
              $overalltop5 = Tabulation::where('eventc', '=', $event )
              ->where('currentc', '=', "TOP 5")->count();
              
                 if($overalltop5 == 10){
                   $data ->currentc = "TOP 5";
                   $data ->vscores = 0;
                   $data->save();
                   $announcement->save();
                   if($data && $announcement){
                     return back()->with('success','INFORMATION!! TOP 5');
                  }else{
                     return back()->with('fail','Something wrong');
                   }
                 }
              if($data){
                return back()->with('success','INFORMATION!! TOP 5');
             }else{
                return back()->with('fail','Something wrong');
              }
           
            }elseif($counttopm <=4 && $data->vscores == $countverifiym ){
              $data ->currentc = "TOP 5";
             $data ->vscores = 0;
             $data->save();
             $overalltop5 = Tabulation::where('eventc', '=', $event )
             ->where('currentc', '=', "TOP 5")->count();
             
                if($overalltop5 == 10){
                  $data ->currentc = "TOP 5";
                  $data ->vscores = 0;
                   $announcement-> anountags1= "TOP 5";

                  $data->save();
                  $announcement->save();
                  if($data && $announcement){
                    return back()->with('success','INFORMATION!! TOP 5');
                 }else{
                    return back()->with('fail','Something wrong');
                  }
                }
                if($data){
                  return back()->with('success','INFORMATION!! TOP 5');
               }else{
                  return back()->with('fail','Something wrong');
                }
     }else{
          return back()->with('fail','PLEASE CHOOSE THE FIRST ONE OR THE TOP 5 IS COMPLETED');
      }
   
    

    
      }else{
        return back()->with('fail','CLICK TOP 3 BUTTON TO GET WINNERS');
      }
    }
    public function minorawards(Request $request)
    {
      $announcement = Announcement::find(1);
      $event= $announcement->event1;
      $category= $announcement->anountags1;
      $tops =  $announcement->anountags3;

      $scores =  Score::where('scoreop1', '=',"MINOR AWARDS")
      ->where('scoreop2', '=',$event)->paginate(20);
     
      
      $malescores=  Score::where('scoreop1', '=',"MINOR AWARDS")
      ->where('scoreop2', '=',$event)->paginate(20);

      $minorawards =  Passvote::where('voteoptiona', '=',$event)
      ->orderBy('votevscores','desc')->paginate(10);

          return view('minorawards', compact('minorawards','scores','malescores'));
      }
  



      public function GETMINORWIN($id)
      {
        $scores = Score::find($id);
        $announcement = Announcement::find(1);
      $event= $announcement->event1;
      $category= $announcement->anountags1;
      $tops =  $announcement->anountags3;
      $scores->creteriascores;

    $maxminorfemale =  Creteria::where('crievent', '=',$event)
   ->where('crinotes', '=',"MINOR AWARDS")
   ->where('crioldoptiona', '=',"FEMALE")
   ->where('creteria', '=',$scores->creteriascores)->max('numberoption1');

   
   $findfemale =  Creteria::where('crievent', '=',$event)
   ->where('crinotes', '=',"MINOR AWARDS")
   ->where('crioldoptiona', '=',"FEMALE")
   ->where('numberoption1', '=',$maxminorfemale)
   ->where('creteria', '=',$scores->creteriascores)->first();

   $limitentryfemale =  Passvote::where('votecurrentc', '=',$findfemale ->cricandidates)
   ->where('voteoptiona', '=',$event)
   ->where('voteoptionb', '=',$findfemale ->creteria)->count();



  if($limitentryfemale ==1 ){
    return back()->with('fail','CHOOSE OTHER CRITERIA');
  }else{
   $minorfemlae = new Passvote();
   $minorfemlae ->votecandino = "THIS IS FOR MINOR";
   $minorfemlae ->votenamecan = "THIS IS FOR MINOR";
   $minorfemlae ->votedeptc = "THIS IS FOR MINOR";
   $minorfemlae ->voteeventc = "THIS IS FOR MINOR";

   $minorfemlae ->votecurrentc = $findfemale ->cricandidates;
   $minorfemlae ->voteoptiona =  $event;
   $minorfemlae ->voteoptionb =  $findfemale ->creteria; 
   $minorfemlae ->voteoptionc =$findfemale ->crioldoptiona; 
   $minorfemlae ->votevscores =  $findfemale ->numberoption1;
  
 
    $minorfemlae->save();
   if($minorfemlae ) {
    return back()->with('success','MINOR WINNER ADDED');
   }else{
    return back()->with('fail','Something wrong');
   }

     }
    }
    public function maleminor($id)
    {
      $scores = Score::find($id);
      $announcement = Announcement::find(1);
    $event= $announcement->event1;
    $category= $announcement->anountags1;
    $tops =  $announcement->anountags3;
    $scores->creteriascores;

    $malemaxminor =  Creteria::where('crievent', '=',$event)
    ->where('crinotes', '=',"MINOR AWARDS")
    ->where('crioldoptiona', '=',"MALE")
    ->where('creteria', '=',$scores->creteriascores)->max('numberoption1');

 
    $malefind =  Creteria::where('crievent', '=',$event)
    ->where('crinotes', '=',"MINOR AWARDS")
    ->where('crioldoptiona', '=',"MALE")
    ->where('numberoption1', '=',$malemaxminor)
    ->where('creteria', '=',$scores->creteriascores)->first();

    $limitentrymale =  Passvote::where('votecurrentc', '=',$malefind->cricandidates)
    ->where('voteoptiona', '=',$event)
    ->where('voteoptionb', '=',$malefind ->creteria)->count();



if($limitentrymale ==1 ){
  return back()->with('fail','CHOOSE OTHER CRITERIA');
}else{
  $maleminor = new Passvote();
  $maleminor ->votecandino = "THIS IS FOR MINOR";
  $maleminor ->votenamecan = "THIS IS FOR MINOR";
  $maleminor ->votedeptc = "THIS IS FOR MINOR";
  $maleminor ->voteeventc = "THIS IS FOR MINOR";

  $maleminor ->votecurrentc = $malefind ->cricandidates;
  $maleminor ->voteoptiona =  $event;
  $maleminor ->voteoptionb =  $malefind ->creteria; 
  $maleminor ->voteoptionc =$malefind ->crioldoptiona; 
  $maleminor ->votevscores =  $malefind ->numberoption1;
  $maleminor->save();
 if($malefind ) {
  return back()->with('success','MINOR WINNER ADDED');
 }else{
  return back()->with('fail','Something wrong');
 }

   }
  }


  public function updatewinners($id)
  {

  
   $announcement = Announcement::find(1);
   $event=$announcement-> event1;
   $data=Tabulation::find($id);
   $data-> vscores;

  
   if($data->vscores <=70){
    return back()->with('fail','CHECK THE JUDGE IF THEY SUBMITTED THEIR SCORES');
   }else{

   
   if( $announcement-> anountags3=="MR AND MS INTRAMS" && $announcement->anountags1 =="NO RECORDS" ){
    $countverifiyf3 = Tabulation::where('eventc', '=', $event )
     ->where('gender', '=', "FEMALE")
     ->where('optionb', '=', "NO RECORDS")->max('vscores');

     $countverifiym3 = Tabulation::where('eventc', '=', $event )
     ->where('gender', '=', "MALE")
     ->where('optionb', '=', "NO RECORDS")->max('vscores');

     $femalewinner = Tabulation::where('eventc', '=', $event )
     ->where('gender', '=', "FEMALE")
     ->where('optionb', '=', $event)->count();
     $firstfemale = Tabulation::where('eventc', '=', $event )
     ->where('gender', '=', "FEMALE")
     ->where('optionb', '=', "1st RUNNER UP")->count();
     $secondfemale = Tabulation::where('eventc', '=', $event )
       ->where('gender', '=', "FEMALE")
         ->where('optionb', '=', "2nd RUNNER UP")->count();
     $malewinner = Tabulation::where('eventc', '=', $event )
     ->where('gender', '=', "MALE")
     ->where('optionb', '=', $event)->count();
     $malefirst = Tabulation::where('eventc', '=', $event )
     ->where('gender', '=', "MALE")
     ->where('optionb', '=', "1st RUNNER UP")->count();
     $malesecond = Tabulation::where('eventc', '=', $event )
       ->where('gender', '=', "MALE")
         ->where('optionb', '=', "2nd RUNNER UP")->count();


 if($data->gender =="FEMALE" && $femalewinner ==0  &&  $data-> vscores == $countverifiyf3
       || $data->gender =="MALE" && $malewinner ==0  &&  $data-> vscores == $countverifiym3 ){
       
     $data ->optionb = $event;
     
      $data->save();

           if($data){
             return back()->with('success','INFORMATION!! WINNER UPDATED');
          }else{
             return back()->with('fail','Something wrong');
           }
    }elseif($data->gender =="FEMALE" && $femalewinner ==1 && $firstfemale== 0  &&  $data-> vscores == $countverifiyf3 
    || $data->gender =="MALE" && $malewinner ==1 && $malefirst== 0  &&  $data-> vscores == $countverifiym3 ){
       
     $data ->optionb = "1st RUNNER UP";
   
         $data->save();
    
          $announcement->save();
          if($data){
            return back()->with('success','INFORMATION!! 1st RUNNER UP UPDATED');
         }else{
            return back()->with('fail','Something wrong');
          }
        
       }elseif($data->gender =="FEMALE" && $femalewinner ==1 && $firstfemale== 1 &&  $secondfemale== 0 &&  $data-> vscores == $countverifiyf3 
       || $data->gender =="MALE" && $malewinner ==1 && $malefirst== 1 && $malesecond== 0  &&  $data-> vscores == $countverifiym3 ){
         
         $data ->optionb = "2nd RUNNER UP";
   
         $data->save();
    
          $announcement->save();
          if($data){
            return back()->with('success','INFORMATION!! 2nd RUNNER UP UPDATED');
         }else{
            return back()->with('fail','Something wrong');
          }
        }elseif( $femalewinner ==1 && $firstfemale== 1   &&  $secondfemale== 1
        || $malewinner ==1 && $malefirst== 1  && $malesecond== 1 ){
         
          return back()->with('fail','ACCESS DENIED THE WINNER IS COMPLETED');
        }
         else{
          return back()->with('fail','ACCESS DENIED CHOOSE THE HIGHEST SCORE IN TAGS NO RECORDS');
        }
       
  }elseif($announcement-> anountags3=="MR AND MS ST ROSE COLLEGE" && $announcement->anountags1 =="TOP 5" ){
    $countverifiyf3 = Tabulation::where('eventc', '=', $event )
    ->where('gender', '=', "FEMALE")
    ->where('currentc', '=', "TOP 5")
    ->where('optionb', '=', "NO RECORDS")->max('vscores');

     $countverifiym3 = Tabulation::where('eventc', '=', $event )
     ->where('gender', '=', "MALE")
     ->where('currentc', '=', "TOP 5")
     ->where('optionb', '=', "NO RECORDS")->max('vscores');

     $femalewinner = Tabulation::where('eventc', '=', $event )
   ->where('gender', '=', "FEMALE")
     ->where('optionb', '=', $event)->count();
     $firstfemale = Tabulation::where('eventc', '=', $event )
     ->where('gender', '=', "FEMALE")
     ->where('optionb', '=', "1st RUNNER UP")->count();
     $secondfemale = Tabulation::where('eventc', '=', $event )
       ->where('gender', '=', "FEMALE")
         ->where('optionb', '=', "2nd RUNNER UP")->count();
     $malewinner = Tabulation::where('eventc', '=', $event )
     ->where('gender', '=', "MALE")
     ->where('optionb', '=', $event)->count();
     $malefirst = Tabulation::where('eventc', '=', $event )
     ->where('gender', '=', "MALE")
     ->where('optionb', '=', "1st RUNNER UP")->count();
     $malesecond = Tabulation::where('eventc', '=', $event )
       ->where('gender', '=', "MALE")
         ->where('optionb', '=', "2nd RUNNER UP")->count();


 if($data->gender =="FEMALE" && $femalewinner ==0  &&  $data-> vscores == $countverifiyf3
       || $data->gender =="MALE" && $malewinner ==0  &&  $data-> vscores == $countverifiym3 ){
       
     $data ->optionb = $event;
     
      $data->save();

           if($data){
             return back()->with('success','INFORMATION!! WINNER UPDATED');
          }else{
             return back()->with('fail','Something wrong');
           }
    }elseif($data->gender =="FEMALE" && $femalewinner ==1 && $firstfemale== 0  &&  $data-> vscores == $countverifiyf3 
    || $data->gender =="MALE" && $malewinner ==1 && $malefirst== 0  &&  $data-> vscores == $countverifiym3 ){
       
     $data ->optionb = "1st RUNNER UP";
   
         $data->save();
    
          $announcement->save();
          if($data){
            return back()->with('success','INFORMATION!! 1st RUNNDER UP UPDATED');
         }else{
            return back()->with('fail','Something wrong');
          }
        
       }elseif($data->gender =="FEMALE" && $femalewinner ==1 && $firstfemale== 1 &&  $secondfemale== 0 &&  $data-> vscores == $countverifiyf3 
       || $data->gender =="MALE" && $malewinner ==1 && $malefirst== 1 && $malesecond== 0  &&  $data-> vscores == $countverifiym3 ){
         
         $data ->optionb = "2nd RUNNER UP";
   
         $data->save();
    
          $announcement->save();
          if($data){
            return back()->with('success','INFORMATION!! 2nd RUNNER UP UPDATED');
         }else{
            return back()->with('fail','Something wrong');
          }
        }elseif( $femalewinner ==1 && $firstfemale== 1   &&  $secondfemale== 1
        || $malewinner ==1 && $malefirst== 1  && $malesecond== 1 ){
         
          return back()->with('fail','ACCESS DENIED THE WINNER IS COMPLETED');
        }
         else{
          return back()->with('fail','ACCESS DENIED CHOOSE THE HIGHEST SCORE IN TAGS NO RECORDS');
        }
       
   }elseif($announcement-> anountags3=="MR AND MS ST ROSE COLLEGE" && $announcement->anountags1 =="NO RECORDS"){
    return back()->with('fail','ACCESS DENIED TOP 5 FIRST');

   }


    
   }
  }
 
 }
 
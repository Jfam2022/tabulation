<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Student;

class AlreadyLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(\Session::has('loginId')){
            $data = array();
            $data= Student::where('id','=',\Session::get('loginId'))->first();
            if(($data->role == "ADMIN") && (url('dashboard')==$request->url() ||url('loadingprofile')==$request->url()
            ||url('judgeprofile')==$request->url()||url('masterceremony')==$request->url()
            ||url('advertisement')==$request->url()||url('showload1')==$request->url()
            ||url('home')==$request->url()||url('login')==$request->url()
            ||url('loadingdata')==$request->url()||url('addvote')==$request->url()
            ||url('votenow')==$request->url()||url('dashviewcandi')==$request->url()
            ||url('changepass')==$request->url()||url('masterminors')==$request->url()
            ||url('judgegetcandidates')==$request->url()||url('givescore')==$request->url())){
                return back()->with('fail','ACCESS DENIED.');
            }
            elseif(($data->role == "STUDENT") && (url('admin')==$request->url()  ||url('loadingprofile')==$request->url()
            ||url('judgeprofile')==$request->url()||url('masterceremony')==$request->url()
            ||url('advertisement')==$request->url()
            ||url('home')==$request->url()||url('login')==$request->url()
            ||url('announcement')==$request->url()||url('adminvote')==$request->url()
            ||url('voteleading')==$request->url()||url('event')==$request->url()
            ||url('viewjudge')==$request->url()||url('minorawards')==$request->url()
            ||url('getwinner')==$request->url()||url('editcri')==$request->url()
            ||url('income')==$request->url()||url('admineditincome')==$request->url()
            ||url('usereditincomeadmin')==$request->url()||url('adminoldcandidates')==$request->url()
            ||url('loadingdata')==$request->url()||url('showload1')==$request->url()
            ||url('masterminors')==$request->url()||url('judgegetcandidates')==$request->url()
            ||url('givescore')==$request->url())){
                return back()->with('fail','ACCESS DENIED.');
            }
            elseif(($data->role == "FOR LOAD") && (url('admin')==$request->url() ||url('dashboard')==$request->url()
            ||url('judgeprofile')==$request->url()||url('masterceremony')==$request->url()
            ||url('advertisement')==$request->url() ||url('home')==$request->url()||url('login')==$request->url()
            ||url('announcement')==$request->url()||url('adminvote')==$request->url()
            ||url('voteleading')==$request->url()||url('event')==$request->url()
            ||url('viewjudge')==$request->url()||url('minorawards')==$request->url()
            ||url('getwinner')==$request->url()||url('editcri')==$request->url()
            ||url('income')==$request->url()||url('admineditincome')==$request->url()
            ||url('usereditincomeadmin')==$request->url()||url('adminoldcandidates')==$request->url()
            ||url('votenow')==$request->url()||url('addvote')==$request->url()
            ||url('dashviewcandi')==$request->url()||url('changepass')==$request->url()
            ||url('masterminors')==$request->url()||url('judgegetcandidates')==$request->url()
            ||url('givescore')==$request->url())){
                return back()->with('fail','ACCESS DENIED.');
            }
            elseif(($data->role == "JUDGE") && (url('admin')==$request->url() ||url('dashboard')==$request->url()
            ||url('masterceremony')==$request->url()||url('loadingprofile')==$request->url()
            ||url('advertisement')==$request->url() ||url('home')==$request->url()||url('login')==$request->url()
            ||url('announcement')==$request->url()||url('adminvote')==$request->url()
            ||url('voteleading')==$request->url()||url('event')==$request->url()
            ||url('viewjudge')==$request->url()||url('minorawards')==$request->url()
            ||url('getwinner')==$request->url()||url('editcri')==$request->url()
            ||url('income')==$request->url()||url('admineditincome')==$request->url()
            ||url('usereditincomeadmin')==$request->url()||url('adminoldcandidates')==$request->url()
            ||url('votenow')==$request->url()||url('addvote')==$request->url()
            ||url('dashviewcandi')==$request->url()||url('changepass')==$request->url()
            ||url('masterminors')==$request->url()||url('showload1')==$request->url()
            ||url('loadingdata')==$request->url())){
                return back()->with('fail','ACCESS DENIED.');

            }elseif(($data->role == "MASTER CEREMONY") && (url('admin')==$request->url() ||url('dashboard')==$request->url()
            ||url('loadingprofile')==$request->url()||url('advertisement')==$request->url()||
            url('judgeprofile')==$request->url() ||url('home')==$request->url()||url('login')==$request->url()
            ||url('announcement')==$request->url()||url('adminvote')==$request->url()
            ||url('voteleading')==$request->url()||url('event')==$request->url()
            ||url('viewjudge')==$request->url()||url('minorawards')==$request->url()
            ||url('getwinner')==$request->url()||url('editcri')==$request->url()
            ||url('income')==$request->url()||url('admineditincome')==$request->url()
            ||url('usereditincomeadmin')==$request->url()||url('adminoldcandidates')==$request->url()
            ||url('votenow')==$request->url()||url('addvote')==$request->url()
            ||url('dashviewcandi')==$request->url()||url('changepass')==$request->url()
            ||url('judgegetcandidates')==$request->url()||url('showload1')==$request->url()
            ||url('loadingdata')==$request->url()||url('givescore')==$request->url())){
                return back()->with('fail','ACCESS DENIED.');
            }
            elseif(($data->role == "advertisement") && (url('admin')==$request->url() ||url('dashboard')==$request->url()
            ||url('loadingprofile')==$request->url()||url('judgeprofile')==$request->url()||
            url('masterceremony')==$request->url() ||url('home')==$request->url()||url('login')==$request->url()
            ||url('announcement')==$request->url()||url('adminvote')==$request->url()
            ||url('voteleading')==$request->url()||url('event')==$request->url()
            ||url('viewjudge')==$request->url()||url('minorawards')==$request->url()
            ||url('getwinner')==$request->url()||url('editcri')==$request->url()
            ||url('income')==$request->url()||url('admineditincome')==$request->url()
            ||url('usereditincomeadmin')==$request->url()||url('adminoldcandidates')==$request->url()
            ||url('votenow')==$request->url()||url('addvote')==$request->url()
            ||url('dashviewcandi')==$request->url()||url('changepass')==$request->url()
            ||url('judgegetcandidates')==$request->url()||url('showload1')==$request->url()
            ||url('loadingdata')==$request->url()||url('givescore')==$request->url())){
                return back()->with('fail','ACCESS DENIED.');
            }
            
      
        } elseif(!Session()->has('loginId')){
            return back()->with('fail','You Have To login First.');

                
                }
        return $next($request)->header('Cache-Control','no-cache,no-store,max-age=0, must-revalidate')
        -> header('Pragma','no-cache')
        ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
    }
}

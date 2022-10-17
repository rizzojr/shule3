<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use App\Models\CorrectAnswer;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\Post;
use App\Models\Event;
use App\Models\Coze;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    //

      public function contact_function()
      {

        $contacts = Contact::all();
        return view('layouts.topheader',compact('contacts'));
       // $contacts = Contact::all();
       // return view('layouts.topheader', compact('contacts'));
      }

      public function coze_function(){
        $cozes = Coze::all();
        return view('frontend.index', compact('cozes'));
      }

      public function about_function(){
        $abouts = About::all();
        return view('frontend.about', compact('abouts'));
      }

      public function contact_functionii()
      {

        $contacts = Contact::all();
        return view('layouts.footer',compact('contacts'));
       // $contacts = Contact::all();
       // return view('layouts.topheader', compact('contacts'));
      }

        public function index()
        {

            //$contacts = Contact::all();
            return view('frontend.index');

        }

        public function aboutUs()
        {

            return view('frontend.about');

        }
        public function coursesf()
        {

            return view('frontend.courses');

        }

        public function quizf()
        {

            $quizzes = Quiz::get();

            return view('frontend.quiz',compact('quizzes'));

        }


        public function Viewquestions($quiz_id)
        {

           $data = Quiz::where('id',$quiz_id)->first();
          // return $data;
           
           return view('frontend.quizestart',compact('data',$i = 0));

        }

        public function checkanswers(Request $request,$quiz_id)
        {
           $results=[];
           $quiz = Quiz::where('id',$quiz_id)->first();
           foreach ($quiz->questions as  $question) {
           $correctAns = CorrectAnswer::where('question_id',$question->id)->first();
                  if ($correctAns->answer_id != $request->questionAns[$question->id]) {
                    
                     $results[$question->id] = 'incorrect';
                    
                  }else {
                    
                    $results[$question->id] = 'correct';
                  }          
                
           }
            return view('frontend.response',['results'=>$results,'questionAns'=>$request->questionAns,'i'=>0,'questions'=>$quiz->questions]);
        }




        public function eventf()
        {
            $events = Event::get();
            return view('frontend.events', compact('events'));

        }


        public function contactf()
        {

            return view('frontend.contact');

        }

        public function blogf()
        {
            $posts = Post::get();
            return view('frontend.blog', compact('posts'));


        }

        public function instructorf()
        {

            return view('frontend.instructor');

        }

        public function faqf()
        {

            return view('frontend.faq');

        }

        public function forumf()
        {

            return view('frontend.forum');

        }

        public function membershipf()
        {

            return view('frontend.membership');

        }


        public function four()
        {

            return view('frontend.four');

        }


        public function logins()
        {

            return view('auth.login');

        }

        public function registers()
        {

            return view('auth.register');
        }

        public function quizes(){
            return view('frontend.quize-single');
        }

        public function quizestart(){
            return view('frontend.quizestart');
        }


        public function save(Request $request)
        {

           // return $request->input();

           //validate request
           $request -> validate([

            'uname'=>'required',
            'email'=> 'required|email',
            'message'=>'required',


           ]);

           //insert data to database
           $enquiry = new Enquiry;
           $enquiry -> name = $request ->uname;
           $enquiry -> email = $request ->email;
           $enquiry -> message = $request ->message;
           $save=$enquiry->save();

           if($save){
            return back()->with('success', 'you have successfull sent your enquiry!!');

           }else{
            return back()->with('fail', 'something went wrong, please try again');
           }

        }


         /*
        public function check(Request $request)
        {
             //return $request->input();

            //validate
               $request -> validate([

                'email'=> 'required|email',
                'password'=>'required|min:5|max:12',


               ]);

               $userInfo = Admin::where('email', '=', $request->email)->first();

               if(!$userInfo){
                return back()->with('fail', 'we do not recognize your email');

               }else{
                //check password
                if (Hash::check($request->password, $userInfo->password)){
                    $request->session()->put('LoggedUser', $userInfo->id);
                    return redirect ('/admin');

                }else{
                    return back()->with('fail', 'incorect password');
                }
               }

        }
        function logout(){
            if (session()->has('LoggedUser')){
                session()->pull('LoggedUser');
                return redirect('/auth/login');
            }

        }

        function dashboard(){
            $data = ['LoggedUserInfo'=>Admin::where('id', '=', session('LoggedUser'))->first()];
            return view('admin.dashboard', $data);
        }*/

}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use App\Models\CorrectAnswer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class QuizController extends Controller
{
    //
    public function index(Request $request)
    {
        $quizzes = Quiz::all();
        $i = 0;
        return view('admin.Quiz.index2',compact('quizzes','i'));
        
    }

    public function updatequiz($quiz_id)
    {

           $quiz = Quiz::where('id',$quiz_id)->first();
           return view('admin.Quiz.edit-quiztittle',compact('quiz',$quiz));
        
    }

    public function editquiz(Request $request,$quiz_id)
    {
        $validate = $request->validate([
            'quiz'=>'required',
        ]);
       
        $question = Quiz::where('id',$quiz_id)->first();
        $question->update([
            'quiz'=>$validate['quiz'],
        ]);
        return redirect('admin/quiz');
        
    }
    


    public function show($id) {

            $data =Quiz::where('id',$id)->first();
            return view('admin.Quiz.show2',['data'=>$data,'i'=>1]);

    }

    public function create(Request $request)
    {
        return view('admin.Quiz.create2');
    }
    public function store(Request $request)
    {
        
         //Get Request Data
         $data = $request->all();
         //Create Quiz instance
         $quiz = new Quiz;
         $quiz->user_id = Auth::user()->id;
         $quiz->quiz = $data['quiz-name'];  
         $quiz->save();
         //Create Question Instance
         foreach ($data['question'] as $question_key => $question) {
             $question_instance = new Question;
             $question_instance->quiz_id = $quiz->id;
             $question_instance->question = $question['question-text'];
             $question_instance->save();
             //Create Answer Instance
             foreach ($question['answers'] as $answer_key => $answer ) {
                 if($answer_key != "is_correct") {
                    // var_dump($answer_key);
                     $answer_instance = new Answer;
                     $answer_instance->question_id = $question_instance->id;
                     $answer_instance->answer = $answer;
                     $answer_instance->save();
                 }
                 if($answer_key == 'is_correct'){
                     //Create CorrectAnswer instance
                     $correct_answer = CorrectAnswer::create(['question_id' => $question_instance->id, 'answer_id' => $answer_instance->id ]);
                 }
             }
         }

         $quizzes = Quiz::all();

         return redirect('admin/quiz')-> with('message', 'Quiz Added Successfully');
        //  $quizzes = Quiz::all();
        //  return view('quizzes.index', compact('quizzes'));


    }
 
    public function edit($q_id)
    {
        $i= $q_id;
        $question = Question::where('id',$q_id)->first();
        $answer = Answer::where('question_id',$q_id)->first();
        //return $question;
        return view('admin.Quiz.edit2', ['question'=>$question]);
    }

    public function update(Request $request, $question_id)
    {
            $validate = $request->validate([
                'question'=>'required',
                'correctAnswer'=>'required'
            ]);
           
            $question = Question::where('id',$question_id)->first();
            $question->update([
                'question'=>$validate['question'],
            ]);
            
                //Create Answer Instance

                    foreach($request->answer as $key => $a){
                        $answ = Answer::find($key);
                        $answ->update([
                            'answer'=>$a
                        ]);
                    
                  } 

        $question = correctAnswer::where('question_id',$question_id)->first();
        $question->update([
            'answer_id'=>$validate['correctAnswer'],
        ]);
                  return redirect()->back();
    }

    public function destroy($question_id)
    {
      $question = Question::where('id',$question_id)->first();
      if($question)
      {
         $question ->delete();
         return redirect('admin/quiz')-> with('message', 'Category Deleted Successfully');
      }
      else
      {
        return redirect('admin/quiz')-> with('message', 'No Category Id Found!!');
      }
    }

    public function destroyquiz($quiz_id)
    {
      $quiz = Quiz::where('id',$quiz_id)->first();
      if($quiz)
      {
         $quiz ->delete();
         return redirect()->back()-> with('message', 'Category Deleted Successfully');;
        //  return redirect('admin/quiz')-> with('message', 'Category Deleted Successfully');
      }
      else
      {
        return redirect()->back()-> with('message', 'No Category Id Found!!');
        //return redirect('admin/quiz')-> with('message', 'No Category Id Found!!');
      }
    }
}

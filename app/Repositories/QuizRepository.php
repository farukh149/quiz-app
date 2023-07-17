<?php

namespace App\Repositories;

use App\Models\Quiz;
use App\Models\MCQ;

class QuizRepository
{
    public function createQuiz(array $data)
    {
        $email = $data['email'];
        unset($data['email']);
        $totalAnswered = count($data);
        $totalCorrect = $this->countScore($data);
        return Quiz::create(['email' => $email,'total_answered_mcq' => $totalAnswered ,'total_correct_answer' => $totalCorrect]);
    }

    protected function countScore($data){
        $totalCorrect = 0;
        foreach ($data as $key => $value) {
            $correctAns = MCQ::where('id',$key)->first()->correct_answer_no;
            if($correctAns == $value){
                $totalCorrect++;
            } 
        }
       return $totalCorrect;
    }
    

    public function getScore($id)
    {
        return Quiz::where('id',$id)->first();
    }

}

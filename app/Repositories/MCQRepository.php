<?php

namespace App\Repositories;

use App\Models\MCQ;
use App\Models\Option;


class MCQRepository
{
    public function createMCQ(array $data)
    {
        $mcq = MCQ::create([
                                'question' => $data['question'],
                                'correct_answer_no' => $data['correct_answer_no'],
                            ]);
        if($mcq){
            return Option::create([
                'question_id'  => $mcq->id,
                'option_1'      => $data['option_1'],
                'option_2'      => $data['option_2'],
                'option_3'      => $data['option_3'],
                'option_4'      => $data['option_4'],
            ]);
        }                    
    }

    public function getMCQS()
    {
        return MCQ::with('options')->get();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Requests\QuizRequest;
use App\Repositories\QuizRepository;

class QuizController extends Controller
{

    protected $quizRepository;

    public function __construct(QuizRepository $quizRepository)
    {
        $this->quizRepository = $quizRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $mcqs = $this->quizRepository->getMCQS();
            return view('admin.mcqs.index',compact('mcqs'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mcqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuizRequest $request)
    {
        try {
            $data  = $request->except('_token');
            $id = $this->quizRepository->createQuiz($data);
            return redirect()->route('quiz.show',$id)->with('success', 'Quiz Submitted');  
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $result = $this->quizRepository->getScore($id);
            return view('admin.mcqs.result',compact('result'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

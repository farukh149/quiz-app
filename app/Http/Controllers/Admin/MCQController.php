<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Requests\MCQRequest;
use App\Repositories\MCQRepository;

class MCQController extends Controller
{

    protected $mcqRepository;

    public function __construct(MCQRepository $mcqRepository)
    {
        $this->mcqRepository = $mcqRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // try {
            $mcqs = $this->mcqRepository->getMCQS();
            return view('admin.mcqs.index',compact('mcqs'));
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error', 'Something went wrong');
        // }
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
    public function store(MCQRequest $request)
    {
        // try {
            $data  = $request->except('_token');
            $this->mcqRepository->createMCQ($data);
            return redirect()->back()->with('success', 'MCQ saved');  
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error', 'Something went wrong');
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

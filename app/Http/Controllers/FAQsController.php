<?php

namespace App\Http\Controllers;

use App;
use App\FAQ;
use Illuminate\Http\Request;

class FAQsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $faqs = FAQ::latest()->paginate(5);
  
        return view('faqs.index',compact('faqs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize('create', FAQ::class);
        
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        FAQ::create($request->all());
   
        return redirect()->route('faqs.index')
                        ->with('success','FAQ created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show(FAQ $faq)
    {
        $this->authorize('view', $faq);
        
        return view('faqs.show',compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQ $faq)
    {
        return view('faqs.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQ $faq)
    {
        $this->authorize('update', $faq);
        
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
  
        $faq->update($request->all());
  
        return redirect()->route('faqs.index')
                        ->with('success','FAQ updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQ $faq)
    {
        $this->authorize('update', $faq);
        
        $faq->delete();
  
        return redirect()->route('faqs.index')
                        ->with('success','Product deleted successfully');
    }
}

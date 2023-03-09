<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class FaqController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function index()
    {
        $faqs = Faq::where('published', '=', '1')->get();

        return view('index', [
            'faqs' => $faqs,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function create()
    {
        return view('faq.create');
    }

    /**
     * @param Request $request
     * @return Application|\Illuminate\Contracts\Foundation\Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'published' => $request->has('published'),
        ]);

        return redirect('faq');
    }
}

<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminFaqInterface;
use App\Http\Traits\FaqTrait;
use App\Models\Faq;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminFaqRepository implements AdminFaqInterface
{
    private $faqModel;
    use FaqTrait;
    public function __construct(Faq $faq)
    {
        $this->faqModel = $faq;
    }

    public function index()
    {
        $faqs = $this->getFaqs();
        return view('admin.pages.faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.pages.faq.create');
    }

    public function store($request)
    {
        $this->faqModel::create([
            'question' => $request->question,
            'answer' => $request->answer
        ]);
        Alert::toast('Faq Was Created Successfully', 'success');
        return redirect(route('admin.faq.index'));
    }

    public function delete($request): RedirectResponse
    {
        $this->findFaqById($request->id)->delete();
        Alert::toast('Faq Was Deleted Successfully', 'success');
        return back();
    }

    public function edit($request)
    {
        $faq = $this->findFaqById($request->id);
        return view('admin.pages.faq.edit', compact('faq'));
    }

    public function update($request)
    {
        $this->findFaqById($request->id)->update([
            'question' => $request->question,
            'answer' => $request->answer
        ]);
        Alert::toast('Faq Was Updated Successfully', 'success');
        return redirect(route('admin.faq.index'));
    }
}

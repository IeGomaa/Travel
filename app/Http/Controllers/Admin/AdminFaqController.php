<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminFaqInterface;
use App\Http\Requests\Admin\Faq\CheckFaqIdRequest;
use App\Http\Requests\Admin\Faq\CreateFaqRequest;
use App\Http\Requests\Admin\Faq\UpdateFaqRequest;

class AdminFaqController extends Controller
{
    private $faqInterface;
    public function __construct(AdminFaqInterface $faqInterface)
    {
        $this->faqInterface = $faqInterface;
    }

    public function index()
    {
        return $this->faqInterface->index();
    }

    public function create()
    {
        return $this->faqInterface->create();
    }

    public function store(CreateFaqRequest $request)
    {
        return $this->faqInterface->store($request);
    }

    public function delete(CheckFaqIdRequest $request)
    {
        return $this->faqInterface->delete($request);
    }

    public function edit(CheckFaqIdRequest $request)
    {
        return $this->faqInterface->edit($request);
    }

    public function update(UpdateFaqRequest $request)
    {
        return $this->faqInterface->update($request);
    }
}

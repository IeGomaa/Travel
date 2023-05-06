<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminContactInterface;
use App\Http\Traits\ContactTrait;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class AdminContactRepository implements AdminContactInterface
{
    private $contactModel;
    use ContactTrait;
    public function __construct(Contact $contact)
    {
        $this->contactModel = $contact;
    }

    public function index()
    {
        $contacts = $this->getContacts();
        return view('admin.pages.contact.index', compact('contacts'));
    }

    public function delete($request): RedirectResponse
    {
        $this->findContactById($request->id)->delete();
        Alert::toast('Contact Was Deleted Successfully', 'success');
        return back();
    }
}

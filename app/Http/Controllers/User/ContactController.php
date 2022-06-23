<?php

namespace App\Http\Controllers\User;

use App\Facades\ZohoApi;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddContact;

class ContactController extends Controller
{

    public function index()
    {
        $data = ZohoApi::showContacts();

        return view('user.page.contact.index', $data->json());
    }

    public function add()
    {
        $data = [];

        return view('user.page.contact.add', $data);
    }

    public function create(AddContact $request)
    {
        $data = $request->all();
        $response = ZohoApi::createContacts(
            [
                [
                    'First_Name' => $data['first_name'] ,
                    'Last_Name' => $data['last_name'],
                    'Company' => $data['company'],
                    'Email' => $data['email'],
                    'State' => $data['state'],
                ]
            ]
        );

        if ($response->status() == 201) {
            return redirect()
                ->route('home')
                ->with('status', "new contact was create");
        } else {
            return back()
                ->withInput()
                ->with('status', $response->body());
        }
    }
}

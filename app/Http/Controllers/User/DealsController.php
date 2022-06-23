<?php

namespace App\Http\Controllers\User;

use App\Facades\ZohoApi;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddDeal;

class DealsController extends Controller
{

    public function add()
    {
        $data = [
            'contacts' => ZohoApi::selectContacts(),
        ];

        return view('user.page.deals.add', $data);
    }

    public function create(AddDeal $request)
    {
        $data = $request->all();
        $response = ZohoApi::createDeals(
            [
                [
                    'Owner' => [
                        'id' => "479071000000310001"
                    ],
                    'Account_Name' => [
                        "id" => "479071000000317097"
                    ],
                    'Contact_Name' => [
                        'id' => $data['contact']
                    ],
                    'Deal_Name' => $data['deal_name'],
                    'Amount' => $data['amount'],
                    'Type' => $data['type'],
                    'Next_Step' => $data['next_step'],
                    'Stage' =>  $data['stage'],
                    'Lead_Source' => $data['lead_source'],
                    'Closing_Date' =>  $data['closing_date'],
                    'Description' => $data['description'],
                ]
            ]
        );
        $resp = current($response->json('data'));

        if (isset($resp['status']) && $resp['status'] == 'success') {
            return redirect()
                ->route('home')
                ->with('status', "new deal was create");
        } else {
            return back()
                ->withInput()
                ->with('status', $response->body());
        }

    }
}

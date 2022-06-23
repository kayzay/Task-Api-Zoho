<?php


namespace App\Services;


use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use function Symfony\Component\String\ignoreCase;

class Zoho
{

    private $apiDomain, $clientID, $clientSecret, $expiresIn,
            $accessToken, $refreshToken, $headers;

    public function __construct(array $config = [])
    {
        $config = empty($config) ? config('zoho') : $config;

        $this->clientID = $config['clientID'];
        $this->clientSecret = $config['clientSecret'];
        $this->apiDomain = $config['apiDomain'];
        $this->refreshToken = $config['refreshToken'];
        $this->expiresIn = $config['expiresIn'];

        if (!cache()->has('zoho.refreshToken')) {
            $this->tokenRefresh();
        }

        $this->accessToken = cache()->get('zoho.refreshToken');
        $this->headers = [
            "Authorization" => "Zoho-oauthtoken {$this->accessToken}",
            "Content-Type" => "application/json"
        ];


    }


    public function setExpiresDate()
    {
      //  $ExpiresDate = Carbon::createFromTimestamp(Carbon::now()->toDate()->getTimestamp() + 3600);
      //  $ExpiresDate = $ExpiresDate->toDate()->getTimestamp();
      //  session()->put('zoho.ExpiresDate', $ExpiresDate);
    }

    /**
     * @return bool
     */
    public function tokenRefresh()
    {
        $aliasRefresh = "/oauth/v2/token";
        $url = config('zoho.apiDomainAut');
        $response = Http::asForm()->post($url . $aliasRefresh, [
            'client_id' => $this->clientID,
            'client_secret' => $this->clientSecret,
            'refresh_token' => $this->refreshToken,
            'grant_type' => 'refresh_token'
        ]);
        if ($response->ok()) {
            $data = $response->json();
            cache()->put('zoho.refreshToken', $data['access_token'], $data['expires_in']);
           // session()->put('zoho.refreshToken', $response->json());
        }

        return $response->ok();

    }

    /**
     * @return \Illuminate\Http\Client\Response
     */
    public function showContacts()
    {
        $link = "{$this->apiDomain}/crm/v2/Contacts";

        return Http::withHeaders($this->headers)->get($link);
    }

    /**
     * @param $data
     * @return \Illuminate\Http\Client\Response
     */
    public function createDeals($data)
    {
        $link = "{$this->apiDomain}/crm/v2/Deals";

        return Http::withHeaders($this->headers)->post($link, ['data' => $data]);
    }

    /**
     * @return array
     */
    public function selectContacts()
    {
        $response = $this->showContacts();

        $contacts = collect($response->json('data'))->transform(function ($item) {
            return [
                'id' => $item['id'],
                'name' => $item['Full_Name']
            ];
        });

        return $contacts->toArray();
    }

    /**
     * @param array $data
     * @return \Illuminate\Http\Client\Response
     */
    public function createContacts($data)
    {
        $link = "{$this->apiDomain}/crm/v2/Contacts";

        return Http::withHeaders($this->headers)->post($link, ['data' => $data]);
    }

    /**
     * @return bool
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    private function checkExpiresDate()
    {
        return cache()->has('zoho.ExpiresDate');
    }

}

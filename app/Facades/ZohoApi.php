<?php


namespace App\Facades;


use App\Services\Zoho;
use Illuminate\Support\Facades\Facade;

/**
 * Class ZohoApi
 * @package App\Facades
 * @method static bool tokenRefresh()
 * @method static \Illuminate\Http\Client\Response showContacts()
 * @method static \Illuminate\Http\Client\Response createContacts(array $data)
 * @method static array selectContacts()
 * @method static \Illuminate\Http\Client\Response createDeals(array $data)
 */
class ZohoApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Zoho::class;
    }
}

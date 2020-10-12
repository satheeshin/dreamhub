<?php
namespace App\Packages\myorderbox;
use Illuminate\Support\Facades\Http;

class Baseapp 
{
  public function __construct()
  {
    
  } 
  protected $authentication = array(
    'auth-userid' => '647512', 
    'api-key' =>'kkey'
   );
	
    public function getrecords($parms=array(),$url,$method=true)
    {
    try {

         /* $client= $client = new Client([
            'base_uri' => 'https://httpapi.com/api/',
            'timeout'  => 2.0,
          ]);*/


          if ($method) {  
            $uquery=http_build_query(array_merge($parms, $this->authentication));
            $link=$url.preg_replace('/%5B[0-9]+%5D/simU','', $uquery);              
            echo   $link ;           
          }
          else
          {
          $arrays= ['query' => array_merge($this->authentication,$parms)];
          $request = $client->post($this->apiurl.$url,$arrays);
          }
          /*if ($request->getStatusCode() == 200) {
            $response = $request->getBody();
            return json_decode($response, true);
          }  */              
        } catch (RequestException $e) {
            
          }
 
        }

   
}

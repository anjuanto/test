<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\MailController;
  

$router->group(['prefix' => ''], function () use ($router)
{
$router->post('/send-mail' ,'MailController@index');
});
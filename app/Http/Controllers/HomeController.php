<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $botToken = "1471915748:AAFkPjGagRtu0wx0mp09w0k6dWRMtu0cDIY";
        $telegram = "https://api.telegram.org/bot" . $botToken;
        function curl_get_contents($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        $chat_id = "@itsystemprossdawdqwdqwsdasdasds";
        if ($request->tel) {            
            $number = $request->tel;            
            $message = urlencode(
                "<b>Client Bot </b> \n \n"                    
                    . "<b>Телефонный номер:</b> " . $number . "\n"                    
            );
            curl_get_contents($telegram . "/sendMessage?chat_id=" . $chat_id . "&text=" . $message . "&parse_mode=html");
            //logger(curl_get_contents($telegram . "/sendMessage?chat_id=" . $chat_id . "&text=" . $message . "&parse_mode=html"));
        } else {
            echo "Error is happened";
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storeMessage(Request $request)
    {
        $botToken = "1471915748:AAFkPjGagRtu0wx0mp09w0k6dWRMtu0cDIY";
        $telegram = "https://api.telegram.org/bot" . $botToken;
        function curl_get_contents($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        $chat_id = "@itsystemprossdawdqwdqwsdasdasds";
        if ($request->name && $request->tel && $request->message) {
            $name = $request->name;
            $number = $request->tel;
            $subject = $request->subject;
            // $payment = $_POST['payment_type'];
            $message = urlencode(
                "<b>Client Bot </b> \n \n"
                    . "<b>ФИО:</b> " . $name . "\n"
                    . "<b>Телефонный номер:</b> " . $number . "\n"
                    . "<b>Около:</b> " . $subject . "\n"
                    . "<b>Сообщение:</b> " . $request->message
            );
            curl_get_contents($telegram . "/sendMessage?chat_id=" . $chat_id . "&text=" . $message . "&parse_mode=html");
            //logger(curl_get_contents($telegram . "/sendMessage?chat_id=" . $chat_id . "&text=" . $message . "&parse_mode=html"));
        } else {
            echo "Error is happened";
        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return abort(404);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Catalog;
use Mail;


class IndexController extends Controller
{

    //
    public function index(Request $request)
    {

        if($request->isMethod('post')){
            $messages=[
                'required' => "Поле \"телефон\" обов'язкове для заповнення",
                'max' => "Максимальна довжина поля \"Текст повідомлення\" :max символів",
            ];


            $this->validate($request,[
                'phone' => 'required|max:13',
                'message' => 'max:3000'
            ], $messages);

            $data=$request->all();
            $data['email'] = 'someone@example.com' ;

            $result= Mail::send('site.email', ['data'=>$data], function ($message) use ($data){
                $mail_admin = env('MAIL_ADMIN');

                $message->from($data['email'], $data['name']);
                $message->to($mail_admin, 'Пане Андрійко')->subject('Question');
            });

//
//            if (empty($result->phone)){
//                \Flash::error('Повідомлення не відправленно, вкажіть номер телефону!');
//            }
//            else{
//                if($result){
////                    return redirect()->route('home2')->with('status', 'Повідомлення надіслано, очікуйте на відповідь!');
//                    return redirect()->route('home')->with('status', 'Повідомлення надіслано, очікуйте на відповідь!');
//                }
//            }

            return redirect()->route('home')->with('flash_message', 'Повідомлення надіслано, очікуйте на відповідь!');

        }


        $catalog = Catalog::all();
        $portfolio = array();

        foreach ($catalog as $log) {

        $item = array('name' => $log->name, 'image' => $log->images, 'code' => $log->code, 'manufacturer' => $log->manufacturer);
        array_push($portfolio, $item);

        }


    return view('site.index', array ('portfolio'=>$portfolio ) );

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Catalog;
use Mail;


class IndexController extends Controller
{

    //
    public function execute(Request $request)
    {

        if($request->isMethod('post')){
//        if($request){
            $messages=[
                'reguired' => "Поле :attribute обов'язкове для заповнення",
                'max' => "Максимальна довжина поля :attribute :max символів",
            ];


            $this->validate($request,[
//                'internal_camcorder' => 'null||integer',
//                'external_camcorder' => 'integer',
                'phone' => 'required|max:13',
                'message' => 'max:255'
            ], $messages);

            $data=$request->all();
            $data['email'] = 'someone@example.com' ;
//            dump($data);

            $result= Mail::send('site.email', ['data'=>$data], function ($message) use ($data){
                $mail_admin = env('MAIL_ADMIN');

                $message->from($data['email'], $data['name']);
                $message->to($mail_admin, 'Пане Андрійко')->subject('Question');
            });


            if (empty($result->phone)){
                return alert('Message is not send');
            }
            else{
                if($result){
                    return redirect()->route('home2')->with('status', 'Message is send');
                }
            }

//            dump($request);
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

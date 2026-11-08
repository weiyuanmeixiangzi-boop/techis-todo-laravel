<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Quiz;
use App\Models\Company;
use App\Models\Sale;

class QuizController extends Controller
{
    public function show()
    {
        $quizzes = \App\Models\Quiz::get();

        return view('question.quiz3', compact('quizzes'));
    }


public function quiz4_show(){
    $fruits = 'orange';
    return view('question.quiz4',compact('fruits'));
}



Public function login(Request $request){
    //セッションの削除
    $request->session()->flush();
    //ログインユーザーの設定
    $user_info = array(
        'email' => 'techis@test',
        'password'=>'1234',
    );
    //ログインチェック
    if (Auth::attempt($user_info)){
        //ログインに成功
        return view('question.quiz5');
    }

    //ログインに失敗
    return view('question.quiz5');
}


    public function quiz6_show()
    {
        // 1. Quizテーブルから全データを取得
        $quizzes = Quiz::all();

        // 2. question/quiz6.blade.php を開き、$quizzes データを渡す
        return view('question.quiz6', compact('quizzes'));
    }


    public function quiz8_redirect()
    {
        return redirect('quiz7');
    }

    public function quiz7_show(){
        //first()で、抽出対象データのうち初めての1件のみを取得
        $quiz = Quiz::first();
        return view('question.quiz7',compact('quiz'));
    }

    public function quiz9_show($id){
        $quiz=Quiz::find($id);
        return view('question.quiz9',compact('quiz'));
    }

    public function quiz10_show(){
        return view('question.quiz10');
    }

    public function quiz10_store(Request $request){
        //バリデーション//
        $request->validate([
            'name'=>'required|max:30',
            'type'=>'required',
        ]); 

        //create関数//
        Quiz::create($request->all());

        //リダイレクト//
        return redirect('/quiz10');
    }

    public function quiz11_show_all(){
        $companies=Company::all();
        $sales=Sale::all();
        return view('question.quiz11',compact('companies','sales'));
    }

    public function quiz11_show_get(){
        $companies=Company::where("founding_date","LIKE","%-03-%")
                        ->where("address","LIKE","テスト2%")
                        ->get();
        $sales=Sale::where("company_id",2)
                        ->orWhere("sales",">",8000)
                        ->orderBy("sales","desc")
                        ->get();
        return view('question.quiz11',compact('companies','sales'));
    }

    public function quiz12_show($id){
        $quiz=Quiz::findOrFail($id);
        return view('quwstion.quiz12',compact('quiz'));
    }

    public function quiz12_update(Request $request, $id){
        $quiz=Quiz::findOrFail($id);
        $quiz->update([
            'name' =>$request->input('name'),
            'type' =>$request->input('type'),
        ]);

        return redirect()->route('quiz3');
    }

}

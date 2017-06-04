<?php

namespace App\Http\Controllers;

use App\Ww;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;
class WwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $ww=Ww::all();
            $email = Auth::user()->email;
            return view('wws.index',compact('ww','email'));
        }else{
            //$id = Auth::user()->email;
            $ww=Ww::all();
            //return $ww;
            return view('wws.index',compact('ww'));
        }

    }

    public function personal()
    {
        if (Auth::check()) {
            $name=Auth::user()->username;
            $id = Auth::user()->id;
            $email=Auth::user()->email;
            return view('wws.personal',compact('id','name','email'));
        }else{
            //$id = Auth::user()->email;

            //return $ww;
            return view('auth.login');
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function storee(Request $request)
    {
        $title=empty($request->input('keyname'))?0:$request->input('keyname');
        //$title=$request->input('keyname');
        $paginate = 5;//每页多少条
        $count1 = DB::table('wws')->where('id','like','%'.$title.'%')->count();//总数
        $total = ceil($count1/$paginate);//共多少页
        $user = DB::table('wws')->where('id','like','%'.$title.'%')->simplePaginate($paginate);
        $user->title=$title;
        //$user=DB::table('wws')->where('id','>',20)->Paginate(2);
        return view('wws.searchResult',compact('user','count1'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return $id;
        $look=Ww::findOrFail($id);
        //dd($article->published_at->diffForHumans());
        //return $look;
        return view('wws.detail',compact('look'));
    }
    public function binding()
    {
        //return $id;
        //dd($article->published_at->diffForHumans());
        //return $look;
        return view('wws.binding');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

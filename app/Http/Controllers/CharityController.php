<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CharityController extends Controller
{
    /**
     * CheckerController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $charities = User::where('role',2)->get();
        return view('admin')->withCharities($charities);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'frappe_user_id' => $request->frappe_user_id,
        ]);
        return redirect('/charities')->withSuccess('تم إضافة الجمعية بنجاح');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/charities')->withSuccess('تم حذف الجمعية بنجاح');
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request , $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->frappe_user_id = $request->frappe_user_id;
        $user->save();
        return redirect('/charities')->withSuccess('تم تعديل الجمعية بنجاح');

    }
}

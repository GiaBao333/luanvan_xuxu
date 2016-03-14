<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Thisinh;
class ThisinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.thisinh.index');
        // echo "string";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.thisinh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'sbd' => 'required',
            'ten' => 'required',
            'ngaysinh' => 'required',
            'sdt' => 'required',
            'email' => 'required',
            'diachi' => 'required',
            'tencha' => 'required',
            'nncha' => 'required',
            'tenme' => 'required',
            'nnme' => 'required',
            'ap_kv_id' => 'required',
            'kv_ut_id' => 'required',
            'doi_tuong_id' => 'required',
            'ton_giao_id' => 'required',
            'dan_toc_id' => 'required',
            'truong_thpt_id' => 'required',
            'diem_kk_id' => 'required',
            'hoc_luc_id' => 'required',
            'hanh_kiem_id' => 'required',
            ]);
        $thisinh = new Thisinh();
        $thisinh['sbd'] = $request['sbd'];
        $thisinh['ten'] = $request['ten'];
        $thisinh['ngaysinh'] = $request['ngaysinh'];
        $thisinh['sdt'] = $request['sdt'];
        $thisinh['email'] = $request['email'];
        $thisinh['diachi'] = $request['diachi'];
        $thisinh['tencha'] = $request['tencha'];
        $thisinh['nncha'] = $request['nncha'];
        $thisinh['tenme'] = $request['tenme'];
        $thisinh['nnme'] = $request['nnme'];
        $thisinh['tudo'] = $request['tudo'];
        $thisinh['ap_kv_id'] = $request['ap_kv_id'];
        $thisinh['kv_ut_id'] = $request['kv_ut_id'];
        $thisinh['doi_tuong_id'] = $request['doi_tuong_id'];
        $thisinh['ton_giao_id'] = $request['ton_giao_id'];
        $thisinh['dan_toc_id'] = $request['dan_toc_id'];
        $thisinh['truong_thpt_id'] = $request['truong_thpt_id'];
        $thisinh['diem_kk_id'] = $request['diem_kk_id'];
        $thisinh['hanh_kiem_id'] = $request['hanh_kiem_id'];
        $thisinh['hoc_luc_id'] = $request['hoc_luc_id'];
        $thisinh->save();
        return redirect()->intended('/thisinh');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return view('dashboard.thisinh.edit')
                ->with('thisinh',Thisinh::find($id));
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
        $this->validate($request, [
            'sbd' => 'required',
            'ten' => 'required',
            'ngaysinh' => 'required',
            'sdt' => 'required',
            'email' => 'required',
            'diachi' => 'required',
            'tencha' => 'required',
            'nncha' => 'required',
            'tenme' => 'required',
            'nnme' => 'required',
            'tudo' => 'required',
            'ap_kv_id' => 'required',
            'kv_ut_id' => 'required',
            'doi_tuong_id' => 'required',
            'ton_giao_id' => 'required',
            'dan_toc_id' => 'required',
            'truong_thpt_id' => 'required',
            'diem_kk_id' => 'required',
            'hoc_luc_id' => 'required',
            'hanh_kiem_id' => 'required',
            ]);
        $thisinh = Thisinh::find($id);
        $thisinh['sbd'] = $request['sbd'];
        $thisinh['ten'] = $request['ten'];
        $thisinh['ngaysinh'] = $request['ngaysinh'];
        $thisinh['sdt'] = $request['sdt'];
        $thisinh['email'] = $request['email'];
        $thisinh['diachi'] = $request['diachi'];
        $thisinh['tencha'] = $request['tencha'];
        $thisinh['nncha'] = $request['nncha'];
        $thisinh['tenme'] = $request['tenme'];
        $thisinh['nnme'] = $request['nnme'];
        $thisinh['tudo'] = $request['tudo'];
        $thisinh['ap_kv_id'] = $request['ap_kv_id'];
        $thisinh['kv_ut_id'] = $request['kv_ut_id'];
        $thisinh['doi_tuong_id'] = $request['doi_tuong_id'];
        $thisinh['ton_giao_id'] = $request['ton_giao_id'];
        $thisinh['dan_toc_id'] = $request['dan_toc_id'];
        $thisinh['truong_thpt_id'] = $request['truong_thpt_id'];
        $thisinh['diem_kk_id'] = $request['diem_kk_id'];
        $thisinh['hanh_kiem_id'] = $request['hanh_kiem_id'];
        $thisinh['hoc_luc_id'] = $request['hoc_luc_id'];
        $thisinh->save();
        return redirect()->intended('/thisinh');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thisinh = Thisinh::findOrFail($id);
        $thisinh->delete();
        return redirect()->intended('/thisinh');
    }
}

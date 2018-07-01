<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\makanan;
class MakananController extends Controller
{
    public function index(){
    $makanan = makanan::all();
    return view('makanan',['makanan'=>$makanan]);
    }
    public function formmakanan(){
        return view('formmakanan');
        }
    public function simpanmakanan(Request $request){
        $this->validate($request, array(
        'unit'=>'required|max:225',
        'waktu'=>'required|max:225',
        'jumlah'=>'required|max:5',
        'lokasi'=>'required|max:225'));
        $makanan=new makanan;
        $makanan->unit=$request->unit;
        $makanan->tanggal=$request->tanggal;
        $makanan->waktu=$request->waktu;
        $makanan->jumlah=$request->jumlah;
        $makanan->lokasi=$request->lokasi;
        $makanan->save();
        return redirect('admin/makanan');
    }
    public function formeditmakanan($id){
        $makanan = makanan::find($id);
        return view('formeditmakanan',['makanan'=>$makanan]);
    }
    public function updatemakanan(Request $request, $id ){
        $this->validate($request, array(
            'unit'=>'required|max:225',
            'waktu'=>'required|max:225',
            'jumlah'=>'required|max:5',
            'lokasi'=>'required|max:225'));
            $makanan = makanan::find($id);
            $makanan->unit=$request->unit;
            $makanan->tanggal=$request->tanggal;
            $makanan->waktu=$request->waktu;
            $makanan->jumlah=$request->jumlah;
            $makanan->lokasi=$request->lokasi;
            $makanan->save();
            return redirect('admin/makanan');
    }
    public function hapusmakanan($id){
        $makanan = makanan::find($id);
        $makanan->delete();
        return redirect('admin/makanan');
    }
}

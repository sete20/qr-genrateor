<?php

namespace App\Http\Controllers;
use App\Http\Requests\qrCodeForm;
use Illuminate\Http\Request;
use Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class qrController extends Controller
{
    public function index(){
        return view('qr_codes.qr_builder');
    }
    public function create(qrCodeForm $r){
       $r->validated();
       $name=$r->name;
       $image = Str::slug($name).'.'.$r->qrSize;
       $code = QrCode::format($r->imageType);
       $code->size($r->qrSize);
       $code->errorCorrection($r->qrCorrection);
       $code->encoding($r->qrEncoding);

       $code->Generate($r->body,'../public/qr_codes/'.$image);
       return back()->with(['status'=>'qr code successfully created','image'=>$image]);
    }
}

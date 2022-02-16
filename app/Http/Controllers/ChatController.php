<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Notif;
use App\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->fcm = new FcmController;
    }
    public function data($id)
    {
        $chat = Chat::Where(function ($q) use ($id) {
            $q->where('from_user_id', $id)
                ->Where('to_user_id', auth()->user()->id);
        });
        return $chat;
    }
    public function user()
    {
        $user = User::whereHas('fromUser', function ($q) {
            return $q->where('from_user_id', auth()->user()->id)->orWhere('to_user_id', auth()->user()->id);
        })->orWhereHas('toUser', function ($q) {
            return $q->where('to_user_id', auth()->user()->id)->orWhere('from_user_id', auth()->user()->id);
        })->orWhere('id',1)->where('id','!=',auth()->user()->id)->withCount(['fromUser' => function ($z) {
            $z->where('from_user_id', auth()->user()->id)->orWhere('to_user_id', auth()->user()->id)->where('status', 'belum_terbaca');
          }])->with('fromUser')->get()->sortByDesc(function($q){
          return $q->fromUser[count($q->fromUser)-1]['created_at'];
          });

        return $user;
    }
    public function status($id)
    {
        $chat = $this->data($id);
        $chat->where('status','belum_terbaca')->update([
            'status' => 'terbaca'
        ]);
        return true;
    }
    public function index(Request $request)
    {
        if (empty($request->all())) {
            $user = $this->user();
        } else {
            $user = User::where('name', 'like', '%' . $request->name . '%')->get();
        }
        $chat = null;
        // return view('tests.chat.index', compact(['user', 'chat']));

        //V2
        if(auth()->user()->role != 'admin'){
            return view('V2.Admin.pesan', compact(['user', 'chat']));
        }
        else{
            return view('V2.Admin.pesan', compact(['user', 'chat']));
        }
    }
    public function send($id)
    {
        $user = $this->user();
        $us   = User::findOrFail($id);
        $chat = $this->data($id)->orWhere(function ($q) use ($id) {
            $q->where('from_user_id', auth()->user()->id)
                ->Where('to_user_id', $id);
        })->get();
        $this->status($id);
        //return view('tests.chat.index', compact(['user', 'chat', 'us']));

        //V2
        if(auth()->user()->role != 'admin'){
            return view('V2.Admin.pesan', compact(['user', 'chat', 'us']));
        }
        else{
            return view('V2.Admin.pesan', compact(['user', 'chat', 'us']));
        }
    }
    public function create(Request $request, $id)
    {
        try {
            Chat::create([
                'from_user_id' => auth()->user()->id,
                'to_user_id'   => $id,
                'pesan'        => nl2br($request->pesan)
                ]);
                Notif::create([
                    'user_id' => $id,
                    'isi' => 'pesan baru masuk dari: '.auth()->user()->name,
                ]);
                if(User::find($id)->app_token != null){
            $this->fcm->sendAll(auth()->user()->name.' mengirim pesan',$request->pesan,null,[User::find($id)->app_token ?? 0]);
                }
            } catch (\Throwable $th) {
                toastr()->warning($th->getMessage(), 'error');
                return redirect()->back();
            }
                return redirect()->route('chat.pesan', $id);
            }
}

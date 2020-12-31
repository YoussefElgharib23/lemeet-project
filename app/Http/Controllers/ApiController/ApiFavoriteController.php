<?php

namespace App\Http\Controllers\ApiController;

use App\Favorite;
use App\Http\Controllers\Controller;
use App\SpaceSubSpace;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiFavoriteController extends Controller
{

    public function add_to_favorite(Request $request){

        $types = ['workshop','office','meeting','vacation'];
           
        $validator = \Validator::make($request->all(), [
            'type' => 'required|in:' . implode(',', $types),
            'type_id' => 'required | numeric ',
        ]);
       
       if ($validator->fails()) {
           $api = [
               'state' => false,
               'message' => 'something went wrong',
               'data' => [],
           ];
           return \response($api);
       }

       
        $count = Favorite::where('type',$request->type)->where('type_id',$request->type_id)->where('user_id', Auth::user()->id)->count();

        if($count == 0 ){
            $favorite = new Favorite();
            $favorite->type = $request->type;
            $favorite->type_id = $request->type_id;
            $favorite->user_id =  Auth::user()->id;
            $saved = $favorite->save();   

            if($saved)  {
                $api = [
                    'state' => true,
                    'message' => '',
                    'data' => []
                ];
                return \response($api);
            }
        }

        $api = [
            'state' => false,
            'message' => 'something went wrong',
            'data' => []
        ];
        return \response($api);
    }


    public function add(int $space_id)
    {
        $favorite = Favorite::where(['space_id' => $space_id])->first();
        if ( $favorite ) return response(['message' => 'The space is already in your favorites !']);
        $space = SpaceSubSpace::find($space_id);
        if ( !$space ) return response(['error' => 'space not found !'], 404);
        $user = Auth::guard('api')->user();
        $favorite = new Favorite();
        $favorite->user_id = $user->id;
        $favorite->space_id = $space_id;
        $favorite->save();
        return response(['success' => 'The favorite was added with success !']);
    }

    public function delete(int $id)
    {
        $user = Auth::guard('api')->user();
        $favorite = Favorite::where(['user_id' => $user->id, 'id' => $id])->first();
        if ( !$favorite ) return response(['error' => 'favorite not found !'], 404);
        $favorite->delete();
        return response(['success' => 'The favorite was deleted with success !']);
    }

}

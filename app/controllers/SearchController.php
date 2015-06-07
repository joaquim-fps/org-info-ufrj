<?php
/**
 * Created by PhpStorm.
 * User: Joaquim
 * Date: 04/06/2015
 * Time: 12:20
 */

class SearchController extends BaseController {

    public function postCreateSearch() {
        if (Request::ajax()) {
            $data = Input::all();

            $search = Search::create($data);

            if (Auth::check())
                $search->user()->associate(Auth::user());

            $search->save();
        }
    }

    public function getLastUserSearches() {
        $searches = Search::where('user_id','=', Auth::user()->id)->orderBy('created_at', 'desc')->take(6)->get();

        if (Request::ajax()) {
            return Response::json(array(
                "searches" => $searches->toJson()
            ));
        }
    }
}
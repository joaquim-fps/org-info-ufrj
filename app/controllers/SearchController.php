<?php
/**
 * Created by PhpStorm.
 * User: Joaquim
 * Date: 04/06/2015
 * Time: 12:20
 */

class SearchController extends BaseController {

    public function postCreateSearch() {

    }

    public function getLastUserSearches() {
        $searches = Search::find("1");

        if (Request::ajax()) {
            return Response::json(array(
                "searches" => $searches->toJson()
            ));
        }
    }
}
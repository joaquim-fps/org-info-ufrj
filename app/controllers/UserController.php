<?php

class UserController extends BaseController {
    public function postLogIn() {

    }

    public function  postSignUp() {

    }

    public function postChangeProfile() {

    }

    public function getLogOut() {
        Auth::logout();

        return Redirect::to('/');
    }
}
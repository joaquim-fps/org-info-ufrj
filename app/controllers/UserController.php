<?php

class UserController extends BaseController {
    public function postLogIn($inputs) {
        $inputs = (gettype($inputs) === "string" ) ? Input::all() : $inputs;

        $validator = Validator::make($inputs, array (
                "email-sign-in"    => "required|email",
                "password-sign-in" => "required"
        ));

        $credentials = array (
                "email"    => $inputs['email-sign-in'],
                "password" => $inputs['password-sign-in']
        );

        if ($validator->passes()) {
            if (Auth::attempt($credentials)) {
                return Redirect::intended("/");
            } else {
                return Redirect::back()
                               ->withInput()
                               ->withErrors(array (
                                                "attempt" => "Um usuário com esses dados não foi encontrado."
                                            ))
                               ->with("login_failed", true);
            }
        } else {
            return Redirect::back()
                           ->withErrors($validator->messages())
                           ->withInput()
                           ->with("login_failed", true);
        }
    }

    public function  postSignUp() {
        $inputs = Input::all();

        $validator = Validator::make($inputs, array (
                "email"    => "required|email|unique:users,email",
                "password" => "required|confirmed"
        ));

        if ($validator->passes()) {
            $user = User::create($inputs);

            $user->password = Hash::make($inputs["password"]);
            $user->activation_code = str_random(40);
            $user->save();

            UserController::sendUserActivation($user->email, $user->id, $user->activation_code);

            $newInputs = array (
                    "email-sign-in"    => $inputs[ "email" ],
                    "password-sign-in" => $inputs[ "password" ]
            );

            UserController::postLogIn($newInputs);

            return Redirect::back()->with("sign_up_succeeded", true);
        } else {
            return Redirect::back()
                           ->withErrors($validator->messages())
                           ->withInput()
                           ->with("sign_up_failed", true);
        }
    }

    public function sendUserActivation($email, $id, $activation_code) {
        $inputs = array (
                'id' => $id,
                'activation_code' => $activation_code,
                'email'    => $email,
                'link_prefix' => URL::action('HomeController@getHome')."/activate-user/"
        );

        Mail::send("emails.user_activation", array (
                'id'     => $inputs['id'],
                'activation_code' => $inputs['activation_code'],
                'email'  => $inputs['email'],
                'link_prefix' => $inputs['link_prefix']
        ), function ($message) use ($inputs) {
            $message->sender('joaquim.fps95@gmail.com')
                    ->cc($inputs['email'], $inputs['email'])
                    ->subject('Ativação de Conta - Taxímetro Online');
        });
    }

    public function getActivateUser($id, $activation_code) {
        $user = User::find($id);

        if ($user === null){
            return Redirect::action("HomeController@getHome")->with("invalid_user", true);
        }

        if ($user->status === 1){
            if ($user->activation_code === $activation_code){
                $user->activation_code = "";
                $user->status = 0;
                $user->save();

                if (!Auth::check())
                    Auth::attempt(array("email" => $user->email, "password" => $user->password));

                return Redirect::action("HomeController@getHome")->with("activation_succeeded", true);
            }else{
                return Redirect::action("HomeController@getHome")->with("invalid_activation_code", true);
            }
        }else{
            return Redirect::action("HomeController@getHome")->with("already_active", true);
        }
    }

    public function postChangeProfile() {
        $inputs = Input::all();
        $user = Auth::user();

        $validator = Validator::make($inputs, array(
           'email-profile' => "required|email|unique:users,email,$user->id",
        ));

        if($validator->passes()) {
            $user->update($inputs);

            return Redirect::action('HomeController@getHome')->with('profile_change_successful', true);
        } else {
            return Redirect::back()
                    ->withErrors($validator->messages())
                    ->with('profile_change_failed', true);
        }
    }

    public function postPasswordRecovery() {
        $inputs = Input::all();

        $validator = Validator::make($inputs, array(
            'current-password' => 'required',
            'new-password' => 'required|confirmed'
        ));

        if($validator->passes() && Hash::check($inputs['current-password'], Auth::user()->password)) {
            $user = Auth::user();
            $user->password = Hash::make($inputs['new-password']);
            $user->save();

            return Redirect::action('HomeController@getHome')->with("password_recovery_successful", true);
        } else {
            return Redirect::back()
                    ->withErrors($validator->messages())
                    ->with('password_recovery_failed', true);
        }
    }

    public function getLogOut() {
        Auth::logout();

        return Redirect::to('/');
    }
}
$user = User::Create(array(
                'username' => Input::get('username'),
                'password' => Hash::make(Input::get('password'))
            ));
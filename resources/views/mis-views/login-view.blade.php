<x-layout>
    @section('content')
        <div class='main-container'>
            <div class='container-fluid'>
                <h1>Login</h1>
                <hr/>
                <form action="login.php" method="POST">
                    <div class='form-group'>
                        <label for='user'>User</label>
                        <input type='text' class='form-control' name='username' id='user' autocomplete='off' />
                    </div>
                    <div class='form-group'>
                        <label for='password'>Password</label>
                        <input type='password' class='form-control' name='password' autocomplete='off' /><br/>
                        <small class='form-text text-muted' id='passwordHelp'>Nunca comparta su contraseña con nadie</small>
                    </div>
                    <input class='btn btn-primary form-control' type="submit" value="Ingresar" />
                </form>
            </div>
        </div>
    @endsection
</x-layout>
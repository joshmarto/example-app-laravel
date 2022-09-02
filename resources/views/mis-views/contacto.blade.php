<x-layout>
    @section('content')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="main-container">
            <div class="container-fluid">
                <form method="POST">
                    @csrf
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}" class="form-control" autocomplete="off"><br/>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" value="{{old('email')}}" class="form-control" autocomplete="off"><br/>
                    <input type="checkbox" id="publicidad" name="publicidad" @checked(old('publicidad', true))>
                    <label for="publicidad">Recibir Publicidad</label><br>
                    <label for="mensaje">Mensaje:</label> <br/>
                    <textarea id="mensaje" name="mensaje" class="form-control"> {{old('mensaje')}}</textarea><br/>
                    <input type="submit" value="Enviar" class="form-control btn btn-outline-primary"/>
                </form>
            </div>
        </div>
    @endsection
</x-layout>

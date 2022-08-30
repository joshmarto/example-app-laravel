<x-layout>
    @section('content')
        <div class='main-container'>
            <div class='container-fluid'>
                <div class='content'>
                    <address id='hd-info'>
                        Ciudad de Guatemala, Guatemala, Guatemala<br />
                        Centroamerica<br />
                        <abbr title='Telefono'>Telefono:</abbr>
                        +502 1234-5678
                    </address>
                </div>
                <div class='contact_us'>
                    <form action='https://formspree.io/f/coolstoregt@gmail.com' method='post'>
                        <h5>Consultas, informacion o solicitudes</h5>
                        <label class='form-label'>Nombre</label>
                        <input type='text' name='Nombre' class='name form-control' placeholder='Nombre (Apellido)' required>
                        <br>
                        <label>Telefono</label>
                        <input type='text' name='Telefono' class='phone form-control' placeholder='+502 1234 5678' required>
                        <br>
                        <label>Correo Electronico</label>
                        <input type='email' name='Email' class='email form-control' placeholder='algo@ejemplo.com' required>
                        <br>
                        <label>Mensaje</label>
                        <br>
                        <textarea type='text' name='Mensaje' class='message form-control' placeholder='Mensaje...' required></textarea>
                        <br>
                        <div class='status'>

                        </div>
                        <br>
                        <button type='submit' class='btn btn-secondary form-control' id='enviar'>Enviar</button><br><br>
                    </form>
                </div>
                <div class='contact_us'>
                    <p id='c-redes'>
                        <b>Encuéntranos en redes:</b><br>
                        <a href='https://www.facebook.com/' class='badge badge-light form-control' target='_blank'>https://facebook.com/</a><br>
                        <a href='https://www.instagram.com/' class='badge badge-light form-control' target='_blank'>https://instagram.com/</a><br>
                        <a href='https://www.twitter.com/' class='badge badge-light form-control' target='_blank'>https://twitter.com/</a><br>
                        <a href='https://www.youtube.com/' class='badge badge-light form-control' target='_blank'>https://youtube.com/</a><br>
                        <b>Contáctanos:</b><br>
                        <a href='mailto:CoolStoreGT@gmail.com' target='_blank' class='badge badge-light form-control'>CoolStoreGT@gmail.com</a><br>
                    </p>
                </div>
            </div>
        </div>
    @endsection
</x-layout>
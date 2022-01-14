<!DOCTYPE html>
<html>
    <body>
        <h2>Iestādes pievienošana</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
                
        <form method="POST" action="/company">
            @csrf
            <label for="fname">Iestades nosaukums:</label>
            <input type="text" id="fname" name="name" value=""><br><br>
            <label for="lname">Reģistrācijas numurs:</label>
            <input type="text" id="lname" name="registrationNumber" value=""><br><br>
            <input type="submit" value="Apstiprināt">
        </form> 
        <a href="/">Atpakaļ</a><br><br>
    </body>
</html>


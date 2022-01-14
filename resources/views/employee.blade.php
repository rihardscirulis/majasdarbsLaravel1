<!DOCTYPE html>
<html>
    <body>
        <h2>Darbinieku pievienošana</h2>
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
        <form method="POST" action="/employee">
            @csrf
            <label for="fname">Vārds:</label>
            <input type="text" id="fname" name="name"><br><br>
            <label for="lname">Uzvārds:</label>
            <input type="text" id="lname" name="surname"><br><br>
            <label for="cname">Izvēlieties iestādi:</label>
            <select name="company">
                <option selected="selected"></option>
                @foreach($companiesList as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select><br><br>
            <input type="submit" value="Apstiprināt">
        </form><br>
        <a href="/">Atpakaļ</a><br><br>
    </body>
</html>

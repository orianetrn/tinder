<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier les données</title>
    @vite(['resources/css/backoffice.css'])
</head>
<body>

    <div class="container-backoffice">

        <div class="nav-bar">
            <div class="container-logo">
                <img id="tinder" src="{{asset('logo-tinder2.png')}}" alt="logo tinder">
            </div>

            <div class="container-onglet">
                <div class="onglet">
                    <img id="fire" src="{{asset('logo-tinder.png')}}" alt="logo tinder">
                    <a class="link-onglet" href="{{ route('backoffice') }}">Lancement Tinder/dog</a>
                </div>
            </div>

            <div class="deconnection">
                <div class="onglet">
                    <img id="deconnection" src="{{asset('connection.png')}}" alt="image connection">
                    <a class="link-onglet" href="{{ route('logout') }}">Déconnection</a>
                </div>
            </div>
        </div>

        <div class="container-page">

            <div class="container-h1">
                <h1>Edition</h1>
            </div>

            <div class="container-user">
                <form action="{{route('tinder.update', $tinder)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form">
                        <label>Nom
                            <input type="text" name="surname" value="{{$tinder->surname}}">
                        </label>
                        @error('surname')
                        <div class="alert alert-danger"><p class="erreur">{{$message}}</p></div>
                        @enderror
                    </div>

                    <div class="form">
                        <label>Prénom
                            <input type="text" name="name" value="{{$tinder->name}}">
                        </label>
                        @error('name')
                        <div class="alert alert-danger"><p class="erreur">{{$message}}</p></div>
                        @enderror
                    </div>

                    <div class="form">
                        <label>Prénom du chien
                            <input type="text" name="dog" value="{{$tinder->dog}}">
                        </label>
                        @error('dog')
                        <div class="alert alert-danger"><p class="erreur">{{$message}}</p></div>
                        @enderror
                    </div>

                    <div class="form">
                        <label>Email
                            <input type="text" name="email" value="{{$tinder->email}}">
                        </label>
                        @error('email')
                        <div class="alert alert-danger"><p class="erreur">{{$message}}</p></div>
                        @enderror
                    </div>

                    <div class="div-button">
                        <button class="button-edit" type="submit">Modifier les informations</button>
                    </div>

                </form>
            </div>
        </div>

    </div>

</body>
</html>

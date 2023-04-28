<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tinder Back Office</title>
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
                <div class="onglet">
                    <a class="link-onglet" href="{{ route('logout') }}">
                        <img id="deconnection" src="{{asset('connection.png')}}" alt="image connection">
                        Déconnection
                    </a>
                </div>
            </div>
        </div>

        <div class="container-page">

            <div class="container-h1">
                <h1>Lancement Tinder/dog</h1>
            </div>

            @if(session("message"))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif

            <div class="container-user">

                <div class="type">
                    <p>Nom</p>
                    <p>Prénom</p>
                    <p>Prénom du chien</p>
                    <p>Email</p>
                </div>

                @foreach($tinders as $tinder)
                    <div class="user">
                        <p>{{ $tinder->surname }}</p>
                        <p>{{ $tinder->name }}</p>
                        <p>{{ $tinder->dog }}</p>
                        <p><a href="mailto:{{ $tinder->email }}">{{ $tinder->email }}</a></p>


                        <a href="{{route('tinder.edit', $tinder)}}">
                            <img id="edit" src="{{asset('edit.png')}}" alt="editer">
                        </a>

                        <form action="{{route('tinder.destroy', $tinder)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <img id="delete" src="{{asset('delete.png')}}" alt="supprimer">
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

</body>
</html>

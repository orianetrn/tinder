<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tinder</title>
    <link rel="icon" href="favicon.ico" />
    @vite(['resources/css/tinder.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>

    <div class="banniere" style="background-image: url('{{ asset('mockup-home.png')}}');">
        <a id="bouton-app">Télécharger l'app</a>
        <div class="text-banniere">
            <h1 class="white">Tinder pour votre chien</h1>
            <a href="#container-avp" class="style-boutton">Je souhaite avoir les informations en avant première !</a>
        </div>
    </div>

    <div class="container-countdown mt-100 mb-100">

        <h2>Votre chien n’a jamais été si prêt de trouver le grand amour !</h2>

        <div class="countdown" id="countdown">
            <div class="time">
                <h2 id="days"  class="numbers"></h2>
                <p>JOURS</p>
            </div>

            <div class="time">
                <h2 id="hours" class="numbers"></h2>
                <p>HEURES</p>
            </div>

            <div class="time">
                <h2 id="minutes" class="numbers"></h2>
                <p>MINUTES</p>
            </div>

            <div class="time">
                <h2 id="seconds" class="numbers"></h2>
                <p>SECONDES</p>
            </div>
        </div>

        <p id="p-timer">Avant le lancement de l’application</p>

    </div>

    <div class="container-profil" >
        <div class="container-picture-profil" data-aos="fade-up-right" data-aos-duration='1000' data-aos-delay='400'>
            <img class="picture-profil" src="{{asset('profil.png')}}" alt="profil tinder">
        </div>
        <div>
            <h2 class="white h2-profil">Préparer lui ses plus belles photos, pour avoir LE profil parfait et faire chavirer plus d’un coeur. </h2>
        </div>
    </div>

    <h2 class="mt-100">Je m’inscris pour créer son profil en avant première
        et être dans les premiers profils de l’application !</h2>

    <div id="container-avp">
        <div class="bloc3" data-aos="fade-right" data-aos-duration='1000' data-aos-delay='600'>
            <img id="mockup-phone1" src="{{asset('mockup-phone3.png')}}" alt="mockup profil tinder">
        </div>

        <div class="form-box bloc3">
            <form action="{{route('tinder.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="input-form">
                    <input type="text" name="surname" required="">
                    <label>Nom</label>
                    @error('surname')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="input-form">
                    <input type="text" name="name" required="">
                    <label>Prénom</label>
                    @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="input-form">
                    <input type="text" name="dog" required="">
                    <label>Prénom de votre chien</label>
                    @error('dog')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="input-form">
                    <input type="email" name="email" required="">
                    <label>Email</label>
                    @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <button class="button-form" type="submit">Valider</button>
            </form>

            @if(session("message"))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
        </div>

        <div class="bloc3" data-aos="flip-right" data-aos-duration='1000'>
            <img id="mockup-phone2" src="{{asset('mockup-phone2.png')}}" alt="mockup profils tinder">
        </div>
    </div>

    <div class="footer">
        <div class="download">
            <a href="https://apps.apple.com/us/app/tinder-dating-new-people/id547702041" target="_blank">
                <img id="appstore" src="{{asset('apple.png')}}" alt="applestore">
            </a>
            <a href="https://play.google.com/store/apps/details?id=com.tinder&referrer=utm_source=website&utm_medium=cta&utm_campaign=website_home" target="_blank">
                <img id="googleplay" src="{{asset('google.png')}}" alt="googleplay">
            </a>
        </div>
        <div class="image-footer">
            <img id="logo-footer" src="{{asset('logo-tinder3.png')}}" alt="logo tinder">
        </div>
        <div class="reseaux-footer">
            <a href="https://www.instagram.com/tinderfr" target="_blank">
                <img id="instagram" src="{{asset('instagram.png')}}" alt="instagram">
            </a>
            <a href="https://www.tiktok.com/@tinder.france" target="_blank">
                <img id="tiktok" src="{{asset('tik-tok.png')}}" alt="tiktok">
            </a>
            <a href="https://www.youtube.com/@tinder_france" target="_blank">
                <img id="youtube" src="{{asset('youtube.png')}}" alt="youtube">
            </a>
            <a href="https://twitter.com/tinderfrance" target="_blank">
                <img id="twitter" src="{{asset('twitter.png')}}" alt="twitter">
            </a>
            <a href="https://www.facebook.com/tinderfr" target="_blank">
                <img id="facebook" src="{{asset('facebook.png')}}" alt="facebook">
            </a>
        </div>
    </div>

    <script> AOS.init(); </script>
</body>
</html>

<html>

<head>
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/LOGIN.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
</head>

<body>

    <header class="header" id="top">
        <div class="w3-top">
            <div class="w3-bar  w3-card header">

                <span style="COLOR: WHITE;MARGIN-LEFT:37REM" class=" logo  w3-padding-large ">APOLOAN</span>

            </div>
        </div>



    </header>
    <div class="login-wrap">
        <div class="az">
            <div class="login-html">
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2"
                    class="tab w3-btn w3-round-xlarge ">S'inscrire</label>
                <div class="login-form">
                
                    <form method="POST" action="{{ route('save.register') }}">
                        @csrf

                        <div class="sign-up-htm">
                            <div class="group">
                                <label class="label">Nom</label>
                                <input type="text" name="nom" class="input">
                            </div>
                            <div class="group">
                                <label class="label">Prenom</label>
                                <input type="text" name="prenom" class="input">
                            </div>
                            <div class="group">
                                <label class="label"> Numero</label>
                                <input type="text" name="numero" class="input">
                            </div>
                            <div class="group">
                                <label class="label">Password</label>
                                <input type="password" name="password" class="input" data-type="password">
                            </div>

                            <div class="group">
                                <input type="submit" class="button" value="Envoyer">
                            </div>
                            <div class="hr-2"></div>
                            <div class="foot-lnk">
                                <label class="label-foo-2 w3-btn w3-round-xlarge " for="tab-1">Deja Membre?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
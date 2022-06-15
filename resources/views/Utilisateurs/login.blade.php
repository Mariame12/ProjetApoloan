{{-- <!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	

        <div class="signup">
            @if(session('error'))
                        <div style="color:red; text-align:center;" class="alert alert-danger">
                                {{session('error')}}
                        </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label >Login</label>
                <input class="input--style-3 js-datepicker" type="text" placeholder="Numero" name="numero">
                <input class="input--style-3 js-datepicker" type="password" placeholder="Mot de passe" name="password">
                <button style="margin-top: 2rem" type="submit">Login</button>
				<div class="_8icz"></div>
            </form>
         </div>
		 <div  style="margin-left:1rem;margin-top:5rem" class="gr27e"><div class=""><p style="color: antiquewhite" class="izU2O ">Vous n’avez pas de compte&nbsp;? <a style="color:#8662c9" data-testid="sign-up-link" href="/register" tabindex="0"><span class="">Inscrivez-vous</span></a></p></div></div>

    </div>



<!-- partial -->
  <style>
      body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}
.main{
	width: 350px;
	height: 500px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}

label{
	color: #fff;
      font-size: 2.3em;
      justify-content: center;
      display: flex;
      margin: 60px;
      font-weight: bold;
      cursor: pointer;
      transition: .5s ease-in-out;
  
}
input{
	width: 60%;
	height: 20px;
	background:#e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
.login{
	height: 460px;
	background: #573b8a;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}


  </style>
</body>
</html> --}}


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

                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                    class="tab w3-btn w3-round-xlarge ">S'identifier</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2"
                    class="tab w3-btn w3-round-xlarge ">S'inscrire</label>
                <div class="login-form">
                    <form method="POST" action="{{ route('save.login') }}">
                        @csrf
                        <div class="sign-in-htm">
                        @if(session('error'))
                            <div style="color:red; text-align:center;" class="alert alert-danger">
                                    {{session('error')}}
                            </div>
                         @endif
                            <div class="group">
                                <label for="user" class="label">Numero</label>
                                <input id="user" name="numero" type="text" class="input">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Mot de passe</label>
                                <input id="pass" type="password" class="input" name="password"
                                    data-type="password">
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Valider">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                <label class="label-foo w3-btn w3-round-xlarge " for="tab-2" class="label-foo">Vous
                                    n’avez pas de compte&nbsp;? Inscrivez-vous!</label>
                            </div>
                        </div>
                    </form>
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

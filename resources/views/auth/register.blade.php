



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
    <div class="login-main-text">
        <h2>Sirius<br> Giriş</h2>
        <p>Üye olup giriş yapabilirsiniz.</p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <label>Adı</label>
                    <x-jet-input id="name" style="float:right;" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <label>E-Posta</label>
                    <x-jet-input id="email" style="float:right;" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="mt-4">
                    <label>Şifre</label>
                    <x-jet-input id="password" style="float:right;" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <label>Şifre Tekrar</label>
                    <x-jet-input id="password_confirmation" style="float:right;" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Zaten Üye Misiniz?') }}
                    </a>

                    <button type="submit"  style="float:right;" class="btn btn-black">Üye Ol</button>

                </div>
            </form>
        </div>
    </div>
</div>





<style type="text/css">
    body {
        font-family: "Lato", sans-serif;
    }



    .main-head{
        height: 150px;
        background: #FFF;

    }

    .sidenav {
        height: 100%;
        background-color: #000;
        overflow-x: hidden;
        padding-top: 20px;
    }


    .main {
        padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
    }

    @media screen and (max-width: 450px) {
        .login-form{
            margin-top: 10%;
        }

        .register-form{
            margin-top: 10%;
        }
    }

    @media screen and (min-width: 768px){
        .main{
            margin-left: 40%;
        }

        .sidenav{
            width: 40%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
        }

        .login-form{
            margin-top: 80%;
        }

        .register-form{
            margin-top: 20%;
        }
    }


    .login-main-text{
        margin-top: 20%;
        padding: 60px;
        color: #fff;
    }

    .login-main-text h2{
        font-weight: 300;
    }

    .btn-black{
        background-color: #000 !important;
        color: #fff;
    }





</style>



<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>TP-Web&Design | Back-Office</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/back-office/images/favicon.png">
    <link href="/assets/back-office/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Connectez-vous à votre compte</h4>
                                <form action="{{url('/login')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="email"><strong>Email</strong></label>
                                        <input type="email" id="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password"><strong>Mot de passe</strong></label>
                                        <input type="password" id="password" class="form-control" name="mdp">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                                    </div>
                                </form>
                                <br>
                                @if (session()->has('error'))
                                    <div class="alert alert-danger"><strong>Erreur!</strong> {{ session()->get('error') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="/assets/back-office/vendor/global/global.min.js"></script>
<script src="/assets/back-office/js/quixnav-init.js"></script>
<script src="/assets/back-office/js/custom.min.js"></script>

</body>

</html>

{{-- //klo login biasanya ga make head and foot -> saya mah v: --}}

<!Doctype html>
<html>

<head>
    {{-- head biasanya buat package page webnya semisal buat nama di barnya, import CDN bootstrapnya dll --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<style>
    /* ini buat inlfile css la */
    body {
        background-image: linear-gradient(to bottom right, green, yellow, white);
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: 'Montserrat', sans-serif;
    }

    .login-img {
        vertical-align: middle;
        text-align: center;
    }

    .login-card {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 30em;
    }

    .button mb-3 {
        margin-left: 3em;
    }
</style>

<body>
    <header>

    </header>
    <main>
        {{-- kita mau bkin login page ditengah halaman web intinya --}}
        <div class="container-fluid m-5 ml-5">
            <div class="login-card mt-3">
                <div class="card shadow-sm mb-5 bg-white rounded">
                    <img class="login-img"
                        src="https://public.urbanasia.com/images/post/2021/01/13/1610537848-selada-groot-garden.png"
                        alt="profile-img" width="100%">
                    <div class="p-3">
                        <div class="mb-3">
                           <h2>Selamat Datang di Portal Pertanian Hidroponik Pintar</h2>
                        </div>
                        <hr>
                        {{-- <img> nah itu v: pake gugel WKWKWK --}}

                        {{-- <div class="login-img">
                            <span class="material-symbols-outlined" style="font-size: 7em;">
                                person
                            </span>
                        </div> --}}
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email/Username</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="budiganteng@co.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1"
                                placeholder="Password/Kata Sandi Anda">
                        </div>
                        <hr>
                        <div class="text-end">
                            <a href="/home" type="button" class="btn btn-primary btn-md">Login</a>
                            <button type="reset" class="btn btn-secondary btn-md">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        {{-- ini cmn buat margin aja kadang atau iseng --}}
    </footer>

</body>

</html>
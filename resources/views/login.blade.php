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
</head>
<style>
    /* ini buat inlfile css la */
    body {
        background-color: #f5f5f5;
    }

    .login-img {
        margin-left: 50%;
        margin-right: 50%;
        font-size: 5em;
    }

    .login-card {
        margin-right: 3em;
        /* margin-top: auto;
        margin-bottom: auto;
        display: block; */
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .button mb-3{
        margin-left: 3em;
    }
</style>

<body>
    <header>

    </header>
    <main>
        {{-- kita mau bkin login page ditengah halaman web intinya --}}
        <div class="container-fluid m-5 ml-5">
            <div class="login-card">
                <div class="card ml-5">
                    <div class="p-3">
                        {{-- <img> nah itu v: pake gugel WKWKWK --}}
                        <div class="login-img">
                            <span class="material-symbols-outlined">
                                person
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email/Username</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="budi@co.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Password/Kata Sandi Anda">
                        </div>
                    </div>
                    <hr>
                    <div class="button mb-3">
                        <button type="button" class="btn btn-primary btn-sm">Login</button>
                        <button type="button" class="btn btn-secondary btn-sm">Reset</button>
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
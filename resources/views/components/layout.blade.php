<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>nagano_cake</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary py-4 mb-4">
            <a href="{{ url('/') }}" class="font-weight-bold text-light text-decoration-none ml-3">Nagano - Cake</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#drop">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="drop">
                <ul class="navbar-nav ml-auto">
                    <li class="text-right">About</li>
                    <li>商品一覧</li>
                    <li>新規登録</li>
                    <li>ログイン</li>
                </ul>
            </div>

        </nav>
    </header>


    <main>
        {{ $slot }}
    </main>


    <footer>
        <div class='container mt-5 bg-success'> {{--色付け--}}
            <div class='row'>
                <div class='mx-auto'>
                    <p>CopyRight</p>
                </div>
            </div>
        </div>
    </footer>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>

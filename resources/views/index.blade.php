<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CloneSecreto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css') }}/style.css">
</head>

<body>
    <div>

    </div>
    <div class="card col-md-6 mx-auto">
        <div class="card-header h3 text-center">
            SECREBEW
        </div>
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <h5 class="card-title text-center">Send secret message to ray</h5>
                <br>
                <p class="card-text">ray will never know who sent this message</p>
                <div class="mb-3">
                    <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="6"
                        placeholder="Send Secret Message"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="col-md-12 btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js') }}/script.js"></script>
</body>

</html>
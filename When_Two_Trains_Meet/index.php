<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Trains Meet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <img src="images/Trains_Meet.png" class="center">
    <h1> Trains Meet</h1>
    <div class="container mt-3 bt-3">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <p>Note : This Assumes That The Trains Start At The Same Time ? </p>
                <form action="form.php" method="POST">
                    <div class="mb-3">
                        <label for="velocity-1" class="form-label">What Is Speed,In MPH Of Train 1 ?</label>
                        <input type="number" class="form-control" name="velocity-1" id="velocity-1">
                    </div>
                    <div class="mb-3">
                        <label for="velocity-2" class="form-label">What Is Speed,In MPH Of Train 2 ?</label>
                        <input type="number" class="form-control" name="velocity-2" id="velocity-2">
                    </div>
                    <div class="mb-3">
                        <label for="distance-apart" class="form-label">How Far , In Miles ,Are The Trains Apart</label>
                        <input type="number" class="form-control" name="distance-apart" id="distance-apart">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary">
                    </div>

                </form>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="master.js"></script>
</body>


</html>
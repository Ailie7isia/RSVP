<DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RSVP confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://127.0.0.1:8000/home">RSVP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:8000/details">Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://127.0.0.1:8000/confirm">Confirmation</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br>

<form method="POST" action="/post-confirm">
  
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Name on Invitation Card</label>
  <textarea class="form-control"  name = "name_input" id="exampleFormControlTextarea1" rows="1"></textarea>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Refer to the name on the card
    </span>
  </div>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" name = "maill_input" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
</div>

<br>

<div>
<select class="form-select form-select-sm"  name = "conf_input" aria-label="Small select example">
  <option selected>Will you be there?</option>
  <option value="1">Yes</option>
  <option value="2">No</option>
</select>
</div>
<br>

<button type="submit" class="btn btn-primary">Confirm</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</DOCTYPE><?php /**PATH C:\Users\dewia\Documents\00 BINUS\03 BNCC\TPM\tugas1\resources\views/confirm.blade.php ENDPATH**/ ?>
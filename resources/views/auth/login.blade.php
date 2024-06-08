 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TP SALAIRE</title>
 </head>
 <body>


  <!-- Pills content -->
  <div class="tab-content">
    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
      <form method="POST" action="{{ route('handleLogin') }}">
        @method('post')
        @csrf
        @if (session()->has('error'))

        <div class="alert alert-danger" role="alert">
            <p>{{ session()->get('error') }}</p>
        </div>

        @endif
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="email" id="loginName" name="email" class="form-control" />
          <label class="form-label" for="loginName">Email or username</label>
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="password" id="loginPassword" name="password" class="form-control" />
          <label class="form-label" for="loginPassword">Password</label>
        </div>


        <!-- Submit button -->
        <button type="submit"  class="btn btn-primary btn-block mb-4">Connexion</button>

      </form>
    </div>
  </div>

   

 </body>
 </html>

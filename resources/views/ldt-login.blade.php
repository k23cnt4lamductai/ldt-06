<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ldt - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('ldtaccount.ldtloginsubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>ldt - Login</h1>
                </div>
                    
                <div class="card_body">
                    <div class="mb-3">
                        <label for="ldtemail" class="form-label">Email</label>
                        <input type="email" class="form-control" 
                            id="ldtemail" name="ldtemail"
                            placeholder="ldtEmail@example.com"/>
                            @error('ldtemail')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <span id ="email-error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="ldtpass" class="form-label">Password</label>
                        <input type="password" class="form-control" 
                            id="ldtpass" name="ldtpass"
                            placeholder="xxxx"/>
                            @error('ldtpass')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <span id ="email-error"></span>
                    </div>

                </div>

                <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>
                    @if (Session::has('ldt-error'))
                        <div class="alert alert-danger">
                            {{Session::get('ldt-error')}}
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </section>
</body>
</html>
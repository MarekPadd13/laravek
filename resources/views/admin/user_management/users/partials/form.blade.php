@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<label for="">Name</label>
<input class="form-control" type="text" name="name"  placeholder="Name" value="{{$user->name ?? ''}}" required>
<label for="">Email</label>
<input class="form-control" type="email" name="email"  placeholder="Email" value="{{$user->email ?? ''}}" required>
<label for="">Pass</label>
<input class="form-control" type="password" name="password"  placeholder="Pass" value="">
<label for="">Pass Confirm</label>
<input class="form-control" type="password" name="password_confirmation"  placeholder="Pass Confirm" value="">
<input type="submit" class="btn btn-success" value="Сохранить">

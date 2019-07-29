<form method="post" action="enter">
    @csrf
    <input type="text" name="username"><br>
    <input type="password" name="password"><br>
    <button type="submit">提交</button>
</form>

-----------------------------------------------<br>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br>
        <br>
        <ul>
            @foreach ($errors->messages() as $key=>$error)
                <li>{{$key}}--->{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<?php //dd($errors)?>
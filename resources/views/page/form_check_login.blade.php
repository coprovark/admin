
   <form action="/form_check_login" method="post">

        <label>username</label>
        <input type="text" name="username">

        <label>password</label>
        <input type="password" name="password">

        <button type="submit">login</button>
    </form>

<hr>


@foreach ($users as $user) 
  {{  $user->id }}
@endforeach
<html>
    @if(Session::has('error'))
    <div class="alert alert-danger">
        {{Session::get('error')}}
    </div>
    @endif
    <form method="post" action="{{route('login.store')}}">
        @csrf
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
        <input type="submit" value="submit" name="submit">
    </form>
    </html>

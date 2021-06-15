@if (Auth::check())
@yield ('users_content')
@else
<?php 
return redirect()->route('register');
?>
@endif
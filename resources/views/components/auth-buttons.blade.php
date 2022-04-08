@guest()
<a href="{{route('login')}}"
   class="btn btn-light text-blue text-bold">{{trans('global.buttons.login')}}</a>
@endauth
@auth()
<form action="{{route('logout')}}" method="POST">
    @csrf
    <button class="btn btn-light text-blue text-bold">{{trans('global.buttons.logout')}}</button>
</form>
@endauth

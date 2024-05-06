<form action="{{route('set_language_locale', $lang)}}" method="POST" >
    @csrf
    <button href="#" type="submit" class="px-1" style="border: none; background-color:transparent;" >
    <span class="fi fi-{{$nation}}"></span>
    </button>
</form>
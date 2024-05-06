<form action="{{route('set_language_locale', $lang)}}" method="POST" >
    @csrf
    <button href="#" type="submit" class="px-1" style="border: none; background-color:transparent;" >
        <i class="fa-solid fa-wand-magic-sparkles farfallino"></i>
    </button>
</form>
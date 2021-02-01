<div class="social-login mt-3">
    <a href="{{ route('auth.social.redirect', ['facebook']) }}" class="btn btn-block btn-social btn-facebook">
        <span class="fab fa-fw fa-facebook-f"></span>
        Entrar com Facebook
    </a>

    <a href="{{ route('auth.social.redirect', ['twitter']) }}"  class="btn btn-block btn-social btn-twitter">
        <span class="fab fa-fw fa-twitter"></span>
        Entrar com Twitter
    </a>
    <a href="{{ route('auth.social.redirect', ['instagram']) }}"  class="btn btn-block btn-social btn-instagram">
        <span class="fab fa-fw fa-instagram"></span>
        Entrar com Instagram
    </a>
    <a href="{{ route('auth.social.redirect', ['linkedin']) }}"  class="btn btn-block btn-social btn-linkedin">
        <span class="fab fa-fw fa-linkedin"></span>
        Entrar com Linkedin
    </a>
{{--    <a href="{{ route('auth.social.redirect', ['youtube']) }}" class="btn btn-block btn-social btn-youtube">--}}
{{--        <span class="fab fa-fw fa-youtube-square"></span>--}}
{{--        Entrar com Youtube--}}
{{--    </a>--}}
</div>

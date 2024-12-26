<div class="card bg-transparent border-0 text-center">
    <div class="card-img">
        @if ($team->image != '')
            <img loading="lazy" decoding="async" src="{{ 'storage/' . $team->image }}" alt="Scarlet Pena"
                class="rounded w-100" width="300" height="332">
        @endif


        @if ($team->fb_url != '' || $team->tw_url != '' || $team->ig_url != '')
            <ul class="card-social list-inline">
                @if ($team->fb_url != '')
                    <li class="list-inline-item"><a class="facebook" href="{{ $team->fb_url }}"><i
                                class="fab fa-facebook"></i></a>
                    </li>
                @endif
                @if ($team->tw_url != '')
                    <li class="list-inline-item"><a class="twitter" href="{{ $team->tw_url }}"><i
                                class="fab fa-twitter"></i></a>
                    </li>
                @endif
                @if ($team->ig_url != '')
                    <li class="list-inline-item"><a class="instagram" href="{{ $team->ig_url }}"><i
                                class="fab fa-instagram"></i></a>
                    </li>
                @endif
            </ul>
        @endif
    </div>
    <div class="card-body">
        <h3>{{ $team->name }}</h3>
        <p>{{ $team->designation }}</p>
    </div>
</div>

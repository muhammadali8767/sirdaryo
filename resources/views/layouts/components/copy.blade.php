<div class="copy-elements">
    <div class="date-view order-0">
        @if (isset($date))
        <i class="fas fa-calendar"></i>
        <p>

            @php
            if(get_class($date) != "Illuminate\Support\Carbon")
                $date = Illuminate\Support\Carbon::parse($date)
            @endphp
            <span class="hours">{{ $date->format('H:i') }}</span> / <span class="date">{{ $date->format('Y.m.d') }}</span>
        </p>
        @elseif (isset($page))
        <i class="fas fa-calendar"></i>
        <p>
            <span class="hours">{{ $page->created_at->format('H:i') }}</span> / <span class="date">{{ $page->created_at->format('Y.m.d') }}</span>
        </p>
        @elseif (isset($post))
        <i class="fas fa-calendar"></i>
        <p>
            <span class="hours">{{ $post->created_at->format('H:i') }}</span> / <span class="date">{{ $post->created_at->format('Y.m.d') }}</span>
        </p>
        @endif
    </div>
    <button class="copy-button order-2 order-sm-1">
        <i class="fal fa-clone"></i>
        @lang('front.Nusxa olish')
    </button>
    <div class="date-view order-1 order-sm-2">
        @if (isset($seen))
        <i class="fas fa-eye"></i>
        <p>
            <span class="view-numbers">{{ $seen }}</span>
        </p>
        @elseif (isset($page))
        <i class="fas fa-eye"></i>
        <p>
            <span class="view-numbers">{{ $page->seen }}</span>
        </p>
        @elseif (isset($post))
        <i class="fas fa-eye"></i>
        <p>
            <span class="view-numbers">{{ $post->seen }}</span>
        </p>
        @endif

    </div>
</div>

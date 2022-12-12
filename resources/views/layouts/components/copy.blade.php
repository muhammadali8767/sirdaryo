<div class="copy-elements">
    <div class="date-view order-0">
        @if (isset($date))
        <i class="fas fa-calendar"></i>
        <p>
            <span class="hours">{{ $date->fromat('H:i') }}</span> / <span class="date">{{ $date->fromat('d.m.Y') }}</span>
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
        @endif
    </div>
</div>

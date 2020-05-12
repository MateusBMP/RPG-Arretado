<div class="connected-user {{ $attributes['class'] }}">
    <div class="connected-user__image rounded-circle border-primary">
        @if ($isConnected)
        @else
            <a href="{{ route('login') }}">
                <i class="border rounded-circle border-secondary p-1 i-Geek" data-container="body" data-toggle="popover" data-placement="top" data-content="Conecte-se!"></i>
            </a>
        @endif
    </div>
</div>
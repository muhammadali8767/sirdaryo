@if (session('success'))
    <br>
    <div id="alert-message" class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
    </div>
@endif

{{-- @if ($errors->any())
    <ul>
        {!! implode('', $errors->all('<li class="text-danger">:message</li>')) !!}
    </ul>
@endif --}}

@if ($errors->any())
    <br>
    <div id="alert-message" class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <ul>
            {!! implode('', $errors->all('<li>:message</li>')) !!}
        </ul>
    </div>
@endif

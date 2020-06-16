@if(session()->has('success'))
    <div class="alert alert-dismissable alert success" style="background: greenyellow">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
            <h4>{!! session()->get('success') !!}</h4>
        </strong>
    </div>

@endif

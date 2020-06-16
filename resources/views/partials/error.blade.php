@if(isset($errors)&&count($errors)>0)
    <div class="alert alert-dismissable alert success" style="background: white;">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
        @foreach($errors->all() as $error)
            <li> <h4><strong style="color: red;">{!! $error !!}</strong></h4></li>

        @endforeach
    </div>
@endif

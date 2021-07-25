@if (session('status'))
<div class="alert alert-primary alert-dismissable fade show mx-5" role="alert">
    {{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">
            &times;
        </span>
    </button>
</div>
@endif

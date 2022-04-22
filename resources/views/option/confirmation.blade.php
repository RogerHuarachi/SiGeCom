@if(session('confirmation'))
    <div class="alert alert-success p-1 mb-1">
        <button type="button" class="close" data-dismiss="alert">
            &times;
        </button>
        <p>{{ session('confirmation') }}</p>
    </div>
@endif
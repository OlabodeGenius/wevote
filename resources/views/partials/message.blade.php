@if (Session::has('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">{{ Session::get('success') }}.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
          </div>
@endif


@if (count($errors) > 0)
<div class="alert alert-danger alert-dismissible fade show" role="alert">  <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
          </div>
@endif

@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

@if (session('warning'))
<div class="alert alert-warning">
    {{ session('warning') }}
</div>
@endif

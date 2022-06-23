@extends("user.layout.base")
@section('content')
    <h1>Add new Contact</h1>
    @if ($errors->any())
        <div class="alert alert-success" role="alert">
            @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif
    <form name="add_contact" method="post" action="{{route('save_contact')}}">
        @csrf
        <div class="mb-3">
            <label for="first_name" class="form-label">First name</label>
            <input
                name="first_name"
                type="text"
                class="form-control"
                value="{{old('first_name', '')}}"
                id="first_name">
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last name</label>
            <input
                name="last_name"
                type="text"
                class="form-control"
                value="{{old('last_name', '')}}"
                id="last_name">
        </div>
        <div class="mb-3">
            <label for="company" class="form-label">Company</label>
            <input
                name="company"
                type="text"
                class="form-control"
                value="{{old('company', '')}}"
                id="company">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input  name="email"
                    type="text"
                    class="form-control"
                    id="email">
        </div>
        <div class="mb-3">
            <label for="state" class="form-label">State</label>
            <input
                name="state"
                type="text"
                class="form-control"
                value="{{old('state', '')}}"
                id="state">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
@endsection

@extends("user.layout.base")
@section('content')
    <h1>Add new deal</h1>
    @if ($errors->any())
        <div class="alert alert-success" role="alert">
            @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif
    <form name="add_contact" method="post" action="{{route('save_deals')}}">
        @csrf
        <div class="mb-3">
            <label for="deal_name" class="form-label">Deal name</label>
            <input
                name="deal_name"
                type="text"
                class="form-control"
                value="{{old('deal_name', '')}}"
                id="deal_name">
        </div>
        <div class="mb-3">
            <select name="contact" class="form-select" aria-label="Contact">
               @foreach($contacts as $item)
                    <option value="{{$item['id']}}">{{$item['name']}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input
                name="type"
                type="text"
                class="form-control"
                value="{{old('type', '')}}"
                id="type">
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input  name="amount"
                    type="text"
                    class="form-control"
                    value="{{old('amount', '')}}"
                    id="amount">
        </div>
        <div class="mb-3">
            <label for="next_step" class="form-label">Next step</label>
            <input  name="next_step"
                    type="text"
                    class="form-control"
                    value="{{old('next_step', '')}}"
                    id="next_step">
        </div>
        <div class="mb-3">
            <label for="stage" class="form-label">Stage</label>
            <input  name="stage"
                    type="text"
                    class="form-control"
                    id="stage">
        </div>
        <div class="mb-3">
            <label for="lead_source" class="form-label">Lead source</label>
            <input  name="lead_source"
                    type="text"
                    class="form-control"
                    value="{{old('lead_source', '')}}"
                    id="lead_source">
        </div>
        <div class="mb-3">
            <label for="closing_date" class="form-label">Closing date</label>
            <input  name="closing_date"
                    type="date"
                    class="form-control"
                    value="{{old('closing_date', '')}}"
                    id="closing_date">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea
                name="description"
                class="form-control"
                id="description">{{old('description', '')}} </textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
@endsection

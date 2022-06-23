@extends("user.layout.base")
@section('content')
    @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {!!Session::get('status')!!}
        </div>
    @endif
    @if(isset($data))
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Full name</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>

            @foreach($data as $item)
                <tr>
                    <th scope="row">{{$item['id']}}</th>
                    <td>{{$item['Full_Name']}}</td>
                    <td>{{$item['Email']}}</td>
                    <td></td>
                </tr>
          @endforeach

        </tbody>
    </table>
    @elseif(isset($status) && isset($message))
        <div class="callout callout-success">
          <h3>{{$code}}</h3>
            <p>{{$message}}</p>
        </div>
    @endif
@endsection

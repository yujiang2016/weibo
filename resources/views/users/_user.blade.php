<div class="list-group-item">
    <img width="32" src="{{$user->gravatar()}}" alt="{{$user->name}}">
    <a href="{{route('users.show',$user)}}">
        {{$user->name}}
    </a>
    @can('destroy',$user)
        <form class="float-right" action="{{route('users.destroy',$user->id)}}" method="post">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-danger delete-btn">删除</button>
        </form>
        @endcan
</div>
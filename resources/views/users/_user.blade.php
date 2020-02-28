<div class="list-group-item">
    <img src="{{ $user->gravatar() }}" class="mr-3" alt="{{ $user->name }}" width="32">
    <a href="{{ route('users.show',$user) }}">
        {{ $user->name }}
    </a>
    @can('destroy',$user)
        <form action="{{ route('users.destroy', $user->id) }}" class="float-right" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger btn-sm delete-btn">删除</button>
        </form>
    @endcan
</div>

<h1>Test</h1>

<a href="{{ route('user-create') }}">Create user</a>

<ul>
    @foreach($users as $user)
        {{ $user -> name }}
    @endforeach
</ul>

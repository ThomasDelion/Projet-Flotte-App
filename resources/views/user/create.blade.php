<form action="{{ route('user-store') }}" method="post">
    @csrf
    <input type="text" name="text" placeholder="Name...">
    <input type="email" name="email" placeholder="Email...">
    <input type="password" name="password" placeholder="Password...">
    <select name="role">
        @foreach($roles as $role)
            <option value="{{ $role -> id }}">{{ $role -> label }}</option>
        @endforeach
    </select>
    <button type="submit">Submit</button>
</form>

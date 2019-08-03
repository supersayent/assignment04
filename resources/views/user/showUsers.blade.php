<html>
<body>
<h1>Dashboard</h1>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone number</th>
        <th>Location</th>
        <th>Gender</th>
        <th>Action</th>
    </tr>
    @foreach($users as $user)
    <tr align="center">
        <td>{{ $user->fname }} {{ $user->lname }}</td>
        <td><b>{{ $user->username }}</b></td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->location }}</td>
        <td>{{ $user->gender }}</td>
        <td><a href="{{ route('user.edit',[$user->id]) }}"><b>Edit</b></a></td>
    </tr>
    @endforeach
</table><br>
Back to <a href="{{route('user.register')}}"><b>Register</b></a>
</body>
</html>

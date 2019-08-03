<html>
<body>
@include('errors.error')
<form action="{{ route('user.update',[$user->id]) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <table>
        <tr><td>First Name</td>
            <td><input type="text" name="fname" placeholder="First Name" value="{{ $user->fname }}"></td>
        </tr>
        <tr><td>Last Name</td>
            <td><input type="text" name="lname" placeholder="Last Name" value="{{ $user->lname }}"></td>
        </tr>
        <tr><td>Email</td>
            <td><input type="email" name="email" placeholder="example@domain.com" value="{{ $user->email }}"></td>
        </tr>
        <tr><td>Phone number</td>
            <td><input type="text" name="phone" placeholder="+880-**********" value="{{ $user->phone }}"></td>
        </tr>
        <tr><td>Location</td>
            <td><input type="textarea" name="location" placeholder="Location" value="{{ $user->location }}"></td>
        </tr>
        <tr><td>User Name</td>
            <td><input type="text" name="username" placeholder="User Name" value="{{ $user->username }}"></td>
        </tr>
        <tr><td>Password</td>
            <td><input type="password" name="password" placeholder="Password" value="{{ $user->password }}"></td>
        </tr>
        <tr><td>Confirm Password</td>
            <td><input type="password" name="password_confirmation" placeholder="Confirm Password" value="{{ $user->password_confirmation }}"></td>
        </tr>
        <tr><td></td>
            <td><input type="submit" name="submit" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>

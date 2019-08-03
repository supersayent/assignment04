<html>
<title>

</title>
<body>
    <h3>User Register</h3>
    @include('errors.error')
    <form action="{{ route('user.register') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <table>
            <tr><td>First Name</td>
                <td><input type="text" name="fname" placeholder="First Name"></td>
            </tr>
            <tr><td>Last Name</td>
                <td><input type="text" name="lname" placeholder="Last Name"></td>
            </tr>
            <tr><td>Email</td>
                <td><input type="email" name="email" placeholder="example@domain.com"></td>
            </tr>
            <tr><td>Phone number</td>
                <td><input type="text" name="phone" placeholder="+880-**********"></td>
            </tr>
            <tr><td>Location</td>
                <td><input type="textarea" name="location" placeholder="Location"></td>
            </tr>
            <tr><td>Gender</td>
                <td><input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Other">Other
                </td>
            </tr>
            <tr><td>User Name</td>
                <td><input type="text" name="username" placeholder="User Name"></td>
            </tr>
            <tr><td>Password</td>
                <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr><td>Confirm Password</td>
                <td><input type="password" name="password_confirmation" placeholder="Confirm Password"></td>
            </tr>
            <tr><td></td>
                <td><input type="submit" name="submit" value="Register"></td>
            </tr>
        </table>
    </form>
</body>
</html>

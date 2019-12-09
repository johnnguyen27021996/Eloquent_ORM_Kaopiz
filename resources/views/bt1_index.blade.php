<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent BT1</title>
</head>
<body>
    <form action="{{ route('bt1.search') }}" method="post">
        @csrf
        <label for="user_id">User ID</label>
        <input type="text" name="user_id" id="user_id" placeholder="Enter User ID ...">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Name ...">
        <label for="class">Class</label>
        <input type="text" name="class" id="user_id" placeholder="Enter Class ...">
        <br><br>
        <button type="submit">Search</button>
    </form>
    <h1>Search Result</h1>
    @if(session()->has('data') && count(session()->get('data')) > 0)
        <table border="1">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session()->get('data') as $user)
                    <tr>
                        <td> {{ $user->id }}</td>
                        <td> {{ $user->name }}</td>
                        <td> {{ $user->class }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <?php echo 'Không có dữ liệu cần tìm kiếm'; ?>
    @endif
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style>
        body {
            background-color: #F5F7FA;
            color: #333333;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
          
            flex-direction: column;
            padding: 20px;
        }

        a.button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-bottom: 20px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }

        a.button:hover {
            background-color: #45a049;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 30px;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .search-bar {
            display: flex;
            align-items: center;
            background-color: #FFFFFF;
            border-radius: 20px;
            padding: 10px;
            margin-bottom: 30px;
        }

        .search-bar input[type="text"] {
            background-color: transparent;
            border: none;
            outline: none;
            font-size: 16px;
            margin-left: 10px;
            color: #333333;
        }

        .search-bar input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 8px 16px;
            cursor: pointer;
            font-size: 16px;
        }

        .search-bar input[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .pagination .page-item {
            margin: 0 5px;
        }

        .pagination .page-link {
            display: inline-block;
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .pagination .page-link:hover {
            background-color: #45a049;
        }

        .pagination .page-item.disabled .page-link {
            opacity: 0.5;
            cursor: default;
        }
        
        .view-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .view-button:hover {
            background-color: #45a049;
        }

        .view-button:active {
            background-color: #3e8e41;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <a href="/" class="button">Click me to go back</a>
    <h1>User List</h1>
    <div class="search-bar">
        <form method="GET" action="#">
            <input 
                type="text" 
                name="search"
                placeholder="Find something" 
                value="{{ request('search') }}"
            >
            <input type="submit" value="Search">
        </form>
    </div>
    @if (!$users->isEmpty())
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>View</th>
               
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td style="text-decoration:none;">
                    
                    <a href="/categories/{{$user->id}}">
            <p><strong></strong> {{$user->name}}</p>
            </a>
                 </td>
                 <td style="text-decoration:none;">
                   
                    {{ $user->email}}
                 
                 </td>
              
            <td style="text-decoration:none;">
                <a href="/categories/{{$user->email}}" class="view-button">View</a>
            </td>
                
                </tr>
            @endforeach
        </table>
    @else
        <h2>There are no users</h2>
    @endif
    <div class="pagination">
        {{ $users->links()}}
    </div>
</body>
</html>

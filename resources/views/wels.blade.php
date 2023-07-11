<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 24px;
            color: #333333;
            margin-top: 0;
            text-align: center;
        }

        p {
            margin-bottom: 10px;
        }

        .user-details {
            border: 1px solid #dddddd;
            padding: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .card {
            border: 1px solid #dddddd;
            padding: 10px;
            border-radius: 5px;
            background-color: #ffffff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }

        .card-body {
            margin-top: 10px;
        }

        .back-link {
            display: inline-block;
            margin-top: 40px;
            text-align: center;
        }

        .back-link a {
            color: #ffffff;
            background-color: #333333;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .back-link a:hover {
            background-color: #555555;
        }

        .card {
            background-color: #f3f3f3;
            padding: 20px;
        }

        .posts-container {
            margin-top: 20px;
        }

        .post {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .post-title {
            font-size: 20px;
            font-weight: bold;
            color: #333333;
            margin-bottom: 10px;
        }

        .post-date {
            color: #777777;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .post-body {
            color: #555555;
            line-height: 1.5;
        }

        .view-button {
            background-color: #337ab7;
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>User Details</h1>

        <div class="user-details">
            <a href="/categories/{{$users->id}}">
                <p><strong>Name:</strong> {{$users->name}}</p>
            </a>

            <p><strong>Email:</strong> {{$users->email}}</p>
        </div>

        <div>
            
            @foreach($posts as $post)


            <x-post-card :posts='$post'/>
        
        @endforeach
        </div>


        <div class="back-link">
            <a href="/categories">Click here to go back</a>
        </div>
    </div>
</body>

</html>
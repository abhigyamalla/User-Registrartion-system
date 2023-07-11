<x-layout>
    <style>
        .card-link {
            text-decoration: none;
        }

        .card-link:hover {
            text-decoration: none;
        }

        .card-link .btn {
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .card-link .btn:hover {
            transform: scale(1.05);
        }

        .card-link .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .card-link .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .card-link .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .card-link .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>

    <div class="container">
        <div class="text-center mt-5">
            <h1>Welcome to the User Management System</h1>
        </div>
@auth
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card bg-light shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Check Users List</h5>
                        <a href="/categories" class="card-link">
                            <button class="btn btn-primary">Click here</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endauth
        
 <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card bg-light shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Register New Users</h5>
                        <a href="/register" class="card-link">
                            <button class="btn btn-success">Click here</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>



@guest
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card bg-light shadow">
                    <div class="card-body text-center">
                        <h5 class="card-title">Login  Users</h5>
                        <a href="/login" class="card-link">
                            <button class="btn btn-success">Click here</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endguest
</x-layout>

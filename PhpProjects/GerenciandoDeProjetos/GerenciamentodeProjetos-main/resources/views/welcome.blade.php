<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centralized Cards with Icons</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
    /* Body styles */
    body {
        background-color: #f0f0f0; /* Light background color */
        margin: 0; /* Remove default margin */
        padding: 0; /* Remove default padding */
        height: 100vh; /* Full viewport height */
        display: flex; /* Enable flexbox for centering */
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
    }

    .card-deck {
        display: flex;
        gap: 1rem; /* Space between cards */
    }

    .card {
        background-color: #FDB927; /* Lilac color */
        border: 2px solid #26282A; /* Border color */
        width: 250px; /* Adjust width as needed */
        border-radius: 0.5rem; /* Rounded corners */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow for card */
        text-align: center; /* Center text and content */
    }

    .card-body {
        padding: 1rem; /* Space inside the card */
    }

    .card-title {
        color: #26282A; /* Dark lilac color for title */
        font-weight: 600;
        font-family: 'Figtree', sans-serif;
        line-height: 1.3;
        margin-bottom: 1rem;
        letter-spacing: 0.025rem;
    }

    .card-icon {
        width: 80px; /* Adjust icon size */
        margin-bottom: 1rem; /* Space below the icon */
    }

    .btn {
        background-color: #1D428A; /* Dark lilac color */
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 0.375rem; /* Rounded corners */
        text-decoration: none;
        display: inline-block;
        font-weight: 600;
        transition: background-color 0.3s;
        width: 100%; /* Full width button */
    }

    .btn:hover {
        background-color: #FFA300; /* Darker lilac color */
    }
</style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://img.icons8.com/?size=100&id=26211&format=png&color=000000" alt="Login Icon" class="card-icon">
                            <h5 class="card-title">Faça seu Login!!</h5>
                            <a href="{{ route('login') }}" class="btn">Entre</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="https://img.icons8.com/?size=100&id=SuCOeDErfn5u&format=png&color=000000" alt="Register Icon" class="card-icon">
                            <h5 class="card-title">Membro Faça seu Cadastro!!</h5>
                            <a href="{{ route('register') }}" class="btn">Registre-se</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <img src="https://img.icons8.com/?size=100&id=SuCOeDErfn5u&format=png&color=000000" alt="Register Icon" class="card-icon" class="card-icon">
                            <h5 class="card-title">Gerente Faça seu Cadastro!!</h5>
                            <a href="{{ route('register_manager') }}" class="btn">Cadastre-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

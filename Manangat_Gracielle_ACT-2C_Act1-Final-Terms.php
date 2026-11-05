<!DOCTYPE html>
<html>
<head>
    <title>Student Portal</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background: linear-gradient(135deg, #1565c0, #64b5f6);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            width: 350px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px #333;
            text-align: center;
        }

        h2 {
            color: #1565c0;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 7px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #1565c0;
            color: white;
            border: none;
            border-radius: 7px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #0d47a1;
        }

        p {
            font-size: 14px;
        }

        a {
            color: #1565c0;
            cursor: pointer;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- LOGIN FORM -->
    <div id="login">
        <h2>Student Portal</h2>
        <h3>Sign In</h3>

        <form onsubmit="loginUser(event)">
            <input type="email" id="loginEmail"
                   placeholder="Email Address" required>

            <input type="password" id="loginPassword"
                   placeholder="Password" required>

            <button type="submit">Sign In</button>
        </form>

        <p>Don't have an account?
            <a onclick="showRegister()">Register</a>
        </p>
    </div>

    <!-- REGISTER FORM -->
    <div id="register" class="hidden">
        <h2>Create Account</h2>

        <form onsubmit="registerUser(event)">
            <input type="text" id="name"
                   placeholder="Full Name" required>

            <input type="email" id="email"
                   placeholder="Email Address" required>

            <input type="password" id="password"
                   placeholder="Create Password"
                   minlength="6" required>

            <button type="submit">Register</button>
        </form>

        <p>Already have an account?
            <a onclick="showLogin()">Sign In</a>
        </p>
    </div>

</div>

<script>
    function showRegister() {
        document.getElementById("login").classList.add("hidden");
        document.getElementById("register").classList.remove("hidden");
    }

    function showLogin() {
        document.getElementById("register").classList.add("hidden");
        document.getElementById("login").classList.remove("hidden");
    }

    function registerUser(event) {
        event.preventDefault();

        alert("Registration successful!");
        showLogin();
    }

    function loginUser(event) {
        event.preventDefault();

        alert("Login button clicked!");
    }
</script>

</body>
</html>
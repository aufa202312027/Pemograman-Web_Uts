<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 450px;
            background: white;
            padding: 30px 40px;
            margin: 80px auto;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        form input[type="text"],
        form input[type="email"],
        form input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0 20px 0;
            border: 1.5px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        form input[type="text"]:focus,
        form input[type="email"]:focus,
        form input[type="password"]:focus {
            border-color: #4caf50;
            outline: none;
        }
        button {
            width: 100%;
            padding: 14px;
            background-color: #4caf50;
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            font-size: 17px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #43a047;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Registrasi</h2>
    <form action="proses.php" method="POST">
        <input type="text" name="nama" placeholder="Nama lengkap" required />
        <input type="email" name="email" placeholder="Email aktif" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Simpan</button>
    </form>
</div>

</body>
</html>

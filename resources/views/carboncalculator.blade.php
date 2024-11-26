<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="./carbon_calculator.css">    
    <title>Kalkulator Jejak Karbon</title>
    @include('layout.navbar')
</head>
<body>
    <h1>Kalkulator Jejak Karbon</h1>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="/calculate" method="POST">
        @csrf
        <label for="activity">Pilih Aktivitas:</label>
        <select name="activity" id="activity">
            <option value="driving">Berkendara</option>
            <option value="electricity">Penggunaan Listrik</option>
        </select>
        <br>
        <label for="distance">Jarak (km):</label>
        <input type="number" name="distance" id="distance">
        <br>
        <label for="electricity">Listrik (kWh):</label>
        <input type="number" name="electricity" id="electricity">
        <br>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>

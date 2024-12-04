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

    <form action="/kalkulatorkarbon" method="POST">
        @csrf
        <label for="activity">Pilih Aktivitas:</label>
        <select name="activity" id="activity">
            <option value="driving">Berkendara</option>
            <option value="electricity">Penggunaan Listrik</option>
        </select>
        <br>
        <label for="distance">angka km/kwh:</label>
        <input type="number" name="number" id="number" class="@error('number') is-invalid @enderror" value="{{ old('number') }}">
        @error('number')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <br>
        <br>
        <button type="submit">Hitung</button>
        <h4 class="mb-0 fw-bold" style="font-size:30px;">{{ $carbonEmission }}</h4>
    </form>
</body>
</html>

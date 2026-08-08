<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f4f4f9; }
        .card { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 300px; }
        .field { margin-bottom: 15px; }
        .field label { display: block; margin-bottom: 5px; }
        .field input { width: 100%; padding: 8px; box-sizing: border-box; }
        .error { color: red; font-size: 12px; }
        button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

<div class="card">
    <h2>Connexion</h2>

    <form method="POST" action="{{ route('login.post') }}">
        @csrf

        <div class="field">
            <label>Email :</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div class="field">
            <label>Mot de passe :</label>
            <input type="password" name="password">
        </div>

        <button type="submit">Se connecter</button>
    </form>

    <p style="text-align: center; font-size: 14px;">Pas encore de compte ? <a href="{{ route('register') }}">S'inscrire</a></p>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<title>Registro de Usuario</title>
@vite(['resources/css/app.css'])
</head>
<body>
    <div class="form-container">
        
        <h2>Registro de Estudiante</h2>

        @if(session('success'))
            <div class="success-alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('/register') }}" method="POST">
            @csrf
            
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Correo:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

            <label for="career_id">Carrera:</label>
            <select name="career_id" id="career_id" required>
                @foreach($careers as $career)
                    <option value="{{ $career->id }}">{{ $career->name }}</option>
                @endforeach
            </select>

            <div class="checkbox-group">
                <input type="checkbox" name="terms_accepted" id="terms" required>
                <label for="terms">Acepto los términos y condiciones</label>
            </div>

            <button type="submit">Registrar</button>
        </form>
        
    </div> </body>
</html>
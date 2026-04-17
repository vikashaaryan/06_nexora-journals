<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 flex items-center justify-center min-h-screen">

<div class="w-full max-w-md bg-white shadow-lg p-8">

<h2 class="text-2xl font-bold text-center mb-6">Admin Login</h2>

@if(session('error'))
<div class="bg-red-100 text-red-700 p-3 mb-4">
    {{ session('error') }}
</div>
@endif

<form method="POST" action="{{ route('admin.login.submit') }}">
@csrf

<div class="mb-4">
<label>Email</label>
<input type="email" name="email" class="w-full border p-3 mt-1">
</div>

<div class="mb-4">
<label>Password</label>
<input type="password" name="password" class="w-full border p-3 mt-1">
</div>

<button class="w-full bg-blue-600 text-white py-3">
Login
</button>

</form>

</div>

</body>
</html>
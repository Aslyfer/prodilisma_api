<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Create User</h2>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <!-- Select Role -->
            <div class="mb-3">
                <label for="role_id" class="form-label">Role</label>
                <select class="form-select" id="role_id" name="role_id" required>
                    <option value="">Select a role</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- First Name -->
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>

            <!-- Middle Name -->
            <div class="mb-3">
                <label for="middle_name" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middle_name" name="middle_name">
            </div>

            <!-- Last Name -->
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>

            <!-- Second Last Name -->
            <div class="mb-3">
                <label for="second_last_name" class="form-label">Second Last Name</label>
                <input type="text" class="form-control" id="second_last_name" name="second_last_name">
            </div>

            <!-- Phone -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" required>
            </div>

            <!-- Identification -->
            <div class="mb-3">
                <label for="identification" class="form-label">Identification</label>
                <input type="number" class="form-control" id="identification" name="identification" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Create User</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
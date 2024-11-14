<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>API Documentation</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        />
        <style>
            .endpoint {
                margin-bottom: 1.5rem;
            }
            .method {
                font-weight: bold;
            }
            .method-badge {
                font-size: 0.9rem;
                padding: 0.3em 0.6em;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 class="mt-5">API Documentation</h1>

            <!-- Authentication -->
            <h2 class="mt-4">Authentication</h2>

            <div class="endpoint">
                <span class="method-badge badge badge-primary">POST</span>
                <span class="method">/login</span>
                <p>Authenticates a user and provides an access token.</p>
                <p>
                    <strong>Request Body:</strong> JSON with "email" and
                    "password".
                </p>
                <p>
                    <strong>Response:</strong> Returns a token upon successful
                    login.
                </p>
            </div>

            <div class="endpoint">
                <span class="method-badge badge badge-primary">POST</span>
                <span class="method">/logout</span>
                <p>
                    Logs out the authenticated user and invalidates the token.
                </p>
                <p>
                    <strong>Authentication:</strong> Requires a valid token
                    (auth:sanctum).
                </p>
            </div>

            <!-- Users -->
            <h2 class="mt-4">Users</h2>

            <div class="endpoint">
                <span class="method-badge badge badge-success">GET</span>
                <span class="method">/users</span>
                <p>Retrieves a list of all users.</p>
            </div>

            <div class="endpoint">
                <span class="method-badge badge badge-primary">POST</span>
                <span class="method">/users</span>
                <p>Creates a new user.</p>
                <p>
                    <strong>Request Body:</strong> JSON with user details (name,
                    email, etc.).
                </p>
            </div>

            <div class="endpoint">
                <span class="method-badge badge badge-success">GET</span>
                <span class="method">/users/{id}</span>
                <p>Retrieves details of a specific user by ID.</p>
            </div>

            <div class="endpoint">
                <span class="method-badge badge badge-warning">PUT</span>
                <span class="method">/users/{id}</span>
                <p>Updates information for a specific user.</p>
                <p>
                    <strong>Request Body:</strong> JSON with updated user
                    details.
                </p>
            </div>

            <div class="endpoint">
                <span class="method-badge badge badge-danger">DELETE</span>
                <span class="method">/users/{id}</span>
                <p>Deletes a specific user by ID.</p>
            </div>

            <!-- Workers -->
            <h2 class="mt-4">Workers (Requires Role: Worker)</h2>

            <div class="endpoint">
                <span class="method-badge badge badge-success">GET</span>
                <span class="method">/workers</span>
                <p>
                    Retrieves a list of all workers. Accessible only to users
                    with "worker" role.
                </p>
            </div>

            <div class="endpoint">
                <span class="method-badge badge badge-primary">POST</span>
                <span class="method">/workers</span>
                <p>Creates a new worker record.</p>
                <p><strong>Request Body:</strong> JSON with worker details.</p>
            </div>

            <div class="endpoint">
                <span class="method-badge badge badge-success">GET</span>
                <span class="method">/workers/{id}</span>
                <p>Retrieves details of a specific worker by ID.</p>
            </div>

            <div class="endpoint">
                <span class="method-badge badge badge-warning">PUT</span>
                <span class="method">/workers/{id}</span>
                <p>Updates information for a specific worker.</p>
                <p>
                    <strong>Request Body:</strong> JSON with updated worker
                    details.
                </p>
            </div>

            <div class="endpoint">
                <span class="method-badge badge badge-danger">DELETE</span>
                <span class="method">/workers/{id}</span>
                <p>Deletes a specific worker by ID.</p>
            </div>

            <!-- History -->
            <h2 class="mt-4">History</h2>

            <div class="endpoint">
                <span class="method-badge badge badge-success">GET</span>
                <span class="method">/history</span>
                <p>Retrieves a list of all history records.</p>
            </div>

            <div class="endpoint">
                <span class="method-badge badge badge-primary">POST</span>
                <span class="method">/history</span>
                <p>Creates a new history record.</p>
                <p><strong>Request Body:</strong> JSON with history details.</p>
            </div>

            <div class="endpoint">
                <span class="method-badge badge badge-success">GET</span>
                <span class="method">/history/{id}</span>
                <p>Retrieves details of a specific history record by ID.</p>
            </div>

            <div class="endpoint">
                <span class="method-badge badge badge-warning">PUT</span>
                <span class="method">/history/{id}</span>
                <p>Updates a specific history record.</p>
                <p>
                    <strong>Request Body:</strong> JSON with updated history
                    details.
                </p>
            </div>

            <div class="endpoint">
                <span class="method-badge badge badge-danger">DELETE</span>
                <span class="method">/history/{id}</span>
                <p>Deletes a specific history record by ID.</p>
            </div>
        </div>
    </body>
</html>

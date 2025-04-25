<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Rôles</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .role-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 15px 0;
            padding: 20px;
            border-radius: 8px;
            color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .role-icon {
            font-size: 2.5em;
            margin-right: 20px;
        }
        .role-text {
            flex-grow: 1;
            font-size: 1.5em;
        }
        .admin { background-color: #28a745; }
        .directeur { background-color: #dc3545; }
        .secretaire { background-color: #007bff; }
        .comptable { background-color: #ffc107; }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Gestion des Rôles</h1>
        <div class="row">
            <?php
            
            $roles = [
                ['nom' => 'Administrateur', 'icone' => '👑', 'classe' => 'admin'],
                ['nom' => 'Directeur', 'icone' => '📊', 'classe' => 'directeur'],
                ['nom' => 'Secrétaire', 'icone' => '🖋️', 'classe' => 'secretaire'],
                ['nom' => 'Comptable', 'icone' => '💰', 'classe' => 'comptable']
            ];

            
            foreach ($roles as $role) {
                echo "
                <div class='col-md-6'>
                    <a href='./login.php' class='role-card {$role['classe']}'>
                        <span class='role-icon'>{$role['icone']}</span>
                        <span class='role-text'>{$role['nom']}</span>
                    </a>
                </div>";
            }
            ?>
        </div>
    </div>

  >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

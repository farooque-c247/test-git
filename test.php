<?php



interface User {
    public function getName(): string;
}

interface Admin {
    public function getPermissions(): array;
}

class SuperAdmin implements User, Admin {
    public function getName(): string {
        return 'Super Admin';
    }

    public function getPermissions(): array {
        return ['manage_users', 'view_reports'];
    }
}


function processAdmin(User & Admin $admin): void {
    echo "Process super admin: " . $admin->getName() . PHP_EOL;
    echo "Pe rs : " . implode(', ', $admin->getPermissions()) . PHP_EOL;
}

// Create an instance of SuperAdmin
$superAdmin = new SuperAdmin();

// Call the function
processAdmin($superAdmin);

document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.querySelector('form[action="procesar_login.php"]');
    const registerForm = document.querySelector('#registerForm');
    
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            const email = loginForm.email.value.trim();
            const password = loginForm.password.value;
            
            if (!email || !password) {
                e.preventDefault();
                alert('Por favor, completa todos los campos');
                return false;
            }
            
            if (!email.includes('@')) {
                e.preventDefault();
                alert('Email no válido');
                return false;
            }
        });
    }
    
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            const nombre = registerForm.nombre.value.trim();
            const email = registerForm.email.value.trim();
            const password = registerForm.password.value;
            const edad = registerForm.edad.value;
            
            let errors = [];
            
            if (nombre.length < 3) {
                errors.push('El nombre debe tener al menos 3 caracteres');
            }
            
            if (!email.includes('@')) {
                errors.push('Email no válido');
            }
            
            if (password.length < 6) {
                errors.push('La contraseña debe tener al menos 6 caracteres');
            }
            
            if (edad < 1 || edad > 120) {
                errors.push('La edad debe estar entre 1 y 120');
            }
            
            if (errors.length > 0) {
                e.preventDefault();
                alert(errors.join('\n'));
                return false;
            }
        });
    }
});
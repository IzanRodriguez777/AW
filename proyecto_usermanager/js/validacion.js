document.addEventListener('DOMContentLoaded', function() {
    const registerForm = document.getElementById('registerForm');
    
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            const nombre = registerForm.nombre.value.trim();
            const email = registerForm.email.value.trim();
            const password = registerForm.password.value;
            const edad = registerForm.edad.value;
            
            let errors = [];
            
            if (!nombre) {
                errors.push('El nombre es requerido');
            }
            
            if (!email.includes('@')) {
                errors.push('Email no válido');
            }
            
            if (!password) {
                errors.push('La contraseña es requerida');
            }
            
            if (!edad || edad < 1 || edad > 120) {
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
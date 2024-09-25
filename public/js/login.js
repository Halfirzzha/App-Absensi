function validateNIK(input) {
    // Remove any non-digit characters
    input.value = input.value.replace(/\D/g, '');

    // Limit to 10 digits
    if (input.value.length > 10) {
        input.value = input.value.slice(0, 10);
    }
}

function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    const eyeOpen = document.getElementById('eye-open');
    const eyeClosed = document.getElementById('eye-closed');

    console.log('Toggling password visibility');
    console.log('Current password input type:', passwordInput.type);

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeOpen.classList.add('d-none');
        eyeClosed.classList.remove('d-none');
    } else {
        passwordInput.type = 'password';
        eyeOpen.classList.remove('d-none');
        eyeClosed.classList.add('d-none');
    }
}

document.getElementById('password-visibility').addEventListener('mousedown', function () {
    console.log('mousedown event triggered');
    togglePasswordVisibility();
});

document.getElementById('password-visibility').addEventListener('mouseup', function () {
    console.log('mouseup event triggered');
    togglePasswordVisibility();
});

document.getElementById('password-visibility').addEventListener('mouseleave', function () {
    console.log('mouseleave event triggered');
    const passwordInput = document.getElementById('password');
    const eyeOpen = document.getElementById('eye-open');
    const eyeClosed = document.getElementById('eye-closed');

    if (passwordInput.type === 'text') {
        passwordInput.type = 'password';
        eyeOpen.classList.remove('d-none');
        eyeClosed.classList.add('d-none');
    }
});

// Add touch events for mobile devices
document.getElementById('password-visibility').addEventListener('touchstart', function () {
    console.log('touchstart event triggered');
    togglePasswordVisibility();
});

document.getElementById('password-visibility').addEventListener('touchend', function () {
    console.log('touchend event triggered');
    togglePasswordVisibility();
});

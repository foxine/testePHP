document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    const usernameInput = document.querySelector("input[type='text']");
    const passwordInput = document.querySelector("input[type='password']");
    const errorMessage = document.querySelector(".error-message");
    const successMessage = document.querySelector(".success-message");

    form.addEventListener("submit", async function(event) {
        event.preventDefault();

        errorMessage.style.display = "none";
        successMessage.style.display = "none";
        usernameInput.classList.remove("error", "success");
        passwordInput.classList.remove("error", "success");

        const username = usernameInput.value.trim();
        const password = passwordInput.value.trim();

        const apiHost = 'https://southti.com.br/desafio-front-end/user/auth';
        const apiToken = '8A9B362F-E744-4BEE-8031-39A23FA67E63';

        try {
            const response = await fetch(apiHost, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': apiToken
                },
                body: JSON.stringify({ email: username, password: password })
            });

            const data = await response.json();

            if (response.ok && data.status === 200) {
                successMessage.style.display = "block";
                usernameInput.classList.add("success");
                passwordInput.classList.add("success");
                console.log("Token de autenticação:", data.token);
            } else {
                throw new Error('E-mail ou senha inválidos');
            }
        } catch (error) {
            errorMessage.style.display = "block";
            usernameInput.classList.add("error");
            passwordInput.classList.add("error");
            console.error("Erro:", error.message);
        }
    });
});

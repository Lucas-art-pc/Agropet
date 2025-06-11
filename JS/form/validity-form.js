document.querySelector('form').addEventListener('submit', function(e) {

    e.defaultPrevented();
    let isValid = true;

    const cpf = document.getElementById('cpf_cli').value.trim();
    const telefone = document.getElementById('telefone_cli').value.trim();
    const email = document.getElementById('email_cli').value.trim();
    const senha = document.getElementById('senha_cli').value.trim();

    // Elementos de erro
    const cpfError = document.getElementById('cpfError');
    const telefoneError = document.getElementById('telefoneError');
    const emailError = document.getElementById('emailError');
    const senhaError = document.getElementById('senhaError');

    // Regex
    const cpfRegex = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;
    const telefoneRegex = /^\(?\d{2}\)?\s?\d{4,5}-\d{4}$/;

    // Reset erros
    cpfError.classList.add('hidden');
    telefoneError.classList.add('hidden');
    emailError.classList.add('hidden');
    senhaError.classList.add('hidden');

    // CPF
    if (!cpfRegex.test(cpf)) {
        cpfError.classList.remove('hidden');
        isValid = false;
    }

    // Telefone
    if (!telefoneRegex.test(telefone)) {
        telefoneError.classList.remove('hidden');
        isValid = false;
    }

    // Email
    if (!email.includes('@') || email.length < 5) {
        emailError.classList.remove('hidden');
        isValid = false;
    }

    // Senha
    if (senha.length < 6) {
        senhaError.classList.remove('hidden');
        isValid = false;
    }

    // Impede envio se inválido
    if (!isValid) {
        e.preventDefault();
    }
});


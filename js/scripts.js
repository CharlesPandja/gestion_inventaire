document.addEventListener('DOMContentLoaded', (event) => {
    const showRegisterLink = document.getElementById('show-register');
    const showLoginLink = document.getElementById('show-login');
    const connexionSection = document.getElementById('connexion-section');
    const inscriptionSection = document.getElementById('inscription-section');

    showRegisterLink.addEventListener('click', (e) => {
        e.preventDefault();
        connexionSection.style.display = 'none';
        inscriptionSection.style.display = 'block';
    });

    showLoginLink.addEventListener('click', (e) => {
        e.preventDefault();
        inscriptionSection.style.display = 'none';
        connexionSection.style.display = 'block';
    });
});
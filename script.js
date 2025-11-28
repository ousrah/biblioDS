document.addEventListener('DOMContentLoaded', function () {

    // === SCRIPT POUR AFFICHER/MASQUER LA SOLUTION ===
    document.querySelectorAll('.solution-toggle').forEach(button => {
        button.addEventListener('click', () => {
            const solutionContent = button.nextElementSibling;

            if (solutionContent.style.display === 'block') {
                solutionContent.style.display = 'none';
                button.textContent = 'Voir la solution';
            } else {
                solutionContent.style.display = 'block';
                button.textContent = 'Masquer la solution';
            }
        });
    });

    // === SCRIPT POUR LE BOUTON COPIER ===
    document.querySelectorAll('.copy-btn').forEach(button => {
        button.addEventListener('click', () => {
            const codeBlock = button.previousElementSibling; // Cible le <pre>
            const code = codeBlock.innerText;

            navigator.clipboard.writeText(code).then(() => {
                const originalText = button.textContent;
                button.textContent = 'Copié !';
                setTimeout(() => {
                    button.textContent = originalText;
                }, 2000);
            }).catch(err => {
                console.error('Erreur de copie : ', err);
            });
        });
    });

    // === SCRIPT POUR LES QUIZ ===
    document.querySelectorAll('.quiz-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            let score = 0;
            let total = 0;
            const resultDiv = this.querySelector('.quiz-result');
            
            // Réinitialiser l'affichage
            this.querySelectorAll('.quiz-feedback').forEach(el => el.remove());
            this.querySelectorAll('li').forEach(li => li.classList.remove('bg-green-100', 'bg-red-100', 'text-green-800', 'text-red-800'));

            const questions = this.querySelectorAll('.question-block');
            total = questions.length;

            questions.forEach(question => {
                const inputs = question.querySelectorAll('input[type="radio"]');
                let answered = false;
                
                inputs.forEach(input => {
                    if (input.checked) {
                        answered = true;
                        const li = input.closest('li');
                        if (input.value === 'correct') {
                            score++;
                            li.classList.add('bg-green-100', 'text-green-800');
                            const feedback = document.createElement('div');
                            feedback.className = 'quiz-feedback text-green-600 text-sm mt-1 font-semibold';
                            feedback.innerText = '✓ Bonne réponse !';
                            li.appendChild(feedback);
                        } else {
                            li.classList.add('bg-red-100', 'text-red-800');
                            const feedback = document.createElement('div');
                            feedback.className = 'quiz-feedback text-red-600 text-sm mt-1 font-semibold';
                            feedback.innerText = '✗ Mauvaise réponse.';
                            li.appendChild(feedback);
                        }
                    }
                });
            });

            resultDiv.classList.remove('hidden');
            if (score === total) {
                resultDiv.innerHTML = `<div class="p-4 bg-green-100 text-green-800 rounded-lg border border-green-200">
                    <strong>Excellent !</strong> Vous avez tout bon (${score}/${total}).
                </div>`;
            } else {
                resultDiv.innerHTML = `<div class="p-4 bg-orange-100 text-orange-800 rounded-lg border border-orange-200">
                    <strong>Résultat :</strong> ${score}/${total}. Essayez encore !
                </div>`;
            }
        });
    });

});

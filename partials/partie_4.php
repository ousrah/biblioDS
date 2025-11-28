<!-- =================================================================== -->
<!-- PARTIE 4 : VISUALISATION AVEC MATPLOTLIB -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-12">Partie 4 : Visualisation avec Matplotlib</h2>

<!-- ========== CHAPITRE 8 : COURBES ET GRAPHIQUES ========== -->
<section id="matplotlib-plots" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 8 : Tracer des Courbes</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Matplotlib est la bibliothèque standard pour créer des graphiques en Python. Le module <code>pyplot</code> est celui que l'on utilise le plus souvent.
    </p>
    
    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Premier graphique simple</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">matplotlib</span>.<span class="py-variable">pyplot</span> <span class="py-keyword">as</span> <span class="py-variable">plt</span>

<span class="py-variable">x</span> = [1, 2, 3, 4, 5]
<span class="py-variable">y</span> = [10, 20, 25, 30, 50]

<span class="py-comment"># Tracer la courbe</span>
<span class="py-variable">plt</span>.<span class="py-function">plot</span>(<span class="py-variable">x</span>, <span class="py-variable">y</span>)

<span class="py-comment"># Afficher le graphique</span>
<span class="py-variable">plt</span>.<span class="py-function">show</span>()</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- ========== CHAPITRE 9 : PERSONNALISATION ========== -->
<section id="matplotlib-custom" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 9 : Personnalisation</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Un bon graphique doit être lisible. On ajoute donc des titres, des légendes et des étiquettes aux axes.
    </p>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Exemple complet</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-variable">plt</span>.<span class="py-function">plot</span>(<span class="py-variable">x</span>, <span class="py-variable">y</span>, <span class="py-string">'r--'</span>, <span class="py-variable">label</span>=<span class="py-string">"Ventes"</span>) <span class="py-comment"># 'r--' = ligne rouge pointillée</span>

<span class="py-variable">plt</span>.<span class="py-function">title</span>(<span class="py-string">"Évolution des Ventes"</span>)
<span class="py-variable">plt</span>.<span class="py-function">xlabel</span>(<span class="py-string">"Mois"</span>)
<span class="py-variable">plt</span>.<span class="py-function">ylabel</span>(<span class="py-string">"Chiffre d'affaires (€)"</span>)
<span class="py-variable">plt</span>.<span class="py-function">legend</span>() <span class="py-comment"># Affiche la légende</span>

<span class="py-variable">plt</span>.<span class="py-function">show</span>()</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- ========== QUIZ MATPLOTLIB ========== -->
<section id="quiz-matplotlib" class="mb-16">
    <div class="bg-red-50 p-6 rounded-lg border border-red-100">
        <h3 class="text-2xl font-bold text-red-900 mb-4">Quiz : Visualisation</h3>
        <form class="quiz-form space-y-6">
            <!-- Question 1 -->
            <div class="question-block">
                <p class="font-semibold text-gray-800 mb-2">1. Quel module de Matplotlib est le plus utilisé ?</p>
                <ul class="space-y-2">
                    <li class="p-2 rounded hover:bg-white transition-colors"><label class="flex items-center cursor-pointer"><input type="radio" name="q1" value="correct" class="mr-2"> matplotlib.pyplot</label></li>
                    <li class="p-2 rounded hover:bg-white transition-colors"><label class="flex items-center cursor-pointer"><input type="radio" name="q1" value="wrong" class="mr-2"> matplotlib.graph</label></li>
                </ul>
            </div>

            <!-- Question 2 -->
            <div class="question-block">
                <p class="font-semibold text-gray-800 mb-2">2. Quelle fonction affiche le graphique à l'écran ?</p>
                <ul class="space-y-2">
                    <li class="p-2 rounded hover:bg-white transition-colors"><label class="flex items-center cursor-pointer"><input type="radio" name="q2" value="wrong" class="mr-2"> plt.draw()</label></li>
                    <li class="p-2 rounded hover:bg-white transition-colors"><label class="flex items-center cursor-pointer"><input type="radio" name="q2" value="correct" class="mr-2"> plt.show()</label></li>
                </ul>
            </div>

            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-red-700 transition-colors">Valider mes réponses</button>
            <div class="quiz-result hidden mt-4"></div>
        </form>
    </div>
</section>

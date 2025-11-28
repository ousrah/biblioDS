<!-- =================================================================== -->
<!-- PARTIE 3 : MANIPULATION DE DONNÉES AVEC PANDAS -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-12">Partie 3 : Manipulation de Données avec Pandas</h2>

<!-- ========== CHAPITRE 6 : SERIES ET DATAFRAMES ========== -->
<section id="pandas-structures" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 6 : Series et DataFrames</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Pandas introduit deux structures de données clés : la <strong>Series</strong> (colonne unique) et le <strong>DataFrame</strong> (tableau complet, comme une feuille Excel).
    </p>
    
    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Création d'un DataFrame</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">pandas</span> <span class="py-keyword">as</span> <span class="py-variable">pd</span>

<span class="py-comment"># Création manuelle via un dictionnaire</span>
<span class="py-variable">data</span> = {
    <span class="py-string">'Nom'</span>: [<span class="py-string">'Alice'</span>, <span class="py-string">'Bob'</span>, <span class="py-string">'Charlie'</span>],
    <span class="py-string">'Age'</span>: [25, 30, 35],
    <span class="py-string">'Ville'</span>: [<span class="py-string">'Paris'</span>, <span class="py-string">'Lyon'</span>, <span class="py-string">'Marseille'</span>]
}

<span class="py-variable">df</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>(<span class="py-variable">data</span>)
<span class="py-builtin">print</span>(<span class="py-variable">df</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- ========== CHAPITRE 7 : ANALYSE DE DONNÉES ========== -->
<section id="pandas-analysis" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 7 : Chargement et Analyse</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        En pratique, on charge souvent des données depuis un fichier CSV. Pandas rend cela trivial.
    </p>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Analyse exploratoire</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-comment"># Chargement (exemple)</span>
<span class="py-comment"># df = pd.read_csv('donnees.csv')</span>

<span class="py-comment"># Afficher les 5 premières lignes</span>
<span class="py-builtin">print</span>(<span class="py-variable">df</span>.<span class="py-function">head</span>())

<span class="py-comment"># Statistiques descriptives (moyenne, min, max...)</span>
<span class="py-builtin">print</span>(<span class="py-variable">df</span>.<span class="py-function">describe</span>())

<span class="py-comment"># Filtrage : Personnes de plus de 28 ans</span>
<span class="py-variable">plus_de_28</span> = <span class="py-variable">df</span>[<span class="py-variable">df</span>[<span class="py-string">'Age'</span>] > 28]
<span class="py-builtin">print</span>(<span class="py-variable">plus_de_28</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- ========== QUIZ PANDAS ========== -->
<section id="quiz-pandas" class="mb-16">
    <div class="bg-green-50 p-6 rounded-lg border border-green-100">
        <h3 class="text-2xl font-bold text-green-900 mb-4">Quiz : Maîtrisez-vous Pandas ?</h3>
        <form class="quiz-form space-y-6">
            <!-- Question 1 -->
            <div class="question-block">
                <p class="font-semibold text-gray-800 mb-2">1. Quelle fonction permet de lire un fichier CSV ?</p>
                <ul class="space-y-2">
                    <li class="p-2 rounded hover:bg-white transition-colors"><label class="flex items-center cursor-pointer"><input type="radio" name="q1" value="wrong" class="mr-2"> pd.load_csv()</label></li>
                    <li class="p-2 rounded hover:bg-white transition-colors"><label class="flex items-center cursor-pointer"><input type="radio" name="q1" value="correct" class="mr-2"> pd.read_csv()</label></li>
                    <li class="p-2 rounded hover:bg-white transition-colors"><label class="flex items-center cursor-pointer"><input type="radio" name="q1" value="wrong" class="mr-2"> pd.import_csv()</label></li>
                </ul>
            </div>

            <!-- Question 2 -->
            <div class="question-block">
                <p class="font-semibold text-gray-800 mb-2">2. Que fait `df.head()` par défaut ?</p>
                <ul class="space-y-2">
                    <li class="p-2 rounded hover:bg-white transition-colors"><label class="flex items-center cursor-pointer"><input type="radio" name="q2" value="correct" class="mr-2"> Affiche les 5 premières lignes</label></li>
                    <li class="p-2 rounded hover:bg-white transition-colors"><label class="flex items-center cursor-pointer"><input type="radio" name="q2" value="wrong" class="mr-2"> Affiche les noms des colonnes uniquement</label></li>
                </ul>
            </div>

            <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-green-700 transition-colors">Valider mes réponses</button>
            <div class="quiz-result hidden mt-4"></div>
        </form>
    </div>
</section>

<!-- =================================================================== -->
<!-- PARTIE 4 : BIBLIOTHÈQUES DE MANIPULATION DES DONNÉES PANDAS -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-12">Partie 4 : Bibliothèques de Manipulation des Données Pandas</h2>

<!-- =================================================================== -->
<!-- CHAPITRE 1 : INTRODUCTION ET CONCEPTS CLÉS -->
<!-- =================================================================== -->
<section id="pandas-intro" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 1 : Introduction et Concepts Clés</h3>
    
    <div class="mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-2">1. Qu'est-ce que Pandas ?</h4>
        <p class="text-gray-700 mb-4 leading-relaxed">
            <strong>Pandas</strong> est une bibliothèque Python de manipulation et d'analyse de données de haut niveau, construite sur la base de <strong>NumPy</strong>. C'est un outil essentiel pour l'analyse de données en Python.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-blue-50 p-6 rounded-lg border border-blue-100">
            <h5 class="font-bold text-blue-900 mb-3">Utilité de Pandas</h5>
            <ul class="list-disc ml-6 text-blue-800 space-y-2">
                <li><strong>Manipulation de données</strong> : Permet de manipuler des données tabulaires (similaires à une feuille de calcul Excel) et des séries chronologiques.</li>
                <li><strong>Nettoyage et organisation</strong> : Aide à nettoyer, filtrer, trier et organiser les données brutes.</li>
            </ul>
        </div>
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
            <h5 class="font-bold text-indigo-900 mb-3">Structures de Données Principales</h5>
            <ul class="list-disc ml-6 text-indigo-800 space-y-2">
                <li><strong>Series (Série)</strong> : Un tableau unidimensionnel étiqueté, capable de contenir n'importe quel type de données.</li>
                <li><strong>DataFrame</strong> : Une structure de données bidimensionnelle (tableau), avec des colonnes de types potentiellement différents, similaire à une table SQL.</li>
            </ul>
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 2 : LA STRUCTURE DE DONNÉES SERIES -->
<!-- =================================================================== -->
<section id="pandas-series" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 2 : La Structure de Données Series (Série)</h3>
    <p class="text-gray-700 mb-6">
        Une Série est la structure fondamentale pour construire des DataFrame. Elle peut être vue de deux manières : comme un tableau NumPy amélioré ou comme un dictionnaire Python spécialisé.
    </p>

    <!-- A. Comme un Tableau NumPy -->
    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">A. La Série comme un Tableau NumPy</h4>
        <p class="text-gray-700 mb-4">
            Une série enveloppe à la fois une séquence de valeurs et une séquence d'indices. Contrairement aux tableaux NumPy simples, les indices peuvent être de n'importe quel type.
        </p>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">pandas</span> <span class="py-keyword">as</span> <span class="py-variable">pd</span>

<span class="py-comment"># Création d'une Série simple</span>
<span class="py-variable">data</span> = <span class="py-variable">pd</span>.<span class="py-function">Series</span>([0.25, 0.50, 0.75, 1.0])

<span class="py-builtin">print</span>(<span class="py-variable">data</span>)
<span class="py-comment"># 0    0.25</span>
<span class="py-comment"># 1    0.50</span>
<span class="py-comment"># 2    0.75</span>
<span class="py-comment"># 3    1.00</span>
<span class="py-comment"># dtype: float64</span>

<span class="py-builtin">print</span>(<span class="py-string">"Valeurs :"</span>, <span class="py-variable">data</span>.<span class="py-variable">values</span>) <span class="py-comment"># [0.25 0.5 0.75 1. ]</span>
<span class="py-builtin">print</span>(<span class="py-string">"Index   :"</span>, <span class="py-variable">data</span>.<span class="py-variable">index</span>)  <span class="py-comment"># RangeIndex(start=0, stop=4, step=1)</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>

        <div class="mt-4 bg-gray-50 p-4 rounded border">
            <h6 class="font-bold text-gray-800 mb-2">Accès aux éléments (Comme un tableau)</h6>
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-comment"># Accès par indice numérique</span>
<span class="py-builtin">print</span>(<span class="py-variable">data</span>[1])    <span class="py-comment"># 0.5</span>

<span class="py-comment"># Accès par tranche (Slicing)</span>
<span class="py-builtin">print</span>(<span class="py-variable">data</span>[1:3])
<span class="py-comment"># 1    0.50</span>
<span class="py-comment"># 2    0.75</span></code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>

        <div class="mt-4 bg-gray-50 p-4 rounded border">
            <h6 class="font-bold text-gray-800 mb-2">Indices Explicites</h6>
            <p class="text-sm text-gray-600 mb-2">On peut définir nos propres indices (lettres, dates, etc.).</p>
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-variable">data</span> = <span class="py-variable">pd</span>.<span class="py-function">Series</span>([0.25, 0.5, 0.75, 1.0], 
                 <span class="py-variable">index</span>=[<span class="py-string">'a'</span>, <span class="py-string">'b'</span>, <span class="py-string">'c'</span>, <span class="py-string">'d'</span>])

<span class="py-builtin">print</span>(<span class="py-variable">data</span>[<span class="py-string">'c'</span>]) <span class="py-comment"># 0.75</span></code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>

    <!-- B. Comme un Dictionnaire -->
    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">B. La Série comme un Dictionnaire Python</h4>
        <p class="text-gray-700 mb-4">
            Une série fournit un mappage entre des clés (index) et des valeurs, tout comme un dictionnaire.
        </p>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-comment"># Création à partir d'un dictionnaire</span>
<span class="py-variable">population_dict</span> = {
    <span class="py-string">'Casablanca'</span>: 6200000,
    <span class="py-string">'Rabat'</span>: 1200000,
    <span class="py-string">'Marrakech'</span>: 950000,
    <span class="py-string">'Fès'</span>: 1100000
}
<span class="py-variable">population</span> = <span class="py-variable">pd</span>.<span class="py-function">Series</span>(<span class="py-variable">population_dict</span>)

<span class="py-builtin">print</span>(<span class="py-variable">population</span>)
<span class="py-comment"># Casablanca    6200000</span>
<span class="py-comment"># Rabat         1200000</span>
<span class="py-comment"># ...</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
            <div class="bg-white p-4 rounded border shadow-sm">
                <h6 class="font-bold text-indigo-600 mb-2">Accès par Clé</h6>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-builtin">print</span>(<span class="py-variable">population</span>[<span class="py-string">'Rabat'</span>])
<span class="py-comment"># 1200000</span>

<span class="py-comment"># Vérifier l'existence</span>
<span class="py-builtin">print</span>(<span class="py-string">'Paris'</span> <span class="py-keyword">in</span> <span class="py-variable">population</span>)
<span class="py-comment"># False</span></code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
            <div class="bg-white p-4 rounded border shadow-sm">
                <h6 class="font-bold text-indigo-600 mb-2">Slicing avec Clés</h6>
                <p class="text-xs text-gray-500 mb-1">⚠️ La borne de fin est INCLUSE !</p>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-builtin">print</span>(<span class="py-variable">population</span>[<span class="py-string">'Rabat'</span>:<span class="py-string">'Marrakech'</span>])
<span class="py-comment"># Rabat        1200000</span>
<span class="py-comment"># Marrakech     950000</span></code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 3 : LA STRUCTURE DE DONNÉES DATAFRAME -->
<!-- =================================================================== -->
<section id="pandas-dataframe" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 3 : La Structure de Données DataFrame</h3>
    <p class="text-gray-700 mb-6">
        Un <strong>DataFrame</strong> est la structure la plus puissante de Pandas. Il peut être considéré comme une collection de Séries alignées (partageant le même index). C'est l'équivalent d'une feuille Excel en Python.
    </p>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">1. Création d'un DataFrame</h4>
        <p class="text-gray-700 mb-2">
            La méthode la plus simple est d'assembler plusieurs Séries ou d'utiliser un dictionnaire de listes.
        </p>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-comment"># 1. Créons une deuxième série (Superficie)</span>
<span class="py-variable">area_dict</span> = {
    <span class="py-string">'Casablanca'</span>: 1615,
    <span class="py-string">'Rabat'</span>: 118,
    <span class="py-string">'Marrakech'</span>: 230,
    <span class="py-string">'Fès'</span>: 240
}
<span class="py-variable">area</span> = <span class="py-variable">pd</span>.<span class="py-function">Series</span>(<span class="py-variable">area_dict</span>)

<span class="py-comment"># 2. Assemblons le tout dans un DataFrame</span>
<span class="py-variable">data</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>({
    <span class="py-string">'population'</span>: <span class="py-variable">population</span>,
    <span class="py-string">'superficie'</span>: <span class="py-variable">area</span>
})

<span class="py-builtin">print</span>(<span class="py-variable">data</span>)
<span class="py-comment">#             population  superficie</span>
<span class="py-comment"># Casablanca     6200000        1615</span>
<span class="py-comment"># Rabat          1200000         118</span>
<span class="py-comment"># Marrakech       950000         230</span>
<span class="py-comment"># Fès            1100000         240</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Attributs Essentiels</h4>
        <p class="text-gray-700 mb-4">
            Comme les Séries, les DataFrames possèdent des attributs pour inspecter leur structure.
        </p>

        <div class="overflow-x-auto bg-white rounded-lg shadow-sm border mb-6">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Attribut</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-sm">
                    <tr><td class="px-6 py-3 font-mono text-indigo-600">.index</td><td class="px-6 py-3">Les étiquettes des lignes (ex: Casablanca, Rabat...)</td></tr>
                    <tr><td class="px-6 py-3 font-mono text-indigo-600">.columns</td><td class="px-6 py-3">Les noms des colonnes (ex: population, superficie)</td></tr>
                    <tr><td class="px-6 py-3 font-mono text-indigo-600">.values</td><td class="px-6 py-3">Les données brutes sous forme de tableau NumPy 2D</td></tr>
                    <tr><td class="px-6 py-3 font-mono text-indigo-600">.shape</td><td class="px-6 py-3">Dimensions (Lignes, Colonnes)</td></tr>
                </tbody>
            </table>
        </div>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-builtin">print</span>(<span class="py-variable">data</span>.<span class="py-variable">index</span>)
<span class="py-comment"># Index(['Casablanca', 'Rabat', 'Marrakech', 'Fès'], dtype='object')</span>

<span class="py-builtin">print</span>(<span class="py-variable">data</span>.<span class="py-variable">columns</span>)
<span class="py-comment"># Index(['population', 'superficie'], dtype='object')</span>

<span class="py-builtin">print</span>(<span class="py-variable">data</span>.<span class="py-variable">values</span>)
<span class="py-comment"># [[6200000    1615]</span>
<span class="py-comment">#  [1200000     118] ... ]</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- Exercice Pratique -->
    <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
        <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice : Gestion de Stock</h4>
        <p class="text-indigo-800 mb-4 text-sm">
            Créez un DataFrame représentant un stock de fruits avec les colonnes 'Prix' et 'Quantité'.
            <br>Fruits (Index) : Pomme, Banane, Orange.
            <br>Prix : 2, 1.5, 3
            <br>Quantité : 100, 50, 75
        </p>
        
        <details class="group">
            <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                <span class="mr-2">Voir la solution</span>
                <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </summary>
            <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">pandas</span> <span class="py-keyword">as</span> <span class="py-variable">pd</span>

<span class="py-variable">stock</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>({
    <span class="py-string">'Prix'</span>: [2, 1.5, 3],
    <span class="py-string">'Quantité'</span>: [100, 50, 75]
}, <span class="py-variable">index</span>=[<span class="py-string">'Pomme'</span>, <span class="py-string">'Banane'</span>, <span class="py-string">'Orange'</span>])

<span class="py-builtin">print</span>(<span class="py-variable">stock</span>)</code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
        </details>
    </div>
</section>

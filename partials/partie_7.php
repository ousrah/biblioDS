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

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">3. Inspection Rapide des Données</h4>
        <p class="text-gray-700 mb-4">
            Pour avoir un aperçu rapide de vos données sans tout afficher :
        </p>
        
        <div class="overflow-x-auto bg-white rounded-lg shadow-sm border mb-6">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr><th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Méthode</th><th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th></tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-sm">
                    <tr><td class="px-6 py-3 font-mono text-indigo-600">.head(n)</td><td class="px-6 py-3">Affiche les n premières lignes (5 par défaut).</td></tr>
                    <tr><td class="px-6 py-3 font-mono text-indigo-600">.tail(n)</td><td class="px-6 py-3">Affiche les n dernières lignes (5 par défaut).</td></tr>
                    <tr><td class="px-6 py-3 font-mono text-indigo-600">.info()</td><td class="px-6 py-3">Résumé concis (types, non-nulls, mémoire).</td></tr>
                    <tr><td class="px-6 py-3 font-mono text-indigo-600">.shape</td><td class="px-6 py-3">Dimensions du DataFrame (lignes, colonnes).</td></tr>
                </tbody>
            </table>
        </div>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-comment"># Les 2 premières lignes</span>
<span class="py-builtin">print</span>(<span class="py-variable">data</span>.<span class="py-function">head</span>(2))

<span class="py-comment"># Les dimensions</span>
<span class="py-builtin">print</span>(<span class="py-variable">data</span>.<span class="py-variable">shape</span>) 
<span class="py-comment"># (4, 2) -> 4 lignes, 2 colonnes</span>

<span class="py-comment"># Infos techniques</span>
<span class="py-variable">data</span>.<span class="py-function">info</span>()
<span class="py-comment"># class 'pandas.core.frame.DataFrame'</span>
<span class="py-comment"># Index: 4 entries, Casablanca to Fès</span>
<span class="py-comment"># Data columns (total 2 columns): ...</span></code></pre>
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



<section id="pandas-indexing" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 4 : Indexation Avancée et Sélection</h3>
    <p class="text-gray-700 mb-6">
        Accéder aux données avec précision est l'une des forces majeures de Pandas. Il est crucial de distinguer la sélection par <strong>étiquette (Label)</strong> de la sélection par <strong>position (Position)</strong>.
    </p>

    <!-- Context Dataset -->
    <div class="bg-yellow-50 p-4 rounded-lg border border-yellow-200 mb-8">
        <h5 class="font-bold text-yellow-800 mb-2">📊 Dataset Fil rouge : Gestion RH</h5>
        <p class="text-sm text-yellow-800 mb-2">Pour ce chapitre et les suivants, nous utiliserons un DataFrame <code>df_employes</code> réaliste.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">pandas</span> <span class="py-keyword">as</span> <span class="py-variable">pd</span>

<span class="py-variable">data</span> = {
    <span class="py-string">'Nom'</span>: [<span class="py-string">'Alice'</span>, <span class="py-string">'Bob'</span>, <span class="py-string">'Charlie'</span>, <span class="py-string">'David'</span>, <span class="py-string">'Eva'</span>],
    <span class="py-string">'Departement'</span>: [<span class="py-string">'RH'</span>, <span class="py-string">'IT'</span>, <span class="py-string">'Finance'</span>, <span class="py-string">'IT'</span>, <span class="py-string">'Marketing'</span>],
    <span class="py-string">'Salaire'</span>: [45000, 60000, 52000, 58000, 48000],
    <span class="py-string">'Ville'</span>: [<span class="py-string">'Paris'</span>, <span class="py-string">'Lyon'</span>, <span class="py-string">'Paris'</span>, <span class="py-string">'Marseille'</span>, <span class="py-string">'Lyon'</span>]
}

<span class="py-variable">df_employes</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>(<span class="py-variable">data</span>)
<span class="py-variable">df_employes</span> = <span class="py-variable">df_employes</span>.<span class="py-function">set_index</span>(<span class="py-string">'Nom'</span>) <span class="py-comment"># Utilisons 'Nom' comme index</span></code></pre>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">1. Sélection par Étiquette (.loc) vs Position (.iloc)</h4>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-blue-50 p-5 rounded-lg border-l-4 border-blue-500 shadow-sm">
                <h5 class="font-bold text-blue-900 mb-2 font-mono">.loc[ligne, colonne]</h5>
                <p class="text-sm text-blue-800 mb-3">Utilise les <strong>NOMS</strong> des index et des colonnes.</p>
                <ul class="list-disc ml-5 text-xs text-blue-700 space-y-1">
                    <li>Dernier élément inclus (inclusive).</li>
                    <li>Erreur si le label n'existe pas.</li>
                </ul>
            </div>
            <div class="bg-indigo-50 p-5 rounded-lg border-l-4 border-indigo-500 shadow-sm">
                <h5 class="font-bold text-indigo-900 mb-2 font-mono">.iloc[ligne, colonne]</h5>
                <p class="text-sm text-indigo-800 mb-3">Utilise les <strong>POSITIONS ENTIÈRES</strong> (0, 1, 2...).</p>
                <ul class="list-disc ml-5 text-xs text-indigo-700 space-y-1">
                    <li>Comme les listes Python.</li>
                    <li>Dernier élément exclu (exclusive).</li>
                </ul>
            </div>
        </div>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-comment"># --- EXEMPLE AVEC .LOC ---</span>
<span class="py-comment"># Sélectionner le salaire de Alice</span>
<span class="py-builtin">print</span>(<span class="py-variable">df_employes</span>.<span class="py-variable">loc</span>[<span class="py-string">'Alice'</span>, <span class="py-string">'Salaire'</span>]) <span class="py-comment"># 45000</span>

<span class="py-comment"># Sélectionner de Alice à Charlie, colonnes Departement et Ville</span>
<span class="py-builtin">print</span>(<span class="py-variable">df_employes</span>.<span class="py-variable">loc</span>[<span class="py-string">'Alice'</span>:<span class="py-string">'Charlie'</span>, [<span class="py-string">'Departement'</span>, <span class="py-string">'Ville'</span>]])

<span class="py-comment"># --- EXEMPLE AVEC .ILOC ---</span>
<span class="py-comment"># Sélectionner la 2ème ligne (Bob), 3ème colonne (Salaire) -> Index 1, 2</span>
<span class="py-builtin">print</span>(<span class="py-variable">df_employes</span>.<span class="py-variable">iloc</span>[1, 2]) <span class="py-comment"># 60000</span>

<span class="py-comment"># Sélectionner les 3 premières lignes et les 2 dernières colonnes</span>
<span class="py-builtin">print</span>(<span class="py-variable">df_employes</span>.<span class="py-variable">iloc</span>[0:3, -2:])</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Filtrage conditionnel (Masquage)</h4>
        <p class="text-gray-700 mb-4">
            C'est la méthode la plus courante pour extraire des données : poser une question logique (Vrai/Faux) au DataFrame.
        </p>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-comment"># 1. Créer un masque (Filtre)</span>
<span class="py-comment"># Qui gagne plus de 50 000 ?</span>
<span class="py-variable">masque_salaire</span> = <span class="py-variable">df_employes</span>[<span class="py-string">'Salaire'</span>] > 50000

<span class="py-comment"># 2. Appliquer le masque</span>
<span class="py-variable">riches</span> = <span class="py-variable">df_employes</span>[<span class="py-variable">masque_salaire</span>]
<span class="py-builtin">print</span>(<span class="py-variable">riches</span>)
<span class="py-comment"># Affiche Bob, Charlie, David</span>

<span class="py-comment"># 3. Conditions multiples (Et=&, Ou=|)</span>
<span class="py-comment"># Salaire > 50000 ET Ville est Paris</span>
<span class="py-variable">top_paris</span> = <span class="py-variable">df_employes</span>[(<span class="py-variable">df_employes</span>[<span class="py-string">'Salaire'</span>] > 50000) & (<span class="py-variable">df_employes</span>[<span class="py-string">'Ville'</span>] == <span class="py-string">'Paris'</span>)]</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- Exercices -->
    <div class="space-y-6">
        <!-- Exercice 1 -->
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
            <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice 1 : Sélection ciblée</h4>
            <p class="text-indigo-800 mb-4 text-sm">
                À partir de <code>df_employes</code>, affichez uniquement les colonnes "Nom" (qui est l'index) et "Salaire" pour les employés dont le nom est "Bob" ou "Eva".<br>
                <em>Indice : Utilisez .loc avec une liste de noms.</em>
            </p>
            
            <details class="group">
                <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                    <span class="mr-2">Voir la solution</span>
                    <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </summary>
                <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                    <pre class="code-block"><code class="language-python"><span class="py-comment"># Sélection par étiquettes spécifiques</span>
<span class="py-builtin">print</span>(<span class="py-variable">df_employes</span>.<span class="py-variable">loc</span>[[<span class="py-string">'Bob'</span>, <span class="py-string">'Eva'</span>], [<span class="py-string">'Salaire'</span>]])</code></pre>
                </div>
            </details>
        </div>

        <!-- Exercice 2 -->
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
            <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice 2 : Recherche complexe</h4>
            <p class="text-indigo-800 mb-4 text-sm">
                Trouvez tous les employés du département "IT" qui habitent à "Lyon" ou "Marseille".
            </p>
            
            <details class="group">
                <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                    <span class="mr-2">Voir la solution</span>
                    <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </summary>
                <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                    <pre class="code-block"><code class="language-python"><span class="py-comment"># Méthode 1 : Booléens classiques</span>
<span class="py-variable">cond_dept</span> = <span class="py-variable">df_employes</span>[<span class="py-string">'Departement'</span>] == <span class="py-string">'IT'</span>
<span class="py-variable">cond_ville</span> = <span class="py-variable">df_employes</span>[<span class="py-string">'Ville'</span>].<span class="py-function">isin</span>([<span class="py-string">'Lyon'</span>, <span class="py-string">'Marseille'</span>])

<span class="py-builtin">print</span>(<span class="py-variable">df_employes</span>[<span class="py-variable">cond_dept</span> & <span class="py-variable">cond_ville</span>])

<span class="py-comment"># Méthode 2 : Query (Plus lisible)</span>
<span class="py-builtin">print</span>(<span class="py-variable">df_employes</span>.<span class="py-function">query</span>(<span class="py-string">"Departement == 'IT' and Ville in ['Lyon', 'Marseille']"</span>))</code></pre>
                </div>
            </details>
        </div>
    </div>
</section>

<section id="pandas-cleaning" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 5 : Nettoyage des Données</h3>
    <p class="text-gray-700 mb-6">
        "Garbage in, garbage out". Avant toute analyse, il faut nettoyer les données. Pandas excelle dans la détection et la correction des anomalies comme les valeurs manquantes (<code>NaN</code>) ou les doublons.
    </p>

    <!-- Context Dataset -->
    <div class="bg-yellow-50 p-4 rounded-lg border border-yellow-200 mb-8">
        <h5 class="font-bold text-yellow-800 mb-2">📊 Dataset "Sale" (Dirty Data)</h5>
        <p class="text-sm text-yellow-800 mb-2">Introduisons des erreurs volontaires pour apprendre à les corriger.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-variable">data_dirty</span> = {
    <span class="py-string">'Nom'</span>: [<span class="py-string">'Alice'</span>, <span class="py-string">'Bob'</span>, <span class="py-string">'Charlie'</span>, <span class="py-string">'Alice'</span>, <span class="py-string">'David'</span>], <span class="py-comment"># Alice en double</span>
    <span class="py-string">'Age'</span>: [25, 30, <span class="py-variable">np</span>.<span class="py-variable">nan</span>, 25, 40],            <span class="py-comment"># Manquant pour Charlie</span>
    <span class="py-string">'Salaire'</span>: [45000, 60000, 52000, 45000, <span class="py-variable">np</span>.<span class="py-variable">nan</span>] <span class="py-comment"># Manquant pour David</span>
}

<span class="py-variable">df</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>(<span class="py-variable">data_dirty</span>)
<span class="py-builtin">print</span>(<span class="py-variable">df</span>)</code></pre>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">1. Gestion des Valeurs Manquantes (NaN)</h4>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-red-50 p-4 rounded border border-red-100">
                <h5 class="font-bold text-red-900 mb-2">Détection</h5>
                <ul class="list-disc ml-5 text-sm text-red-800">
                    <li><code>df.isnull()</code> : Renvoie True si NaN.</li>
                    <li><code>df.isnull().sum()</code> : Compte les NaN par colonne.</li>
                </ul>
            </div>
            <div class="bg-green-50 p-4 rounded border border-green-100">
                <h5 class="font-bold text-green-900 mb-2">Correction</h5>
                <ul class="list-disc ml-5 text-sm text-green-800">
                    <li><code>dropna()</code> : Supprime la ligne/colonne.</li>
                    <li><code>fillna(valeur)</code> : Remplace par une constante ou une moyenne.</li>
                </ul>
            </div>
        </div>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-comment"># 1. Identifier les manques</span>
<span class="py-builtin">print</span>(<span class="py-variable">df</span>.<span class="py-function">isnull</span>().<span class="py-function">sum</span>())
<span class="py-comment"># Age: 1, Salaire: 1</span>

<span class="py-comment"># 2. Stratégie radicale : Supprimer les lignes avec au moins un NaN</span>
<span class="py-variable">df_clean</span> = <span class="py-variable">df</span>.<span class="py-function">dropna</span>()

<span class="py-comment"># 3. Stratégie douce : Remplacer (Imputation)</span>
<span class="py-comment"># Remplir l'âge manquant par la moyenne des âges</span>
<span class="py-variable">age_moyen</span> = <span class="py-variable">df</span>[<span class="py-string">'Age'</span>].<span class="py-function">mean</span>()
<span class="py-variable">df</span>[<span class="py-string">'Age'</span>] = <span class="py-variable">df</span>[<span class="py-string">'Age'</span>].<span class="py-function">fillna</span>(<span class="py-variable">age_moyen</span>)

<span class="py-comment"># Remplir le salaire par 0 ou une valeur fixe</span>
<span class="py-variable">df</span>[<span class="py-string">'Salaire'</span>] = <span class="py-variable">df</span>[<span class="py-string">'Salaire'</span>].<span class="py-function">fillna</span>(0)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Gestion des Doublons</h4>
        <p class="text-gray-700 mb-4">
            Les doublons faussent les statistiques. Il est facile de les supprimer.
        </p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-comment"># Vérifier les doublons complets (toutes les colonnes identiques)</span>
<span class="py-builtin">print</span>(<span class="py-variable">df</span>.<span class="py-function">duplicated</span>())

<span class="py-comment"># Supprimer les doublons (garde la première occurrence par défaut)</span>
<span class="py-variable">df</span> = <span class="py-variable">df</span>.<span class="py-function">drop_duplicates</span>()

<span class="py-comment"># Supprimer basé sur une seule colonne (ex: Nom unique)</span>
<span class="py-variable">df</span>.<span class="py-function">drop_duplicates</span>(<span class="py-variable">subset</span>=[<span class="py-string">'Nom'</span>], <span class="py-variable">keep</span>=<span class="py-string">'last'</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
    
    <!-- Exercices -->
    <div class="space-y-6">
        <!-- Exercice 1 -->
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
            <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice 1 : Nettoyage sélectif</h4>
            <p class="text-indigo-800 mb-4 text-sm">
                Soit un DataFrame <code>examens</code> avec des colonnes "Etudiant", "Maths", "Physique". Certaines notes sont NaN.<br>
                Remplissez les NaN de "Maths" par 10 (moyenne par défaut) et supprimez les lignes où "Physique" est NaN.
            </p>
            
            <details class="group">
                <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                    <span class="mr-2">Voir la solution</span>
                    <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </summary>
                <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                    <pre class="code-block"><code class="language-python"><span class="py-comment"># Remplissage</span>
<span class="py-variable">examens</span>[<span class="py-string">'Maths'</span>] = <span class="py-variable">examens</span>[<span class="py-string">'Maths'</span>].<span class="py-function">fillna</span>(10)

<span class="py-comment"># Suppression ciblée</span>
<span class="py-variable">examens</span>.<span class="py-function">dropna</span>(<span class="py-variable">subset</span>=[<span class="py-string">'Physique'</span>], <span class="py-variable">inplace</span>=<span class="py-builtin">True</span>)</code></pre>
                </div>
            </details>
        </div>

        <!-- Exercice 2 -->
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
            <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice 2 : Doublons subtils</h4>
            <p class="text-indigo-800 mb-4 text-sm">
                Dans un journal de transactions bancaires, supprimez les doublons mais uniquement ceux qui ont le même "id_transaction", en gardant la dernière entrée (la plus récente).
            </p>
            
            <details class="group">
                <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                    <span class="mr-2">Voir la solution</span>
                    <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </summary>
                <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">pandas</span> <span class="py-keyword">as</span> <span class="py-variable">pd</span>

<span class="py-comment"># Création du DataFrame avec doublons</span>
<span class="py-variable">transactions</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>({
    <span class="py-string">'id_transaction'</span>: [101, 102, 103, 101, 104],
    <span class="py-string">'montant'</span>: [100, 250, 50, 100, 300],
    <span class="py-string">'date'</span>: [<span class="py-string">'2023-01-01'</span>, <span class="py-string">'2023-01-02'</span>, <span class="py-string">'2023-01-03'</span>, <span class="py-string">'2023-01-05'</span>, <span class="py-string">'2023-01-06'</span>]
})

<span class="py-builtin">print</span>(<span class="py-string">"Avant suppression :"</span>)
<span class="py-builtin">print</span>(<span class="py-variable">transactions</span>)

<span class="py-comment"># Suppression des doublons sur 'id_transaction', en gardant le dernier (le plus récent 2023-01-05 pour l'id 101)</span>
<span class="py-variable">transactions</span>.<span class="py-function">drop_duplicates</span>(<span class="py-variable">subset</span>=[<span class="py-string">'id_transaction'</span>], <span class="py-variable">keep</span>=<span class="py-string">'last'</span>, <span class="py-variable">inplace</span>=<span class="py-builtin">True</span>)

<span class="py-builtin">print</span>(<span class="py-string">"\nAprès suppression :"</span>)
<span class="py-builtin">print</span>(<span class="py-variable">transactions</span>)</code></pre>
                </div>
            </details>
        </div>
    </div>
</section>

<section id="pandas-merging" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 6 : Combinaison de DataFrames</h3>
    <p class="text-gray-700 mb-6">
        Les données sont rarement dans un seul fichier. Il faut souvent assembler des morceaux (Concaténation) ou croiser des informations (Fusion/Jointure).
    </p>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">1. Concaténation (Empilement)</h4>
        <p class="text-gray-700 mb-4">
            Imaginez coller deux feuilles Excel l'une en dessous de l'autre. C'est <code>pd.concat()</code>.
        </p>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-comment"># Deux équipes de vente</span>
<span class="py-variable">equipe_A</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>({<span class="py-string">'Vendeur'</span>: [<span class="py-string">'A1'</span>, <span class="py-string">'A2'</span>], <span class="py-string">'Vente'</span>: [100, 200]})
<span class="py-variable">equipe_B</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>({<span class="py-string">'Vendeur'</span>: [<span class="py-string">'B1'</span>], <span class="py-string">'Vente'</span>: [50]})

<span class="py-comment"># Rassembler tout le monde (axe 0 par défaut = vertical)</span>
<span class="py-variable">total</span> = <span class="py-variable">pd</span>.<span class="py-function">concat</span>([<span class="py-variable">equipe_A</span>, <span class="py-variable">equipe_B</span>], <span class="py-variable">ignore_index</span>=<span class="py-builtin">True</span>)

<span class="py-builtin">print</span>(<span class="py-variable">total</span>)
<span class="py-comment">#   Vendeur  Vente</span>
<span class="py-comment"># 0      A1    100</span>
<span class="py-comment"># 1      A2    200</span>
<span class="py-comment"># 2      B1     50</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Fusion (Jointures SQL)</h4>
        <p class="text-gray-700 mb-4">
            Pour enrichir un tableau avec des informations d'un autre (ex: ajouter le nom du département à un employé), on utilise <code>pd.merge()</code>.
        </p>

        <!-- Context Dataset Merge -->
        <div class="bg-yellow-50 p-4 rounded-lg border border-yellow-200 mb-6">
            <h5 class="font-bold text-yellow-800 mb-2">📊 Données relationnelles</h5>
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-variable">df_staff</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>({
    <span class="py-string">'Employe'</span>: [<span class="py-string">'Alice'</span>, <span class="py-string">'Bob'</span>, <span class="py-string">'Charlie'</span>],
    <span class="py-string">'Dept_ID'</span>: [1, 2, 99] <span class="py-comment"># Charlie est dans un département inconnu</span>
})

<span class="py-variable">df_depts</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>({
    <span class="py-string">'Dept_ID'</span>: [1, 2, 3],
    <span class="py-string">'Nom_Dept'</span>: [<span class="py-string">'RH'</span>, <span class="py-string">'IT'</span>, <span class="py-string">'Marketing'</span>]
})</code></pre>
            </div>
        </div>
        
        <div class="overflow-x-auto bg-white rounded-lg shadow-sm border mb-6">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr><th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Type (how)</th><th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Explication Logique</th></tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-sm">
                    <tr><td class="px-6 py-3 font-mono text-indigo-600 font-bold">'inner'</td><td class="px-6 py-3">Intersection. Ne garde que ceux qui sont présents <strong>dans les deux</strong> tables.</td></tr>
                    <tr><td class="px-6 py-3 font-mono text-indigo-600 font-bold">'left'</td><td class="px-6 py-3">Garde <strong>tout</strong> le tableau de gauche (Employés) et ajoute les infos de droite si disponibles (sinon NaN).</td></tr>
                    <tr><td class="px-6 py-3 font-mono text-indigo-600 font-bold">'outer'</td><td class="px-6 py-3">Union. Garde tout le monde, quitte à avoir des trous des deux côtés.</td></tr>
                </tbody>
            </table>
        </div>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-comment"># Inner Join : Charlie va disparaître (Dept 99 inconnu)</span>
<span class="py-builtin">print</span>(<span class="py-variable">pd</span>.<span class="py-function">merge</span>(<span class="py-variable">df_staff</span>, <span class="py-variable">df_depts</span>, <span class="py-variable">on</span>=<span class="py-string">'Dept_ID'</span>, <span class="py-variable">how</span>=<span class="py-string">'inner'</span>))

<span class="py-comment"># Left Join : Charlie reste, mais Nom_Dept sera NaN</span>
<span class="py-builtin">print</span>(<span class="py-variable">pd</span>.<span class="py-function">merge</span>(<span class="py-variable">df_staff</span>, <span class="py-variable">df_depts</span>, <span class="py-variable">on</span>=<span class="py-string">'Dept_ID'</span>, <span class="py-variable">how</span>=<span class="py-string">'left'</span>))</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- Exercices -->
    <div class="space-y-6">
        <!-- Exercice 1 -->
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
            <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice 1 : Consolidation mensuelle</h4>
            <p class="text-indigo-800 mb-4 text-sm">
                Vous avez les ventes de Janvier et Février dans deux DataFrames distincts.<br>
                Créez un DataFrame unique <code>ventes_Q1</code> contenant toutes les lignes.
            </p>
            
            <details class="group">
                <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                    <span class="mr-2">Voir la solution</span>
                    <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </summary>
                <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">pandas</span> <span class="py-keyword">as</span> <span class="py-variable">pd</span>

<span class="py-comment"># Données de Janvier</span>
<span class="py-variable">janvier</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>({
    <span class="py-string">'Produit'</span>: [<span class="py-string">'Pomme'</span>, <span class="py-string">'Orange'</span>],
    <span class="py-string">'Ventes'</span>: [150, 200]
})

<span class="py-comment"># Données de Février</span>
<span class="py-variable">fevrier</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>({
    <span class="py-string">'Produit'</span>: [<span class="py-string">'Pomme'</span>, <span class="py-string">'Banane'</span>],
    <span class="py-string">'Ventes'</span>: [120, 180]
})

<span class="py-comment"># Consolidation</span>
<span class="py-variable">ventes_Q1</span> = <span class="py-variable">pd</span>.<span class="py-function">concat</span>([<span class="py-variable">janvier</span>, <span class="py-variable">fevrier</span>], <span class="py-variable">ignore_index</span>=<span class="py-builtin">True</span>)

<span class="py-builtin">print</span>(<span class="py-variable">ventes_Q1</span>)</code></pre>
                </div>
            </details>
        </div>

        <!-- Exercice 2 -->
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
            <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice 2 : Catalogues produits</h4>
            <p class="text-indigo-800 mb-4 text-sm">
                Table <code>produits</code> (id_prod, nom, prix, id_cat) et Table <code>categories</code> (id_cat, nom_categorie).<br>
                Affichez le nom de chaque produit avec le nom de sa catégorie. Si un produit n'a pas de catégorie, il doit quand même apparaître.
            </p>
            
            <details class="group">
                <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                    <span class="mr-2">Voir la solution</span>
                    <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </summary>
                <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">pandas</span> <span class="py-keyword">as</span> <span class="py-variable">pd</span>

<span class="py-comment"># Table Produits</span>
<span class="py-variable">produits</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>({
    <span class="py-string">'id_prod'</span>: [1, 2, 3, 4],
    <span class="py-string">'nom'</span>: [<span class="py-string">'Laptop'</span>, <span class="py-string">'Souris'</span>, <span class="py-string">'Clavier'</span>, <span class="py-string">'Écran'</span>],
    <span class="py-string">'prix'</span>: [1200, 20, 45, 150],
    <span class="py-string">'id_cat'</span>: [100, 101, 101, 999] <span class="py-comment"># 999 = Catégorie inconnue</span>
})

<span class="py-comment"># Table Catégories</span>
<span class="py-variable">categories</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>({
    <span class="py-string">'id_cat'</span>: [100, 101, 102],
    <span class="py-string">'nom_categorie'</span>: [<span class="py-string">'Informatique'</span>, <span class="py-string">'Accessoire'</span>, <span class="py-string">'Bureautique'</span>]
})

<span class="py-comment"># Fusion Left Join pour garder tous les produits</span>
<span class="py-variable">resultat</span> = <span class="py-variable">pd</span>.<span class="py-function">merge</span>(<span class="py-variable">produits</span>, <span class="py-variable">categories</span>, <span class="py-variable">on</span>=<span class="py-string">'id_cat'</span>, <span class="py-variable">how</span>=<span class="py-string">'left'</span>)

<span class="py-builtin">print</span>(<span class="py-variable">resultat</span>[[<span class="py-string">'nom'</span>, <span class="py-string">'nom_categorie'</span>]])</code></pre>
                </div>
            </details>
        </div>
    </div>
</section>

<section id="pandas-stats" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 7 : Tri, Statistiques et GroupBy</h3>
    <p class="text-gray-700 mb-6">
        Transformer des données brutes en informations utiles (Insights). La clé de voute de l'analyse est souvent le regroupement (GroupBy).
    </p>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">1. Tri et Analyses Rapides</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <div>
                <h5 class="font-bold text-gray-800 mb-2">Trier (Sort)</h5>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-comment"># Trier par Salaire décroissant</span>
<span class="py-variable">df</span>.<span class="py-function">sort_values</span>(<span class="py-variable">by</span>=<span class="py-string">'Salaire'</span>, <span class="py-variable">ascending</span>=<span class="py-builtin">False</span>)

<span class="py-comment"># Multi-critères (Dept puis Salaire)</span>
<span class="py-variable">df</span>.<span class="py-function">sort_values</span>(<span class="py-variable">by</span>=[<span class="py-string">'Dept'</span>, <span class="py-string">'Salaire'</span>])</code></pre>
                </div>
            </div>
            <div>
                <h5 class="font-bold text-gray-800 mb-2">Décrire (Describe)</h5>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-comment"># Stats rapides (mean, std, min, max...)</span>
<span class="py-variable">df</span>.<span class="py-function">describe</span>()

<span class="py-comment"># Compter les occurrences (Fréquence)</span>
<span class="py-variable">df</span>[<span class="py-string">'Ville'</span>].<span class="py-function">value_counts</span>()
<span class="py-comment"># Paris: 15, Lyon: 10...</span></code></pre>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Agrégation avec GroupBy</h4>
        <p class="text-gray-700 mb-4">
            C'est l'opération "Split-Apply-Combine". On divise le DataFrame en groupes, on applique une fonction (somme, moyenne...), et on combine le résultat.
        </p>
        
        <!-- Context Dataset GroupBy -->
        <div class="bg-yellow-50 p-4 rounded-lg border border-yellow-200 mb-6">
            <h5 class="font-bold text-yellow-800 mb-2">📊 Question Business</h5>
            <p class="text-sm text-yellow-800">"Quel est le salaire moyen par Département ?"</p>
        </div>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-comment"># 1. Grouper par Département</span>
<span class="py-variable">groupes</span> = <span class="py-variable">df_employes</span>.<span class="py-function">groupby</span>(<span class="py-string">'Departement'</span>)

<span class="py-comment"># 2. Appliquer une agrégation (Moyenne sur le Salaire)</span>
<span class="py-variable">moyennes</span> = <span class="py-variable">groupes</span>[<span class="py-string">'Salaire'</span>].<span class="py-function">mean</span>()

<span class="py-builtin">print</span>(<span class="py-variable">moyennes</span>)
<span class="py-comment"># Departement</span>
<span class="py-comment"># Finance      52000.0</span>
<span class="py-comment"># IT           59000.0</span>
<span class="py-comment"># ...</span>

<span class="py-comment"># Plusieurs métriques d'un coup</span>
<span class="py-variable">stats</span> = <span class="py-variable">df_employes</span>.<span class="py-function">groupby</span>(<span class="py-string">'Departement'</span>)[<span class="py-string">'Salaire'</span>].<span class="py-function">agg</span>([<span class="py-string">'mean'</span>, <span class="py-string">'max'</span>, <span class="py-string">'count'</span>])</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- Exercices -->
    <div class="space-y-6">
        <!-- Exercice 1 -->
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
            <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice 1 : Le Top 3</h4>
            <p class="text-indigo-800 mb-4 text-sm">
                Affichez les 3 employés les mieux payés.<br>
            </p>
            
            <details class="group">
                <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                    <span class="mr-2">Voir la solution</span>
                    <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </summary>
                <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                    <pre class="code-block"><code class="language-python"><span class="py-variable">df_employes</span>.<span class="py-function">sort_values</span>(<span class="py-variable">by</span>=<span class="py-string">'Salaire'</span>, <span class="py-variable">ascending</span>=<span class="py-builtin">False</span>).<span class="py-function">head</span>(3)</code></pre>
                </div>
            </details>
        </div>

        <!-- Exercice 2 -->
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
            <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice 2 : Analyse des Ventes</h4>
            <p class="text-indigo-800 mb-4 text-sm">
                Soit un DataFrame <code>ventes</code> (Region, Montant). Calculez le chiffre d'affaires total (somme) par Région.
            </p>
            
            <details class="group">
                <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                    <span class="mr-2">Voir la solution</span>
                    <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </summary>
                <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                    <pre class="code-block"><code class="language-python"><span class="py-variable">ca_region</span> = <span class="py-variable">ventes</span>.<span class="py-function">groupby</span>(<span class="py-string">'Region'</span>)[<span class="py-string">'Montant'</span>].<span class="py-function">sum</span>()
<span class="py-builtin">print</span>(<span class="py-variable">ca_region</span>)</code></pre>
                </div>
            </details>
        </div>
    </div>
</section>

<section id="pandas-io" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 8 : Lecture et Écriture de Fichiers</h3>
    <p class="text-gray-700 mb-6">
        Pandas communique avec le monde extérieur. Il peut lire et écrire dans une multitude de formats (CSV, Excel, JSON, SQL, Parquet...).
    </p>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">1. Lire des données (Input)</h4>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-gray-50 p-4 rounded border border-gray-200">
                <h5 class="font-bold text-gray-900 mb-2">CSV (.csv)</h5>
                <p class="text-xs text-gray-600 mb-2">Le format le plus universel.</p>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-variable">df</span> = <span class="py-variable">pd</span>.<span class="py-function">read_csv</span>(
    <span class="py-string">'donnees.csv'</span>,
    <span class="py-variable">sep</span>=<span class="py-string">';'</span>,       <span class="py-comment"># Séparateur (souvent , ou ;)</span>
    <span class="py-variable">encoding</span>=<span class="py-string">'utf-8'</span>, <span class="py-comment"># Pour les accents</span>
    <span class="py-variable">index_col</span>=<span class="py-string">'ID'</span> <span class="py-comment"># Utiliser une col comme index</span>
)</code></pre>
                </div>
            </div>
            <div class="bg-green-50 p-4 rounded border border-green-200">
                <h5 class="font-bold text-green-900 mb-2">Excel (.xlsx)</h5>
                <p class="text-xs text-green-800 mb-2">Nécessite la librairie <code>openpyxl</code>.</p>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-variable">df</span> = <span class="py-variable">pd</span>.<span class="py-function">read_excel</span>(
    <span class="py-string">'rapport.xlsx'</span>,
    <span class="py-variable">sheet_name</span>=<span class="py-string">'Feuille1'</span>
)</code></pre>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Sauvegarder des données (Output)</h4>
        <p class="text-gray-700 mb-4">
            Une fois vos analyses terminées (nettoyage, calculs...), vous devez sauvegarder le résultat.
        </p>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-comment"># 1. Vers CSV (Le classique)</span>
<span class="py-comment"># index=False évite d'écrire la colonne d'index (0, 1, 2...) dans le fichier</span>
<span class="py-variable">df</span>.<span class="py-function">to_csv</span>(<span class="py-string">'resultat_final.csv'</span>, <span class="py-variable">index</span>=<span class="py-builtin">False</span>, <span class="py-variable">sep</span>=<span class="py-string">','</span>)

<span class="py-comment"># 2. Vers Excel</span>
<span class="py-variable">df</span>.<span class="py-function">to_excel</span>(<span class="py-string">'bilan_2024.xlsx'</span>, <span class="py-variable">sheet_name</span>=<span class="py-string">'Bilan'</span>)

<span class="py-comment"># 3. Vers JSON (Pour le web)</span>
<span class="py-variable">df</span>.<span class="py-function">to_json</span>(<span class="py-string">'data.json'</span>, <span class="py-variable">orient</span>=<span class="py-string">'records'</span>, <span class="py-variable">indent</span>=4)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- Exercices -->
    <div class="space-y-6">
        <!-- Exercice 1 -->
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
            <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice 1 : Lecture complexe</h4>
            <p class="text-indigo-800 mb-4 text-sm">
                Vous devez lire un fichier "clients.txt" où les colonnes sont séparées par des tabulations (<code>\t</code>) et il n'y a pas d'en-tête (header).
            </p>
            
            <details class="group">
                <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                    <span class="mr-2">Voir la solution</span>
                    <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </summary>
                <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                    <pre class="code-block"><code class="language-python"><span class="py-comment"># header=None indique qu'il n'y a pas de noms de colonnes dans le fichier</span>
<span class="py-comment"># names=[...] permet de les définir manuellement</span>
<span class="py-variable">df</span> = <span class="py-variable">pd</span>.<span class="py-function">read_csv</span>(<span class="py-string">'clients.txt'</span>, <span class="py-variable">sep</span>=<span class="py-string">'\t'</span>, <span class="py-variable">header</span>=<span class="py-builtin">None</span>, <span class="py-variable">names</span>=[<span class="py-string">'ID'</span>, <span class="py-string">'Nom'</span>, <span class="py-string">'Email'</span>])</code></pre>
                </div>
            </details>
        </div>

        <!-- Exercice 2 -->
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
            <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice 2 : Export filtré</h4>
            <p class="text-indigo-800 mb-4 text-sm">
                Sauvegardez dans "rh_paris.csv" uniquement les employés habitant à Paris.
            </p>
            
            <details class="group">
                <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                    <span class="mr-2">Voir la solution</span>
                    <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </summary>
                <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                    <pre class="code-block"><code class="language-python"><span class="py-variable">df_paris</span> = <span class="py-variable">df_employes</span>[<span class="py-variable">df_employes</span>[<span class="py-string">'Ville'</span>] == <span class="py-string">'Paris'</span>]
<span class="py-variable">df_paris</span>.<span class="py-function">to_csv</span>(<span class="py-string">'rh_paris.csv'</span>)</code></pre>
                </div>
            </details>
        </div>
    </div>
</section>

<section id="pandas-advanced-stats" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 9 : Statistiques Avancées et Séries Temporelles</h3>
    <p class="text-gray-700 mb-6">
        Au-delà des bases, Pandas est un outil redoutable pour l'analyse temporelle (Time Series) et les calculs statistiques poussés.
    </p>

    <!-- Context Dataset Time Series -->
    <div class="bg-yellow-50 p-4 rounded-lg border border-yellow-200 mb-8">
        <h5 class="font-bold text-yellow-800 mb-2">📊 Dataset "Ventes Chronologiques"</h5>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">pandas</span> <span class="py-keyword">as</span> <span class="py-variable">pd</span>

<span class="py-variable">data_ventes</span> = {
    <span class="py-string">'Date'</span>: [<span class="py-string">'2023-01-15'</span>, <span class="py-string">'2023-01-20'</span>, <span class="py-string">'2023-02-10'</span>, <span class="py-string">'2023-03-05'</span>, <span class="py-string">'2024-01-10'</span>],
    <span class="py-string">'Montant'</span>: [150, 200, 120, 300, 400],
    <span class="py-string">'Produit'</span>: [<span class="py-string">'A'</span>, <span class="py-string">'B'</span>, <span class="py-string">'A'</span>, <span class="py-string">'C'</span>, <span class="py-string">'A'</span>]
}

<span class="py-variable">df_ventes</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>(<span class="py-variable">data_ventes</span>)

<span class="py-comment"># Conversion cruciale vers le format Datetime</span>
<span class="py-variable">df_ventes</span>[<span class="py-string">'Date'</span>] = <span class="py-variable">pd</span>.<span class="py-function">to_datetime</span>(<span class="py-variable">df_ventes</span>[<span class="py-string">'Date'</span>])</code></pre>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">1. Manipulation de Dates (.dt accessor)</h4>
        <p class="text-gray-700 mb-4">
            Une fois convertie, la colonne Date permet d'extraire très facilement des composants (Mois, Année, Jour de la semaine...).
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="bg-indigo-50 p-4 rounded border border-indigo-100">
                <h5 class="font-bold text-indigo-900 mb-2">Extraction</h5>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-variable">df_ventes</span>[<span class="py-string">'Annee'</span>] = <span class="py-variable">df_ventes</span>[<span class="py-string">'Date'</span>].<span class="py-variable">dt</span>.<span class="py-variable">year</span>
<span class="py-variable">df_ventes</span>[<span class="py-string">'Mois'</span>] = <span class="py-variable">df_ventes</span>[<span class="py-string">'Date'</span>].<span class="py-variable">dt</span>.<span class="py-variable">month</span>
<span class="py-variable">df_ventes</span>[<span class="py-string">'Jour'</span>] = <span class="py-variable">df_ventes</span>[<span class="py-string">'Date'</span>].<span class="py-variable">dt</span>.<span class="py-function">day_name</span>()
<span class="py-builtin">print</span>(<span class="py-variable">df_ventes</span>[[<span class="py-string">'Date'</span>, <span class="py-string">'Annee'</span>, <span class="py-string">'Jour'</span>]])</code></pre>
                </div>
            </div>
            <div class="bg-blue-50 p-4 rounded border border-blue-100">
                <h5 class="font-bold text-blue-900 mb-2">Filtrage Temporel</h5>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-comment"># Ventes après Février 2023</span>
<span class="py-variable">filtre</span> = <span class="py-variable">df_ventes</span>[<span class="py-string">'Date'</span>] > <span class="py-string">'2023-02-01'</span>

<span class="py-comment"># Sélectionner une année spécifique</span>
<span class="py-variable">ventes_2024</span> = <span class="py-variable">df_ventes</span>[<span class="py-variable">df_ventes</span>[<span class="py-string">'Date'</span>].<span class="py-variable">dt</span>.<span class="py-variable">year</span> == 2024]</code></pre>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Fonctions Statistiques (Agrégation & Transformation)</h4>
        
        <div class="overflow-x-auto bg-white rounded-lg shadow-sm border mb-6">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr><th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Fonction</th><th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th></tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-sm">
                    <tr><td class="px-6 py-3 font-mono text-indigo-600">.sum(), .mean(), .median()</td><td class="px-6 py-3">Somme, Moyenne, Médiane.</td></tr>
                    <tr><td class="px-6 py-3 font-mono text-indigo-600">.cumsum()</td><td class="px-6 py-3">Somme cumulée (Running Total).</td></tr>
                    <tr><td class="px-6 py-3 font-mono text-indigo-600">.quantile(0.5)</td><td class="px-6 py-3">Quantile (0.5 = Médiane, 0.25 = Q1...).</td></tr>
                    <tr><td class="px-6 py-3 font-mono text-indigo-600">.var(), .std()</td><td class="px-6 py-3">Variance et Écart-Type.</td></tr>
                </tbody>
            </table>
        </div>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-comment"># Somme cumulée des ventes au fil du temps</span>
<span class="py-variable">df_ventes</span> = <span class="py-variable">df_ventes</span>.<span class="py-function">sort_values</span>(<span class="py-string">'Date'</span>)
<span class="py-variable">df_ventes</span>[<span class="py-string">'Cumul'</span>] = <span class="py-variable">df_ventes</span>[<span class="py-string">'Montant'</span>].<span class="py-function">cumsum</span>()

<span class="py-builtin">print</span>(<span class="py-variable">df_ventes</span>[[<span class="py-string">'Date'</span>, <span class="py-string">'Montant'</span>, <span class="py-string">'Cumul'</span>]])</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- Exercices -->
    <div class="space-y-6">
        <!-- Exercice 1 -->
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
            <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice 1 : Analyse mensuelle</h4>
            <p class="text-indigo-800 mb-4 text-sm">
                Ajoutez une colonne "Nom_Mois" (Janvier, Février...) et calculez le montant total des ventes par Mois (toutes années confondues).
            </p>
            
            <details class="group">
                <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                    <span class="mr-2">Voir la solution</span>
                    <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </summary>
                <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                    <pre class="code-block"><code class="language-python"><span class="py-variable">df_ventes</span>[<span class="py-string">'Nom_Mois'</span>] = <span class="py-variable">df_ventes</span>[<span class="py-string">'Date'</span>].<span class="py-variable">dt</span>.<span class="py-variable">month_name</span>()
<span class="py-variable">resultat</span> = <span class="py-variable">df_ventes</span>.<span class="py-function">groupby</span>(<span class="py-string">'Nom_Mois'</span>)[<span class="py-string">'Montant'</span>].<span class="py-function">sum</span>()
<span class="py-builtin">print</span>(<span class="py-variable">resultat</span>)</code></pre>
                </div>
            </details>
        </div>

        <!-- Exercice 2 -->
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
            <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice 2 : Filtrage temporel</h4>
            <p class="text-indigo-800 mb-4 text-sm">
                Affichez uniquement les ventes réalisées le "Week-end" (Samedi ou Dimanche).<br>
                <em>Indice : Utilisez <code>dt.dayofweek</code> (5=Samedi, 6=Dimanche) ou <code>dt.day_name()</code>.</em>
            </p>
            
            <details class="group">
                <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                    <span class="mr-2">Voir la solution</span>
                    <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </summary>
                <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                    <pre class="code-block"><code class="language-python"><span class="py-variable">weekend</span> = <span class="py-variable">df_ventes</span>[<span class="py-variable">df_ventes</span>[<span class="py-string">'Date'</span>].<span class="py-variable">dt</span>.<span class="py-variable">dayofweek</span>.<span class="py-function">isin</span>([5, 6])]
<span class="py-builtin">print</span>(<span class="py-variable">weekend</span>)</code></pre>
                </div>
            </details>
        </div>
    </div>
</section>

<section id="pandas-casestudy" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 10 : Étude de Cas Complète (Projet Final)</h3>
    <p class="text-gray-700 mb-6">
        Mettez en pratique tout ce que vous avez appris. Nous allons analyser un jeu de données de commandes E-commerce réaliste.
    </p>

    <!-- Context Dataset Project -->
    <div class="bg-green-50 p-4 rounded-lg border border-green-200 mb-8">
        <h5 class="font-bold text-green-800 mb-2">📦 Dataset "Commandes E-commerce"</h5>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-variable">data_ecommerce</span> = {
    <span class="py-string">'ID_Commande'</span>: [101, 102, 103, 104, 105, 106],
    <span class="py-string">'Date'</span>: [<span class="py-string">'2023-01-15'</span>, <span class="py-string">'2023-01-20'</span>, <span class="py-string">'2023-02-10'</span>, <span class="py-string">'2023-02-12'</span>, <span class="py-string">'2023-03-05'</span>, <span class="py-string">'2023-03-05'</span>],
    <span class="py-string">'Produit'</span>: [<span class="py-string">'Ordinateur'</span>, <span class="py-string">'Souris'</span>, <span class="py-string">'Clavier'</span>, <span class="py-string">'Écran'</span>, <span class="py-string">'Ordinateur'</span>, <span class="py-string">'Souris'</span>],
    <span class="py-string">'Categorie'</span>: [<span class="py-string">'High-Tech'</span>, <span class="py-string">'Accessoire'</span>, <span class="py-string">'Accessoire'</span>, <span class="py-string">'High-Tech'</span>, <span class="py-string">'High-Tech'</span>, <span class="py-string">'Accessoire'</span>],
    <span class="py-string">'Prix'</span>: [1200, 25, 45, 200, 1200, <span class="py-variable">np</span>.<span class="py-variable">nan</span>], <span class="py-comment"># Prix manquant pour la dernière souris</span>
    <span class="py-string">'Statut'</span>: [<span class="py-string">'Livré'</span>, <span class="py-string">'Annulé'</span>, <span class="py-string">'Livré'</span>, <span class="py-string">'Livré'</span>, <span class="py-string">'En cours'</span>, <span class="py-string">'Livré'</span>]
}

<span class="py-variable">df</span> = <span class="py-variable">pd</span>.<span class="py-function">DataFrame</span>(<span class="py-variable">data_ecommerce</span>)
<span class="py-variable">df</span>[<span class="py-string">'Date'</span>] = <span class="py-variable">pd</span>.<span class="py-function">to_datetime</span>(<span class="py-variable">df</span>[<span class="py-string">'Date'</span>])</code></pre>
        </div>
    </div>

    <!-- Étape 1 : Nettoyage -->
    <div class="mb-6 bg-white p-6 rounded-lg border shadow-sm">
        <h4 class="font-bold text-gray-800 mb-3"> 1. Nettoyage des données</h4>
        <p class="text-gray-600 mb-2">Il manque un prix pour une souris. Sachant qu'une autre souris coûte 25€, nous allons remplir le NaN par la médiane des prix de la catégorie 'Accessoire'.</p>
        
        <details class="group mb-4">
            <summary class="cursor-pointer font-semibold text-indigo-600 hover:text-indigo-800">Voir le code</summary>
            <div class="mt-2 code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-comment"># Calculer la médiane des accessoires</span>
<span class="py-variable">mediane_accessoires</span> = <span class="py-variable">df</span>.<span class="py-variable">loc</span>[<span class="py-variable">df</span>[<span class="py-string">'Categorie'</span>] == <span class="py-string">'Accessoire'</span>, <span class="py-string">'Prix'</span>].<span class="py-function">median</span>()

<span class="py-comment"># Remplir les NaN</span>
<span class="py-variable">df</span>[<span class="py-string">'Prix'</span>] = <span class="py-variable">df</span>[<span class="py-string">'Prix'</span>].<span class="py-function">fillna</span>(<span class="py-variable">mediane_accessoires</span>)</code></pre>
            </div>
        </details>
    </div>

    <!-- Étape 2 : Feature Engineering -->
    <div class="mb-6 bg-white p-6 rounded-lg border shadow-sm">
        <h4 class="font-bold text-gray-800 mb-3"> 2. Enrichissement (Feature Engineering)</h4>
        <p class="text-gray-600 mb-2">Ajoutez une colonne 'Mois' pour analyser la saisonnalité.</p>
        
        <details class="group mb-4">
            <summary class="cursor-pointer font-semibold text-indigo-600 hover:text-indigo-800">Voir le code</summary>
            <div class="mt-2 code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-variable">df</span>[<span class="py-string">'Mois'</span>] = <span class="py-variable">df</span>[<span class="py-string">'Date'</span>].<span class="py-variable">dt</span>.<span class="py-variable">month_name</span>()</code></pre>
            </div>
        </details>
    </div>

    <!-- Étape 3 : Analyse & Agrégation -->
    <div class="mb-6 bg-white p-6 rounded-lg border shadow-sm">
        <h4 class="font-bold text-gray-800 mb-3"> 3. Analyse Business</h4>
        <p class="text-gray-600 mb-2">
            Question : Quel est le Chiffre d'Affaires (CA) total par Catégorie, en excluant les commandes "Annulées" ?
        </p>
        
        <details class="group mb-4">
            <summary class="cursor-pointer font-semibold text-indigo-600 hover:text-indigo-800">Voir le code</summary>
            <div class="mt-2 code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-comment"># 1. Filtrer les commandes valides (Non annulées)</span>
<span class="py-variable">df_valide</span> = <span class="py-variable">df</span>[<span class="py-variable">df</span>[<span class="py-string">'Statut'</span>] != <span class="py-string">'Annulé'</span>]

<span class="py-comment"># 2. Grouper par Catégorie et sommer les Prix</span>
<span class="py-variable">ca_par_categorie</span> = <span class="py-variable">df_valide</span>.<span class="py-function">groupby</span>(<span class="py-string">'Categorie'</span>)[<span class="py-string">'Prix'</span>].<span class="py-function">sum</span>()

<span class="py-builtin">print</span>(<span class="py-variable">ca_par_categorie</span>)
<span class="py-comment"># Categorie</span>
<span class="py-comment"># Accessoire       70.0</span>
<span class="py-comment"># High-Tech      2600.0</span></code></pre>
            </div>
        </details>
    </div>

    <!-- Étape 4 : Export -->
    <div class="mb-6 bg-white p-6 rounded-lg border shadow-sm">
        <h4 class="font-bold text-gray-800 mb-3"> 4. Export du Rapport</h4>
        <p class="text-gray-600 mb-2">Sauvegardez ce résumé dans un fichier CSV "rapport_ca.csv".</p>
        
        <details class="group mb-4">
            <summary class="cursor-pointer font-semibold text-indigo-600 hover:text-indigo-800">Voir le code</summary>
            <div class="mt-2 code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-variable">ca_par_categorie</span>.<span class="py-function">to_csv</span>(<span class="py-string">'rapport_ca.csv'</span>)</code></pre>
            </div>
        </details>
    </div>

</section>
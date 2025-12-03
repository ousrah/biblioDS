<!-- =================================================================== -->
<!-- PARTIE 2 : CALCUL SCIENTIFIQUE AVEC NUMPY -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-12">Partie 2 : Calcul Scientifique avec NumPy</h2>

<!-- =================================================================== -->
<!-- CHAPITRE 1 : INTRODUCTION ET FONDAMENTAUX -->
<!-- =================================================================== -->
<section id="numpy-intro" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 1 : Introduction et Fondamentaux</h3>
    
    <div class="mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-2">1. Qu'est-ce que NumPy ?</h4>
        <p class="text-gray-700 mb-4 leading-relaxed">
            <strong>NumPy</strong> (Numerical Python) est la bibliothèque fondamentale pour le calcul scientifique en Python. Elle introduit un objet puissant : le <strong>ndarray</strong> (tableau à n-dimensions), qui permet de manipuler des vecteurs, des matrices et des tenseurs avec une efficacité redoutable.
        </p>
        <p class="text-gray-700 mb-4">
            Contrairement aux listes Python qui sont généralistes, les tableaux NumPy sont spécialisés pour le calcul numérique. Ils sont à la base de presque toutes les autres bibliothèques de Data Science (Pandas, Scikit-learn, TensorFlow).
        </p>
    </div>

    <div class="bg-blue-50 p-6 rounded-lg border border-blue-100 mb-8">
        <h4 class="font-bold text-blue-900 mb-3">Pourquoi utiliser NumPy plutôt que des listes ?</h4>
        <ul class="list-disc ml-6 text-blue-800 space-y-3">
            <li>🚀 <strong>Vitesse fulgurante</strong> : NumPy est écrit en C. Les opérations sur les tableaux sont jusqu'à 50x plus rapides que les boucles Python classiques.</li>
            <li>💾 <strong>Efficacité mémoire</strong> : Les tableaux NumPy stockent les données de manière contiguë en mémoire et utilisent des types fixes (ex: `int32`), occupant beaucoup moins de RAM.</li>
            <li>⚡ <strong>Vectorisation</strong> : Vous pouvez additionner, multiplier ou transformer des millions de données en une seule ligne de code, sans écrire de boucles.</li>
        </ul>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Installation et Importation</h4>
        <p class="text-gray-700 mb-2">Si ce n'est pas déjà fait, installez NumPy via pip :</p>
        <div class="bg-gray-800 text-white p-3 rounded-lg font-mono text-sm mb-4 w-fit">
            <span class="text-green-400">$</span> pip install numpy
        </div>
        <p class="text-gray-700 mb-2">Dans vos scripts, la convention universelle est d'importer NumPy sous l'alias <code>np</code> :</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-comment"># Vérifier la version installée</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Version de NumPy : {<span class="py-variable">np</span>.<span class="py-variable">__version__</span>}"</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">3. Constantes et Variables Importantes</h4>
        <p class="text-gray-700 mb-2">NumPy inclut plusieurs constantes mathématiques et valeurs spéciales très utiles :</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-builtin">print</span>(<span class="py-string">f"Pi : {<span class="py-variable">np</span>.<span class="py-variable">pi</span>}"</span>)       <span class="py-comment"># 3.141592653589793</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Euler (e) : {<span class="py-variable">np</span>.<span class="py-variable">e</span>}"</span>) <span class="py-comment"># 2.718281828459045</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Infini : {<span class="py-variable">np</span>.<span class="py-variable">inf</span>}"</span>)   <span class="py-comment"># inf (Infinity)</span>
<span class="py-builtin">print</span>(<span class="py-string">f"NaN : {<span class="py-variable">np</span>.<span class="py-variable">nan</span>}"</span>)       <span class="py-comment"># nan (Not a Number - Valeur manquante)</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">4. Comparaison : Liste vs NumPy</h4>
        <p class="text-gray-700 mb-4">Regardons concrètement la différence de structure.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <div class="bg-white p-5 rounded-lg border shadow-sm">
                <h5 class="font-bold text-red-600 mb-2">Liste Python (Classique)</h5>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li>• Peut contenir n'importe quoi (mix de types).</li>
                    <li>• Chaque élément est un objet Python complet (lourd).</li>
                    <li>• Mémoire dispersée (pointeurs).</li>
                </ul>
                <div class="mt-3 p-2 bg-gray-100 rounded text-xs font-mono">
                    L = [1, "a", True] <span class="text-gray-400"># Valide mais lent</span>
                </div>
            </div>
            <div class="bg-white p-5 rounded-lg border shadow-sm">
                <h5 class="font-bold text-green-600 mb-2">Tableau NumPy (ndarray)</h5>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li>• Type unique pour tout le tableau (Homogène).</li>
                    <li>• Données brutes compactes (léger).</li>
                    <li>• Mémoire contiguë (accès rapide).</li>
                </ul>
                <div class="mt-3 p-2 bg-gray-100 rounded text-xs font-mono">
                    A = np.array([1, 2, 3]) <span class="text-gray-400"># Rapide et optimisé</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 2 : CRÉATION DE TABLEAUX -->
<!-- =================================================================== -->
<section id="numpy-creation" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 2 : Création de Tableaux</h3>
    <p class="text-gray-700 mb-6">
        Il existe de nombreuses façons de créer des tableaux NumPy. Voici les méthodes les plus courantes que vous utiliserez au quotidien.
    </p>

    <!-- 1. Depuis une liste -->
    <div class="mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">1. À partir d'une liste Python</h4>
        <p class="text-gray-700 mb-2">La méthode la plus simple pour convertir vos données existantes.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-comment"># Vecteur (1 Dimension)</span>
<span class="py-variable">liste_notes</span> = [10, 15, 20]
<span class="py-variable">arr_1d</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>(<span class="py-variable">liste_notes</span>)
<span class="py-builtin">print</span>(<span class="py-string">"1D :"</span>, <span class="py-variable">arr_1d</span>)

<span class="py-comment"># Matrice (2 Dimensions)</span>
<span class="py-variable">liste_2d</span> = [[1, 2, 3], [4, 5, 6]]
<span class="py-variable">arr_2d</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>(<span class="py-variable">liste_2d</span>)
<span class="py-builtin">print</span>(<span class="py-string">"2D :\n"</span>, <span class="py-variable">arr_2d</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- 2. Tableaux pré-remplis -->
    <div class="mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">2. Tableaux pré-remplis (Zeros, Ones, Full)</h4>
        <p class="text-gray-700 mb-2">Utile pour initialiser des matrices avant de les remplir par des calculs.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-comment"># Tableau de 5 zéros (souvent utilisé pour l'initialisation)</span>
<span class="py-variable">z</span> = <span class="py-variable">np</span>.<span class="py-function">zeros</span>(5, <span class="py-variable">dtype</span>=<span class="py-builtin">int</span>)
<span class="py-builtin">print</span>(<span class="py-string">"Zeros :"</span>, <span class="py-variable">z</span>)

<span class="py-comment"># Matrice 2x3 remplie de 1 (float par défaut)</span>
<span class="py-variable">o</span> = <span class="py-variable">np</span>.<span class="py-function">ones</span>((2, 3))
<span class="py-builtin">print</span>(<span class="py-string">"Ones :\n"</span>, <span class="py-variable">o</span>)

<span class="py-comment"># Matrice 2x2 remplie de 7</span>
<span class="py-variable">f</span> = <span class="py-variable">np</span>.<span class="py-function">full</span>((2, 2), 7)
<span class="py-builtin">print</span>(<span class="py-string">"Full :\n"</span>, <span class="py-variable">f</span>)

<span class="py-comment"># Matrice Identité (carrée avec des 1 sur la diagonale)</span>
<span class="py-variable">i</span> = <span class="py-variable">np</span>.<span class="py-function">eye</span>(3)
<span class="py-builtin">print</span>(<span class="py-string">"Identité :\n"</span>, <span class="py-variable">i</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- 3. Séquences numériques -->
    <div class="mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">3. Générer des séquences (Arange, Linspace)</h4>
        <p class="text-gray-700 mb-2">Pour générer des suites de nombres automatiquement.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-comment"># np.arange(début, fin, pas) - Comme range() mais renvoie un tableau</span>
<span class="py-comment"># Note : la fin est EXCLUE</span>
<span class="py-variable">seq1</span> = <span class="py-variable">np</span>.<span class="py-function">arange</span>(0, 10, 2)
<span class="py-builtin">print</span>(<span class="py-string">"Arange :"</span>, <span class="py-variable">seq1</span>) <span class="py-comment"># [0 2 4 6 8]</span>

<span class="py-comment"># np.linspace(début, fin, nombre_points)</span>
<span class="py-comment"># Note : la fin est INCLUSE. Très utile pour les graphiques.</span>
<span class="py-variable">seq2</span> = <span class="py-variable">np</span>.<span class="py-function">linspace</span>(0, 1, 5)
<span class="py-builtin">print</span>(<span class="py-string">"Linspace :"</span>, <span class="py-variable">seq2</span>) <span class="py-comment"># [0.   0.25 0.5  0.75 1.  ]</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- 4. Nombres aléatoires -->
    <div class="mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">4. Génération Aléatoire (Random)</h4>
        <p class="text-gray-700 mb-2">NumPy possède un module <code>random</code> très performant.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-comment"># Fixer la graine pour avoir toujours les mêmes résultats (reproductibilité)</span>
<span class="py-variable">np</span>.<span class="py-variable">random</span>.<span class="py-function">seed</span>(42)

<span class="py-comment"># 3 nombres aléatoires entre 0 et 1 (Distribution uniforme)</span>
<span class="py-variable">rand_uni</span> = <span class="py-variable">np</span>.<span class="py-variable">random</span>.<span class="py-function">random</span>(3)
<span class="py-builtin">print</span>(<span class="py-string">"Uniforme :"</span>, <span class="py-variable">rand_uni</span>)

<span class="py-comment"># Matrice 2x2 d'entiers entre 0 et 10 (exclu)</span>
<span class="py-variable">rand_int</span> = <span class="py-variable">np</span>.<span class="py-variable">random</span>.<span class="py-function">randint</span>(0, 10, (2, 2))
<span class="py-builtin">print</span>(<span class="py-string">"Entiers :\n"</span>, <span class="py-variable">rand_int</span>)

<span class="py-comment"># Distribution Normale (Gaussienne) : Moyenne=0, Écart-type=1</span>
<span class="py-variable">rand_norm</span> = <span class="py-variable">np</span>.<span class="py-variable">random</span>.<span class="py-function">normal</span>(0, 1, 5)
<span class="py-builtin">print</span>(<span class="py-string">"Normale :"</span>, <span class="py-variable">rand_norm</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 3 : INSPECTION ET PROPRIÉTÉS -->
<!-- =================================================================== -->
<section id="numpy-attributes" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 3 : Inspection des Tableaux</h3>
    <p class="text-gray-700 mb-4">
        Une fois un tableau créé, il est crucial de savoir l'interroger pour connaître ses dimensions et son type.
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
                <tr><td class="px-6 py-3 font-mono text-indigo-600">.ndim</td><td class="px-6 py-3">Nombre de dimensions (1=vecteur, 2=matrice, 3=cube...)</td></tr>
                <tr><td class="px-6 py-3 font-mono text-indigo-600">.shape</td><td class="px-6 py-3">Tuple représentant la forme (ex: (3, 4) pour 3 lignes, 4 colonnes)</td></tr>
                <tr><td class="px-6 py-3 font-mono text-indigo-600">.size</td><td class="px-6 py-3">Nombre total d'éléments dans le tableau</td></tr>
                <tr><td class="px-6 py-3 font-mono text-indigo-600">.dtype</td><td class="px-6 py-3">Type des données contenues (int64, float32, bool...)</td></tr>
                <tr><td class="px-6 py-3 font-mono text-indigo-600">.nbytes</td><td class="px-6 py-3">Taille totale occupée en mémoire (en octets)</td></tr>
            </tbody>
        </table>
    </div>

    <div class="bg-white p-4 rounded border shadow-sm">
        <h6 class="font-bold text-gray-800 mb-2">Exemple complet d'inspection</h6>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-comment"># Créons un tableau 3D (2 blocs, 3 lignes, 4 colonnes)</span>
<span class="py-variable">cube</span> = <span class="py-variable">np</span>.<span class="py-variable">random</span>.<span class="py-function">randint</span>(10, <span class="py-variable">size</span>=(2, 3, 4))

<span class="py-builtin">print</span>(<span class="py-string">"Tableau :\n"</span>, <span class="py-variable">cube</span>)
<span class="py-builtin">print</span>(<span class="py-string">"-"</span> * 20)
<span class="py-builtin">print</span>(<span class="py-string">f"Dimensions (ndim) : {<span class="py-variable">cube</span>.<span class="py-variable">ndim</span>}"</span>)      <span class="py-comment"># 3</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Forme (shape)     : {<span class="py-variable">cube</span>.<span class="py-variable">shape</span>}"</span>)     <span class="py-comment"># (2, 3, 4)</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Taille (size)     : {<span class="py-variable">cube</span>.<span class="py-variable">size</span>}"</span>)      <span class="py-comment"># 24 (2*3*4)</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Type (dtype)      : {<span class="py-variable">cube</span>.<span class="py-variable">dtype</span>}"</span>)     <span class="py-comment"># int32 ou int64</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Mémoire (nbytes)  : {<span class="py-variable">cube</span>.<span class="py-variable">nbytes</span>} octets"</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 4 : INDEXATION ET SLICING -->
<!-- =================================================================== -->
<section id="numpy-indexing" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 4 : Indexation et Slicing (Découpage)</h3>
    <p class="text-gray-700 mb-6">
        Accéder aux données est l'opération la plus courante. NumPy offre une syntaxe puissante pour extraire des sous-ensembles de données.
    </p>

    <!-- 1. Accès simple -->
    <div class="mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">1. Accès par index (Comme les listes)</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-variable">arr</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([10, 20, 30, 40])

<span class="py-builtin">print</span>(<span class="py-variable">arr</span>[0])   <span class="py-comment"># 10 (Premier élément)</span>
<span class="py-builtin">print</span>(<span class="py-variable">arr</span>[-1])  <span class="py-comment"># 40 (Dernier élément)</span>

<span class="py-comment"># Modification</span>
<span class="py-variable">arr</span>[1] = 99
<span class="py-builtin">print</span>(<span class="py-variable">arr</span>)      <span class="py-comment"># [10 99 30 40]</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- 2. Slicing 1D -->
    <div class="mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">2. Slicing 1D (Tranches)</h4>
        <p class="text-gray-700 mb-2">La syntaxe est <code>[début : fin : pas]</code>.</p>
        <ul class="list-disc ml-6 text-gray-600 mb-4 text-sm">
            <li>Si <strong>début</strong> est omis : commence à 0.</li>
            <li>Si <strong>fin</strong> est omis : va jusqu'au bout.</li>
            <li>Si <strong>pas</strong> est omis : pas de 1.</li>
        </ul>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-variable">x</span> = <span class="py-variable">np</span>.<span class="py-function">arange</span>(10) <span class="py-comment"># [0 1 2 3 4 5 6 7 8 9]</span>

<span class="py-builtin">print</span>(<span class="py-variable">x</span>[:5])      <span class="py-comment"># [0 1 2 3 4] (5 premiers)</span>
<span class="py-builtin">print</span>(<span class="py-variable">x</span>[5:])      <span class="py-comment"># [5 6 7 8 9] (À partir de l'index 5)</span>
<span class="py-builtin">print</span>(<span class="py-variable">x</span>[4:7])     <span class="py-comment"># [4 5 6] (De 4 inclus à 7 exclu)</span>
<span class="py-builtin">print</span>(<span class="py-variable">x</span>[::2])     <span class="py-comment"># [0 2 4 6 8] (Un élément sur deux)</span>
<span class="py-builtin">print</span>(<span class="py-variable">x</span>[::-1])    <span class="py-comment"># [9 8 ... 0] (Inverser le tableau)</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- 3. Slicing 2D -->
    <div class="mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">3. Indexation et Slicing en 2D (Matrices)</h4>
        <p class="text-gray-700 mb-2">
            En 2D, on utilise une virgule pour séparer les dimensions : <code>[lignes, colonnes]</code>.
        </p>
        
        <div class="bg-yellow-50 p-4 rounded-lg border border-yellow-100 mb-4">
            <p class="text-yellow-900 font-semibold">Règle d'or : <code>tableau[ ligne , colonne ]</code></p>
        </div>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-variable">M</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
])

<span class="py-comment"># Accéder à un élément précis (Ligne 1, Colonne 2)</span>
<span class="py-comment"># Rappel : les indices commencent à 0</span>
<span class="py-builtin">print</span>(<span class="py-variable">M</span>[1, 2])    <span class="py-comment"># 7</span>

<span class="py-comment"># Extraire une ligne entière (Ligne 0)</span>
<span class="py-builtin">print</span>(<span class="py-variable">M</span>[0, :])    <span class="py-comment"># [1 2 3 4] (ou simplement M[0])</span>

<span class="py-comment"># Extraire une colonne entière (Colonne 1)</span>
<span class="py-builtin">print</span>(<span class="py-variable">M</span>[:, 1])    <span class="py-comment"># [2 6 10]</span>

<span class="py-comment"># Extraire un sous-bloc (2 premières lignes, 2 premières colonnes)</span>
<span class="py-builtin">print</span>(<span class="py-variable">M</span>[:2, :2])
<span class="py-comment"># [[1 2]</span>
<span class="py-comment">#  [5 6]]</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 5 : MANIPULATION (COPIE, CONCAT, SPLIT) -->
<!-- =================================================================== -->
<section id="numpy-manipulation" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 5 : Manipulation Avancée</h3>

    <!-- 1. Copie vs Vue -->
    <div class="mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">1. Attention au piège : Copie vs Vue</h4>
        <p class="text-gray-700 mb-2">
            Par défaut, le slicing crée une <strong>vue</strong> (référence). Modifier la vue modifie l'original ! Pour éviter cela, utilisez <code>.copy()</code>.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-red-50 p-4 rounded border border-red-100">
                <h6 class="font-bold text-red-900 mb-2">Comportement par défaut (Vue)</h6>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-variable">a</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([1, 2, 3])
<span class="py-variable">b</span> = <span class="py-variable">a</span>[0:2]  <span class="py-comment"># Vue !</span>
<span class="py-variable">b</span>[0] = 99
<span class="py-builtin">print</span>(<span class="py-variable">a</span>)    <span class="py-comment"># [99 2 3] (MODIFIÉ !)</span></code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
            <div class="bg-green-50 p-4 rounded border border-green-100">
                <h6 class="font-bold text-green-900 mb-2">Avec .copy() (Sûr)</h6>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-variable">a</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([1, 2, 3])
<span class="py-variable">b</span> = <span class="py-variable">a</span>[0:2].<span class="py-function">copy</span>() <span class="py-comment"># Copie !</span>
<span class="py-variable">b</span>[0] = 99
<span class="py-builtin">print</span>(<span class="py-variable">a</span>)    <span class="py-comment"># [1 2 3] (INTACT)</span></code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. Reshape -->
    <div class="mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">2. Redimensionnement (Reshape)</h4>
        <p class="text-gray-700 mb-2">
            La méthode <code>.reshape()</code> permet de changer la forme d'un tableau sans changer ses données.
            <br><span class="text-sm text-gray-500">Condition : Le nombre total d'éléments doit rester le même (ex: 12 éléments peuvent devenir 3x4 ou 2x6).</span>
        </p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-comment"># Créer un vecteur de 12 éléments</span>
<span class="py-variable">x</span> = <span class="py-variable">np</span>.<span class="py-function">arange</span>(1, 13)
<span class="py-builtin">print</span>(<span class="py-string">"Original :"</span>, <span class="py-variable">x</span>)

<span class="py-comment"># Transformer en matrice 3 lignes x 4 colonnes</span>
<span class="py-variable">mat</span> = <span class="py-variable">x</span>.<span class="py-function">reshape</span>((3, 4))
<span class="py-builtin">print</span>(<span class="py-string">"3x4 :\n"</span>, <span class="py-variable">mat</span>)

<span class="py-comment"># Astuce : Utiliser -1 pour que NumPy calcule la dimension manquante</span>
<span class="py-variable">col</span> = <span class="py-variable">x</span>.<span class="py-function">reshape</span>((-1, 1)) <span class="py-comment"># "Autant de lignes que nécessaire, 1 colonne"</span>
<span class="py-builtin">print</span>(<span class="py-string">"Colonne :\n"</span>, <span class="py-variable">col</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- 3. Flatten & Ravel -->
    <div class="mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">3. Aplatissement (Flatten & Ravel)</h4>
        <p class="text-gray-700 mb-2">
            Pour transformer un tableau multidimensionnel en vecteur 1D.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-4 rounded border shadow-sm">
                <h6 class="font-bold text-indigo-600 mb-2">.flatten() : Crée une COPIE</h6>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-variable">m</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([[1, 2], [3, 4]])
<span class="py-variable">f</span> = <span class="py-variable">m</span>.<span class="py-function">flatten</span>()
<span class="py-variable">f</span>[0] = 99
<span class="py-builtin">print</span>(<span class="py-variable">m</span>) 
<span class="py-comment"># [[1 2] [3 4]] (Intact)</span></code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
            <div class="bg-white p-4 rounded border shadow-sm">
                <h6 class="font-bold text-purple-600 mb-2">.ravel() : Crée une VUE (Rapide)</h6>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-variable">m</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([[1, 2], [3, 4]])
<span class="py-variable">r</span> = <span class="py-variable">m</span>.<span class="py-function">ravel</span>()
<span class="py-variable">r</span>[0] = 99
<span class="py-builtin">print</span>(<span class="py-variable">m</span>) 
<span class="py-comment"># [[99 2] [3 4]] (Modifié !)</span></code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. Concaténation -->
    <div class="mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">4. Concaténation (Assemblage)</h4>
        <p class="text-gray-700 mb-2">Pour assembler plusieurs tableaux en un seul.</p>
        
        <div class="bg-white p-4 rounded border shadow-sm mb-4">
            <h6 class="font-bold text-indigo-600 mb-2">np.concatenate() : La méthode générique</h6>
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-variable">a</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([1, 2])
<span class="py-variable">b</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([3, 4])

<span class="py-comment"># Axe 0 (Défaut) : bout à bout</span>
<span class="py-builtin">print</span>(<span class="py-variable">np</span>.<span class="py-function">concatenate</span>((<span class="py-variable">a</span>, <span class="py-variable">b</span>))) <span class="py-comment"># [1 2 3 4]</span>

<span class="py-comment"># En 2D</span>
<span class="py-variable">m1</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([[1, 2], [3, 4]])
<span class="py-variable">m2</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([[5, 6]])

<span class="py-comment"># Axe 0 (Vertical)</span>
<span class="py-builtin">print</span>(<span class="py-variable">np</span>.<span class="py-function">concatenate</span>((<span class="py-variable">m1</span>, <span class="py-variable">m2</span>), <span class="py-variable">axis</span>=0))
<span class="py-comment"># [[1 2]</span>
<span class="py-comment">#  [3 4]</span>
<span class="py-comment">#  [5 6]]</span></code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>

        <div class="bg-white p-4 rounded border shadow-sm">
            <h6 class="font-bold text-purple-600 mb-2">Helpers : vstack, hstack, dstack</h6>
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-variable">A</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([1, 2, 3])
<span class="py-variable">B</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([4, 5, 6])

<span class="py-comment"># vstack (Vertical - Empilement)</span>
<span class="py-builtin">print</span>(<span class="py-variable">np</span>.<span class="py-function">vstack</span>((<span class="py-variable">A</span>, <span class="py-variable">B</span>))) <span class="py-comment"># [[1 2 3], [4 5 6]]</span>

<span class="py-comment"># hstack (Horizontal - Côte à côte)</span>
<span class="py-builtin">print</span>(<span class="py-variable">np</span>.<span class="py-function">hstack</span>((<span class="py-variable">A</span>, <span class="py-variable">B</span>))) <span class="py-comment"># [1 2 3 4 5 6]</span>

<span class="py-comment"># dstack (Profondeur - 3ème dimension)</span>
<span class="py-builtin">print</span>(<span class="py-variable">np</span>.<span class="py-function">dstack</span>((<span class="py-variable">A</span>, <span class="py-variable">B</span>)))
<span class="py-comment"># [[[1 4], [2 5], [3 6]]] (Dimensions 1x3x2)</span></code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>

    <!-- 5. Splitting -->
    <div class="mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">5. Splitting (Découpage)</h4>
        <p class="text-gray-700 mb-2">Pour diviser un tableau en plusieurs sous-tableaux.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-variable">x</span> = <span class="py-variable">np</span>.<span class="py-function">arange</span>(16).<span class="py-function">reshape</span>(4, 4)

<span class="py-comment"># vsplit : Coupe horizontalement (sépare les lignes)</span>
<span class="py-variable">haut</span>, <span class="py-variable">bas</span> = <span class="py-variable">np</span>.<span class="py-function">vsplit</span>(<span class="py-variable">x</span>, 2)
<span class="py-builtin">print</span>(<span class="py-string">"Haut :\n"</span>, <span class="py-variable">haut</span>)

<span class="py-comment"># hsplit : Coupe verticalement (sépare les colonnes)</span>
<span class="py-variable">gauche</span>, <span class="py-variable">droite</span> = <span class="py-variable">np</span>.<span class="py-function">hsplit</span>(<span class="py-variable">x</span>, 2)
<span class="py-builtin">print</span>(<span class="py-string">"Gauche :\n"</span>, <span class="py-variable">gauche</span>)

<span class="py-comment"># split : Générique (ici axis=1 équivaut à hsplit)</span>
<span class="py-variable">p1</span>, <span class="py-variable">p2</span> = <span class="py-variable">np</span>.<span class="py-function">split</span>(<span class="py-variable">x</span>, 2, <span class="py-variable">axis</span>=1)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- 6. Suppression -->
    <div class="mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">6. Suppression d'éléments</h4>
        <p class="text-gray-700 mb-2">Utilisez <code>np.delete(tableau, index, axis)</code>.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-variable">M</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([[1, 2, 3], [4, 5, 6], [7, 8, 9]])

<span class="py-comment"># Supprimer la ligne 1 (axis=0)</span>
<span class="py-variable">M_sans_L1</span> = <span class="py-variable">np</span>.<span class="py-function">delete</span>(<span class="py-variable">M</span>, 1, <span class="py-variable">axis</span>=0)

<span class="py-comment"># Supprimer la colonne 2 (axis=1)</span>
<span class="py-variable">M_sans_C2</span> = <span class="py-variable">np</span>.<span class="py-function">delete</span>(<span class="py-variable">M</span>, 2, <span class="py-variable">axis</span>=1)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- 7. Tri (Sort) -->
    <div class="mb-8">
        <h4 class="text-lg font-bold text-gray-800 mb-2">7. Tri (Sort)</h4>
        <p class="text-gray-700 mb-2">Trier les éléments d'un tableau.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-variable">arr</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([2, 1, 5, 3, 7, 4, 6, 8])

<span class="py-comment"># np.sort() : Renvoie une copie triée (l'original ne change pas)</span>
<span class="py-variable">trie</span> = <span class="py-variable">np</span>.<span class="py-function">sort</span>(<span class="py-variable">arr</span>)
<span class="py-builtin">print</span>(<span class="py-variable">trie</span>) <span class="py-comment"># [1 2 3 4 5 6 7 8]</span>

<span class="py-comment"># Tri en place (modifie l'original)</span>
<span class="py-variable">arr</span>.<span class="py-function">sort</span>()</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 6 : MASQUAGE (BOOLEAN INDEXING) -->
<!-- =================================================================== -->
<section id="numpy-masking" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 6 : Masquage (Indexation Booléenne)</h3>
    <p class="text-gray-700 mb-4">
        Le masquage est une fonctionnalité ultra-puissante de NumPy qui permet de filtrer ou modifier des données selon une condition, sans boucle.
    </p>

    <div class="bg-white p-6 rounded-lg shadow-sm border mb-6">
        <h4 class="font-bold text-gray-800 mb-3">Le concept</h4>
        <ol class="list-decimal ml-6 text-gray-700 space-y-2">
            <li>On crée une condition (ex: <code>arr > 5</code>). Cela génère un tableau de Booléens (Masque).</li>
            <li>On utilise ce masque comme index : <code>arr[masque]</code>.</li>
            <li>NumPy ne garde que les éléments où le masque est <code>True</code>.</li>
        </ol>
    </div>

    <div class="code-block-wrapper">
        <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-variable">a</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([1, 10, 3, 25, 7, 2])

<span class="py-comment"># 1. Créer le masque (Qui est supérieur à 5 ?)</span>
<span class="py-variable">mask</span> = <span class="py-variable">a</span> > 5
<span class="py-builtin">print</span>(<span class="py-variable">mask</span>) <span class="py-comment"># [False  True False  True  True False]</span>

<span class="py-comment"># 2. Appliquer le filtre</span>
<span class="py-builtin">print</span>(<span class="py-variable">a</span>[<span class="py-variable">mask</span>]) <span class="py-comment"># [10 25  7]</span>

<span class="py-comment"># Version compacte (très courante)</span>
<span class="py-builtin">print</span>(<span class="py-variable">a</span>[<span class="py-variable">a</span> > 5])

<span class="py-comment"># 3. Modification conditionnelle (Ex: Remplacer les > 5 par 0)</span>
<span class="py-variable">a</span>[<span class="py-variable">a</span> > 5] = 0
<span class="py-builtin">print</span>(<span class="py-variable">a</span>) <span class="py-comment"># [1 0 3 0 0 2]</span></code></pre>
        <button class="copy-btn">Copier</button>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 7 : OPÉRATIONS ET BROADCASTING -->
<!-- =================================================================== -->
<section id="numpy-ops" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 7 : Opérations et Broadcasting</h3>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">1. Opérations Arithmétiques (UFuncs)</h4>
        <p class="text-gray-700 mb-4">
            Les opérateurs classiques (+, -, *, /) sont des raccourcis vers des fonctions universelles NumPy (UFuncs). Elles s'appliquent élément par élément.
        </p>
        
        <div class="overflow-x-auto mb-6">
            <table class="min-w-full bg-white border rounded-lg text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 border">Opérateur</th>
                        <th class="px-4 py-2 border">Fonction NumPy</th>
                        <th class="px-4 py-2 border">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td class="px-4 py-2 border text-center font-mono">+</td><td class="px-4 py-2 border font-mono">np.add()</td><td class="px-4 py-2 border">Addition</td></tr>
                    <tr><td class="px-4 py-2 border text-center font-mono">-</td><td class="px-4 py-2 border font-mono">np.subtract()</td><td class="px-4 py-2 border">Soustraction</td></tr>
                    <tr><td class="px-4 py-2 border text-center font-mono">*</td><td class="px-4 py-2 border font-mono">np.multiply()</td><td class="px-4 py-2 border">Multiplication</td></tr>
                    <tr><td class="px-4 py-2 border text-center font-mono">/</td><td class="px-4 py-2 border font-mono">np.divide()</td><td class="px-4 py-2 border">Division</td></tr>
                    <tr><td class="px-4 py-2 border text-center font-mono">//</td><td class="px-4 py-2 border font-mono">np.floor_divide()</td><td class="px-4 py-2 border">Division entière</td></tr>
                    <tr><td class="px-4 py-2 border text-center font-mono">**</td><td class="px-4 py-2 border font-mono">np.power()</td><td class="px-4 py-2 border">Puissance</td></tr>
                    <tr><td class="px-4 py-2 border text-center font-mono">%</td><td class="px-4 py-2 border font-mono">np.mod()</td><td class="px-4 py-2 border">Modulo (Reste)</td></tr>
                </tbody>
            </table>
        </div>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-variable">a</span> = <span class="py-variable">np</span>.<span class="py-function">arange</span>(4) <span class="py-comment"># [0 1 2 3]</span>

<span class="py-builtin">print</span>(<span class="py-string">"a     ="</span>, <span class="py-variable">a</span>)
<span class="py-builtin">print</span>(<span class="py-string">"a + 4 ="</span>, <span class="py-variable">a</span> + 4)  <span class="py-comment"># [4 5 6 7]</span>
<span class="py-builtin">print</span>(<span class="py-string">"a * 2 ="</span>, <span class="py-variable">a</span> * 2)  <span class="py-comment"># [0 2 4 6]</span>
<span class="py-builtin">print</span>(<span class="py-string">"a ** 2="</span>, <span class="py-variable">a</span> ** 2) <span class="py-comment"># [0 1 4 9]</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Le Broadcasting (Diffusion)</h4>
        <p class="text-gray-700 mb-4">
            Le broadcasting est la règle qui permet à NumPy de faire des calculs entre des tableaux de tailles différentes.
        </p>
        
        <div class="bg-blue-50 p-4 rounded-lg border border-blue-100 mb-4">
            <h6 class="font-bold text-blue-900">Règle simplifiée :</h6>
            <p class="text-blue-800 text-sm">
                NumPy "étire" automatiquement les dimensions plus petites pour qu'elles correspondent aux plus grandes, si c'est possible.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-white p-4 rounded border">
                <h6 class="font-bold text-gray-800 mb-2">Exemple 1 : Scalaire sur Vecteur</h6>
                <p class="text-xs text-gray-500 mb-2">Le scalaire 5 est étiré en [5, 5, 5]</p>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-variable">arr</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([1, 2, 3])
<span class="py-builtin">print</span>(<span class="py-variable">arr</span> + 5) 
<span class="py-comment"># [6 7 8]</span></code></pre>
                </div>
            </div>
            <div class="bg-white p-4 rounded border">
                <h6 class="font-bold text-gray-800 mb-2">Exemple 2 : Vecteur sur Matrice</h6>
                <p class="text-xs text-gray-500 mb-2">Le vecteur est ajouté à CHAQUE ligne.</p>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-variable">M</span> = <span class="py-variable">np</span>.<span class="py-function">ones</span>((3, 3))
<span class="py-variable">v</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([0, 1, 2])
<span class="py-builtin">print</span>(<span class="py-variable">M</span> + <span class="py-variable">v</span>)
<span class="py-comment"># [[1. 2. 3.]</span>
<span class="py-comment">#  [1. 2. 3.]</span>
<span class="py-comment">#  [1. 2. 3.]]</span></code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 8 : STATISTIQUES (MOYENNE, MÉDIANE, PONDÉRÉE) -->
<!-- =================================================================== -->
<section id="numpy-stats" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 8 : Statistiques (Moyenne, Médiane, Pondérée)</h3>
    <p class="text-gray-700 mb-6">
        En Data Science, il est crucial de bien choisir son indicateur de tendance centrale.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <!-- Moyenne -->
        <div class="bg-blue-50 p-4 rounded border border-blue-100">
            <h5 class="font-bold text-blue-900 mb-2">1. Moyenne (Mean)</h5>
            <p class="text-sm text-blue-800 mb-2">La somme divisée par le nombre d'éléments.</p>
            <p class="text-xs text-gray-500 mb-2">⚠️ Sensible aux valeurs extrêmes (outliers).</p>
            <p class="text-xs text-blue-700 font-semibold">Exemple vie réelle :</p>
            <p class="text-xs text-blue-800 italic">Consommation moyenne d'essence sur un trajet.</p>
            <code class="block mt-2 bg-white p-1 rounded text-xs">np.mean(arr)</code>
        </div>

        <!-- Médiane -->
        <div class="bg-green-50 p-4 rounded border border-green-100">
            <h5 class="font-bold text-green-900 mb-2">2. Médiane (Median)</h5>
            <p class="text-sm text-green-800 mb-2">La valeur du milieu (50% au-dessus, 50% en dessous).</p>
            <p class="text-xs text-gray-500 mb-2">✅ Robuste aux valeurs extrêmes.</p>
            <p class="text-xs text-green-700 font-semibold">Exemple vie réelle :</p>
            <p class="text-xs text-green-800 italic">Prix médian de l'immobilier (non faussé par les châteaux).</p>
            <code class="block mt-2 bg-white p-1 rounded text-xs">np.median(arr)</code>
        </div>

        <!-- Moyenne Pondérée -->
        <div class="bg-purple-50 p-4 rounded border border-purple-100">
            <h5 class="font-bold text-purple-900 mb-2">3. Moyenne Pondérée</h5>
            <p class="text-sm text-purple-800 mb-2">Moyenne où chaque valeur a un "poids" différent.</p>
            <p class="text-xs text-gray-500 mb-2">Prise en compte de l'importance.</p>
            <p class="text-xs text-purple-700 font-semibold">Exemple vie réelle :</p>
            <p class="text-xs text-purple-800 italic">Note du Bac (Maths coeff 7, Sport coeff 2).</p>
            <code class="block mt-2 bg-white p-1 rounded text-xs">np.average(arr, weights=w)</code>
        </div>

        <!-- Mode -->
        <div class="bg-yellow-50 p-4 rounded border border-yellow-100">
            <h5 class="font-bold text-yellow-900 mb-2">4. Mode</h5>
            <p class="text-sm text-yellow-800 mb-2">La valeur la plus fréquente dans le jeu de données.</p>
            <p class="text-xs text-gray-500 mb-2">Utile pour les catégories.</p>
            <p class="text-xs text-yellow-700 font-semibold">Exemple vie réelle :</p>
            <p class="text-xs text-yellow-800 italic">La pointure de chaussures la plus vendue (gestion de stock).</p>
            <code class="block mt-2 bg-white p-1 rounded text-xs">via np.unique()</code>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border">
        <h4 class="font-bold text-gray-800 mb-4">Exemple Concret : Salaires dans une startup</h4>
        <p class="text-gray-600 mb-4 text-sm">
            Imaginez une entreprise avec 4 stagiaires et 1 PDG.
            <br>Stagiaires : 1 500 € | PDG : 100 000 €
        </p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-variable">salaires</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([1500, 1500, 1500, 1500, 100000])

<span class="py-comment"># 1. Moyenne : "Le salaire moyen est élevé" (Trompeur !)</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Moyenne : {<span class="py-variable">np</span>.<span class="py-function">mean</span>(<span class="py-variable">salaires</span>)} €"</span>) 
<span class="py-comment"># Résultat : 21 200 € (Personne ne gagne ça !)</span>

<span class="py-comment"># 2. Médiane : "Le salaire médian est réaliste"</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Médiane : {<span class="py-variable">np</span>.<span class="py-function">median</span>(<span class="py-variable">salaires</span>)} €"</span>)
<span class="py-comment"># Résultat : 1 500 € (Représente mieux la majorité)</span>

<span class="py-comment"># 3. Mode : "Le salaire le plus fréquent"</span>
<span class="py-comment"># NumPy n'a pas de fonction mode directe, on utilise unique</span>
<span class="py-variable">valeurs</span>, <span class="py-variable">comptes</span> = <span class="py-variable">np</span>.<span class="py-function">unique</span>(<span class="py-variable">salaires</span>, <span class="py-variable">return_counts</span>=<span class="py-builtin">True</span>)
<span class="py-variable">index_max</span> = <span class="py-variable">np</span>.<span class="py-function">argmax</span>(<span class="py-variable">comptes</span>)
<span class="py-variable">mode</span> = <span class="py-variable">valeurs</span>[<span class="py-variable">index_max</span>]
<span class="py-builtin">print</span>(<span class="py-string">f"Mode : {<span class="py-variable">mode</span>} €"</span>) <span class="py-comment"># 1 500 €</span>

<span class="py-comment"># 4. Moyenne Pondérée (Exemple notes)</span>
<span class="py-variable">notes</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([10, 20])
<span class="py-variable">coeffs</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([1, 9]) <span class="py-comment"># Le 20 compte 9 fois plus</span>
<span class="py-variable">moy_pond</span> = <span class="py-variable">np</span>.<span class="py-function">average</span>(<span class="py-variable">notes</span>, <span class="py-variable">weights</span>=<span class="py-variable">coeffs</span>)
<span class="py-builtin">print</span>(<span class="py-string">f"Moyenne pondérée : {<span class="py-variable">moy_pond</span>}"</span>) <span class="py-comment"># 19.0</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 9 : GLOSSAIRE DES FONCTIONS -->
<!-- =================================================================== -->
<section id="numpy-glossary" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 9 : Glossaire des Fonctions Utiles</h3>
    <p class="text-gray-700 mb-6">Référence rapide des fonctions essentielles pour l'analyse de données.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Agrégation -->
        <div>
            <h5 class="font-bold text-gray-800 border-b pb-2 mb-3">Agrégation & Stats</h5>
            <ul class="text-sm space-y-2 text-gray-700">
                <li><code class="text-indigo-600">np.sum(arr)</code> : Somme totale.</li>
                <li><code class="text-indigo-600">np.prod(arr)</code> : Produit des éléments.</li>
                <li><code class="text-indigo-600">np.mean(arr)</code> : Moyenne.</li>
                <li><code class="text-indigo-600">np.median(arr)</code> : Médiane.</li>
                <li><code class="text-indigo-600">np.average(arr, weights=w)</code> : Moyenne pondérée.</li>
                <li><code class="text-indigo-600">np.std(arr)</code> : Écart-type (Standard Deviation).</li>
                <li><code class="text-indigo-600">np.var(arr)</code> : Variance.</li>
                <li><code class="text-indigo-600">np.min() / np.max()</code> : Minimum / Maximum.</li>
                <li><code class="text-indigo-600">np.argmin() / np.argmax()</code> : Indices du min/max.</li>
                <li><code class="text-indigo-600">np.cumsum()</code> : Somme cumulée.</li>
            </ul>
        </div>

        <!-- Math & Autres -->
        <div>
            <h5 class="font-bold text-gray-800 border-b pb-2 mb-3">Mathématiques & Utilitaires</h5>
            <ul class="text-sm space-y-2 text-gray-700">
                <li><code class="text-indigo-600">np.abs(arr)</code> : Valeur absolue.</li>
                <li><code class="text-indigo-600">np.exp(arr)</code> : Exponentielle.</li>
                <li><code class="text-indigo-600">np.log(arr)</code> : Logarithme naturel.</li>
                <li><code class="text-indigo-600">np.where(cond, x, y)</code> : Si cond alors x sinon y.</li>
                <li><code class="text-indigo-600">np.unique(arr)</code> : Valeurs uniques triées.</li>
                <li><code class="text-indigo-600">np.transpose(arr)</code> : Inverse les axes (Matrice transposée).</li>
                <li><code class="text-indigo-600">np.any() / np.all()</code> : Teste si au moins un / tous sont True.</li>
            </ul>
        </div>
    </div>

    <div class="mt-6 bg-gray-50 p-4 rounded border">
        <h6 class="font-bold text-gray-800 mb-2">Exemple : Statistiques sur un axe</h6>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-variable">notes</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([[10, 15], [8, 12], [18, 20]]) <span class="py-comment"># 3 élèves, 2 matières</span>

<span class="py-comment"># Moyenne de chaque élève (Axe 1 : colonnes)</span>
<span class="py-builtin">print</span>(<span class="py-variable">np</span>.<span class="py-function">mean</span>(<span class="py-variable">notes</span>, <span class="py-variable">axis</span>=1)) <span class="py-comment"># [12.5 10.  19. ]</span>

<span class="py-comment"># Meilleure note par matière (Axe 0 : lignes)</span>
<span class="py-builtin">print</span>(<span class="py-variable">np</span>.<span class="py-function">max</span>(<span class="py-variable">notes</span>, <span class="py-variable">axis</span>=0))  <span class="py-comment"># [18 20]</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- EXERCICE FINAL -->
<!-- =================================================================== -->
<section id="numpy-exercise" class="mb-16">
    <div class="bg-purple-50 p-6 rounded-lg border border-purple-100">
        <h3 class="text-2xl font-bold text-purple-900 mb-4">Chapitre 10 : Exercice Récapitulatif</h3>
        <p class="text-purple-800 mb-4">
            Objectif : Manipuler une matrice de notes.
        </p>
        <ol class="list-decimal ml-6 text-purple-800 space-y-2 mb-6">
            <li>Créez une matrice 4x3 avec des notes aléatoires entre 0 et 20 (entiers).</li>
            <li>Affichez la note de la 2ème ligne, 3ème colonne.</li>
            <li>Extrayez toutes les notes de la première ligne.</li>
            <li>Créez une copie de la matrice et remplacez toutes les notes < 10 par 10 dans cette copie.</li>
        </ol>

        <button class="solution-toggle bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition">Voir la solution</button>
        
        <div class="solution-content hidden mt-6">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-comment"># 1. Création (4 étudiants, 3 matières)</span>
<span class="py-variable">np</span>.<span class="py-variable">random</span>.<span class="py-function">seed</span>(0) <span class="py-comment"># Pour avoir les mêmes résultats</span>
<span class="py-variable">notes</span> = <span class="py-variable">np</span>.<span class="py-variable">random</span>.<span class="py-function">randint</span>(0, 21, (4, 3))
<span class="py-builtin">print</span>(<span class="py-string">"Notes originales :\n"</span>, <span class="py-variable">notes</span>)

<span class="py-comment"># 2. Accès (2ème ligne = index 1, 3ème col = index 2)</span>
<span class="py-builtin">print</span>(<span class="py-string">"Note précise :"</span>, <span class="py-variable">notes</span>[1, 2])

<span class="py-comment"># 3. Extraction ligne 1 (index 0)</span>
<span class="py-builtin">print</span>(<span class="py-string">"Notes étudiant 1 :"</span>, <span class="py-variable">notes</span>[0, :])

<span class="py-comment"># 4. Modification sur copie</span>
<span class="py-variable">notes_corrigees</span> = <span class="py-variable">notes</span>.<span class="py-function">copy</span>()
<span class="py-comment"># Astuce avancée : Masque booléen (on verra ça plus tard, mais c'est puissant !)</span>
<span class="py-variable">notes_corrigees</span>[<span class="py-variable">notes_corrigees</span> < 10] = 10
<span class="py-builtin">print</span>(<span class="py-string">"Notes corrigées :\n"</span>, <span class="py-variable">notes_corrigees</span>)</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
</section>

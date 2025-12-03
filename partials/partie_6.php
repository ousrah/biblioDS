<!-- =================================================================== -->
<!-- PARTIE 3 : BIBLIOTHÈQUES DU CALCUL SCIENTIFIQUE SCIPY -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-12">Partie 3 : Bibliothèques du Calcul Scientifique SciPy</h2>

<!-- =================================================================== -->
<!-- CHAPITRE 1 : INTRODUCTION ET OBJECTIF -->
<!-- =================================================================== -->
<section id="scipy-intro" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 1 : Introduction et Objectif</h3>
    
    <div class="mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-2">1. Qu'est-ce que SciPy ?</h4>
        <p class="text-gray-700 mb-4 leading-relaxed">
            <strong>SciPy</strong> (Scientific Python) est une bibliothèque open-source utilisée pour le calcul scientifique et technique. Elle s'appuie sur NumPy et fournit une vaste collection d'algorithmes mathématiques et de fonctions de commodité.
        </p>
        <p class="text-gray-700 mb-4">
            Elle fournit des algorithmes pour résoudre de nombreux problèmes scientifiques standards :
        </p>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 text-gray-700 mb-4 ml-4">
            <li class="flex items-center"><span class="text-indigo-500 mr-2">✓</span> L'optimisation</li>
            <li class="flex items-center"><span class="text-indigo-500 mr-2">✓</span> L'intégration</li>
            <li class="flex items-center"><span class="text-indigo-500 mr-2">✓</span> L'interpolation</li>
            <li class="flex items-center"><span class="text-indigo-500 mr-2">✓</span> Les problèmes de valeurs propres</li>
            <li class="flex items-center"><span class="text-indigo-500 mr-2">✓</span> Les équations algébriques</li>
            <li class="flex items-center"><span class="text-indigo-500 mr-2">✓</span> Les équations différentielles</li>
            <li class="flex items-center"><span class="text-indigo-500 mr-2">✓</span> Les statistiques</li>
        </ul>
    </div>

    <div class="bg-blue-50 p-6 rounded-lg border border-blue-100 mb-8">
        <h4 class="font-bold text-blue-900 mb-3">SciPy vs NumPy</h4>
        <p class="text-blue-800 mb-3">
            Si SciPy utilise NumPy, pourquoi ne pas simplement utiliser NumPy ?
        </p>
        <ul class="list-disc ml-6 text-blue-800 space-y-2">
            <li><strong>NumPy</strong> fournit les blocs de construction de base (tableaux, opérations élémentaires).</li>
            <li><strong>SciPy</strong> ajoute des algorithmes scientifiques de haut niveau (optimisation, traitement du signal, stats avancées) qui utilisent ces tableaux.</li>
            <li>SciPy est optimisée et contient des fonctions qui ne sont pas présentes dans NumPy pour garder NumPy léger.</li>
        </ul>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Installation</h4>
        <p class="text-gray-700 mb-2">Installez SciPy via pip (NumPy sera installé automatiquement comme dépendance) :</p>
        <div class="bg-gray-800 text-white p-3 rounded-lg font-mono text-sm mb-4 w-fit">
            <span class="text-green-400">$</span> pip install scipy
        </div>
        
        <h4 class="font-bold text-gray-800 mb-2">Vérification de l'installation</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">scipy</span>
<span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-builtin">print</span>(<span class="py-string">f"Version de SciPy : {<span class="py-variable">scipy</span>.<span class="py-variable">__version__</span>}"</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 2 : ORGANISATION (SOUS-PACKAGES) -->
<!-- =================================================================== -->
<section id="scipy-org" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 2 : Organisation de SciPy</h3>
    <p class="text-gray-700 mb-6">
        SciPy est organisée en sous-packages spécialisés couvrant différents domaines du calcul scientifique. Voici les principaux :
    </p>

    <div class="overflow-x-auto bg-white rounded-lg shadow-sm border mb-8">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Sous-package</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-sm">
                <tr><td class="px-6 py-3 font-mono text-indigo-600">scipy.cluster</td><td class="px-6 py-3">Algorithmes de partitionnement (Clustering, K-Means...)</td></tr>
                <tr><td class="px-6 py-3 font-mono text-indigo-600">scipy.constants</td><td class="px-6 py-3">Constantes mathématiques et physiques (pi, c, h...)</td></tr>
                <tr><td class="px-6 py-3 font-mono text-indigo-600">scipy.integrate</td><td class="px-6 py-3">Intégration numérique et équations différentielles</td></tr>
                <tr><td class="px-6 py-3 font-mono text-indigo-600">scipy.interpolate</td><td class="px-6 py-3">Interpolation et lissage de données</td></tr>
                <tr><td class="px-6 py-3 font-mono text-indigo-600">scipy.io</td><td class="px-6 py-3">Entrée et sortie (fichiers Matlab, Wav, etc.)</td></tr>
                <tr><td class="px-6 py-3 font-mono text-indigo-600">scipy.linalg</td><td class="px-6 py-3">Algèbre linéaire avancée</td></tr>
                <tr><td class="px-6 py-3 font-mono text-indigo-600">scipy.optimize</td><td class="px-6 py-3">Optimisation et recherche de racines</td></tr>
                <tr><td class="px-6 py-3 font-mono text-indigo-600">scipy.stats</td><td class="px-6 py-3">Distributions statistiques et tests</td></tr>
            </tbody>
        </table>
    </div>

    <div class="bg-white p-4 rounded border shadow-sm mb-8">
        <h6 class="font-bold text-gray-800 mb-2">Exemple : Utilisation des constantes</h6>
        <p class="text-sm text-gray-600 mb-2">SciPy fournit de nombreuses constantes physiques précises.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">scipy</span> <span class="py-keyword">import</span> <span class="py-variable">constants</span>

<span class="py-builtin">print</span>(<span class="py-string">f"Pi : {<span class="py-variable">constants</span>.<span class="py-variable">pi</span>}"</span>)
<span class="py-builtin">print</span>(<span class="py-string">f"Vitesse de la lumière (c) : {<span class="py-variable">constants</span>.<span class="py-variable">c</span>} m/s"</span>)
<span class="py-builtin">print</span>(<span class="py-string">f"Constante de Planck (h) : {<span class="py-variable">constants</span>.<span class="py-variable">h</span>}"</span>)

<span class="py-comment"># Conversion d'unités</span>
<span class="py-builtin">print</span>(<span class="py-string">f"1 Mile en mètres : {<span class="py-variable">constants</span>.<span class="py-variable">mile</span>}"</span>)      <span class="py-comment"># 1609.344</span>
<span class="py-builtin">print</span>(<span class="py-string">f"1 Gramme en kg : {<span class="py-variable">constants</span>.<span class="py-variable">gram</span>}"</span>)        <span class="py-comment"># 0.001</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 3 : ENTRÉE ET SORTIE (IO) -->
<!-- =================================================================== -->
<section id="scipy-io" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 3 : Entrée et Sortie (IO)</h3>
    <p class="text-gray-700 mb-6">
        SciPy et NumPy offrent de nombreux outils pour lire et écrire des données.
    </p>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">1. Fichiers Binaires NumPy (.npy, .npz)</h4>
        <p class="text-gray-700 mb-2">Le format natif de NumPy est le plus efficace pour stocker des tableaux.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <div class="bg-gray-50 p-4 rounded border">
                <h6 class="font-bold text-indigo-600 mb-2">Sauvegarde</h6>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li><code>np.save()</code> : Un seul tableau (.npy)</li>
                    <li><code>np.savez()</code> : Plusieurs tableaux (.npz)</li>
                    <li><code>np.savez_compressed()</code> : Compressé (.npz)</li>
                </ul>
            </div>
            <div class="bg-gray-50 p-4 rounded border">
                <h6 class="font-bold text-indigo-600 mb-2">Chargement</h6>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li><code>np.load()</code> : Charge .npy ou .npz</li>
                </ul>
            </div>
        </div>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-variable">arr</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([1, 2, 3, 4, 5])

<span class="py-comment"># Sauvegarder</span>
<span class="py-variable">np</span>.<span class="py-function">save</span>(<span class="py-string">'mon_tableau.npy'</span>, <span class="py-variable">arr</span>)

<span class="py-comment"># Charger</span>
<span class="py-variable">loaded_arr</span> = <span class="py-variable">np</span>.<span class="py-function">load</span>(<span class="py-string">'mon_tableau.npy'</span>)
<span class="py-builtin">print</span>(<span class="py-variable">loaded_arr</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Fichiers Textes (CSV, TXT)</h4>
        <p class="text-gray-700 mb-2">Pour l'interopérabilité avec Excel ou d'autres logiciels.</p>
        <ul class="list-disc ml-6 text-gray-700 mb-4 text-sm">
            <li><code>np.savetxt()</code> : Sauvegarder en texte.</li>
            <li><code>np.loadtxt()</code> : Charger depuis un texte (simple).</li>
            <li><code>np.genfromtxt()</code> : Plus robuste (gère les valeurs manquantes).</li>
        </ul>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">3. Spécifique SciPy : Matlab & Autres</h4>
        <p class="text-gray-700 mb-2">
            Le module <code>scipy.io</code> permet de lire des formats spécifiques comme ceux de Matlab (.mat), IDL, Matrix Market, etc.
        </p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">scipy</span> <span class="py-keyword">import</span> <span class="py-variable">io</span>
<span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-comment"># Créer un dictionnaire de données</span>
<span class="py-variable">data</span> = {<span class="py-string">'vecteur'</span>: <span class="py-variable">np</span>.<span class="py-function">array</span>([1, 2, 3]), <span class="py-string">'label'</span>: <span class="py-string">'expérience 1'</span>}

<span class="py-comment"># Sauvegarder au format MATLAB (.mat)</span>
<span class="py-variable">io</span>.<span class="py-function">savemat</span>(<span class="py-string">'data.mat'</span>, <span class="py-variable">data</span>)

<span class="py-comment"># Recharger</span>
<span class="py-variable">mat_data</span> = <span class="py-variable">io</span>.<span class="py-function">loadmat</span>(<span class="py-string">'data.mat'</span>)
<span class="py-builtin">print</span>(<span class="py-variable">mat_data</span>[<span class="py-string">'vecteur'</span>])</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 4 : STATISTIQUES (SCIPY.STATS) -->
<!-- =================================================================== -->
<section id="scipy-stats" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 4 : Distributions Statistiques</h3>
    <p class="text-gray-700 mb-6">
        Le module <code>scipy.stats</code> est très complet. Il contient des centaines de distributions de probabilité continues et discrètes, ainsi que des tests statistiques.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
        <div>
            <h5 class="font-bold text-gray-800 border-b pb-2 mb-3">Distributions Continues</h5>
            <ul class="text-sm space-y-1 text-gray-700">
                <li><code class="text-indigo-600">norm</code> : Normale (Gaussienne)</li>
                <li><code class="text-indigo-600">uniform</code> : Uniforme</li>
                <li><code class="text-indigo-600">expon</code> : Exponentielle</li>
                <li><code class="text-indigo-600">gamma</code> : Gamma</li>
                <li><code class="text-indigo-600">beta</code> : Beta</li>
                <li><code class="text-indigo-600">chi2</code> : Chi-carré</li>
            </ul>
        </div>
        <div>
            <h5 class="font-bold text-gray-800 border-b pb-2 mb-3">Distributions Discrètes</h5>
            <ul class="text-sm space-y-1 text-gray-700">
                <li><code class="text-indigo-600">binom</code> : Binomiale</li>
                <li><code class="text-indigo-600">poisson</code> : Poisson</li>
                <li><code class="text-indigo-600">geom</code> : Géométrique</li>
                <li><code class="text-indigo-600">bernoulli</code> : Bernoulli</li>
            </ul>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border mb-8">
        <h4 class="font-bold text-gray-800 mb-4">Méthodes communes aux distributions</h4>
        <p class="text-gray-700 mb-4 text-sm">Chaque objet de distribution (ex: <code>norm</code>) possède ces méthodes :</p>
        <ul class="list-disc ml-6 text-gray-700 mb-4 text-sm">
            <li><code>rvs()</code> : Générer des nombres aléatoires (Random Variates).</li>
            <li><code>pdf()</code> : Fonction de densité de probabilité (Probability Density Function).</li>
            <li><code>cdf()</code> : Fonction de répartition (Cumulative Distribution Function).</li>
            <li><code>ppf()</code> : Fonction quantile (Percent Point Function - inverse de CDF).</li>
        </ul>

        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">scipy</span>.<span class="py-variable">stats</span> <span class="py-keyword">import</span> <span class="py-variable">norm</span>
<span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-comment"># Distribution Normale centrée réduite (mu=0, sigma=1)</span>
<span class="py-comment"># 1. Générer 5 nombres aléatoires</span>
<span class="py-variable">r</span> = <span class="py-variable">norm</span>.<span class="py-function">rvs</span>(<span class="py-variable">size</span>=5)
<span class="py-builtin">print</span>(<span class="py-string">"Aléatoire :"</span>, <span class="py-variable">r</span>)

<span class="py-comment"># 2. Probabilité d'être inférieur à 0 (CDF)</span>
<span class="py-comment"># Pour une loi normale centrée, c'est 50% (0.5)</span>
<span class="py-variable">p</span> = <span class="py-variable">norm</span>.<span class="py-function">cdf</span>(0)
<span class="py-builtin">print</span>(<span class="py-string">"P(X < 0) :"</span>, <span class="py-variable">p</span>)

<span class="py-comment"># 3. Densité en 0 (Le sommet de la cloche)</span>
<span class="py-variable">d</span> = <span class="py-variable">norm</span>.<span class="py-function">pdf</span>(0)
<span class="py-builtin">print</span>(<span class="py-string">"Densité en 0 :"</span>, <span class="py-variable">d</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- Exercice Pratique -->
    <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
        <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice : Pile ou Face truqué</h4>
        <p class="text-indigo-800 mb-4 text-sm">
            On lance 10 fois une pièce qui a 30% de chance de tomber sur Face. Quelle est la probabilité d'obtenir exactement 3 fois Face ?
            <br><em>Indice : Utilisez la loi Binomiale (binom).</em>
        </p>
        
        <details class="group">
            <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                <span class="mr-2">Voir la solution</span>
                <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </summary>
            <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">scipy</span>.<span class="py-variable">stats</span> <span class="py-keyword">import</span> <span class="py-variable">binom</span>

<span class="py-variable">n</span> = 10  <span class="py-comment"># Nombre d'essais</span>
<span class="py-variable">p</span> = 0.3 <span class="py-comment"># Probabilité de succès (Face)</span>
<span class="py-variable">k</span> = 3   <span class="py-comment"># Nombre de succès voulus</span>

<span class="py-comment"># pmf = Probability Mass Function (pour les discrets)</span>
<span class="py-variable">proba</span> = <span class="py-variable">binom</span>.<span class="py-function">pmf</span>(<span class="py-variable">k</span>, <span class="py-variable">n</span>, <span class="py-variable">p</span>)

<span class="py-builtin">print</span>(<span class="py-string">f"Probabilité d'avoir 3 faces : {<span class="py-variable">proba</span>:.4f}"</span>)
<span class="py-comment"># Résultat : ~0.2668 (soit 26.68%)</span></code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
        </details>
    </div>
</section>

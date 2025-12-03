<!-- =================================================================== -->
<!-- PARTIE 5 : BIBLIOTHÈQUES DE VISUALISATION -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-12">Partie 5 : Bibliothèques de Visualisation</h2>

<p class="text-gray-700 mb-8">
    La visualisation des données est une étape cruciale en Data Science. Elle permet de comprendre les tendances, les modèles et les anomalies. Nous allons explorer les deux bibliothèques les plus populaires : <strong>Matplotlib</strong> et <strong>Seaborn</strong>.
</p>

<!-- =================================================================== -->
<!-- CHAPITRE 1 : MATPLOTLIB -->
<!-- =================================================================== -->
<section id="viz-matplotlib" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 1 : Matplotlib</h3>
    
    <div class="mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-2">1. Introduction</h4>
        <p class="text-gray-700 mb-4 leading-relaxed">
            <strong>Matplotlib</strong> est la bibliothèque la plus utilisée en Python pour tracer des graphiques 2D. Elle est puissante, flexible et permet de créer des tracés de haute qualité en quelques lignes de code.
        </p>
        
        <div class="bg-gray-50 p-4 rounded border mb-4">
            <h6 class="font-bold text-gray-800 mb-2">Types de graphiques courants</h6>
            <ul class="grid grid-cols-2 md:grid-cols-3 gap-2 text-sm text-gray-700">
                <li>📈 Graphiques linéaires (Line plots)</li>
                <li>📊 Diagrammes à barres (Bar charts)</li>
                <li>📉 Histogrammes (Histograms)</li>
                <li>📍 Diagrammes de dispersion (Scatter)</li>
                <li>🍰 Graphiques circulaires (Pie charts)</li>
            </ul>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Installation et Importation</h4>
        <p class="text-gray-700 mb-2">Installation via pip :</p>
        <div class="bg-gray-800 text-white p-3 rounded-lg font-mono text-sm mb-4 w-fit">
            <span class="text-green-400">$</span> pip install matplotlib
        </div>
        <p class="text-gray-700 mb-2">
            Le module principal est <code>pyplot</code>, importé conventionnellement sous l'alias <code>plt</code>.
        </p>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">3. Exemple de Base</h4>
        <p class="text-gray-700 mb-2">Traçons une simple courbe sinusoïdale.</p>
        
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">matplotlib</span>.<span class="py-variable">pyplot</span> <span class="py-keyword">as</span> <span class="py-variable">plt</span>
<span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-comment"># 1. Création des données</span>
<span class="py-variable">x</span> = <span class="py-variable">np</span>.<span class="py-function">linspace</span>(0, 10, 100)
<span class="py-variable">y</span> = <span class="py-variable">np</span>.<span class="py-function">sin</span>(<span class="py-variable">x</span>)

<span class="py-comment"># 2. Création du tracé (Line plot)</span>
<span class="py-variable">plt</span>.<span class="py-function">plot</span>(<span class="py-variable">x</span>, <span class="py-variable">y</span>, <span class="py-variable">label</span>=<span class="py-string">'Sinus'</span>, <span class="py-variable">color</span>=<span class="py-string">'blue'</span>)

<span class="py-comment"># Ajout de titres et légendes</span>
<span class="py-variable">plt</span>.<span class="py-function">title</span>(<span class="py-string">"Mon Premier Graphique"</span>)
<span class="py-variable">plt</span>.<span class="py-function">xlabel</span>(<span class="py-string">"Axe X"</span>)
<span class="py-variable">plt</span>.<span class="py-function">ylabel</span>(<span class="py-string">"Axe Y"</span>)
<span class="py-variable">plt</span>.<span class="py-function">legend</span>()

<span class="py-comment"># 3. Affichage</span>
<span class="py-variable">plt</span>.<span class="py-function">show</span>()</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- Exercice Pratique -->
    <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
        <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice : Nuage de points</h4>
        <p class="text-indigo-800 mb-4 text-sm">
            Générez 50 points aléatoires pour X et Y et affichez-les sous forme de nuage de points (Scatter plot) rouge.
            <br><em>Indice : Utilisez <code>plt.scatter()</code>.</em>
        </p>
        
        <details class="group">
            <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                <span class="mr-2">Voir la solution</span>
                <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </summary>
            <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">matplotlib</span>.<span class="py-variable">pyplot</span> <span class="py-keyword">as</span> <span class="py-variable">plt</span>
<span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-variable">x</span> = <span class="py-variable">np</span>.<span class="py-variable">random</span>.<span class="py-function">rand</span>(50)
<span class="py-variable">y</span> = <span class="py-variable">np</span>.<span class="py-variable">random</span>.<span class="py-function">rand</span>(50)

<span class="py-variable">plt</span>.<span class="py-function">scatter</span>(<span class="py-variable">x</span>, <span class="py-variable">y</span>, <span class="py-variable">color</span>=<span class="py-string">'red'</span>, <span class="py-variable">marker</span>=<span class="py-string">'x'</span>)
<span class="py-variable">plt</span>.<span class="py-function">title</span>(<span class="py-string">"Nuage de points aléatoires"</span>)
<span class="py-variable">plt</span>.<span class="py-function">show</span>()</code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
        </details>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 2 : SEABORN -->
<!-- =================================================================== -->
<section id="viz-seaborn" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 2 : Seaborn</h3>
    
    <div class="mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-2">1. Pourquoi Seaborn ?</h4>
        <p class="text-gray-700 mb-4">
            <strong>Seaborn</strong> est construit <em>au-dessus</em> de Matplotlib. Elle fournit une interface de plus haut niveau pour dessiner des graphiques statistiques attrayants.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <div class="bg-green-50 p-4 rounded border border-green-100">
                <h6 class="font-bold text-green-900 mb-2">Avantages</h6>
                <ul class="list-disc ml-4 text-sm text-green-800">
                    <li>🎨 Meilleurs thèmes et palettes par défaut.</li>
                    <li>🐼 Intégration native avec les DataFrames Pandas.</li>
                    <li>📊 Facilite les graphiques complexes (Heatmaps, Violins).</li>
                </ul>
            </div>
            <div class="bg-gray-50 p-4 rounded border">
                <h6 class="font-bold text-gray-800 mb-2">Installation</h6>
                <div class="bg-gray-800 text-white p-2 rounded font-mono text-xs">
                    <span class="text-green-400">$</span> pip install seaborn
                </div>
                <p class="text-xs text-gray-500 mt-2">Import alias : <code>sns</code></p>
            </div>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Exemple : Histogramme et Densité</h4>
        <p class="text-gray-700 mb-2">
            Seaborn rend très simple l'ajout d'une estimation de densité (KDE) sur un histogramme.
        </p>
        
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">seaborn</span> <span class="py-keyword">as</span> <span class="py-variable">sns</span>
<span class="py-keyword">import</span> <span class="py-variable">matplotlib</span>.<span class="py-variable">pyplot</span> <span class="py-keyword">as</span> <span class="py-variable">plt</span>
<span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-comment"># Générer des données suivant une loi normale</span>
<span class="py-variable">data</span> = <span class="py-variable">np</span>.<span class="py-variable">random</span>.<span class="py-function">normal</span>(<span class="py-variable">size</span>=1000)

<span class="py-comment"># Création du graphique (histplot)</span>
<span class="py-comment"># kde=True ajoute la courbe de densité</span>
<span class="py-variable">sns</span>.<span class="py-function">histplot</span>(<span class="py-variable">data</span>, <span class="py-variable">kde</span>=<span class="py-builtin">True</span>, <span class="py-variable">color</span>=<span class="py-string">'teal'</span>)

<span class="py-variable">plt</span>.<span class="py-function">title</span>(<span class="py-string">"Distribution Normale avec Seaborn"</span>)
<span class="py-variable">plt</span>.<span class="py-function">show</span>()</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 3 : AUTRES OUTILS -->
<!-- =================================================================== -->
<section id="viz-others" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 3 : Autres Outils</h3>
    <p class="text-gray-700 mb-4">
        Bien que Matplotlib et Seaborn soient les standards, d'autres bibliothèques méritent d'être mentionnées pour des besoins spécifiques :
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white p-4 rounded border shadow-sm">
            <h6 class="font-bold text-indigo-600 mb-1">Plotly</h6>
            <p class="text-sm text-gray-600">Pour des graphiques <strong>interactifs</strong> (zoom, survol) utilisables dans le web.</p>
        </div>
        <div class="bg-white p-4 rounded border shadow-sm">
            <h6 class="font-bold text-indigo-600 mb-1">Bokeh</h6>
            <p class="text-sm text-gray-600">Similaire à Plotly, excellent pour les tableaux de bord interactifs et les grands jeux de données.</p>
        </div>
        <div class="bg-white p-4 rounded border shadow-sm">
            <h6 class="font-bold text-indigo-600 mb-1">Vispy</h6>
            <p class="text-sm text-gray-600">Basé sur OpenGL, pour la visualisation haute performance (millions de points) en temps réel.</p>
        </div>
    </div>
</section>

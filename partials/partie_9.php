<!-- =================================================================== -->
<!-- PARTIE 6 : BIBLIOTHÈQUES D'APPRENTISSAGE AUTOMATIQUE (MACHINE LEARNING) -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-12">Partie 6 : Bibliothèques d'Apprentissage Automatique (Machine Learning)</h2>

<!-- =================================================================== -->
<!-- CHAPITRE 1 : INTRODUCTION À SCIKIT-LEARN -->
<!-- =================================================================== -->
<section id="ml-intro" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 1 : Introduction à Scikit-learn (sklearn)</h3>
    
    <div class="mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-2">1. Qu'est-ce que Scikit-learn ?</h4>
        <p class="text-gray-700 mb-4 leading-relaxed">
            <strong>Scikit-learn</strong> est la bibliothèque la plus populaire et la plus utilisée en Python pour l'apprentissage automatique (Machine Learning). Elle fournit des outils efficaces pour l'analyse statistique et la modélisation de données.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-blue-50 p-6 rounded-lg border border-blue-100">
            <h5 class="font-bold text-blue-900 mb-3">Caractéristiques Principales</h5>
            <ul class="list-disc ml-6 text-blue-800 space-y-2">
                <li><strong>Simple et efficace</strong> : Interface cohérente pour tous les modèles.</li>
                <li><strong>Open source</strong> : Disponible gratuitement.</li>
                <li><strong>Réutilisable</strong> : Les modèles peuvent être sauvegardés.</li>
                <li><strong>Interopérabilité</strong> : Construite sur NumPy, SciPy et Matplotlib.</li>
            </ul>
        </div>
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
            <h5 class="font-bold text-indigo-900 mb-3">Domaines Couverts</h5>
            <ul class="list-disc ml-6 text-indigo-800 space-y-2">
                <li><strong>Apprentissage Supervisé</strong> : Classification, Régression.</li>
                <li><strong>Apprentissage Non Supervisé</strong> : Clustering, Réduction de dimension.</li>
                <li><em>Note : Le Deep Learning est plutôt géré par TensorFlow/PyTorch.</em></li>
            </ul>
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Installation</h4>
        <div class="bg-gray-800 text-white p-3 rounded-lg font-mono text-sm mb-4 w-fit">
            <span class="text-green-400">$</span> pip install scikit-learn
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 2 : ALGORITHMES ET FONCTIONS CLÉS -->
<!-- =================================================================== -->
<section id="ml-algos" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 2 : Algorithmes et Fonctions Clés</h3>
    <p class="text-gray-700 mb-6">
        Scikit-learn est organisé en sous-modules spécialisés. Voici les plus importants :
    </p>

    <div class="overflow-x-auto bg-white rounded-lg shadow-sm border mb-8">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Sous-module</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Exemples</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-sm">
                <tr>
                    <td class="px-6 py-3 font-mono text-indigo-600">sklearn.linear_model</td>
                    <td class="px-6 py-3">Modèles linéaires</td>
                    <td class="px-6 py-3 text-gray-500">LinearRegression, LogisticRegression</td>
                </tr>
                <tr>
                    <td class="px-6 py-3 font-mono text-indigo-600">sklearn.svm</td>
                    <td class="px-6 py-3">Machines à Vecteurs de Support</td>
                    <td class="px-6 py-3 text-gray-500">SVC, SVR</td>
                </tr>
                <tr>
                    <td class="px-6 py-3 font-mono text-indigo-600">sklearn.tree</td>
                    <td class="px-6 py-3">Arbres de décision</td>
                    <td class="px-6 py-3 text-gray-500">DecisionTreeClassifier</td>
                </tr>
                <tr>
                    <td class="px-6 py-3 font-mono text-indigo-600">sklearn.ensemble</td>
                    <td class="px-6 py-3">Méthodes d'ensemble</td>
                    <td class="px-6 py-3 text-gray-500">RandomForestClassifier</td>
                </tr>
                <tr>
                    <td class="px-6 py-3 font-mono text-indigo-600">sklearn.cluster</td>
                    <td class="px-6 py-3">Clustering (Non supervisé)</td>
                    <td class="px-6 py-3 text-gray-500">KMeans, DBSCAN</td>
                </tr>
                <tr>
                    <td class="px-6 py-3 font-mono text-indigo-600">sklearn.preprocessing</td>
                    <td class="px-6 py-3">Prétraitement des données</td>
                    <td class="px-6 py-3 text-gray-500">StandardScaler, MinMaxScaler</td>
                </tr>
                <tr>
                    <td class="px-6 py-3 font-mono text-indigo-600">sklearn.model_selection</td>
                    <td class="px-6 py-3">Sélection et validation</td>
                    <td class="px-6 py-3 text-gray-500">train_test_split, GridSearchCV</td>
                </tr>
                <tr>
                    <td class="px-6 py-3 font-mono text-indigo-600">sklearn.metrics</td>
                    <td class="px-6 py-3">Mesures de performance</td>
                    <td class="px-6 py-3 text-gray-500">accuracy_score, mean_squared_error</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 3 : WORKFLOW ML (LES ÉTAPES) -->
<!-- =================================================================== -->
<section id="ml-workflow" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 3 : Les Étapes d'un Projet ML (Workflow)</h3>
    <p class="text-gray-700 mb-6">
        L'utilisation de Scikit-learn suit presque toujours le même schéma en 5 étapes.
    </p>

    <div class="space-y-6 mb-8">
        <!-- Étape 1 -->
        <div class="flex">
            <div class="flex-shrink-0 mr-4">
                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-indigo-100 text-indigo-600 font-bold">1</div>
            </div>
            <div>
                <h5 class="text-lg font-bold text-gray-800">Choisir la classe de Modèle</h5>
                <p class="text-gray-600 text-sm mb-2">Importer la classe appropriée.</p>
                <code class="bg-gray-100 p-1 rounded text-xs">from sklearn.linear_model import LinearRegression</code>
            </div>
        </div>

        <!-- Étape 2 -->
        <div class="flex">
            <div class="flex-shrink-0 mr-4">
                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-indigo-100 text-indigo-600 font-bold">2</div>
            </div>
            <div>
                <h5 class="text-lg font-bold text-gray-800">Instancier le Modèle (Hyperparamètres)</h5>
                <p class="text-gray-600 text-sm mb-2">Créer une instance en fixant les paramètres qui ne sont pas appris.</p>
                <code class="bg-gray-100 p-1 rounded text-xs">model = LinearRegression()</code>
            </div>
        </div>

        <!-- Étape 3 -->
        <div class="flex">
            <div class="flex-shrink-0 mr-4">
                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-indigo-100 text-indigo-600 font-bold">3</div>
            </div>
            <div>
                <h5 class="text-lg font-bold text-gray-800">Organiser les Données (X et y)</h5>
                <p class="text-gray-600 text-sm mb-2">
                    <strong>X (Features)</strong> : Matrice 2D (Lignes=Échantillons, Colonnes=Caractéristiques).<br>
                    <strong>y (Target)</strong> : Vecteur 1D (La valeur à prédire).
                </p>
            </div>
        </div>

        <!-- Étape 4 -->
        <div class="flex">
            <div class="flex-shrink-0 mr-4">
                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-indigo-100 text-indigo-600 font-bold">4</div>
            </div>
            <div>
                <h5 class="text-lg font-bold text-gray-800">Entraîner le Modèle (.fit)</h5>
                <p class="text-gray-600 text-sm mb-2">C'est ici que le modèle "apprend".</p>
                <code class="bg-gray-100 p-1 rounded text-xs">model.fit(X_train, y_train)</code>
            </div>
        </div>

        <!-- Étape 5 -->
        <div class="flex">
            <div class="flex-shrink-0 mr-4">
                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-indigo-100 text-indigo-600 font-bold">5</div>
            </div>
            <div>
                <h5 class="text-lg font-bold text-gray-800">Prédire (.predict)</h5>
                <p class="text-gray-600 text-sm mb-2">Utiliser le modèle sur de nouvelles données.</p>
                <code class="bg-gray-100 p-1 rounded text-xs">y_pred = model.predict(X_test)</code>
            </div>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border mb-8">
        <h4 class="font-bold text-gray-800 mb-4">Exemple Complet : Régression Linéaire</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>
<span class="py-keyword">from</span> <span class="py-variable">sklearn</span>.<span class="py-variable">linear_model</span> <span class="py-keyword">import</span> <span class="py-variable">LinearRegression</span>
<span class="py-keyword">from</span> <span class="py-variable">sklearn</span>.<span class="py-variable">model_selection</span> <span class="py-keyword">import</span> <span class="py-variable">train_test_split</span>

<span class="py-comment"># 1. Générer des données factices</span>
<span class="py-variable">X</span> = <span class="py-variable">np</span>.<span class="py-variable">random</span>.<span class="py-function">rand</span>(100, 1) * 10 <span class="py-comment"># 100 valeurs entre 0 et 10</span>
<span class="py-variable">y</span> = 2 * <span class="py-variable">X</span> + 1 + <span class="py-variable">np</span>.<span class="py-variable">random</span>.<span class="py-function">randn</span>(100, 1) <span class="py-comment"># y = 2x + 1 + bruit</span>

<span class="py-comment"># 2. Séparer les données (Train / Test)</span>
<span class="py-variable">X_train</span>, <span class="py-variable">X_test</span>, <span class="py-variable">y_train</span>, <span class="py-variable">y_test</span> = <span class="py-function">train_test_split</span>(<span class="py-variable">X</span>, <span class="py-variable">y</span>, <span class="py-variable">test_size</span>=0.2)

<span class="py-comment"># 3. Choisir et Instancier le modèle</span>
<span class="py-variable">model</span> = <span class="py-function">LinearRegression</span>()

<span class="py-comment"># 4. Entraîner</span>
<span class="py-variable">model</span>.<span class="py-function">fit</span>(<span class="py-variable">X_train</span>, <span class="py-variable">y_train</span>)

<span class="py-comment"># 5. Prédire</span>
<span class="py-variable">predictions</span> = <span class="py-variable">model</span>.<span class="py-function">predict</span>(<span class="py-variable">X_test</span>)

<span class="py-builtin">print</span>(<span class="py-string">f"Coefficient appris : {<span class="py-variable">model</span>.<span class="py-variable">coef_</span>[0][0]:.2f}"</span>) <span class="py-comment"># Devrait être proche de 2</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Ordonnée à l'origine : {<span class="py-variable">model</span>.<span class="py-variable">intercept_</span>[0]:.2f}"</span>) <span class="py-comment"># Devrait être proche de 1</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- Exercice Pratique -->
    <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
        <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice : Classification Iris</h4>
        <p class="text-indigo-800 mb-4 text-sm">
            Utilisez le jeu de données Iris (inclus dans sklearn) pour entraîner un arbre de décision (DecisionTreeClassifier) et prédire la classe d'une fleur.
        </p>
        
        <details class="group">
            <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                <span class="mr-2">Voir la solution</span>
                <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </summary>
            <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">sklearn</span>.<span class="py-variable">datasets</span> <span class="py-keyword">import</span> <span class="py-function">load_iris</span>
<span class="py-keyword">from</span> <span class="py-variable">sklearn</span>.<span class="py-variable">tree</span> <span class="py-keyword">import</span> <span class="py-variable">DecisionTreeClassifier</span>
<span class="py-keyword">from</span> <span class="py-variable">sklearn</span>.<span class="py-variable">model_selection</span> <span class="py-keyword">import</span> <span class="py-variable">train_test_split</span>
<span class="py-keyword">from</span> <span class="py-variable">sklearn</span>.<span class="py-variable">metrics</span> <span class="py-keyword">import</span> <span class="py-variable">accuracy_score</span>

<span class="py-comment"># 1. Charger les données</span>
<span class="py-variable">iris</span> = <span class="py-function">load_iris</span>()
<span class="py-variable">X</span>, <span class="py-variable">y</span> = <span class="py-variable">iris</span>.<span class="py-variable">data</span>, <span class="py-variable">iris</span>.<span class="py-variable">target</span>

<span class="py-comment"># 2. Split</span>
<span class="py-variable">X_train</span>, <span class="py-variable">X_test</span>, <span class="py-variable">y_train</span>, <span class="py-variable">y_test</span> = <span class="py-function">train_test_split</span>(<span class="py-variable">X</span>, <span class="py-variable">y</span>, <span class="py-variable">test_size</span>=0.2, <span class="py-variable">random_state</span>=42)

<span class="py-comment"># 3. Modèle</span>
<span class="py-variable">clf</span> = <span class="py-function">DecisionTreeClassifier</span>()

<span class="py-comment"># 4. Entraînement</span>
<span class="py-variable">clf</span>.<span class="py-function">fit</span>(<span class="py-variable">X_train</span>, <span class="py-variable">y_train</span>)

<span class="py-comment"># 5. Prédiction et Score</span>
<span class="py-variable">y_pred</span> = <span class="py-variable">clf</span>.<span class="py-function">predict</span>(<span class="py-variable">X_test</span>)
<span class="py-builtin">print</span>(<span class="py-string">f"Précision : {<span class="py-function">accuracy_score</span>(<span class="py-variable">y_test</span>, <span class="py-variable">y_pred</span>):.2f}"</span>)</code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
        </details>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 4 : AUTRES BIBLIOTHÈQUES -->
<!-- =================================================================== -->
<section id="ml-others" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 4 : Autres Bibliothèques</h3>
    <p class="text-gray-700 mb-4">
        Pour l'apprentissage profond (Deep Learning) et les réseaux de neurones complexes, d'autres bibliothèques sont privilégiées :
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white p-4 rounded border shadow-sm">
            <h6 class="font-bold text-orange-600 mb-1">TensorFlow / Keras</h6>
            <p class="text-sm text-gray-600">Développé par Google. Très populaire pour la production et le déploiement de modèles.</p>
        </div>
        <div class="bg-white p-4 rounded border shadow-sm">
            <h6 class="font-bold text-red-600 mb-1">PyTorch</h6>
            <p class="text-sm text-gray-600">Développé par Facebook (Meta). Très apprécié en recherche pour sa flexibilité et son approche dynamique.</p>
        </div>
    </div>
</section>

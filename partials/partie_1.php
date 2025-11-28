<!-- =================================================================== -->
<!-- PARTIE 1 : BASES & ENVIRONNEMENT -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6">Partie 1 : Bases & Environnement</h2>

<!-- ========== CHAPITRE 1 : MODULES ========== -->
<!-- ========== CHAPITRE 1 : MODULES ========== -->
<section id="modules" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 1 : Manipulation des Modules</h3>
    
    <!-- 1. Création des modules -->
    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">1. Création des modules</h4>
        <p class="text-gray-700 mb-4 leading-relaxed">
            Un module est un fichier <code>.py</code> contenant un ensemble de variables, fonctions et classes que l'on peut importer et utiliser dans le programme principal (ou dans d'autres modules).
        </p>
        <div class="bg-blue-50 p-4 rounded-lg border border-blue-100 mb-4">
            <h5 class="font-bold text-blue-900 mb-2">Pourquoi utiliser des modules ?</h5>
            <ul class="list-disc ml-6 text-blue-800 space-y-1">
                <li><strong>Organisation</strong> : Séparation du code en fichiers logiques.</li>
                <li><strong>Réutilisation</strong> : Écrire une fois, utiliser partout.</li>
                <li><strong>Partage</strong> : Facilite la distribution du code.</li>
            </ul>
        </div>

        <h5 class="font-semibold text-gray-800 mb-2">Exemple de module (mon_module.py)</h5>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-string">"""
Exemple de module, test
"""</span>

<span class="py-variable">exemple_variable</span> = 3

<span class="py-keyword">def</span> <span class="py-function">exemple_fonction</span>():
    <span class="py-string">"""Exemple de fonction"""</span>
    <span class="py-keyword">return</span> 0

<span class="py-keyword">class</span> <span class="py-class">ExempleClasse</span>:
    <span class="py-string">"""Exemple de classe"""</span>
    <span class="py-keyword">def</span> <span class="py-function">__str__</span>(<span class="py-variable">self</span>):
        <span class="py-keyword">return</span> <span class="py-string">"ExempleClasse"</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- 2. Importation des modules -->
    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Importation des modules</h4>
        <p class="text-gray-700 mb-4">
            L'instruction <code>import</code> permet de charger un module. Python offre plusieurs syntaxes :
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
            <!-- Import classique -->
            <div class="bg-white p-4 rounded border">
                <h6 class="font-bold text-indigo-600 mb-2">Import classique</h6>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">mon_module</span>

<span class="py-builtin">print</span>(<span class="py-variable">mon_module</span>.<span class="py-variable">exemple_variable</span>)
<span class="py-variable">c</span> = <span class="py-variable">mon_module</span>.<span class="py-class">ExempleClasse</span>()</code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>

            <!-- Import avec alias -->
            <div class="bg-white p-4 rounded border">
                <h6 class="font-bold text-indigo-600 mb-2">Import avec alias (recommandé)</h6>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">mon_module</span> <span class="py-keyword">as</span> <span class="py-variable">mm</span>

<span class="py-builtin">print</span>(<span class="py-variable">mm</span>.<span class="py-variable">exemple_variable</span>)
<span class="py-variable">c</span> = <span class="py-variable">mm</span>.<span class="py-class">ExempleClasse</span>()</code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>

            <!-- Import spécifique -->
            <div class="bg-white p-4 rounded border">
                <h6 class="font-bold text-indigo-600 mb-2">Import spécifique</h6>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">mon_module</span> <span class="py-keyword">import</span> <span class="py-variable">exemple_fonction</span>

<span class="py-builtin">print</span>(<span class="py-function">exemple_fonction</span>())</code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>

            <!-- Import total (déconseillé) -->
            <div class="bg-white p-4 rounded border border-red-200">
                <h6 class="font-bold text-red-600 mb-2">Import total (Déconseillé ⚠️)</h6>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">mon_module</span> <span class="py-keyword">import</span> *

<span class="py-comment"># Masque l'origine des fonctions</span>
<span class="py-builtin">print</span>(<span class="py-variable">exemple_variable</span>)</code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Recherche de modules (PYTHONPATH) -->
    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">3. Où Python cherche-t-il les modules ?</h4>
        <p class="text-gray-700 mb-2">Lors d'un import, Python cherche dans cet ordre :</p>
        <ol class="list-decimal ml-6 text-gray-700 space-y-1 mb-4">
            <li>Le répertoire courant.</li>
            <li>Les répertoires de la variable d'environnement <strong>PYTHONPATH</strong>.</li>
            <li>Le chemin par défaut de l'installation (ex: <code>\Python\Python39\Lib</code>).</li>
        </ol>

        <div class="bg-yellow-50 p-4 rounded-lg border border-yellow-100">
            <h5 class="font-bold text-yellow-900 mb-2">Modifier le chemin dynamiquement</h5>
            <p class="text-yellow-800 mb-2">Vous pouvez ajouter un dossier temporairement via <code>sys.path</code> :</p>
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">sys</span>
<span class="py-variable">sys</span>.<span class="py-variable">path</span>.<span class="py-function">insert</span>(0, <span class="py-string">"E:/mon_dossier_perso"</span>)
<span class="py-builtin">print</span>(<span class="py-variable">sys</span>.<span class="py-variable">path</span>)</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>

    <!-- 4. Packages et Arborescence -->
    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">4. Packages et Arborescence</h4>
        <p class="text-gray-700 mb-4">
            Un <strong>package</strong> est un dossier contenant des modules et un fichier spécial <code>__init__.py</code> (obligatoire avant Python 3.3).
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h5 class="font-semibold text-gray-800 mb-2">Structure typique</h5>
                <pre class="bg-gray-800 text-white p-4 rounded text-sm font-mono">
mesmodules/
├── __init__.py
├── monfichier.py
├── part1/
│   ├── __init__.py
│   └── monfichier2.py
└── part2/
    ├── __init__.py
    └── monfichier3.py</pre>
            </div>
            <div>
                <h5 class="font-semibold text-gray-800 mb-2">Types d'importation</h5>
                
                <!-- Import Absolu -->
                <div class="mb-4">
                    <h6 class="font-bold text-indigo-600 text-sm mb-1">1. Importation Absolue</h6>
                    <p class="text-sm text-gray-600 mb-1">Chemin complet depuis la racine du projet.</p>
                    <div class="code-block-wrapper">
                        <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">mesmodules</span>.<span class="py-variable">part1</span>.<span class="py-variable">monfichier2</span>
<span class="py-keyword">from</span> <span class="py-variable">mesmodules</span>.<span class="py-variable">part1</span> <span class="py-keyword">import</span> <span class="py-variable">monfichier2</span></code></pre>
                        <button class="copy-btn">Copier</button>
                    </div>
                </div>

                <!-- Import Relatif -->
                <div>
                    <h6 class="font-bold text-purple-600 text-sm mb-1">2. Importation Relative</h6>
                    <p class="text-sm text-gray-600 mb-1">Par rapport au fichier courant (nécessite d'être dans un package).</p>
                    <ul class="list-disc ml-4 text-sm text-gray-600 mb-1">
                        <li><code>.</code> : Dossier courant</li>
                        <li><code>..</code> : Dossier parent</li>
                    </ul>
                    <div class="code-block-wrapper">
                        <pre class="code-block"><code class="language-python"><span class="py-comment"># Depuis part1/monfichier2.py</span>
<span class="py-keyword">from</span> . <span class="py-keyword">import</span> <span class="py-variable">autre_fichier</span>      <span class="py-comment"># Même dossier</span>
<span class="py-keyword">from</span> ..<span class="py-variable">part2</span> <span class="py-keyword">import</span> <span class="py-variable">monfichier3</span>  <span class="py-comment"># Autre dossier</span></code></pre>
                        <button class="copy-btn">Copier</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Exercice -->
    <div class="mt-6 bg-purple-50 p-6 rounded-lg border border-purple-100">
        <h4 class="text-lg font-semibold text-purple-900 mb-2">Exercice : Créer et Importer</h4>
        <p class="text-purple-800 mb-4">
            1. Créez un fichier <code>outils.py</code> avec une fonction <code>dire_bonjour(nom)</code>.<br>
            2. Créez un fichier <code>main.py</code> dans le même dossier.<br>
            3. Importez <code>outils</code> dans <code>main.py</code> avec l'alias <code>tl</code> et appelez la fonction.
        </p>
        <button class="solution-toggle">Voir la solution</button>
        <div class="solution-content hidden">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-comment"># Fichier outils.py</span>
<span class="py-keyword">def</span> <span class="py-function">dire_bonjour</span>(<span class="py-variable">nom</span>):
    <span class="py-builtin">print</span>(<span class="py-string">f"Bonjour {<span class="py-variable">nom</span>} !"</span>)

<span class="py-comment"># Fichier main.py</span>
<span class="py-keyword">import</span> <span class="py-variable">outils</span> <span class="py-keyword">as</span> <span class="py-variable">tl</span>

<span class="py-variable">tl</span>.<span class="py-function">dire_bonjour</span>(<span class="py-string">"Alice"</span>)</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
</section>

<!-- ========== CHAPITRE 2 : BIBLIOTHÈQUES (PIP) ========== -->
<!-- ========== CHAPITRE 2 : BIBLIOTHÈQUES (PIP) ========== -->
<section id="bibliotheques" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 2 : Manipulation des Bibliothèques (Pip)</h3>
    
    <!-- 1. Définition et Bibliothèque Standard -->
    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">1. Qu'est-ce qu'une bibliothèque ?</h4>
        <p class="text-gray-700 mb-4 leading-relaxed">
            Une bibliothèque est un ensemble de modules (classes, fonctions, constantes) qui étend les capacités de Python (calcul, graphisme, réseau, etc.).
            La force de Python réside dans son immense écosystème, notamment via <strong>PyPI</strong> (Python Package Index).
        </p>
        
        <div class="bg-blue-50 p-4 rounded-lg border border-blue-100 mb-6">
            <h5 class="font-bold text-blue-900 mb-2">La Bibliothèque Standard</h5>
            <p class="text-blue-800 mb-3">Python est livré "piles incluses" avec de nombreux modules natifs :</p>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-sm text-blue-900">
                <div class="bg-white p-2 rounded shadow-sm">📅 Date & Heure</div>
                <div class="bg-white p-2 rounded shadow-sm">🖥️ Système (OS)</div>
                <div class="bg-white p-2 rounded shadow-sm">🔢 Mathématiques</div>
                <div class="bg-white p-2 rounded shadow-sm">🌐 Internet (HTTP)</div>
                <div class="bg-white p-2 rounded shadow-sm">📁 Fichiers</div>
                <div class="bg-white p-2 rounded shadow-sm">🎨 Interface Graphique</div>
            </div>
        </div>
    </div>

    <!-- 2. Gestionnaire PIP -->
    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. PIP (Python Installer Package)</h4>
        <p class="text-gray-700 mb-4">
            <strong>pip</strong> est l'outil standard pour installer et gérer des paquets externes. Il est inclus par défaut depuis Python 3.4.
        </p>

        <div class="bg-gray-800 text-white p-4 rounded-lg mb-6 font-mono text-sm">
            <div class="mb-2"><span class="text-green-400">$</span> pip --version <span class="text-gray-500"># Vérifier l'installation</span></div>
            <div class="mb-2"><span class="text-green-400">$</span> pip help <span class="text-gray-500"># Afficher l'aide</span></div>
            <div class="mb-2"><span class="text-green-400">$</span> pip list <span class="text-gray-500"># Lister les paquets installés</span></div>
        </div>

        <h5 class="font-semibold text-gray-800 mb-3">Commandes d'installation courantes</h5>
        <div class="overflow-x-auto bg-white rounded-lg shadow-sm border">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Action</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Commande</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-700">Installer un paquet</td>
                        <td class="px-6 py-4 font-mono text-sm text-indigo-600">pip install numpy</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-700">Version spécifique</td>
                        <td class="px-6 py-4 font-mono text-sm text-indigo-600">pip install pandas==1.0.4</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-700">Version minimale</td>
                        <td class="px-6 py-4 font-mono text-sm text-indigo-600">pip install "requests>=2.0"</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-700">Mettre à jour</td>
                        <td class="px-6 py-4 font-mono text-sm text-indigo-600">pip install --upgrade numpy</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-700">Désinstaller</td>
                        <td class="px-6 py-4 font-mono text-sm text-indigo-600">pip uninstall numpy</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- 3. Création de Bibliothèque (setup.py) -->
    <div class="mb-8">
    <!-- 3. Création de Bibliothèque (setup.py) -->
    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">3. Créer sa propre bibliothèque</h4>
        
        <!-- Pourquoi faire ça ? -->
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100 mb-6">
            <h5 class="font-bold text-indigo-900 mb-2">Pourquoi créer une bibliothèque au lieu de copier-coller ?</h5>
            <p class="text-indigo-800 mb-4 leading-relaxed">
                Imaginez que vous avez une fonction géniale <code>calcul_impots()</code>. Si vous copiez ce fichier dans 10 projets différents :
            </p>
            <ul class="list-disc ml-6 text-indigo-800 space-y-2 mb-4">
                <li>❌ <strong>Maintenance cauchemardesque</strong> : Si vous trouvez un bug, vous devez le corriger dans 10 endroits différents.</li>
                <li>❌ <strong>Incohérence</strong> : Certains projets auront la version v1, d'autres la v2.</li>
                <li>❌ <strong>Perte de temps</strong> : Copier manuellement des fichiers est source d'erreurs.</li>
            </ul>
            <p class="text-indigo-800 font-semibold">
                ✅ La solution : Créer un package installable. Vous corrigez le bug une seule fois, vous augmentez la version, et tous vos projets en profitent via une simple mise à jour <code>pip install --upgrade</code>.
            </p>
        </div>

        <h5 class="font-bold text-gray-800 mb-4">Exemple Concret : Bibliothèque "MaSuperLib"</h5>
        <p class="text-gray-700 mb-4">
            Créons une bibliothèque composée de 3 fichiers Python pour bien comprendre l'organisation.
        </p>

        <!-- Arborescence -->
        <pre class="bg-gray-800 text-white p-4 rounded-lg mb-6 font-mono text-sm overflow-x-auto whitespace-pre">
mon_projet/
├── setup.py                <span class="text-gray-400"># Script d'installation</span>
└── ma_super_lib/           <span class="text-gray-400"># Dossier du package</span>
    ├── __init__.py         <span class="text-gray-400"># Point d'entrée (expose les fonctions)</span>
    ├── operations.py       <span class="text-gray-400"># Module de calcul</span>
    └── utils.py            <span class="text-gray-400"># Module utilitaire</span></pre>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
            <!-- Fichier 1 : operations.py -->
            <div class="bg-white p-4 rounded border shadow-sm">
                <h6 class="font-bold text-gray-800 mb-2">1. ma_super_lib/operations.py</h6>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">def</span> <span class="py-function">additionner</span>(<span class="py-variable">a</span>, <span class="py-variable">b</span>):
    <span class="py-string">"""Retourne la somme"""</span>
    <span class="py-keyword">return</span> <span class="py-variable">a</span> + <span class="py-variable">b</span>

<span class="py-keyword">def</span> <span class="py-function">multiplier</span>(<span class="py-variable">a</span>, <span class="py-variable">b</span>):
    <span class="py-string">"""Retourne le produit"""</span>
    <span class="py-keyword">return</span> <span class="py-variable">a</span> * <span class="py-variable">b</span></code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>

            <!-- Fichier 2 : utils.py -->
            <div class="bg-white p-4 rounded border shadow-sm">
                <h6 class="font-bold text-gray-800 mb-2">2. ma_super_lib/utils.py</h6>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">def</span> <span class="py-function">formater_texte</span>(<span class="py-variable">texte</span>):
    <span class="py-string">"""Met en majuscules"""</span>
    <span class="py-keyword">return</span> <span class="py-variable">texte</span>.<span class="py-function">upper</span>() + <span class="py-string">" !!!"</span></code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>

            <!-- Fichier 3 : __init__.py -->
            <div class="bg-white p-4 rounded border shadow-sm">
                <h6 class="font-bold text-gray-800 mb-2">3. ma_super_lib/__init__.py</h6>
                <p class="text-xs text-gray-500 mb-2">Ce fichier expose les fonctions pour simplifier l'import.</p>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> .<span class="py-variable">operations</span> <span class="py-keyword">import</span> <span class="py-variable">additionner</span>
<span class="py-keyword">from</span> .<span class="py-variable">utils</span> <span class="py-keyword">import</span> <span class="py-variable">formater_texte</span>

<span class="py-comment"># On choisit de ne pas exposer 'multiplier' par défaut</span></code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>

            <!-- Fichier 4 : setup.py -->
            <div class="bg-white p-4 rounded border shadow-sm">
                <h6 class="font-bold text-gray-800 mb-2">4. setup.py (Racine)</h6>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">setuptools</span> <span class="py-keyword">import</span> <span class="py-variable">setup</span>, <span class="py-variable">find_packages</span>

<span class="py-function">setup</span>(
    <span class="py-variable">name</span>=<span class="py-string">"MaSuperLib"</span>,
    <span class="py-variable">version</span>=<span class="py-string">"1.0.0"</span>,
    <span class="py-variable">packages</span>=<span class="py-function">find_packages</span>(),
    <span class="py-variable">author</span>=<span class="py-string">"Votre Nom"</span>,
    <span class="py-variable">description</span>=<span class="py-string">"Une lib de démo"</span>
)</code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
        </div>

        <div class="bg-yellow-50 p-6 rounded-lg border border-yellow-100">
            <h5 class="font-bold text-yellow-900 mb-2">Installation et Utilisation</h5>
            <p class="text-yellow-800 mb-3">
                Une fois ces fichiers créés, installez votre bibliothèque localement :
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <p class="text-sm font-bold text-yellow-900 mb-1">Installation :</p>
                    <div class="code-block-wrapper mb-2">
                        <pre class="code-block"><code class="language-bash">pip install .</code></pre>
                        <button class="copy-btn">Copier</button>
                    </div>
                    <p class="text-xs text-yellow-700">Ou <code>py setup.py install</code></p>
                </div>
                <div>
                    <p class="text-sm font-bold text-yellow-900 mb-1">Utilisation (n'importe où) :</p>
                    <div class="code-block-wrapper">
                        <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">ma_super_lib</span> <span class="py-keyword">as</span> <span class="py-variable">msl</span>

<span class="py-builtin">print</span>(<span class="py-variable">msl</span>.<span class="py-function">additionner</span>(5, 10))
<span class="py-comment"># Affiche : 15</span></code></pre>
                        <button class="copy-btn">Copier</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 4. Importation Avancée -->
    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">4. Techniques d'importation</h4>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-4 rounded border">
                <h6 class="font-bold text-indigo-600 mb-2">Importer une fonction spécifique</h6>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">random</span> <span class="py-keyword">import</span> <span class="py-variable">choice</span>

<span class="py-comment"># Utilisation directe</span>
<span class="py-builtin">print</span>(<span class="py-function">choice</span>(<span class="py-string">'ABC'</span>))</code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>

            <div class="bg-white p-4 rounded border">
                <h6 class="font-bold text-indigo-600 mb-2">Importer tout (Wildcard)</h6>
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">random</span> <span class="py-keyword">import</span> *

<span class="py-comment"># Toutes les fonctions sont dispos</span>
<span class="py-builtin">print</span>(<span class="py-function">randint</span>(1, 10))</code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== CHAPITRE 3 : INTRO DATA SCIENCE ========== -->
<!-- ========== CHAPITRE 3 : INTRO DATA SCIENCE ========== -->
<section id="intro-ds" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 3 : Panorama des Bibliothèques Data Science</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Python est le langage le plus utilisé dans la science de données. Il est possible de se contenter des fonctionnalités de ce langage ou bien d'utiliser un ensemble de bibliothèques externes open source qui facilitent la manipulation des données.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Calcul Scientifique -->
        <div class="bg-white p-6 rounded-lg shadow-sm border hover:shadow-md transition-shadow">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-3">🧮</span>
                <h4 class="text-lg font-bold text-gray-900">Calcul Scientifique</h4>
            </div>
            <ul class="list-disc ml-6 text-gray-600">
                <li><strong>NumPy</strong> : Calcul matriciel performant.</li>
                <li><strong>SciPy</strong> : Algorithmes scientifiques avancés.</li>
            </ul>
        </div>

        <!-- Manipulation des Données -->
        <div class="bg-white p-6 rounded-lg shadow-sm border hover:shadow-md transition-shadow">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-3">🐼</span>
                <h4 class="text-lg font-bold text-gray-900">Manipulation des Données</h4>
            </div>
            <ul class="list-disc ml-6 text-gray-600">
                <li><strong>Pandas</strong> : Manipulation de tableaux (DataFrames).</li>
            </ul>
        </div>

        <!-- Visualisation -->
        <div class="bg-white p-6 rounded-lg shadow-sm border hover:shadow-md transition-shadow">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-3">📊</span>
                <h4 class="text-lg font-bold text-gray-900">Visualisation</h4>
            </div>
            <ul class="list-disc ml-6 text-gray-600">
                <li><strong>Matplotlib</strong> : Graphiques de base.</li>
                <li><strong>Seaborn</strong> : Visualisation statistique esthétique.</li>
            </ul>
        </div>

        <!-- Big Data -->
        <div class="bg-white p-6 rounded-lg shadow-sm border hover:shadow-md transition-shadow">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-3">🐘</span>
                <h4 class="text-lg font-bold text-gray-900">Big Data</h4>
            </div>
            <ul class="list-disc ml-6 text-gray-600">
                <li><strong>Spark</strong> : Traitement distribué rapide.</li>
                <li><strong>Hadoop</strong> : Stockage et traitement distribué.</li>
            </ul>
        </div>

        <!-- Bases de Données -->
        <div class="bg-white p-6 rounded-lg shadow-sm border hover:shadow-md transition-shadow">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-3">🗄️</span>
                <h4 class="text-lg font-bold text-gray-900">Bases de Données</h4>
            </div>
            <ul class="list-disc ml-6 text-gray-600">
                <li><strong>MongoDB</strong> : Base NoSQL orientée documents.</li>
                <li><strong>SQLite</strong> : Base SQL légère et intégrée.</li>
                <li><strong>PostgreSQL</strong> : SGBD relationnel robuste.</li>
            </ul>
        </div>

        <!-- Web Scraping -->
        <div class="bg-white p-6 rounded-lg shadow-sm border hover:shadow-md transition-shadow">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-3">🕷️</span>
                <h4 class="text-lg font-bold text-gray-900">Web Scraping</h4>
            </div>
            <ul class="list-disc ml-6 text-gray-600">
                <li><strong>Scrapy</strong> : Framework complet d'extraction.</li>
                <li><strong>Beautiful Soup</strong> : Parsing HTML/XML simple.</li>
            </ul>
        </div>

        <!-- Apprentissage Automatique -->
        <div class="bg-white p-6 rounded-lg shadow-sm border hover:shadow-md transition-shadow md:col-span-2 lg:col-span-3">
            <div class="flex items-center mb-3">
                <span class="text-2xl mr-3">🤖</span>
                <h4 class="text-lg font-bold text-gray-900">Apprentissage Automatique (Machine Learning)</h4>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <ul class="list-disc ml-6 text-gray-600">
                    <li><strong>Scikit-learn</strong> : Algorithmes classiques (régression, classification).</li>
                    <li><strong>Keras</strong> : Interface haut niveau pour réseaux de neurones.</li>
                </ul>
                <ul class="list-disc ml-6 text-gray-600">
                    <li><strong>TensorFlow</strong> : Plateforme complète de ML (Google).</li>
                    <li><strong>PyTorch</strong> : Framework flexible de Deep Learning (Facebook).</li>
                </ul>
            </div>
        </div>
    </div>
</section>

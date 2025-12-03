<!-- =================================================================== -->
<!-- PARTIE DEPLOIEMENT : PACKAGING & DISTRIBUTION -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6">Déploiement et Packaging</h2>

<!-- ========== DEFINITIONS ========== -->
<section id="deployment-defs" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Définitions Fondamentales</h3>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Déploiement -->
        <div class="bg-blue-50 p-6 rounded-lg border border-blue-100">
            <div class="flex items-center mb-3">
                <span class="text-3xl mr-3">🚀</span>
                <h4 class="text-xl font-bold text-blue-900">Déploiement</h4>
            </div>
            <p class="text-blue-800 leading-relaxed">
                Le déploiement d'une application se définit comme la <strong>promotion des composants</strong> d'une application depuis un environnement vers un autre (ex: du développement vers la production).
            </p>
        </div>

        <!-- Packaging -->
        <div class="bg-green-50 p-6 rounded-lg border border-green-100">
            <div class="flex items-center mb-3">
                <span class="text-3xl mr-3">📦</span>
                <h4 class="text-xl font-bold text-green-900">Packaging</h4>
            </div>
            <p class="text-green-800 leading-relaxed">
                Le packaging est l'étape cruciale de <strong>préparation</strong>. Il consiste à regrouper dans un fichier unique tous les scripts et ressources nécessaires pour que l'installation et le déploiement soient automatisés et reproductibles.
            </p>
        </div>
    </div>
</section>

<!-- ========== PACKAGING PYTHON ========== -->
<section id="python-packaging" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Le Packaging en Python</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        En Python, le packaging permet de partager et réutiliser du code proprement, sans duplication. C'est la différence entre "j'ai un script sur mon ordi" et "j'ai une bibliothèque installable par tout le monde".
    </p>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Les outils de l'écosystème</h4>
        <ul class="list-disc ml-6 text-gray-700 space-y-2">
            <li><strong>distutils</strong> : L'outil historique (inclus dans la bibliothèque standard), mais limité.</li>
            <li><strong>setuptools</strong> : L'outil standard actuel, plus puissant, recommandé par la PyPA (Python Packaging Authority).</li>
            <li><strong>wheel</strong> : Le format de distribution binaire moderne (plus rapide que les anciens "eggs").</li>
        </ul>
    </div>
</section>

<!-- ========== SETUPTOOLS ========== -->
<section id="setuptools" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Setuptools</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Nous allons voir comment créer un <strong>vrai package Python installable</strong>, comme les bibliothèques que vous installez avec <code>pip</code>.
    </p>

    <!-- 1. Qu'est-ce que setuptools ? -->
    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mb-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">1 — Qu’est-ce que setuptools ?</h4>
        <p class="text-gray-700">
            <strong>setuptools</strong> est le standard pour packager votre code Python. Il sert à :
        </p>
        <ul class="list-disc ml-6 text-gray-700 space-y-1">
            <li>Lui donner un <strong>nom</strong> et une <strong>version</strong>.</li>
            <li>Déclarer ses <strong>dépendances</strong>.</li>
            <li>Le rendre installable avec <code>pip install .</code></li>
        </ul>
    </div>

    <!-- 2. Exemple concret -->
    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mb-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">2 — Exemple concret : Package "calculatrice"</h4>
        <p class="text-gray-700">
            Nous allons créer un package nommé <code>calculatrice</code> contenant une fonction <code>addition</code>.
        </p>
        
        <h5 class="font-semibold text-gray-800 mt-4">👉 Structure du projet</h5>
        <div class="bg-gray-50 p-4 rounded border border-gray-200 font-mono text-sm">
<pre>
calculatrice/
├── pyproject.toml
├── setup.py
├── LICENSE
├── README.md
└── src/
    └── calculatrice/
        ├── __init__.py
        └── operations.py
</pre>

    </div>
    </div>

    <!-- 3. Contenu des fichiers -->
    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mb-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">3 — Contenu des fichiers</h4>

        <h5 class="font-semibold text-gray-800 mt-2">setup.py (Le cœur de setuptools)</h5>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">setuptools</span> <span class="py-keyword">import</span> <span class="py-variable">setup</span>, <span class="py-variable">find_packages</span>

<span class="py-function">setup</span>(
    <span class="py-variable">name</span>=<span class="py-string">"calculatrice"</span>,
    <span class="py-variable">version</span>=<span class="py-string">"1.0.0"</span>,
    <span class="py-variable">packages</span>=<span class="py-function">find_packages</span>(<span class="py-variable">where</span>=<span class="py-string">"src"</span>),
    <span class="py-variable">package_dir</span>={<span class="py-string">""</span>: <span class="py-string">"src"</span>},
    <span class="py-variable">description</span>=<span class="py-string">"Un mini package de calcul"</span>,
)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>

        <h5 class="font-semibold text-gray-800 mt-4">src/calculatrice/__init__.py</h5>
        <p class="text-gray-600 text-sm">Permet d'exposer les fonctions directement.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> .<span class="py-variable">operations</span> <span class="py-keyword">import</span> <span class="py-variable">addition</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>

        <h5 class="font-semibold text-gray-800 mt-4">src/calculatrice/operations.py</h5>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">def</span> <span class="py-function">addition</span>(<span class="py-variable">a</span>, <span class="py-variable">b</span>):
    <span class="py-keyword">return</span> <span class="py-variable">a</span> + <span class="py-variable">b</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>

        <h5 class="font-semibold text-gray-800 mt-4">pyproject.toml (Configuration de build)</h5>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-toml">[build-system]
requires = ["setuptools>=42", "wheel"]
build-backend = "setuptools.build_meta"</code></pre>
            <button class="copy-btn">Copier</button>
        </div>

        <h5 class="font-semibold text-gray-800 mt-4">LICENSE</h5>
        <div class="bg-gray-100 p-3 rounded text-sm text-gray-700">
            MIT License (ou autre licence de votre choix)
        </div>

        <h5 class="font-semibold text-gray-800 mt-4">README.md</h5>
        <div class="bg-gray-100 p-3 rounded text-sm text-gray-700">
            Petit package de calcul.
        </div>
    </div>

    <!-- 4. Génération du package -->
    <div class="bg-yellow-50 p-6 rounded-lg border border-yellow-100 mb-6">
        <h4 class="text-lg font-semibold text-yellow-900 mb-2">4 — Génération du package (Distribution)</h4>
        <p class="text-yellow-800 mb-2">
            Pour générer les archives de distribution (source et wheel) que vous pourrez partager ou uploader sur PyPI :
        </p>
        <p class="text-yellow-800 mb-2">1. Installez l'outil de build :</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-bash">pip install build</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
        <p class="text-yellow-800 mt-4 mb-2">2. Lancez la construction :</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-bash">py -m build</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
        <p class="text-yellow-800 mt-2 text-sm">
            Cela va créer un dossier <code>dist/</code> contenant vos fichiers <code>.whl</code> (Wheel) et <code>.tar.gz</code> (Source).
        </p>
    </div>

    <!-- 5. Partage manuel -->
    <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100 mb-6">
        <h4 class="text-lg font-semibold text-indigo-900 mb-2">5 — Partager et installer manuellement (Sans Internet)</h4>
        <p class="text-indigo-800 mb-4">
            Vous n'êtes pas obligé de mettre votre package sur Internet (PyPI) pour le partager. Vous pouvez simplement envoyer le fichier généré (<code>.whl</code>) à un collègue par clé USB, mail ou dossier partagé.
        </p>
        
        <h5 class="font-semibold text-indigo-900 mt-2">Comment votre collègue l'installe ?</h5>
        <p class="text-indigo-800 mb-2">
            Il doit récupérer le fichier <code>.whl</code> (qui se trouve dans votre dossier <code>dist/</code>) et lancer :
        </p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-bash">pip install calculatrice-1.0.0-py3-none-any.whl</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
        <p class="text-indigo-800 mt-2 text-sm italic">
            Note : Il doit être dans le dossier où se trouve le fichier .whl, ou donner le chemin complet.
        </p>
    </div>

    <!-- 6. Installation dev -->
    <div class="bg-blue-50 p-6 rounded-lg border border-blue-100 mb-6">
        <h4 class="text-lg font-semibold text-blue-900 mb-2">6 — Installation en mode développement (Pour vous)</h4>
        <p class="text-blue-800 mb-2">
            Ouvrez un terminal dans le dossier où se trouve <code>setup.py</code> et lancez :
        </p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-bash">pip install .</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
        <p class="text-blue-800 mt-2 text-sm">
            <em>Le point <code>.</code> signifie "installe le package courant".</em>
        </p>
        
    </div>

    <!-- 7. Utilisation -->
    <div class="bg-green-50 p-6 rounded-lg border border-green-100">
        <h4 class="text-lg font-semibold text-green-900 mb-2">7 — Utilisation du package</h4>
        <p class="text-green-800 mb-2">
            Maintenant, vous pouvez aller n’importe où sur votre machine et faire :
        </p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">calculatrice</span> <span class="py-keyword">import</span> <span class="py-variable">addition</span>

<span class="py-builtin">print</span>(<span class="py-variable">addition</span>(5, 7))
<span class="py-comment"># Résultat : 12</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
        <p class="text-green-800 mt-4 font-semibold">
            🎉 Bravo ! Vous venez de créer votre propre package Python officiel, reconnu par pip et importable comme n’importe quelle librairie.
        </p>
    </div>
</section>

<!-- ========== TESTPYPI ========== -->
<section id="testpypi" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Publication sur TestPyPI</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Avant de publier votre package sur le "vrai" PyPI (et qu'il soit visible par le monde entier), il est fortement recommandé de tester la procédure sur <strong>TestPyPI</strong>. C'est un environnement "bac à sable" identique à PyPI, mais dédié aux tests.
    </p>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mb-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">1. Création de compte</h4>
        <ul class="list-disc ml-6 text-gray-700 space-y-2">
            <li>Allez sur <a href="https://test.pypi.org/account/register/" target="_blank" class="text-blue-600 hover:underline">test.pypi.org</a> et créez un compte.</li>
            <li><strong>Important</strong> : Vous devez valider votre adresse email via le lien reçu.</li>
            <li>Notez votre nom d'utilisateur et votre mot de passe (ou créez un token API dans les paramètres du compte).</li>
        </ul>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mb-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">2. Installation des outils d'envoi</h4>
        <p class="text-gray-700">
            Nous allons utiliser <strong>Twine</strong>, l'outil officiel pour uploader des packages de manière sécurisée.
        </p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-bash">pip install twine</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mb-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">3. Upload du package</h4>
        <p class="text-gray-700">
            Une fois votre package généré (vous devez avoir le dossier <code>dist/</code> avec vos fichiers <code>.whl</code> et <code>.tar.gz</code>), lancez la commande suivante :
        </p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-bash">twine upload --repository-url https://test.pypi.org/legacy/ dist/*</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
        <p class="text-gray-700 mt-2">
            Entrez votre nom d'utilisateur et votre mot de passe (ou <code>__token__</code> comme utilisateur et votre token API comme mot de passe).
        </p>
    </div>

    <div class="bg-green-50 p-6 rounded-lg border border-green-100 mb-6">
        <h4 class="text-lg font-semibold text-green-900 mb-2">4. Vérification et Installation</h4>
        <p class="text-green-800 mb-4">
            Si tout s'est bien passé, Twine vous donnera un lien vers la page de votre projet sur TestPyPI (ex: <code>https://test.pypi.org/project/calculatrice/</code>).
        </p>
        <p class="text-green-800 mb-2">
            Pour tester l'installation comme un utilisateur lambda, utilisez cette commande spéciale (car par défaut pip cherche sur le vrai PyPI) :
        </p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-bash">pip install --index-url https://test.pypi.org/simple/ --no-deps calculatrice</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
        <p class="text-green-800 mt-2 text-sm italic">
            L'option <code>--no-deps</code> est souvent nécessaire sur TestPyPI car les dépendances (comme pandas ou numpy) n'y sont pas forcément présentes (elles sont sur le vrai PyPI).
        </p>
    </div>
</section>

<!-- ========== PYPI ========== -->
<section id="pypi" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Publication officielle sur PyPI</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        <strong>PyPI</strong> (Python Package Index) est le dépôt officiel. Une fois votre package ici, n'importe qui dans le monde pourra l'installer avec un simple <code>pip install votre-package</code>.
    </p>

    <div class="bg-red-50 p-6 rounded-lg border border-red-100 mb-6">
        <div class="flex items-center mb-3">
            <span class="text-2xl mr-3">⚠️</span>
            <h4 class="text-lg font-bold text-red-900">Attention : C'est définitif !</h4>
        </div>
        <p class="text-red-800">
            Contrairement à TestPyPI, <strong>vous ne pouvez pas écraser une version existante</strong>. Si vous avez publié la version <code>1.0.0</code> et que vous trouvez un bug 5 minutes après, vous <strong>devez</strong> publier une version <code>1.0.1</code>. On ne peut pas "supprimer et remplacer" un fichier sur PyPI.
        </p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mb-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">1. Préparer une belle page PyPI</h4>
        <p class="text-gray-700">
            Pour que votre page PyPI soit accueillante, assurez-vous que votre <code>setup.py</code> utilise votre <code>README.md</code> comme description longue.
        </p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-comment"># Dans setup.py</span>
<span class="py-keyword">with</span> <span class="py-builtin">open</span>(<span class="py-string">"README.md"</span>, <span class="py-string">"r"</span>, <span class="py-variable">encoding</span>=<span class="py-string">"utf-8"</span>) <span class="py-keyword">as</span> <span class="py-variable">fh</span>:
    <span class="py-variable">long_description</span> = <span class="py-variable">fh</span>.<span class="py-function">read</span>()

<span class="py-function">setup</span>(
    <span class="py-comment"># ...</span>
    <span class="py-variable">long_description</span>=<span class="py-variable">long_description</span>,
    <span class="py-variable">long_description_content_type</span>=<span class="py-string">"text/markdown"</span>,
    <span class="py-comment"># ...</span>
)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mb-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">2. Publication (La vraie !)</h4>
        <ol class="list-decimal ml-6 text-gray-700 space-y-3">
            <li>Créez un compte sur <a href="https://pypi.org/account/register/" target="_blank" class="text-blue-600 hover:underline">pypi.org</a> (différent de TestPyPI).</li>
            <li>Activez l'authentification à deux facteurs (2FA), c'est désormais obligatoire.</li>
            <li>Créez un <strong>API Token</strong> dans les paramètres de votre compte.</li>
            <li>Lancez l'upload (sans spécifier d'URL cette fois, Twine utilise PyPI par défaut) :</li>
        </ol>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-bash">twine upload dist/*</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="bg-blue-50 p-6 rounded-lg border border-blue-100 mb-6">
        <h4 class="text-lg font-semibold text-blue-900 mb-2">3. Semantic Versioning (SemVer)</h4>
        <p class="text-blue-800 mb-2">
            Pour gérer vos mises à jour, suivez la convention <strong>MAJOR.MINOR.PATCH</strong> (ex: 1.0.0) :
        </p>
        <ul class="list-disc ml-6 text-blue-800 space-y-1">
            <li><strong>MAJOR</strong> (1.x.x) : Changements incompatibles (Breaking changes).</li>
            <li><strong>MINOR</strong> (x.1.x) : Nouvelles fonctionnalités rétro-compatibles.</li>
            <li><strong>PATCH</strong> (x.x.1) : Corrections de bugs rétro-compatibles.</li>
        </ul>
    </div>

    <!-- Exercice -->
    <div class="mt-6 bg-purple-50 p-6 rounded-lg border border-purple-100">
        <h4 class="text-lg font-semibold text-purple-900 mb-2">Exercice : Comprendre les versions</h4>
        <p class="text-purple-800 mb-4">
            Si vous définissez votre dépendance comme <code>"requests>=2.0.0,<3.0.0"</code> dans votre setup.py :
            <br>1. Est-ce que la version 2.5.0 sera acceptée ?
            <br>2. Est-ce que la version 3.0.1 sera acceptée ?
        </p>
        <button class="solution-toggle">Voir la solution</button>
        <div class="solution-content hidden">
            <p class="text-purple-900">
                1. <strong>Oui</strong>, car 2.5.0 est >= 2.0.0 et < 3.0.0.
                <br>2. <strong>Non</strong>, car elle est >= 3.0.0.
                <br><em>C'est une bonne pratique pour éviter que votre code ne casse si la librairie change radicalement (version 3).</em>
            </p>
        </div>
    </div>
</section>

<!-- ========== PYINSTALLER ========== -->
<section id="pyinstaller" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">PyInstaller : Exécutables autonomes</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        <strong>PyInstaller</strong> est un outil qui convertit (gèle) des applications Python en exécutables autonomes (<code>.exe</code> sous Windows, binaires sous Linux/Mac).
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div class="bg-blue-50 p-6 rounded-lg border border-blue-100">
            <h4 class="text-lg font-bold text-blue-900 mb-2">Utilité principale</h4>
            <p class="text-blue-800">
                Permettre à des utilisateurs finaux de lancer votre application <strong>sans avoir besoin d'installer Python</strong> ni aucune bibliothèque sur leur machine. Tout est inclus.
            </p>
        </div>
        <div class="bg-green-50 p-6 rounded-lg border border-green-100">
            <h4 class="text-lg font-bold text-green-900 mb-2">Comment ça marche ?</h4>
            <p class="text-green-800">
                PyInstaller analyse votre code, détecte toutes les dépendances (pandas, numpy, etc.), et les regroupe avec un interpréteur Python minimal dans un dossier ou un fichier unique.
            </p>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mb-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">1. Installation</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-bash">pip install pyinstaller</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mb-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">2. Utilisation basique</h4>
        <p class="text-gray-700">
            Placez-vous dans le dossier de votre script principal (ex: <code>mon_app.py</code>) et lancez :
        </p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-bash">pyinstaller mon_app.py</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
        <p class="text-gray-700 mt-2">
            Cela va créer plusieurs dossiers (<code>build/</code>, <code>dist/</code>) et un fichier <code>.spec</code>.
        </p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mb-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">3. Options courantes</h4>
        <ul class="list-disc ml-6 text-gray-700 space-y-2">
            <li><code>--onefile</code> : Crée un <strong>seul fichier exécutable</strong> (au lieu d'un dossier). C'est l'option la plus populaire.</li>
            <li><code>--noconsole</code> (ou <code>-w</code>) : Pour les interfaces graphiques (Tkinter, PyQt). Masque la fenêtre noire de terminal au lancement.</li>
            <li><code>--name "MonApp"</code> : Donne un nom spécifique à l'exécutable.</li>
        </ul>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-bash">pyinstaller --onefile --noconsole mon_app.py</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="bg-yellow-50 p-6 rounded-lg border border-yellow-100 mb-6">
        <h4 class="text-lg font-semibold text-yellow-900 mb-2">4. Exploiter le résultat</h4>
        <p class="text-yellow-800 mb-2">
            Une fois la compilation terminée, tout se trouve dans le dossier <strong><code>dist/</code></strong>.
        </p>
        <ul class="list-disc ml-6 text-yellow-800 space-y-1">
            <li>Si vous n'avez pas mis <code>--onefile</code> : Vous aurez un dossier <code>dist/mon_app/</code> contenant l'exécutable et plein de fichiers .dll/.pyd. Vous devez distribuer <strong>tout le dossier</strong>.</li>
            <li>Si vous avez mis <code>--onefile</code> : Vous aurez juste un fichier <code>dist/mon_app.exe</code>. C'est ce fichier que vous pouvez envoyer à vos utilisateurs.</li>
        </ul>
    </div>

    <!-- Exercice -->
    <div class="mt-6 bg-purple-50 p-6 rounded-lg border border-purple-100">
        <h4 class="text-lg font-semibold text-purple-900 mb-2">Exercice : Créer un exécutable unique</h4>
        <p class="text-purple-800 mb-4">
            Vous avez un script <code>analyse.py</code>. Quelle commande lancez-vous pour obtenir un seul fichier <code>.exe</code> facile à partager ?
        </p>
        <button class="solution-toggle">Voir la solution</button>
        <div class="solution-content hidden">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-bash">pyinstaller --onefile analyse.py</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
</section>

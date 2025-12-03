<!-- =================================================================== -->
<!-- PARTIE DOCUMENTATION : SPHINX -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6">Documentation du Programme</h2>

<!-- ========== DEFINITIONS ========== -->
<section id="doc-defs" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Définitions et Outils</h3>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div class="bg-blue-50 p-6 rounded-lg border border-blue-100">
            <h4 class="text-lg font-bold text-blue-900 mb-2">Documentation Logicielle</h4>
            <p class="text-blue-800 leading-relaxed">
                C'est un texte écrit qui accompagne le logiciel. Elle explique <strong>comment le logiciel fonctionne</strong> et/ou <strong>comment on doit l'employer</strong>. Elle est essentielle pour la maintenance et l'utilisation du code.
            </p>
        </div>

        <div class="bg-green-50 p-6 rounded-lg border border-green-100">
            <h4 class="text-lg font-bold text-green-900 mb-2">Sphinx & ReST</h4>
            <p class="text-green-800 leading-relaxed">
                <strong>Sphinx</strong> est un outil qui génère automatiquement de la documentation (HTML, PDF) à partir de fichiers texte et des commentaires du code. Il utilise le format <strong>ReStructured Text (ReST)</strong>.
            </p>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Installation</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-bash">pip install sphinx</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- ========== PROCESSUS ========== -->
<section id="sphinx-workflow" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Workflow de Création</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Voici les étapes standards pour initialiser la documentation d'un projet :
    </p>

    <ol class="list-decimal ml-6 text-gray-700 space-y-4 mb-6">
        <li>
            <strong>Créer un dossier</strong> pour la documentation (souvent nommé <code>docs</code>) à la racine du projet.
        </li>
        <li>
            <strong>Initialiser Sphinx</strong> en lançant la commande suivante dans ce dossier :
            <div class="code-block-wrapper mt-2">
                <pre class="code-block"><code class="language-bash">sphinx-quickstart</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
            <p class="text-sm text-gray-500 mt-1">Cela va créer les fichiers de configuration de base : <code>conf.py</code> et <code>index.rst</code>.</p>
        </li>
    </ol>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-gray-50 p-4 rounded border">
            <h5 class="font-bold text-gray-800">index.rst</h5>
            <p class="text-sm text-gray-600">Représente la structure (le sommaire) de la documentation.</p>
        </div>
        <div class="bg-gray-50 p-4 rounded border">
            <h5 class="font-bold text-gray-800">conf.py</h5>
            <p class="text-sm text-gray-600">Contient toute la configuration : nom du projet, version, auteur, extensions, etc.</p>
        </div>
    </div>
</section>

<!-- ========== EXEMPLE CONCRET ========== -->
<section id="sphinx-example" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Exemple Concret : Projet "Bonjour"</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Imaginons un projet contenant un module <code>Bonjour.py</code> que nous voulons documenter automatiquement.
    </p>

    <!-- 1. Le Code Source -->
    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mb-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">1. Le Code Source (Bonjour.py)</h4>
        <p class="text-gray-700">Le code doit contenir des <em>docstrings</em> pour être reconnu par Sphinx.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">def</span> <span class="py-function">bonjour</span>(<span class="py-variable">nom</span>):
    <span class="py-string">"""Cette fonction permet d'afficher le message bonjour
    :param nom: chaine de caractères
    :return: un message de bonjour
    :rtype: chaine de caractères
    """</span>
    <span class="py-keyword">return</span> <span class="py-string">'bonjour '</span> + <span class="py-variable">nom</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- 2. Configuration conf.py -->
    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mb-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">2. Configuration (conf.py)</h4>
        <p class="text-gray-700">Il faut dire à Sphinx où trouver le code et activer l'extension <code>autodoc</code>.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">os</span>
<span class="py-keyword">import</span> <span class="py-variable">sys</span>
<span class="py-comment"># Indiquer le chemin vers le code source</span>
<span class="py-variable">sys</span>.<span class="py-variable">path</span>.<span class="py-function">insert</span>(0, <span class="py-variable">os</span>.<span class="py-variable">path</span>.<span class="py-function">abspath</span>(<span class="py-string">'../src'</span>)) 

<span class="py-variable">project</span> = <span class="py-string">'MonProjet'</span>
<span class="py-variable">copyright</span> = <span class="py-string">'2024, Moi'</span>
<span class="py-variable">author</span> = <span class="py-string">'Moi'</span>
<span class="py-variable">release</span> = <span class="py-string">'1.0'</span>

<span class="py-comment"># Activer l'extension autodoc</span>
<span class="py-variable">extensions</span> = [
    <span class="py-string">'sphinx.ext.autodoc'</span>
]</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- 3. Création du fichier RST -->
    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mb-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">3. Création de la page (bnj.rst)</h4>
        <p class="text-gray-700">Créez un fichier <code>bnj.rst</code> qui va automatiquement aspirer la documentation de votre fonction.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-rst">Documentation du module Bonjour
===============================

.. automodule:: Bonjour
   :members:</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- 4. Mise à jour de l'index -->
    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mb-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">4. Mise à jour de index.rst</h4>
        <p class="text-gray-700">Ajoutez votre nouveau fichier <code>bnj.rst</code> au sommaire principal.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-rst">.. toctree::
   :maxdepth: 2
   :caption: Contents:

   bnj.rst</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- 5. Génération -->
    <div class="bg-yellow-50 p-6 rounded-lg border border-yellow-100">
        <h4 class="text-lg font-semibold text-yellow-900 mb-2">5. Génération finale</h4>
        <p class="text-yellow-800 mb-2">
            Dans le dossier <code>docs</code>, lancez la commande magique :
        </p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-bash">.\make html</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
        <p class="text-yellow-800 mt-2">
            Votre documentation magnifique est maintenant disponible dans <code>docs/build/html/index.html</code> ! 🎉
        </p>
    </div>
</section>

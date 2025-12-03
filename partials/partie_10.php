<!-- =================================================================== -->
<!-- PARTIE 7 : BIBLIOTHÈQUES DU TRAITEMENT DE LANGAGE NATUREL (TALN) -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-12">Partie 7 : Bibliothèques du Traitement de Langage Naturel (TALN)</h2>

<p class="text-gray-700 mb-8">
    Le <strong>Traitement de Langage Naturel (TALN)</strong>, ou NLP en anglais, est un sous-domaine de l'intelligence artificielle qui permet aux machines de lire, de comprendre et de générer le langage humain.
</p>

<!-- =================================================================== -->
<!-- CHAPITRE 1 : INTRODUCTION À NLTK -->
<!-- =================================================================== -->
<section id="taln-intro" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 1 : NLTK (Natural Language Toolkit)</h3>
    
    <div class="mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-2">1. Présentation</h4>
        <p class="text-gray-700 mb-4 leading-relaxed">
            <strong>NLTK</strong> est l'une des bibliothèques open source les plus populaires et puissantes en Python pour la recherche et le développement dans le domaine du TALN. C'est un outil d'introduction idéal pour les étudiants.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <div class="bg-blue-50 p-6 rounded-lg border border-blue-100">
            <h5 class="font-bold text-blue-900 mb-3">Utilité</h5>
            <ul class="list-disc ml-6 text-blue-800 space-y-2">
                <li>Fournit des ensembles de données (corpus) prêts à l'emploi.</li>
                <li>Offre des algorithmes pour effectuer des tâches courantes du TALN.</li>
                <li>Facilite l'apprentissage et le prototypage rapide.</li>
            </ul>
        </div>
        <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
            <h5 class="font-bold text-indigo-900 mb-3">Installation</h5>
            <div class="bg-gray-800 text-white p-3 rounded-lg font-mono text-sm mt-2">
                <span class="text-green-400">$</span> pip install nltk
            </div>
        </div>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 2 : SOUS-MODULES ET FONCTIONNALITÉS CLÉS -->
<!-- =================================================================== -->
<section id="taln-modules" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 2 : Sous-modules et Fonctionnalités Clés</h3>
    <p class="text-gray-700 mb-6">
        NLTK est riche en sous-modules couvrant l'ensemble du processus de traitement du langage.
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
                    <td class="px-6 py-3 font-mono text-indigo-600">nltk.tokenize</td>
                    <td class="px-6 py-3">Segmentation du texte en unités (tokens).</td>
                    <td class="px-6 py-3 text-gray-500">word_tokenize, sent_tokenize</td>
                </tr>
                <tr>
                    <td class="px-6 py-3 font-mono text-indigo-600">nltk.stem</td>
                    <td class="px-6 py-3">Réduction des mots à leur racine.</td>
                    <td class="px-6 py-3 text-gray-500">PorterStemmer, WordNetLemmatizer</td>
                </tr>
                <tr>
                    <td class="px-6 py-3 font-mono text-indigo-600">nltk.corpus</td>
                    <td class="px-6 py-3">Collection de corpus (jeux de données).</td>
                    <td class="px-6 py-3 text-gray-500">WordNet, Brown Corpus</td>
                </tr>
                <tr>
                    <td class="px-6 py-3 font-mono text-indigo-600">nltk.tag</td>
                    <td class="px-6 py-3">Étiquetage des parties du discours (POS Tagging).</td>
                    <td class="px-6 py-3 text-gray-500">n-gram, HMM</td>
                </tr>
                <tr>
                    <td class="px-6 py-3 font-mono text-indigo-600">nltk.classify</td>
                    <td class="px-6 py-3">Classification de texte.</td>
                    <td class="px-6 py-3 text-gray-500">Naive Bayes, Decision Tree</td>
                </tr>
                <tr>
                    <td class="px-6 py-3 font-mono text-indigo-600">nltk.chunk</td>
                    <td class="px-6 py-3">Segmentation en morceaux (Chunking).</td>
                    <td class="px-6 py-3 text-gray-500">Named Entity Recognition (NER)</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<!-- =================================================================== -->
<!-- CHAPITRE 3 : EXEMPLE DÉTAILLÉ - LA TOKENISATION -->
<!-- =================================================================== -->
<section id="taln-tokenization" class="mb-16">
    <h3 class="text-2xl font-semibold mb-4 text-indigo-700">Chapitre 3 : Exemple Détaillé - La Tokenisation</h3>
    
    <div class="mb-6">
        <h4 class="text-xl font-bold text-gray-800 mb-2">1. Concept</h4>
        <p class="text-gray-700 mb-4">
            La <strong>tokenisation</strong> est un processus fondamental en TALN. Elle vise à transformer un texte brut en une série d'unités individuelles appelées <strong>tokens</strong> (mots, signes de ponctuation, symboles).
        </p>
        <div class="bg-yellow-50 p-4 rounded border border-yellow-100 text-yellow-800 text-sm">
            <strong>Objectif :</strong> Décomposer une phrase ou un paragraphe en une liste d'éléments significatifs pour l'analyse.
        </div>
    </div>

    <div class="mb-8">
        <h4 class="text-xl font-bold text-gray-800 mb-4">2. Exemple de Code</h4>
        <p class="text-gray-700 mb-2">
            Tokenisons une phrase concernant l'OFPPT.
        </p>
        
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">import</span> <span class="py-variable">nltk</span>
<span class="py-keyword">from</span> <span class="py-variable">nltk</span>.<span class="py-variable">tokenize</span> <span class="py-keyword">import</span> <span class="py-variable">word_tokenize</span>

<span class="py-comment"># Note : Il faut parfois télécharger les ressources NLTK au préalable</span>
<span class="py-comment"># nltk.download('punkt')</span>

<span class="py-variable">sentence</span> = <span class="py-string">"L'OFPPT a développé au cours de la dernière décennie une coopération fructueuse avec de nombreux pays. Une politique volontariste qui s'est concrétisée par des projets allant de missions d'assistance technique, la formation, jusqu'à l'amélioration des compétences des formateurs."</span>

<span class="py-variable">tokens</span> = <span class="py-function">word_tokenize</span>(<span class="py-variable">sentence</span>)

<span class="py-builtin">print</span>(<span class="py-variable">tokens</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>

        <div class="mt-4 bg-gray-50 p-4 rounded border">
            <h6 class="font-bold text-gray-800 mb-2">Résultat (Sortie Console)</h6>
            <pre class="text-xs text-gray-600 font-mono whitespace-pre-wrap">['L', "'", 'OFPPT', 'a', 'développé', 'au', 'cours', 'de', 'la', 'dernière', 'décennie', 'une', 'coopération', 'fructueuse', 'avec', 'de', 'nombreux', 'pays', '.', 'Une', 'politique', 'volontariste', 'qui', 's', "'", 'est', 'concrétisée', 'par', 'des', 'projets', 'allant', 'de', 'missions', "d'assistance", 'technique', ',', 'la', 'formation', ',', 'jusqu', "'", 'à', "l'amélioration", 'des', 'compétences', 'des', 'formateurs', '.']</pre>
        </div>
    </div>

    <!-- Exercice Pratique -->
    <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-100">
        <h4 class="font-bold text-indigo-900 mb-3">🧠 Exercice : Tokenisation de Phrases</h4>
        <p class="text-indigo-800 mb-4 text-sm">
            Essayez d'utiliser <code>sent_tokenize</code> pour diviser le texte ci-dessus en phrases plutôt qu'en mots.
        </p>
        
        <details class="group">
            <summary class="cursor-pointer font-semibold text-indigo-700 hover:text-indigo-900 flex items-center">
                <span class="mr-2">Voir la solution</span>
                <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </summary>
            <div class="mt-4 bg-white p-4 rounded border border-indigo-100">
                <div class="code-block-wrapper">
                    <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">nltk</span>.<span class="py-variable">tokenize</span> <span class="py-keyword">import</span> <span class="py-variable">sent_tokenize</span>

<span class="py-variable">sentences</span> = <span class="py-function">sent_tokenize</span>(<span class="py-variable">sentence</span>)

<span class="py-keyword">for</span> <span class="py-variable">s</span> <span class="py-keyword">in</span> <span class="py-variable">sentences</span>:
    <span class="py-builtin">print</span>(<span class="py-string">"-"</span>, <span class="py-variable">s</span>)

<span class="py-comment"># Résultat :</span>
<span class="py-comment"># - L'OFPPT a développé au cours de la dernière décennie une coopération fructueuse avec de nombreux pays.</span>
<span class="py-comment"># - Une politique volontariste qui s'est concrétisée par des projets...</span></code></pre>
                    <button class="copy-btn">Copier</button>
                </div>
            </div>
        </details>
    </div>
</section>

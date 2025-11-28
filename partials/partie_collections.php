<!-- =================================================================== -->
<!-- PARTIE COLLECTIONS : MODULE COLLECTIONS -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6">Module Collections</h2>

<!-- ========== INTRODUCTION ========== -->
<section id="collections-intro" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Introduction aux Collections</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Le module <strong>collections</strong> implémente des types de données de conteneurs spécialisés, qui apportent des alternatives performantes et pratiques aux conteneurs natifs de Python (dict, list, set et tuple).
    </p>
    
    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Vue d'ensemble des conteneurs</h4>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Conteneur</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Utilité</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap font-mono text-sm text-indigo-600">namedtuple</td>
                        <td class="px-6 py-4 text-sm text-gray-500">Une fonction permettant de créer une sous-classe de tuple avec des champs nommés.</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap font-mono text-sm text-indigo-600">deque</td>
                        <td class="px-6 py-4 text-sm text-gray-500">Un conteneur ressemblant à une liste mais avec ajout et suppression rapide à chacun des bouts.</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap font-mono text-sm text-indigo-600">ChainMap</td>
                        <td class="px-6 py-4 text-sm text-gray-500">Permet d’encapsuler de nombreux dictionnaires dans une seule unité.</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap font-mono text-sm text-indigo-600">Counter</td>
                        <td class="px-6 py-4 text-sm text-gray-500">Permet de compter les occurrences d'objets hachables.</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap font-mono text-sm text-indigo-600">OrderedDict</td>
                        <td class="px-6 py-4 text-sm text-gray-500">Une sous-classe de dictionnaire permettant de conserver l'ordre des entrées.</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap font-mono text-sm text-indigo-600">defaultdict</td>
                        <td class="px-6 py-4 text-sm text-gray-500">Une sous-classe de dictionnaire permettant de spécifier une valeur par défaut dans le constructeur.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ========== NAMEDTUPLE ========== -->
<section id="namedtuple" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">namedtuple</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Les <strong>namedtuples</strong> assignent un sens à chaque position dans un tuple et permettent un code plus lisible et auto-documenté. Ils peuvent être utilisés partout où les tuples classiques sont utilisés.
    </p>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Exemple : Point Géométrique</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">namedtuple</span>

<span class="py-comment"># Définition du namedtuple</span>
<span class="py-variable">Point</span> = <span class="py-function">namedtuple</span>(<span class="py-string">'Point'</span>, [<span class="py-string">'x'</span>, <span class="py-string">'y'</span>])

<span class="py-comment"># Création d'une instance</span>
<span class="py-variable">p</span> = <span class="py-function">Point</span>(11, <span class="py-variable">y</span>=22)

<span class="py-builtin">print</span>(<span class="py-string">f"Point complet : {<span class="py-variable">p</span>}"</span>)
<span class="py-builtin">print</span>(<span class="py-string">f"Coordonnée x : {<span class="py-variable">p</span>.x}"</span>)
<span class="py-builtin">print</span>(<span class="py-string">f"Coordonnée y : {<span class="py-variable">p</span>[1]}"</span>)  <span class="py-comment"># Accès par index comme un tuple classique</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mt-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Exemple 2 : Gestion de Produits</h4>
        <p class="text-gray-700">Utilisation pour structurer des données métier simples.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">namedtuple</span>

<span class="py-variable">Produit</span> = <span class="py-function">namedtuple</span>(<span class="py-string">"Produit"</span>, [<span class="py-string">"id"</span>, <span class="py-string">"nom"</span>, <span class="py-string">"prix"</span>, <span class="py-string">"stock"</span>, <span class="py-string">"categorie"</span>])

<span class="py-variable">p</span> = <span class="py-function">Produit</span>(1, <span class="py-string">"Clavier"</span>, 150, 20, <span class="py-string">"Informatique"</span>)

<span class="py-builtin">print</span>(<span class="py-variable">p</span>.nom)
<span class="py-builtin">print</span>(<span class="py-variable">p</span>.prix)
<span class="py-builtin">print</span>(<span class="py-variable">p</span>.categorie)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- Exercice 1 -->
    <div class="mt-6 bg-blue-50 p-6 rounded-lg border border-blue-100">
        <h4 class="text-lg font-semibold text-blue-900 mb-2">Exercice 1 : Gestion d'Étudiants</h4>
        <p class="text-blue-800 mb-4">
            Créez un <code>namedtuple</code> appelé 'Etudiant' avec les champs 'nom', 'age', et 'note'. Créez ensuite une instance pour un étudiant nommé "Alice", 20 ans, avec une note de 15. Affichez son nom et sa note.
        </p>
        <button class="solution-toggle">Voir la solution</button>
        <div class="solution-content hidden">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">namedtuple</span>

<span class="py-variable">Etudiant</span> = <span class="py-function">namedtuple</span>(<span class="py-string">'Etudiant'</span>, [<span class="py-string">'nom'</span>, <span class="py-string">'age'</span>, <span class="py-string">'note'</span>])
<span class="py-variable">alice</span> = <span class="py-function">Etudiant</span>(<span class="py-string">"Alice"</span>, 20, 15)

<span class="py-builtin">print</span>(<span class="py-string">f"Nom : {<span class="py-variable">alice</span>.nom}, Note : {<span class="py-variable">alice</span>.note}"</span>)</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>

    <!-- Exercice 2 -->
    <div class="mt-6 bg-blue-50 p-6 rounded-lg border border-blue-100">
        <h4 class="text-lg font-semibold text-blue-900 mb-2">Exercice 2 : Conversion de Dictionnaire</h4>
        <p class="text-blue-800 mb-4">
            Soit le dictionnaire <code>data = {'marque': 'Toyota', 'modele': 'Corolla', 'annee': 2020}</code>. Convertissez ce dictionnaire en un <code>namedtuple</code> 'Voiture'.
        </p>
        <button class="solution-toggle">Voir la solution</button>
        <div class="solution-content hidden">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">namedtuple</span>

<span class="py-variable">data</span> = {<span class="py-string">'marque'</span>: <span class="py-string">'Toyota'</span>, <span class="py-string">'modele'</span>: <span class="py-string">'Corolla'</span>, <span class="py-string">'annee'</span>: 2020}
<span class="py-variable">Voiture</span> = <span class="py-function">namedtuple</span>(<span class="py-string">'Voiture'</span>, <span class="py-variable">data</span>.<span class="py-function">keys</span>())
<span class="py-variable">ma_voiture</span> = <span class="py-function">Voiture</span>(**<span class="py-variable">data</span>)

<span class="py-builtin">print</span>(<span class="py-variable">ma_voiture</span>)</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
</section>

<!-- ========== DEQUE ========== -->
<section id="deque" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">deque (Double Ended Queue)</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Une <strong>deque</strong> (prononcé "deck") est une généralisation des piles et des files. Elle supporte des ajouts et des suppressions efficaces (O(1)) aux deux extrémités, contrairement aux listes qui sont lentes pour les opérations en début de liste (O(n)).
    </p>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Exemple : File d'attente rapide</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">deque</span>

<span class="py-variable">d</span> = <span class="py-function">deque</span>([<span class="py-string">'milieu'</span>])
<span class="py-variable">d</span>.<span class="py-function">append</span>(<span class="py-string">'droite'</span>)       <span class="py-comment"># Ajout à la fin</span>
<span class="py-variable">d</span>.<span class="py-function">appendleft</span>(<span class="py-string">'gauche'</span>)   <span class="py-comment"># Ajout au début</span>

<span class="py-builtin">print</span>(<span class="py-variable">d</span>)

<span class="py-variable">d</span>.<span class="py-function">pop</span>()             <span class="py-comment"># Retire à la fin</span>
<span class="py-variable">d</span>.<span class="py-function">popleft</span>()         <span class="py-comment"># Retire au début</span>

<span class="py-builtin">print</span>(<span class="py-variable">d</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mt-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Exemple 2 : Extension et Inversion</h4>
        <p class="text-gray-700">Ajout multiple d'éléments et inversion de l'ordre.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">deque</span>

<span class="py-variable">d</span> = <span class="py-function">deque</span>([1, 2, 3])
<span class="py-variable">d</span>.<span class="py-function">extend</span>([4, 5])        <span class="py-comment"># Ajoute plusieurs éléments à la fin</span>
<span class="py-variable">d</span>.<span class="py-function">extendleft</span>([0, -1])   <span class="py-comment"># Ajoute plusieurs éléments au début (ordre inversé)</span>

<span class="py-builtin">print</span>(<span class="py-variable">d</span>)
<span class="py-comment"># Résultat : deque([-1, 0, 1, 2, 3, 4, 5])</span>

<span class="py-variable">d</span>.<span class="py-function">reverse</span>()
<span class="py-builtin">print</span>(<span class="py-variable">d</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- Exercice 1 -->
    <div class="mt-6 bg-blue-50 p-6 rounded-lg border border-blue-100">
        <h4 class="text-lg font-semibold text-blue-900 mb-2">Exercice 1 : Rotation</h4>
        <p class="text-blue-800 mb-4">
            Créez une deque avec les éléments "A", "B", "C", "D". Utilisez la méthode <code>rotate()</code> pour décaler les éléments de 1 vers la droite, puis affichez le résultat.
        </p>
        <button class="solution-toggle">Voir la solution</button>
        <div class="solution-content hidden">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">deque</span>

<span class="py-variable">d</span> = <span class="py-function">deque</span>([<span class="py-string">"A"</span>, <span class="py-string">"B"</span>, <span class="py-string">"C"</span>, <span class="py-string">"D"</span>])
<span class="py-variable">d</span>.<span class="py-function">rotate</span>(1)
<span class="py-builtin">print</span>(<span class="py-variable">d</span>)
<span class="py-comment"># Résultat attendu : deque(['D', 'A', 'B', 'C'])</span></code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>

    <!-- Exercice 2 -->
    <div class="mt-6 bg-blue-50 p-6 rounded-lg border border-blue-100">
        <h4 class="text-lg font-semibold text-blue-900 mb-2">Exercice 2 : Historique Limité</h4>
        <p class="text-blue-800 mb-4">
            Créez une deque avec une taille maximale (<code>maxlen</code>) de 3. Ajoutez successivement les nombres 1, 2, 3, 4. Que contient la deque à la fin ?
        </p>
        <button class="solution-toggle">Voir la solution</button>
        <div class="solution-content hidden">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">deque</span>

<span class="py-variable">historique</span> = <span class="py-function">deque</span>(<span class="py-variable">maxlen</span>=3)
<span class="py-variable">historique</span>.<span class="py-function">append</span>(1)
<span class="py-variable">historique</span>.<span class="py-function">append</span>(2)
<span class="py-variable">historique</span>.<span class="py-function">append</span>(3)
<span class="py-variable">historique</span>.<span class="py-function">append</span>(4)

<span class="py-builtin">print</span>(<span class="py-variable">historique</span>)
<span class="py-comment"># Le 1 est éjecté car la taille est limitée à 3</span></code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
</section>

<!-- ========== CHAINMAP ========== -->
<section id="chainmap" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">ChainMap</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        <strong>ChainMap</strong> regroupe plusieurs dictionnaires ou autres correspondances pour créer une vue unique et pouvant être mise à jour. Si vous recherchez une clé, ChainMap la cherche dans le premier dictionnaire, puis le second, etc.
    </p>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Exemple : Configuration par défaut et utilisateur</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">ChainMap</span>

<span class="py-variable">defauts</span> = {<span class="py-string">'theme'</span>: <span class="py-string">'light'</span>, <span class="py-string">'langue'</span>: <span class="py-string">'en'</span>}
<span class="py-variable">config_user</span> = {<span class="py-string">'theme'</span>: <span class="py-string">'dark'</span>}

<span class="py-variable">config</span> = <span class="py-function">ChainMap</span>(<span class="py-variable">config_user</span>, <span class="py-variable">defauts</span>)

<span class="py-comment"># 'theme' est pris dans config_user (premier trouvé)</span>
<span class="py-builtin">print</span>(<span class="py-variable">config</span>[<span class="py-string">'theme'</span>])  
<span class="py-comment"># 'langue' est pris dans defauts (pas dans config_user)</span>
<span class="py-builtin">print</span>(<span class="py-variable">config</span>[<span class="py-string">'langue'</span>])</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mt-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Exemple 2 : Modification de contexte</h4>
        <p class="text-gray-700">Les modifications affectent toujours le premier dictionnaire de la chaîne.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">ChainMap</span>

<span class="py-variable">dict1</span> = {<span class="py-string">'a'</span>: 1, <span class="py-string">'b'</span>: 2}
<span class="py-variable">dict2</span> = {<span class="py-string">'b'</span>: 3, <span class="py-string">'c'</span>: 4}
<span class="py-variable">chain</span> = <span class="py-function">ChainMap</span>(<span class="py-variable">dict1</span>, <span class="py-variable">dict2</span>)

<span class="py-variable">chain</span>[<span class="py-string">'b'</span>] = 100  <span class="py-comment"># Modifie dict1</span>
<span class="py-variable">chain</span>[<span class="py-string">'z'</span>] = 999  <span class="py-comment"># Ajoute à dict1</span>

<span class="py-builtin">print</span>(<span class="py-string">f"Chain: {<span class="py-variable">chain</span>}"</span>)
<span class="py-builtin">print</span>(<span class="py-string">f"Dict1: {<span class="py-variable">dict1</span>}"</span>)  <span class="py-comment"># Modifié</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Dict2: {<span class="py-variable">dict2</span>}"</span>)  <span class="py-comment"># Inchangé</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- Exercice 1 -->
    <div class="mt-6 bg-blue-50 p-6 rounded-lg border border-blue-100">
        <h4 class="text-lg font-semibold text-blue-900 mb-2">Exercice 1 : Fusion de contextes</h4>
        <p class="text-blue-800 mb-4">
            Vous avez deux dictionnaires : <code>d1 = {'a': 1, 'b': 2}</code> et <code>d2 = {'b': 3, 'c': 4}</code>. Créez une ChainMap qui priorise <code>d1</code>. Quelle est la valeur de 'b' ?
        </p>
        <button class="solution-toggle">Voir la solution</button>
        <div class="solution-content hidden">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">ChainMap</span>

<span class="py-variable">d1</span> = {<span class="py-string">'a'</span>: 1, <span class="py-string">'b'</span>: 2}
<span class="py-variable">d2</span> = {<span class="py-string">'b'</span>: 3, <span class="py-string">'c'</span>: 4}
<span class="py-variable">cm</span> = <span class="py-function">ChainMap</span>(<span class="py-variable">d1</span>, <span class="py-variable">d2</span>)

<span class="py-builtin">print</span>(<span class="py-variable">cm</span>[<span class="py-string">'b'</span>]) <span class="py-comment"># Affiche 2 (valeur de d1)</span></code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>

    <!-- Exercice 2 -->
    <div class="mt-6 bg-blue-50 p-6 rounded-lg border border-blue-100">
        <h4 class="text-lg font-semibold text-blue-900 mb-2">Exercice 2 : Ajout dynamique</h4>
        <p class="text-blue-800 mb-4">
            Créez une ChainMap vide. Ajoutez-y un nouveau dictionnaire enfant au début avec la méthode <code>new_child()</code> contenant <code>{'x': 10}</code>.
        </p>
        <button class="solution-toggle">Voir la solution</button>
        <div class="solution-content hidden">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">ChainMap</span>

<span class="py-variable">cm</span> = <span class="py-function">ChainMap</span>()
<span class="py-variable">cm_new</span> = <span class="py-variable">cm</span>.<span class="py-function">new_child</span>({<span class="py-string">'x'</span>: 10})

<span class="py-builtin">print</span>(<span class="py-variable">cm_new</span>[<span class="py-string">'x'</span>])</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
</section>

<!-- ========== COUNTER ========== -->
<section id="counter" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Counter</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        <strong>Counter</strong> est une sous-classe de dictionnaire pour compter les objets hachables. C'est un outil très puissant pour faire des statistiques rapides sur des données.
    </p>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Exemple : Compter les lettres</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">Counter</span>

<span class="py-variable">texte</span> = <span class="py-string">"abracadabra"</span>
<span class="py-variable">compteur</span> = <span class="py-function">Counter</span>(<span class="py-variable">texte</span>)

<span class="py-builtin">print</span>(<span class="py-variable">compteur</span>)
<span class="py-comment"># Affiche Counter({'a': 5, 'b': 2, 'r': 2, 'c': 1, 'd': 1})</span>

<span class="py-builtin">print</span>(<span class="py-variable">compteur</span>.<span class="py-function">most_common</span>(2))
<span class="py-comment"># Affiche les 2 éléments les plus fréquents : [('a', 5), ('b', 2)]</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mt-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Exemple 2 : Opérations Arithmétiques</h4>
        <p class="text-gray-700">Combinaison de compteurs avec des opérations mathématiques.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">Counter</span>

<span class="py-variable">c1</span> = <span class="py-function">Counter</span>(<span class="py-variable">a</span>=3, <span class="py-variable">b</span>=1)
<span class="py-variable">c2</span> = <span class="py-function">Counter</span>(<span class="py-variable">a</span>=1, <span class="py-variable">b</span>=2)

<span class="py-builtin">print</span>(<span class="py-string">f"Addition : {<span class="py-variable">c1</span> + <span class="py-variable">c2</span>}"</span>)       <span class="py-comment"># a:4, b:3</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Soustraction : {<span class="py-variable">c1</span> - <span class="py-variable">c2</span>}"</span>)   <span class="py-comment"># a:2 (b est négatif donc ignoré)</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Minimum : {<span class="py-variable">c1</span> & <span class="py-variable">c2</span>}"</span>)   <span class="py-comment"># min(c1, c2) -> a:1, b:1</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Maximum : {<span class="py-variable">c1</span> | <span class="py-variable">c2</span>}"</span>)          <span class="py-comment"># max(c1, c2) -> a:3, b:2</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- Exercice 1 -->
    <div class="mt-6 bg-blue-50 p-6 rounded-lg border border-blue-100">
        <h4 class="text-lg font-semibold text-blue-900 mb-2">Exercice 1 : Compter les mots</h4>
        <p class="text-blue-800 mb-4">
            Soit la liste <code>mots = ['chat', 'chien', 'chat', 'oiseau', 'chat', 'chien']</code>. Utilisez Counter pour savoir combien de fois chaque mot apparaît.
        </p>
        <button class="solution-toggle">Voir la solution</button>
        <div class="solution-content hidden">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">Counter</span>

<span class="py-variable">mots</span> = [<span class="py-string">'chat'</span>, <span class="py-string">'chien'</span>, <span class="py-string">'chat'</span>, <span class="py-string">'oiseau'</span>, <span class="py-string">'chat'</span>, <span class="py-string">'chien'</span>]
<span class="py-variable">c</span> = <span class="py-function">Counter</span>(<span class="py-variable">mots</span>)

<span class="py-builtin">print</span>(<span class="py-variable">c</span>)</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>

    <!-- Exercice 2 -->
    <div class="mt-6 bg-blue-50 p-6 rounded-lg border border-blue-100">
        <h4 class="text-lg font-semibold text-blue-900 mb-2">Exercice 2 : Opérations sur les compteurs</h4>
        <p class="text-blue-800 mb-4">
            Soit <code>c1 = Counter(a=3, b=1)</code> et <code>c2 = Counter(a=1, b=2)</code>. Calculez la somme des deux compteurs (c1 + c2).
        </p>
        <button class="solution-toggle">Voir la solution</button>
        <div class="solution-content hidden">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">Counter</span>

<span class="py-variable">c1</span> = <span class="py-function">Counter</span>(<span class="py-variable">a</span>=3, <span class="py-variable">b</span>=1)
<span class="py-variable">c2</span> = <span class="py-function">Counter</span>(<span class="py-variable">a</span>=1, <span class="py-variable">b</span>=2)

<span class="py-builtin">print</span>(<span class="py-variable">c1</span> + <span class="py-variable">c2</span>)
<span class="py-comment"># Résultat : Counter({'a': 4, 'b': 3})</span></code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
</section>

<!-- ========== ORDEREDDICT ========== -->
<section id="ordereddict" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">OrderedDict</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        <strong>OrderedDict</strong> est une sous-classe de dictionnaire qui se souvient de l'ordre dans lequel les entrées ont été ajoutées.
        <br><em>Note : Depuis Python 3.7, les dictionnaires standards conservent aussi l'ordre d'insertion, mais OrderedDict offre des méthodes supplémentaires comme <code>move_to_end()</code>.</em>
    </p>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Exemple : Réorganiser</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">OrderedDict</span>

<span class="py-variable">d</span> = <span class="py-function">OrderedDict</span>()
<span class="py-variable">d</span>[<span class="py-string">'a'</span>] = 1
<span class="py-variable">d</span>[<span class="py-string">'b'</span>] = 2
<span class="py-variable">d</span>[<span class="py-string">'c'</span>] = 3

<span class="py-builtin">print</span>(<span class="py-variable">d</span>)

<span class="py-comment"># Déplacer 'a' à la fin</span>
<span class="py-variable">d</span>.<span class="py-function">move_to_end</span>(<span class="py-string">'a'</span>)
<span class="py-builtin">print</span>(<span class="py-variable">d</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mt-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Exemple 2 : Pile vs File (LIFO/FIFO)</h4>
        <p class="text-gray-700">Utilisation de <code>popitem</code> pour retirer des éléments.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">OrderedDict</span>

<span class="py-variable">d</span> = <span class="py-function">OrderedDict</span>(<span class="py-variable">a</span>=1, <span class="py-variable">b</span>=2, <span class="py-variable">c</span>=3)

<span class="py-comment"># popitem(last=True) retire le dernier (LIFO - Pile)</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Retiré (LIFO) : {<span class="py-variable">d</span>.<span class="py-function">popitem</span>(<span class="py-variable">last</span>=<span class="py-builtin">True</span>)}"</span>)

<span class="py-comment"># popitem(last=False) retire le premier (FIFO - File)</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Retiré (FIFO) : {<span class="py-variable">d</span>.<span class="py-function">popitem</span>(<span class="py-variable">last</span>=<span class="py-builtin">False</span>)}"</span>)

<span class="py-builtin">print</span>(<span class="py-string">f"Reste : {<span class="py-variable">d</span>}"</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- Exercice 1 -->
    <div class="mt-6 bg-blue-50 p-6 rounded-lg border border-blue-100">
        <h4 class="text-lg font-semibold text-blue-900 mb-2">Exercice 1 : Sensibilité à l'ordre</h4>
        <p class="text-blue-800 mb-4">
            Contrairement aux dictionnaires classiques, deux <code>OrderedDict</code> ne sont égaux que si l'ordre des éléments est le même.
            <br>Créez <code>od1 = OrderedDict([('a', 1), ('b', 2)])</code> et <code>od2 = OrderedDict([('b', 2), ('a', 1)])</code>. Vérifiez s'ils sont égaux. Comparez avec deux dictionnaires classiques identiques.
        </p>
        <button class="solution-toggle">Voir la solution</button>
        <div class="solution-content hidden">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">OrderedDict</span>

<span class="py-variable">od1</span> = <span class="py-function">OrderedDict</span>([(<span class="py-string">'a'</span>, 1), (<span class="py-string">'b'</span>, 2)])
<span class="py-variable">od2</span> = <span class="py-function">OrderedDict</span>([(<span class="py-string">'b'</span>, 2), (<span class="py-string">'a'</span>, 1)])

<span class="py-builtin">print</span>(<span class="py-string">f"OrderedDict égaux ? {<span class="py-variable">od1</span> == <span class="py-variable">od2</span>}"</span>) <span class="py-comment"># False</span>

<span class="py-variable">d1</span> = {<span class="py-string">'a'</span>: 1, <span class="py-string">'b'</span>: 2}
<span class="py-variable">d2</span> = {<span class="py-string">'b'</span>: 2, <span class="py-string">'a'</span>: 1}
<span class="py-builtin">print</span>(<span class="py-string">f"Dicts classiques égaux ? {<span class="py-variable">d1</span> == <span class="py-variable">d2</span>}"</span>) <span class="py-comment"># True</span></code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>

    <!-- Exercice 2 -->
    <div class="mt-6 bg-blue-50 p-6 rounded-lg border border-blue-100">
        <h4 class="text-lg font-semibold text-blue-900 mb-2">Exercice 2 : Déplacer au début</h4>
        <p class="text-blue-800 mb-4">
            Créez un OrderedDict <code>od = OrderedDict([('a', 1), ('b', 2), ('c', 3)])</code>. Utilisez <code>move_to_end(key, last=False)</code> pour déplacer la clé 'c' au tout début.
        </p>
        <button class="solution-toggle">Voir la solution</button>
        <div class="solution-content hidden">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">OrderedDict</span>

<span class="py-variable">od</span> = <span class="py-function">OrderedDict</span>([(<span class="py-string">'a'</span>, 1), (<span class="py-string">'b'</span>, 2), (<span class="py-string">'c'</span>, 3)])
<span class="py-variable">od</span>.<span class="py-function">move_to_end</span>(<span class="py-string">'c'</span>, <span class="py-variable">last</span>=<span class="py-builtin">False</span>)
<span class="py-builtin">print</span>(<span class="py-variable">od</span>)</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
</section>

<!-- ========== DEFAULTDICT ========== -->
<!-- ========== DEFAULTDICT ========== -->
<section id="defaultdict" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">defaultdict</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Un <strong>defaultdict</strong> est un dictionnaire qui ne lève jamais d’erreur quand une clé n’existe pas. Il crée automatiquement une valeur par défaut quand vous accédez à une clé absente.
    </p>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Le problème avec un dict normal</h4>
        <p class="text-gray-700">Avec un dictionnaire classique, accéder à une clé inexistante provoque une erreur :</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-variable">d</span> = {}
<span class="py-variable">d</span>[<span class="py-string">"age"</span>] += 1   <span class="py-comment"># BOOM → KeyError</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>

        <h4 class="text-lg font-semibold text-gray-900 mb-2 mt-4">La solution avec defaultdict</h4>
        <p class="text-gray-700">Vous définissez le type de valeur par défaut (ici <code>int</code> qui vaut 0 par défaut) :</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">defaultdict</span>

<span class="py-variable">d</span> = <span class="py-function">defaultdict</span>(<span class="py-builtin">int</span>)  <span class="py-comment"># int() = 0 par défaut</span>
<span class="py-variable">d</span>[<span class="py-string">"age"</span>] += 1
<span class="py-builtin">print</span>(<span class="py-variable">d</span>[<span class="py-string">"age"</span>])
<span class="py-comment"># Résultat : 1</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
        <p class="text-gray-600 text-sm italic">Pourquoi ? Parce que <code>defaultdict(int)</code> crée automatiquement <code>{"age": 0}</code> au moment de l'accès.</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mt-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Les types de valeurs par défaut les plus utilisés</h4>
        
        <h5 class="font-semibold text-gray-800 mt-2">1) int → compteur automatique</h5>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">defaultdict</span>

<span class="py-variable">compteur</span> = <span class="py-function">defaultdict</span>(<span class="py-builtin">int</span>)

<span class="py-keyword">for</span> <span class="py-variable">lettre</span> <span class="py-keyword">in</span> <span class="py-string">"hello"</span>:
    <span class="py-variable">compteur</span>[<span class="py-variable">lettre</span>] += 1

<span class="py-builtin">print</span>(<span class="py-variable">compteur</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>

        <h5 class="font-semibold text-gray-800 mt-4">2) list → pour grouper des données</h5>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">defaultdict</span>

<span class="py-variable">groupes</span> = <span class="py-function">defaultdict</span>(<span class="py-builtin">list</span>)

<span class="py-variable">groupes</span>[<span class="py-string">"A"</span>].<span class="py-function">append</span>(1)
<span class="py-variable">groupes</span>[<span class="py-string">"A"</span>].<span class="py-function">append</span>(2)
<span class="py-variable">groupes</span>[<span class="py-string">"B"</span>].<span class="py-function">append</span>(3)

<span class="py-builtin">print</span>(<span class="py-variable">groupes</span>)
<span class="py-comment"># Résultat : {'A': [1, 2], 'B': [3]}</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>

        <h5 class="font-semibold text-gray-800 mt-4">3) set → éviter les doublons</h5>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">defaultdict</span>

<span class="py-variable">groupes</span> = <span class="py-function">defaultdict</span>(<span class="py-builtin">set</span>)

<span class="py-variable">groupes</span>[<span class="py-string">"x"</span>].<span class="py-function">add</span>(10)
<span class="py-variable">groupes</span>[<span class="py-string">"x"</span>].<span class="py-function">add</span>(10)
<span class="py-variable">groupes</span>[<span class="py-string">"x"</span>].<span class="py-function">add</span>(20)

<span class="py-builtin">print</span>(<span class="py-variable">groupes</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4 mt-6">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Exemple concret : Compter par catégorie</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">defaultdict</span>

<span class="py-variable">produits</span> = [
    (<span class="py-string">"fruit"</span>, <span class="py-string">"pomme"</span>),
    (<span class="py-string">"fruit"</span>, <span class="py-string">"banane"</span>),
    (<span class="py-string">"legume"</span>, <span class="py-string">"carotte"</span>),
]

<span class="py-variable">groups</span> = <span class="py-function">defaultdict</span>(<span class="py-builtin">list</span>)

<span class="py-keyword">for</span> <span class="py-variable">cat</span>, <span class="py-variable">item</span> <span class="py-keyword">in</span> <span class="py-variable">produits</span>:
    <span class="py-variable">groups</span>[<span class="py-variable">cat</span>].<span class="py-function">append</span>(<span class="py-variable">item</span>)

<span class="py-builtin">print</span>(<span class="py-variable">groups</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>

    <!-- Exercice 1 -->
    <div class="mt-6 bg-blue-50 p-6 rounded-lg border border-blue-100">
        <h4 class="text-lg font-semibold text-blue-900 mb-2">Exercice 1 : Regroupement de notes</h4>
        <p class="text-blue-800 mb-4">
            Soit la liste <code>notes = [('Alice', 15), ('Bob', 12), ('Alice', 18), ('Bob', 14)]</code>. Utilisez un <code>defaultdict(list)</code> pour regrouper les notes par étudiant.
        </p>
        <button class="solution-toggle">Voir la solution</button>
        <div class="solution-content hidden">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">defaultdict</span>

<span class="py-variable">notes</span> = [(<span class="py-string">'Alice'</span>, 15), (<span class="py-string">'Bob'</span>, 12), (<span class="py-string">'Alice'</span>, 18), (<span class="py-string">'Bob'</span>, 14)]
<span class="py-variable">carnet</span> = <span class="py-function">defaultdict</span>(<span class="py-builtin">list</span>)

<span class="py-keyword">for</span> <span class="py-variable">etudiant</span>, <span class="py-variable">note</span> <span class="py-keyword">in</span> <span class="py-variable">notes</span>:
    <span class="py-variable">carnet</span>[<span class="py-variable">etudiant</span>].<span class="py-function">append</span>(<span class="py-variable">note</span>)

<span class="py-builtin">print</span>(<span class="py-variable">carnet</span>)</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>

    <!-- Exercice 2 -->
    <div class="mt-6 bg-blue-50 p-6 rounded-lg border border-blue-100">
        <h4 class="text-lg font-semibold text-blue-900 mb-2">Exercice 2 : Inversion de dictionnaire</h4>
        <p class="text-blue-800 mb-4">
            Soit <code>d = {'a': 1, 'b': 2, 'c': 1}</code>. Créez un dictionnaire inversé où les clés sont les nombres et les valeurs sont les listes des lettres correspondantes (ex: <code>{1: ['a', 'c'], ...}</code>).
        </p>
        <button class="solution-toggle">Voir la solution</button>
        <div class="solution-content hidden">
            <div class="code-block-wrapper">
                <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">collections</span> <span class="py-keyword">import</span> <span class="py-variable">defaultdict</span>

<span class="py-variable">d</span> = {<span class="py-string">'a'</span>: 1, <span class="py-string">'b'</span>: 2, <span class="py-string">'c'</span>: 1}
<span class="py-variable">inverse</span> = <span class="py-function">defaultdict</span>(<span class="py-builtin">list</span>)

<span class="py-keyword">for</span> <span class="py-variable">cle</span>, <span class="py-variable">valeur</span> <span class="py-keyword">in</span> <span class="py-variable">d</span>.<span class="py-function">items</span>():
    <span class="py-variable">inverse</span>[<span class="py-variable">valeur</span>].<span class="py-function">append</span>(<span class="py-variable">cle</span>)

<span class="py-builtin">print</span>(<span class="py-variable">inverse</span>)</code></pre>
                <button class="copy-btn">Copier</button>
            </div>
        </div>
    </div>
</section>

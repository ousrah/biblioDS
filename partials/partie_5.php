<!-- =================================================================== -->
<!-- PARTIE 5 : INTRODUCTION AU MACHINE LEARNING & NLP -->
<!-- =================================================================== -->
<h2 class="text-3xl font-bold text-gray-800 border-b-2 border-gray-200 pb-2 mb-6 mt-12">Partie 5 : Introduction au Machine Learning & NLP</h2>

<!-- ========== CHAPITRE 10 : MACHINE LEARNING (SCIKIT-LEARN) ========== -->
<section id="ml-scikit" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 10 : Machine Learning avec Scikit-learn</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Le Machine Learning consiste à laisser l'ordinateur apprendre des modèles à partir de données. <strong>Scikit-learn</strong> est la bibliothèque la plus populaire pour débuter.
    </p>
    
    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Exemple : Régression Linéaire Simple</h4>
        <p class="text-gray-700 mb-2">Imaginons que nous voulons prédire le prix d'une maison en fonction de sa surface.</p>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">sklearn</span>.<span class="py-variable">linear_model</span> <span class="py-keyword">import</span> <span class="py-variable">LinearRegression</span>
<span class="py-keyword">import</span> <span class="py-variable">numpy</span> <span class="py-keyword">as</span> <span class="py-variable">np</span>

<span class="py-comment"># Données (Surface en m2, Prix en k€)</span>
<span class="py-variable">X</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([[50], [60], [80], [100]]) <span class="py-comment"># Features (2D array)</span>
<span class="py-variable">y</span> = <span class="py-variable">np</span>.<span class="py-function">array</span>([150, 180, 250, 300])      <span class="py-comment"># Target</span>

<span class="py-comment"># Création et entraînement du modèle</span>
<span class="py-variable">modele</span> = <span class="py-function">LinearRegression</span>()
<span class="py-variable">modele</span>.<span class="py-function">fit</span>(<span class="py-variable">X</span>, <span class="py-variable">y</span>)

<span class="py-comment"># Prédiction pour une maison de 70m2</span>
<span class="py-variable">prediction</span> = <span class="py-variable">modele</span>.<span class="py-function">predict</span>([[70]])
<span class="py-builtin">print</span>(<span class="py-string">f"Prix estimé pour 70m2 : {<span class="py-variable">prediction</span>[0]:.2f} k€"</span>)</code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- ========== CHAPITRE 11 : NLP (TEXTBLOB) ========== -->
<section id="nlp-textblob" class="mb-16">
    <h3 class="text-2xl font-semibold mb-3">Chapitre 11 : Traitement du Langage Naturel (NLP)</h3>
    <p class="text-xl text-gray-600 mb-4 leading-relaxed">
        Le NLP (Natural Language Processing) permet d'analyser du texte. Pour débuter simplement, nous utiliserons <strong>TextBlob</strong>, qui est très intuitif.
    </p>

    <div class="bg-white p-6 rounded-lg shadow-sm border space-y-4">
        <h4 class="text-lg font-semibold text-gray-900 mb-2">Analyse de sentiments</h4>
        <div class="code-block-wrapper">
            <pre class="code-block"><code class="language-python"><span class="py-keyword">from</span> <span class="py-variable">textblob</span> <span class="py-keyword">import</span> <span class="py-variable">TextBlob</span>

<span class="py-variable">texte</span> = <span class="py-string">"I love Python, it's an amazing language!"</span>
<span class="py-variable">blob</span> = <span class="py-function">TextBlob</span>(<span class="py-variable">texte</span>)

<span class="py-comment"># Polarité : entre -1 (négatif) et 1 (positif)</span>
<span class="py-builtin">print</span>(<span class="py-string">f"Sentiment : {<span class="py-variable">blob</span>.sentiment.polarity}"</span>) 
<span class="py-comment"># Résultat proche de 1 car la phrase est très positive</span></code></pre>
            <button class="copy-btn">Copier</button>
        </div>
    </div>
</section>

<!-- ========== QUIZ FINAL ========== -->
<section id="quiz-final" class="mb-16">
    <div class="bg-orange-50 p-6 rounded-lg border border-orange-100">
        <h3 class="text-2xl font-bold text-orange-900 mb-4">Quiz Final : IA & NLP</h3>
        <form class="quiz-form space-y-6">
            <!-- Question 1 -->
            <div class="question-block">
                <p class="font-semibold text-gray-800 mb-2">1. Quelle méthode entraîne un modèle Scikit-learn ?</p>
                <ul class="space-y-2">
                    <li class="p-2 rounded hover:bg-white transition-colors"><label class="flex items-center cursor-pointer"><input type="radio" name="q1" value="wrong" class="mr-2"> model.train(X, y)</label></li>
                    <li class="p-2 rounded hover:bg-white transition-colors"><label class="flex items-center cursor-pointer"><input type="radio" name="q1" value="correct" class="mr-2"> model.fit(X, y)</label></li>
                    <li class="p-2 rounded hover:bg-white transition-colors"><label class="flex items-center cursor-pointer"><input type="radio" name="q1" value="wrong" class="mr-2"> model.learn(X, y)</label></li>
                </ul>
            </div>

            <!-- Question 2 -->
            <div class="question-block">
                <p class="font-semibold text-gray-800 mb-2">2. Que signifie NLP ?</p>
                <ul class="space-y-2">
                    <li class="p-2 rounded hover:bg-white transition-colors"><label class="flex items-center cursor-pointer"><input type="radio" name="q2" value="correct" class="mr-2"> Natural Language Processing</label></li>
                    <li class="p-2 rounded hover:bg-white transition-colors"><label class="flex items-center cursor-pointer"><input type="radio" name="q2" value="wrong" class="mr-2"> New Learning Protocol</label></li>
                </ul>
            </div>

            <button type="submit" class="bg-orange-600 text-white px-6 py-2 rounded-lg font-semibold hover:bg-orange-700 transition-colors">Valider mes réponses</button>
            <div class="quiz-result hidden mt-4"></div>
        </form>
    </div>
</section>

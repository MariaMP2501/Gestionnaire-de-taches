<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Feuille d'adaptation</title>
</head>

<body>

    <?php
    include('head.php');
    include('nav.php');
    ?>

    <div class="p-5 flex items-center justify-center mb-76 ">
        <h1 class="mb-10 text-3xl ">Feuille d' adaptation</h1>

        <!-- Général -->
        <div>
            <h4 class="text-transform: uppercase text-cyan-700 text-xl italic font-bold">Général</h4>
            <div class="mb-[200px] py-5 px-10 lg:w-1/2 h-1/2 bg-fuchsia-200 flex flex-col rounded-lg flex justify-center items-center shadow-2xl flex-col mb-76  ">
                <div id="NomPrenom" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">1. Nom et prénom de l'enfant</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                </div>
                <div id="Jourspresence" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">2. Quels seront ses jours de présence ? demi-journées ?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                </div>

                <div id="Gardeavant" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">3. A-t-il déjà été gardé? </p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                    <p class="mb-3 text-xl text-center">3.1 1ere séparation? </p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                </div>

                <div id="Descriptionjour" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">4. Décrivez une journée type</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                </div>
            </div>

            <!-- Niveau affectif -->
            <h4 class="text-transform: uppercase text-cyan-700 text-xl italic font-bold"> Niveau affectif</h4>
            <div class="mb-[200px] py-5 px-10 lg:w-1/2 h-1/2 bg-fuchsia-200 flex flex-col rounded-lg flex justify-center items-center shadow-2xl flex-col mb-76  ">
                <div id="Tétine" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">1. Votre enfant possède-t-il une tétine ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                    <p class="mb-3 text-xl text-center">1.1 Si oui, quel moment de la journée
                        l’utilise-t-il ?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">

                </div>
                <div id="Doudou" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">2. Votre enfant possède-t-il un doudou ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                    <p class="mb-3 text-xl text-center">2.1 Si oui, quel moment de la journée
                        l’utilise-t-il ?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">

                </div>
                <div id="Pleure" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">3. Pleure-t-il souvent ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                    <p class="mb-3 text-xl text-center">3.1 Si oui, pourquoi ? (Besoin d’être dans les bras, quand
                        il n’est plus avec son parent ?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                </div>
            </div>
            <!-- Niveau Social -->
            <h4 class="text-transform: uppercase text-cyan-700 text-2xl italic font-bold"> Niveau social</h4>
            <div class="mb-[200px] py-5 px-10 lg:w-1/2 h-1/2 bg-fuchsia-200 flex flex-col rounded-lg flex justify-center items-center shadow-2xl flex-col mb-76  ">
                <div id="Relation" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">1.A-t-il l’habitude d’être en présence avec d’autres enfants ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                    <p class="mb-3 text-xl text-center">1.1 Si oui, comment se comporte-il avec eux ? (Joue, ignorance...)?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                </div>
            </div>

            <!--Niveau physiologique -->
            <h4 class="text-transform: uppercase text-cyan-700 text-xl italic font-bold"> Niveau physiologique Bébé</h4>
            <div class="mb-[200px] py-5 px-10 lg:w-1/2 h-1/2 bg-fuchsia-200 flex flex-col rounded-lg flex justify-center items-center shadow-2xl flex-col mb-76  ">

                <div id="Alimentaire" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">1. Quel lait boit-il ? (Lait maternelle, poudre, bouteille) ?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                    <p class="mb-3 text-xl text-center">2. Combien de biberons boit-il dans la journée ? Quel est la dose (ml) ?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                    <p class="mb-3 text-xl text-center">3. Boit-il son lait à température ambiante ou chauffé ?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                    <p class="mb-3 text-xl text-center">4. A-t-il commencé la diversification alimentaire ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                    <p class="mb-3 text-xl text-center">4.1 Si oui quels aliments a-t-il déjà gouter ? (Légumes, fruits, protéines)?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                    <p class="mb-3 text-xl text-center">4.2 Si oui, quelle texture ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Purée lisse</option>
                        <option value="">Ecrasé</option>
                        <option value="">Petits morceaux</option>
                        <option value="">Normal</option>
                    </select>
                    <p class="mb-3 text-xl text-center">5. Boit-il facilement de l'eau?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                    <p class="mb-3 text-xl text-center">5.1 à quel moment de la journée?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                    <p class="mb-3 text-xl text-center">5.2 Comment boit-il?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Verre</option>
                        <option value="">Biberon</option>
                    </select>
                    <p class="mb-3 text-xl text-center">6. A-t-il des allergies alimentaires?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                    <p class="mb-3 text-xl text-center">6.1 Si oui, lesquelles ?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                    <p class="mb-3 text-xl text-center">7. Comment mange-t-il ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Dans les bras</option>
                        <option value="">Chaise haute</option>
                        <option value="">Transat</option>
                        <option value="">Autre</option> <input class="h-8 mb-2 rounded-xl text-center" type="text">
                    </select>
                    <p class="mb-3 text-xl text-center">8. Les aliments sont donnés:</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Séparément</option>
                        <option value="">Mélangés ensemble</option>
                    </select>
                    <p class="mb-3 text-xl text-center">9. Régurgite-t-il beaucoup ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                    <p class="mb-3 text-xl text-center">10. Mangera-t-il de la viande à la crèche ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                </div>
            </div>
            <!-- moyen ou grand -->
            <h4 class="text-transform: uppercase text-cyan-700 text-xl italic font-bold"> Niveau physiologique Moyen / Grand</h4>
            <div class="mb-[200px] py-5 px-10 lg:w-1/2 h-1/2 bg-fuchsia-200 flex flex-col rounded-lg flex justify-center items-center shadow-2xl flex-col mb-76  ">
                <div id="Relation" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">1. Mange-t-il seul?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                    <p class="mb-3 text-xl text-center">2. Quelle texture ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Ecrasé</option>
                        <option value="">Petits morceaux</option>
                        <option value="">Normal</option>
                    </select>
                    <p class="mb-3 text-xl text-center">3. Mange-t-il de tout ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                    <p class="mb-3 text-xl text-center">4. A-t-il des allegies alimentaires ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                    <p class="mb-3 text-xl text-center">4.1 Si oui, lesquelles ?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                    <p class="mb-3 text-xl text-center">5. Comment mange-t-il ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Chaisse haute</option>
                        <option value="">A table</option>
                        <option value="">Autre</option> <input class="h-8 mb-2 rounded-xl text-center" type="text">
                    </select>
                    <p class="mb-3 text-xl text-center">6. Mangera-t-il de la viande à la crèche ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                </div>

            </div>
            <!-- Le sommeil -->
            <h4 class="text-transform: uppercase text-cyan-700 text-2xl italic font-bold"> Le sommeil</h4>
            <div class="mb-[200px] py-5 px-10 lg:w-1/2 h-1/2 bg-fuchsia-200 flex flex-col rounded-lg flex justify-center items-center shadow-2xl flex-col mb-76  ">
                <div id="Relation" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">1.Comment manifeste-t-il sa fatigue ?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                    <p class="mb-3 text-xl text-center">2. Comment s'endort-t-il ? Dans quelle position?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Doudou</option>
                        <option value="">Tétine</option>
                        <option value="">Berceuse</option>
                        <option value="">Bras</option>
                        <option value="">Lit</option>
                    </select>
                    <p class="mb-3 text-xl text-center">3. Combien de sieste fait-il ?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                    <p class="mb-3 text-xl text-center">4. Combien de temps dort-il généralement ?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                    <p class="mb-3 text-xl text-center">5. Quel sont ces horaires de sieste ?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                    <p class="mb-3 text-xl text-center">6. Se réveille-t-il pendant son sommeil ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                    <p class="mb-3 text-xl text-center">6.1 Quel sont ces horaires de sieste ?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">

                </div>
            </div>

            <!-- Hygiène -->
            <h4 class="text-transform: uppercase text-cyan-700 text-2xl italic font-bold">Hygiène</h4>
            <div class="mb-[200px] py-5 px-10 lg:w-1/2 h-1/2 bg-fuchsia-200 flex flex-col rounded-lg flex justify-center items-center shadow-2xl flex-col mb-76  ">
                <div id="Relation" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                    <p class="mb-3 text-xl text-center">1. Lors des changements de couches, comment réagit-il ?</p>
                    <input class="h-8 mb-2 rounded-xl text-center" type="text">
                    <p class="mb-3 text-xl text-center">2. A-t-il commencer la propreté ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                    <p class="mb-3 text-xl text-center">3. Est-il sujet de façon régulière a la constipation ?</p>
                    <select class="h-8 mb-2 rounded-xl text-center" name="" id="">
                        <option value="">Oui</option>
                        <option value="">Non</option>
                    </select>
                </div>
            </div>
            <h4 class="text-transform: uppercase text-cyan-700 text-2xl italic font-bold">Commentaires</h4>
                <div class="mb-[200px] py-5 px-10 lg:w-1/2 h-1/2 bg-fuchsia-200 flex flex-col rounded-lg flex justify-center items-center shadow-2xl flex-col mb-76  ">
                    <div id="Relation" class="w-[90%] sm:w-3/4 mb-5 flex flex-col">
                        <p class="mb-3 text-xl text-center"> Autre points à savoir</p>
                        <input class="h-40 mb-2 rounded-xl text-" type="text">
                        <button class="mb-10 mt-10 text-xl py-2 px-4 cursor-pointer bg-indigo-300 text-white font-semibold rounded-lg shadow-md hover:bg-pink-400 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Valider</button>
                    </div>

                </div>
        </div>
    </div>


</body>



</html>
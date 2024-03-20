@extends('Pages.Templates.PagesTemplate')
@section('styles')
    <link rel="stylesheet" href="css/accueil.min.css">
@endsection
@section('contenu')
    <div id="Accueil">
        <section class="section1">
            <div>
                <div>
                    <h6>Bienvenu sur SHALOMFINANCE</h6>
                    <p>Des solutions adaptées pour tous besoins : gestion et
                        ouverture de compte en ligne, simulation de crédit,
                        assurance, épargne… une banque présente à vos côtés
                        au quotidien.</p>
                </div>
            </div>
        </section>
        <section class="section2">
            <div>
                <div>
                    <div>
                        <i class="bi bi-shield-lock-fill"></i>
                        <h4>Securise</h4>
                        <p>Bénéficiez des meilleures technologies de sécurité renforcée</p>
                    </div>
                    <div>
                        Nous utilisons les dernières technologies de sécurité pour vous garantir une sécurité renforcée dans
                        vos opérations et pour vous accompagner dans vos opérations bancaires.
                    </div>
                </div>
                <div>
                    <div>
                        <i class="bi bi-phone-flip"></i>
                        <h4>100% en Ligne</h4>
                        <p>
                            Ouvrez votre compte et gérez vos opérations depuis votre smartphone
                        </p>
                    </div>
                    <div>
                        Ouvrez et administrez votre compte en ligne depuis n'importe quel terminal connecté en toute
                        simplicité et accessible 24h/24
                    </div>
                </div>
                <div>
                    <div>
                        <i class="bi bi-headset"></i>
                        <h4>A votre ecoute</h4>
                        <p>
                            Bénéficiez d'un service client entièrement à votre écoute
                        </p>
                    </div>
                    <div>
                        Notre service client multilingue est à votre écoute 24h/jour et vous accompagne à tout moment.
                    </div>
                </div>

            </div>
        </section>
        <section class="section3">
            <h3>Comment ça marche</h3>
            <p>Facile et en 3 étapes, votre compte en ligne est ouvert et opérationnel</p>
            <div>
                <div>
                    <div>
                        <span>01</span>
                    </div>
                    <h4>Remplissez votre demande d'ouverture de compte en ligne</h4>
                    <p>
                        En quelques clics seulement, remplissez votre demande d'ouverture de compte en ligne. Il vous faut
                        juste une adresse email et un numero de téléphone
                    </p>
                </div>
                <div>
                    <div><span>02</span></div>
                    <h4>Envoyez vos documents justificatifs</h4>
                    <p>
                        Notre équipe anti fraude étudie l'authenticité de vos document en temps réel et valide ceux-ci. En
                        quelques minutes, vos documents sont étudiés et validés
                    </p>
                </div>
                <div>
                    <div><span>03</span></div>
                    <h4>Votre compte en ligne ouvert</h4>
                    <p>
                        Après étude de vos documents, votre compte est ouvert et sera fonctionnel. vous recevrez vos
                        informations de connection et votre RIB
                    </p>
                </div>
            </div>
            <div class="gh">
                <a href="http://">Ouvrir un compte en ligne</a>
            </div>
        </section>

        <section class="section4">
            <div>
                <h4>Bénéficiez de votre carte visa dès l'ouverture de votre compte en ligne<sup>*</sup></h4>
                <p>Dès l'ouverture de votre compte et sur demande de votre part, nous vous envoyons à votre adresse votre
                    cate Visa</p>
                <p>Nous vous offrons les meilleures solutions de payement avec les dernières technologie de sécurité</p>
            </div>
            <div>

            </div>
        </section>

        <section class="section5">
            <div>
                <h4>Un groupe responsable qui vous accompagne dans vos <span>projets</span></h4>
            </div>
        </section>

        <section class="section6">
            <div></div>
            <div>
                <div>
                    <h4>Obtenez votre prêt en 72H</h4>
                    <p>Nous vous proposons diverses formules de prêts sur mesure spécialement étudiées pour vous accompagner
                        dans vos projets.</p>
                    <p>
                        Simuler gratuitement votre prêt en ligne et obtenez une réponse de principe dans un delai de 24H
                    </p>
                    <p>
                        <a href="http://">Demander un prêt</a>
                    </p>
                </div>
            </div>
        </section>

        <section class="section7">
            <div>
                <div>
                    <ul id="accordion">
                        <li>
                            <label for="express">Prêt Express<span class="dd">&#x3e;</span></label>
                            <input type="radio" name="accordion" id="express" checked>
                            <div class="contenter">
                                <p>
                                    Le prêt Express est un prêt pouvant atteindre 2000€ et accessible en 72h à un taux de
                                    2.3%
                                </p>
                                <p>
                                    <a href="">Demander un Prêt Express</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <label for="first">Prêt Consommation<span class="dd">&#x3e;</span></label>
                            <input type="radio" name="accordion" id="first">
                            <div class="contenter">
                                <p>
                                    Le prêt consommation est un prêt destiné à vous accompagner dans vos besoin de financer
                                    vos projets de loisirs. Il peut atteindre 3000€ et remboursable sur 60 mois. Ce prêt est
                                    disponible en 72 heures
                                </p>
                                <p>
                                    <a href="">Demander un Prêt Conso</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <label for="second">Prêt Immobilier<span>&#x3e;</span></label>
                            <input type="radio" name="accordion" id="second">
                            <div class="contenter">
                                <p>
                                    Des projets de rénovation ou d'achat immobilier? Le prêt immobilier est tout indiqué
                                    pour vous accompagner. Ce prêt accessible en 72h et pouvant atteindre jusqu'à 120 000€
                                    et remboursable en 60 mois.
                                </p>
                                <p>
                                    <a href="">Demander un Prêt Immobilier</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <label for="third">Prêt Auto<span>&#x3e;</span></label>
                            <input type="radio" name="accordion" id="third">
                            <div class="contenter">
                                <p>
                                    Afin de vous accompagner dans vos projets automobile, nous vous proposons une formule de
                                    prêt spécialement étudiée pour vous.
                                </p>
                                <p>
                                    <a href="">Demander un Prêt Express</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4>Simuler votre Prêt</h4>
                    <p>Evaluez gratuitement votre demande de prêt sans engagement de votre part</p>
                    <select name="type" id="typePret">
                        <option value="">Type de Prêt</option>
                        <option value="Prêt Express">Prêt Express</option>
                        <option value="Prêt Consommation">Prêt Consommation </option>
                        <option value="Prêt Immobilier">Prêt Immobilier </option>
                        <option value="Prêt Auto">Prêt Auto </option>
                    </select>

                    <div>
                        <p>Type de Prêt: <span class="TypePretOutput"></span></p>
                        <p>Montant Souhaité: <span class="MontantSouhaiteOutput"></span></p>
                        <p>Durée de remboursement: <span class="DureeDeRemboursementSouhaiteOutput"></span></p>
                        <p>Mensualité: <span class="MensualiteOutput"></span></p>
                        <p>Taux: <span class="TauxOutput"></span></p>

                    </div>
                    <div class="c1">
                        <h4>Montant Souhaité</h4>
                        <div>
                            <span class="indicator1">dd</span>
                        </div>
                        <div>
                            <span>0</span>
                            <input type="range" name="montant" id="montant" value="0" min="0" max="500000"
                                step="1000" class="montantInput">
                            <span>500000</span>
                        </div>
                    </div>
                    <div>
                        <h4>Durée de remboursement</h4>
                        <div>
                            <span class="indicator1"></span>
                        </div>
                        <div>
                            <span>0</span>
                            <input type="range" name="montant" id="montant" value="0" min="0" max="500000"
                                step="1000" class="montantInput">
                            <span>500000</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section8">

        </section>
    </div>
@endsection
@section('scripts')
    <script src="/js/accueil.js"></script>
@endsection

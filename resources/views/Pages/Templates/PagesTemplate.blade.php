<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShalomFinance</title>

    <link rel="stylesheet" href="css/shalom.min.css">
    @yield('styles')
</head>

<body>
    <div class="topbar" id="topbar">
        <div class="upperbar" id="upperbar">Barre supérieure</div>
        <div class="lowerbar" id="lowerbar">
            <a href="">&nbsp;</a>
            <div>
                <a href="" class="btn"><i class="bi bi-person-lock"></i> <span>Se Connecter</span></a>
                <a href="" class="btn"><i class="bi bi-bank2"></i><span>Ouvrir un compte</span></a>

            </div>
            {{-- <select id="lang-selector">
                <option value="fr">Français</option>
                <option value="en">English</option>
                <!-- Ajoutez d'autres options de langue selon vos besoins -->
            </select> --}}
            <ul>
                <li data-langue="francais"><span class="fi fi-fr"></span>Changer Langue</li>
                <li data-langue="francais"><span class="fi fi-fr"></span>Francais</li>
                <li data-langue="espagnol"><span class="fi fi-es"></span>Español</li>
                <li data-langue="anglais"><span class="fi fi-gb"></span>English</li>
            </ul>
            <input type="checkbox" name="hamberger" id="hamberger">
            <label for="hamberger">
                <span></span>
            </label>
        </div>
    </div>

    @include('Pages.Templates.includes.aside')

    <div class="content">
        @yield('contenu')
    </div>
    <footer>
        footer
    </footer>
    <div id="cookie" class="cookie">
        <h4>Politique de confidentiel</h4>
        <p class="cont dismissCookie">Continuer sans accepter</p>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim eveniet quaerat laudantium facilis architecto
            doloremque, quam ad ducimus at tenetur corporis, perferendis sapiente saepe numquam, sed quae dicta
            repellendus dolorum?
        </p>
        <p class="dismissCookie">Accepter</p>
    </div>
    <div class="modalWrapper" style="display: none">
        <div class="modal">
            <h6 class="modalTitle">Titre Modal</h6>
            <p class="modalContent">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto mollitia qui
                unde laboriosam,
                aspernatur odio id obcaecati porro hic eligendi suscipit aliquam! Porro consequatur explicabo hic saepe
                beatae, exercitationem doloremque.</p>
            <p class="boutonContainer">
                <button>Actions Modal</button>
            </p>
        </div>
    </div>
    <input type="hidden" id="params" value={{ $params }} data-pays={{ SicoHelpers\Helpers::pays('params') }}>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="/js/shalom.js" type="module"></script>
    @yield('scripts')
</body>

</html>

<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jany Gofflot | Panneau solaire</title>
    <meta name="author" content="Hemonet Teddy">
    <meta name="publisher" content="COMSEA">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="canonical" href="https://janygofflot.fr" />
    <link rel="shortcut icon" href="assets/images/logo.png">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body class="w-full lg:h-screen relative flex flex-col lg:text-lg text-sm justify-between">
    <img src="assets/images/bg.png" alt="Background"
        class="absolute bottom-0 left-0 w-full h-full object-cover object-center -z-10">
    <!-- -->
    <div class="w-full lg:h-[75%] flex lg:flex-row flex-col justify-center items-center lg:mb-0 mb-8">
        <div class="lg:w-[50%] w-full h-full flex flex-col justify-start items-center lg:mb-0 mb-4">
            <img src="assets/images/logo.png" alt="Logo Jany Gofflot" class="w-[40%]">
        </div>
        <div class="lg:w-[50%] w-[90%] h-full flex flex-col justify-center items-center">
            <div class="flex flex-row justify-start items-center space-x-2 mb-2">
                <img src="assets/images/construit.png" alt="Construction" class="lg:w-[48px] w-[32px]">
                <h2 class="lg:text-3xl text-2xl font-semibold">Site en construction</h2>
            </div>
            <h2 class="lg:text-3xl text-2xl font-semibold mb-4">Contactez-nous !</h2>
            <?php $isPosted = isset($_SESSION['success']);
            if ($isPosted && !$_SESSION['success']) : ?>
            <p class="bg-red-300 text-red-700 rounded py-1 px-3 border border-red-700"><?= $_SESSION['error_msg'] ?>
            </p>
            <?php elseif ($isPosted && $_SESSION['success']) : ?>
            <p class="bg-lime-400 text-green-800 py-1 px-3 border border-green-800">Votre mail a bien été
                envoyé</p>
            <?php endif; ?>
            <form action="assets/php/mail.php" method="post"
                class="w-[90%] flex flex-col justify-center items-center space-y-4">
                <div class="w-full grid grid-cols-2 gap-x-8 gap-y-4">
                    <div>
                        <input type="text" id="name" name="name" class="bg-[#E7E7E7] w-full py-1 px-2"
                            placeholder="Nom*">
                    </div>
                    <div>
                        <input type="text" id="firstname" name="firstname" class="bg-[#E7E7E7] w-full py-1 px-2"
                            placeholder="Prénom*">
                    </div>
                </div>
                <div class="w-full">
                    <input type="text" id="mail" name="mail" class="bg-[#E7E7E7] w-full py-1 px-2" placeholder="Email*">
                </div>
                <div class="w-full">
                    <input type="text" id="subject" name="subject" class="bg-[#E7E7E7] w-full py-1 px-2"
                        placeholder="Sujet*">
                </div>
                <div class="w-full">
                    <textarea name="message" id="message" class="bg-[#E7E7E7] w-full py-1 px-2" placeholder="message"
                        rows="3"></textarea>
                </div>
                <div class="w-full flex flex-row items-center space-x-4 lg:text-sm text-xs">
                    <input type="checkbox" name="validate" id="validate">
                    <label for="validate">En soumettant ce formulaire, j'accepte que les informations saisies soient
                        exploitées dans le cadre de la demande de contact et de la relation commerciale qui peut en
                        découler.</label>
                </div>
                <p class="underline lg:text-sm text-xs w-full">Ce site est protégé par reCAPTCHA et la Politique
                    de
                    Confidentialité
                    et les Conditions d'utilisation de Google.</p>
                <input type="hidden" name="recaptcha-response" id="recaptchaResponse">
                <div class="flex flex-col justify-start items-start w-full">
                    <input type="submit" value="Envoyer" class="text-white bg-[#DEC7A1] py-1 px-4">
                    <p class="lg:text-sm text-xs">*Champs obligatoires</p>
                </div>
            </form>
        </div>
    </div>
    <!-- -->
    <div class="w-full lg:h-[25%] flex lg:flex-row flex-col-reverse pb-4 lg:pb-0">
        <div
            class="lg:w-[60%] w-full h-full flex flex-col justify-end items-center text-white lg:text-2xl lg:text-xl text-sm lg:pb-6 space-y-3 drop-shadow-[0px_0px_4px_rgba(0,0,0,1)]">
            <div
                class="lg:w-[60%] w-[80%] flex lg:flex-row flex-col lg:justify-between justify-center lg:items-center items-start space-y-3 lg:space-y-0">
                <div class="flex flex-row justify-start items-center space-x-4">
                    <img src="assets/images/phone.png" alt="Téléphone" class="lg:w-[32px] w-[20px]">
                    <p>+33 6 84 29 71 83</p>
                </div>
                <div class="flex flex-row justify-start items-center space-x-4">
                    <img src="assets/images/mail.png" alt="Mail" class="lg:w-[32px] w-[20px]">
                    <p>contact@janygofflot.fr</p>
                </div>
            </div>
            <div class="lg:w-[60%] w-[80%] flex flex-row justify-start items-center space-x-4">
                <img src="assets/images/localisation.png" alt="Localisation" class="lg:w-[32px] w-[20px]">
                <p>6a rue de l’artisanat, 08000 Charleville-Mézières</p>
            </div>
        </div>
        <div class="lg:w-[40%] w-full h-full lg:flex hidden justify-center items-center">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2578.2881938171117!2d4.728324077125804!3d49.74302097146579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea12196322b339%3A0x2ada7611ed0c668!2s6%20Rue%20de%20l&#39;Artisanat%2C%2008000%20Charleville-M%C3%A9zi%C3%A8res!5e0!3m2!1sfr!2sfr!4v1714121961160!5m2!1sfr!2sfr"
                class="w-[80%] h-[80%] drop-shadow-[10px_10px_4px_rgba(0,0,0,0.5)]"></iframe>
        </div>
    </div>

    <script src="https://www.google.com/recaptcha/api.js?render=6LeY-8cpAAAAAKz8HWMXDMOjGFjoQeKEGpiN5d4B"></script>
    <script src="assets/js/reCaptcha.js"></script>
</body>

</html>
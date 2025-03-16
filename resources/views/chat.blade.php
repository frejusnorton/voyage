<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
    <div>
        <h1>Envoyer un Message</h1>
        <!-- Formulaire d'envoi de message -->
        <form id="sendMessageForm">
            <textarea id="message" placeholder="Écris ton message ici..." required></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>

</html>

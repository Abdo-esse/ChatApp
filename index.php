<!DOCTYPE html>
<html lang="fr" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <!-- Tailwind CSS -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Styles personnalisés -->
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #22c55e 0%, #ec4899 100%);
        }
        .light {
            background-color: #f9fafb; /* Fond clair */
            color: #374151; /* Texte gris foncé */
        }
        .light .bg-indigo-500 {
            background-color: #ffffff; /* Fond blanc pour les éléments en mode clair */
        }
        .light .text-white {
            color: #374151; /* Texte gris foncé pour les éléments en mode clair */
        }
        .light .border-custom-pink {
            border-color: #ec4899; /* Conserver la bordure rose */
        }
        .light .border-custom-green {
            border-color: #22c55e; /* Conserver la bordure verte */
        }
        .light .gradient-bg {
            background: linear-gradient(135deg, #22c55e 0%, #ec4899 100%); /* Garder le dégradé */
        }
        .light button {
            color: #ffffff; /* Texte blanc pour les boutons */
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        custom: {
                            green: '#22c55e',
                            pink: '#ec4899',
                            black: '#111111'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-custom-black">
    <!-- Navigation -->
    <nav class="bg-indigo-500 shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-custom-pink">ChatApp</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-white hover:text-custom-green">Accueil</a>
                    <a href="#about" class="text-white hover:text-custom-green">À propos</a>
                    <a href="#contact" class="text-white hover:text-custom-green">Contact</a>
                    <a href="#contact" class="text-white hover:text-custom-green">log-in</a>
                    <a href="#contact" class="text-white hover:text-custom-green">Sign-in</a>
                    <button id="theme-toggle" class="px-4 py-2 bg-custom-green text-white rounded-lg hover:bg-opacity-80 transition duration-300">
                        Basculer le mode
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 gradient-bg" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-white mb-4">
                    Bienvenue sur ChatApp
                </h1>
                <p class="text-xl text-white mb-8">
                    La meilleure plateforme pour communiquer avec vos amis et collègues
                </p>
                <div class="flex justify-center space-x-4">
                    <button class="px-8 py-3 bg-custom-pink text-white rounded-lg hover:bg-opacity-80 transition duration-300 hover:scale-105">
                        Commencer gratuitement
                    </button>
                    <button class="px-8 py-3 bg-indigo-500 text-white rounded-lg hover:bg-opacity-80 transition duration-300 hover:scale-105">
                        En savoir plus
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-indigo-500" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-custom-pink">À propos de nous</h2>
                <p class="mt-4 text-white">Découvrez ce qui rend ChatApp unique</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-custom-black rounded-lg border border-custom-green hover:scale-105 transition duration-300">
                    <div class="w-12 h-12 bg-custom-green rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-custom-pink">Sécurisé</h3>
                    <p class="text-white">Vos messages sont chiffrés de bout en bout</p>
                </div>
                <div class="p-6 bg-custom-black rounded-lg border border-custom-pink hover:scale-105 transition duration-300">
                    <div class="w-12 h-12 bg-custom-pink rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-custom-green">Rapide</h3>
                    <p class="text-white">Messages instantanés en temps réel</p>
                </div>
                <div class="p-6 bg-custom-black rounded-lg border border-custom-green hover:scale-105 transition duration-300">
                    <div class="w-12 h-12 bg-custom-green rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-custom-pink">Communautaire</h3>
                    <p class="text-white">Créez et rejoignez des groupes</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Chat Section -->
    <section id="chat" class="py-20 bg-custom-black" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-custom-green">Chat en Temps Réel</h2>
            </div>
            <div id="messages" class="h-64 overflow-y-auto mb-4 border border-custom-pink p-4 rounded-lg">
                <!-- Messages apparaîtront ici -->
            </div>
            <input type="text" id="message" placeholder="Tapez votre message ici" class="w-full p-2 rounded-lg bg-indigo-500 border border-custom-pink text-white">
            <button onclick="sendMessage()" class="mt-4 px-8 py-3 gradient-bg text-white rounded-lg hover:opacity-90 transition duration-300">
                Envoyer
            </button>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-custom-black" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-custom-green">Contactez-nous</h2>
                    <p class="mt-4 text-white">Une question ? N'hésitez pas à nous écrire</p>
                </div>
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-white">Nom</label>
                        <input type="text" class="mt-1 block w-full rounded-md bg-indigo-500 border-custom-pink text-white focus:border-custom-green focus:ring-custom-green">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-white">Email</label>
                        <input type="email" class="mt-1 block w-full rounded-md bg-indigo-500 border-custom-pink text-white focus:border-custom-green focus:ring-custom-green">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-white">Message</label>
                        <textarea rows="4" class="mt-1 block w-full rounded-md bg-indigo-500 border-custom-pink text-white focus:border-custom-green focus:ring-custom-green"></textarea>
                    </div>
                    <button type="submit" class="w-full py-3 gradient-bg text-white rounded-lg hover:opacity-90 transition duration-300">
                        Envoyer
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-indigo-500 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold text-custom-pink">ChatApp</h3>
                    <p class="mt-4 text-gray-400">La meilleure façon de rester connecté avec vos proches.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-custom-green">Liens rapides</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-custom-pink">Accueil</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-custom-pink">À propos</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-custom-pink">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-custom-green">Légal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-custom-pink">Conditions d'utilisation</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-custom-pink">Politique de confidentialité</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-custom-green">Suivez-nous</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-custom-pink hover:text-custom-green transition duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-custom-pink hover:text-custom-green transition duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-custom-pink hover:text-custom-green transition duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953l11.57-4.458c.532-.204.989.121.832.939z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>© 2024 ChatApp. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Initialiser AOS
        AOS.init();

        // Basculer le mode sombre/clair
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;

        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark');
            body.classList.toggle('light');
            localStorage.setItem('theme', body.classList.contains('dark') ? 'dark' : 'light');
        });

        // Appliquer le thème sauvegardé
        const savedTheme = localStorage.getItem('theme') || 'dark';
        body.classList.add(savedTheme);

        // WebSocket Chat
        const socket = new WebSocket("ws://localhost:8080");
        const messagesDiv = document.getElementById('messages');

        socket.onopen = () => {
            console.log("Connexion au serveur WebSocket établie !");
        };

        socket.onmessage = (event) => {
            const message = document.createElement('p');
            message.textContent = event.data;
            messagesDiv.appendChild(message);
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        };

        socket.onerror = (error) => {
            console.error}
            </script>
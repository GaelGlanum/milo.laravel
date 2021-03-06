<x-app-layout>
    <x-slot name="header">


        <header class='header bg-dark py-3 text-white'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3">
                        <figure>
                            <img src="images/frame57.svg">
                        </figure>
                    </div>
                    <div class="col-9">
                        <nav class='navbar navbar-expand-lg'>
                            <ul class='navbar-nav me-right  mb-2 mb-lg-0'>
                                <li class='nav-item'>
                                    <a class='nav-link'>Statistiques</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link'>Se connecter</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <body>
        <main>
            <form class='mx-5 mt-5' method='post'>
                @csrf
                <div class='mb-3'>
                    <label for='pseudo' class='form-label fw-bold px-3'>Pseudo</label>
                    <input
                        type='text'
                        name='pseudo'
                        required
                    >
                </div>
                </div>
                <div class='mb-3'>
                    <label for='password' class='form-label fw-bold px-3'>Mot de passe</label>
                    <input
                        type='password'
                        id="password"
                        required
                        name='password'
                        value=''>
                </div>
                <button type='submit' class='btn btn-primary my-3'>Envoyer</button>
            </form>

        </main>
        </body>
        <footer class='footer navbar bottom bg-dark  text-white py-3'>
            <p class='mx-auto'>Formation d??veloppeur Web - Ga??l Carmona</p>
        </footer>
    </x-slot>

</x-app-layout>

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
        <table>
            <thead>
                <th>ID</th>
                <th>Pseudo</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{Auth::id()}}</td>
                    <td><a href="{{ route('displayPlayerProfile', Auth::id()) }}">{{Auth::user()->pseudo}}</a></td>
                    <td></td>
                    <td></td>
                </tr>
                    @foreach($associateUsers as $associateUser)
                <tr>
                        <td>{{$associateUser->user_id}}</td>
                        <td><a href="{{ route('displayPlayerProfile', $associateUser->user_id) }}">{{ \App\Models\User::where('id',$associateUser->user_id)->first()->pseudo}}</a></td>
                        <td><a href="{{ route('editPlayer', $associateUser->user_id) }}"> modifier</a></td>
                        <td><a href="{{ route('player.delete', $associateUser->user_id) }}">supprimer</a></td>
                </tr>
                    @endforeach
            </tbody>
        </table>

    </main>
    </body>
    <footer class='footer navbar bottom bg-dark  text-white py-3'>
      <p class='mx-auto'>Formation d??veloppeur Web - Ga??l Carmona</p>
    </footer>
    </x-slot>

</x-app-layout>

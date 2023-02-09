<!--awal MENU NAVBAR-->
<div>
    <nav class="navbar navbar-expand-lg navbar-light bghd">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item bghd2">
                    <a class="nav-link txp" href="#buku">DAFTAR BUKU</a>
                </li>

                <li class="nav-item bghd2">
                    <a class="nav-link txp" href="#akupinjam">PINJAM BUKU</a>
                </li>
            </ul>
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-danger">{{ auth()->user()->name }} Logout</button>
            </form>
        </div>
    </nav>
</div>
<!--akhir MENU NAVBAR-->

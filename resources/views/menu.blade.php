<!--awal MENU NAVBAR-->
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/buku">DATA BUKU</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/mahasiswa">DATA MAHASISWA</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/petugas">DATA PETUGAS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/pinjam">DATA PEMINJAMAN</a>
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

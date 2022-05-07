<x-app-layout>
    <h1 class="visually-hidden">Sidebars examples</h1>
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">MercaditoGT</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                    Inicio
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                    POS
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                    Ventas
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                    Productos
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                    Clientes
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                    Tarjetas de Regalo
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
    <div class="container mt-5">
        <h2>Ordenes de hoy</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cliente</th>
                <th scope="col">Monto</th>
                <th scope="col">Caja</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Pirulo</td>
                <td>Q300.00</td>
                <td>Raul</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Lorena</td>
                <td>Q2000.00</td>
                <td>Guido</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td >Roberto</td>
                <td>Q1000.00</td>
                <td>Gonzalo</td>
            </tr>
            </tbody>
        </table>

    </div>
</x-app-layout>

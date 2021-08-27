<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Content Test') }}
        </h2>
    </x-slot>


    <section class="chamada containerTest">
        <div class="chamada__img">
            <img src="img/home/svg/Azul.svg" alt="" class="chamada__img--prancheta1">
            <!--svg class="chamada__img--prancheta1" xmlns="http://www.w3.org/2000/svg" width="1200"
            height="1200"
                 viewBox="0 0 1200 1200">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #5fc6c5;
                            fill-rule: evenodd;
                        }
                    </style>
                </defs>
                <g id="Prancheta_1" data-name="Prancheta 1">
                    <path id="Forma_1_copiar" data-name="Forma 1 copiar" class="cls-1" d="M1241.99,1057.38S918.359,1217.04,687.9,1134.73,512.509,808.594,595.084,745.179,724.722,594.462,703.371,535.636,577.81,444.759,531.8,459.7,368.736,378.656,401.012,297.967c4.36-10.9,18.418-186.256,248.919-225.011s582.219,0,582.219,0Z"/>
                </g>
            </svg-->
            <img src="img/sapinho.PNG" alt="" class="chamada__img--prancheta2">
        </div>
        <div class="chamada__content">
            <h1 class="chamada__titulo">
                Lorem ipsum dolor
            </h1>
            <p class="chamada__texto">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas et justo tristique, consequat eros ac, malesuada nisl.                </p>
            <div class="button">
                <button type="button" class="btn btn-outline-secondary botao button--content chamada__botao">
                    <a class="button--content--a chamada__botao--content" href="#">Matricule-se!</a>
                    <span class="visually-hidden">Button</span>
                </button>
                <button type="button" class="btn btn-outline-secondary botao button--content chamada__botao">
                    <a class="button--content--a chamada__botao--content" href="#">Torne-se um Professor!</a>
                    <span class="visually-hidden">Button</span>
                </button>
            </div>
        </div>
    </section>
    <section class="macrotemas containerTest">
        <div class="row row-cols-1 row-cols-md-2 g-4 macrotemas__cards">
            <div class="col macrotemas__cards--background">
                <a href="#" class="card--button">
                    <div class="card card-macrotemas">
                        <div class="macrotemas__cards--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                 class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                            </svg>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Finances</h5>
                            <p class="card-text">
                                IB, corporative, personal, ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col macrotemas__cards--background">
                <a href="#" class="card--button">
                    <div class="card card-macrotemas">
                        <div class="macrotemas__cards--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                 class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                            </svg>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Finances</h5>
                            <p class="card-text">
                                IB, corporative, personal, ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col macrotemas__cards--background">
                <a href="#" class="card--button">
                    <div class="card card-macrotemas">
                        <div class="macrotemas__cards--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                 class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                            </svg>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Finances</h5>
                            <p class="card-text">
                                IB, corporative, personal, ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col macrotemas__cards--background">
                <a href="#" class="card--button">
                    <div class="card card-macrotemas">
                        <div class="macrotemas__cards--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                 class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                            </svg>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Finances</h5>
                            <p class="card-text">
                                IB, corporative, personal, ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col macrotemas__cards--background">
                <a href="#" class="card--button">
                    <div class="card card-macrotemas">
                        <div class="macrotemas__cards--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                 class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                            </svg>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Finances</h5>
                            <p class="card-text">
                                IB, corporative, personal, ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col macrotemas__cards--background">
                <a href="#" class="card--button">
                    <div class="card card-macrotemas">
                        <div class="macrotemas__cards--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                 class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                            </svg>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Finances</h5>
                            <p class="card-text">
                                IB, corporative, personal, ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col macrotemas__cards--background">
                <a href="#" class="card--button">
                    <div class="card card-macrotemas">
                        <div class="macrotemas__cards--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                 class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                            </svg>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Finances</h5>
                            <p class="card-text">
                                IB, corporative, personal, ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col macrotemas__cards--background">
                <a href="#" class="card--button">
                    <div class="card card-macrotemas">
                        <div class="macrotemas__cards--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                 class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                            </svg>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Finances</h5>
                            <p class="card-text">
                                IB, corporative, personal, ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col macrotemas__cards--background">
                <a href="#" class="card--button">
                    <div class="card card-macrotemas">
                        <div class="macrotemas__cards--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                 class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                            </svg>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Finances</h5>
                            <p class="card-text">
                                IB, corporative, personal, ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col macrotemas__cards--background">
                <a href="#" class="card--button">
                    <div class="card card-macrotemas">
                        <div class="macrotemas__cards--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                 class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                            </svg>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Finances</h5>
                            <p class="card-text">
                                IB, corporative, personal, ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col macrotemas__cards--background">
                <a href="#" class="card--button">
                    <div class="card card-macrotemas">
                        <div class="macrotemas__cards--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                 class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                            </svg>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Finances</h5>
                            <p class="card-text">
                                IB, corporative, personal, ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col macrotemas__cards--background">
                <a href="#" class="card--button">
                    <div class="card card-macrotemas">
                        <div class="macrotemas__cards--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                                 class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                                <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z"/>
                            </svg>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Finances</h5>
                            <p class="card-text">
                                IB, corporative, personal, ...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="sobre">
        <div class="sobre__firstline">
            <div class="sobre__conteudo">
                <h2 class="sobre__titulo">Sobre</h2>
                <p class="sobre__texto">Criamos aplicativos personalizados para <strong class="sobre__texto--destaque">todas as pessoas</strong>!</p>
                <p class="sobre__texto">
                    A manutenção de um aplicativo não pode ser um custo extra para o cliente, Na Apeperia você assina nosso serviço e a manutenção já está inclusa. Assim, você não se preocupa com manutenção, é tudo por nossa conta.
                </p>
                <p class="sobre__texto sobre__texto--destaque">
                    Conte com uma equipe especializada e exclusiva pra projetos incríveis em qualquer plataforma.
                </p>
                <p class="sobre__texto">Desenvolvemos aplicativos para todas as plataformas</p>
            </div>
            <div class="sobre__imagem">
                <img src="/img/sapinho-3.PNG" alt="" class="sobre__img--mulher">
            </div>
        </div>
        <div class="sobre__scndline">
            <div class="sobre__imagem">
                <img src="/img/sapinho-2.PNG" alt="" class="sobre__img--homem">
            </div>
            <div class="sobre__conteudo">
                <p class="sobre__texto">Criamos aplicativos personalizados para <strong class="sobre__texto--destaque">todas as pessoas</strong>!</p>
                <p class="sobre__texto">
                    A manutenção de um aplicativo não pode ser um custo extra para o cliente, Na Apeperia você assina nosso serviço e a manutenção já está inclusa. Assim, você não se preocupa com manutenção, é tudo por nossa conta.
                </p>
                <p class="sobre__texto sobre__texto--destaque sobre__texto--divisao">
                    Conte com uma equipe especializada e exclusiva pra projetos incríveis em qualquer plataforma.
                </p>
                <ul class="sobre__plataformas">
                    <li><img src="img/android.png" alt="Ícone do Android"></li>
                    <li><img src="img/blackberry.png" alt="Ícone da Blackberry"></li>
                    <li><img src="img/apple.png" alt="Ícone da Apple"></li>
                    <li><img src="img/windowsphone.png" alt="Ícone da Microsoft"></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="carousel containerTest">
        <h2 class="destaques__titulo">Destaques</h2>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5" class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6" class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel__content">
                        <div class="carousel__content--img">
                            <img class="carousel__content--img" src="img/TesteArtboard-1.png" alt="">
                        </div>

                        <div class="containerTest">
                            <div class="carousel-caption text-start">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel__content">
                        <div class="carousel__content--img">
                            <img class="arousel__content--img" src="img/TesteArtboard-2.png" alt="">
                        </div>

                        <div class="containerTest">
                            <div class="carousel-caption text-start">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel__content">
                        <div class="carousel__content--img">
                            <img class="arousel__content--img" src="img/TesteArtboard-3.png" alt="">
                        </div>

                        <div class="containerTest">
                            <div class="carousel-caption text-start">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel__content">
                        <div class="carousel__content--img">
                            <img class="arousel__content--img" src="img/TesteArtboard-4.png" alt="">
                        </div>

                        <div class="containerTest">
                            <div class="carousel-caption text-start">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel__content">
                        <div class="carousel__content--img">
                            <img class="arousel__content--img" src="img/TesteArtboard-5.png" alt="">
                        </div>

                        <div class="containerTest">
                            <div class="carousel-caption text-start">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel__content">
                        <div class="carousel__content--img">
                            <img class="arousel__content--img" src="img/TesteArtboard-6.png" alt="">
                        </div>

                        <div class="containerTest">
                            <div class="carousel-caption text-start">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="diferenciais containerTest">
        <ul class="diferenciais__lista">
            <li class="diferenciais__item diferenciais__item--tempo">
                <h2 class="item__titulo">Tempo</h2>
                <p class="item__texto">Tempo é importante! Trabalhamos em ritmo acelerado, atendendo rigorosamente aos prazos.</p>
            </li>
            <li class="diferenciais__item diferenciais__item--foco">
                <h2 class="item__titulo">Foco</h2>
                <p class="item__texto">Focamos no empreendimento! Oferecemos serviços de qualidade com preços acessíveis.</p>
            </li>
            <li class="diferenciais__item diferenciais__item--especialistas">
                <h2 class="item__titulo">Especialistas</h2>
                <p class="item__texto">Equipe experiente e especializada! Testamos todos os produtos antes do lançamento.</p>
            </li>
        </ul>
    </section>
    <section class="institucional containerTest">
        <h2 class="institucional__titulo">Institucional</h2>
        <div class="institucional__conteudo">
            <div class="institucional__informacoes">
                <p class="institucional__descricao">Um pouco mais sobre o Tabula</p>
                <address class="institucional__endereco">
                    Rua Tabulaland, 1234 <br>
                    vila tabulinha, São Paulo

                    <article class="institucional__contato">
                        <p>
                            <a href="tel:+5511964004021" class="institucional__contato-telefone">
                                (11) 5571-2751
                            </a> ou
                            <a href="mailto:leo.hamp@gmail.com" class="institucional__contato-email">
                                suporte@tabula.com.br                                    </a>
                        </p>
                    </article>
                </address>
            </div>
            <iframe class="institucional__video" src="https://www.youtube.com/embed/MXJFfIeZBc0" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="institucional__background">
        </div>
    </section>
    <section class="parceiros containerTest">
        <h2 class="parceiros__titulo">Parceiros</h2>
        <ul class="parceiros__lista">
            <li class="card parceiros__item">
                <h2 class="parceiros__item--titulo">Tempo</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                </svg>
            </li>
            <li class="card parceiros__item">
                <h2 class="parceiros__item--titulo">Tempo</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                </svg>
            </li>
            <li class="card parceiros__item">
                <h2 class="parceiros__item--titulo">Tempo</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                </svg>
            </li>
            <li class="card parceiros__item">
                <h2 class="parceiros__item--titulo">Tempo</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                </svg>
            </li>
            <li class="card parceiros__item">
                <h2 class="parceiros__item--titulo">Tempo</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                </svg>
            </li>
            <li class="card parceiros__item">
                <h2 class="parceiros__item--titulo">Tempo</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                </svg>
            </li>
            <li class="card parceiros__item">
                <h2 class="parceiros__item--titulo">Tempo</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                </svg>
            </li>
            <li class="card parceiros__item">
                <h2 class="parceiros__item--titulo">Tempo</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                </svg>
            </li>
            <li class="card parceiros__item">
                <h2 class="parceiros__item--titulo">Tempo</h2>
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                </svg>
            </li>
        </ul>
    </section>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            </div>
        </div>
    </div>
</x-app-layout>

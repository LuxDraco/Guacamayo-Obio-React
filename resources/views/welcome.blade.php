@extends('layouts.app')

@section('content')
    <div class="w-100 p-0 m-0">

        <div class="pantalla-inicio-1">
            <div class="d-flex row p-0 m-0">
                <div
                    class="col-md-3 pt-0 pr-0 pb-0 d-flex align-items-center"
                    style="padding-left: calc(1rem + 15px);"
                >
                </div>

                <div class="col-md-9 p-0">
                    <img
                        src="{{ asset('imgs/cacao.jpg') }}"
                        alt="test" class="w-100"
                        style="clip-path: polygon(0 0, 100% 0, 100% 100%, 48% 100%); height: 100vh; object-fit: cover;"/>
                </div>
            </div>

            <div
                class="d-flex row p-0 m-0 position-absolute justify-content-end "
                style="left: 0; top: 0; right: 0; bottom: 0;"
            >
                <div
                    class="col-md-5 pt-0 pr-0 pb-0 d-flex flex-column justify-content-end"
                    style="padding-left: calc(1rem + 15px); height: 90%;"
                >
                    <span
                        class="font-weight-bold mb-5"
                        style="font-family: 'Baukasten', sans-serif; font-size: 5vw;"
                    >
                        ALIMENTO DE LOS DIOSES
                    </span>

                        <span
                            style="font-size: 2vw;"
                        >
                        ¿Sabias que...?
                        El cacao es un fruto que en su interior contiene en vainas entre 20 y 30 granos de unos 2cms de largo.
                    </span>
                </div>

                <div class="col-md-7 p-0 bg-transparent">
                </div>
            </div>
        </div>

        <div class="pantalla-inicio-2">
            <div class="d-flex p-0 m-0">
                <div class="position-relative" style="height: 100vh; width: 100vw;">
                    <div
                        class="position-absolute"
                        style="height: 100vh; width: 100%; background: rgba(27,30,33,0.4); z-index: 10;"></div>
                    <img
                        src="{{ asset('imgs/cacao.jpg') }}"
                        alt="test" class="w-100 position-absolute"
                        style="height: 100vh; object-fit: cover; left: 0; top: 0; right: 0; bottom: 0;"/>

                    <div
                        class="p-0 d-flex flex-column justify-content-center align-items-center position-absolute"
                        style="z-index: 11; height: 100vh; width: 100vw;"
                    >
                        <div class="p-5" style="background: rgba(99,101,105,0.75)">
                            <span
                                class="font-weight-bold mb-5 text-white"
                                style="font-family: 'Baukasten', sans-serif; font-size: 40px;"
                            >
                            ALIMENTO DE LOS DIOSES
                        </span>

                            <span
                                class="text-white text-justify"
                                style="font-size: 30px;"
                            >
                            ¿Sabias que...?
                            El cacao es un fruto que en su interior contiene en vainas entre 20 y 30 granos de unos 2cms de largo.
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="px-3"
            style="margin-top: 100px; margin-bottom: 100px;"
        >
            <div
                class="row p-0 m-0 h-100"
                style="background: #757B63; border-radius: 30px;"
            >
                <div
                    class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center p-5"
                    style="height:auto;"
                >
                    <iframe width="100%" height="100%"
                            style="max-height: 700px;"
                            src="https://www.youtube.com/embed/mDGASSFWSOg"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>

                <div
                    class="col-sm-12 col-md-6 d-flex justify-content-center align-items-center p-5"
                    style="height: auto"
                >
                    <div
                        class="d-flex flex-column justify-content-center align-items-center text-white"
                    >
                        <span class="text-center texto-verde-1">
                            AMIGABLES CON LA <span style="color: #FCAF1A">BIO</span>DIVERSIDAD
                        </span>

                        <span class="text-justify texto-verde-2">
                            Los productos del programa OBIO respetan el balance de estos tres conceptos
                            productivos y comerciales.
                        </span>
                    </div>
                </div>
            </div>
        </div>

        @auth
            <div
                class="row p-0 m-0"
                style="margin-bottom: 100px;"
            >
                <div
                    class="col-sm-12 col-md-7 d-flex justify-content-start align-items-center border"
                    style="
                background: #F58234;
                border-top-right-radius: 50px;
                border-bottom-right-radius: 50px;
                height: 100px;"
                >
                <span
                    class="text-white font-weight-bold"
                    style="font-size: 2rem; font-family: 'AntonioC', sans-serif"
                >
                    SUGERENCIAS DE PRODUCTOS
                </span>
                </div>
            </div>

            <div id="carousel-react-sugerencia" style="margin-top: 100px; margin-bottom: 100px;"></div>
        @endauth

        <div
            class="row p-0 m-0"
            style="margin-top: 150px;"
        >
            <div
                class="col-sm-12 col-md-7 d-flex justify-content-start align-items-center border"
                style="
                background: #FCAF1A;
                border-top-right-radius: 50px;
                border-bottom-right-radius: 50px;
                height: 100px;"
            >
                <span
                    class="text-white font-weight-bold"
                    style="font-size: 2rem; font-family: 'AntonioC', sans-serif"
                >
                    LO MÁS VENDIDO
                </span>
            </div>
        </div>

        <div id="carousel-react-mas-vendido" style="margin-top: 100px; margin-bottom: 100px;"></div>

        <div
            class="row p-0 m-0"
        >
            <div
                class="col-sm-12 col-md-6 d-flex justify-content-start align-items-center p-0 m-0"
                style="height: 500px; max-width: 100vw;"
            >
                <img
                    class="w-100 h-100"
                    style="object-fit: cover;"
                    src="{{ asset('imgs/obio-1.jpeg') }}"
                    alt="Imagen 1"
                />
            </div>

            <div
                class="col-sm-12 col-md-6 d-flex flex-column justify-content-center align-items-center p-5 m-0 text-white"
                style="height: 500px; background: #BD9A5F;"
            >
                <span class="texto-verde-1">
                    ¿Qué es OBIO?
                </span>

                <span class="texto-que-es text-justify">
                    Obio es una iniciativa de promoción, distribución y de logística que facilita a las cooperativas y empresas comunales, la comercialización de sus productos orgánicos y sustentables, mediante el comercio electrónico, así como, en diferentes espacios comerciales de la ciudad de México y otras ciudades del país.
                </span>
            </div>
        </div>

    </div>
@endsection

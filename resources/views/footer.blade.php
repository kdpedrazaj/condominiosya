<footer class="footer bg-white relative pt-1 border-b-2 border-indigo-700">
    <div class="container mx-auto px-6">

        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                <div class="flex flex-col">
                    @include('images.logo')
                </div>
                <div class="flex flex-col">
                    <p class="text-center text-4xl font-bold text-indigo-700 uppercase mt-4 md:mt-0 mb-2">¿Quienes
                        Somos?</p>
                    <p class="text-indigo-700 text-2xl">Somos un grupo de estudiantes de UPTAMCA.<br>(Universidad
                        Politecnica Territorial de los Altos Mirandinos "Cecilio
                        Acosta")<br>Cursantes del 3er año academico en la carrera de PNF-Informatica<br><br>Integrantes:<br>Rodrigo
                        Barazarte C.I: 25.210.404<br>Kevin Pedraza C.I:
                        20.413.448<br>Yairi Silva C.I: 27.040.375</p>
                </div>
                <div class="flex flex-col">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1962.411868096365!2d-67.03926894185047!3d10.35597473666883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a8cf3c9c7830b%3A0x3fa03cc454b9d99f!2sUPTAMCA!5e0!3m2!1ses!2sve!4v1610074522582!5m2!1ses!2sve"
                        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-6">
        <div class="mt-16 border-t-2 border-indigo-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-2xl text-indigo-700 font-bold mb-2">
                    © 2020 by Condominiosya.com - {{ Route::currentRouteName() }}
                </p>
            </div>
        </div>
    </div>
</footer>

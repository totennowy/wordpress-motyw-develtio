<?php 
    get_header();
?>
<section class="form">
    <div class="form-content">
        <div class="form-box container">
            <p id="form-content-title">Ubezpieczenie majątkowe</p>
            <p id="form-content-text">
                Skontaktuj się z nami i skorzystaj <br />
                ze specjalnej oferty!
            </p>
        </div>
    </div>
    <form class="container">
        <h6>
            Podaj dane kontaktowe, a my <br />
            przygotujemy najlepszą ofertę
        </h6>
        <input type="text" id="name" placeholder="Imię i nazwisko" required />
        <input type="email" id="email" placeholder="Adres e-mail" required />
        <input type="number" id="tel" placeholder="Numer telefonu" required />
        <span class="place-code">
            <input type="text" id="place" placeholder="Miejscowość" required />
            <input type="text" id="zip-code" placeholder="Kod pocztowy" required />
        </span>
        <span class="checkbox-form">
            <input type="checkbox" id="check-form" required />
            <label for="check-form">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                accusam et justo duo dolores et ea rebum.</label>
        </span>
        <button type="submit" class="btn">Wyślij</button>
    </form>
</section>

<section class="insurance">
    <div class="container">
        <p class="insurance-title">Ubezpieczenia majątkowe</p>
        <h4>Co obejmują?</h4>
        <p class="insurance-text1">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
            sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
            rebum.
        </p>
        <p class="insurance-text2">
            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
            dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing
            elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
            justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
            takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit
            amet, consetetur sadipscing elitr.
        </p>
        <button class="btn">Zamów ubezpieczenie</button>
    </div>
</section>
<?php 
    get_footer();
?>
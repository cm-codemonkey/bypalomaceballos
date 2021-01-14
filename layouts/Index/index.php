<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.plugins}owl_carousel/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}owl_carousel/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}owl_carousel/owl.carousel.min.js']);
$this->dependencies->add(['css', '{$path.css}Index/index.css']);
$this->dependencies->add(['js', '{$path.js}Index/index.js']);

?>

<main class="home">
    <header class="menu">
        <nav>
            <ul>
                <li><a href=""><i class="fas fa-phone"></i></a></li>
                <li><a href=""><i class="fas fa-envelope"></i></a></li>
                <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                <li><a href=""><i class="fab fa-facebook-messenger"></i></a></li>
            </ul>
        </nav>
        <nav>
            <ul>
                <li><a href=""><i class="fas fa-credit-card"></i>$ 0.00</a></li>
                <li><a href=""><i class="fas fa-dollar-sign"></i>MXN</a></li>
                <li><a href=""><i class="fas fa-shopping-cart"></i>0 {$lang.products}</a></li>
                <li><a href=""><img src="{$path.images}es.png"></a></li>
                <li><a href=""><img src="{$path.images}en.png"></a></li>
            </ul>
        </nav>
    </header>
    <section class="home">
        <div id="home_left" class="owl-carousel owl-theme">
            <div class="item" style="background-image: url('{$path.images}home_1.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_2.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_3.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_4.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_5.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_6.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_7.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_8.png')"></div>
        </div>
        <div id="home_right" class="owl-carousel owl-theme">
            <div class="item" style="background-image: url('{$path.images}home_9.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_10.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_11.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_12.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_13.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_14.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_15.png')"></div>
            <div class="item" style="background-image: url('{$path.images}home_16.png')"></div>
        </div>
        <div class="logotype">
            <h1>Paloma Ceballos.</h1>
            <h3>Boutique, Planners & Fashion</h3>
        </div>
    </section>
    <section class="new_arrivals">
        <h2>{$lang.new_arrivals}</h2>
        <p>{$lang.new_arrivals_description}</p>
        <div>
            <div>
                <article>
                    <figure>
                        <img src="{$path.images}new_arrivals_1.png" alt="New arrival">
                        <a href="">{$lang.weddings}</a>
                    </figure>
                    <h4>{$lang.new_arrivals_1}</h4>
                    <span>$ 18,000.00 MXN</span>
                    <a href=""><i class="fas fa-cart-plus"></i>{$lang.add_to_card}</a>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}new_arrivals_2.png" alt="New arrival">
                        <a href="">{$lang.weddings}</a>
                    </figure>
                    <h4>{$lang.new_arrivals_2}</h4>
                    <span>$ 14,000.00 MXN</span>
                    <a href=""><i class="fas fa-cart-plus"></i>{$lang.add_to_card}</a>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}new_arrivals_3.png" alt="New arrival">
                        <a href="">{$lang.weddings}</a>
                    </figure>
                    <h4>{$lang.new_arrivals_3}</h4>
                    <span>$ 24,000.00 MXN</span>
                    <a href=""><i class="fas fa-cart-plus"></i>{$lang.add_to_card}</a>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}new_arrivals_4.png" alt="New arrival">
                        <a href="">{$lang.weddings}</a>
                    </figure>
                    <h4>{$lang.new_arrivals_4}</h4>
                    <span>$ 12,000.00 MXN</span>
                    <a href=""><i class="fas fa-cart-plus"></i>{$lang.add_to_card}</a>
                </article>
            </div>
        </div>
    </section>
    <section class="services">
        <article>
            <figure>
                <img src="{$path.images}services_1.png" alt="Service">
            </figure>
            <div>
                <h4>{$lang.weddings}.</h4>
                <a href=""><i class="fas fa-store"></i>{$lang.view_online_shop}</a>
            </div>
        </article>
        <article>
            <figure>
                <img src="{$path.images}services_2.png" alt="Service">
            </figure>
            <div>
                <h4>{$lang.xv_years}.</h4>
                <a href=""><i class="fas fa-store"></i>{$lang.view_online_shop}</a>
            </div>
        </article>
        <article>
            <figure>
                <img src="{$path.images}services_3.png" alt="Service">
            </figure>
            <div>
                <h4>{$lang.christenings}.</h4>
                <a href=""><i class="fas fa-store"></i>{$lang.view_online_shop}</a>
            </div>
        </article>
    </section>
    <section class="we_recommend_you">
        <h2>{$lang.we_recommend_you}</h2>
        <p>{$lang.we_recommend_you_description}</p>
        <div>
            <div>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_1.png" alt="We recommend you">
                        <a href="">{$lang.weddings}</a>
                    </figure>
                    <div>
                        <h4>{$lang.we_recommend_you_1}</h4>
                        <span>$ 18,000.00 MXN</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.add_to_card}</a>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_2.png" alt="We recommend you">
                        <a href="">{$lang.xv_years}</a>
                    </figure>
                    <div>
                        <h4>{$lang.we_recommend_you_2}</h4>
                        <span>$ 14,000.00 MXN</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.add_to_card}</a>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_3.png" alt="We recommend you">
                        <a href="">{$lang.christenings}</a>
                    </figure>
                    <div>
                        <h4>{$lang.we_recommend_you_3}</h4>
                        <span>$ 24,000.00 MXN</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.add_to_card}</a>
                    </div>
                </article>
            </div>
            <div>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_1.png" alt="We recommend you">
                        <a href="">{$lang.weddings}</a>
                    </figure>
                    <div>
                        <h4>{$lang.we_recommend_you_1}</h4>
                        <span>$ 18,000.00 MXN</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.add_to_card}</a>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_2.png" alt="We recommend you">
                        <a href="">{$lang.xv_years}</a>
                    </figure>
                    <div>
                        <h4>{$lang.we_recommend_you_2}</h4>
                        <span>$ 14,000.00 MXN</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.add_to_card}</a>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}we_recommend_you_3.png" alt="We recommend you">
                        <a href="">{$lang.christenings}</a>
                    </figure>
                    <div>
                        <h4>{$lang.we_recommend_you_3}</h4>
                        <span>$ 24,000.00 MXN</span>
                        <a href=""><i class="fas fa-cart-plus"></i>{$lang.add_to_card}</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="event_hall">
        <div>
            <h3>{$lang.book_our_event_hall}</h3>
            <h2>{$lang.event_hall}</h2>
            <p>{$lang.event_hall_description}</p>
            <a href=""><i class="fas fa-check-square"></i>{$lang.book_now}</a>
        </div>
        <figure>
            <img src="{$path.images}event_hall.png" alt="Event hall">
        </figure>
    </section>
    <section class="our_specialities">
        <h2>{$lang.our_specialities}</h2>
        <p>{$lang.our_specialities_description}</p>
        <div>
            <div>
                <article>
                    <figure>
                        <img src="{$path.images}our_specialities_1.png" alt="Our specialities">
                    </figure>
                    <h4>{$lang.our_specialities_1}</h4>
                    <p>{$lang.our_specialities_1_description}</p>
                    <a href=""><i class="fas fa-star"></i>{$lang.quote_now}</a>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}our_specialities_2.png" alt="Our specialities">
                    </figure>
                    <h4>{$lang.our_specialities_2}</h4>
                    <p>{$lang.our_specialities_2_description}</p>
                    <a href=""><i class="fas fa-star"></i>{$lang.quote_now}</a>
                </article>
                <article>
                    <figure>
                        <img src="{$path.images}our_specialities_3.png" alt="Our specialities">
                    </figure>
                    <h4>{$lang.our_specialities_3}</h4>
                    <p>{$lang.our_specialities_3_description}</p>
                    <a href=""><i class="fas fa-star"></i>{$lang.quote_now}</a>
                </article>
            </div>
        </div>
    </section>
    <section class="magazine">
        <div>
            <h3>{$lang.read_our_magazine}</h3>
            <h2>{$lang.magazine}</h2>
            <p>{$lang.magazine_description}</p>
            <a href=""><i class="fas fa-book-reader"></i>{$lang.read_now}</a>
        </div>
        <figure>
            <img src="{$path.images}magazine.png" alt="Magazine">
        </figure>
    </section>
    <footer>
        <figure>
            <img src="{$path.images}footer.png" alt="Footer">
        </figure>
        <div>
            <div>
                <span><i class="fas fa-phone"></i>+52 (998) 123 45 67</span>
                <span><i class="fas fa-envelope"></i>contacto@bypalomaceballos.com</span>
                <span><i class="fas fa-map-marker-alt"></i>Cancún, Quintana roo. México.</span>
            </div>
            <div>
                <a href=""><i class="fab fa-facebook-square"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</main>

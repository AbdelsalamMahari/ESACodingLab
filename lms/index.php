<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css'>
    <link rel="stylesheet" href="css/home.css">
    <title>Welcome To BOOKSTORE</title>
</head>

<body>
<?php
include 'header.php';
?>
    <section class="main">
        <div class="first-sec">
            <div class="books-for-all">
                <div class="title_cont">
                    <div class="B_F">
                        <p>
                            B
                        </p>
                        <p>
                            F
                        </p>
                    </div>
                    <div class="O" class="color-changing-div"></div>
                    <div class="O_R">
                        <p>
                            O
                        </p>
                        <p>
                            R
                        </p>
                    </div>
                    <div class="K_ALL">
                        <p>
                            KS
                        </p>
                        <p class="ALL">
                            ALL
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="hr-divid">

    <section class="donation-section">
    <div class="donation-content">
        <h1 class="donation-title">Donation</h1>
        <p class="thank-you-message">Thank you all for your contributions!</p>
        <p class="donation-line">We have received a total of X donations.</p>
    </div>
   </section>

    <hr class="hr-divid">  

    <section class="description">
        <div class="left-part">
            <div class="left-img">
                <img src="images/Bibliophile.gif" alt="photo" width="500px">
            </div>
        </div>
        <div class="right-part">
            <div class="text-cont">
                <p>At our library store, we believe in the transformative power of books and the importance
                    of supporting charitable initiatives. With our unique donation program, we are dedicated to making a
                    positive impact on society while promoting a love for reading.<br><br>

                    Every time you borrow a book from our Book store, <b>the rental fee will be
                        automatically
                        transformed into a donation</b>. These donations go directly to reputable charities focused on promoting literacy and education.</p>
            </div>
        </div>
    </section>

    <hr class="hr-divid">

    <section class="slider-cont">
        <h2 class="title">Whats New</h2>
        <div class="book-slide">
            <div class="book js-flickity"
                data-flickity-options='{ "wrapAround": true, "autoPlay": 2000, "pauseAutoPlayOnHover": false }'>
                <div class="book-cell">
                    <div class="book-img">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/81WcnNQ-TBL.jpg" alt=""
                            class="book-photo">
                    </div>
                    <div class="book-content">
                        <div class="book-title">BIG MAGIC</div>
                        <div class="book-author">by Elizabeth Gilbert</div>
                        <div class="rate">
                            <fieldset class="rating">
                                <input type="checkbox" id="star5" name="rating" value="5" />
                                <label class="full" for="star5"></label>
                                <input type="checkbox" id="star4" name="rating" value="4" />
                                <label class="full" for="star4"></label>
                                <input type="checkbox" id="star3" name="rating" value="3" />
                                <label class="full" for="star3"></label>
                                <input type="checkbox" id="star2" name="rating" value="2" />
                                <label class="full" for="star2"></label>
                                <input type="checkbox" id="star1" name="rating" value="1" />
                                <label class="full" for="star1"></label>
                            </fieldset>
                            <span class="book-voters">1.987 voters</span>
                        </div>
                        <div class="book-sum">Readers of all ages and walks of life have drawn inspiration and
                            empowerment from
                            Elizabeth Gilbert’s books for years. </div>
                        <div class="book-see">See The Book</div>
                    </div>
                </div>
                <div class="book-cell">
                    <div class="book-img">
                        <img src="https://i.pinimg.com/originals/a8/b9/ff/a8b9ff74ed0f3efd97e09a7a0447f892.jpg" alt=""
                            class="book-photo">
                    </div>
                    <div class="book-content">
                        <div class="book-title">Ten Thousand Skies Above You</div>
                        <div class="book-author">by Claudia Gray</div>
                        <div class="rate">
                            <fieldset class="rating red">
                                <input type="checkbox" id="star6" name="rating" value="5" />
                                <label class="full1" for="star6"></label>
                                <input type="checkbox" id="star7" name="rating" value="4" />
                                <label class="full1" for="star7"></label>
                                <input type="checkbox" id="star8" name="rating" value="3" />
                                <label class="full1" for="star8"></label>
                                <input type="checkbox" id="star9" name="rating" value="2" />
                                <label class="full1" for="star9"></label>
                                <input type="checkbox" id="star10" name="rating" value="1" />
                                <label class="full1" for="star10"></label>
                            </fieldset>
                            <span class="book-voters">1.987 voters</span>
                        </div>
                        <div class="book-sum">The hunt for each splinter of Paul's soul sends Marguerite racing through
                            a war-torn
                            San Francisco.</div>
                        <div class="book-see book-red">See The Book</div>
                    </div>
                </div>
                <div class="book-cell">
                    <div class="book-img">
                        <img src="https://m.media-amazon.com/images/I/91RQ-qyNyfL._AC_UF1000,1000_QL80_.jpg" alt=""
                            class="book-photo">
                    </div>
                    <div class="book-content">
                        <div class="book-title">A Tale For The Time Being</div>
                        <div class="book-author">by Ruth Ozeki</div>
                        <div class="rate">
                            <fieldset class="rating yellow">
                                <input type="checkbox" id="star11" name="rating" value="5" />
                                <label class="full" for="star11"></label>
                                <input type="checkbox" id="star12" name="rating" value="4" />
                                <label class="full" for="star12"></label>
                                <input type="checkbox" id="star13" name="rating" value="3" />
                                <label class="full" for="star13"></label>
                                <input type="checkbox" id="star14" name="rating" value="2" />
                                <label class="full" for="star14"></label>
                                <input type="checkbox" id="star15" name="rating" value="1" />
                                <label class="full" for="star15"></label>
                            </fieldset>
                            <span class="book-voters">1.987 voters</span>
                        </div>
                        <div class="book-sum">In Tokyo, sixteen-year-old Nao has decided there’s only one escape from
                            her aching
                            loneliness and her classmates’ bullying.</div>
                        <div class="book-see book-yellow">See The Book</div>
                    </div>
                </div>
                <div class="book-cell">
                    <div class="book-img">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/81af+MCATTL.jpg" alt=""
                            class="book-photo">
                    </div>
                    <div class="book-content">
                        <div class="book-title">The Great Gatsby</div>
                        <div class="book-author">by F.Scott Fitzgerald</div>
                        <div class="rate">
                            <fieldset class="rating">
                                <input type="checkbox" id="star16" name="rating" value="5" />
                                <label class="full" for="star16"></label>
                                <input type="checkbox" id="star17" name="rating" value="4" />
                                <label class="full" for="star17"></label>
                                <input type="checkbox" id="star18" name="rating" value="3" />
                                <label class="full" for="star18"></label>
                                <input type="checkbox" id="star19" name="rating" value="2" />
                                <label class="full" for="star19"></label>
                                <input type="checkbox" id="star20" name="rating" value="1" />
                                <label class="full" for="star20"></label>
                            </fieldset>
                            <span class="book-voters">1.987 voters</span>
                        </div>
                        <div class="book-sum">The Great Gatsby, F. Scott Fitzgerald’s third book, stands as the supreme
                            achievement
                            of his career.</div>
                        <div class="book-see">See The Book</div>
                    </div>
                </div>
                <div class="book-cell">
                    <div class="book-img">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/81UWB7oUZ0L.jpg" alt=""
                            class="book-photo">
                    </div>
                    <div class="book-content">
                        <div class="book-title">After You</div>
                        <div class="book-author">by Jojo Moyes</div>
                        <div class="rate">
                            <fieldset class="rating red">
                                <input type="checkbox" id="star21" name="rating" value="5" />
                                <label class="full" for="star21"></label>
                                <input type="checkbox" id="star22" name="rating" value="4" />
                                <label class="full" for="star22"></label>
                                <input type="checkbox" id="star23" name="rating" value="3" />
                                <label class="full" for="star23"></label>
                                <input type="checkbox" id="star24" name="rating" value="2" />
                                <label class="full" for="star24"></label>
                                <input type="checkbox" id="star25" name="rating" value="1" />
                                <label class="full" for="star25"></label>
                            </fieldset>
                            <span class="book-voters">1.987 voters</span>
                        </div>
                        <div class="book-sum">Louisa Clark is no longer just an ordinary girl living an ordinary life.
                            After the
                            transformative six months spent.</div>
                        <div class="book-see book-red">See The Book</div>
                    </div>
                </div>
                <div class="book-cell">
                    <div class="book-img">
                        <img src="https://static-cse.canva.com/blob/921453/ThrillerKindleCover.jpg" alt=""
                            class="book-photo">
                    </div>
                    <div class="book-content">
                        <div class="book-title">Secrets</div>
                        <div class="book-author">by Harry Rickets</div>
                        <div class="rate">
                            <fieldset class="rating yellow">
                                <input type="checkbox" id="star21" name="rating" value="5" />
                                <label class="full" for="star21"></label>
                                <input type="checkbox" id="star22" name="rating" value="4" />
                                <label class="full" for="star22"></label>
                                <input type="checkbox" id="star23" name="rating" value="3" />
                                <label class="full" for="star23"></label>
                                <input type="checkbox" id="star24" name="rating" value="2" />
                                <label class="full" for="star24"></label>
                                <input type="checkbox" id="star25" name="rating" value="1" />
                                <label class="full" for="star25"></label>
                            </fieldset>
                            <span class="book-voters">1.987 voters</span>
                        </div>
                        <div class="book-sum">Suspendisse feugiat metus eget vestibulum aliquam. Vestibulum fringilla
                            vitae orci at egestas. Phasellus molestie ex eget diam accumsan luctus.</div>
                        <div class="book-see book-yellow">See The Book</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="hr-divid">

    <section class="description1">
        <div class="left-part1">
            <div class="text-cont1">
                <p>By choosing to borrow books from our library, you not only engage in a delightful reading experience
                    but also contribute to a meaningful cause. Together, we can foster the joy of reading and provide
                    opportunities for individuals and communities to thrive through the power of knowledge.<br><br>

                    Join us in this noble endeavor as we encourage reading and make a difference in the lives of others.
                    Visit our library store today and embark on a literary journey that impacts lives.</p>
            </div>
        </div>
        <div class="right-part1">
            <div class="right-img1">
                <img src="images/Bibliophile2.gif" alt="photo" width="500px">
            </div>
        </div>
    </section>

    <hr class="hr-divid">

    <section class="Am-img-slider-container" id="trending">
        <h2 class="title">Trending Now</h2>
        <div class="book-slide">
            <div class="book js-flickity"
                data-flickity-options='{ "wrapAround": true, "autoPlay": 2000, "pauseAutoPlayOnHover": false }'>
                <div class="book-cell">
                    <div class="book-img">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/81WcnNQ-TBL.jpg" alt=""
                            class="book-photo">
                    </div>
                    <div class="book-content">
                        <div class="book-title">BIG MAGIC</div>
                        <div class="book-author">by Elizabeth Gilbert</div>
                        <div class="rate">
                            <fieldset class="rating">
                                <input type="checkbox" id="star5" name="rating" value="5" />
                                <label class="full" for="star5"></label>
                                <input type="checkbox" id="star4" name="rating" value="4" />
                                <label class="full" for="star4"></label>
                                <input type="checkbox" id="star3" name="rating" value="3" />
                                <label class="full" for="star3"></label>
                                <input type="checkbox" id="star2" name="rating" value="2" />
                                <label class="full" for="star2"></label>
                                <input type="checkbox" id="star1" name="rating" value="1" />
                                <label class="full" for="star1"></label>
                            </fieldset>
                            <span class="book-voters">1.987 voters</span>
                        </div>
                        <div class="book-sum">Readers of all ages and walks of life have drawn inspiration and
                            empowerment from
                            Elizabeth Gilbert’s books for years. </div>
                        <div class="book-see">See The Book</div>
                    </div>
                </div>
                <div class="book-cell">
                    <div class="book-img">
                        <img src="https://i.pinimg.com/originals/a8/b9/ff/a8b9ff74ed0f3efd97e09a7a0447f892.jpg" alt=""
                            class="book-photo">
                    </div>
                    <div class="book-content">
                        <div class="book-title">Ten Thousand Skies Above You</div>
                        <div class="book-author">by Claudia Gray</div>
                        <div class="rate">
                            <fieldset class="rating red">
                                <input type="checkbox" id="star6" name="rating" value="5" />
                                <label class="full1" for="star6"></label>
                                <input type="checkbox" id="star7" name="rating" value="4" />
                                <label class="full1" for="star7"></label>
                                <input type="checkbox" id="star8" name="rating" value="3" />
                                <label class="full1" for="star8"></label>
                                <input type="checkbox" id="star9" name="rating" value="2" />
                                <label class="full1" for="star9"></label>
                                <input type="checkbox" id="star10" name="rating" value="1" />
                                <label class="full1" for="star10"></label>
                            </fieldset>
                            <span class="book-voters">1.987 voters</span>
                        </div>
                        <div class="book-sum">The hunt for each splinter of Paul's soul sends Marguerite racing through
                            a war-torn
                            San Francisco.</div>
                        <div class="book-see book-red">See The Book</div>
                    </div>
                </div>
                <div class="book-cell">
                    <div class="book-img">
                        <img src="https://m.media-amazon.com/images/I/91RQ-qyNyfL._AC_UF1000,1000_QL80_.jpg" alt=""
                            class="book-photo">
                    </div>
                    <div class="book-content">
                        <div class="book-title">A Tale For The Time Being</div>
                        <div class="book-author">by Ruth Ozeki</div>
                        <div class="rate">
                            <fieldset class="rating yellow">
                                <input type="checkbox" id="star11" name="rating" value="5" />
                                <label class="full" for="star11"></label>
                                <input type="checkbox" id="star12" name="rating" value="4" />
                                <label class="full" for="star12"></label>
                                <input type="checkbox" id="star13" name="rating" value="3" />
                                <label class="full" for="star13"></label>
                                <input type="checkbox" id="star14" name="rating" value="2" />
                                <label class="full" for="star14"></label>
                                <input type="checkbox" id="star15" name="rating" value="1" />
                                <label class="full" for="star15"></label>
                            </fieldset>
                            <span class="book-voters">1.987 voters</span>
                        </div>
                        <div class="book-sum">In Tokyo, sixteen-year-old Nao has decided there’s only one escape from
                            her aching
                            loneliness and her classmates’ bullying.</div>
                        <div class="book-see book-yellow">See The Book</div>
                    </div>
                </div>
                <div class="book-cell">
                    <div class="book-img">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/81af+MCATTL.jpg" alt=""
                            class="book-photo">
                    </div>
                    <div class="book-content">
                        <div class="book-title">The Great Gatsby</div>
                        <div class="book-author">by F.Scott Fitzgerald</div>
                        <div class="rate">
                            <fieldset class="rating">
                                <input type="checkbox" id="star16" name="rating" value="5" />
                                <label class="full" for="star16"></label>
                                <input type="checkbox" id="star17" name="rating" value="4" />
                                <label class="full" for="star17"></label>
                                <input type="checkbox" id="star18" name="rating" value="3" />
                                <label class="full" for="star18"></label>
                                <input type="checkbox" id="star19" name="rating" value="2" />
                                <label class="full" for="star19"></label>
                                <input type="checkbox" id="star20" name="rating" value="1" />
                                <label class="full" for="star20"></label>
                            </fieldset>
                            <span class="book-voters">1.987 voters</span>
                        </div>
                        <div class="book-sum">The Great Gatsby, F. Scott Fitzgerald’s third book, stands as the supreme
                            achievement
                            of his career.</div>
                        <div class="book-see">See The Book</div>
                    </div>
                </div>
                <div class="book-cell">
                    <div class="book-img">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/81UWB7oUZ0L.jpg" alt=""
                            class="book-photo">
                    </div>
                    <div class="book-content">
                        <div class="book-title">After You</div>
                        <div class="book-author">by Jojo Moyes</div>
                        <div class="rate">
                            <fieldset class="rating red">
                                <input type="checkbox" id="star21" name="rating" value="5" />
                                <label class="full" for="star21"></label>
                                <input type="checkbox" id="star22" name="rating" value="4" />
                                <label class="full" for="star22"></label>
                                <input type="checkbox" id="star23" name="rating" value="3" />
                                <label class="full" for="star23"></label>
                                <input type="checkbox" id="star24" name="rating" value="2" />
                                <label class="full" for="star24"></label>
                                <input type="checkbox" id="star25" name="rating" value="1" />
                                <label class="full" for="star25"></label>
                            </fieldset>
                            <span class="book-voters">1.987 voters</span>
                        </div>
                        <div class="book-sum">Louisa Clark is no longer just an ordinary girl living an ordinary life.
                            After the
                            transformative six months spent.</div>
                        <div class="book-see book-red">See The Book</div>
                    </div>
                </div>
                <div class="book-cell">
                    <div class="book-img">
                        <img src="https://m.media-amazon.com/images/I/81tNnqcHxlL._AC_UF1000,1000_QL80_.jpg" alt=""
                            class="book-photo">
                    </div>
                    <div class="book-content">
                        <div class="book-title">Sherlock Holmes</div>
                        <div class="book-author">by Conan Doyle</div>
                        <div class="rate">
                            <fieldset class="rating yellow">
                                <input type="checkbox" id="star21" name="rating" value="5" />
                                <label class="full" for="star21"></label>
                                <input type="checkbox" id="star22" name="rating" value="4" />
                                <label class="full" for="star22"></label>
                                <input type="checkbox" id="star23" name="rating" value="3" />
                                <label class="full" for="star23"></label>
                                <input type="checkbox" id="star24" name="rating" value="2" />
                                <label class="full" for="star24"></label>
                                <input type="checkbox" id="star25" name="rating" value="1" />
                                <label class="full" for="star25"></label>
                            </fieldset>
                            <span class="book-voters">1.987 voters</span>
                        </div>
                        <div class="book-sum">There is one literary detective who stands above all others, whose powers
                            of deduction are known the world over, whose influence can still be felt in today's most
                            modern whodunits</div>
                        <div class="book-see book-yellow">See The Book</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
include 'footer.php';
?>
   
    <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'></script>
</body>

</html>
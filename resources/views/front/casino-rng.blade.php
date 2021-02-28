@extends('layouts.base')

@section('title', 'Casino Rng')

@section('content')
    <!--Slider start-->
    <div id="carouselExampleIndicators" class="carousel slide d-md-block d-none" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/images/slide-image/one.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="animated slideInDown" >150% Money-back guarantee if no wins</h1>
                    <p class="animated fadeInUp">Yes, I put my money where my mouth is. A full refund plus 50% of your payment! <br>
                        Watch as I play roulette with real money for 24 hours non-stop in the video below.</p>
                    <a  class="btn border-0 btn-theme  btn-circle animated zoomIn " href="login" data-text="Register Your Self"> <span>R</span><span>e</span><span>g</span><span>i</span><span>s</span><span>t</span><span>e</span><span>r</span><span class="px-1"> </span><span>Y</span><span>o</span><span>u</span><span>r</span><span class="px-1"> </span><span>S</span><span>e</span><span>l</span><span>f</span></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/images/slide-image/two.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="animated bounceInRight" >Join the roulette syllabus Mentorship program,<br> let me play with you  1 on 1</h1>
                    <p class="animated bounceInLeft" >You’re not too young to learn, and I am not too old to teach you <br>
                        wining on roulette is a skill, let me train you. <br>
                        Watch as I play roulette with real money for 24 hours non-stop in the video below.
                        <br> You are capable of doing this, let me assist you.
                    </p>
                    <a  class="btn border-0 btn-theme  btn-circle animated zoomIn " href="login" data-text="Register Your Self"> <span>R</span><span>e</span><span>g</span><span>i</span><span>s</span><span>t</span><span>e</span><span>r</span><span class="px-1"> </span><span>Y</span><span>o</span><span>u</span><span>r</span><span class="px-1"> </span><span>S</span><span>e</span><span>l</span><span>f</span></a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/images/slide-image/three.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="animated slideInDown" >Roulette Syllabus software works on any casino <br>
                        platform, both RNG and the live dealer</h1>
                    <p class="animated fadeInUp" >Fully certified, so no harm to install on your system<br>
                        Watch as I play roulette with real money for 24 hours non-stop in the video below.<br>
                        You are capable of doing this, let me assist you.
                    </p>
                    <a  class="btn border-0 btn-theme  btn-circle animated zoomIn "  href="login" data-text="Register Your Self"> <span>R</span><span>e</span><span>g</span><span>i</span><span>s</span><span>t</span><span>e</span><span>r</span><span class="px-1"> </span><span>Y</span><span>o</span><span>u</span><span>r</span><span class="px-1"> </span><span>S</span><span>e</span><span>l</span><span>f</span></a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--Slider end-->

    <section class="pos-r section-for-text">
        <div class="container">
            <div class="row text-center ">
                <div class="col-lg-8 col-md-12 ml-auto mr-auto">
                    <div class="section-title">
                        <div class="title-effect title-effect-2">
                            <div class="ellipse"></div><i class="la la-info"></i>
                        </div>
                        <h2 class="title">RANDOM NUMBER GENERATOR (RNG)</h2>
                        <p>TAKE YOUR TIME TO READ ALL IF YOU'RE A SERIOUS PLAYER</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 mt-5 mx-2 border-text d-flex flex-column align-items-center">
                    <h2 class="title">   Terms  </h2>
                    <div class="p-3 text-left" >
                        <p> <span  class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> &nbsp; <span class="text-danger"> 232 = 232 </span> – two to the power of 32.</p>
                        <p> <span  class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> &nbsp; <span class="text-danger"> C1 </span> - First constant of the LCG RNG formula.</p>
                        <p> <span  class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> &nbsp; <span class="text-danger"> C2</span> - The second constant of the LCG RNG formula.</p>
                        <p> <span  class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> &nbsp; <span class="text-danger"> Casino Software Provider </span> - A company that provides software and server support for theonline casinos. Most known Casino Software Providers are Micro gamming, Playtech and RTG (Real Time Gaming) .</p>
                        <p> <span  class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> &nbsp; <span class="text-danger"> Good RNG </span> - This is a RNG which will form a circle of RandSeeds .</p>
                        <p> <span  class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> &nbsp; <span class="text-danger"> Mod </span> - Modulo operation. 5 mod 3=2; 7 mod 3=1 .</p>
                        <p> <span  class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> &nbsp; <span class="text-danger"> RandSeed</span> - A variable which stores the number from where is obtained the outcome at the casino.</p>
                        <p> <span  class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> &nbsp; <span class="text-danger"> RNG </span> - Random Number Generator.</p>
                        <p> <span  class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> &nbsp; <span class="text-danger"> RNG circle </span> - The circle which is made by the LCG RNG formula.</p>
                        <p> <span  class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> &nbsp; <span class="text-danger"> TST </span> - Technical Systems Testing (TST) is an internationally recognized Accredited Testing. </p>
                        <p> <span  class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> &nbsp; <span class="text-danger"> Facility (ATF) </span> - offering a full range of testing and consultation services for Terrestrial traditional / land-based) and Interactive-based gaming, wagering, lottery, ecommerce and Information Technology industries, to ensure that gaming operates in a manner that is fair, secure and auditable .</p>
                        <p> <span  class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> &nbsp; <span class="text-danger"> Random Number Generation </span> -There are many theories on random numbers. Here I selected the most known methods of obtaining random numbers and then I will show you how the casinos have random numbers and how they generate them. </p>
                        <h6 class="p-color text-theme text-center"><br> &nbsp; In order to understand all the terms, which I will use for explaining everything, I will tell you a little history.<br><br></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pos-r o-hidden">
        <div class="bg-animation">
            <img class="zoom-fade" src="{{asset('assets/images/pattern/03.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab style-2">
                        <!-- Nav tabs -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link" id="nav-tab1" data-toggle="tab" href="#tab1-1" role="tab" aria-selected="false">
                                    <h5>Introduction</h5>
                                </a>
                                <a class="nav-item nav-link" id="nav-tab2" data-toggle="tab" href="#tab1-2" role="tab" aria-selected="false">
                                    <h5>Physical Methods </h5>
                                </a>
                                <a class="nav-item nav-link active" id="nav-tab3" data-toggle="tab" href="#tab1-3" role="tab" aria-selected="true">
                                    <h5>Computational Methods</h5>
                                </a>
                                <a class="nav-item nav-link" id="nav-tab4" data-toggle="tab" href="#tab1-4" role="tab" aria-selected="false">
                                    <h5>Problems</h5>
                                </a>
                            </div>
                        </nav>
                        <!-- Tab panes -->
                        <div class="tab-content" id="nav-tabContent">
                            <div role="tabpanel" class="tab-pane fade" id="tab1-1">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-12">
                                        <img class="img-fluid" src="{{asset('assets/images/casion-rng/comp-article-1.jpg')}}" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 md-mt-5">
                                        <h4 class="mb-4">Introduction</h4>
                                        <p class="mb-4">
                                            Many applications of randomness have led to many different methods for
                                            generating random data. These methods may vary as to how unpredictable
                                            or statistically random they are, and how quickly they can generate random
                                            numbers.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab1-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-12">
                                        <img class="img-fluid" src="{{asset('assets/images/casion-rng/phys-article-1.jpg')}}" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 md-mt-5">
                                        <h4 class="mb-4">Physical Methods</h4>
                                        <p class="mb-4">
                                            The earliest methods for generating random numbers - dice, coin flipping,
                                            roulette wheels are still used today, mainly in games and gambling, as they
                                            tend to be too slow for applications in statistics and cryptography. <br>
                                            Some physical phenomena, such as thermal noise in sneer diodes appear to be
                                            truly random and can be used as the basis for hardware random number generators.
                                            however, many mechanical phenomena feature asymmetries and biases that make their
                                            outcomes not truly random. The many successful attempts to exploit such phenomena
                                            by gamblers, especially in roulette and blackjack are testimony to these effects.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade active show" id="tab1-3">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-12">
                                        <img class="img-fluid" src="{{asset('assets/images/casion-rng/comp-article-2.jpg')}}" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 md-mt-5">
                                        <h4 class="mb-4">Computational Methods</h4>
                                        <p class="mb-4">
                                            Hardware random number generator in computing, a hardware random number generator
                                            is an apparatus that generates random numbers from a physical process. Such devices
                                            are typically based on microscopy c phenomena such as thermal noise or the
                                            photoelectric effect or other quantum phenomena.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab1-4">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-12">
                                        <img class="img-fluid" src="{{asset('assets/images/casion-rng/prob-article-1.jpg')}}" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 md-mt-5">
                                        <h4 class="mb-4">Problems</h4>
                                        <p class="mb-4">

                                            It is very easy to misconstruction devices that generate random numbers.
                                            Also, they break silently, often producing decreasingly random numbers as
                                            they degrade. An example might be the rapidly decreasing radioactivity of
                                            the smoke alarms mentioned earlier. As the radioactive intensity decreases,
                                            its sensor will be required to compensate, not an easily accomplished task.
                                            Failure modes in such devices are plentiful and are neither easy nor quick nor
                                            cheap to detect.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pos-r section-for-text mt-3">
        <div class="container">
            <div class="row text-center ">
                <div class="col-lg-12 col-md-12 mt-5 mx-2 border-text d-flex flex-column align-items-center">
                    <h2 class="title">     PSEUDO-RANDOM GENERATORS    </h2>
                    <div class="p-3 text-left mt-5 mx-2">
                        <p> Most computer "random number generators" are not hardware devices, but are software routines implementing algorithms.
                            Often they are supplied with such system software as language compilers (e.g., as one or more library routines)
                            or operating systems (e.g., as system calls).</p>
                        <p> Linear congruential generators (LCGs) represent one of the oldest and best -known pseudorandom number generator
                            algorithms. The theory behind them is easy to understand, and they are easily implemented and fast.</p>
                        <p> <span class="text-danger"><i class="fa fa-arrow-right"></i> &nbsp; LCGs ARE DEFINED BY THE RECURRENCE
                                    RELATION:</span></p>

                        <p> V j+1 = (A x Vj + B) mod M </p>
                        <p>  Where Vn is the sequence of random values and A, B and M are generator -specific integer constants. M
                            od is the modulo operation.</p>
                        <p>  The period of a general LCG is at most M, and in most casesless than that. The LCG will have a full period if:</p>
                        <p> <span class="text-danger">1.</span>&nbsp; B and M are relatively prime</p>
                        <p> <span class="text-danger">2.</span>&nbsp; A-1 is divisible by all prime factors of M.</p>
                        <p> <span class="text-danger">3.</span>&nbsp; A-1 is a multiple of 4 if M is a multiple of 4</p>
                        <p> <span class="text-danger">4.</span>&nbsp; M &gt; max (A, B, V0)</p>
                        <p> <span class="text-danger">5.</span>&nbsp; A &gt; 0, B &gt; 0</p>
                        <p> &nbsp; This is the fastest-evaluated of all random number generators; also they pass with success.</p>
                        <p> <span >Diehard tests:</span> The Diehard tests are a battery of statistical tests for measuring the qu
                            ality of a set of random numbers. They were developed by George Marsaglia over several years and first published
                            in 1995 on a CD-ROM of random numbers. Collectively they are considered one of the most stringent such tests known.</p>
                        <br>
                        <p><span class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i> &nbsp THE TESTS ARE:</span></p>
                        <br>
                        <p> <span class="text-danger">Birthday Spacing:</span> Choose random points on a large interval. The spacing betw
                            een the points should be asymptotically Poisson distributed. The name is based on the birthday paradox.</p>
                        <p> <span class="text-danger">Overlapping Permutations: </span> Analyze sequences of five consecutive random numbers. The 120 possible orderings should occur with statistically equal probability. Ranks of matrices: Select some number of bits from some number of random numbers to form a matrix over {0, 1}, then determine the rank of the matrix. Count the ranks.</p>
                        <p> <span class="text-danger">Monkey Tests: </span> Treat sequences of some number of bits as "words". Count the overlapping words in a stream. The number of "words" that don't appear should follow a known distribution. The name is based on the infinite monkey theorem.</p>
                        <p> <span class="text-danger">Count the 1’s: </span> Count the 1 bits in each of either successive or chosen bytes. Convert the counts to "letters", and count the occurrences of five -letter "words". Parking Lot Test: Randomly place unit circles in a 100 x 100 square. If the circle overlaps an existing one, try again. After 12,000 tries, the number of successfully "parked" circles should follow a certain normal distribution.</p>
                        <p> <span class="text-danger">Minimum Distance Test: </span> Randomly place 8,000 points in a 10,000 x 10,000 square, then find the minimum distance between the pairs. The square of this distance should be exponentially distributed with a certain mean.</p>
                        <p> <span class="text-danger">Random Spheres Test: </span> Randomly choose 4,000 points in a cube of edge 1,000. Center a sphere on each point, whose radius is the minimum distance to another point. The smallest sphere's volume should be exponentially distributed with a certain mean. The Squeeze Test: Multiply 231 by random floats on [0,1) until you reach 1. Repeat this 100,000 times. The number of floats needed to reach 1 should follow a certain distribution.</p>
                        <p> <span class="text-danger">Overlapping Sums Test: </span> Generate a long sequence of random floats on [0,1). Add sequences of 100 consecutive floats. The sums should be normally distributed with characteristic mean and sigma.</p>
                        <p> <span class="text-danger">Runs Test: </span> Generate a long sequence of random floats on [0,1). Count ascending and descending runs. The counts should follow a certain distribution.</p>
                        <p> <span class="text-danger">The Craps Test: </span> Play 200,000 games of craps, counting the wins and the number of throws per game. Each count should follow a certain distribution. As you see Hardware random number generator pre sent numerous problems, especially when it need a fast RandSeed calculation. That's why casinos work only with Pseudo -random generatorsThe Craps Test: Play 200,000 games of craps, counting the wins and the number of throws per game. Each count should follow a certain distribution. As you see Hardware random number generator pre sent numerous problems, especially when it need a fast RandSeed calculation. That's why casinos work only with Pseudo -random generators.</p>
                        <p> <span class="text-danger"></span> </p>
                        <p> <span class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>&nbsp; Statistical Randomness</p>
                        <p> <span class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>&nbsp; Internal State of The RNG</p>
                        <p> <span class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>&nbsp; Unpredictability</p>
                        <p> <span class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>&nbsp; Non-Repeatability</p>
                        <p> <span class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>&nbsp; Re-Seeding and Cycling</p>
                        <p> <span class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>&nbsp; Read More There Here</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pos-r section-for-text mt-3">
        <div class="container">
            <div class="row text-center  ">
                <div class="border-text col-lg-12 col-md-12 mt-5 mx-2 d-flex flex-column align-items-center">
                    <h2 class="title">     CASINO’S RNG FORMULA   </h2>
                    <div class="p-3 text-left mt-5 ">
                        <p >The casino’s RNG (Random Number Generator) is a simple mathematical recursive function RandSeed (n) = ((c1*RandSeed (n-1)) + c2) mod M, where c1, c2- two constants, M-modulo factor usually 2^32 or 2^64 Seeing this formula, you may think that the RandSeed keeps increasing to infinite, as we multiply the last RandSeed by c1 and add c2. Anyway this does not happen and the reason for this is “mod M”. There is always a limit to the RandSeed’s value and it depends on how many bits the algorithm was made to work. If the algorithm work s on 32-bits, then the range of RandSeed will be from -2147483648 to +2147483647. So if the next RandSeed will be greater than +2147483647, it starts again from -2147483648.</p>
                        <p > For example, let’s choose c1=84783 and c2=4236381 (later you will find out that not any number can work for c1 and c2). Also we have RandSeed1= 53478. After we make the calculations we receive:</p>
                        <br>
                        <div id="cent" class="ml-5">
                            <p ><span class="text-danger">RandSeed2 </span> = 243294359 RandSeed3=-1498047210 RandSeed4=1840508263</p>
                            <p ><span class="text-danger">RandSeed5 </span> = -935499962 RandSeed6=672013367</p>
                            <p ><span class="text-danger">RandSeed7 </span> = -1722617994 RandSeed8=1645751559 RandSeed9=1156117926</p>
                            <p ><span class="text-danger">RandSeed10 </span> = -593272873 RandSeed11=-1087751722 RandSeed12=-1312230233</p>
                            <p ><span class="text-danger">RandSeed13 </span> = 2021227526 RandSeed14=837430135 RandSeed15=-260998090</p>
                            <p ><span class="text-danger">RandSeed16 </span> = -525319097 RandSeed17=686094950 RandSeed18=-1844674793</p>
                            <p ><span class="text-danger">RandSeed19 </span> = -119621994 RandSeed20=-1489495065 RandSeed21=106754477</p>
                            <p ><span class="text-danger">RandSeed22 </span> = 1806981815.</p>
                            <p class="ml-5"> If we do this for 2^32 times we will get back to the RandSeed (2^32) = RandSeed1. </p>
                            <br>
                        </div>
                        <br>
                        <p >ALL the online casinos are based on this simple formula. It was proved by me, by a fact I saw as you will see later and by other who cracked already the casino RNG.</p>
                        <br>
                        <p> <span class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp; What does it mean that a casino software provider is approved?</span></p>
                        <p >Sometimes you may read that some organizations, like TST, tested the RNG and the casino software of a certain provider, and they said that its RNG is good. This means they just verified if the casino is actually using this formula (RNG) in order to get the outcome to the user
                            without taking into consideration the winnings he made. The uncertified casinos may use the above formula together with the winnings verification process. It's a very simple algorithm added to the RNG, which can be made by everyone, in order to bring all the users to failure at last.<br>
                            Here we will talk just about verified casinos, since the unverified casinos are almost impossible to be beaten. They are programmed to make you lose, though this is not a rule for all so read further.
                        </p>
                        <br>
                        <p > <span class="text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp; Casinos that use not ONLY RNG. How were they beaten?</span></p>
                        <p >You understand very well that I can't give you names here and I will not name these casinos even if you ask me.<br>
                        </p>
                        <p >
                            Though this kind of casinos seam unbeatable, they were still beaten by my friend more than one year ago. At the start I thought he was joking, but he was very serious and very committed to winning at an unverified casino.<br>
                        </p>
                        <p >
                            Firstly, you should know that your balance is not monitored by a human being, but by a program. It “takes care” of everything and makes in such way that you lose all your bankroll. Also it does not make you to lose straight way, they are also programmed to make you win. <br>
                        </p>
                        <p >
                            Anyway if the user does not match to a certain condition (which represent the games the user plays, the bets he makes and the way he plays), the algorithm won't know what to do with him and it will make him to lose. So, it depends on MANY factors. Knowing these factors, you can trick this algorithm and win. It's a kind of game, but well, this was made by a friend of mine more than one year ago. <br>
                        </p>
                        <p >
                            At the beginning he made a gambling website and registered as affiliate of each of these casinos. He didn't make much money as affiliate, since he was having a very low number of users and the casinos were not very well converting. Anyway he analyzed the betting process of those players, who signed up under his affiliate code, and the way the algorithm was making them to win and finally to lose. So the algorithm verifies if a player deposited a lot the n it let him increase the bankroll with 40% and after that it makes him lose all his money. <br>
                        </p>
                        <p >
                            This gives you an impression that it is possible to win at this casino, that’s why after you lose everything, you just think this wasn’t your lucky day, but this casino is good. Usually this makes people to deposit even more money in the same or next day. If a player deposited a low sum of money then the algorithm makes him stay with the same bankroll for a while and after some time the player loses. He starts thinking that he didn't have the necessary balance for winning, so he deposits more in the casino. <br>
                        </p>
                        <p >
                            After detecting all these aspects (here were not told all of them) of that algorithm he deposited $3,000 at the casino and he made about $5,000 with the tricks, which he discovered. He was surprised about the big number of unverified casinos, which were using this algorithm, that’s why he was satisfied when finally he mocked at their algorithm of beating us. <br>
                        </p>
                        <p >
                            The casinos, where he was playing, have already been closed. As you see these casinos are opened only for cheating us and they don't care about their reputation. Also they are intended to a small number of players.
                        </p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="accordion" class="accordion style-1">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0">
                                    <a data-toggle="collapse" class="text-danger" data-parent="#accordion" href="#collapse2">WARNING</a>
                                </h6>
                            </div>
                            <div id="collapse2" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    DO NOT TRY THIS AT HOME. :)) IN FACT I ADVISE YOU NOT TO PLAY AT ALL
                                    THESE CASINOS. THIS WAS JUST A STORY TO SHOW YOU THAT IN FACT EVERYTHING IS
                                    BEATABLE. ANYWAY DO NOT THINK THAT IF YOU WILL DEPOSIT A LOT OF MONEY IN SUCH A
                                    CASINO, YOU WILL BE A WINNER FOR A WHILE, SINCE THIS IS NOT A RULE.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0">
                                    <a  data-toggle="collapse" class="text-success" data-parent="#accordion" href="#collapse2" class="collapsed" aria-expanded="false"><span></span>NOTE</a>
                                </h6>
                            </div>
                            <div id="collapse2" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    THE RNG DOESN’T GIVE ADVANTAGES NEITHER FOR THE CASINO, NOR FOR THE PLAYER. IF YOU PLAY AGAINST RNG WITHOUT ANY SYSTEM YOU MAY BE IN LOSS OR A WINNER IN EQUAL PERIODS OF TIME.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pos-r section-for-text mt-3">
        <div class="container">
            <div class="row text-center ">
                <div class="col-lg-12 col-md-12 mt-5 border-text mx-2 d-flex flex-column align-items-center">
                    <h2 class="title">     Here Comes The Questions   </h2>
                    <div class="p-3 text-left ">
                        <ul class="list-unstyled list-icon my-5">
                            <li class="mb-3 text-danger"> <i class="fa fa-arrow-right" aria-hidden="true"></i>    What gives an advantage to the casino?</li>
                            <li class="mb-3 text-danger"> <i class="fa fa-arrow-right" aria-hidden="true"></i>   What gives an advantage to the casino?</li>
                            <li class="mb-3 text-danger"> <i class="fa fa-arrow-right" aria-hidden="true"></i>   Why the payouts always are <100%?</li>
                        </ul>
                        <p >The advantage depends, particularly, on each game. The roulette’s advantage is the single “0” (for European Roulette) or “0 and 00” (for American Roulette). It is also called the house edge.</p>
                        <p>So, to say that the outcome of the RNG can’t be beaten it's not correct. The idea is that the “RNG + house edge” can't be beaten.
                        <p>Now let’s discuss here how we are going to bet the RNG. At the end of e-book you will see how the "RNG + house edge" will be beaten 100% by beating the RNG. I say this, because you will know the
                        outcome (like the number that will land on the next spin) which you will receive from the casino.</p>
                        <p class="text-danger"> <span ><i class="fas fa-hand-point-right"></i> &nbsp; Let's get back to the main formula of the RNG</span></p>
                        <p  > RandSeed (n) = ((c1*RandSeed (n-1)) + c2) mod M </p>
                        <ul class="list-unstyled list-icon my-5">
                            <li class="mb-3 text-danger"> <i class="fa fa-arrow-right" aria-hidden="true"></i> What do we need in order to beat the “RNG"?</li>
                        </ul>
                        <p >To beat the RNG we need just two constants c1 and c2. But knowing these 2 constants, we will also need at least one RandSeed and so we will be able to find out the next RandSeeds, in such way the RNG is beaten.
                            <br><br>
                            Now let's say we DO have the 2 constants and we know that the RandSeed for a particular spin is for instance 53478.
                            <br><br>
                            So c1=84783, c2=4236381 and RandSeed1=53478. Making the calculations we will know that RandSeed2=243294359.
                        </p>
                        <br>
                        <ul class="list-unstyled list-icon my-5">
                            <li class="mb-3 text-danger"> <i class="fa fa-arrow-right" aria-hidden="true"></i> And what do we have with THIS? So we have the RandSeed, and what of it?</li>
                        </ul>
                        <p >We need the number that will land (for the roulette game).
                            <br><br>
                            That's why here comes the next question.
                        </p>
                        <ul class="list-unstyled list-icon my-5">
                            <li class="mb-3 text-danger"> <i class="fa fa-arrow-right" aria-hidden="true"></i> How is the number formed from the RandSeed?</li>
                        </ul>
                        <p >There were some people who were stating that the outcome
                            (the number for the roulette game) results from “RandSeed mod 37”
                            (since there are 37 possible outcomes as the roulette has 0...36 numbers).
                            This method of obtaining the outcome is very primitive and those, who made it,
                            are really stupid.<br></p><p >At the start I was happy,
                            since I thought that I found a way to beat the RNG. However I didn't succeed.
                            So I knew that the formula is more than just RandSeed mod to 37 or to 53
                            (for the blackjack game). It took me some time to find it .<br></p>
                        <p>So I’ll show you exactly how the number is formed from the RandSeed.
                            L et's say we have currently a RandSeed= 1732545654. Now we’ll make some
                            calculations. Run the Calculator program from Start-&gt; Programs-&gt; Accessories-&gt;
                            Calculator. Then select “Scientific” from “View” menu. Enter the RandSeed number
                            and check the “Bin” radio box.<br></p>
                        <p >So we convert this
                            RandSeed in binary code: &nbsp; 1100111010001001000110001110110<br></p>
                        <p >We remove the last 16 digits and so we obtain the following binary
                            number: &nbsp; 110011101000100<br></p>
                        <p >If the above number has 16
                            digits, then you should remove the FIRST digit of this binary Number.<br></p>
                        <p >Now we convert this binary number in decimal code
                            (check the “Dec” radio box): 26436.<br></p>
                        <p >And 26436 mod 37 = 18</p>
                        <ul class="list-unstyled list-icon my-5">
                            <li class="mb-3 text-danger"> <i class="fa fa-arrow-right" aria-hidden="true"></i>What advantages does this formula give?</li>
                        </ul>
                        <p >This formula involves only binary operations, which are easily executed by the computer. Also this formula removes the weakness given by RandSeed mod 37.
                            <br><br>
                            You should notify that the RandSeeds 1732545654 and 1732545655 give the same outcome,
                            because we remove the last 16 binary digits. And not only the next RandSeed
                            but also a group of 65536 (2^16) RandSeeds would give the same outcomes in
                            the casino. This means that a new outcome comes at every group of 65536
                            RandSeeds. So if the first group of 65536 RandSeeds gives one outcome
                            (let’s say number “23” for the roulette game) then the next group will give
                            an outcome (this is the next number of the first outcome for the roulette game.
                            For our example, it is the number “24”).
                            <br>
                        </p>
                        <p>
                            So the question is how the RandSeed passes from one group to another.
                            Knowing this it will result in beating again the RNG, as we will know
                            which group of RandSeeds is the next one and thus the outcome in roulette.
                            <br>
                        </p>
                        <p >
                            So we already know the formula used to transform the RandSeed in the outcome
                            given to you by the casino’s server. So all we need is to have those RandSeeds
                            and we can safely predict the outcome. This is where we will make the research now.
                            As we see, this simple formula is good enough to give random numbers.
                        </p>
                        <ul class="list-unstyled list-icon my-5">
                            <li class="mb-3 text-danger"> <i class="fa fa-arrow-right" aria-hidden="true"></i>But what does it mean good enough?
                                What properties should have this formula?</li>
                        </ul>
                        <p >Why it has to be exactly this one? We are going to answer at these questions referring again to the formula:
                        </p>
                        <p >RandSeed (n) = ((c1*RandSeed (n-1)) + c2) mod M</p>
                        <p >There were many proposals before this formula appeared. The main idea was to find
                            out the formula which would get each RandSeed once and after the last RandSeed it would
                            start with the initial startup RandSeed.
                            <br>
                        </p>
                        <p >
                            This is what I named a Good RNG. Suppose we have 10
                            <br>
                            RandSeeds: 0 1 2 3 4 5 6 7 8 9.
                            <br>
                            A good RNG is 2 4 8 0 1 3 5 7 9 2 4...
                            <br>
                        </p>
                        <p >A good RNG will make a circle where each RandSeed has its own place in it. Consider the RNG circle like a roulette wheel.
                        </p>
                        <ul class="list-unstyled list-icon my-5">
                            <li class="mb-3 text-danger"> <i class="fa fa-arrow-right" aria-hidden="true"></i>Does it matter
                                what values we take for the constants?</li>
                        </ul>
                        <p >Well, for example, if c1 is a divisor of 5 or an even number then this
                            formula will not make a circle. The second constant should not be “0” or “1”.
                            The c2 constant generally is a big number. The other properties of c1 and c2
                            are mentioned on the first chapter. So, as you see here is a bit of work before
                            making the RNG.
                            <br>
                        </p>
                        <p >
                            ALL the online casinos are based on this RNG formula. The diffe rence between them is these 2 constants.
                            Now let me tell you one thing. Knowing these 2 constants, it results in having the outcome for any game of the online casino.
                            Anyway the transformation of the Randseed in the outcome also depends on the game played. For example, we use the same formula
                            both for the blackjack and for the roulette game, but for the blackjack we have “RandSeed mod to the number of cards” .
                            <br>
                        </p>
                        <h6 class="text-center text-info">Knowing the RNG and some outcomes, we can find all the next outcomes in a few minutes.</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pos-r section-for-text mt-3">
        <div class="container">
            <div class="row text-center ">
                <div class="col-lg-12 col-md-12 mt-5 mx-2 border-text d-flex flex-column align-items-center">
                    <h2 class="title">        RNG BEATING THE CASINOS     </h2>
                    <div class="p-3 text-left">
                        <div class="box-contents">
                            <p class="text-center">There are many methods of beating the casinos. In this edition, I present two of them</p>
                            <p > <span class="text-theme" ><i class="fa fa-arrow-right" aria-hidden="true"></i></span> &nbsp; <span class="text-black"> First Method: </span> Is to go directly to the casino servers and take those 2 constants from there. Actually we don’t take the algorithm or something like this. You should know that there is an algorithm for generating the RandSeeds and sending them to the other algorithm, where the outcomes are obtained. </p>
                            <p > <span class="text-theme" ><i class="fa fa-arrow-right" aria-hidden="true"></i></span> &nbsp; <span class="text-black"> Second Method: </span> The second Method is making the outcomes depending on the game played. So actually, what we need is to intercept the RandSeed while it is sent from the first algorithm to the second one. We need just 3 or 4 RandSeeds in order to find out the Constants. </p>
                            <br><h6  class="text-center text-info"> This seems impossible, but it was already done <span  class="text-theme">By roulette syllabus. <br><br></span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

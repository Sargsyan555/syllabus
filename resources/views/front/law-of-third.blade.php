@extends('layouts.base')

@section('title', 'Low Of Third')

@section('content')
    <!-- low of third -->
    <section class="pos-r section-for-text mt-3">
        <div class="container">
            <div class="row text-center ">
                <div class="title-effect title-effect-2">
                    <div class="ellipse"></div><i class="la la-info"></i>
                </div>
                <div class="col-lg-12 col-md-12 mt-5 mx-2 border-text d-flex flex-column align-items-center">
                    <h2 class="title">   THE LAW OF THIRD  </h2>
                    <div class="p-3 text-left">
                        <br><p >The "law of the third" as observed and named by the roulette players is that approximately 1/3 of x (x = 37 for European roulette and x = 38 for American roulette) different numbers do not appear within x consecutive outcomes associated with a repeated random activity in quick succession, with replacement.
                            <br><br>
                        </p>
                        <p >
                            After an extensive and a rigorous testing, the generic equation underlying this observation had been empirically established that if numbers are drawn x times from x different numbers with replacement, only y = 0.6291x + 0.2402 distinct numbers will be present among the x numbers drawn. Numbers ranging from 01 to 50 have been tested in the process of deriving the above generic equation.
                            <br><br><span id="run"></span>
                        </p>
                        <p >
                            Each number had been tested 30 times with replacement and the average of distinct numbers present over the 30 data samples corresponding to each number (ranging from 01 to 50) were used as inputs in a regression analysis to establish the above equation. the best-estimated rounded-up y value is termed as cologne’s value .
                            <br><br>
                        </p>
                        <p >
                            When 30 data samples comprising 37 consecutive spins in each sample taken from European roulette tables in real and internet casinos using all three modes of spinning such as live, auto and computer simulated were analyzed, majority of the data samples had 24 distinct numbers and the average number of distinct numbers per data sample was also found to be 24. if x is equated either to 37 or to 38 in the above equation, the rounded up whole number pertaining to y value becomes 24 .
                            <br><br>
                        </p>
                        <p >
                            The most significant practical implication of this equation is that it enables predictability of occurrence of immediate future outcomes based on the past observations in repeated random events with replacement, which are perceived to be independent. for example, in European roulette, if the last 24 numbers are observed and if it contains 20 distinct numbers, such numbers should repeat approximately 9 times within the next 13 consecutive events and only 4 out of 13 remaining non-occurred numbers are likely to occur within the same 13 consecutive events.
                            <br><br>
                        </p>
                        <p >
                            With the discovery of the mathematical equation of the law of the third, the conventional wisdom in regard to randomness with replacement pertaining to equally probable likely outcomes perceived to be independent holds only until the activity is repeated y times with replacement in quick succession .
                            <br><br>
                        </p>
                        <p >
                            The moment the availability of past records becomes greater or equal to the cologne’s value (y), the probability of the next number to occur becomes dependent on the number of distinct numbers present (assumed to be n) within the y number of past records. as elaborated in the chapter above where x = 37, y = 24 and n = 20, only 4 (= y – n) out of 17 (= x – n) numbers which are not among the 20 (n) distinct numbers are likely to occur within the next 13 (= x – y) consecutive events .
                            <br><br>
                        </p>
                        <p >
                            Therefore, within the next x – y forthcoming consecutive events to be repeated in quick succession, the probability of occurrence of a number which does not belong to the n distinct numbers within the past y consecutive spins is (y – n) / (x – n). Under the old assumption of the events being independent, such probability would have been 13/37 ((x – y) / x) instead of 4/17.
                            <br><br>
                        </p>
                        <p >
                            Similarly, any number included in the 20 (n) distinct numbers found within the last 24 (= y) past outcomes have to repeat 9 ((x – y) – (y – n)) times, within the next 13 (x – y) consecutive events, in order to maintain the colonne's value for 37 consecutive spins.
                            <br><br>
                        </p>
                        <p >
                            Thus, the probability of a number among the n distinct numbers within the y past outcomes occurring within the next x – y forthcoming consecutive events is 9/20 ((x – 2y + n) / n), in contrast to the 13/37 probability under the old assumption.
                            <br><br>
                        </p>
                        <p >
                            This implies that after reaching the availability of y past outcomes, the probability of occurrence of a number which is not included in n distinct numbers at the next event is (y – n) / ((x – n)*(x – y)) and the probability of occurrence of a number which is among the n distinct numbers at the next event is (x – 2y + n) /((n*(x – y)), against the conventional wisdom of 1/x .
                            <br><br>
                        </p>
                        <p >
                            Also, such probabilities could vary from event to event as the n value can change from event to event.
                            <br><br>
                        </p>
                        <p >
                            Also, the precision accuracy of the gradient (m = 0.6291) and the interception (c = 0.2402) is not significant in regard to making decisions based on the law of the third, as only positive integers are used as y value for such purposes in reality and the variation could only be either +1 or -1, in integer terms. as the x value becomes higher, the impact arising from the variation becomes further insignificant to make decisions .
                            <br><br>
                        </p>
                        <p >
                            Also, there always can be marginal deviations and exceptions that could occur in regard to the probabilities defined above from a practical perspective, the concept of arc elasticity of demand in micro economics can be emulated in the new paradigm of randomness with replacement as an arc probability coming into effect pertaining to the (x – y) forthcoming events, provided that a minimum of y past records are available. Also, the equation underlying the law of the third being generic, it can be emulated into many other areas such as dice games and lotteries.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- low of third end -->
@endsection

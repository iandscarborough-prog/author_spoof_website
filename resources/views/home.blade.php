@extends('layouts.main')

@section('content')
    <div class="home_content text-white">
        <div class="container-fluid p-5 text-center">
            <div id="main_name_block">
                <h1>S.F. Cadmean</h1>
                <h2>Writer of funny fantasy and silly science fiction</h2>
            </div>
        </div>

        <div class="mt-5">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <p>Cadmean's most famous work would is Kobold Conquerors. A funny story of a pair of some of fantasy's weakest monsters taking on big challenges and coming out on top.</p>
                </div>
                <div class="col-sm-4">
                    <p>A new work is soon to be on its way. Money Bugs is a Sci-fi comedy. It features an overworked alien, jumping from scheme to hair-brained scheme to get rich quick.</p>
                </div>
            </div>
        </div>
        <div id="main_page_buffer_1" class = "fade_to_black">
        </div>
        <div class="black_background">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <img src="/images/bugs_title.png">
                </div>
                <div class="col-sm-4">
                    <h2>Money Bugs</h2>
                    <p>Coming Soon</p>
                    <p>Dalloh, the least successful son of a self-made galactic-class tycoon, has spent his life chasing an inheritance that is always just barely out of his reach.</p>
                    <p>His fortune has escaped his grasp in a hundred ways, sometimes even literally crawling away. But this time he has a new plan that might just work.</p>
                </div>
            </div>

            <div id="main_bottom_section">
                <div class="row justify-content-center">
                    <div class="col-sm-4 text-center">
                        <h2>More Books</h2>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <img src="/images/crypt_title.png" height="524px" width="365px">
                        </div>
                        <div class="col-sm-4">
                            <img src="/images/towerpictitle.png" height="524px" width="365px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

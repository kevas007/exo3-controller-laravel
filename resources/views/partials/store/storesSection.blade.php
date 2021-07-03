<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">{{$heure->sp1}}</span>
                        <span class="section-heading-lower">{{$heure->sp2}}</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$tim->li1}}
                            <span class="ml-auto"> {{$tim->sp3}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$tim->li2}}
                            <span class="ml-auto"> {{$tim->sp4}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$tim->li4}}
                            <span class="ml-auto"> {{$tim->sp4}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$tim->li5}}
                            <span class="ml-auto"> {{$tim->sp4}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$tim->li6}}
                            <span class="ml-auto"> {{$tim->sp4}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$tim->li7}}
                            <span class="ml-auto"> {{$tim->sp4}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$tim->li8}}
                            <span class="ml-auto"> {{$tim->sp7}}</span>
                        </li>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>{{$tim->p1}}</strong>
                            <br>
                            {{$tim->p2}}
                        </em>
                    </p>
                    <p class="mb-0">
                        <small>
                            <em>{{$tim->p3}}</em>
                        </small>
                        <br>
                        {{$tim->p4}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('img/'.$tim->image)}}" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">{{$tim->sp8}}</span>
                            <span class="section-heading-lower">{{$tim->sp9}}</span>
                        </h2>
                        <p>{{$tim->p3}}</p>
                        <p class="mb-0">{{$tim->p4}}
                            <em>{{$tim->p5}}</em>
                            {{$tim->p6}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

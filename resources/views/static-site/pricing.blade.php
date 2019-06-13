@extends('layouts.app')

@section('styles')
  <style>
    section.pricing {
      background: #9CECFB;
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .pricing .card {
      border: none;
      border-radius: 1rem;
      transition: all 0.2s;
      box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    }

    .pricing hr {
      margin: 1.5rem 0;
    }

    .pricing .card-title {
      margin: 0.5rem 0;
      font-size: 0.9rem;
      letter-spacing: .1rem;
      font-weight: bold;
    }

    .pricing .card-price {
      font-size: 3rem;
      margin: 0;
    }

    .pricing .card-price .period {
      font-size: 0.8rem;
    }

    .pricing ul li {
      margin-bottom: 1rem;
    }

    .pricing .text-muted {
      opacity: 0.7;
    }

    .pricing .btn {
      font-size: 80%;
      border-radius: 5rem;
      letter-spacing: .1rem;
      font-weight: bold;
      padding: 1rem;
      opacity: 0.7;
      transition: all 0.2s;
    }

    /* Hover Effects on Card */

    @media (min-width: 992px) {
      .pricing .card:hover {
        margin-top: -.25rem;
        margin-bottom: .25rem;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
      }

      .pricing .card:hover .btn {
        opacity: 1;
      }
    }
  </style>
@endsection

@section('content')
  <!-- Page Content -->
  <section class="pricing py-5 px-5">
    <div class="container">
      <div class="row">
        <!-- <tier> -->
        @foreach($pricing as $price)
          <div class="col-lg-4 mb-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">{{ $price->plan }}</h5>
                <h6 class="card-price text-center">{{ $price->price }}<span
                    class="period"> / Month</span></h6>
                <hr>
                <ul class="fa fa-ul">
                  @foreach($price->details as $detail)
                    <li><span class="fa fa-li">
                        <i class="fa fa-check"></i></span>{{ \App\Models\Website\Pricing::truncate($detail) }}
                    </li>
                  @endforeach
                  {{--<li class="text-muted"><span class="fa fa-li"><i class="fa fa-times"></i></span>Unlimited Private Projects</li>--}}
                </ul>
                <a href="#" class="btn btn-block btn-primary text-uppercase mt-4 mb-2">Buy</a>
              </div>
            </div>
          </div>
      @endforeach
      <!-- </tier> -->
      </div>
    </div>
  </section>
@endsection

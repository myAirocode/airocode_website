<div class="container-fluid bg-primary py-5 mb-5 page-header"  style="
    background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),
                url('{{ asset(!empty($pageBackground) ? 'images/' . $pageBackground : 'img/carousel-1.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    height: 400px; 
     object-fit: cover;
">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">

                {{-- ✅ Page Title (Only last segment) --}}
                @php
                    $segments = Request::segments();
                    $lastSegment = end($segments);
                    $pageHeading = ucwords(str_replace('-', ' ', $lastSegment ?? 'Home'));
                @endphp

                <h3 class="text-white animated slideInDown">
                    {{ $pageHeading }}
                </h3>

                {{-- ✅ Dynamic Breadcrumb --}}
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">

                        {{-- Home link --}}
                        <li class="breadcrumb-item">
                            <a class="text-white" href="{{ url('/') }}">Home</a>
                        </li>

                        {{-- Generate Breadcrumb Items --}}
                        @foreach ($segments as $index => $segment)
                            @php
                                $url = url(implode('/', array_slice($segments, 0, $index + 1)));
                                $name = ucwords(str_replace('-', ' ', $segment));
                            @endphp

                            <li class="breadcrumb-item {{ $loop->last ? 'active text-white' : '' }}"
                                @if ($loop->last) aria-current="page" @endif>
                                @if ($loop->last)
                                    {{-- Last item (active, no link) --}}
                                    {{ $name }}
                                @else
                                    {{-- Previous segments (clickable) --}}
                                    <a class="text-white" href="{{ $url }}">{{ $name }}</a>
                                @endif
                            </li>
                        @endforeach
                    </ol>
                </nav>

            </div>
        </div>
    </div>
</div>

@include('sweetalert::alert')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>{{ $title }}</h1>
    </div><!-- End Page Title -->
    @if ($content)
      @include($content)
    @endif
</main><!-- End #main -->
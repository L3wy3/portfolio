<aside class="col-md-4 blog-sidebar">
  <div class="p-3 mb-3 bg-light rounded">
    <h4 class="font-italic">About</h4>
    <p class="mb-0">I obviously had to take some creative license with the dates of this blog as I couldn't maintain this blog before building it.</p>
  </div>

  <div class="p-3">
    <h4 class="font-italic">Archives</h4>
    <ol class="list-unstyled mb-0">
      @foreach ($archives as $stats)
      <li>
        <a href="/blog/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
          {{ $stats['month'] .' '. $stats['year'] }}
        </a>
      </li>
      @endforeach
    </ol>
  </div>

  <div class="p-3">
    <h4 class="font-italic">Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="#">GitHub</a></li>
      <li><a href="#">Twitter</a></li>
      <li><a href="#">Facebook</a></li>
    </ol>
  </div>
</aside><!-- /.blog-sidebar -->

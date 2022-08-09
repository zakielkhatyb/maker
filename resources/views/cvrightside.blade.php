@if ($data=='one')
          @include('theme.themeone')
        @elseif ($data=='two')
          @include('theme.themetwo')
        @elseif ($data=='three')
          @include('theme.themethree')
        @endif
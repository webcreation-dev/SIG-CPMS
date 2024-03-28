<!DOCTYPE html>
<html lang="en">
    @include('layouts.admin.head')
  <body class="daactive-sidebar">
      <!-- Loader Start-->
        <div class="codex-loader">
          <div class="linespinner"></div>
        </div>
      <!-- Loader End-->
    @include('layouts.admin.header')

    @include('layouts.admin.sidebar')

    @livewire('note-by-student-livewire-controller', ['student' => $student])

    @include("layouts.admin.footer")

</body>
</html>
